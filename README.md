# CRUD PDO com Singleton e DAO
> ## Vamos utilizar o padrão DAO (data access object).
Que serve para separa a lógica do acesso aos dados

> Utilizaremos 

 * Uma banco de dados mysql com nome pdo 
 * Uma tabela produtos
  Com os campos:
    * id
    * nome
    * descricao

> Directorios

* App
   * Model
      * Conexao.php
      * Produto.php
      * ProdutoDao.php
* vendor
* index-php
* composer.json


> Análogia CRUD com Banco de Dados.

 * create  Insert.
 
 * read  Select.
 
 * update  Update.
 
 * delete  Delete.

Ao fazer esta análogia temos que levar em consideração o modelo de negócio.
Exemplo Um produto novo ao ser criado na tabela que não existe, é inserido
para ler ele é selecionado
ao fazer uma actualização update 
ao eliminar delete

__Produto.php se encarrega de acessar os dados como get e set dos campos da tabela produtos(acesso aos dados);__
__ProdutoDao.php ele se encarrega do negocio a lógica;__

> ## Conexao foi feita aplicando padrao de projecto sigleton 

O Padrão Singleton tem como definição garantir que uma classe tenha apenas uma instância de si mesma e que forneça um ponto global de acesso a ela. Ou seja, uma classe gerencia a própria instância dela além de evitar que qualquer outra classe crie uma instância dela. Para criar a instancia tem-se que passar pela classe obrigatoriamente, nenhuma outra classe pode instanciar ela. O Padrão Singleton também oferece um ponto global de acesso a sua instância. A própria classe sempre vai oferecer a própria instância dela e caso não tenha ainda uma instância, então ela mesma cria e retorna essa nova instância criada.
[tirado deste link](https://www.devmedia.com.br/padrao-de-projeto-singleton-em-java/26392)

> **OBS:Não há um tratamento de frontend neste projecto.**


by: Gelson Ferreira  :wink:  [meu email](nicosbrilho@gmail.com)
