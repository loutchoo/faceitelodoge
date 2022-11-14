<?php

namespace App\Http\Controllers;

use App\Models\LastUser;
use Exception;
use Illuminate\Http\Request;
use FaceitClient\FaceitClient;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class PlayerController extends Controller
{
    public function getplayer(Request $request, Exception $exception){
        
        $request = $request->validate([
            'playerid' => 'required'
        ]);

        $username = $request['playerid'];

        $lastusers = LastUser::orderBy('created_at','desc')->take(3)->get();
        if(in_array($username, array($lastusers[0]['username'], $lastusers[1]['username']))){
            //
        } else{
            LastUser::create([
                'username' => $request['playerid']
            ]);
        }

        try {
            $json = Http::withToken('ab5be9e6-efa4-45d0-9c98-004e9c91934c')->get("https://open.faceit.com/data/v4/players?nickname=$username");
            $data = json_decode($json);
            $player_id = $data->player_id;
            $stats = Http::withToken('ab5be9e6-efa4-45d0-9c98-004e9c91934c')->get("https://open.faceit.com/data/v4/players/$player_id/stats/csgo");
            $statsjson = json_decode($stats);
            $nickname = $data->nickname;
            $avatar = $data->avatar;
            $elo = $data->games->csgo->faceit_elo;
            $lvl = $data->games->csgo->skill_level;
            $winrate = $statsjson->lifetime->{'Win Rate %'};
            $matches = $statsjson->lifetime->Matches;
            $wins = $statsjson->lifetime->Wins;
            $lost = $matches - $wins;
            $averagekd = $statsjson->lifetime->{'Average K/D Ratio'};
            $averagehs = $statsjson->lifetime->{'Average Headshots %'};
            
            return view('showplayer')->with([
                'nickname' => $nickname,
                'avatar' => $avatar,
                'elo' => $elo,
                'lvl' => $lvl,
                'winrate' => $winrate,
                'matches' => $matches,
                'averagekd' => $averagekd,
                'wins' => $wins,
                'lost' => $lost,
                'averagehs' => $averagehs,
            ]);
        } catch (Exception $e) {
            LastUser::orderBy('created_at','desc')->take(1)->delete();
            return Redirect::back()->withErrors(['error' => "This faceit account doesn't exist"]);
        }
    }

    public function playerfinder(){
        $lastusers = LastUser::orderBy('created_at','desc')->take(3)->get();
        $lastuser = $lastusers[0]['username'];
        $lastuser2 = $lastusers[1]['username'];
        $lastuser3 = $lastusers[2]['username'];

        $zywoo = "ZywOo";

        $twistzz = "Twistzz";

        $nafany = "nafanyMEOW";

        try {
        $json4 = Http::withToken('ab5be9e6-efa4-45d0-9c98-004e9c91934c')->get("https://open.faceit.com/data/v4/players?nickname=$lastuser");
        $data4 = json_decode($json4);
        $avatar4 = $data4->avatar;
            
        $json5 = Http::withToken('ab5be9e6-efa4-45d0-9c98-004e9c91934c')->get("https://open.faceit.com/data/v4/players?nickname=$lastuser2");
        $data5 = json_decode($json5);
        $avatar5 = $data5->avatar;
            
        $json6 = Http::withToken('ab5be9e6-efa4-45d0-9c98-004e9c91934c')->get("https://open.faceit.com/data/v4/players?nickname=$lastuser3");
        $data6 = json_decode($json6);
        $avatar6 = $data6->avatar;
    } catch (Exception $e) {
        return redirect()->route('getplayer');
    }
            
        return view('player')->with([
            'zywoo' => $zywoo,
            'twistzz' => $twistzz,
            'nafany' => $nafany,
            'lastuser' => $lastuser,
            'lastuser2' => $lastuser2,
            'lastuser3' => $lastuser3,
            'avatar4' => $avatar4,
            'avatar5' => $avatar5,
            'avatar6' => $avatar6,
            ]);


    }
}
