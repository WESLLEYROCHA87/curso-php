<?php 
		include 'header.php';
		$aula_atual = 'arrays';
	?>


	<body>

		<h2>ARRAYS</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		
		<h3>Meus Cursos</h3>

		<!-- Array do tipo Indexado: Coloca o valor separado por vírgula e ele define o indice automaticamente -->
		<?php $cursos = array("Excel", "HTML-CSS", "Payton")?>

			<h4>Conteúdo do Array tipo Indexado: </h4>			
			<p><?php echo $cursos[0] . ', ' . $cursos[1] . ', ' . $cursos[2]; ?></p>

			<br>

			<!-- Array Associativo / Multidimensional -->
			<?php $cursos = array(
								"Excel" => array (
												"n_alunos" => 400, 
												"titulo" => "Do zero ao avançado",
												"url" => "link Excel",
												"aval" => 200
													),
								"HTML-CSS" => array (
									"n_alunos" => 300, 
									"titulo" => "Aprenda desenvolvimento Wev",
									"url" => "link HTML-CSS",
									"aval" => 150
													),								
								"Payton" => array (
									"n_alunos" => 280, 
									"titulo" => "Tudo sobre Pyton",
									"url" => "link Payton",
									"aval" => 200
													)							
									);
			?>


		<h3>Informação do Curso</h3>

			<h4>Título: </h4>
			<p><?php echo $cursos['Excel'] ['titulo'];  ?></p>
			<br>

			<h4>Número de Alunos: </h4>
			<p><?php echo $cursos['Excel'] ['n_alunos'];  ?></p>
			<br>

			<h4>Número de Avaliações: </h4>
			<p><?php echo $cursos['Excel'] ['aval'];  ?></p>
			<br>

			<h4>URL: </h4>
			<p><?php echo $cursos['Excel'] ['url'];  ?></p>
			<br>


		<h3>Agora é a sua vez</h3>

			<p>Crie um Array e solte as suas informações em sequência. Pesquise também funções que podem ser aplicadas neste tipo de dados.</p>
			<br>






		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>