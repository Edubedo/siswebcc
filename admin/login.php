<?php
session_start();

include("./bd.php"); // Incluir la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    $sentencia = $conexion->prepare("SELECT * FROM `tbl_usuarios` WHERE usuario = :usuario AND password = :contrasenia");
    $sentencia->bindParam(':usuario', $usuario);
    $sentencia->bindParam(':contrasenia', $contrasenia);
    $sentencia->execute();

    $usuario = $sentencia->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        // Usuario y contraseña correctos. Iniciar sesión y redirigir a la página de inicio
        session_start();
        $_SESSION['usuario'] = $usuario;
        header("Location: index.php");
    } else {
        // Usuario o contraseña incorrectos. Mostrar un mensaje de error
        $error = "Usuario o contraseña incorrectos";
    }
}
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <style>
			* {
				font-family: 'Poppins', sans-serif;
			}
			body {
				background-image: url('../img/login.jpg');
				background-size: cover;
				background-repeat: no-repeat;
				background-position: center;
				background-attachment: fixed;
			}
			.box {
				display: flex;
				justify-content: center;
				align-items: center;
				min-height: 90vh;
			}
			.container {
				width: 350px;
				display: flex;
                text-align: center;
                background: #fff;
				flex-direction: column;
                color: #000;
				padding: 30px 50px ;
                border-radius: 10px;
			}
            
			span {
                color: #000;
				font-size: small;
				display: flex;
				justify-content: center;
				padding: 10px 0 15px 0;
			}
			header {
                color: #000;
				font-size: 30px;
				display: flex;
				justify-content: center;
				padding: 0 0 15px 0;
			}
			.input-field {
				display: inline-block;
				flex-direction: column;
				margin-bottom: 15px;
			}
			.input-field .input {
				display: inline-block;
				height: 45px;
				width: 100%;
				border: none;
				outline: none;
				border-radius: 30px;
                color: #000;
				padding: 0 0 0 42px;
				background: rgba(255, 255, 255, 0.1);
			}
			i {
				position: relative;
				top: -31px;
				left: 17px;
                color: #000;
			}
			::-webkit-input-placeholder {
                color: #000;
			}
			.submit {
				border: none;
				border-radius: 30px;
				font-size: 15px;
				height: 45px;
				outline: none;
				width: 100px;
				background: rgba(230, 230, 230, 0.7);
				cursor: pointer;
				transition: 0.3s;
			}
			.submit:hover {
				box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
			}
			.bottom {
				display: flex;
				flex-direction: row;
				justify-content: space-between;
				font-size: small;
                color: #000;
				margin-top: 10px;
			}
			.left {
				display: flex;
			}
			label a {
                color: #000;
				text-decoration: none;
			}
		</style>
    </head>

    <body>
    <div class="box">
			<div class="container">
				<div>
                <div class="top-header">
					<span>SWCI Corporati&oacute;n</span>
					<header>Iniciar Sesion</header>
				</div>
                
                <form action="" method="post">
                <div class="mb-3">
                <div class="input-field">
					<input
						type="usuario"
						class="input"
						placeholder="Usuario"
						required
						name="usuario"
						id="usuario"
						aria-describedby="helpId"
					/>
					<i class="bx bx-lock-alt"></i>
				</div>

                <div class="input-field">
					<input
						type="password"
						class="input"
						placeholder="Contraseña"
						required
						name="contrasenia"
						id="contrasenia"
						aria-describedby="helpId"
					/>
					<i class="bx bx-lock-alt"></i>
				</div>

                <?php if (isset($error)): ?>
				<p style="color:red"><?php echo $error; ?></p>
				<?php endif; ?>
				<div class="input-field">
					<input type="submit" class="submit" value="Acceder" />
				</div>
                </form>

             
				

				<div class="bottom">
					<div class="left">
						<input type="checkbox" id="check" />
						<label for="check"> Recordarme</label>
					</div>
					<div class="right">
						<label><a href="restaurarContrasena.php">¿Olvidaste la contraseña?</a></label>
					</div>
				</div>
                </div>
			</div>
		</div>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
 