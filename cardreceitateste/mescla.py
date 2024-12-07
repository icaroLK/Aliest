import time
import pyautogui
import webbrowser
from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from webdriver_manager.chrome import ChromeDriverManager
from bs4 import BeautifulSoup

# pyautogui.PAUSE = 0.5

diretorio_html_template = 'C:\\TimeTravelStuff\\PHP\\htdocs\\ALIESTHTDOCS\\cardreceitateste\\index.html'
nome_html_alterado = 'novo_html'
diretorio_html_alterado = f'C:\\TimeTravelStuff\\PHP\\htdocs\\ALIESTHTDOCS\\cardreceitateste\\{nome_html_alterado}.html'





with open(diretorio_html_template, 'r', encoding='utf-8') as file:
    html_code = file.read()
soup = BeautifulSoup(html_code, 'lxml')


cnpj = '696969696969'
razaosocial = 'CARALHOOO'
logradouro = 'RUA FODASE'
numero = '420'
complemento = '****'
cep = '4206969420'
bairro = 'ÁGUA FODASE'
cidade = 'CURITIBA'
estado = 'PR'
email = 'TESTE@CARALHO.COM'
telefone = '(41) 8813-3200'


v1 = soup.find(id="cnpj")
v2 = soup.find(id="razaosocial")
v3 = soup.find(id="logradouro")
v4 = soup.find(id="numero")
v5 = soup.find(id="complemento")
v6 = soup.find(id="cep")
v7 = soup.find(id="bairro")
v8 = soup.find(id="cidade")
v9 = soup.find(id="estado")
v10 = soup.find(id="email")
v11 = soup.find(id="telefone")


v1.string = cnpj
v2.string = razaosocial
v3.string = logradouro
v4.string = numero
v5.string = complemento
v6.string = cep
v7.string = bairro
v8.string = cidade
v9.string = estado
v10.string = email
v11.string = telefone


with open(diretorio_html_alterado, 'w', encoding='utf-8') as file:
    file.write(str(soup))

print('documento alterado com sucesso')










diretorio_template = diretorio_html_alterado
nome = 'novo_pdf'
diretorio_final = f'C:\\TimeTravelStuff\\PHP\\htdocs\\ALIESTHTDOCS\\cardreceitateste\\{nome}.pdf'





service = Service(ChromeDriverManager().install())
driver = webdriver.Chrome(service=service)
driver.get(diretorio_template)



pyautogui.hotkey('ctrl', 'p')
time.sleep(2)
pyautogui.hotkey('shift', 'tab')
pyautogui.hotkey('shift', 'tab')
pyautogui.hotkey('shift', 'tab')
pyautogui.hotkey('shift', 'tab')
pyautogui.hotkey('enter')
pyautogui.hotkey('down')
pyautogui.hotkey('enter')
time.sleep(0.5)
pyautogui.hotkey('tab')
pyautogui.hotkey('tab')
pyautogui.hotkey('tab')
pyautogui.hotkey('tab')
pyautogui.hotkey('tab')
pyautogui.hotkey('tab')
pyautogui.hotkey('enter')
time.sleep(3)
pyautogui.write(diretorio_final)

pyautogui.hotkey('enter')
print(f'Arquivo salvo com sucesso na pasta: {diretorio_final}')




webbrowser.open(diretorio_final)