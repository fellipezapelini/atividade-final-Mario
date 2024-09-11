# atividade-final-Mario
Relatório de Mudanças - Projeto CRUD para Gerenciamento de Alunos

1. Preparar o Ambiente
   - Mudança Realizada: O ambiente foi configurado com o PHP e o banco de dados SQLite, conforme solicitado. O banco de dados `atividade_db.sqlite` foi criado.
   - Conformidade: Sim, de acordo com o texto, o PHP está configurado e o banco de dados SQLite foi criado corretamente.

2. Configuração do Banco de Dados
   - Mudança Realizada: A tabela `Aluno` foi criada com os seguintes campos:
     - `id`: INT, INCREMENTO_AUTO, CHAVE PRIMÁRIA.
     - `uuid`: VARCHAR(36), ÚNICO.
     - `matricula`: VARCHAR(20), ÚNICO.
     - `nome`: VARCHAR(100).
     - `email`: VARCHAR(100), ÚNICO.
     - `data_nascimento`: DATA.
   - Arquivo: O arquivo `database.php` ou `db_connect.php` foi utilizado para configurar e testar a conexão com o banco de dados.
   - Conformidade: Sim, a estrutura da tabela e o teste de conexão foram implementados conforme descrito no texto.

3. Criação da Estrutura do Projeto
   - Mudança Realizada: Um arquivo de configuração para a conexão com o banco de dados foi criado (`db_connect.php`), contendo a lógica para conectar ao SQLite.
   - Conformidade: Sim, a conexão com o banco foi configurada de acordo com o texto.

4. Operações CRUD

a) Criar (Inserir um novo aluno)
   - Mudança Realizada: 
     - Um formulário HTML foi criado para inserir os dados do aluno.
     - A lógica de inserção foi implementada no arquivo `create.php` e `store.php`.
   - Conformidade: Sim, foi implementada uma funcionalidade para inserir alunos no banco de dados conforme solicitado.

b) Ler (Listar alunos)
   - Mudança Realizada: 
     - A página de listagem foi criada nos arquivos `list.php` e `list_json.php`.
     - A lógica de leitura e exibição dos alunos cadastrados foi implementada.
   - Conformidade: Sim, foi implementada a funcionalidade de leitura e listagem de alunos.

c) **Atualizar (Editar informações de um aluno)
   - Mudança Realizada:
     - Um formulário foi criado no arquivo `edit.php` para editar os dados de um aluno existente.
     - A lógica para atualizar os dados foi implementada no arquivo `update.php`.
   - Conformidade: Sim, a atualização dos dados foi implementada conforme o pedido.

d) **Excluir (Deletar um aluno)
   - Mudança Realizada: 
     - A funcionalidade de exclusão foi implementada no arquivo `delete.php`, que exclui alunos pelo `id` fornecido.
     - Botões de exclusão foram adicionados à página de listagem.
   - Conformidade: Sim, a exclusão de alunos foi implementada conforme o solicitado.

5. Testar as Funcionalidades
   - Mudança Realizada: Foram realizados testes para verificar o funcionamento de todas as operações CRUD (inserção, leitura, atualização e exclusão).
   - Validação de Campos: Implementada tanto no lado cliente (HTML/JavaScript) quanto no lado servidor (PHP), para garantir que os campos obrigatórios estão sendo preenchidos corretamente.
   - Proteção contra SQL Injection: Implementada usando prepared statements nas consultas SQL, o que previne ataques de SQL Injection.
   - Conformidade: Sim, todos os testes das operações CRUD foram realizados com sucesso, incluindo validações de campos e proteção contra SQL Injection.

6. **Melhores Opções
   - Mudança Realizada:
     - O campo `email` foi validado para garantir que seja único e esteja no formato correto.
     - As verificações para garantir a unicidade do `uuid` e da `matricula` foram implementadas no banco de dados e no código PHP.
   - **Conformidade**: Sim, o sistema foi configurado para garantir a unicidade de `email`, `uuid` e `matricula` conforme descrito no texto.

Conclusão
Todas as mudanças foram implementadas de acordo com o checklist original. A estrutura do banco de dados foi corretamente configurada, as operações CRUD foram realizadas com sucesso, e todas as validações e proteções necessárias foram aplicadas. O projeto está alinhado com as diretrizes estabelecidas no texto fornecido.
