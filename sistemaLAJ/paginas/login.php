<?php if (isset($_SESSION['login']) == true) {
    header('Location: main');
} ?>

<!DOCTYPE html>
<html>
<head>
	<title>Painel de controle</title>
	<link href="css/style.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<div class="box-login">
		<?php
			if(isset($_POST['acao'])){
				$user = $_POST['user'];
				$password = $_POST['password'];
				$sql = MySql::conectar()->prepare("SELECT * FROM `tbadmin` WHERE Login = ? AND Senha = ?");
				$sql->execute(array($user,$password));
				if($sql->rowCount() == 1){
					//$info = $sql->fetch();
					//Logamos com sucesso.
					$_SESSION['login'] = true;
					$_SESSION['user'] = $user;
					$_SESSION['password'] = $password;
					//$_SESSION['cargo'] = $info['cargo'];
					//$_SESSION['nome'] = $info['nome']; 
					//$_SESSION['img'] = $info['img'];
					//if(isset($_POST['lembrar'])){
						//setcookie('lembrar',true,time()+(60*60*24),'/');
						//setcookie('user',$user,time()+(60*60*24),'/');
						//setcookie('password',$password,time()+(60*60*24),'/');
					//}
					header('Location: main');
					die();
				}else{
					//Falhou
					echo '<div class="erro-box" style="color:red;"><i class="fa fa-times"></i> Usuário ou senha incorretos!</div>';
				}
			}
		?>
		<h2>Sistema de administração de mesas e cadeiras LAJ</h2>
		<form method="post">
			<h2>Efetue o login</h2>
			<input type="text" name="user" placeholder="Login..." required>
			<input type="password" name="password" placeholder="Senha..." required>
			<div class="form-group-login left">
				<input type="submit" name="acao" value="Logar!">
			</div>
			<!-- <div class="form-group-login right">
				<label>Lembrar-me</label>
				<input type="checkbox" name="lembrar" />
			</div> -->
			<div class="clear"></div>
		</form>
	</div><!--box-login-->
</body>
</html>