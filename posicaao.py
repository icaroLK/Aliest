import pyautogui
import time
import keyboard



x, y = pyautogui.position()
#print(f'Posição atual do mouse: {x}, {y}')

print(f'pyautogui.moveTo({x}, {y})')




cu = ['oi', 'xota', 'rola']


for c in range(3):
    print(cu[c])