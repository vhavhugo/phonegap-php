<?php
header('Content-type: application/json');
header('Access-Control-Allow-Origin:*');

include 'conexao.php';
$recebe_usuario = $_POST['usuario'];
$recebe_senha = $_POST['senha'];

$consulta = $conexao->query("SELECT * FROM usuarios WHERE email='$recebe_usuario' AND senha='$recebe_senha'");
// print_r($consulta->rowCount());exit;

if($consulta->rowCount() == 0){

    $resposta = array('Resp' => '0');

}else{
 
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);

    $resposta = array(
        'Resp' => '1',
        'Cod' => $exibe['cod'],
        'Nome' => $exibe['nome'],
        'email' => $exibe['email'],
        'perfil' => $exibe['perfil']
    );
}
ob_clean();
echo json_encode($resposta);
?>
