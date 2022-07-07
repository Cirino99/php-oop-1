<?php
class Movie
{
    public $name;
    public $genre;
    public $movie_director;
    public $actors = [];

    function __construct(string $_name, string $_genre)
    {
        $this->name = $_name;
        $this->genre = $_genre;
    }

    public function setMovieDirector(string $_movie_director)
    {
        $this->movie_director = $_movie_director;
    }

    public function addActor(string $actor)
    {
        $this->actors[] = $actor;
    }

    public function getActor()
    {
        echo '<ul>';
        foreach ($this->actors as $actor) {
            echo "<li> $actor </li>";
        }
    }
}

$star_wars = new Movie('Star Wars', 'space opera');
$star_wars->setMovieDirector('George Lucas');
$star_wars->addActor('Liam Neeson');
$star_wars->addActor('Ewan McGregor');
$star_wars->addActor('Natalie Portman');

$indiana_jones = new Movie('Indiana Jones', 'Adventure');
$indiana_jones->setMovieDirector('Steven Spielberg');
$indiana_jones->addActor('Harrison Ford');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <div>
            <h2><?= $star_wars->name ?></h2>
            <span><?= $star_wars->genre ?></span>
            <br>
            <span><?= $star_wars->movie_director ?></span>
            <?php $star_wars->getActor(); ?>
        </div>
        <div>
            <h2><?= $indiana_jones->name ?></h2>
            <span><?= $indiana_jones->genre ?></span>
            <br>
            <span><?= $indiana_jones->movie_director ?></span>
            <?php $indiana_jones->getActor(); ?>
        </div>
    </main>
</body>

</html>