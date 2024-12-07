import tkinter as tk
from tkinter import messagebox
import time
import pyautogui
import webbrowser
from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from webdriver_manager.chrome import ChromeDriverManager
from bs4 import BeautifulSoup

dados = {}

def abrir_formulario():
    tela_inicio.destroy()
    formulario = tk.Tk()
    formulario.title("Icaro rei delas")


    def salvar_dados():
        dados["CNPJ"] = entry_cnpj.get()
        dados["Razão Social"] = entry_razaosocial.get()
        dados["Logradouro"] = entry_logradouro.get()
        dados["Número"] = entry_numero.get()
        dados["Complemento"] = entry_complemento.get()
        dados["CEP"] = entry_cep.get()
        dados["Bairro"] = entry_bairro.get()
        dados["Cidade"] = entry_cidade.get()
        dados["Estado"] = entry_estado.get()
        dados["Email"] = entry_email.get()
        dados["Telefone"] = entry_telefone.get()

        formulario.destroy()
        criar_pdf()

    
    labels = ["CNPJ:", 
              "Razão Social:", 
              "Logradouro:", 
              "Número:", 
              "Complemento:", 
              "CEP:", 
              "Bairro:", 
              "Cidade:", 
              "Estado:", 
              "Email:", 
              "Telefone:"]
    entries = []

    for i, label in enumerate(labels):
        tk.Label(formulario, text=label).grid(row=i, column=0, padx=10, pady=5, sticky="e")
        entry = tk.Entry(formulario, width=40)
        entry.grid(row=i, column=1, padx=10, pady=5)
        entries.append(entry)


    entry_cnpj = entries[0]
    entry_razaosocial = entries[1]
    entry_logradouro = entries[2]
    entry_numero = entries[3]
    entry_complemento = entries[4]
    entry_cep = entries[5]
    entry_bairro = entries[6]
    entry_cidade = entries[7]
    entry_estado = entries[8]
    entry_email = entries[9]
    entry_telefone = entries[10]


    tk.Button(formulario, text="Gerar PDF", command=salvar_dados).grid(row=len(labels), column=0, columnspan=2, pady=10)
    formulario.mainloop()

def criar_pdf():
    print("Executando outro código com os seguintes dados:")

    cnpj = dados.get("CNPJ", "")
    razaosocial = dados.get("Razão Social", "")
    logradouro = dados.get("Logradouro", "")
    numero = dados.get("Número", "")
    complemento = dados.get("Complemento", "")
    cep = dados.get("CEP", "")
    bairro = dados.get("Bairro", "")
    cidade = dados.get("Cidade", "")
    estado = dados.get("Estado", "")
    email = dados.get("Email", "")
    telefone = dados.get("Telefone", "")

    
    diretorio_html_template = 'C:\\TimeTravelStuff\\PHP\\htdocs\\ALIESTHTDOCS\\cardreceitateste\\index.html'

    # Abrindo o HTML template
    with open(diretorio_html_template, 'r', encoding='utf-8') as file:
        html_code = file.read()
    soup = BeautifulSoup(html_code, 'lxml')

    # Alterando os valores no HTML
    soup.find(id="cnpj").string = cnpj
    soup.find(id="razaosocial").string = razaosocial
    soup.find(id="logradouro").string = logradouro
    soup.find(id="numero").string = numero
    soup.find(id="complemento").string = complemento
    soup.find(id="cep").string = cep
    soup.find(id="bairro").string = bairro
    soup.find(id="cidade").string = cidade
    soup.find(id="estado").string = estado
    soup.find(id="email").string = email
    soup.find(id="telefone").string = telefone


    nome_html_alterado = razaosocial
    diretorio_html_alterado = f'C:\\TimeTravelStuff\\PHP\\htdocs\\ALIESTHTDOCS\\cardreceitateste\\{nome_html_alterado}.html'

    # Salvando o novo HTML
    with open(diretorio_html_alterado, 'w', encoding='utf-8') as file:
        file.write(str(soup))

    print('Documento alterado com sucesso')

    # Gerando o PDF
    diretorio_template = diretorio_html_alterado
    nome = razaosocial
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
    time.sleep(2.3)
    pyautogui.write(diretorio_final)

    pyautogui.hotkey('enter')
    print(f'Arquivo salvo com sucesso na pasta: {diretorio_final}')

    webbrowser.open(diretorio_final)

# Criando a tela inicial
tela_inicio = tk.Tk()
tela_inicio.title("Icaro rei delas")

# Botão para abrir o formulário
tk.Button(tela_inicio, text="Criar Card", command=abrir_formulario).pack(pady=60, padx=120)

# Executando a tela inicial
tela_inicio.mainloop()
