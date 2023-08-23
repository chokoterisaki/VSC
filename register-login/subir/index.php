<!DOCTYPE html>
<html>

<head>
	<title>Subir imagen</title>
	<style>
		body {
			background: rgb(35, 35, 37);
			color: white;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}

		form {
			width: 550px;
			height: 500px;
			background: black;
			border-radius: 50px;
			border: 9px solid #7200be;
			position: absolute;
		}

		.volver {
			width: 50px;
			height: 50px;
			border-radius: 50px;
			background-color: blueviolet;
			display: flex;
			justify-content: center;
			align-items: center;
			border: 5px solid black;
		}

		.archivo {
			margin-left: 80px;
		}

		.subir {
			width: 100px;
			height: 35px;
			background: blue;
			border-radius: 50px;
			border: 5px solid white;
			color: white;
		}

		.texto {
			width: 450px;
			height: 50px;
			background-color: white;
			border: 5px solid #7200be;

		}
		.objetos{
			padding-top: 30%;
			padding-left: 8%;
		}
	</style>
</head>

<body>
	<?php if (isset($_GET['error'])) : ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<div class="objetos">
			<input type="file" name="my_image" class="archivo">
			<input type="submit" name="submit" value="Subir" class="subir">

			<div class="volver">
				<a href="./inicio.php"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-rounded-x" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none" />
						<path d="M10 10l4 4m0 -4l-4 4" />
						<path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
					</svg></a>
			</div>
		</div>
	</form>

</body>

</html>