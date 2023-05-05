<?php
  // Verifica se os dados do formulário foram enviados
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $pnome = $_POST["pname"];
    $rnome = $_POST["rname"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $apresentacao = $_POST["apresentacao"];
    $projeto = $_POST["projeto"];
    $pessoas = $_POST["pessoas"];
    $atuacao = $_POST["atuacao"];
    $publico = $_POST["publico"];
    $horario = $_POST["horario"];
    $material = $_POST["material"];
    
    // Monta o e-mail a ser enviado
    $para = "acog24@gmail.com";
    $assunto = "Mensagem do formulário de contato";
    $corpo = "Nome: $pnome\n\nNome do responsável: $rnome\n\n Email: $email\n\n Telefone: $telefone\n\n Apresentação: $apresentacao\n\n Projeto: $projeto\n\n Pessoas: $pessoas\n\n Atuação: $atuacao\n\n Publico: $publico\n\n Horario: $horario\n\n Material: $material\n\n";
    $headers = "From: $email\r\nReply-To: $email\r\n";
    // Envia o e-mail
    if (mail($para, $assunto, $corpo, $headers)) {
      echo "E-mail enviado com sucesso!";
    } else {
      echo "Erro ao enviar o e-mail.";
    }
  }
?>