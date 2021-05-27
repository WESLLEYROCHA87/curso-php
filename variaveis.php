<?php 
		include 'header.php';
		$aula_atual = 'variaveis';
	?>


	<body>

		<h2>VARIÁVEIS E CONSTANTES</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>
		<br>

		<?php define('nome', 'Weslley Ribeiro') ?>
		
		<h3>Apresentar valor de variáveis</h3>

		<?php $nome = 'Weslley Rocha'; ?>

		<h4>Nome: </h4>
		<p><?php echo "Variável:  $nome "; ?></p>		
		<p><?php echo "  Constante:", nome; ?></p>

		<br>

		<?php $saldo = 1724.20; ?>

		<h4>Saldo: </h4>
		<p><?php echo $saldo; ?></p>

		<br>

		<h4>Mensagem: </h4>
		<p><?php echo "Olá $nome, o seu saldo é: $saldo."; ?></p>


		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>