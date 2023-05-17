# Título do Blog

Estudantes:

- __Davidson Lucas Novais Nicácio__ - _dvdsoncomp@gmail.com_
- __Kelly da Cruz Vencionek__ - _kvencionek@gmail.com_


## Inicialização

### Linux

Crie um arquivo .env para setar as variáveis de ambiente do projeto, o arquivo sample.env por ser usado como refêrencia. 
Execute o comando:

```bash
Docker compose build
```

Assim o docker irá instalar todos os recursos necessários para os containers, após terminar execute o commando:

```bash
Docker compose up
```

Esse commando irá iniciar o servidor. 
Para esconder a saída de dados no terminal adicione `-d` ao final do comando.

Com o servidor ligado execute o commando, que irá executar os commandos iniciais:
```bash
Docker exec lamp-php8 "sh init.sh"
```

### Comandos dentro do container

O container com possui os comandos iniciais de php tem o nome de *lamp-php8*, para realizar os comandos referentes, assim como os comandos do composer,  é preciso executar dentro deste container:

```bash
docker exec lamp-php8 [commando vai aqui]
```


## Referências

- [LAMP stack built with Docker Compose](https://github.com/sprintcube/docker-compose-lamp) - fork original para iniciação do projeto
- [Composer](https://getcomposer.org/) - gerenciador de pacotes php
- [Doctrine](https://www.doctrine-project.org/projects.html) - conjunto de projetos auxiliares
  - [ORM](https://doctrine-project.org/projects/orm.html) - Gerador de mapper do banco de dados
  - [Migrations](https://www.doctrine-project.org/projects/migrations.html) - 

