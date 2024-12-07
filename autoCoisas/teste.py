import random

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
    

print(cnpj(True))