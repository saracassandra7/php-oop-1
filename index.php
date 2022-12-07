<?php 

include './class/Movie.php';

$movie1 = new Movie('War of the Worlds', 'Sci-Fi', 2005, 'Steven Spielberg');
$movie2 = new Movie('Fight Club', 'drama', 1999, 'David Fincher');
$movie3 = new Movie('Spirited Away', 'fantasy', 2001, 'Hayao Miyazaki');

$movie1->setPoster("https://m.media-amazon.com/images/M/MV5BNDUyODAzNDI1Nl5BMl5BanBnXkFtZTcwMDA2NDAzMw@@._V1_.jpg");
$movie2->setPoster("https://m.media-amazon.com/images/I/71YFxhhSRPL._SY445_.jpg");
$movie3->setPoster("https://m.media-amazon.com/images/I/71QNcGUE8aL._SL1478_.jpg");

$moviesList = [$movie1, $movie2, $movie3];

var_dump($moviesList);

?>