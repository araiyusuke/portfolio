# laravel

## コンテナ作成

docker-compose.ymlがあるディレクトリに行き

docker-compose up --build

## Laravelをインストール

docker-compose exec php bash

composer create-project laravel/laravel [プロジェクト名] --prefer-dist "6.*"

_プロジェクト名は、developの場合

_composer create-project laravel/laravel develop --prefer-dist "6.*"

docker/nginx/default.confを開く

root /var/www/[プロジェクト名]/public;に修正

docker restart laravel_nginx

http://localhost:8081にアクセスするとLaravelのホーム画面が表示されたらLaravelのインストールが成功

## LaravelとMYSQLが接続できているかチェック


## .env

```
DB_CONNECTION=mysql
DB_HOST=laravel_mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=kjfdslkjfdsfds
```

docker-compose exec php bash

cd /var/www/develop

php artisan migrate
