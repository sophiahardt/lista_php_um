# Lista de Exercícios em PHP 

Este repositório apresenta exercícios práticos que colocam à prova os principais conceitos de programação em PHP 

## Exercício 01 – Calculadora da Engenharia
- **Função:** `calcularFormula(x, y)`
- **Descrição:** Aplica a fórmula \((x^2 + y^2) ÷ (x + y)\).
- **Regras:**  
  - Se a soma \(x + y = 0\), retorna mensagem de erro informando que não é possível dividir por zero.
- **Objetivo:** Automatizar cálculos matemáticos utilizados em projetos de engenharia.

## Exercício 02 – Espelho Mágico
- **Função:** `inverterTexto(texto)`
- **Descrição:**  
  - Retorna o texto completamente invertido.  
  - Exibe também a quantidade de caracteres da string original.
- **Objetivo:** Manipulação e análise de strings.

## Exercício 03 – Cadastro Seguro
- **Função:** `mascararCpf(cpf)`
- **Descrição:** Substitui todos os dígitos do CPF por `*`, mantendo visíveis apenas os quatro últimos.
- **Objetivo:** Proteção de dados sensíveis dos usuários.

## Exercício 04 – Gerador de Senhas
- **Função:** `gerarSenha(tamanho)`
- **Descrição:** Gera uma senha aleatória com letras maiúsculas, minúsculas, números e caracteres especiais.
- **Objetivo:** Criar senhas temporárias seguras para colaboradores.

## Exercício 05 – Estatísticas de Texto
- **Função:** `analisarTexto(texto)`
- **Descrição:** Retorna:
  - Quantidade de palavras  
  - Quantidade de caracteres  
  - Quantidade de vogais  
  - Quantidade de consoantes
- **Objetivo:** Obter métricas básicas de textos enviados por autores.

## Exercício 06 – Conversor de Temperatura
- **Função:** `converterTemperatura(valor, origem, destino)`
- **Descrição:** Converte valores entre Celsius, Fahrenheit e Kelvin.
- **Objetivo:** Facilitar a integração de sensores com diferentes escalas de temperatura.

## Exercício 07 – Sistema de Descontos
- **Função:** `calcularDesconto(valor)`
- **Descrição:** Aplica regras de desconto:
  - Até R$100,00 → sem desconto  
  - Acima de R$100,00 → 10%  
  - Acima de R$500,00 → 20%  
  - Acima de R$1.000,00 → 30%  
- **Retorno:** Valor original, desconto aplicado e valor final.
- **Objetivo:** Automatizar descontos em compras online.

## Exercício 08 – Organizador de Lista
- **Função:** `ordenarNomes(lista)`
- **Descrição:**  
  - Recebe nomes separados por vírgulas.  
  - Remove espaços extras.  
  - Ordena em ordem alfabética.  
  - Retorna lista organizada.
- **Objetivo:** Gestão de listas de alunos.

## Exercício 09 – Verificador Matemático
- **Função:** `analisarNumero(n)`
- **Descrição:** Informa se o número é:
  - Par ou ímpar  
  - Primo ou não  
  - Perfeito ou não
- **Objetivo:** Verificação de propriedades matemáticas.

## Exercício 10 – Sistema de Notas
- **Função:** `calcularMedia(notas)`
- **Descrição:** Retorna:
  - Maior nota  
  - Menor nota  
  - Média  
  - Situação final (Aprovado, Recuperação ou Reprovado)
- **Objetivo:** Automatizar avaliação escolar.

## Exercício 11 – Formatador de Relatórios
- **Função:** `formatarTexto(texto)`
- **Descrição:** Retorna:
  - Texto em maiúsculas  
  - Texto em minúsculas  
  - Primeira letra de cada palavra em maiúscula  
  - Quantidade de caracteres
- **Objetivo:** Padronização de relatórios.

## Exercício 12 – Catálogo de Produtos
- **Função:** `analisarProdutos(produtos)`
- **Descrição:** Retorna:
  - Produto mais caro  
  - Produto mais barato  
  - Média dos preços  
  - Pesquisa de produto informado pelo usuário
- **Objetivo:** Organização de catálogo de supermercado.

## Exercício 13 – Criptografia Simples
- **Funções:**  
  - `criptografarMensagem(texto)` → aplica Cifra de César  
  - `descriptografarMensagem(texto)` → recupera mensagem original
- **Objetivo:** Proteção de mensagens simples.

## Exercício 14 – Estatísticas Numéricas
- **Função:** `estatisticasNumericas(numeros)`
- **Descrição:** Retorna:
  - Soma  
  - Média  
  - Maior valor  
  - Menor valor  
  - Mediana  
  - Quantidade de pares  
  - Quantidade de ímpares
- **Objetivo:** Geração de estatísticas para análise de dados.

## Exercício 15 – Biblioteca de Funções
- **Arquivo:** `funcoes.php`
- **Descrição:** Contém pelo menos 10 funções úteis, como:
  - Calcular IMC  
  - Validar e-mail  
  - Gerar senha aleatória  
  - Contar vogais  
  - Inverter texto  
  - Calcular idade  
  - Converter moeda  
  - Formatar telefone  
  - Gerar saudação conforme horário  
  - Validar senha forte  
- **Arquivo de demonstração:** `index.php` → mostra exemplos práticos de uso.
- **Objetivo:** Criar uma biblioteca reutilizável para diversos sistemas.

