<?php




function paket($photo, $lat, $lon)
 {
    $host = 'localhost';
        $database = 'u1092343_default';
        $user = 'u1092343_default';
        $password = '323vYaX!';

        $link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
    
      
    
        $sql = "INSERT INTO `saveworld` (`id`, `user_id`, `lat`, `lon`, `photo`) VALUES (NULL, NULL, $lat, $lon, '$photo')";

        $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link)); 
        if($result)
        {
         echo "Выполнение запроса прошло успешно";
        }

        mysqli_close($link);
}





?>