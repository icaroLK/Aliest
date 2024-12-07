<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aliest GIOVANNA consultoria</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #444; /* Fundo escuro */
            color: #fff; /* Texto branco */
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
            border-radius: 50%;
        }

        nav {
            display: flex;
            gap: 15px;
        }

        nav a {
            text-decoration: none;
            color: black;
            background: #ffd700; /* Amarelo */
            padding: 10px 20px;
            border-radius: 20px;
        }

        nav a:hover {
            background-color: #e5c100;
        }

        /* Ajustando a visibilidade no banner */
        .banner {
            color: black;
            text-align: center;
            padding: 50px 20px;
            background-size: cover;
            background-position: center;
            color: white;
            background: rgba(0, 0, 0, 0.5); /* Adicionando sombra escura para melhorar a visibilidade do texto */
        }

        .banner h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .banner p {
            font-size: 1.2rem;
        }

        .banner .btn {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: black;
            background: #ffd700;
            padding: 10px 20px;
            border-radius: 20px;
        }

        .banner .btn:hover {
            background-color: #e5c100;
        }

        .imagem-container {
            width: 500px;
            height: 300px;
            overflow: hidden; /* Garante que a parte excedente da imagem seja cortada */
        }

        .imagem-container img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* A imagem cobrirá a área sem distorção */
        }

        footer {
            background-color: #333; /* Fundo escuro */
            color: #fff; /* Texto branco */
            text-align: center; /* Centraliza o conteúdo */
            padding: 20px; /* Espaçamento interno */
            font-family: Arial, sans-serif;
            line-height: 1.5; /* Espaçamento entre linhas */
        }

        footer p {
            margin: 5px 0; /* Espaçamento entre parágrafos */
        }

        footer small {
            display: block;
            margin-top: 10px;
            color: #aaa; /* Texto um pouco mais claro para os direitos reservados */
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">
            <img src="https://media.licdn.com/dms/image/v2/D4D0BAQHsBVvfisWDRw/company-logo_200_200/company-logo_200_200/0/1728932251707/conexaoc6_logo?e=2147483647&v=beta&t=BRGvc5Q6ASG634-NUuGAV4TF-aQpCgqoeBjbRrK8xJo" alt="Logo">
            <h2>Consultor GIOVANNA</h2>
        </div>
        <nav>
            <a href="#">Consultor GIOVANNA | Aliest</a>
            <a href="#">Termos de Uso</a>
            <a href="#">Saber Mais</a>
        </nav>
    </header>

    <h1>Aliest</h1>

    <div class="imagem-container">
        <img src="https://assets-site.staticpipefy.com/production/wp-content/uploads/2023/09/hr-help-desk-500x333.jpg" alt="Imagem do site">
    </div>

    <div class="banner">
        <h1>Faça parte de nossa comunidade e compartilhe experiências.</h1>
        <p>Faça parte de nossa comunidade e compartilhe experiências.</p>
        <a href="#" class="btn">Saber Mais</a>
    </div>

    <footer>
        <p>05.527.559/0001-98</p>
        <p>GIOVANNA</p>
        <p>(41) 99999-9999</p>
        <p>giovana@outlook.com</p>
        <p>Av Rio Branco</p>
        <p>80259898</p>
        <small>Todos os direitos reservados.</small>
    </footer>

</body>
</html>
