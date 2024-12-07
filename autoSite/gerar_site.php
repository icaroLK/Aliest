<?php
// Obter os dados enviados pelo formulário
$dados = $_POST;

// Lista de textos predefinidos
$textos = [
    "Bem-vindo ao nosso site!",
    "Estamos aqui para ajudar você a alcançar seus objetivos.",
    "Nossa missão é fornecer os melhores serviços.",
    "Temos uma equipe dedicada para garantir sua satisfação.",
    "A qualidade e a confiança são nossas prioridades.",
    "Explore nossos produtos e serviços exclusivos.",
    "Conheça nossa história e nossa jornada de sucesso.",
    "Não perca as novidades do nosso blog.",
    "Estamos sempre inovando para oferecer o melhor.",
    "Faça parte de nossa comunidade e compartilhe experiências."
];
$textoAleatorio = $textos[rand(0, count($textos) - 1)];

// Lista de imagens aleatórias
$imagens = [
    "https://fastcompanybrasil.com/wp-content/uploads/2023/02/recompensa_bom_trabalho.jpg",
    "https://assets-site.staticpipefy.com/production/wp-content/uploads/2020/07/avel-chuklanov-DUmFLtMeAbQ-unsplash-2.jpg",
    "https://assets-site.staticpipefy.com/production/wp-content/uploads/2023/09/centro-servicos-compartilhados-500x334.jpg",
    "https://assets-site.staticpipefy.com/production/wp-content/uploads/2023/10/bpm-rh-500x333.jpg",
    "https://assets-site.staticpipefy.com/production/wp-content/uploads/2023/09/hr-help-desk-500x333.jpg",
    "https://assets-site.staticpipefy.com/production/wp-content/uploads/2023/09/campaign-creators-gMsnXqILjp4-unsplash-1-500x333.jpg",
    "https://assets-site.staticpipefy.com/production/wp-content/uploads/2023/09/inteligencia-artificial-no-rh-1-500x333.png",
    "https://assets-site.staticpipefy.com/production/wp-content/uploads/2023/08/rh_do_futuro-500x333.jpg"
];
$imagemAleatoria = $imagens[rand(0, count($imagens) - 1)];

// Carregar o template base
$template = file_get_contents('template.php');

// Substituir todos os placeholders pelos valores enviados, incluindo o parágrafo aleatório
foreach ($dados as $campo => $valor) {
    $template = str_replace("{{{$campo}}}", htmlspecialchars($valor), $template);
}

// Substituir o placeholder do parágrafo pelo texto aleatório
$template = str_replace("{{paragrafo}}", htmlspecialchars($textoAleatorio), $template);
$template = str_replace("{{imagem}}", htmlspecialchars($imagemAleatoria), $template);

// Gerar o nome do arquivo baseado no nome enviado
$nome_arquivo = 'sites/' . preg_replace('/\s+/', '_', strtolower($dados['nome'])) . '.php';

// Salvar o conteúdo gerado no arquivo
file_put_contents($nome_arquivo, $template);

// Agora, vamos enviar esse arquivo para a API File.io via cURL



/*   *********************************************************************************
// Iniciar o cURL para enviar o arquivo
$ch = curl_init();

// Definir as opções cURL
curl_setopt($ch, CURLOPT_URL, 'https://file.io'); // URL da API File.io
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, [
    'file' => new CURLFile($nome_arquivo) // Envia o arquivo gerado
]);

// Executar o cURL e obter a resposta
$response = curl_exec($ch);

// Fechar a conexão cURL
curl_close($ch);

// Decodificar a resposta JSON da API
$response_data = json_decode($response, true);

// Verificar se o upload foi bem-sucedido e obter o link
if (isset($response_data['link'])) {
    $link_arquivo = $response_data['link'];
    echo "Arquivo enviado com sucesso! Acesse o arquivo aqui: <a href='$link_arquivo' target='_blank'>$link_arquivo</a>";
} else {
    echo "Erro ao enviar o arquivo. Tente novamente.";
}


********************************************************************************* */

// Redirecionar para o site gerado (caso o envio não seja o foco final)
header("Location: $nome_arquivo");
exit;
?>
