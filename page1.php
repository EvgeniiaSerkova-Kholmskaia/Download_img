<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Загрузка изображения</title>
  </head>
  <body>
    <?php include_once 'menu.php' ?>
    <form action="form_handler.php" method="post" enctype="multipart/form-data">
      <div>
        <input type="file" name="picture" accept="image/*">
      </div>
      <input type="submit" value="Отправить">
    </form>
  </body>
</html>
