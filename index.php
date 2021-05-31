<!DOCTYPE php>
<php lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="https://www.mcdonalds.com/content/dam/usa/nfl/assets/nav/arches-logo_108x108.jpg" alt="" width="140" height="100" class="d-inline-block align-top">
              
            </a>
          </div>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutourfood.php">Aboutus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.php">SignUp</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
      

  <div class="container">
      <div class="row">
          <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
              <table class="table table-borderless">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://wallpapercave.com/wp/wp3732366.jpg" class="d-block w-100" alt="..." width="200" height="500">
                        <div class="carousel-caption d-none d-md-block">
                          <h1>McDonald's</h1>
                          
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="https://www.incimages.com/uploaded_files/image/1920x1080/getty_622158818_2000145820009280150_403420.jpg" class="d-block w-100" alt="..." width="200" height="500">
                        <div class="carousel-caption d-none d-md-block">
                          <h1>McDonald's</h1>
                           </div>
                      </div>
                      <div class="carousel-item">
                        <img src="https://content.fortune.com/wp-content/uploads/2014/11/103060861.jpg" class="d-block w-100" alt="..." width="200" height="500">
                        <div class="carousel-caption d-none d-md-block">
                          <h1>McDonald's</h1>
                           </div>
                      </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

              </table>
            </div>
      </div>
  </div>
  <div class="container">
      <div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">

        </div>
          <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            
            <table class="table table-borderless">
                <tr>
                    <td></td>
                    <td><h1> <span class="badge bg-warning">Login</span></h1>
                  </tr>
                       <tr>
                          <td><center style="font-family:cursive; font-size:20px;color:Dark;">Username</center></td>
                           <td><input type="text" class="form-control"></td>
                       </tr>
                       <tr>
                           <td><center style="font-family:cursive; font-size:20px;color:Dark;">Password</center></td>
                           <td><input type="text" class="form-control"></td>
                       </tr>
                       <tr>
                           <td></td>
                           <td><button class="btn btn-success">Submit</button></td>
                       </tr>
            </table>
          </div>
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">

            </div>
          </div>
      </div>
  </div>
  
 <br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</php>