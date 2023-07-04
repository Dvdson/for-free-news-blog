<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Funcionário</title>
</head>
<body>

<h2>Cadastro de Funcionário</h2>

<?php
require_once __DIR__.'/../src/models/Funcionario.php';

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $funcionario = new Funcionario();
    $funcionario->nome = $_POST["nome"];
    $funcionario->cargo = $_POST["cargo"];
    $funcionario->descricaocargo = $_POST["descricaocargo"];
    $funcionario->setor = $_POST["setor"];
    $funcionario->salario = $_POST["salario"];
    
    $funcionario->save();
    
    // Exibe a mensagem de sucesso
    echo "<p>Funcionário cadastrado com sucesso!</p>";
}
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br><br>
    
    <label for="cargo">Cargo:</label>
    <input type="text" id="cargo" name="cargo" required><br><br>
    
    <label for="descricaocargo">Descrição do Cargo:</label>
    <input type="text" id="descricaocargo" name="descricaocargo" required><br><br>
    
    <label for="setor">Setor:</label>
    <input type="text" id="setor" name="setor" required><br><br>
    
    <label for="salario">Salário:</label>
    <input type="text" id="salario" name="salario" required><br><br>
    
    <input type="submit" value="Cadastrar">
</form>

</body>
</html>
