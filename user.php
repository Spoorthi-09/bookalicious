<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/starter-template/">

    <title>user_profile</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <style>
    .block {
  display: block;
  width: 100%;
  border: none;
  background-color: #4CAF50;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.block:hover {
  background-color: #ddd;
  color: black;
}
</style>
    
    
    

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand em-text" href="#">Bookalicious</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Text books</a></li>
                <li><a href="#">Science fiction</a></li>
                <li><a href="#">Autobiographies</a></li>
                
              </ul>
            </li>
            <li><a href="#">Contact</a></li>
          </ul>
<!--/.search-->
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-search">
                <span class = "glyphicon glyphicon-search"></span>
              </button>
            </form>
            <!--/.nav to right-->
            <ul class = "nav navbar-nav navbar-right">
              <li><a class = "glyphicon glyphicon-shopping-cart" title = "cart" href = "#">
              <span class = "badge bac"></span></a></li><!--badge-->
              <li><a class = "glyphicon glyphicon-user" href = "#">
              <ul class = "dropdown-menu">
              </a></li>
              

              
            </ul>
            

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class = "container">
  <div class = "col-md-4">
    <div class="panel panel-default">
    <div class="panel-heading">Categories</div>
    <div class="panel-body">
      <ul class = "list-group">
        <li class = "list-group-item"><a href = "#">Profile</a><li>
        <li class = "list-group-item"><a href = "#">Orders</a><li>
        <li class = "list-group-item"><a href = "#">Cart</a><li>
        <li class = "list-group-item"><a href = "#">Help</a><li>
        <li class = "list-group-item"><a href = "#">About</a><li>
      </ul>
    </div>
    </div>
  </div>
  <div class = "col-md-8">
    <div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><center>What do you want to do?</center></h3>
    </div>
        <br><br>
        <button class = "block">Sell Books</button>
        <br><br>
        <button class = "block">Buy Books</button>
    

    </div>
  </div>
</div>

    
</body>
</html>