<?php 

include './class/Movie.php';

$movie1 = new Movie('War of the Worlds', ['Sci-Fi', 'Horror'], 2005, 'Steven Spielberg');
$movie2 = new Movie('Fight Club', ['Drama', 'Action'], 1999, 'David Fincher');
$movie3 = new Movie('Spirited Away', ['Fantasy'], 2001, 'Hayao Miyazaki');

$movie1->setPoster("https://m.media-amazon.com/images/M/MV5BNDUyODAzNDI1Nl5BMl5BanBnXkFtZTcwMDA2NDAzMw@@._V1_.jpg");
//$movie2->setPoster("https://m.media-amazon.com/images/I/71YFxhhSRPL._SY445_.jpg");
$movie3->setPoster("https://m.media-amazon.com/images/I/71QNcGUE8aL._SL1478_.jpg");

$moviesList = [$movie1, $movie2, $movie3];

var_dump($moviesList);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    .poster{
      width: 150px;
      height: 150px;
      object-fit: cover;
      object-position: center;
    }
  </style>


  <title>Movies</title>
</head>
<body>

<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Poster</th>
        <th>Genre</th>
        <th>Year</th>
        <th>Director</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($moviesList as $movie) : ?>
        <tr>
          <td><?php echo $movie->title ?></td>
          <td><img class="poster" src="<?php echo $movie->getPoster() ?>" alt="poster"></td>
          <td>
            <?php foreach ($movie->genre as $gen) : ?>
              <?php echo $gen ?><br>
            <?php endforeach; ?>
          </td>
          <td><?php echo $movie->year ?></td>
          <td><?php echo $movie->director ?></td>
        </tr>

      <?php endforeach; ?>
    </tbody>
  </table>
 
</div>
  
</body>
</html>