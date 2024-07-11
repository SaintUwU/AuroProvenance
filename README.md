

# AutoProvenance
This is a Web Based application that is used to store details of a 
vehicle including its repairs,replaced parts and the likes so as to 
prevent buyers from expiriencing buyer's remorse. The system has an 
optional log in with meta mask which uses block-chain technology to
ensure users log in securely and with minimal effort.

## Getting Started

The following step by step instructions ensure that you can run the
project on your local machine for development and testing purposes.

### Prerequisites

Requirements for the software and other tools to build, test and push

- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/docs/11.x)
- [PhP v8](https://www.php.net/downloads.php)
- [Xampp V8](https://www.apachefriends.org/download.html)

### Testing

Here is how you can get the environment up and running in your local computer

Install all dependencies

    npm install

run the migrations

    php artisan migrate
    

Edit .env with your configurations

    $ php -r "copy('.env.example', '.env');"
     
Add additional php packages

    composer require kornrunner/keccak --ignore-platform-reqs 
    composer require simplito/elliptic-php --ignore-platform-reqs


compile the js

     npm run dev
     
start the server

      php artisan serve
      
## Running the tests

To run the tests on the system it is done as follows

### 

         npm test

or with phpunit

          vendor/bin/phpunit


### Disclaimer
To integrate with block chain it requires a certain php file that is available for a certain version hence you may need to
update your php version if you are using a lower version or runcomposer update like so.

        composer update

## Features
**History of cars including repairs and accidents**
**Secure and private through blockchain encryption techniques**

## Acknowledgments

  - Tony Xhepa

  
    

## Running the server
```bash
# Clone the repository
     git clone https://github.com/yourusername/AutoProvenance.git

# Navigate to the project directory
     cd AutoProvenance

# Install dependencies
    npm install

# Start the development server
    npm start
```

## Authors
  - Erick Kamau
  - Ajani Ayiera



## Acknowledgments

  - Tony Xhepa

```
     
+---app
|   +---Actions
|   |   +---Events
|   |   |       MechanicMessage.php
|   |   |       UserMessage.php
|   |   |       
|   |   +---Fortify
|   |   |       CreateNewUser.php
|   |   |       PasswordValidationRules.php
|   |   |       ResetUserPassword.php
|   |   |       UpdateUserPassword.php
|   |   |       UpdateUserProfileInformation.php
|   |   |       
|   |   \---Jetstream
|   |           DeleteUser.php
|   |           
|   +---Console
|   |       Kernel.php
|   |       
|   +---Exceptions
|   |       Handler.php
|   |       
|   +---Http
|   |   |   Kernel.php
|   |   |   
|   |   +---Controllers
|   |   |       AdminController.php
|   |   |       CarController.php
|   |   |       ChatController.php
|   |   |       Controller.php
|   |   |       EventsController.php
|   |   |       MechanicCarController.php
|   |   |       MechanicController.php
|   |   |       PermissionController.php
|   |   |       RoleController.php
|   |   |       UserCarController.php
|   |   |       UserController.php
|   |   |       Web3LoginController.php
|   |   |       
|   |   +---Middleware
|   |   |       Authenticate.php
|   |   |       EncryptCookies.php
|   |   |       HandleInertiaRequests.php
|   |   |       mechanic.php
|   |   |       PreventRequestsDuringMaintenance.php
|   |   |       RedirectbyRole.php
|   |   |       RedirectIfAuthenticated.php
|   |   |       TrimStrings.php
|   |   |       TrustHosts.php
|   |   |       TrustProxies.php
|   |   |       user.php
|   |   |       ValidateSignature.php
|   |   |       VerifyCsrfToken.php
|   |   |       
|   |   +---Requests
|   |   |       CreateRoleRequest.php
|   |   |       StoreCarRequest.php
|   |   |       UpdateCarRequest.php
|   |   |       UserCarRequest.php
|   |   |       
|   |   \---Resources
|   |           CarResource.php
|   |           EventsResource.php
|   |           RoleResource.php
|   |           UserCarResource.php
|   |           UserResource.php
|   |           UserSharedResource.php
|   |           
|   +---Models
|   |       Car.php
|   |       User.php
|   |       
|   \---Providers
|           AppServiceProvider.php
|           AuthServiceProvider.php
|           BroadcastServiceProvider.php
|           EventServiceProvider.php
|           FortifyServiceProvider.php
|           JetstreamServiceProvider.php
|           RouteServiceProvider.php
|           
+---bootstrap
|   |   app.php
|   |   
|   \---cache
|           .gitignore
|           packages.php
|           services.php
|           
+---config
|       app.php
|       auth.php
|       broadcasting.php
|       cache.php
|       cors.php
|       database.php
|       filesystems.php
|       fortify.php
|       hashing.php
|       jetstream.php
|       logging.php
|       mail.php
|       permission.php
|       queue.php
|       sanctum.php
|       services.php
|       session.php
|       view.php
|       
+---database
|   |   .gitignore
|   |   
|   +---factories
|   |       UserFactory.php
|   |       
|   +---migrations
|   |       2014_10_12_000000_create_users_table.php
|   |       2014_10_12_100000_create_password_reset_tokens_table.php
|   |       2014_10_12_200000_add_two_factor_columns_to_users_table.php
|   |       2019_08_19_000000_create_failed_jobs_table.php
|   |       2019_12_14_000001_create_personal_access_tokens_table.php
|   |       2024_06_28_080121_create_sessions_table.php
|   |       2024_06_28_080753_create_permission_tables.php
|   |       2024_06_28_144611_create_cars_table.php
|   |       2024_07_03_093547_update_your_table_add_foreign_key.php
|   |       2024_07_03_112909_user_cars.php
|   |       
|   \---seeders
|           AdminSeeder.php
|           DatabaseSeeder.php
|           PermissionSeeder.php
|           RoleSeeder.php
    
                    
```
    
