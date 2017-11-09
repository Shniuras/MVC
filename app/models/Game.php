<?php

class Game {

    private $db;

    function __construct(Database $db){
        $this->db = $db;
    }

    public function getAllGames(): array
    {
         return $this->db->select("SELECT * FROM stats");
    }

    public function getUserGames(string $username): array
    {
       return $this->db->select("SELECT * FROM stats WHERE username = :username", ["username" => $username]);
    }

    public function getTopWinners(int $count): array
    {
        return $this->db->select("SELECT result, stats.username FROM users
                                       JOIN stats ON users.username = stats.username
                                       GROUP BY result DESC LIMIT :limit", ["limit" => $count]);
    }

    public function getTopPlayers(int $count): array
    {
        return $this->db->select("SELECT username, COUNT(username) AS Occurrence FROM stats
                                      GROUP BY username
                                      ORDER BY Occurrence DESC
                                      LIMIT :limit" , ["limit" => $count]
                                 );
    }
}