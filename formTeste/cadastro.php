<?php
include_once 'pessoa.php';

$nome = $_POST["nome"];
$idade = $_POST["idade"];

//criando uma instancia da classe Pessoa
$pessoa = new Pessoa($nome, $idade);

$pessoa->exibirInfo();
