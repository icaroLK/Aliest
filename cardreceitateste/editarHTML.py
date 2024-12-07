from bs4 import BeautifulSoup


file_path = 'C:\\TimeTravelStuff\\PHP\\htdocs\\ALIESTHTDOCS\\cardreceitateste\\index.html'


with open(file_path, 'r', encoding='utf-8') as file:
    html_code = file.read()
soup = BeautifulSoup(html_code, 'lxml')

# Encontrando o parágrafo com id="paragrafo1" e alterando o texto
variavel1 = soup.find(id="cnpj")
variavel1.string = "00000000000"


variavel2 = soup.find(id="razaosocial")
variavel2.string = "razaosocail"


variavel3 = soup.find(id="logradouro")
variavel3.string = "logradouro"


variavel4 = soup.find(id="numero")
variavel4.string = "numero"


variavel5 = soup.find(id="complemento")
variavel5.string = "complemento"


variavel6 = soup.find(id="cep")
variavel6.string = "cep"

variavel7 = soup.find(id="bairro")
variavel7.string = "bairro"


variavel8 = soup.find(id="cidade")
variavel8.string = "cidade"


variavel9 = soup.find(id="estado")
variavel9.string = "estado"



variavel10 = soup.find(id="email")
variavel10.string = "email"


variavel11 = soup.find(id="telefone")
variavel11.string = "telefone"


############################################################################################
######################## ALTERAR DATA E HORAS CASO DE MERDA SEILA KK #######################
############################################################################################
# variavel12 = soup.find(id="data_abv")
# variavel12.string = "data_abv"

# variavel14 = soup.find(id="data_ext")
# variavel14.string = "data_ext"

# # Aprovado pela Instrução Normativa RFB nº 2.119, de 06 de dezembro de 2022.

# variavel13 = soup.find(id="horas")
# variavel13.string = "horas"

############################################################################################
############################################################################################

with open('C:\\TimeTravelStuff\\PHP\\htdocs\\ALIESTHTDOCS\\cardreceitateste\\arquivo_alterado.html', 'w', encoding='utf-8') as file:
    file.write(str(soup))


print('documento alterado com sucesso')
