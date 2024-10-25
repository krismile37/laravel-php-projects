<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма регистрации</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container mt-5">
    <?php if(isset($_COOKIE['user']) == false): ?>
      <div class="row">
        <div class="col">
          <h1>Форма регистрации</h1>
          <form action="check.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
            <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
            <button class="btn btn-primary" type="submit">Зарегистрироваться</button>
          </form>
        </div>
        <div class="col ps-5">
          <h1>Форма авторизации</h1>
          <form action="auth.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
            <button class="btn btn-primary" type="submit">Авторизоваться</button>
          </form>
        </div>
      </div>
    <?php else: ?>
      <p>Привет, <?=$_COOKIE['user']?>! Чтобы выйти нажмите <a href="/exit.php">здесь</a>.</p>
    <?php endif; ?>
  </div>
</body>
</html>
