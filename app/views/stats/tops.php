<!DOCTYPE html>
<html>
<head>
    <title><?= $data['title']; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.js"></script>
    <style>
        .header {
            font-family: 'Oswald', sans-serif;
            background-color: gray;
            color: white;
            padding: 50px 5px 10px 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row header">
        <div class="col">
            <h1><?= $data['header']; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col"><?= $data['body']; ?></div>
    </div>
    <div class="row">
        <div class="col">
            <h3>Top Wins</h3>
            <canvas id="winsChart"></canvas>
        </div>
        <div class="col">
            <h3>Best gamers</h3>
            <canvas id="gamesChart"></canvas>
        </div>
    </div>
</div>
<script src="/MVC-Game/app/views/assets/js/stats.js"></script>
</body>
</html>
