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
    <script src="https://cdn.tailwindcss.com"></script>
    <title>FaceitElo - PlayerFinder</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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
    <div class="flex justify-center mt-4">
        <img src="{{ asset('images/doge.png') }}" height="50" width="75" alt="">
        <h1 class="text-white text-5xl text-center mt-6 mx-2"><a href="/">FaceitElo</a></h1>
        <img src="{{ asset('images/doge.png') }}" height="50" width="75" alt="">
    </div>
    <div class="mt-2 animate__animated animate__swing">
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
        @if($errors->any())
        <h1 class="text-xl text-red-600 text-center mt-2">{{$errors->first()}}</h1>
        @endif
    </div>
    <div>
        <h1 class="text-2xl text-center mt-10">Example of professionnal players :</h1>
    </div>
    <div class="mt-4 flex justify-center">
        <div class="flex justify-center">
            <div class="inline-block">
            <form method="POST" action="{{route('getplayer')}}">
            @csrf
            <img class="border-2 border-black rounded-lg" width="100" height="100" src="https://assets.faceit-cdn.net/avatars/3b536dda-e3dd-40cd-baed-7e66ab050c8f_1550499998143.png" alt="">
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
            <img class="border-2 border-black rounded-lg" width="100" height="100" src="https://assets.faceit-cdn.net/avatars/a51c1404-1c5e-4688-b82c-ade59245e5b1_1612035108594.jpg" alt="">
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
            <img class="border-2 border-black rounded-lg" width="100" height="100" src="https://assets.faceit-cdn.net/avatars/7d441097-f75b-43b0-b0f6-3d1242a0e173_1550538527177.jpg" alt="">
            <div class="flex justify-center">
            <button class="mt-1" name="playerid" value="nafanyMEOW">{{$nafany}}</button>
            </div>
            </form>
            </div>
        </div>
    </div>
    <h1 class="text-2xl text-center mt-6">Last players searched :</h1>
    <div class="mt-4 flex justify-center">
        <div class="flex justify-center">
            <div class="inline-block">
            <form method="POST" action="{{route('getplayer')}}">
            @csrf
            <img class="border-2 border-black rounded-lg" width="100" height="100" src="{{ $avatar4 }}" alt="">
            <div class="flex justify-center">
            <button class="mt-1" name="playerid" value="{{$lastuser}}">{{$lastuser}}</button>
            </div>
            </form>
            </div>
        </div>
        <div class="flex justify-center ml-8">
            <div class="inline-block">
            <form method="POST" action="{{route('getplayer')}}">
            @csrf
            <img class="border-2 border-black rounded-lg" width="100" height="100" src="{{ $avatar5 }}" alt="">
            <div class="flex justify-center">
            <button class="mt-1" name="playerid" value={{$lastuser2}}>{{$lastuser2}}</button>
            </div>
            </form>
            </div>
        </div>
        <div class="flex justify-center ml-8">
            <div class="inline-block">
            <form method="POST" action="{{route('getplayer')}}">
            @csrf
            <img class="border-2 border-black rounded-lg" width="100" height="100" src="{{ $avatar6 }}" alt="">
            <div class="flex justify-center">
            <button class="mt-1" name="playerid" value={{$lastuser3}}>{{$lastuser3}}</button>
            </div>
            </form>
            </div>
        </div>
    </div>
</body>

</html>
