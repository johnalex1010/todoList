<!DOCTYPE html>
<html lang="es">
<head>
	<base href="http://localhost/JohnAlexUSTA/todoList/">
	<!-- METAS -->
	<meta charset="UTF-8" />
	<title>App Todo List | John Alex</title>
	<meta http-equiv="X-UA-Compatible" content="EDGE" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />	
	<meta name="description" content=""/>
	<meta name="keywords" content="">
	<meta name="author" content="John Alex Fandiño">

	<!-- LINK -->
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/main-min.css" />

</head>
<body>
	<section class="app_content">
		<article class="app_list">
			<div class="app_add_header">
				<h1 class="app_h1">Lista de actividades</h1>
				<button class="app_btn_add">+</button>
			</div>
			<div class="app_activitys">
				<h2 class="app_h2">Actividades pendientes</h2>
				<article class="app_actitvity">
					<h3 class="app_h3">Titulo Actividad</h3>
					<p class="app_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio eum expedita nobis cum vitae totam voluptate .</p>
					<hr class="app_actitvity_hr">
					<div class="app_date">
						<p class="add_date_p"><strong><span class="icon-enter"></span></strong> Fecha de ingreso: <strong>00/00/0000</strong></p>
						<p class="add_date_p"><strong><span class="icon-fast"></span></strong> Fecha de vencimiento: <strong>00/00/0000</strong></p>
						<div class="app_date_btns">
							<button class="app_date_btn"><span class="icon-trash"></span></button>
							<button class="app_date_btn"><span class="icon-check"></span></button>
						</div>
					</div>
				</article>
				<article class="app_actitvity">
					<h3 class="app_h3">Titulo Actividad</h3>
					<p class="app_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio eum expedita nobis cum vitae totam voluptate .</p>
					<hr class="app_actitvity_hr">
					<div class="app_date">
						<p class="add_date_p"><strong><span class="icon-enter"></span></strong> Fecha de ingreso: <strong>00/00/0000</strong></p>
						<p class="add_date_p"><strong><span class="icon-fast"></span></strong> Fecha de vencimiento: <strong>00/00/0000</strong></p>
						<div class="app_date_btns">
							<button class="app_date_btn"><span class="icon-trash"></span></button>
							<button class="app_date_btn"><span class="icon-check"></span></button>
						</div>
					</div>
				</article>
			</div>
			<hr class="app_hr">
			<div class="app_activitys">
				<h2 class="app_h2">Actividades realizadas</h2>
				<article class="app_actitvity app_actitvity_checked">
					<h3 class="app_h3">Titulo Actividad</h3>
					<p class="app_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio eum expedita nobis cum vitae totam voluptate .</p>
					<hr class="app_actitvity_hr">
					<div class="app_date">
						<p class="add_date_p"><strong><span class="icon-enter"></span></strong> Fecha de ingreso: <strong>00/00/0000</strong></p>
						<p class="add_date_p"><strong><span class="icon-fast"></span></strong> Fecha de vencimiento: <strong>00/00/0000</strong></p>
						<div class="app_date_btns">
							<button class="app_date_btn"><span class="icon-trash"></span></button>
							<button class="app_date_btn"><span class="icon-check"></span></button>
						</div>
					</div>
				</article>
			</div>
			<hr class="app_hr">
			<img class="app_logo" src="img/logo.png" alt="Logo John Alex">
		</article>
		<article class="app_add_list">
			<h2 class="app_h1">Ingresa una actividad</h2>
			<form class="app_form" action="" method="POST">
				<input type="text" placeholder="Titulo actividad">
				<textarea name="" id="" placeholder="Descripción de la actividad"></textarea>
				<input type="date">

				<button class="remove"><span>x</span></button>
				<button class="add" type="submit"><span class="icon-play"></span></button>

			</form>
		</article>
	</section>

	<script src="js/main-min.js"></script>
</body>
</html>