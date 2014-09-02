## Simple Laravel Server restful

### PreRequis

- Wamp 2.5
- ModRewrite!!

### Installation

- Unzip the project in "www" directory
- Create database "simplelaravelserver" and edit the database configuration in "simplelaravelserver/app/config/database.php"

Example :

`'mysql' => array(`    
`'driver' => 'mysql',`  
`'host' => 'localhost',`  
`'database' => 'simplelaravelserver',`  
`'username' => 'root',`  
`'password' => 'root',`  
`'charset' => 'utf8',`  
`'collation' => 'utf8_unicode_ci',`  
`'prefix' => '',)`  

- Run "php artisan" commande in /www/simplelaravelserver for create table and populate database with sample data

`php artisan migrate`  
`php artisan db:seed`  

### HTTPS Support

Force https support, uncomment this bloc in "simplelaravelserver/app/filters.php"

`App::before(function($request)`  
`{`  
`	/*`    
`	TODO : decommenter ce bloc pour forcer le https`    
`	if( ! Request::secure())`    
`	{`    
`	return Redirect::secure(Request::getRequestUri());`    
`	} */`    
`});`  

And configure apache with https virtual host

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
