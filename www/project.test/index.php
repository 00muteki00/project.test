<?php
require_once 'include/database.php';
require_once 'include/funcktions.php';
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="style.css" rel="stylesheet">
</head>

<body>

<div class="wrapper">

	<header class="header">
		<strong>Header:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor. Praesent dictum, libero ut tempus dictum, neque eros elementum mauris, quis mollis arcu velit ac diam. Etiam neque. Quisque nec turpis. Aliquam arcu nulla, dictum et, lacinia a, mollis in, ante. Sed eu felis in elit tempor venenatis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut ultricies porttitor purus. Proin non tellus at ligula fringilla tristique. Fusce vehicula quam. Curabitur vel tortor vitae pede imperdiet ultrices. Sed tortor.
	</header><!-- .header-->
	<?php 
	$day = "Понеділок";
	$lessons = get_lesson($link, $day);?>
	<?php foreach($lessons as $lesson):
	endforeach;?>
	<form  method = "post">
		<input type = "text" class = "form-control" name = "day" id = "day" placeholder = "Введіть день">
		<button class = "button-success" type = "submit">Пошук</button>
	</form>
	<?php 
	$day = filter_var(trim($_POST["day"]), FILTER_SANITIZE_STRING);
	$lessons = get_lesson($link, $day);?>
	<?php foreach($lessons as $lesson):
	endforeach;?>
	<table>
      <tr>
        <td>&nbsp;</td>
        <th><?=$lesson["day"]?></th>
      </tr>
      <tr>
        <th>1</th>
        <td><?=$lesson["first_less"]?></td>
      </tr>
      <tr>
        <th>2</th>
        <td><?=$lesson["second_less"]?></td>
      </tr>
      <tr>
        <th>3</th>
        <td><?=$lesson["third_less"]?></td>
      </tr>
      <tr>
        <th>4</th>
        <td><?=$lesson["fourth_less"]?></td>
      </tr>
    </table>
		

</div><!-- .wrapper -->

<footer class="footer">
	<strong>Footer:</strong> Mus elit Morbi mus enim lacus at quis Nam eget morbi. Et semper urna urna non at cursus dolor vestibulum neque enim. Tellus interdum at laoreet laoreet lacinia lacinia sed Quisque justo quis. Hendrerit scelerisque lorem elit orci tempor tincidunt enim Phasellus dignissim tincidunt. Nunc vel et Sed nisl Vestibulum odio montes Aliquam volutpat pellentesque. Ut pede sagittis et quis nunc gravida porttitor ligula.
</footer><!-- .footer -->

</body>
</html>
