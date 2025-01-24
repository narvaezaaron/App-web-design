<HTML>
<HEAD><TITLE>Pagina Perrona</TITLE></HEAD>
<BODY>
<?php
$log = false;
if (isset($_POST["user"]) && isset($_POST["pass"])){
	if ($_POST["user"] == "root" && $_POST["pass"]="root"){
		$user = $_POST["user"];
		$log = true;
	}	
}
if ($log == true){
	echo "bienvenido!!!";
}
else{
?>
	<FORM METHOD="POST" ACTION="http://127.0.0.1/paginaperrona.php">
	<LABEL>Usuario: </LABEL><INPUT TYPE="TEXT" NAME="user" /><BR>
        <LABEL>Contraseña: </LABEL><INPUT TYPE="password" NAME="pass" /><BR>
	<BUTTON TYPE="submit">Enviar</BUTTON>
	</FORM>
<?php
}
?>
</BODY>
</HTML>