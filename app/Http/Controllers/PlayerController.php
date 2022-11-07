<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use FaceitClient\FaceitClient;
use Illuminate\Support\Facades\Http;

class PlayerController extends Controller
{
    public function getplayer(Request $request, Exception $exception){
        try {
            $json = Http::withToken('ab5be9e6-efa4-45d0-9c98-004e9c91934c')->get("https://open.faceit.com/data/v4/players?nickname=$request->playerid");
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
            return redirect()->route('getplayer');
        }
    }

    public function playerfinder(){
        $zywoo = "ZywOo";
        $json = Http::withToken('ab5be9e6-efa4-45d0-9c98-004e9c91934c')->get("https://open.faceit.com/data/v4/players?nickname=$zywoo");
        $data = json_decode($json);
        $avatar = $data->avatar;

        $twistzz = "Twistzz";
        $json2 = Http::withToken('ab5be9e6-efa4-45d0-9c98-004e9c91934c')->get("https://open.faceit.com/data/v4/players?nickname=$twistzz");
        $data2 = json_decode($json2);
        $avatar2 = $data2->avatar;

        $nafany = "nafanyMEOW";
        $json3 = Http::withToken('ab5be9e6-efa4-45d0-9c98-004e9c91934c')->get("https://open.faceit.com/data/v4/players?nickname=$nafany");
        $data3 = json_decode($json3);
        $avatar3 = $data3->avatar;
        return view('player')->with([
            'zywoo' => $zywoo,
            'avatar' => $avatar,
            'twistzz' => $twistzz,
            'avatar2' => $avatar2,
            'nafany' => $nafany,
            'avatar3' => $avatar3,
        ]);
    }
}
