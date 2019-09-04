<!doctype html>
<html lang="en" class="h-100">
  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous"> 
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </head>
  <body class="d-flex flex-column h-100">
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">USC Forms</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a href="/">Home</a></li>
                  <li><a href="/create-form">Create Form</a></li>
                  <li class="active"><a href="/about">About US <span class="sr-only">(current)</span></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                @auth
                    <li>Hi {{$user->name}}!</li>
                    <li><a href="/logout">Logout</a></li>
                @endauth

                @guest
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                @endguest
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
</header>

<!-- Begin page content -->

<main role="main" class="flex-shrink-0">
<div class="heart">&#x2665;</div>
  <div class="container">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</div>
<div class="wrapper">
  <ul>
    <li  class="linkedin"><a href="https://www.linkedin.com/in/aryan-gholamlou-8837b8b3/" > <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></li>
    <li  class="instagram"><a href="https://www.instagram.com/Aryan.gates/" ><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></li>
    <li  class="whatsapp"><a href="https://wa.me/+989191155128" ><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></li>
  </ul>
</div>

<style>

* {
  margin: 0;
  padding: 0;
}

body {
  background: #FFFFFF;
}

.wrapper {
  position: absolute;
  top: 50%;
  left: 59.5%;
  transform: translate(-50%, -50%);
  width: 550px;
}

.wrapper ul {
  list-style: none;
}

.wrapper ul li {
  width: 75px;
  height: 75px;
  line-height: 75px;
  margin: 0 10px;
  text-align: center;
  cursor: pointer;
  border-radius: 50%;
  border: 5px solid #bab6ff;
  float: left;
  transition: all 0.5s ease;
}

.wrapper ul li .fa {
  color: #D8E2DC;
  margin-top: 20px;
  transition: all 0.5s ease;
}


.wrapper ul li:hover.linkedin {
  border: 5px solid #3b5998;
  box-shadow: 0 0 15px #3b5998;
  transition: all 0.2s ease;

}

.wrapper ul li:hover .fa-linkedin {
  color: #3b5998;
  text-shadow: 0 0 15px #3b5998;
  transition: all 0.2s ease;
}

.wrapper ul li:hover.instagram {

  border: 5px solid #bc2a8d;
  box-shadow: 0 0 15px #bc2a8d;
  transition: all 0.2s ease;
}

.wrapper ul li:hover .fa-instagram {
  color: #bc2a8d;
  text-shadow: 0 0 15px #bc2a8d;
  transition: all 0.2s ease;
}


.wrapper ul li:hover.whatsapp {
  border: 5px solid #4dc247;
  box-shadow: 0 0 15px #4dc247;
  transition: all 0.2s ease;
}

.wrapper ul li:hover .fa-whatsapp {
  color: #4dc247;
  text-shadow: 0 0 15px #4dc247;
  transition: all 0.2s ease;
}

/* Heart beat animation */
@keyframes beat{
	to { transform: scale(1.2); }
}


@media screen and (max-width: 640px){
  .wrapper {
      width: 350px;
  }
  .wrapper ul li{
      margin-top: 10px;
  }
  .wrapper ul li.google{
      margin-left: 60px;
  }
}

@media screen and (max-width: 340px){
  .wrapper {
      width: 150px;
  }
  .wrapper ul li{
      margin:15px;
  }
  .wrapper ul li.google{
      margin-left: 15px;
  }
}

.heart {
  text-align: center; 
  font-size: 150px;
	color: #e00;
	animation: beat .25s infinite alternate;
	transform-origin: center;
}

</style>

</body>
</html> 
</div>
</main>
</body>
</html>
