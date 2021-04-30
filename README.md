## Instalação

* Instale o [Composer](https://getcomposer.org/download) e o [Npm](https://nodejs.org/en/download)
* Clone o repositório: `git clone https://github.com/map-os/mapos.git`
* Depois acesse a pasta MAPOS, `cd mapos`
* Instale as dependências `composer install ; npm install ; npm run production`
* Crie o arquivo de configuração de variáveis de ambiente `cp .env.production .env`
* Configure as variáveis de ambiente e a conexão com o banco de dados no arquivo .env
* Rode os seeders `php artisan migrate:fresh --seed`
* Rode `php artisan key:generate`
* Rode `php artisan serve` para iniciar o servidor.
* Acesse o Map-OS no navegador: http://localhost:8000 ou url que você configurar.
* E logue com as credenciais

```bash
Login: admin@admin.com
Senha: admin
```

## Dependências de front-end

Ao atualizar dependências de front-end ou alterar arquivos CSS ou JS você precisará seguir as instruções abaixo.

1. Garanta que tenha o Node instalado.
2. Faça download do Gulp com o comando abaixo no seu terminal.

```
npm install gulp-cli -g
```

3. Depois de instalado o Gulp, rode npm install na raiz do projeto.

```
npm install
```

4. Execute o comando abaixo para compilar o CSS e JS:

```
gulp build:dist
```

Este comando irá gerarr os arquivos dentro da pasta `public` com os arquivos CSS, e JavaScript minificados.

