# API de Ranking para Jogo

Esta é uma API simples para um jogo que permite inserir e atualizar informações de jogadores em um banco de dados MySQL.
é retonar um json com o nome é pontos do jogadores

## Configuração

1. **Clonando o repositório:**

2. **Importando o banco de dados:**
- Execute o script SQL fornecido (`script.sql`) para criar o banco de dados e a tabela necessária.

3. **Configurando a conexão com o banco de dados:**
- Edite o arquivo `conexao.php` e atualize as informações de conexão com o seu banco de dados MySQL.

## Uso

- **Receber parâmetros via URL:**
- Para inserir ou atualizar informações de jogadores, passe os parâmetros `nome` e `pontos` na URL para o arquivo `receber_parametros.php`. Exemplo:
 ```
 http://seuservidor.com/receber_parametros.php?nome=NomeDoJogador&pontos=100
 ```

- **Listar dados em JSON:**
- Para obter uma lista de todos os jogadores e suas pontuações em formato JSON, acesse o arquivo `listar_dados.php`. Exemplo:
 ```
 http://seuservidor.com/listar_dados.php
 ```

## Contribuição

Contribuições são bem-vindas! Se você encontrar algum problema ou tiver alguma sugestão de melhoria, por favor, abra uma issue ou envie um pull request.

## Créditos

- Desenvolvido por [João Marcos](https://grupo.jm7087.com)

## Licença

Este projeto é licenciado sob a Licença MIT - veja o arquivo [LICENSE](LICENSE) para mais detalhes.
