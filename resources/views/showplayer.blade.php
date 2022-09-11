<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
    <div>
        <h1 class="text-white text-5xl text-center mt-4"><a href="/">FaceitElo</a></h1>
    </div>
    <div class="flex justify-center mt-4">
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
</body>

</html>
