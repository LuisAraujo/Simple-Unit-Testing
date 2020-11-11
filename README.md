# UTO - Unit Testing Online #

Este é um sistema de correção de questões automática para algoritmos. UTO utiliza testes unitários e permite que você teste seus exercícios de maneira fácil e rápida. 
 
> O objetivo da UTO é proporcionar ao professor rápida configuração de testes unitários baseado em arquivo JSON, sem necessidade banco de dados. Aos estudantes o UTO tem como objetivo fornecer um ambiente para feedback de suas atividades e listas. 

**Ferramenta:**

UTO foi desenvolvido como tecnologias web (Html, Javascript, Css e PHP).

**Requisitos para instalação:**

Servidor Apache.

**Passos para instalação:**

Copie o projeto para o seu servidor
Modifique o arquivo json na pasta *problems*

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