<?php
session_start();
//  include('../class/verifica_login.php');
?>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href="../css/style.css" type="text/css">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>



	<title> Formulario de Cadastro </title>
	   
</head>
<header>

</header>
<body>
	<div class="topo">
	<h3>EMPRESA</h3> 
</div>

<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				
	       <h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
			</div>
			<div class="col-sm-6 col-sm-offset-3">
				<input type="button" name="sair" id="sair" tabindex="4" class="form-control btn btn-register" value="SAIR">
											</div>
		</div>
	</div>
	</section>	
  


	
</body>	
</html>