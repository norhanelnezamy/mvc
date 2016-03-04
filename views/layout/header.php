<html>
<head>
  <link rel="stylesheet" href="/mvc/public/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="/mvc/public/bootstrap/css/bootstrap.min.css">
</head>
<style>
#footer { position: fixed;  bottom: 0;  width: 100%;  height:6%;  background-color: black; padding: 1%;}
</style>
<body>

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
      <a class="navbar-brand" href="/mvc">Brand</a>
    </div>
    <?php Session::init(); ?>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/mvc/user">User <span class="sr-only">(current)</span></a></li>
        <li><a href="/mvc/user/help">Help</a></li>
        <?php if (Session::get('login_status') == False) :?>
        <li><a href="/mvc/user/login">login</a></li>
        <?php else :?>
        <li><a href="/mvc/user/logout">logout</a></li>
      <?php endif; ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
