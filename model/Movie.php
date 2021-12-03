<?php

include 'Connexion.php';

class Movie
{
    private string $name;
    private DateTime $launchedAt;
    private string $type;
    private string $desc;


    public function __construct(string $name, DateTime $launchedAt, string $type, string $desc)
    {
        $this->name = $name;
        $this->launchedAt = $launchedAt;
        $this->type = $type;
        $this->desc = $desc;
    }
}