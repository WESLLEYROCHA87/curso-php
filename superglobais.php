	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'variaveis-superglobais';
	?>


	<body>


		<h2>Variáveis Superglobais</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>



		<h3>$_SERVER</h3>

	



		<h3>$GLOBALS</h3>

		

		<?php

		$msg = 'hello world';
		$bye = 'bye bye world';

		?>

		<pre><?php echo ($GLOBALS['msg']); ?></pre>


		










		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>