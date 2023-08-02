<!DOCTYPE html>
<link rel="stylesheet" href="publicar.css">
<html>

<head>
	<title>Subir imagen</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
	</style>
</head>

<body>
	<a href="./inicio.php"><img src="flecha_atras.svg"></a>
	<?php if (isset($_GET['error'])) : ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
	<form action="upload.php" method="post" enctype="multipart/form-data">

		<input type="file" name="my_image" class="archivo">
		<input type="submit" name="submit" value="Subir" class="subir">

	</form>
</body>

</html>