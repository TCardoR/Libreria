<?php
$connection = mysqli_connect(
    'localhost',
    'root',
    '',
    'dblibreria'
);
if(!$connection){
    echo "No pudo conectarse con la base de datos".mysqli_connect_error();
}
mysqli_close($connection);
?>
