<?php
$nome = $_POST ["nome"];
$email = $_POST ["email"];
$idade = $_POST ["idade"];
$selectidade = $_POST ["selectidade"];

 echo "NOME: $nome <br>";
 echo "E-MAIL: $email <br>";

 if($idade <= 2 && $selectidade === "bebe")
 {

     echo "Idade indicada coincide com a opção de faixa etária escolhida - (Bebê)";

 }
 elseif($idade > 2 && $idade <= 12 && $selectidade === "crianca")
 {

     echo "Idade indicada coincide com a opção de faixa etária escolhida - (Criança)";

 }
 elseif($idade > 12 && $idade <= 18 && $selectidade === "adolescente")
 {

     echo "Idade indicada coincide com a opção de faixa etária escolhida - (Adolescente)";

 }
 elseif($idade > 18 && $selectidade === "adulto")
 {

     echo "Idade indicada coincide com a opção de faixa etária escolhida - (Adulto)";

 }
 else
 {

     echo "Idade indicada não coincide com a opção de faixa etária escolhida";

 }

?>
