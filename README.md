##Como rodar

###Requisitos
    * Unbutu 20.4
    * PHP 8 
    * Laravel 9
    * Docker

###Passo a passo
1. Acesse a pasta do projeto
2. Rode o comando **docker-compose up -d** no terminal: Para startar os containers
3. Acesse no seu navegador a url **localhost:8000**
4. Para acessar o banco de dados: Digite no seu navegador a url **localhost:8081**
5. Importar a tabela tasks(1).sql no SGBD phpmyadmin
    * No browser com o acesso ao SGBD 
        ->Clique no botão: **Importar**
        ->Clique em: **Choose File**
        ->Escolha o arquivo 
        ->Escrole a barra de rolagem, clique no botão a baixo **Importar**.