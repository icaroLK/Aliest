const input = prompt("Digite os valores separados por ponto e vírgula (;)\n\nCNPJ; RAZÃO; RUA; NUMERO; CEP; BAIRRO; EMAIL; TELEFONE:\n\n").toUpperCase();

const values = input.split(";").map(item => item.trim());

if (values.length < 8) {
    console.error("Número insuficiente de valores fornecidos. Certifique-se de incluir 8 valores.");
} else {
    const replacements = [
        { index: 2, text: values[0] }, // CNPJ
        { index: 6, text: values[1] }, // Razão Social
        { index: 21, text: values[2] }, // Rua
        { index: 22, text: values[3] }, // Número
        { index: 23, text: "****" }, // Complemento
        { index: 24, text: values[4] }, // CEP
        { index: 25, text: values[5] }, // Bairro
        { index: 28, text: values[6] }, // Email
        { index: 29, text: values[7] }  // Telefone
    ];
    replacements.forEach(({ index, text }) => {
        const element = document.querySelectorAll("b")[index];
        if (element) {
            element.innerText = text;
            console.log(`Elemento <b> na posição ${index} atualizado com sucesso.`);
        } else {
            console.error(`Elemento <b> na posição ${index} não encontrado.`);
        }
    });
}




/* **************************************************************************************************


Quero que faça uma organização na formatação de um texto.
O resultado final deve seguir o padrão:

CNPJ; RAZÃO SOCIAL; RUA; NUMERO; CEP; BAIRRO; EMAIL; TELEFONE

Todos os itens precisam ser em maiúsculas e separados por ponto e vírgula (;)

Vou te mandar algumas informações soltas, como: 43.311.244/0001-06 LUCAS RODRIGUES SIQUEIRA Av. Sete de Setembro, 5708 - Batel, Curitiba - PR, 80240-000 4188133200
E você vai me retornar um texto escrito naquele formato que te disse, esse exemplo deveria retornar o seguinte:

 43.311.244/0001-06; 43.311.244 LUCAS RODRIGUES SIQUEIRA; AV SETE DE SETEMBRO; 5708; 80240-000; BATEL; LUCASRODRIGUES@OUTLOOK.COM; (41) 8813-3200

Nesse exemplo eu segui as seguintes regras para fazer cada uma das opções:
1° Simplesmente coloquei o cnpj
2° É o slot da razão social, que consiste nos digitos do CNPJ antes do caracter '/' + o nome inteiro
3° Peguei só a rua do endereço que foi passado. Tirei as pontuações e deixei em maiúsculo
4° Peguei o número do endereço que foi passado
5° Peguei o cep do endereço que foi passado
6° Peguei o bairro do endereço que foi passado
7° No slot do email eu peguei o primeiro nome + algum nome do meio + @OUTLOOK.COM (siga esse padrão pra fazer os emails)
8° No slot do telefone eu peguei o telefone que foi passado e coloquei ele na formatação adequada (xx) xxxx-xxxx

Siga esse exemplo e me retorne o resultado final com os dados que eu te passar. (caso não tenha alguma informação, deixe 4 asteriscos (****))
(Mande apenas o resultado para que eu possa copiar e colar tudo sem textos adicionais)



************************************************************************************************** */