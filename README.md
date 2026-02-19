# Test Audit Class Generator

![Static Badge](https://img.shields.io/badge/PHP-8.0-4F5B93?style=for-the-badge&logo=php&logoColor=ffffff) ![Static Badge](https://img.shields.io/badge/Docker-20.10.2-2496ED?style=for-the-badge&logo=docker&logoColor=ffffff)

This project is a test environment for the Audit Class Generator. It uses PHP 8.0 and Docker containers to run.

## Prerequisites

- Docker
- Docker Compose

## Project Structure

- `workspace/`: just a wrapping folder on your machine
  - `audit-class-generator/`: the composer library patrick-maynard/audit-class-generator
  - `test-audit-class-generator/`: this project

## Run locally

### Install

To install dependencies, run:

```bash
docker-compose run --rm php-cli composer install
```

### Usage

To test the composer library patrick-maynard/audit-class-generator run:

```bash
docker-compose run --rm php-cli vendor/bin/audit-class-generator
```

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
