# Título do Blog

Estudantes:

- __Davidson Lucas Novais Nicácio__ - _dvdsoncomp@gmail.com_

## Inicialização

### Linux

Execute  o comando:

```bash
Docker compose up
```



Para esconder a saída de dados no terminal adicione `-d` ao final do comando.

### Comandos de iniciais

O container com possui os comandos iniciais de php tem o nome de *lamp-php8*, para realizar os comandos referentes, assim como os comandos do composer,  é preciso executar dentro deste container:

```bash
docker exec lamp-php8 []
```



#### Instalando Pacotes Composer

Para instalar o os pacotes composer, execute:

```bash 
docker exec lamp-php8 composer install
```



#### Atualizar o Banco

Para atualizar a estrutura do banco, execute:

```bash
docker exec lamp-php8 vendor/bin/migrate-doctrine migrate
```



## Referências

- [LAMP stack built with Docker Compose](https://github.com/sprintcube/docker-compose-lamp) - fork original para iniciação do projeto
- [Composer](https://getcomposer.org/) - gerenciador de pacotes php
- [Doctrine](https://www.doctrine-project.org/projects.html) - conjunto de projetos auxiliares
  - [ORM](https://doctrine-project.org/projects/orm.html) - Gerador de mapper do banco de dados
  - [Migrations](https://www.doctrine-project.org/projects/migrations.html) - 

