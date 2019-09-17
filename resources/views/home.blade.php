<!doctype html>
<html lang="en" class="h-100">
  <head>
  <title>Home</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

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
                  <li class="active"><a href="/">خانه <span class="sr-only">(current)</span></a></li>
                  <li><a href="/create-form">فرم ساز</a></li>
                  <li><a href="/about">تماس با ما</a></li>  
                </ul>
                <ul class="nav navbar-nav navbar-right">
                @auth
                    <li>سلام {{$user->name}}!</li>
                    <li><a href="/logout">خروج</a></li>
                @endauth
                @guest
                    <li><a href="/login">ورود</a></li>
                    <li><a href="/register">ثبت نام</a></li>
                @endguest
                </ul>
              </div>
            </div>
          </nav>
</header>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">

<div class="wrapper">
  <div class="letters">
  <span class="letter">U</span>
  <span class="letter">S</span>
  <span class="letter">C</span>
  <span class="letter"> </span>
  <span class="letter">F</span>
  <span class="letter">o</span>
  <span class="letter">r</span>
  <span class="letter">m</span>
  <span class="letter"> </span>
  <span class="letter">B</span>
  <span class="letter">u</span>
  <span class="letter">i</span>
  <span class="letter">l</span>
  <span class="letter">d</span>
  <span class="letter">e</span>
  <span class="letter">r</span>
  <span class="letter"> </span>
  <span class="letter">C</span>
  <span class="letter">R</span>
  <span class="letter">E</span>
  <span class="letter">A</span>
  <span class="letter">T</span>
  <span class="letter">E</span>
  <span class="letter">D</span>
  <span class="letter"> </span>
  <span class="letter">B</span>
  <span class="letter">Y</span>
  <span class="letter"> </span>
  <span class="letter">A</span>
  <span class="letter">R</span>
  <span class="letter">Y</span>
  <span class="letter">A</span>
  <span class="letter">N</span>
  </div>
</div>

<style>
body {
  text-align: center;
  background-color: #1d1f20;
}

.wrapper {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 90%;
  font-size: 0;
  -webkit-transform: translate(-50%);
          transform: translate(-50%);
}



.letter {
  width: 24px;
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
    margin-top: -192px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(14):before {
  content: "9401658237";
  margin-top: -120px;
  -webkit-animation-name: letter14;
          animation-name: letter14;
  -webkit-animation-duration: 1.4666666667s;
          animation-duration: 1.4666666667s;
  -webkit-animation-delay: 0.56s;
          animation-delay: 0.56s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter14 {
  from {
    margin-top: -120px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter14 {
  from {
    margin-top: -120px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(15):before {
  content: "4256918073";
  margin-top: -192px;
  -webkit-animation-name: letter15;
          animation-name: letter15;
  -webkit-animation-duration: 1.6s;
          animation-duration: 1.6s;
  -webkit-animation-delay: 0.55s;
          animation-delay: 0.55s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter15 {
  from {
    margin-top: -192px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter15 {
  from {
    margin-top: -192px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(16):before {
  content: "9283561407";
  margin-top: -120px;
  -webkit-animation-name: letter16;
          animation-name: letter16;
  -webkit-animation-duration: 0.4666666667s;
          animation-duration: 0.4666666667s;
  -webkit-animation-delay: 0.86s;
          animation-delay: 0.86s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter16 {
  from {
    margin-top: -120px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter16 {
  from {
    margin-top: -120px;
  }
  to {
    margin-top: 24px;
  }
}
/* New Added */

.letter:nth-child(17):before {
  content: "9241583067";
  margin-top: -192px;
  -webkit-animation-name: letter17;
          animation-name: letter17;
  -webkit-animation-duration: 3.2s;
          animation-duration: 3.2s;
  -webkit-animation-delay: 0.1s;
          animation-delay: 0.1s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter17 {
  from {
    margin-top: -192px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter17 {
  from {
    margin-top: -192px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(18):before {
  content: "7156092384";
  margin-top: -216px;
  -webkit-animation-name: letter18;
          animation-name: letter18;
  -webkit-animation-duration: 1.656s;
          animation-duration: 1.656s;
  -webkit-animation-delay: 0.54s;
          animation-delay: 0.54s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter18 {
  from {
    margin-top: -216px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter18 {
  from {
    margin-top: -216px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(19):before {
  content: "6182704395";
  margin-top: -144px;
  -webkit-animation-name: letter19;
          animation-name: letter19;
  -webkit-animation-duration: 1.92s;
          animation-duration: 1.92s;
  -webkit-animation-delay: 0.44s;
          animation-delay: 0.44s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter19 {
  from {
    margin-top: -144px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter19 {
  from {
    margin-top: -144px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(20):before {
  content: "9243715086";
  margin-top: -144px;
  -webkit-animation-name: letter20;
          animation-name: letter20;
  -webkit-animation-duration: 1.7485714286s;
          animation-duration: 1.7485714286s;
  -webkit-animation-delay: 0.49s;
          animation-delay: 0.49s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter20 {
  from {
    margin-top: -144px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter20 {
  from {
    margin-top: -144px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(21):before {
  content: "7385160924";
  margin-top: -120px;
  -webkit-animation-name: letter21;
          animation-name: letter21;
  -webkit-animation-duration: 3.2666666667s;
          animation-duration: 3.2666666667s;
  -webkit-animation-delay: 0.02s;
          animation-delay: 0.02s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter21 {
  from {
    margin-top: -120px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter21 {
  from {
    margin-top: -120px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(22):before {
  content: "9472603158";
  margin-top: -144px;
  -webkit-animation-name: letter22;
          animation-name: letter22;
  -webkit-animation-duration: 2.5028571429s;
          animation-duration: 2.5028571429s;
  -webkit-animation-delay: 0.27s;
          animation-delay: 0.27s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter22 {
  from {
    margin-top: -144px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter22 {
  from {
    margin-top: -144px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(23):before {
  content: "4167085239";
  margin-top: -72px;
  -webkit-animation-name: letter23;
          animation-name: letter23;
  -webkit-animation-duration: 1.41s;
          animation-duration: 1.41s;
  -webkit-animation-delay: 0.53s;
          animation-delay: 0.53s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter23 {
  from {
    margin-top: -72px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter23 {
  from {
    margin-top: -72px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(24):before {
  content: "5329768014";
  margin-top: -72px;
  -webkit-animation-name: letter24;
          animation-name: letter24;
  -webkit-animation-duration: 2.76s;
          animation-duration: 2.76s;
  -webkit-animation-delay: 0.08s;
          animation-delay: 0.08s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter24 {
  from {
    margin-top: -72px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter24 {
  from {
    margin-top: -72px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(25):before {
  content: "3205819647";
  margin-top: -216px;
  -webkit-animation-name: letter25;
          animation-name: letter25;
  -webkit-animation-duration: 1.188s;
          animation-duration: 1.188s;
  -webkit-animation-delay: 0.67s;
          animation-delay: 0.67s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter25 {
  from {
    margin-top: -216px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter25 {
  from {
    margin-top: -216px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(26):before {
  content: "8432571096";
  margin-top: -168px;
  -webkit-animation-name: letter26;
          animation-name: letter26;
  -webkit-animation-duration: 0.35s;
          animation-duration: 0.35s;
  -webkit-animation-delay: 0.9s;
          animation-delay: 0.9s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter26 {
  from {
    margin-top: -168px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter26 {
  from {
    margin-top: -168px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(27):before {
  content: "8026714359";
  margin-top: -96px;
  -webkit-animation-name: letter27;
          animation-name: letter27;
  -webkit-animation-duration: 0.384s;
          animation-duration: 0.384s;
  -webkit-animation-delay: 0.88s;
          animation-delay: 0.88s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter27 {
  from {
    margin-top: -96px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter27 {
  from {
    margin-top: -96px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(28):before {
  content: "6198730524";
  margin-top: -96px;
  -webkit-animation-name: letter28;
          animation-name: letter28;
  -webkit-animation-duration: 2.464s;
          animation-duration: 2.464s;
  -webkit-animation-delay: 0.23s;
          animation-delay: 0.23s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter28 {
  from {
    margin-top: -96px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter28 {
  from {
    margin-top: -96px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(29):before {
  content: "2091745386";
  margin-top: -192px;
  -webkit-animation-name: letter29;
          animation-name: letter29;
  -webkit-animation-duration: 2.7733333333s;
          animation-duration: 2.7733333333s;
  -webkit-animation-delay: 0.22s;
          animation-delay: 0.22s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter29 {
  from {
    margin-top: -192px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter29 {
  from {
    margin-top: -192px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(30):before {
  content: "9401658237";
  margin-top: -120px;
  -webkit-animation-name: letter30;
          animation-name: letter30;
  -webkit-animation-duration: 1.4666666667s;
          animation-duration: 1.4666666667s;
  -webkit-animation-delay: 0.56s;
          animation-delay: 0.56s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter30 {
  from {
    margin-top: -120px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter30 {
  from {
    margin-top: -120px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(31):before {
  content: "4256918073";
  margin-top: -192px;
  -webkit-animation-name: letter31;
          animation-name: letter31;
  -webkit-animation-duration: 1.6s;
          animation-duration: 1.6s;
  -webkit-animation-delay: 0.55s;
          animation-delay: 0.55s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter31 {
  from {
    margin-top: -192px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter31 {
  from {
    margin-top: -192px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(32):before {
  content: "9283561407";
  margin-top: -120px;
  -webkit-animation-name: letter32;
          animation-name: letter32;
  -webkit-animation-duration: 0.4666666667s;
          animation-duration: 0.4666666667s;
  -webkit-animation-delay: 0.86s;
          animation-delay: 0.86s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter32 {
  from {
    margin-top: -120px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter32 {
  from {
    margin-top: -120px;
  }
  to {
    margin-top: 24px;
  }
}

.letter:nth-child(33):before {
  content: "9283561407";
  margin-top: -120px;
  -webkit-animation-name: letter32;
          animation-name: letter32;
  -webkit-animation-duration: 0.4666666667s;
          animation-duration: 0.4666666667s;
  -webkit-animation-delay: 0.86s;
          animation-delay: 0.86s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter33 {
  from {
    margin-top: -120px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter33 {
  from {
    margin-top: -120px;
  }
  to {
    margin-top: 24px;
  }
}

/* End of letters */


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

.container .intro{
   width: 70%;
   height: 50px;
   position: fixed;
   top: 50%;
   left: 40%;
   margin-left: -25%;
   margin-top: -25px;
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

