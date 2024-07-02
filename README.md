

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
- [Laravel](https://laravel.com/docs/11.x))
- [PhP v8](https://www.php.net/downloads.php)
- [Xampp V8](https://www.apachefriends.org/download.html)

### Installing

Here is how you can get the environment up and running in your local computer

Install all dependencies

    npm install

run the migrations

    php artisan migrate
    

Edit .env with your configurations

     cp .env.example .env
     
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

## Deployment


## Authors

  - Erick Kamau
  - Ajani Ayiera

## License

Feel free to customize this template according to your project's specific needs.


## Acknowledgments

  - Tony Xhepa
    
