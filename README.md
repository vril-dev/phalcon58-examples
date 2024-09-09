# phalcon58-examples
インストール
```sh
docker-compose up -d --build
# dbとアプリパス設定
docker-compose exec --user={uid} cp exampe.config.ini config.ini
docker-compose exec --user={uid} web composer install
```
