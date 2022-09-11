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
    <title>FaceitElo - Home</title>
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
    <div class="mt-8 text-4xl text-center mx-8">
        <a href="/playerfinder">Playerfinder</a>
        <div class="flex justify-center">
            <img class="mt-4 rounded-lg" src="{{ asset('images/faceitprofile.PNG') }}" alt="">
        </div>
        <div class="mt-4 mb-8">
            <a href="/matchfinder">MatchFinder</a>
            <div class="flex justify-center">
                <img class="mt-4 rounded-lg" src="{{ asset('images/faceitmatch.PNG') }}" alt="">
            </div>
        </div>
    </div>
</body>

</html>