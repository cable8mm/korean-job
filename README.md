## About Project Korean Job

[![build & tests](https://github.com/cable8mm/korean-job/actions/workflows/tests.yml/badge.svg)](https://github.com/cable8mm/korean-job/actions/workflows/tests.yml)
[![coding style](https://github.com/cable8mm/korean-job/actions/workflows/coding-style-php.yml/badge.svg)](https://github.com/cable8mm/korean-job/actions/workflows/coding-style-php.yml)
[![release date](https://img.shields.io/github/release-date/cable8mm/korean-job)](https://github.com/cable8mm/korean-job/releases)
[![minimum PHP version](https://img.shields.io/badge/php-%3E%3D_8.2.0-8892BF.svg)](https://github.com/cable8mm/korean-job)

The website "korean-job.co.nz" is intended for both Korean employees and employers.

## Installation

[Install valet](https://laravel.com/docs/10.x/valet#installation):

```sh
composer global require laravel/valet

echo "export PATH=~/.composer/vendor/bin:$PATH" >> ~/.bashrc
source ~/.bashrc

valet install
```

Cloning:

```sh
cd ~/Sites

git clone https://github.com/cable8mm/korean-job.git

cd korean-job
```

Setting:

```sh
composer install # install Project

valet secure # set https

valet use; # setup php@8.2

composer global update; # update global composer

npm install # install npm libraries

valet open # visit https://korea-job.test
```

Database:

- Database : korean-job

```sh
php artisan migrate

php artisan nova:user

# make Name, Email Address, Password and create user
```

## Maintenance

### Add languages

```sh
php artisan lang:add af
```

Refer to [this link](https://laravel-lang.com/available-locales-list.html#lists-available-locales-am) about it.

## Test

```sh
composer test
```

## Build

Development:

```sh
npm run dev
```

Production:

**Push must be done in Production state.**

```sh
npm run prod
```

## CI/CD

For testing third party integration, you should make github repository secrets as belows.

*Laravel Nova* is required,

- NOVA_PASSWORD
- NOVA_USERNAME

*Kakao Login* is optional for social logins,

- KAKAO_CLIENT_ID
- KAKAO_CLIENT_SECRET
- KAKAO_REDIRECT_URI


The stage server is automatically deployed in Merge, and the live server is deployed manually at [Envoy](https://envoyer.io/). However, you must first create a GitHub Release before live deployment.
