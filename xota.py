import weasyprint
from bs4 import BeautifulSoup
import os

# Função para converter PDF para HTML
def pdf_to_html(pdf_path, html_path):
    # Usando WeasyPrint para converter PDF para HTML
    weasyprint.HTML(pdf_path).write_html(html_path)

# Função para modificar o HTML
def modificar_html(html_path, alteracoes):
    # Ler o conteúdo HTML
    with open(html_path, 'r', encoding='utf-8') as file:
        html_content = file.read()
    
    # Usando BeautifulSoup para parsear o HTML
    soup = BeautifulSoup(html_content, 'html.parser')
    
    # Realizar as alterações no conteúdo
    for old_text, new_text in alteracoes.items():
        # Encontrar todas as ocorrências do texto antigo e substituir
        for element in soup.find_all(text=old_text):
            element.replace_with(new_text)

    # Salvar o HTML modificado
    with open(html_path, 'w', encoding='utf-8') as file:
        file.write(str(soup))

# Função para converter HTML de volta para PDF
def html_to_pdf(html_path, pdf_output_path):
    # Usando WeasyPrint para converter o HTML de volta para PDF
    weasyprint.HTML(html_path).write_pdf(pdf_output_path)

# Caminho do PDF original
pdf_path = '00.960.176 FERNANDO OLIVEIRA SANTOS ALIEST.pdf'

# Caminho temporário do HTML
html_path = 'temp_output.html'

# Caminho do novo PDF
novo_pdf_path = 'comprovante_alterado.pdf'

# Alterações a serem feitas no HTML
alteracoes = {
    "00.960.176/0001-95": "99.999.999/0001-99",  # Exemplo de alteração de CNPJ
    "FERRARI AUTOMOBILES": "NOVA EMPRESA LTDA",   # Alteração do nome empresarial
    "RUA EXEMPLO": "NOVO LOGRADOURO",              # Alteração do endereço
}

# Processo completo:
# 1. Converter o PDF para HTML
pdf_to_html(pdf_path, html_path)

# 2. Modificar o HTML
modificar_html(html_path, alteracoes)

# 3. Converter o HTML modificado de volta para PDF
html_to_pdf(html_path, novo_pdf_path)

# Limpar o arquivo HTML temporário
os.remove(html_path)

print(f"Novo PDF gerado: {novo_pdf_path}")
