<?php

class dice extends Controller {

    public function index() {

        header("content-type:application/json");

        $game = $this->model('Game');
        $result = $game->getAllGames();

        echo json_encode($result);
    }

    public function myGames() {

        header("content-type:application/json");

        $game = $this->model('Game');
        $result = $game->getUserGames($_SESSION['username']);

        echo json_encode($result);
    }

    public function topWinners() {

        header("content-type:application/json");

        $game = $this->model('Game');
        $result = $game->getTopWinners(3);

        echo json_encode($result);
    }

    public function topPlayers() {

        header("content-type:application/json");

        $game = $this->model('Game');
        $result = $game->getTopPlayers(3);

        echo json_encode($result);
    }

}