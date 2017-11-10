<!DOCTYPE html>
<html>
<head>
    <title><?= $data['title']; ?></title>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
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
</div>
<div class="container">
    <div class="row">
        <div class="col-12 text-center m-2 win-msg">
            <h3 class="text-black" id="win"></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-3 col-sm-3 col-md-3 col-lg-3 mx-auto"><img class="img-fluid image" id="first_dice" src="/MVC/app/views/assets/img/dice/6.png"></div>
        <div class="col-3 col-sm-3 col-md-3 col-lg-3 mx-auto"><img class="img-fluid image" id="second_dice" src="/MVC/app/views/assets/img/dice/6.png"></div>
        <div class="col-3 col-sm-3 col-md-3 col-lg-3 mx-auto"><img class="img-fluid image" id="third_dice" src="/MVC/app/views/assets/img/dice/6.png"></div>
    </div>
    <div class="row ">
        <div class="col-12 text-center my-3">
            <button type="button" class="btn btn-success" id="start_game">Start game</button>
            <button type="button" class="btn btn-success" id="roll_dice" disabled>Roll dice</button>
        </div>
    </div>
    <div class="row">
        <div class="col-8 col-sm-6 col-md-4 col-lg-3 text-center text-black mx-auto my-3 font-weight-bold" id="result">
        </div>
    </div>
</div>
<script src="/MVC/app/views/assets/js/dice.js"></script>
</body>
</html>