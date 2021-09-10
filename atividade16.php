<?php

/*CREATE DATABASE ATIVIDADE;
USE ATIVIDADE;

CREATE TABLE Cliente
(
	Id INT(5),
	Nome VARCHAR(45) ,
	Email VARCHAR(150),
	Cidade VARCHAR(45)
)*/

$con = new PDO("mysql:host=localhost;dbname=ATIVIDADE", "root");
$con->query("INSERT INTO Cliente(Id,Nome,Email,Cidade) VALUES ('12','Luc','Lucasalves65@gmail.com', 'Belo Horizonte')");
$con->query("UPDATE Cliente SET Nome='Lucas Alves' WHERE Id='12';");
$con->query("DELETE FROM Cliente WHERE id='12';");
$busca = $con->query("SELECT * FROM Cliente");



$Insere->bindParam('Id','Name','Email','Cidade', '13' ,'Luyza Silva','Luyza456@gmail.com','Manaus');
$Insere->execute();
echo "Dados inseridos com sucesso!";

$Insere->bindValue('Id','Name','Email','Cidade', '14' ,'Kaike Oliveira','Kaike98@gmail.com','Salvador');
$Insere->execute();
echo "Dados inseridos com sucesso!";
?>