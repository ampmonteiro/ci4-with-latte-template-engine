# CodeIgniter 4 with Latte template engine

## About the project?

Base on my improved version of `ci4 - Build Your First Application`:

[Original improved](https://github.com/ampmonteiro/ci4-build-your-first-App).

What was added:

- Latte template engine in news related views

## What was used

- php: 8.1
- mysql: 8
- Docker
- CodeIgniter: 4.3.1
- Latte template engine: 3.0.5 -> [more about it](https://latte.nette.org/en/)

## side by side template code (Latte vs Vanilla Ci4 template engine)

![Ci4 Template engine vs Latte template engine](latte_vs_ci4_template_v2.png 'Ci4 Template engine vs Latte template engine')

## image of the App

![CI4 News-Improved](app_screen.png 'News APP with Latte')

## Editor and Recommend extensions

- Editor: [VS Code](https://code.visualstudio.com) (By Microsoft)

- [PHP Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client) (By Ben Mewburn)

- [PHP Namespace Resolver](https://marketplace.visualstudio.com/items?itemName=MehediDracula.php-namespace-resolver) (By Mehedi Hassan)

- [PHP Awesome Snippets](https://marketplace.visualstudio.com/items?itemName=hakcorp.php-awesome-snippets) (By HakCorp)

- [Nette Latte + Neon](https://marketplace.visualstudio.com/items?itemName=Kasik96.latte) (Martin Kase)

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
