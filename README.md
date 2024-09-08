# Laravel Starter Base App Kit

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lightszentip/laravel-starter-base-app.svg?style=flat-square)](https://packagist.org/packages/lightszentip/laravel-starter-base-app)
[![Latest Version on Packagist](https://img.shields.io/badge/packagist-jetstream-blue)](https://packagist.org/packages/lightszentip/laravel-starter-base-app#dev-jetstream)
[![Latest Version on Packagist](https://img.shields.io/badge/packagist-filamentphp-blue)](https://packagist.org/packages/lightszentip/laravel-starter-base-app#dev-filamentphp)
[![Total Downloads](https://img.shields.io/packagist/dt/lightszentip/laravel-starter-base-app.svg?style=flat-square)](https://packagist.org/packages/lightszentip/laravel-starter-base-app)
[![Larastan](https://github.com/lightszentip/laravel-starter-base-app/actions/workflows/larastan.yml/badge.svg)](https://github.com/lightszentip/laravel-starter-base-app/actions/workflows/larastan.yml)
[![Laravel](https://github.com/lightszentip/laravel-starter-base-app/actions/workflows/laravel.yml/badge.svg)](https://github.com/lightszentip/laravel-starter-base-app/actions/workflows/laravel.yml)
[![PHPCodeSniffer](https://github.com/lightszentip/laravel-starter-base-app/actions/workflows/phpcodesniffer.yml/badge.svg)](https://github.com/lightszentip/laravel-starter-base-app/actions/workflows/phpcodesniffer.yml)
[![PHPmd](https://github.com/lightszentip/laravel-starter-base-app/actions/workflows/phpmd.yml/badge.svg)](https://github.com/lightszentip/laravel-starter-base-app/actions/workflows/phpmd.yml)
[![Psalm](https://github.com/lightszentip/laravel-starter-base-app/actions/workflows/psalm.yml/badge.svg)](https://github.com/lightszentip/laravel-starter-base-app/actions/workflows/psalm.yml)

## Introduction

Laravel Starter Base App Kit is a boilerplate for starting new Laravel projects with a pre-configured setup for code quality tools, environment configuration, and essential packages. This kit aims to streamline the development process by providing a solid foundation for building robust and maintainable Laravel applications.

## Installation

To create a new project using this starter kit, run the following command:

```shell
composer create-project lightszentip/laravel-starter-base-app
```


## Setup

After creating the project, navigate to the project directory and set up your environment:

```shell
cd laravel-starter-base-app
cp .env.example .env
```

Run the database migrations and seeders:

```shell
php artisan migrate
php artisan db:seed
```

## Features

- **Pre-configured Code Quality Tools**: Includes Pint, Larastan, PHPMD, PSALM, and PHPCodeSniffer.
- **Environment Configuration**: Easy setup for environment variables.
- **Essential Packages**: Pre-installed packages for security, static analysis, and more.

## Code Quality Tools

This starter kit comes with several code quality tools pre-configured:

- **Pint**: [Pint Workflow](./.github/workflows/pint.yml)
- **Larastan**: [Larastan Workflow](./.github/workflows/larastan.yml)
- **PHPMD**: [PHPMD Workflow](./.github/workflows/phpmd.yml)
- **PSALM**: [PSALM Workflow](./.github/workflows/psalm.yml)
- **PHPCodeSniffer**: [PHPCodeSniffer Workflow](./.github/workflows/phpcodesniffer.yml)

## Usage

### Running Code Quality Tools

To run the code quality tools, use the following commands:

- **Pint**: `./vendor/bin/pint`
- **Larastan**: `./vendor/bin/phpstan analyse`
- **PHPMD**: `./vendor/bin/phpmd app text phpmd.ruleset.xml`
- **PSALM**: `./vendor/bin/psalm`
- **PHPCodeSniffer**: `./vendor/bin/phpcs`

### Environment Configuration

Configure your environment variables in the `.env` file. Here are some key settings:

- **APP\_NAME**: The name of your application.
- **APP\_ENV**: The environment your application is running in (local, production, etc.).
- **APP\_KEY**: The application key (use `php artisan key:generate` to generate one).
- **DB\_CONNECTION**: The database connection type (e.g., mysql).
- **DB\_HOST**: The database host.
- **DB\_PORT**: The database port.
- **DB\_DATABASE**: The database name.
- **DB\_USERNAME**: The database username.
- **DB\_PASSWORD**: The database password.

## Contributing

Contributions are welcome! Please submit a pull request or open an issue to discuss your ideas.

## License

This project is licensed under the MIT License. See the [LICENSE](./LICENSE) file for details.

## Support

For any issues or questions, please open an issue on the [GitHub repository](https://github.com/lightszentip/laravel-starter-base-app/issues).
