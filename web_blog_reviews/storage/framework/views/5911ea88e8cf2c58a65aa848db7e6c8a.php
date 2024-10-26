<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
</head>
<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm">
      <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
        <span class="logo"><i class="bi bi-chat-dots"></i>Messages</span>
      </a>
      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/">Главная</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/about">Про нас</a>
      </nav>
      <a class="btn btn-outline-primary" href="/review">Написать отзыв</a>
  </div>
  <div class="container mt-3">
    <?php echo $__env->yieldContent('content'); ?>
  </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\webapp\resources\views/layout.blade.php ENDPATH**/ ?>