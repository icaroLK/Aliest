<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Site</title>
</head>
<body>
    <h1>Criação de Sites</h1>
    <form action="gerar_site.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required><br><br>

        <label for="cnpj">CNPJ:</label>
        <input type="text" id="cnpj" name="cnpj" required><br><br>

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required><br><br>

        <label for="cep">cep:</label>
        <input type="cep" id="cep" name="cep"><br><br>

        <!-- Novo campo, basta adicionar no formulário -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <button type="submit">Gerar Site</button>
    </form>
</body>
</html>
