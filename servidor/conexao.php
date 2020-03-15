<?php
$usuario = 'root';
$senha = '';

try{
$conexao = new PDO("mysql:host=localhost; dbname=instafoto;charset=utf8", $usuario, $senha);
echo 'Conexão realizada com sucesso!';
} catch(PDOException $e){
    echo $e->getMessage();
}



?>