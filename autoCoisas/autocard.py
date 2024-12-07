import pyautogui
import time
import keyboard
import random
pyautogui.PAUSE = 0.5


def confirm():
    while True:
        if keyboard.is_pressed('caps lock'):
            while keyboard.is_pressed('caps lock'):  # Aguarda a tecla ser solta
                pass
            break

def cnpj(punctuation):
    n = [random.randrange(10) for i in range(8)] + [0, 0, 0, 1]
    v = [2, 3, 4, 5, 6, 7, 8, 9, 2, 3, 4, 5, 6]
    s = sum(x * y for x, y in zip(reversed(n), v))
    d1 = 11 - s % 11
    if d1 >= 10:
      d1 = 0
    n.append(d1)
    s = sum(x * y for x, y in zip(reversed(n), v))
    d2 = 11 - s % 11
    if d2 >= 10:
      d2 = 0
    n.append(d2)
    if punctuation:
      return "%d%d.%d%d%d.%d%d%d/%d%d%d%d-%d%d" % tuple(n)
    else:
      return "%d%d%d%d%d%d%d%d%d%d%d%d%d%d" % tuple(n)
    



x, y = pyautogui.position()
print(f'Posição atual do mouse: {x}, {y}')

confirm()


pyautogui.moveTo(610, 686)
pyautogui.click()
pyautogui.hotkey('ctrl', 'a')
pyautogui.write(cnpj(False))
confirm()


pyautogui.moveTo(1257, 656, duration=0.1)
pyautogui.click()
confirm()


pyautogui.moveTo(376, 790)
pyautogui.click()
confirm()



pyautogui.hotkey('ctrl', 'shift', 'i')
pyautogui.moveTo(1540, 262, duration=0.5)
pyautogui.click()
confirm()


codigo = '''const input = prompt("Digite os valores separados por ponto e vírgula (;)\n\nCNPJ; RAZÃO; RUA; NUMERO; CEP; BAIRRO; EMAIL; TELEFONE:\n\n").toUpperCase();

const values = input.split(";").map(item => item.trim());

if (values.length < 8) {
    console.error("Número insuficiente de valores fornecidos. Certifique-se de incluir 8 valores.");
} else {
    const replacements = [
        { index: 2, text: values[0] },
        { index: 6, text: values[1] }, 
        { index: 21, text: values[2] }, 
        { index: 22, text: values[3] }, 
        { index: 23, text: "****" }, 
        { index: 24, text: values[4] }, 
        { index: 25, text: values[5] }, 
        { index: 28, text: values[6] }, 
        { index: 29, text: values[7] }  
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
}'''

#pyautogui.write(codigo)
pyautogui.hotkey('ctrl', 'v')
pyautogui.hotkey('enter')
confirm()


pyautogui.write('43.311.244/0001-06; 43.311.244 LUCAS RODRIGUES SIQUEIRA;  AV DO BATEL; 2020; 80.420-090; BATEL; LUCASRODRIGUES@OUTLOOK.COM; (41) 8813-3200')
pyautogui.hotkey('enter')
confirm()


pyautogui.hotkey('ctrl', 'shift', 'i')
pyautogui.scroll(-300)
pyautogui.hotkey('ctrl', 'p')
confirm()
