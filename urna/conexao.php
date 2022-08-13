<?php
session_start();
$rm = 'root';
$senha = '';
$bd = 'urna';
$server = 'localhost';
$con = new mysqli($server, $rm, $senha, $bd);
$con->query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

if (!$con) {
	echo 'Problemas na conexão.';
}

// funções de cadastros

function cadUsuario($rm, $etec, $senha)
{
	$sql = 'INSERT INTO tb_usuario (id_rm,nm_etec,cd_senha) VALUES (';
	$sql .= '"' . $rm . '",';
	$sql .= '"' . $etec . '",';
	$sql .= '"' . $senha . '")';
	$res = $GLOBALS['con']->query($sql);
	if ($res) {
		//echo 'Endereço cadastrado com sucesso!';
	} else {
		echo $sql;
		return $GLOBALS['con']->error;
	}
}

function cadCandidato($rm, $ft_candidato, $nm_funcao, $ds_funcao)
{
	$sql = 'INSERT INTO tb_candidato (cd_rm,ft_candidato,nm_funcao,ds_funcao) VALUES (';
	$sql .= '"' . $rm . '",';
	$sql .= '"' . $ft_candidato . '",';
	$sql .= '"' . $nm_funcao . '",';
	$sql .= '"' . $ds_funcao . '")';
	$res = $GLOBALS['con']->query($sql);
	if ($res) {
		//echo 'Endereço cadastrado com sucesso!';
	} else {
		echo $sql;
		return $GLOBALS['con']->error;
	}
}

function cadEleicao($nome, $data)
{
	$sql = 'INSERT INTO tb_eleicao (nm_eleicao,dt_eleicao) VALUES (';
	$sql .= '"' . $nome . '",';
	$sql .= '"' . $data . '")';
	$res = $GLOBALS['con']->query($sql);
	if ($res) {
		//echo 'Endereço cadastrado com sucesso!';
	} else {
		echo $sql;
		return $GLOBALS['con']->error;
	}
}




function cadCandidatura($eleicao, $candidato)
{
	$sql = 'INSERT INTO tb_candidatura (cd_eleicao,cd_candidato) VALUES (';
	$sql .= '"' . $eleicao . '",';
	$sql .= '"' . $candidato . '")';
	$res = $GLOBALS['con']->query($sql);
	if ($res) {
		//echo 'Endereço cadastrado com sucesso!';
	} else {
		echo $sql;
		return $GLOBALS['con']->error;
	}
}

function cadVoto($eleicao, $rm, $candidato, $dt_voto)
{
	$sql = 'INSERT INTO tb_voto (cd_eleicao,cd_rm,cd_candidato,dt_voto) VALUES (';
	$sql .= '"' . $eleicao . '",';
	$sql .= '"' . $rm . '",';
	$sql .= '"' . $candidato . '",';
	$sql .= '"' . $dt_voto . '")';
	$res = $GLOBALS['con']->query($sql);
	if ($res) {
		//echo 'Endereço cadastrado com sucesso!';
	} else {
		echo $sql;
		return $GLOBALS['con']->error;
	}
}

//função Alert
function alert($msg)
{
	echo '<script>
		alert("' . $msg . '");
	</script>';
}


// função de redirecionar
function vai($url)
{
	echo '<script>
	window.location = "' . $url . '";
	</script>';
}

// função de login 
function loginUsuario($rm, $senha)
{
	$sql = 'SELECT u.* FROM tb_usuario u WHERE';
	$sql .= ' u.id_rm = "' . $rm . '"';
	$sql .= ' AND u.cd_senha ="' . $senha . '"';
	$res = $GLOBALS['con']->query($sql);

	if ($res->num_rows > 0) {
		// informações após login
		$rm = $res->fetch_array();
		$_SESSION['cd'] = $rm['cd'];
		$_SESSION['nome'] = $rm['nome'];
		$_SESSION['email'] = $rm['email'];
		$_SESSION['foto'] = $rm['foto'];
		$_SESSION['logado'] = true;


		vai('home.php'); //ocutar LOGAR-SE
	} else {
		//não foi encontrado usuario com essa senha

		alert("Dados inválidos!");
	}
}
// TESTE DE LOGIN
/* session_start();

if (isset($_SESSION['submit']) && $_SESSION['submit'] == true) {
	header("Location: index.php");
}


if (isset($_POST['submit'])) {
	$rm = $_POST['nome'];
	$senha = $_POST['senha'];
	if ($rm == "admin" && $senha == "admin") {
		$_SESSION['submit'] = true;
		header("Location: postrecebe.php");
	} else if ($rm != "admin" && $senha != "admin") {

		$erro = 'POR FAVOR VERIFIQUE SENHA OU USUARIO INCORRETO! ';
		//echo"<b>  <font color='#FF0000'> <div align='center'>$erro</div></font></b>";
		//echo"<script>location.href=\"index.php\";</script>";


		echo "<script>alert('$erro');location.href=\"index.php\";</script>";
	}
}
 */

// funções de list

function listUsuario($rm)
{
	$sql = 'SELECT * FROM tb_usuario';
	if ($rm > 0) {
		$sql .= ' WHERE id_rm =' . $rm;
	}

	$res = $GLOBALS['con']->query($sql);
	return $res;
}

function listCandidato($rm)
{
	$sql = 'SELECT * FROM tb_candidato';
	if ($rm > 0) {
		$sql .= ' WHERE id_rm =' . $rm;
	}

	$res = $GLOBALS['con']->query($sql);
	return $res;
}

function listCandidatura()
{
}

function listEleicao($id, $nome)
{
	$sql = 'SELECT * FROM tb_eleicao';
	if ($id > 0) {
		$sql .= ' WHERE id_eleicao =' . $id;
	}
	if ($nome != "") {
		$sql .= ' WHERE nm_eleicao =' . $nome;
	}

	$res = $GLOBALS['con']->query($sql);
	return $res;
}

function listVoto()
{
}
