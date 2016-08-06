## PHP Laravel Mongo Basic API

This repo is an attempt to create a basic REST for MongoDB using laravel PHP

## Getting Started

* Install MongoDB [Windows Install](https://www.mongodb.com/download-center#community) The Windows 2008R version works for Windows 10.
* Install MongoDB PHP Drivers - Download [Windows DLL](https://pecl.php.net/package/mongodb) and copy to PHP ext folder and include file under extensions section of php.ini. See php documentation.
* Install laravel
```Shell
composer create-project laravel/laravel lamongo "5.1.*" -vvv
```
* Install laravel mongodb provider
```Shell
composer require jenssegers/mongodb -vvv
```
And add the service provider in config/app.php:
```PHP
Jenssegers\Mongodb\MongodbServiceProvider::class,
```
* Start MongoDB server. In console cd to MongoDB install folder and run "mongod.exe". You can also add the install folder to PATH, this will allow you to start mongod from any location. Folder also has the Mongo client "mongo.exe" which you can use to test/troubleshoot db.
* Start Laravel server. php artisan serve
* See route file for REST end points and methods. eg POST jsong to <server>:<port>/<collection-name>/ to create new object in collection (new collection will be created if collection does not exist).
That should be it. You *may* need to create that database in MongoDB server