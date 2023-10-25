<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Create new Laraval 10 Project:

```
composer create-project laravel/laravel [folder-name]
```

### or use Composer installer:

laravel new [folder-name] --git <- Use the last commend to initialize local git repo

## Manually initialize the repo:

cd [folder-name]

git init <- initialize repo

git add . <- add all files to stage area

git commit -m"initial commit" <- first commi and message

## Ppush to a remote repo:

git remote add origin [repolink.git]

git branch -M main

git push -u origin main