<!DOCTYPE html>
<html>
<head>
    <title><?= $data['title']; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
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
        <?= $data['body']; ?>
        <table class="table">
            <?php
            foreach ($data['my_stats'] as $row){
                echo "<tr><td>" . $row['username'] . "</td><td>" . $row['result'] . "</td></tr>";
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>