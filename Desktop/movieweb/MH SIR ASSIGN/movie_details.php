<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="details.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
  <title>WATCH MOVIES</title>
</head>
<body>
  <div class="background">
      <div class="title_bar">
          <p class="movie-name">Movie Name:  <span>Avengers</span> </p>
          <p class="movie-rating">Rating: 9.6</p>
      </div>
  <iframe class="trailer" width="880" height="470" src="videoimages/Spider-Man_ Homecoming - Official Trailer 2 [HD].mmp4"></iframe>
  <div class="a">
    <a href="index.php">BACK</a>
  </div>
  </div>
<script>
    if (localStorage.getItem("MovieToWatch")) {
      }
    const movielistData = localStorage.getItem("objectToPass");
    const movielist = JSON.parse(movielistData);
    const MovieToWatch = localStorage.getItem("MovieToWatch");
      localStorage.removeItem("MovieToWatch");
        const movie = movielist.find(
            (movie) => movie.id === Number(MovieToWatch)
            );
          console.log(movielist);
          console.log(MovieToWatch);
          console.log(movie.movieLink);
    document.querySelector(".movie-name").textContent = String(movie.id);
    document.querySelector(".movie-rating").textContent = movie.movieName;
    document.querySelector(".trailer").setAttribute("src", movie.movieLink);
</script>
  </body>
</html>
