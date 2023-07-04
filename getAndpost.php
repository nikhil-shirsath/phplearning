


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>get and post</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <style>
        .container{
            
            margin : 5% auto;
        }
        .container h1{
            text-align: center;
        }
    </style>

</head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">get post learning</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/first/getAndpost.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){     // this $_SERVER['REQUEST_METHOD'] : THIS FUNCTION IS USED TO CHECK FORM SENDING METHOD EITHER ITS POST OR GET BOTH ARE HTTP REQUESTS
    $email =  $_POST['email'];
    $pass = $_POST['pass'];

    echo '
   
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>SUCESS</strong> Your Email is '.$email.
    'Your Password is : '.$pass.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';

  /**
   * here we will write code for send data to database .
   */
}else{
    echo "  post method is not used .";
}
?>
<div class="container col-12">
    <div class="container col-6">

    </div>
    <div class="col-5 card ">
        <div class="card-body p-5">
        <h1>Enter your email and password</h1>
  <form method="POST" action="getAndpost.php" >
    <div class="mb-3 ">
        <label for="InputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="InputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="pass" name="pass">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="Check1">
        <label class="form-check-label" for="Check1">Check me out</label>
    </div>
    <button type="submit"
    style= "width:100%"
    class="btn  btn-primary">Submit</button>
 </form>
    </div>

</div>
</div>


  </body>
</html>