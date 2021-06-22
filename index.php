<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:ital@1&family=Truculenta:wght@500&display=swap" rel="stylesheet">
 
</head>
<body>
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Abhay</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">contact us</a>
        </li>
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cc3.jpg" alt="Los Angeles" width="1100" height="510">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/c.jpg" alt="Chicago" width="1100" height="510">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cc11.jpg" alt="New York" width="1100" height="510">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>  
      
      </div>  
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <div class="py-5">
    <h3 class="text-center"> About</h3>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="images/z.jpg" class="rounded-circle aboutimg" alt="Cinque Terre" width="404" height="370"> 
      </div>
        <div class="col-lg-6 col-md-6 col-12">
        <h2 class="diplay-5">I am Abhay</h2>
        <p class="py-5">A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea.</p>
        <a href="about.php" class="btn btn-success">check more</a>
      </div>
    </div>
  </div>
</section>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center"> Our Services</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-12">
        <div class="card">
          <img class="card-img-top" src="images/p1.jpg" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">John Doe</h5>
            <p class="card-text">Some example text.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-12">
        <div class="card">
          <img class="card-img-top" src="images/p1.jpg" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">John Doe</h5>
            <p class="card-text">Some example text.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-12">
        <div class="card">
          <img class="card-img-top" src="images/p1.jpg" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">John Doe</h5>
            <p class="card-text">Some example text.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-12">
        <div class="card">
          <img class="card-img-top" src="images/p1.jpg" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">John Doe</h5>
            <p class="card-text">Some example text.</p>
          </div>
        </div>
      </div>


    </div>
  </div>


</section>




<section class="my-5">
  <div class="py-5">
    <h2 class="text-center"> Our Services</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="useinfo.php" method="post">
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="user" autocomplete="off" class="form-control" required>
    </div>
      
       <div class="form-group">
      <label>Email Id</label>
      <input type="email" name="email" autocomplete="off" class="form-control" required>
    </div>

       <div class="form-group">
      <label>Mobile</label>
      <input type="number" name="mobile" autocomplete="off" class="form-control" required>
    </div>

      <div class="form-group">
      <label>Comments</label>
      <textarea class="form-control" name="comments">
        
      </textarea></div> <br>

<button type="submit" class="btn btn-success">Submit</button>
</form>
      
    </div>
  </div>
  
 </section>
 <footer>
   <p class="p-3 bg-dark text-center text-white">abhaypatel2004@gmail.com
 </footer>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> 