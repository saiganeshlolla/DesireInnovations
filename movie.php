<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Web Page Design</title>
    <style>
        footer {
            background-color: #252525;
            color: #fff;
            text-align: center;
            padding: 10px;
          }
          .movie-info{
    text-align: center;
    color: #fff;
    padding-top: 3rem;
}
.search-container{
    justify-content: center;
}

/* movie info stylings */
.movie-title{
    font-size: 2rem;
    color: var(--yellow-color);
}
.movie-misc-info{
    list-style-type: none;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    padding: 1rem;
}
.movie-info .year{
    font-weight: 500;
}
.movie-info .rated{
    background-color: var(--yellow-color);
    padding: 0.4rem;
    margin: 0 0.4rem;
    border-radius: 3px;
    font-weight: 600;
}
.movie-info .released{
    font-size: 0.9rem;
    opacity: 0.9;
}
.movie-info .writer{
    padding: 0.5rem;
    margin: 1rem 0;
}
.movie-info .genre{
    background-color: var(--light-dark-color);
    display: inline-block;
    padding: 0.5rem;
    border-radius: 3px;
}
.movie-info .plot{
    max-width: 400px;
    margin: 1rem auto;
}
.movie-info .language{
    color: var(--yellow-color);
    font-style: italic;
}
.movie-info .awards{
    font-weight: 300;
    font-size: 0.9rem;
}
.movie-info .awards i{
    color: var(--yellow-color);
    margin: 1rem 0.7rem 0 0;
}

          
    </style>
    <!-- CSS only -->
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
loadMovies('war');
</script>
</head>
<body>
   

    
    <header>
   <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <img src="logo.png" alt="logo"/>
    <a class="navbar-brand"><b>DESIRE INNOVATIONS</b></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        &emsp;&emsp;&emsp;&emsp;
        <li class="nav-item">
          <a class="nav-link active"  href="index.php" id="navbarPopulationAnalysis"><b>POPULATION ANALYSIS</b></a>
        </li>
        &emsp;&emsp;&emsp;&emsp;
        <li class="nav-item">
          <a class="nav-link active" href="movie.php" id="navbarMoviesList"><b>MOVIES LIST</b></a>
        </li>
        &emsp;&emsp;&emsp;&emsp;
        <li class="nav-item">
          <a class="nav-link active"  href="about.html" id="navbarservices" ><b>ABOUT US</b></a>
        </li>
        &emsp;&emsp;&emsp;&emsp;
        <li class="nav-item">
          <a class="nav-link active" href="contact.html" id="navbarContact Us"><b>CONTACT US</b></a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
</header>
<br><br>
<div class = "wrapper">
        <!-- logo -->
        <div class = "logo">
            
        </div>
        <!-- end of logo -->
        <!-- search container -->
        <div class = "search-container">
            <div class = "search-element">
                <h3>Search Movie:</h3>
                <input type = "text" class = "form-control" placeholder="Search Movie Title ..." id = "movie-search-box" onkeyup="findMovies()" onclick = "findMovies()">
                <br><br>
                <div class = "search-list" id = "search-list">
                    <!-- list here -->
                    <!-- <div class = "search-list-item">
                        <div class = "search-item-thumbnail">
                            <img src = "medium-cover.jpg">
                        </div>
                        <br><br>
                        <div class = "search-item-info">
                            <h3>Guardians of the Galaxy Vol. 2</h3>
                            <p>2017</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- end of search container -->

        <!-- result container -->
        <div class = "container" style="display:flex;">
            <div class = "result-container">
                <div class = "result-grid" id = "result-grid">
                    <!-- movie information here -->
                    <!-- <div class = "movie-poster">
                        <img src = "medium-cover.jpg" alt = "movie poster">
                    </div>
                    <div class = "movie-info">
                        <h3 class = "movie-title">Guardians of the Galaxy Vol. 2</h3>
                        <ul class = "movie-misc-info">
                            <li class = "year">Year: 2017</li>
                            <li class = "rated">Ratings: PG-13</li>
                            <li class = "released">Released: 05 May 2017</li>
                        </ul>
                        <p class = "genre"><b>Genre:</b> Action, Adventure, Comedy</p>
                        <p class = "writer"><b>Writer:</b> James Gunn, Don Abnett, Andy Lanning</p>
                        <p class = "actors"><b>Actors: </b>Chris Pratt, Zoe Saldana, Dave Bautista</p>
                        <p class = "plot"><b>Plot:</b> The Guardians struggle to keep together as a team while dealing with their personal family issues, notably Star-Lord's ecounter with his father the ambitious celestial being Ego.</p>
                        <p class = "language"><b>Language:</b> English</p>
                        <p class = "awards"><b><i class = "fas fa-award"></i></b> Nominated for 1 Oscar</p>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- end of result container -->
    </div>


    <!-- movie app js -->
    <script src = "script.js"></script>

<br><br><br>
<footer>
    <p>Genius is one percent inspiration and ninety-nine percent perspiration.</p>
    <cite title="Source Title">Thomas Edison</cite>
    <p>&copy; 2023 My Web App. All rights reserved.</p>
  </footer>
</body>
</html>