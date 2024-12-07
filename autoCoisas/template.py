import pyautogui
import time
import keyboard
pyautogui.PAUSE = 1


def confirm():
    while True:
        if keyboard.is_pressed('caps lock'):
            while keyboard.is_pressed('caps lock'):  # Aguarda a tecla ser solta
                pass
            break





x, y = pyautogui.position()
print(f'Posição atual do mouse: {x}, {y}')
time.sleep(2)
confirm()




pyautogui.moveTo(926, 390)
time.sleep(0.2)
confirm()






pyautogui.moveTo(1784, 1000)
pyautogui.click()
confirm()



pyautogui.moveTo(728, 487)
pyautogui.click()
pyautogui.write('prospect_utigotti002')
confirm()




pyautogui.moveTo(1132, 485)
pyautogui.click()
pyautogui.write('por')
pyautogui.moveTo(1150, 595)
pyautogui.click()
confirm()




pyautogui.moveTo(581, 843)
pyautogui.click()
pyautogui.hotkey('ctrl', 'a')
confirm()



texto = '''👉 Oba, seu pedido chegou! 

🕘 Você tem pouco tempo para conhecer as propostas de crédito vinculadas a maquininha GETNET e impulsionar sua empresa! 

💳 Cartão de crédito com milhas
📈 5 a cada 7 clientes Santander possuem limite liberado
💰 Crédito vinculado as vendas na maquininha
📊 Venda e receba Linhas de Crédito exclusivas

Posso te passar nossas propostas para sua empresa?'''

pyautogui.write(texto)
pyautogui.scroll(-5000)
confirm()



pyautogui.moveTo(562, 607)
pyautogui.click()
pyautogui.moveTo(501, 717)
pyautogui.click()

confirm()


pyautogui.moveTo(555, 388)
pyautogui.click()
confirm()

pyautogui.moveTo(544, 503)
pyautogui.click()
confirm()

pyautogui.moveTo(559, 288)
pyautogui.click()
confirm()

pyautogui.moveTo(533, 413)
pyautogui.click()
confirm()





pyautogui.moveTo(964, 345)
pyautogui.click()
pyautogui.hotkey('ctrl', 'a')
pyautogui.write('Quero crédito!', duration=1)
confirm()


pyautogui.moveTo(945, 437)
pyautogui.click()
pyautogui.hotkey('ctrl', 'a')
pyautogui.write('Quais as taxas?', duration=1)
confirm()



pyautogui.moveTo(958, 534)
pyautogui.click()
pyautogui.hotkey('ctrl', 'a')
pyautogui.write('Encerrar conversa!', duration=1)
confirm()



pyautogui.moveTo(1710, 1003)
pyautogui.click()