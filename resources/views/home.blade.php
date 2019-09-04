<!doctype html>
<html lang="en" class="h-100">
  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <style>
      </style>
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
                  <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
                  <li><a href="/create-form">Create Form</a></li>
                  <li><a href="/about">About US</a></li>
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
<div class="container">
<div class="scroller">
<div class="inner">
<span>USC Form Builder</span>
<span>Created By Aryan</span>
</div>
</div>
</div>
<style>
* {
   margin: 0px;
   padding: 0px;
   font-weight: 200;
   font-family: helvetica neue, helvetica, arial, sans-serif;
  -webkit-font-smoothing: antialiased;
}
body {
   background: #fafafa;
}  

.container {
   width: 70%;
   height: 50px;
   position: fixed;
   top: 20%;
   left: 30%;
   margin-left: -25%;
   margin-top: -25px;
}

p {
   float: left; 
   line-height: 50px;
   font-size: 200%;
   color: #888;
}

.scroller {
   height: 50px;
   line-height: 50px;
   float: left;
   margin-left: 5px;
   overflow: hidden;
}

.scroller span {
   display: block; 
   font-size: 200%;
   color: #000;
}

.scroller .inner {
   -webkit-animation: scroll 6s 1 ease-out;
   -moz-animation: scroll 6s 1 ease-out;
   animation: scroll 6s 1 ease-out;
   -webkit-animation-fill-mode: forwards;
   -moz-animation-fill-mode: forwards;
   animation-fill-mode: forwards;
}


.blue {
   -webkit-animation: color 0.25s 1 linear;
   -moz-animation: color 0.25s 1 linear;
   animation: color 0.25s 1 linear;
   
      -webkit-animation-delay: 8s;
   -moz-animation-delay: 8s;
   animation-delay: 8s;
   
      -webkit-animation-fill-mode: forwards;
   -moz-animation-fill-mode: forwards;
   animation-fill-mode: forwards;
   
}




@-webkit-keyframes color {
   0%  {color: #000;}
   100% {color: #2c90c6;}
}

@-moz-keyframes color {
   0%  {color: #000;}
   100% {color: #2c90c6;}
}

@keyframes color {
   0%  {color: #000;}
   100% {color: #2c90c6;}
}












@-webkit-keyframes scroll {
   11%  {margin-top: 0px;}
   22%  {margin-top: 0px;}
   33%  {margin-top: -50px;}
   44%  {margin-top: -50px;}
   55%  {margin-top: -100px;}
   66%  {margin-top: -100px;}
   77%  {margin-top: -150px;}
   88%  {margin-top: -150px;}
   100% {margin-top: -150px;}
}

@-moz-keyframes scroll {
   11%  {margin-top: 0px;}
   22%  {margin-top: 0px;}
   33%  {margin-top: -50px;}
   44%  {margin-top: -50px;}
   55%  {margin-top: -100px;}
   66%  {margin-top: -100px;}
   77%  {margin-top: -150px;}
   88%  {margin-top: -150px;}
   100% {margin-top: -150px;}
}

@keyframes scroll {
   11%  {margin-top: 0px;}
   22%  {margin-top: 0px;}
   33%  {margin-top: -50px;}
   44%  {margin-top: -50px;}
   55%  {margin-top: -100px;}
   66%  {margin-top: -100px;}
   77%  {margin-top: -150px;}
   88%  {margin-top: -150px;}
   100% {margin-top: -150px;}
}
</style>

</div>
</main>
</body>
</html>

