<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Вывод изображений</title>
  </head>
  <body>
    <?php include_once 'menu.php' ?>
    <?php include_once 'form_handler.php' ?>
    <section>
      <?php foreach ($data_arr as $image): ?>
      <div>
        <p><?php echo $image ?></p>
        <img src="imgs/<?php echo $image?>" alt="Загруженное изображение">
      </div>
      <?php endforeach; ?>
    </section>
  </body>
</html>
