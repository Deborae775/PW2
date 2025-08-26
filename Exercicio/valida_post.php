<?php
$nome = $_POST ["nome"];
$email = $_POST ["email"];
$idade = $_POST ["idade"];

if(empty($nome)){
    echo "O Nome não foi preencido....PREENCHA!<br>";
}
else {
     echo "NOME: $nome <br>";
}

if(empty($email == "")){
    echo "O Email não foi preencido....PREENCHA!<br>";
}
else {
    echo "E-MAIL: $email <br>";
}

if(empty($idade)){
    echo "A Idade não foi preencido....PREENCHA!<br>";
}
else {
     echo "IDADE: $idade";
}

?>