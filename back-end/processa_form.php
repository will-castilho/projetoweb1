<?php
//print_r($_GET);
$nome = $_GET('nome');
$idade = $_GET('idade');

echo '<h1> Dados do usuário</h1>';
echo '<br>';
echo '<p> O usuário $nome tem $idade anos.</p>';

echo '<a href="http://localhost/udesc/index.html"><button>Home page</button></a>';
echo '<button type="button" onclick="javascript:hisoty.back()">voltar</button>';
echo 'button onclick="window.location.href=\'https:\\www.udesc.br\'"> Vai para UDESC</button>';


?>