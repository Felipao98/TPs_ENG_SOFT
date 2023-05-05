<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // processar os dados do formulário aqui e exibir o resultado
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Formulário de exemplo</title>
</head>
<body>

  <h1>Meu Formulário</h1>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <!-- Inclua aqui os campos do formulário -->
    <input type="submit" name="submit" value="Enviar">
  </form>

</body>
</html>
