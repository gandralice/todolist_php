# To-do List em PHP

Este é um projeto de uma lista de tarefas (To-do List) desenvolvida com PHP e conectada a um banco de dados PostgreSQL. A aplicação permite criar, visualizar, editar e apagar tarefas.

### Tecnologias Utilizadas

- **Backend:** PHP
- **Banco de Dados:** PostgreSQL (usando PDO)
- **Frontend:** HTML, CSS e JavaScript (com jQuery)

### Como Executar

1.  **Clone o repositório** para a sua máquina local.

2.  **Base de Dados:**

    - Crie uma base de dados no PostgreSQL chamada `to_do`.
    - Execute o seguinte comando SQL para criar a tabela necessária:
      ```sql
      CREATE TABLE task (
          id SERIAL PRIMARY KEY,
          description VARCHAR(255) NOT NULL,
          completed BOOLEAN DEFAULT FALSE
      );
      ```

3.  **Configuração:**

    - No ficheiro `database/conn.php`, atualize as credenciais de acesso (`$hostname`, `$db`, `$username`, `$password`) para a sua base de dados.

4.  **Servidor:**
    - Coloque a pasta do projeto no diretório do seu servidor web local (como o `htdocs` do XAMPP).
    - Acesse ao projeto através do seu navegador, normalmente em `http://localhost/nome-da-pasta-do-projeto`.
