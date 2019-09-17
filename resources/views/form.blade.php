<!doctype html>
<html lang="en" class="h-100">
  <head>
  <title>Forms</title>

    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
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
                  <li class="active"><a href="/create-form">فرم ساز<span class="sr-only">(current)</span></a></li>
                  <li><a href="/about">تماس با ما</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                @auth
                    <li>سلام {{$user->name}}!</li>
                    <li><a href="/logout">Logout</a></li>
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

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    @auth
      <div id="build-wrap"></div>
    @endauth
    @guest
        <div class="container">
            <p class="lead">لطفا وارد سایت شوید</p>
        </div>
    @endguest

  </div>
</main>
@auth
<script>
    jQuery($ => {
      var options = {
      i18n: {
        locale: 'fa-IR'
      }
    },
    $fbTemplate = $(document.getElementById('fb-editor'));
  $fbTemplate.formBuilder(options);
      const fbEditor = document.getElementById("build-wrap");
      const formBuilder = $(fbEditor).formBuilder({
        onSave: function(formData) {
          formData = formBuilder.actions.getData('json', true)
          if (JSON.parse(formData) == 0) {
            alert('فرم خالی ذخیره نمی شود‌!')
          } else {
              $.ajax({
                method: "POST",
                url: "/api/form/",
                data: {
                    user_id: "{!! $user->id !!}",
                    form_data: formData,
                }
            })
            .done(function( msg ) {
                if (msg.status) {
                    formBuilder.actions.clearFields();
                    window.location = '/forms/' + msg.id;
                }
            });
          }

        },
      });
    });
</script>
@endauth
</body>
</html>
<style>
.lead{
  margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 15px;
  margin-left: 400px;
}
</style>
