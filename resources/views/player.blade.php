<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <title>FaceitElo - PlayerFinder</title>
</head>
<style>
    .google {
        font-family: 'Sora', sans-serif;
    }

    .bg {
        background-color: #1F1F1F;
    }

</style>

<body class="google bg text-white">
    <div>
        <h1 class="text-white text-5xl text-center mt-4"><a href="/">FaceitElo</a></h1>
    </div>
    <div class="mt-8">
        <form class="flex justify-center" method="POST" action="{{ route('getplayer') }}">
            @csrf
            <div class="inline-block">
            <h1 class="text-center text-2xl mt-8">Get stats from a Faceit player :</h1>
            <input class="p-2 rounded-lg ml-4 text-black mt-4" placeholder="Faceit username" type="text" name="playerid">
            <button class="bg-white text-black p-2 rounded-lg ml-8">Get stats</button>
            </div>
        </form>
    </div>
    <div>
        <h1 class="text-2xl text-center mt-6">Example of professionnal players :</h1>
    </div>
    <div class="mt-4 flex justify-center">
        <div class="flex justify-center">
            <div class="inline-block">
            <form method="POST" action="{{route('getplayer')}}">
            @csrf
            <img class="border-2 border-black rounded-lg" width="100" height="100" src="{{ $avatar }}" alt="">
            <div class="flex justify-center">
            <button class="mt-1" name="playerid" value="ZywOo">{{$zywoo}}</button>
            </div>
            </form>
            </div>
        </div>
        <div class="flex justify-center ml-8">
            <div class="inline-block">
            <form method="POST" action="{{route('getplayer')}}">
            @csrf
            <img class="border-2 border-black rounded-lg" width="100" height="100" src="{{ $avatar2 }}" alt="">
            <div class="flex justify-center">
            <button class="mt-1" name="playerid" value="Twistzz">{{$twistzz}}</button>
            </div>
            </form>
            </div>
        </div>
        <div class="flex justify-center ml-8">
            <div class="inline-block">
            <form method="POST" action="{{route('getplayer')}}">
            @csrf
            <img class="border-2 border-black rounded-lg" width="100" height="100" src="{{ $avatar3 }}" alt="">
            <div class="flex justify-center">
            <button class="mt-1" name="playerid" value="nafanyMEOW">{{$nafany}}</button>
            </div>
            </form>
            </div>
        </div>
    </div>
</body>

</html>
