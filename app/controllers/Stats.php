<?php

class Stats extends Controller {

public function index() {

    $game = $this->model("Game");

    $data['title'] = "CA Dice Game";
    $data['header'] = "My Stats";
    $data['body'] = "This is all my game Stats!";
    $data['my_stats'] = $game->getUserGames('Antanas');

    $this->view("stats/index", $data);
}

public function top() {

    $data['title'] = "CA Dice Game";
    $data['header'] = "Top Players";
    $data['body'] = "Here we have a list of our TOP gamers";

    $this->view("stats/tops", $data);
}
}