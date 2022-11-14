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
    <title>FaceitElo - MatchFinder</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
    <div class="mt-8">
        <form class="flex justify-center" method="POST" action="{{ route('getmatch') }}">
            @csrf
            <h1 class="text-center text-2xl mt-8">Get data from a Faceit match :</h1>
            <input class="p-2 rounded-lg ml-4 text-black mt-6" placeholder="Match id" type="text" name="matchid">
            <button class="bg-white text-black p-2 rounded-lg ml-8 mt-6">Get data</button>
        </form>
    </div>
</body>

</html>
