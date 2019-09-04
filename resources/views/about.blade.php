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

<!-- New About HTML -->

<div class="wrapper2">
  <div class="letters">
  <span class="letter">S</span>
  <span class="letter">T</span>
  <span class="letter">A</span>
  <span class="letter">Y</span>
  <span class="letter"> </span>
  <span class="letter">I</span>
  <span class="letter">N</span>
  <span class="letter"> </span>
  <span class="letter">T</span>
  <span class="letter">O</span>
  <span class="letter">U</span>
  <span class="letter">C</span>
  <span class="letter">H</span>
  </div>
  </div>



<!-- <div class="heart">&#x2665;</div> -->
  <div class="container">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</div>
<div class="wrapper">
  <ul>
    <li  class="linkedin"><a href="https://www.linkedin.com/in/aryan-gholamlou-8837b8b3/" target="_blank" > <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></li>
    <li  class="instagram"><a href="https://www.instagram.com/Aryan.gates/" target="_blank" ><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></li>
    <li  class="whatsapp"><a href="https://wa.me/+989191155128" target="_blank" ><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></li>
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

/* New About */
.letter {
  left : 37%;
  width: 24px;
  top: 90px;
  display: inline-block;
  vertical-align: middle;
  position: relative;
  overflow: hidden;
  margin: 0 0;
  font-family: sans-serif;
  font-size: 24px;
  font-weight: 600;
  line-height: 24px;
  text-transform: uppercase;
  color: #808080;
}
.letter:before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  word-break: break-all;
  background-color: #1d1f20;
}

.letter:nth-child(1):before {
  content: "9241583067";
  margin-top: -192px;
  -webkit-animation-name: letter1;
          animation-name: letter1;
  -webkit-animation-duration: 3.2s;
          animation-duration: 3.2s;
  -webkit-animation-delay: 0.1s;
          animation-delay: 0.1s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter1 {
  from {
    margin-top: -192px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter1 {
  from {
    margin-top: -192px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(2):before {
  content: "7156092384";
  margin-top: -216px;
  -webkit-animation-name: letter2;
          animation-name: letter2;
  -webkit-animation-duration: 1.656s;
          animation-duration: 1.656s;
  -webkit-animation-delay: 0.54s;
          animation-delay: 0.54s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter2 {
  from {
    margin-top: -216px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter2 {
  from {
    margin-top: -216px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(3):before {
  content: "6182704395";
  margin-top: -144px;
  -webkit-animation-name: letter3;
          animation-name: letter3;
  -webkit-animation-duration: 1.92s;
          animation-duration: 1.92s;
  -webkit-animation-delay: 0.44s;
          animation-delay: 0.44s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter3 {
  from {
    margin-top: -144px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter3 {
  from {
    margin-top: -144px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(4):before {
  content: "9243715086";
  margin-top: -144px;
  -webkit-animation-name: letter4;
          animation-name: letter4;
  -webkit-animation-duration: 1.7485714286s;
          animation-duration: 1.7485714286s;
  -webkit-animation-delay: 0.49s;
          animation-delay: 0.49s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter4 {
  from {
    margin-top: -144px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter4 {
  from {
    margin-top: -144px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(5):before {
  content: "7385160924";
  margin-top: -120px;
  -webkit-animation-name: letter5;
          animation-name: letter5;
  -webkit-animation-duration: 3.2666666667s;
          animation-duration: 3.2666666667s;
  -webkit-animation-delay: 0.02s;
          animation-delay: 0.02s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter5 {
  from {
    margin-top: -120px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter5 {
  from {
    margin-top: -120px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(6):before {
  content: "9472603158";
  margin-top: -144px;
  -webkit-animation-name: letter6;
          animation-name: letter6;
  -webkit-animation-duration: 2.5028571429s;
          animation-duration: 2.5028571429s;
  -webkit-animation-delay: 0.27s;
          animation-delay: 0.27s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter6 {
  from {
    margin-top: -144px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter6 {
  from {
    margin-top: -144px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(7):before {
  content: "4167085239";
  margin-top: -72px;
  -webkit-animation-name: letter7;
          animation-name: letter7;
  -webkit-animation-duration: 1.41s;
          animation-duration: 1.41s;
  -webkit-animation-delay: 0.53s;
          animation-delay: 0.53s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter7 {
  from {
    margin-top: -72px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter7 {
  from {
    margin-top: -72px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(8):before {
  content: "5329768014";
  margin-top: -72px;
  -webkit-animation-name: letter8;
          animation-name: letter8;
  -webkit-animation-duration: 2.76s;
          animation-duration: 2.76s;
  -webkit-animation-delay: 0.08s;
          animation-delay: 0.08s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter8 {
  from {
    margin-top: -72px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter8 {
  from {
    margin-top: -72px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(9):before {
  content: "3205819647";
  margin-top: -216px;
  -webkit-animation-name: letter9;
          animation-name: letter9;
  -webkit-animation-duration: 1.188s;
          animation-duration: 1.188s;
  -webkit-animation-delay: 0.67s;
          animation-delay: 0.67s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter9 {
  from {
    margin-top: -216px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter9 {
  from {
    margin-top: -216px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(10):before {
  content: "8432571096";
  margin-top: -168px;
  -webkit-animation-name: letter10;
          animation-name: letter10;
  -webkit-animation-duration: 0.35s;
          animation-duration: 0.35s;
  -webkit-animation-delay: 0.9s;
          animation-delay: 0.9s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter10 {
  from {
    margin-top: -168px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter10 {
  from {
    margin-top: -168px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(11):before {
  content: "8026714359";
  margin-top: -96px;
  -webkit-animation-name: letter11;
          animation-name: letter11;
  -webkit-animation-duration: 0.384s;
          animation-duration: 0.384s;
  -webkit-animation-delay: 0.88s;
          animation-delay: 0.88s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter11 {
  from {
    margin-top: -96px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter11 {
  from {
    margin-top: -96px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(12):before {
  content: "6198730524";
  margin-top: -96px;
  -webkit-animation-name: letter12;
          animation-name: letter12;
  -webkit-animation-duration: 2.464s;
          animation-duration: 2.464s;
  -webkit-animation-delay: 0.23s;
          animation-delay: 0.23s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter12 {
  from {
    margin-top: -96px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter12 {
  from {
    margin-top: -96px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(13):before {
  content: "2091745386";
  margin-top: -192px;
  -webkit-animation-name: letter13;
          animation-name: letter13;
  -webkit-animation-duration: 2.7733333333s;
          animation-duration: 2.7733333333s;
  -webkit-animation-delay: 0.22s;
          animation-delay: 0.22s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter13 {
  from {
    margin-top: -192px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter13 {
  from {
    margin-top: -20px;
  }
  to {
    margin-top: 70px;
  }
}





/* Heart beat animation */
/* @keyframes beat{
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
} */

</style>

</body>
</html> 
</div>
</main>
</body>
</html>
