<!doctype html>
<html lang="en" class="h-100">
  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css"></script>

    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-render.min.js"></script>
    <style>
        .feedback {
            background-color : #31B0D5;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            border-color: #46b8da;
        }

        #mybutton {
            position: fixed;
            bottom: 4px;
            right: 10px;
        }
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
                  <li><a href="/">خانه</a></li>
                  <li><a href="/create-form">فرم ساز</a></li>
                  <li><a href="/contact">تماس با ما</a></li>
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
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
</header>

<div id="mybutton">
<button class="feedback">Submit Response</button>
</div>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <div class="fb-render"></div>
  </div>
</main>
<script>
    formData = JSON.parse(`{!! $formData !!}`);
    jQuery(function($) {
      var formId = "{!!$formId!!}"
      var formRenderInstance = $('.fb-render').formRender({
        dataType: 'json',
        formData: formData,
      });
      const submitButton = document.getElementById("mybutton");
        submitButton.addEventListener("click", function() {
          var userData = formRenderInstance.userData

          console.log({userData, formId})
          $.ajax({
                method: "POST",
                url: "/api/form/" + formId + "/response",
                data: {
                    user_data: JSON.stringify(userData),
                }
            })
            .done(function( msg ) {
                if (msg.status) {
                    alert('Your response submitted successfuly!');
                    window.location = '/';
                }
            });

        })
    });
</script>
</body>
</html>

