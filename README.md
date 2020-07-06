# Lumen Generator

### Installation：
   
    composer require james.xue/lumen-generator --dev
    
Inside your bootstrap/app.php file, add:

```php
$app->register(\Vinhson\ControllerMakeCommand::class);
```
### Commands：
<div>
    <table border="0">
	  <tr>
	    <th>command</th>
	    <th>description</th>
	  </tr>
	  <tr>
	    <td>php artisan env</td>
	    <td>Display the current framework environment</td>
	  </tr>
	  <tr>
	    <td>php artisan make:command name</td>
	    <td>Create a new command file</td>
	  </tr>
	  <tr>
        <td>php artisan make:controller name</td>
        <td>Create a new controller file</td>
      </tr>
	  <tr>
        <td>php artisan make:event name</td>
        <td>Create a new event file</td>
      </tr>
	  <tr>
        <td>php artisan make:exception name || php artisan make:exception name -r</td>
        <td>Create a new custom exception class</td>
      </tr>
	  <tr>
        <td>php artisan make:factory</td>
        <td>Create a new model factory</td>
      </tr>
	  <tr>
        <td>php artisan make:jon name</td>
        <td>Create a new jon file</td>
      </tr>
	  <tr>
        <td>php artisan make:listener name || php artisan make:listener name -event EventName</td>
        <td>Create a new listener file</td>
      </tr>
	  <tr>
        <td>php artisan make:middleware name</td>
        <td>Create a new middleware file</td>
      </tr>
	  <tr>
        <td>php artisan make:model name</td>
        <td>Create a new model file</td>
      </tr>
	  <tr>
        <td>php artisan make:observer name || php artisan make:observer name -model ModelName</td>
        <td>Create a new observer file</td>
      </tr>
	  <tr>
        <td>php artisan make:provider</td>
        <td>Create a new service provider class</td>
      </tr>
	  <tr>
        <td>php artisan make:request name</td>
        <td>Create a new request file</td>
      </tr>
	  <tr>
        <td>php artisan make:rule name</td>
        <td>Create a new validation rule</td>
      </tr>
	  <tr>
        <td>php artisan event:generate</td>
        <td>Generate the missing events and listeners based on registration</td>
      </tr>
	  <tr>
        <td>php artisan key:generate</td>
        <td>Set the application key</td>
      </tr>
	  <tr>
        <td>php artisan storage:link</td>
        <td>Create a symbolic link from "public/storage" to "storage/app/public</td>
      </tr>
	</table>
</div> 
