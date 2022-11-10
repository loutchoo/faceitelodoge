<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>FaceitElo - Player</title>
</head>
<style>
    .google {
        font-family: 'Sora', sans-serif;
    }

    .bg {
        background-color: #1F1F1F;
    }

</style>

<body class="bg google text-white">
    <div class="flex justify-center mt-4">
        <img src="https://www.pngmart.com/files/11/Shiba-Inu-Doge-Meme-PNG-Image.png" height="50" width="75" alt="">
        <h1 class="text-white text-5xl text-center mt-6 mx-2"><a href="/">FaceitElo</a></h1>
        <img src="https://www.pngmart.com/files/11/Shiba-Inu-Doge-Meme-PNG-Image.png" height="50" width="75" alt="">
    </div>

    <div class="">
        <form class="flex justify-center" method="POST" action="{{ route('getplayer') }}">
            @csrf
            <div class="inline-block">
            <h1 class="text-center text-2xl mt-8">Get stats from a Faceit player :</h1>
            <input class="p-2 rounded-lg ml-4 text-black mt-4" placeholder="Faceit username" type="text" name="playerid">
            <button class="bg-white text-black p-2 rounded-lg ml-8">Get stats</button>
            </div>
        </form>
    </div>
    <div class="flex justify-center mt-8">
        <img class="border-2 border-black rounded-lg" width="100" height="100" src="{{ $avatar }}" alt="">
        <h1 class="text-2xl mt-8 ml-4">{{ $nickname }}</h1><a
            href="https://www.faceit.com/en/players/{{ $nickname }}"><img class="rounded-lg mt-8 ml-2" width="30"
                height="100" src="{{ asset('images/faceit.png') }}" alt="faceit"></a>

    </div>
    <div class="text-center text-4xl flex justify-center">
        <h1 class="mt-8">{{ $elo }} elo</h1>
        @if ($elo > 2001)
            <img class="" width="80" height="80" src="{{ asset('images/lvl10.png') }}" alt="">
        @elseif($elo > 1851)
            <img class="" width="80" height="80" src="{{ asset('images/lvl9.png') }}" alt="">
        @elseif($elo > 1701)
            <img class="" width="80" height="80" src="{{ asset('images/lvl8.png') }}" alt="">
        @elseif($elo > 1551)
            <img class="" width="80" height="80" src="{{ asset('images/lvl7.png') }}" alt="">
        @elseif($elo > 1401)
            <img class="" width="80" height="80" src="{{ asset('images/lvl6.png') }}" alt="">
        @elseif($elo > 1251)
            <img class="" width="80" height="80" src="{{ asset('images/lvl5.png') }}" alt="">
        @elseif($elo > 1101)
            <img class="" width="80" height="80" src="{{ asset('images/lvl4.png') }}" alt="">
        @elseif($elo > 951)
            <img class="" width="80" height="80" src="{{ asset('images/lvl3.png') }}" alt="">
        @elseif($elo > 801)
            <img class="" width="80" height="80" src="{{ asset('images/lvl2.png') }}" alt="">
        @elseif($elo > 1)
            <img class="" width="80" height="80" src="{{ asset('images/lvl1.png') }}" alt="">
        @endif
    </div>
    <div>
        <div class="flex justify-center">
            <h1 class="text-center text-2xl">Winrate : {{$winrate}}%</h1>
            <h1 class="text-center text-2xl ml-4">Matches : {{$matches}}</h1>
            <h1 class="text-center text-2xl ml-4">Average K/D : {{$averagekd}}</h1>
        </div>
        <div class="flex justify-center">
            <h1 class="text-center text-2xl ml-4">Wins : {{$wins}}</h1>
            <h1 class="text-center text-2xl ml-4">Lost : {{$lost}}</h1>
            <h1 class="text-center text-2xl ml-4">Average HS : {{$averagehs}}%</h1>
        </div>
    </div>
</body>

</html>
