<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css" />
    <title>上海寓悦科技有限公司</title>
</head>
<?php
  $myParameter = (isset($_REQUEST['channel']) && $_REQUEST['channel'] !== '') ? 'http://static.houpix.com/app/channel/'.urlencode($_REQUEST['channel']).'.apk' : 'http://www.houpix.com/go-app-download';
?>
<body>
  <div class="container" style="font-size: 0; overflow:hidden" >
      <img src="images/yy-mobile-1.jpg" alt="" class="img-responsive">
      <img src="images/yy-mobile-2.jpg" alt="" class="img-responsive">
      <a href=<?php echo $myParameter?>><img src="images/yy-mobile-3.jpg" alt="" class="img-responsive"></a>
      <img src="images/yy-mobile-4.jpg" alt="" class="img-responsive">
      <img src="images/yy-mobile-5.jpg" alt="" class="img-responsive">
      <img src="images/yy-mobile-6.jpg" alt="" class="img-responsive">
      <img src="images/yy-mobile-7.jpg" alt="" class="img-responsive">
      <img src="images/yy-mobile-8.jpg" alt="" class="img-responsive">
      <img src="images/yy-mobile-9.jpg" alt="" class="img-responsive">
      <img src="images/yy-mobile-10.jpg" alt="" class="img-responsive">
      <img src="images/yy-mobile-11.jpg" alt="" class="img-responsive">
      <img src="images/yy-mobile-12.jpg" alt="" class="img-responsive">
      <img src="images/yy-mobile-13.jpg" alt="" class="img-responsive">
      <img src="images/yy-mobile-14.jpg" alt="" class="img-responsive">
      <img src="images/yy-mobile-15.jpg" alt="" class="img-responsive">
      <a href=<?php echo $myParameter?>><img src="images/yy-mobile-16.jpg" alt="" class="img-responsive"></a>
      <img src="images/yy-mobile-17.jpg" alt="" class="img-responsive">
  </div>
</body>
</html>