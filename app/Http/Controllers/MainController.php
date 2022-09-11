<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FaceitClient\FaceitClient;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function matchfinder(){
        return view('match');
    }

    public function playerfinder(){
        return view('player');
    }

    public function getmatch(Request $request){
        $json = Http::withToken('ab5be9e6-efa4-45d0-9c98-004e9c91934c')->get("https://open.faceit.com/data/v4/matches/$request->matchid");
        $data = json_decode($json);
        $matchid = $data->match_id;

        $json2 = Http::withToken('ab5be9e6-efa4-45d0-9c98-004e9c91934c')->get("https://open.faceit.com/data/v4/matches/$request->matchid/stats");
        $data2 = json_decode($json2);

        $kills1 = ($data2->rounds[0]->teams[0]->players[0]->player_stats->Kills);
        $kills2 = ($data2->rounds[0]->teams[0]->players[1]->player_stats->Kills);
        $kills3 = ($data2->rounds[0]->teams[0]->players[2]->player_stats->Kills);
        $kills4 = ($data2->rounds[0]->teams[0]->players[3]->player_stats->Kills);
        $kills5 = ($data2->rounds[0]->teams[0]->players[4]->player_stats->Kills);
        $kills6 = ($data2->rounds[0]->teams[1]->players[0]->player_stats->Kills);
        $kills7 = ($data2->rounds[0]->teams[1]->players[1]->player_stats->Kills);
        $kills8 = ($data2->rounds[0]->teams[1]->players[2]->player_stats->Kills);
        $kills9 = ($data2->rounds[0]->teams[1]->players[3]->player_stats->Kills);
        $kills10 = ($data2->rounds[0]->teams[1]->players[4]->player_stats->Assists);
        $Assist1 = ($data2->rounds[0]->teams[0]->players[0]->player_stats->Assists);
        $Assist2 = ($data2->rounds[0]->teams[0]->players[1]->player_stats->Assists);
        $Assist3 = ($data2->rounds[0]->teams[0]->players[2]->player_stats->Assists);
        $Assist4 = ($data2->rounds[0]->teams[0]->players[3]->player_stats->Assists);
        $Assist5 = ($data2->rounds[0]->teams[0]->players[4]->player_stats->Assists);
        $Assist6 = ($data2->rounds[0]->teams[1]->players[0]->player_stats->Assists);
        $Assist7 = ($data2->rounds[0]->teams[1]->players[1]->player_stats->Assists);
        $Assist8 = ($data2->rounds[0]->teams[1]->players[2]->player_stats->Assists);
        $Assist9 = ($data2->rounds[0]->teams[1]->players[3]->player_stats->Assists);
        $Assist10 = ($data2->rounds[0]->teams[1]->players[4]->player_stats->Assists);
        $Death1 = ($data2->rounds[0]->teams[0]->players[0]->player_stats->Deaths);
        $Death2 = ($data2->rounds[0]->teams[0]->players[1]->player_stats->Deaths);
        $Death3 = ($data2->rounds[0]->teams[0]->players[2]->player_stats->Deaths);
        $Death4 = ($data2->rounds[0]->teams[0]->players[3]->player_stats->Deaths);
        $Death5 = ($data2->rounds[0]->teams[0]->players[4]->player_stats->Deaths);
        $Death6 = ($data2->rounds[0]->teams[1]->players[0]->player_stats->Deaths);
        $Death7 = ($data2->rounds[0]->teams[1]->players[1]->player_stats->Deaths);
        $Death8 = ($data2->rounds[0]->teams[1]->players[2]->player_stats->Deaths);
        $Death9 = ($data2->rounds[0]->teams[1]->players[3]->player_stats->Deaths);
        $Death10 = ($data2->rounds[0]->teams[1]->players[4]->player_stats->Deaths);
        $KD1 = ($data2->rounds[0]->teams[1]->players[4]->player_stats);
        dd($KD1);
        


        // $rounds = ($data2->rounds->teams->team_stats->{'Final Score'});

        $team1 = ($data->teams->faction1->name);
        $team2 = ($data->teams->faction2->name);

        $nickname1 = ($data->teams->faction1->roster[0]->nickname);
        $nickname2 = ($data->teams->faction1->roster[1]->nickname);
        $nickname3 = ($data->teams->faction1->roster[2]->nickname);
        $nickname4 = ($data->teams->faction1->roster[3]->nickname);
        $nickname5 = ($data->teams->faction1->roster[4]->nickname);
        $nickname6 = ($data->teams->faction2->roster[0]->nickname);
        $nickname7 = ($data->teams->faction2->roster[1]->nickname);
        $nickname8 = ($data->teams->faction2->roster[2]->nickname);
        $nickname9 = ($data->teams->faction2->roster[3]->nickname);
        $nickname10 = ($data->teams->faction2->roster[4]->nickname);

        $matchurl = "https://www.faceit.com/en/csgo/room/$matchid/scoreboard";

        $score1 = ($data->results->score->faction1);
        $score2 = ($data->results->score->faction2);

        return view('showmatch')->with([
            'matchid' => $matchid,
            'nickname1' => $nickname1,
            "nickname2" => $nickname2,
            "nickname3" => $nickname3,
            "nickname4" => $nickname4,
            "nickname5" => $nickname5,
            "nickname6" => $nickname6,
            "nickname7" => $nickname7,
            "nickname8" => $nickname8,
            "nickname9" => $nickname9,
            "nickname10" => $nickname10,
            'team1' => $team1,
            'team2' => $team2,
            'matchurl' => $matchurl,
            'score1' => $score1,
            'score2' => $score2,
            'data2' => $data2,
        ]);

    }

    public function getplayer(Request $request){
        $json = Http::withToken('ab5be9e6-efa4-45d0-9c98-004e9c91934c')->get("https://open.faceit.com/data/v4/players?nickname=$request->playerid");
        $data = json_decode($json);

        $nickname = $data->nickname;
        $avatar = $data->avatar;
        $elo = $data->games->csgo->faceit_elo;
        $lvl = $data->games->csgo->skill_level;

        
        return view('showplayer')->with([
            'nickname' => $nickname,
            'avatar' => $avatar,
            'elo' => $elo,
            'lvl' => $lvl,
        ]);
    }
}