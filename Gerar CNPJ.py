import random

def gerar_cnpj():
    def calcular_digito(cnpj, pesos):
        soma = sum(int(cnpj[i]) * pesos[i] for i in range(len(pesos)))
        resto = soma % 11
        return '0' if resto < 2 else str(11 - resto)

    # Geração da base do CNPJ (8 números para a empresa + 4 para a filial)
    base = ''.join([str(random.randint(0, 9)) for _ in range(8)]) + '0001'

    # Cálculo do primeiro dígito verificador
    pesos_primeiro = [5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2]
    digito1 = calcular_digito(base, pesos_primeiro)

    # Cálculo do segundo dígito verificador
    pesos_segundo = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2]
    digito2 = calcular_digito(base + digito1, pesos_segundo)

    # Combina a base com os dígitos verificadores
    cnpj = base + digito1 + digito2
    return f"{cnpj[:2]}.{cnpj[2:5]}.{cnpj[5:8]}/{cnpj[8:12]}-{cnpj[12:]}"

# Gerar e imprimir um CNPJ
for c in range(32):
    print(gerar_cnpj())
