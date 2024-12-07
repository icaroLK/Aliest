from seleniumteste import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.by import By
import time

from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC


# Caminho para o ChromeDriver
service = Service("C:\\TimeTravelStuff\\Aliest\\chromedriver.exe")

# Inicializar o WebDriver
driver = webdriver.Chrome(service=service)

try:
    # Passo 1: Abrir o site do Gerador de CNPJ
    driver.get("https://www.geradorcnpj.com")
 #   time.sleep(3)  # Aguardar carregamento

    # Passo 2: Clicar no botão "Gerar Novo CNPJ"
    gerar_cnpj_button = driver.find_element(By.CLASS_NAME, "btn.btn-lg.btn-success")
    gerar_cnpj_button.click()
  #  time.sleep(3)  # Esperar o CNPJ ser gerado


    # Passo 3: Capturar o CNPJ gerado
    cnpj_element = driver.find_element(By.CLASS_NAME, "form-control.form-control-lg.form-control-borderless")
    cnpj = cnpj_element.get_attribute("value")
    print(f"CNPJ capturado: {cnpj}")

    # Agora você pode continuar com o resto do seu fluxo, por exemplo, indo para o site da Receita Federal
    receita_url = f"https://solucoes.receita.fazenda.gov.br/servicos/cnpjreva/Cnpjreva_Solicitacao.asp?cnpj={cnpj}"
    driver.get(receita_url)
  #  time.sleep(5.43)  # Tempo para verificar a página

    checkbox = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable((By.ID, "checkbox"))
    )
    checkbox.click()
 #   time.sleep(2)

    # Passo 4: Resolver o CAPTCHA (neste ponto, manualmente)
    print("Por favor, resolva o CAPTCHA manualmente e pressione Enter aqui...")
    input()  # Aguarda o usuário resolver o CAPTCHA

    # # Passo 5: Verificar se a palavra "BAIXADA" aparece
    # page_source = driver.page_source  # Obtém o HTML da página
    # if "BAIXADA" in page_source:
    #     print("A palavra 'BAIXADA' foi encontrada na página.")
    # else:
    #     print("A palavra 'BAIXADA' NÃO foi encontrada na página.")



finally:
    # Passo 6: Fechar o navegador
    driver.quit()
