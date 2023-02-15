# CodeIgniter 4 - Build Your First Application

## About the project?

Base on Docs of CI4:

[Build Your First Application](https://codeigniter.com/user_guide/tutorial/).

With new feature added for better understanding the framework

What was added:

- taking advantages of layout system
- Edit news item
- remove news item
- used of form_open helper
- better routes organization
- better visual

## What was used

- php: 8.1
- mysql: 8
- Docker
- CodeIgniter: 4.3.1

## image of the App

![CI4 News-Improved](app_screen.png 'News APp')

## Editor and Recommend extensions

- Editor: [VS Code](https://code.visualstudio.com) (By Microsoft)

- [PHP Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client) (By Ben Mewburn)

- [PHP Namespace Resolver](https://marketplace.visualstudio.com/items?itemName=MehediDracula.php-namespace-resolver) (By Mehedi Hassan)

- [PHP Awesome Snippets](https://marketplace.visualstudio.com/items?itemName=hakcorp.php-awesome-snippets) (By HakCorp)

- To better developement it is taked advantages of this two wonderfull vscode extensions:
  - [Docker](https://marketplace.visualstudio.com/items?itemName=ms-azuretools.vscode-docker) (By Microsoft): to manage docker containers in vs code
  - [Dev Containers](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers) (By Microsoft): to use vscode inside of the container.

## Setup (using docker without compose)

php image: read the Dockerfile

mysql image in terminal:

```bash

docker run --name db_ci \
     -e MYSQL_ROOT_PASSWORD=secret \
     -e MYSQL_DATABASE=ci4 \
     -e MYSQL_USER=dev \
     -e MYSQL_PASSWORD=secret \
     -dp 3307:3306 mysql;
```
