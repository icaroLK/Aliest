from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.chrome.options import Options

# Configurações do Selenium para abrir o Chrome em modo normal
chrome_options = Options()
chrome_options.add_experimental_option("detach", True)  # Mantém a janela aberta após a execução

# Caminho para o ChromeDriver (substitua pelo caminho correto no seu sistema)
service = Service("C:\\ProgramData\\Microsoft\\Windows\\Start Menu\\Programs\\Google Chrome")

# Inicia o navegador
driver = webdriver.Chrome(service=service, options=chrome_options)

# Acessa o site desejado
url = "https://solucoes.receita.fazenda.gov.br/servicos/cnpjreva/Cnpjreva_Solicitacao.asp"
driver.get(url)

# Verifica se o site foi carregado corretamente
print(f"Site acessado: {driver.title}")

# Se quiser interagir com elementos da página, pode usar comandos como:
# exemplo: driver.find_element(By.ID, "element_id").click()

# Para fechar o navegador após a execução do script (opcional)
# driver.quit()
