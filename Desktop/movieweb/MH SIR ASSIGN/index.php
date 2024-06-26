<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"/>
  <title>ASSIGNMENT</title>
  </head>
  <body>
    <div class="back">
      <div class="backvideo">
        <video autoplay loop muted plays-inline class="backvideo">
          <source src="videoimages/videoplayback (online-video-cutter.com) - Copy.mp4" type="video/mp4 "/>
        </video>
      </div>
  <nav>
      <ul>
          <li><a href="index.html">HOME</a></li>
          <li><a href="explore.html">MOVIES</a></li>
          <li><a href="explore.html">POPULAR</a></li>
          <li><a href="login.html">SIGN/UP</a></li>
      </ul>
  </nav>
  <div class="head">
        <h1>WATCH ANY <span>MOVIES</span> FOR FREE!</h1>
        <button><a href="explore.html">EXPLORE</a></button>
  </div>
  </div>
  <div class="movielist">
      <h2>BEST MOVIES</h2>
    <div class="row">
        <div class="col-6 col-md-2 movie" id="1">
          <img src="videoimages/avenger.webp" alt="" />
          <a onclick="clicked()" href="movie_details.html">WATCH</a>
        </div>
        <div class="col-6 col-md-2 movie" id="2">
          <img src="videoimages/runway-34-poster.webp" alt="" />
          <a onclick="clicked()" href="movie_details.html">WATCH</a>
        </div>
        <div class="col-6 col-md-2 movie" id="3">
          <img src="videoimages/kashmiri.jpg" alt="" />
          <a onclick="clicked()" href="movie_details.html">WATCH</a>
        </div>
        <div class="col-6 col-md-2 movie" id="4">
          <img src="videoimages/onepie.jpg" alt="" />
          <a href="movie_details.html">WATCH</a>
        </div>
        <div class="col-6 col-md-2 movie" id="5">
          <img src="videoimages/got.webp" alt="" />
          <a href="movie_details.html">WATCH</a>
        </div>
        <div class="col-6 col-md-2 movie" id="6">
          <img src="videoimages/kgf.webp" alt="" />
          <a href="movie_details.html">WATCH</a>
        </div>
    </div>
  </div>
  <div class="video"></div>
    <div class="tophit">
      <div class="details">
        <h2 id="hhead">TOP HIT</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, labore soluta! A, <br>omnis ea! Amet accusantium inventore tempora eligendi, <br>
          sunt <span>tenetur error ad modi praesentium sequi. Temporibus molestiae exercitationem fuga?<br>
          sunt tenetur error </span>ad modi praesentium sequi. Temporibus molestiae exercitationem fuga?<br>
          sunt tenetur error ad modi praesentium sequi. Temporibus molestiae exercitationem fuga?<br>
        </p>
      </div>
      <div class="videotophit">
        <iframe width="620" height="415" src="videoimages/Spider-Man_ Homecoming - Official Trailer 2 [HD]n.mp4 " >
        </iframe>
      </div>
    </div>
  <div class="search">
      <form action="search">
        <h2>Find your movies</h2>
        <input type="text" id="searchbar" onkeyup="search_movie()">
        <a onclick="display()" href="movie_details.html">SEARCH</a>
        <h1 style="color: white; text-align: center;" id="displaytext"></h1>
      </form>
  </div>  
  <script>
    function display(){
        te=document.getElementById("searchbar").value 
        document.getElementById("displaytext").innerHTML=te
      }
    function clicked(){
        alert("please sign in")
        window.location.href="explore.html";
      }
  </script>
  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous">
  </script>
  <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous">
  </script>
  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous">
  </script>
  <script>
      const movielist = [
        {
          id: 1,
          movieName: "Avengers",
          movieLink: "./videoimages/trailer/avenger.mp4",
        },
        {
          id: 2,
          movieName: "Runway34",
          movieLink: "./videoimages/trailer/runway.mp4",
        },
        {
          id: 3,
          movieName: "Kashmiri Files",
          movieLink: "./videoimages/trailer/pandit.mp4",
        },
        {
          id: 4,
          movieName: "One Piece",
          movieLink: "./videoimages/trailer/one piece.mp4",
        },
        {
          id: 5,
          movieName: "Game of thrones",
          movieLink: "./videoimages/trailer/got.mp4"
        },
        {
          id: 6,
          movieName: "KGF 2",
          movieLink:
            "./videoimages/trailer/kgf.mp4",
        },
      ];
localStorage.setItem("objectToPass", JSON.stringify(movielist));
  const list = document.querySelectorAll(".movie");
  console.log(list);
  for (let i = 0; i < list.length; i++) {
      list[i].addEventListener("click", function (event) {
      localStorage.setItem("MovieToWatch", list[i].id);
        });
      }
  </script>
  </body>
</html>
