# SUT - Simple Unit Testing #

Este é um sistema de correção de questões automática para algoritmos. SUT utiliza testes unitários e permite que você teste seus exercícios de maneira fácil e rápida. 
 
> O objetivo da SUT é proporcionar ao professor rápida configuração de testes unitários baseado em arquivo JSON, sem necessidade banco de dados. Aos estudantes o SUT tem como objetivo fornecer um ambiente para feedback de suas atividades e listas. 

**Ferramenta:**

SUT foi desenvolvido como tecnologias web (Html, Javascript, Css e PHP).
SUT utiliza o PHPDesktonp como Container

**Passos para configuração/adapitação:**

> Crie um arquivo json chamado list.json.
> Para cada questão crie uma pasta como o id fornecido no list.json.
> Dentro de cada pasta crie um arquivo chamado desc.json
> Compate a pasta (zip)
> Disponibilize para os alunos.
> Os alunos devem importat o json na página inicial do programa.

Obs: você pode ver um exemplo em www/repo_database

**Padrão Json**

> list.json: Fornece uma lista de problemas como nome e id (id é referente ao nome da pasta que terá o desc.json da questão.

```javascript

 {"list": [
{"title": "LISTA 1", 
"exercices": [ 
	{"title" :"NOME DO PROBLEMA", "folder": "PASTA"},
	{"title": "NOME DO PROBLEMA" , "folder": "PASTA"}
	]
} , 
{"title": "LISTA 2", 
"exercices": [ 
	{"title" :"NOME DO PROBLEMA", "folder": "PASTA"},
	{"title": "NOME DO PROBLEMA" , "folder": "PASTA"}
	]
}
]}
``` 


> desc.json: Forne o nome, a descrição e exemplos de entrada e saída que são exibidos aos usuários. Além disso, fornece um conjunto de testes unitários que será executado para verificar a corretude do código.

```javascript

 {"title": "NOME DO PROBLEMA" , "desc": "DESCRIÇÃO DO PROBLMEA",  "io": [
	{"input": "EXEMPLOS DE ENTRADA", "output": "EXEMPLOS DE SAIDA"},
	{"input": "EXEMPLOS DE ENTRADA", "output": "EXEMPLOS DE SAIDA"}
	], 

"cases":[
	{"input": "ENTRADAS", "output": "SAIDAS"}, {"input": "ENTRADA", "output": "SAIDA"}
	]
} 
``` 

### TELAS:

Home
![](https://github.com/LuisAraujo/Unit-Testing-Online/blob/main/tutorial/home_uto.png?raw=true)

Lista de Atividades
![](https://github.com/LuisAraujo/Unit-Testing-Online/blob/main/tutorial/list_uto.png?raw=true)

Exemplo de Problema
![](https://github.com/LuisAraujo/Unit-Testing-Online/blob/main/tutorial/problem_uto.png?raw=true)

Código Falhou
![](https://github.com/LuisAraujo/Unit-Testing-Online/blob/main/tutorial/fail_uto.png?raw=true)

Código Passou
![](https://github.com/LuisAraujo/Unit-Testing-Online/blob/main/tutorial/sucess_uto.png?raw=true)


Código com Erro
![](https://github.com/LuisAraujo/Unit-Testing-Online/blob/main/tutorial/erro_uto.png?raw=true)
