<?php

// Create a song class
class Song
{
    // Create songId and title public properties
    public $songId;
    public $title;
}
// Instantiate an "Octopus's Garden" song using the new keyword
$octopusSong = new Song();
$octopusSong->songId = 1;
$octopusSong->title = "Octopus's Garden";
// var_dump and check in the browser
// var_dump($octopusSong);



class Playlist
{
    public $name;
    public $songs = [];

    public function addSong($song) {

        $this->songs[] = $song;
    }
}

// Instantiate a song object of your favorite song
$yellowSubmarine = new Song();
// Set a songId and title
$yellowSubmarine->songId = 2;
$yellowSubmarine->title = 'Yellow Submarine';

$playlist = new Playlist();
$playlist->name = 'Rock!';
$playlist->addSong($octopusSong);
$playlist->addSong($yellowSubmarine);
// Add the song to the Rock playlist
var_dump($playlist->songs);









