

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
ª   +---Http
ª   ª   ª   Kernel.php
ª   ª   ª   
ª   ª   +---Controllers
ª   ª   ª       AdminController.php
ª   ª   ª       CarController.php
ª   ª   ª       ChatController.php
ª   ª   ª       Controller.php
ª   ª   ª       EventsController.php
ª   ª   ª       MechanicCarController.php
ª   ª   ª       MechanicController.php
ª   ª   ª       PermissionController.php
ª   ª   ª       RoleController.php
ª   ª   ª       UserCarController.php
ª   ª   ª       UserController.php
ª   ª   ª       Web3LoginController.php
ª   ª   ª       
ª   ª   +---Middleware
ª   ª   ª       Authenticate.php
ª   ª   ª       EncryptCookies.php
ª   ª   ª       HandleInertiaRequests.php
ª   ª   ª       mechanic.php
ª   ª   ª       PreventRequestsDuringMaintenance.php
ª   ª   ª       RedirectbyRole.php
ª   ª   ª       RedirectIfAuthenticated.php
ª   ª   ª       TrimStrings.php
ª   ª   ª       TrustHosts.php
ª   ª   ª       TrustProxies.php
ª   ª   ª       user.php
ª   ª   ª       ValidateSignature.php
ª   ª   ª       VerifyCsrfToken.php
ª   ª   ª       
ª   ª   +---Requests
ª   ª   ª       CreateRoleRequest.php
ª   ª   ª       StoreCarRequest.php
ª   ª   ª       UpdateCarRequest.php
ª   ª   ª       UserCarRequest.php
ª   ª   ª       
ª   ª   +---Resources
ª   ª           CarResource.php
ª   ª           EventsResource.php
ª   ª           RoleResource.php
ª   ª           UserCarResource.php
ª   ª           UserResource.php
ª   ª           UserSharedResource.php
ª   ª           
ª   +---Models
ª   ª       Car.php
ª   ª       User.php
ª   ª       
ª   +---Providers
ª           AppServiceProvider.php
ª           AuthServiceProvider.php
ª           BroadcastServiceProvider.php
ª           EventServiceProvider.php
ª           FortifyServiceProvider.php
ª           JetstreamServiceProvider.php
ª           RouteServiceProvider.php
ª           
+---bootstrap
ª   ª   app.php
ª   ª   
ª   +---cache
ª           .gitignore
ª           packages.php
ª           services.php
ª           
+---config
ª       app.php
ª       auth.php
ª       broadcasting.php
ª       cache.php
ª       cors.php
ª       database.php
ª       filesystems.php
ª       fortify.php
ª       hashing.php
ª       jetstream.php
ª       logging.php
ª       mail.php
ª       permission.php
ª       queue.php
ª       sanctum.php
ª       services.php
ª       session.php
ª       view.php
ª       
+---database
ª   ª   .gitignore
ª   ª   
ª   +---factories
ª   ª       UserFactory.php
ª   ª       
ª   +---migrations
ª   ª       2014_10_12_000000_create_users_table.php
ª   ª       2014_10_12_100000_create_password_reset_tokens_table.php
ª   ª       2014_10_12_200000_add_two_factor_columns_to_users_table.php
ª   ª       2019_08_19_000000_create_failed_jobs_table.php
ª   ª       2019_12_14_000001_create_personal_access_tokens_table.php
ª   ª       2024_06_28_080121_create_sessions_table.php
ª   ª       2024_06_28_080753_create_permission_tables.php
ª   ª       2024_06_28_144611_create_cars_table.php
ª   ª       2024_07_03_093547_update_your_table_add_foreign_key.php
ª   ª       2024_07_03_112909_user_cars.php
ª   ª       
ª   +---seeders
ª           AdminSeeder.php
ª           DatabaseSeeder.php
ª           PermissionSeeder.php
ª           RoleSeeder.php
ª           
+---node_modules
ª   ª   .package-lock.json
ª   ª   
          
+---public
ª   ª   .htaccess
ª   ª   favicon.ico
ª   ª   index.php
ª   ª   robots.txt
ª   ª   
ª   +---storage
ª           .gitignore
ª           
+---resources
ª   +---css
ª   ª       app.css
ª   ª       
ª   +---js
ª   ª   ª   app.js
ª   ª   ª   bootstrap.js
ª   ª   ª   
ª   ª   +---Components
ª   ª   ª       ActionMessage.vue
ª   ª   ª       ActionSection.vue
ª   ª   ª       ApplicationLogo.vue
ª   ª   ª       ApplicationMark.vue
ª   ª   ª       AuthenticationCard.vue
ª   ª   ª       AuthenticationCardLogo.vue
ª   ª   ª       Banner.vue
ª   ª   ª       BarChart.vue
ª   ª   ª       Checkbox.vue
ª   ª   ª       ConfirmationModal.vue
ª   ª   ª       ConfirmsPassword.vue
ª   ª   ª       DangerButton.vue
ª   ª   ª       DialogModal.vue
ª   ª   ª       Dropdown.vue
ª   ª   ª       DropdownLink.vue
ª   ª   ª       FormSection.vue
ª   ª   ª       InputError.vue
ª   ª   ª       InputLabel.vue
ª   ª   ª       Modal.vue
ª   ª   ª       NavLink.vue
ª   ª   ª       PrimaryButton.vue
ª   ª   ª       ResponsiveNavLink.vue
ª   ª   ª       SecondaryButton.vue
ª   ª   ª       SectionBorder.vue
ª   ª   ª       SectionTitle.vue
ª   ª   ª       SidebarLink.vue
ª   ª   ª       Table.vue
ª   ª   ª       TableDataCell.vue
ª   ª   ª       TableHeaderCell.vue
ª   ª   ª       TableRow.vue
ª   ª   ª       TextInput.vue
ª   ª   ª       Welcome.vue
ª   ª   ª       
ª   ª   +---Composables
ª   ª   ª       permissions.js
ª   ª   ª       
ª   ª   +---Layouts
ª   ª   ª   ª   AdminLayout.vue
ª   ª   ª   ª   AppLayout.vue
ª   ª   ª   ª   
ª   ª   ª   +---Pages
ª   ª   ª       +---Admin
ª   ª   ª           +---Users
ª   ª   +---Pages
ª   ª       ª   Dashboard.vue
ª   ª       ª   PrivacyPolicy.vue
ª   ª       ª   SharedPage.vue
ª   ª       ª   TermsOfService.vue
ª   ª       ª   Welcome.vue
ª   ª       ª   
ª   ª       +---Admin
ª   ª       ª   ª   AdminIndex.vue
ª   ª       ª   ª   
ª   ª       ª   +---Cars
ª   ª       ª   ª       CarsIndex.vue
ª   ª       ª   ª       Create.vue
ª   ª       ª   ª       Edit.vue
ª   ª       ª   ª       
ª   ª       ª   +---Roles
ª   ª       ª   ª       Create.vue
ª   ª       ª   ª       Edit.vue
ª   ª       ª   ª       RolesIndex.vue
ª   ª       ª   ª       
ª   ª       ª   +---Users
ª   ª       ª           Create.vue
ª   ª       ª           Edit.vue
ª   ª       ª           UsersIndex.vue
ª   ª       ª           
ª   ª       +---API
ª   ª       ª   ª   Index.vue
ª   ª       ª   ª   
ª   ª       ª   +---Partials
ª   ª       ª           ApiTokenManager.vue
ª   ª       ª           
ª   ª       +---Auth
ª   ª       ª       ConfirmPassword.vue
ª   ª       ª       ForgotPassword.vue
ª   ª       ª       Login.vue
ª   ª       ª       Register.vue
ª   ª       ª       ResetPassword.vue
ª   ª       ª       TwoFactorChallenge.vue
ª   ª       ª       VerifyEmail.vue
ª   ª       ª       
ª   ª       +---Mechanic
ª   ª       ª       Edit.vue
ª   ª       ª       MechanicIndex.vue
ª   ª       ª       
ª   ª       +---Profile
ª   ª       ª   ª   Show.vue
ª   ª       ª   ª   
ª   ª       ª   +---Partials
ª   ª       ª           DeleteUserForm.vue
ª   ª       ª           LogoutOtherBrowserSessionsForm.vue
ª   ª       ª           TwoFactorAuthenticationForm.vue
ª   ª       ª           UpdatePasswordForm.vue
ª   ª       ª           UpdateProfileInformationForm.vue
ª   ª       ª           
ª   ª       +---User
ª   ª               Create.vue
ª   ª               UserIndex.vue
ª   ª               
ª   +---markdown
ª   ª       policy.md
ª   ª       terms.md
ª   ª       
ª   +---views
ª           app.blade.php
ª           
+---routes
ª       api.php
ª       channels.php
ª       console.php
ª       web.php
ª       
+---storage          
    +---Feature
    ª       ApiTokenPermissionsTest.php
    ª       BrowserSessionsTest.php
    ª       CreateApiTokenTest.php
    ª       DeleteAccountTest.php
    ª       DeleteApiTokenTest.php
    ª       ExampleTest.php
    ª       ProfileInformationTest.php
    ª       TwoFactorAuthenticationSettingsTest.php
    ª       UpdatePasswordTest.php
    ª                          
    ª                         
    ª   +---jetstream
    ª   ª   ª   composer.json
    ª   ª   ª   LICENSE.md
    ª   ª   ª   README.md
    ª   ª   ª   testbench.yaml
    ª   ª   ª   
    ª   ª   +---config
    ª   ª   ª       jetstream.php
    ª   ª   ª       
    ª   ª   +---database
    ª   ª   ª   +---factories
    ª   ª   ª   ª       TeamFactory.php
    ª   ª   ª   ª       UserFactory.php
    ª   ª   ª   ª       
    ª   ª   ª   +---migrations
    ª   ª   ª           2014_10_12_000000_create_users_table.php
    ª   ª   ª           2020_05_21_100000_create_teams_table.php
    ª   ª   ª           2020_05_21_200000_create_team_user_table.php
    ª   ª   ª           2020_05_21_300000_create_team_invitations_table.php
    ª   ª   ª           
    ª   ª   +---routes
    ª   ª   ª       inertia.php
    ª   ª   ª       livewire.php
    ª   ª   ª       
    ª   ª   +---src
    ª   ª   ª   ª   Agent.php
    ª   ª   ª   ª   ConfirmsPasswords.php
    ª   ª   ª   ª   Features.php
    ª   ª   ª   ª   HasProfilePhoto.php
    ª   ª   ª   ª   HasTeams.php
    ª   ª   ª   ª   InertiaManager.php
    ª   ª   ª   ª   InteractsWithBanner.php
    ª   ª   ª   ª   Jetstream.php
    ª   ª   ª   ª   JetstreamServiceProvider.php
    ª   ª   ª   ª   Membership.php
    ª   ª   ª   ª   OwnerRole.php
    ª   ª   ª   ª   RedirectsActions.php
    ª   ª   ª   ª   Role.php
    ª   ª   ª   ª   Team.php
    ª   ª   ª   ª   TeamInvitation.php
    
                    
```
    
