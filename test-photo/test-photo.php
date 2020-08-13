
<!DOCTYPE html>
<html>
<head>
    <title>jj</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="js.js"></script>
</head>
<body>
<div class="slider">
    <div class="item">
        <img src="img/slide2.jpg" name="slide_show">
    </div>

   

    <a class="prev" onclick="minusSlide()" >&#10094;</a>
    <a class="next" onclick="plusSlide()" >&#10095;</a>
</div>
<div class="data-php" data-attr="<?=$icl_photo; ?>"></div>


</body>
</html>