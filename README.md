Laravel 8 CRUD GENERATOR
---

 - need to install composer(https://getcomposer.org/download/) 
 - PHP version (8.1 => https://www.apachefriends.org/index.html)
 - need to install node JS (The official Node.js website has installation instructions for Node.js: https://nodejs.org)
 - need to install Laravel(8.0 through composer ==> from https://laravel.com/docs/8.x/installation)
 - update .ENV file (DB name, username & Password)

Step 1
---
For more details go through --
https://infyom.com/open-source/laravelgenerator/docs/8.0/installation

Once laravel generator step competed
---

 - npm install 
 - npm run dev

----

To add all support pacakges - 
---
composer update

To install Database-tables.
---
php artisan migrate

To install each migration.File can be found in --- database\migrations
---
 php artisan migrate --path=/database/migrations/<file_name>

 php artisan migrate:refresh =>Datatable tables drop and insert.

 php artisan migrate =>Migrate all tables


php artisan optimize 
- to clear cache

To Generate New View
---
 php artisan infyom:scaffold Post
 - to map foregin key => author_id  integer selectTable:users:name,id
 - status integer select:Draft:1,Published:2,Archived:3
 - status integer radio:Draft:1,Published:2


Add Spatie Laravel Permissions package
---
composer require spatie/laravel-permission

To clear cache
---
php artisan cache:clear

php artisan config:cache 

php artisan key:generate

 Finally to run
 ---
 php artisan server


 ================================ END =====================
