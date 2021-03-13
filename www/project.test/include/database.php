<?php

$link = mysqli_connect('mysql','root','root','site');

if(mysqli_connect_errno())
{
    echo 'Error conect database('.mysqli_connect_errno().'): '.mysqli_connect_error();
    exit();
}
?>
