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
    <title>FaceitElo - Match</title>
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
        <a href="/">
            <h1 class="text-white text-5xl text-center mt-4"><a href="/">FaceitElo</a></h1>
        </a>
    </div>
    <div>
        <h1 class="text-lg text-center mt-6">Match id : {{ $matchid }}</h1>
        <h1 class="text-center"><a class="" href="{{ $matchurl }}">Page of the match</a></h1>
    </div>
    <div>
        <h1 class="text-center text-2xl mt-4">{{$scoreexact}}</h1>
    </div>
    <div class="flex justify-center text-2xl">
        <div class="mt-4">
            <div>
                <h1>{{ $team1 }} :</h1>
                <h1>{{ $score1 }}</h1>
            </div>
            <div class="flex mt-4">
                <a href="https://www.faceit.com/en/players/{{ $nickname1 }}"><img class="rounded-lg" width="30"
                        height="100" src="{{ asset('images/faceit.png') }}" alt="faceit"></a>
                <h1 class="ml-4">{{ $nickname1 }}</h1>
            </div>
            <div class="flex mt-2">
                <a href="https://www.faceit.com/en/players/{{ $nickname2 }}"><img class="rounded-lg" width="30"
                        height="100" src="{{ asset('images/faceit.png') }}" alt="faceit"></a>
                <h1 class="ml-4">{{ $nickname2 }}</h1>
            </div>
            <div class="flex mt-2">
                <a href="https://www.faceit.com/en/players/{{ $nickname3 }}"><img class="rounded-lg" width="30"
                        height="100" src="{{ asset('images/faceit.png') }}" alt="faceit"></a>
                <h1 class="ml-4">{{ $nickname3 }}</h1>
            </div>
            <div class="flex mt-2">
                <a href="https://www.faceit.com/en/players/{{ $nickname4 }}"><img class="rounded-lg" width="30"
                        height="100" src="{{ asset('images/faceit.png') }}" alt="faceit"></a>
                <h1 class="ml-4">{{ $nickname4 }}</h1>
            </div>
            <div class="flex mt-2">
                <a href="https://www.faceit.com/en/players/{{ $nickname5 }}"><img class="rounded-lg" width="30"
                        height="100" src="{{ asset('images/faceit.png') }}" alt="faceit"></a>
                <h1 class="ml-4">{{ $nickname5 }}</h1>
            </div>
        </div>
        <div class="mt-4 ml-20">
            <h1>{{ $team2 }} :</h1>
            <h1>{{ $score2 }}</h1>
            <div class="flex mt-4">
                <a href="https://www.faceit.com/en/players/{{ $nickname6 }}"><img class="rounded-lg" width="30"
                        height="100" src="{{ asset('images/faceit.png') }}" alt="faceit"></a>
                <h1 class="ml-4">{{ $nickname6 }}</h1>
            </div>
            <div class="flex mt-2">
                <a href="https://www.faceit.com/en/players/{{ $nickname7 }}"><img class="rounded-lg" width="30"
                        height="100" src="{{ asset('images/faceit.png') }}" alt="faceit"></a>
                <h1 class="ml-4">{{ $nickname7 }}</h1>
            </div>
            <div class="flex mt-2">
                <a href="https://www.faceit.com/en/players/{{ $nickname8 }}"><img class="rounded-lg" width="30"
                        height="100" src="{{ asset('images/faceit.png') }}" alt="faceit"></a>
                <h1 class="ml-4">{{ $nickname8 }}</h1>
            </div>
            <div class="flex mt-2">
                <a href="https://www.faceit.com/en/players/{{ $nickname9 }}"><img class="rounded-lg" width="30"
                        height="100" src="{{ asset('images/faceit.png') }}" alt="faceit"></a>
                <h1 class="ml-4">{{ $nickname9 }}</h1>
            </div>
            <div class="flex mt-2">
                <a href="https://www.faceit.com/en/players/{{ $nickname10 }}"><img class="rounded-lg" width="30"
                        height="100" src="{{ asset('images/faceit.png') }}" alt="faceit"></a>
                <h1 class="ml-4">{{ $nickname10 }}</h1>
            </div>
        </div>
    </div>
</body>

</html>
