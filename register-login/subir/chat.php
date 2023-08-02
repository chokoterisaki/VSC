<?php
session_start();
if (isset($_SESSION['usuario'])) {
	include "../layouts/header2.php";
	include "../php/conexion_rp.php";

	$sql = "SELECT * FROM `chat`";

	$query = mysqli_query($conexion, $sql);
?>
	<style>
		h2 {
			color: white;
		}

		label {
			color: white;
		}

		span {
			color: #8B00FF;
			font-weight: bold;
		}

		.container {
			margin-top: 9%;
			width: 80%;
			background-color: #000000;
			padding-right: 10%;
			padding-left: 10%;
			border: #0600FF 5px solid;
			border-radius: 5%;
		}

		.btn-primary {
			background-color: #673AB7;
		}

		.display-chat {
			height: 300px;
			background-color: #242424;
			margin-bottom: 4%;
			overflow: auto;
			padding: 15px;
			border-radius: 25px;
		}

		.message {
			background-color: #000000;
			color: white;
			border-radius: 5px;
			padding: 5px;
			margin-bottom: 3%;
			border: 2px ridge #000;
			border-color: #0600FF;
		}
	</style>

	<meta http-equiv="refresh" content="20"> <!-- para refrescar la pagina-->
	<script>
		$(document).ready(function() {
			// Set trigger and container variables
			var trigger = $('.container .display-chat '),
				container = $('#content');

			// Fire on click
			trigger.on('click', function() {
				// Set $this for re-use. Set target from data attribute
				var $this = $(this),
					target = $this.data('target');

				// Load target page into container
				container.load(target + '.php');

				// Stop normal link behavior
				return false;
			});
		});
	</script>

	<div class="container">
		<center>
			<h2>Bienvenid@ <span style="color:#8B00FF; font-weight: 600;"><?php echo $_SESSION['usuario']; ?> </span> a Nuestro Chat</h2>
			<label>&copy;Radio Paris Inc</label>
		</center></br>
		<div class="display-chat" id="display-chat">
			<?php
			if (mysqli_num_rows($query) > 0) {
				while ($row = mysqli_fetch_assoc($query)) {
			?>
					<div class="message">
						<p>
							<span><?php echo $row['name']; ?> :</span>
							<?php echo $row['message']; ?>
						</p>
					</div>
				<?php
				}
			} else {
				?>
				<div class="message">
					<p>
						No hay ninguna conversación previa.
					</p>
				</div>
			<?php
			}
			?>

		</div>



		<form class="form-horizontal" method="post" action="sendMessage.php">
			<div class="form-group">
				<div class="col-sm-10">
					<textarea name="msg" class="form-control" style="border: ridge 2px #56abf1;color: #000;" placeholder="Ingrese su Mensaje"></textarea>
				</div>

				<div class="col-sm-2">
					<button type="submit" class="btn btn-success" style="font-size: 22px;">Enviar</button>
				</div>

			</div>
		</form>
	</div>


	</body>

	</html>
<?php
} else {
	header('location:index.php');
}
?>