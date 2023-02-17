<DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= @$title ?: 'QuickSnacks' ?></title>
  </head>
  <body>
    <?= @$content ?>
      <!--
      @$content là viết tắt của echo $content, @$content vẫn là $content nhưng khi thực thi bỏ qua thông báo lỗi nếu có.
      -->
  </body>
</html>
