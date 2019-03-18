<!DOCTYPE html>

<html lang="pt-br">
<head>
    <title>E-tec</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/assets/css/foundation.css">
    <link rel="stylesheet" href="/assets/css/app.css">
</head>

<body>
<body>
  <form action="assets/db/login.php" method="POST">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="medium-6 cell">
          <label>Username
            <input type="text" name="username" placeholder="Your Username">
          </label>
          <label>Password
            <input type="text" name="password" placeholder="Your Password">
          </label>
        </div>
      </div>
      <button type="submit" class="button primary expanded">Login</a>
    </div>
  </form>

    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/what-input.js"></script>
    <script src="assets/js/vendor/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

  </body>

</html>