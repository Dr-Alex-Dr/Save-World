<?php


function incl($number, $id)
{

$host = 'localhost';
$user = 'root';
$password = 'root';
$database = 'sv';

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT id, photo, lat, lon FROM tel_bot WHERE id = $id";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

$mass=[];
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
           
    }


    // очищаем результат
    mysqli_free_result($result);
}


mysqli_close($link);

	return $row[$number];
	
}
?>

