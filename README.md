 Requirements
1. MySQL
2. xampp
3. composer
4. Code Editor
5. Browser

Steps
1. Open the project folder using your editor, and rename a file named".env.example" to ".env" Open that file and change "DB_DATABASE=laravel" to "DB_DATABASE=crud".
2. Run your xampp and start the Apache server and MySQL.
3. Open your terminal in the project directory and run the "composer install" command.
4. Open MySQL and create a schema with the name "crud".
5. To run the project go to the terminal and execute this command "php artisan serve".This will run on http://127.0.0.1:8000
6. In your browser paste the link and you will encounter an error"no application encryption key has been specified". To solve this go to your terminal and execute 
   this command "php artisan key:generate" then refresh your browser to see the register/login page.
7. To create the necessary tables run this command "php artisan migrate"
8. To create one user and one blog using seeder execute this command "php artisan db:seed". 
9. To login use the following name=maina and password=1234.
