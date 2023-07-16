# API de Clientes

Esta API permite realizar operações CRUD (Criar, Ler, Atualizar, Excluir) em uma entidade de clientes em um sistema.

## Endpoints

A seguir estão descritos os endpoints disponíveis na API:

### Adicionar um cliente

Permite adicionar um novo cliente ao banco de dados.

- **URL:** `http://localhost/Sistema_php/api/agregar.php`
- **Método:** GET
- **Parâmetros de consulta:**
  - `nome` (string, obrigatório): Nome do cliente.
  - `sobrenome` (string, obrigatório): Sobrenome do cliente.
  - `email` (string, obrigatório): E-mail do cliente.
  - `telefone` (string, obrigatório): Número de telefone do cliente.
  - `detalhes` (string): Detalhes adicionais do cliente.

**Exemplo de uso:**

```bash
  http://localhost/Sistema_php/api/agregar.php?nome=Tomas&sobrenome=Sojo&email=tomnas234@gmail.com&telefone=71999491188
```

### Consultar um cliente por ID

Permite obter as informações de um cliente específico pelo seu ID.

- **URL:** `http://localhost/Sistema_php/api/consultar.php`
- **Método:** GET
- **Parâmetros de consulta:**
  - `id` (inteiro, obrigatório): ID do cliente a ser consultado.

**Exemplo de uso:**

```bash
 http://localhost/Sistema_php/api/consultar.php 
```

### Consultar todos os clientes

Permite obter a lista de todos os clientes armazenados no banco de dados.

- **URL:** `http://localhost/Sistema_php/api/consultar.php`
- **Método:** GET

**Exemplo de uso:**

```bash
  http://localhost/Sistema_php/api/consultar.php
```


### Editar um cliente

Permite editar as informações de um cliente existente no banco de dados.

- **URL:** `http://localhost/Sistema_php/api/editar.php`
- **Método:** GET
- **Parâmetros de consulta:**
  - `id` (inteiro, obrigatório): ID do cliente a ser editado.
  - `nome` (string, obrigatório): Novo nome do cliente.
  - `sobrenome` (string, obrigatório): Novo sobrenome do cliente.
  - `email` (string, obrigatório): Novo e-mail do cliente.
  - `telefone` (string, obrigatório): Novo número de telefone do cliente.
  - `detalhes` (string): Novos detalhes adicionais do cliente.

**Exemplo de uso:**

```bash
  http://localhost/Sistema_php/api/editar.php?id=5&nome=Juan&sobrenome=Perez&email=juan@example.com&telefone=1234567890&detalhes=Novos+detalhes
```


### Excluir um cliente

Permite excluir um cliente existente do banco de dados.

- **URL:** `http://localhost/Sistema_php/api/eliminar.php`
- **Método:** GET
- **Parâmetros de consulta:**
  - `id` (inteiro, obrigatório): ID do cliente a ser excluído.

**Exemplo de uso:**

```bash
  http://localhost/Sistema_php/api/eliminar.php?id=5
```

Certifique-se de substituir as URLs com a configuração correta do seu servidor e ajustar quaisquer detalhes adicionais que sejam específicos para a sua API.

Tomas Sojo
