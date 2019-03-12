<?php
$nome = $_POST[nome];
$email = $_POST[email];
$assunto = $_POST[asssunto];
$message = $_POST[message];

mail("jjoao.jv13@gmail.com",
"nome: $nome
email: $email
assunto: $assunto
mensagem: $message", "FROM:$nome<$email>"
)
?>