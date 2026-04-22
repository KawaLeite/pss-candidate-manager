# PSS Candidate Manager 🚀

Este é um sistema de Back-end desenvolvido para gerenciar inscrições em Processos Seletivos Simplificados (PSS). O projeto oferece uma API REST e CRUD completo para o gerenciamento de candidatos, garantindo integridade dos dados e facilidade de integração.

## 🛠️ Tecnologias e Ferramentas
* **Framework:** Laravel 12.55.0
* **Linguagem:** PHP 8.2.12
* **Banco de Dados:** PostgreSQL
* **Arquitetura:** REST API (MVC)

## 📌 Funcionalidades
* CRUD completo de candidatos (Cadastro, Listagem, Atualização e Exclusão).
* Validação de dados sensíveis (CPF único).
* Respostas padronizadas em formato JSON.
* Tratamento de exceções e erros de validação.

## 📖 Documentação da API

Todas as requisições devem conter o header `Accept: application/json`.

| Método | Endpoint | Descrição |
| :--- | :--- | :--- |
| **GET** | `/api/candidatos` | Lista todos os candidatos cadastrados |
| **GET** | `/api/candidatos/{id}` | Retorna os detalhes de um candidato específico |
| **POST** | `/api/candidatos` | Realiza a inscrição de um novo candidato |
| **PUT** | `/api/candidatos/{id}` | Atualiza as informações de um candidato |
| **DELETE** | `/api/candidatos/{id}` | Remove uma inscrição do sistema |

### Exemplo de corpo para POST (JSON):
```json
{
  "nome_candidato": "João Silva",
  "nascimento_candidato": "2006-06-10",
  "identidade_candidato": "123.456.789-10",
  "email_candidato": "pessoa@email.com",
  "telefone_candidato": "(68)98875-1015",
  "cidade_candidato": "Londrina",
  "estado_candidato": "Paraná",
  "curso_candidato": "Engenharia de Software",
  "instituicao_curso": "UniFil",
  "periodo_curso": "1º período"
}
```
## 🚀 Como rodar o projeto localmente

### Passo a passo

1. **Clone o repositório e acesse-o:**
   ```
   Clonar: git clone https://github.com/KawaLeite/pss-candidate-manager.git

   Acessar: cd pss-candidate-manager

3. **Instale as dependências do PHP:**
   ```
   composer install

5. **Configure o ambiente:**
   * Duplique o arquivo de exemplo:
     ````
     cp .env.example .env
   * Abra o arquivo .env e configure as credenciais do seu banco de dados PostgreSQL:
     ```
     DB_CONNECTION=pgsql
     DB_HOST=127.0.0.1
     DB_PORT=5432
     DB_DATABASE=nome_do_seu_banco
     DB_USERNAME=seu_usuario
     DB_PASSWORD=sua_senha
     
6. **Gere a chave da aplicação:**
   ```
   php artisan key:generate

8. **Rode as migrations (Criar tabela de candidatos):**
   ```
   php artisan migrate

10. **Inicie o servidor de desenvolvimento:**
  ```
   php artisan serve
   ```
O projeto estará disponível em: 
```
http://127.0.0.1:8000
```

---
Desenvolvido por [Kawã Leite](https://linkedin.com/in/kawaleite) 🎓
