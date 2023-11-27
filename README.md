# Dealerleasing Assessment
Available at: https://dealerleasing.makkinga.online/

## Installation
To install the project, you need to clone the repository,

```bash
git clone git@github.com:makkinga/dl-assessment.git
```

copy the `.env.example` file to `.env`,
```bash
cp .env.example .env
```

install the dependencies,

```bash
composer install
yarn install
```

and seed the database.
```bash
php artisan migrate:fresh --seed
```

## Usage
You can use the following commands to run the project

```bash
php artisan serve
```

# Testing
To run the tests, you can use the following command

```bash
php artisan test
```
