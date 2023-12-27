pa run po maam ng composer install and npm install once cloned, if di po maam nagwork pa rin, delete na lang po node modules and then run npm install again po... then once it's done po... i usually open 3 terminals po for npm run dev, npm run watch, and php artisan serve....

once cloned:
composer install
npm install
php artisan key:generate
php artisan migrate

to run project:
npm run dev
npm run watch
php artisan serve

yan po maam, regarding sa creation ng admin po.. pre planned ko po siya before na wala po creation.. na if ever admin po maam is sesendan na lang ng credentials.. kumbaga made for them na in the official process.. pero for the sake of testing po maam create ka na lang po through normal sign up operations and then manually change po maam user in mysql so set 'is_admin' to 1 for true.. it is set to 0 by default when signing up... 

create account through normal operations,
once done, go to mysql phpmyadmin
edit the account data,
change is_admin column from 0 to 1

there is a button on the main login po maam which is the logo..when clicked, it will then redirect you po sa admin login to which you can enter your login credential.. unable po makalog in ang regular user sa admin login po maam,and vice versa. tas kapag nasa admin home ka po maam i added a user list sa side bar to see all the users as well as delete and edit them... yung home po is similar rin sa regular user in which you can post,like,comment and delete... but because it has admin access, kaya niya po madelete both the post and the comment.

click logo to be redirected to admin login in the normal login page,
use admin account credentials(is_admin set to 1)

user list available through the sidebar,
can see all the users, as well as delete and edit name and admin rights,
can delete every post and comment.
