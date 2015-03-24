fuelphp

## tutorial

### setup
```
curl get.fuelphp.com/oil | sh

mkdir fuelphptutorial
cd fuelphptutorial
oil create demo_app
cd demo_app
vim fuel/app/config/config.php
  'default_timezone'   => 'Asia/Tokyo',
oil refine install
php composer.phar update
```

### git
```
rm -rf .git
git init
git status
git add .
git commit -m "Initial commit"
```

### GitLab

GitLabにプロジェクト作る

```
git remote add origin ssh://git@example.com/orita/fuelphp-demo_app.git
```

### docker-compose

Mac + boot2docker v1.5.0

```
docker-compose up -d db
docker-compose build
docker-compose run web php demo_app/oil refine migrate:current
docker-compose up -d web
```

### heroku

参考 [heroku Meets FuelPHP - Qiita](http://qiita.com/mikakane/items/a736112a8b68925d27a7)

```
php composer.phar require heroku/heroku-buildpack-php --dev
php composer.phar require ext-mbstring

heroku login
heroku create

heroku config:set BUILDPACK_URL=https://github.com/heroku/heroku-buildpack-php
heroku config:set FUEL_ENV=staging
heroku config # 確認

git add .
git commit -m "heroku"
git push heroku master
```
