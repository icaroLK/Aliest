import time
import pyautogui
from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from webdriver_manager.chrome import ChromeDriverManager

pyautogui.PAUSE = 0.5


diretorio_template = 'http://localhost/aliESTHTDOCS/cardreceitateste/index.html'

nome = 'xota'
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
pyautogui.hotkey('tab')
pyautogui.hotkey('tab')
pyautogui.hotkey('tab')
pyautogui.hotkey('tab')
pyautogui.hotkey('tab')
pyautogui.hotkey('tab')
pyautogui.hotkey('enter')
time.sleep(4)
pyautogui.write(diretorio_final)

pyautogui.hotkey('enter')
print(f'Arquivo salvo com sucesso na pasta: {diretorio_final}')



# driver.quit()
