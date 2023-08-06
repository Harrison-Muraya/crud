 Requirements
1. mysql
2. xampp
3. composer
4. Code Editor
5. Browser

Steps
1. Open the project folder using your editor,and rename a file named".env.example" to ".env" Open that file and change "DB_DATABASE=laravel" to "DB_DATABASE=crud".
2. Run your xampp and start apache server and mysql.
3. Open your terminal in project directory and run "composer install" comand.
4. Open mysql and create a schema with name "crud".
5. To run the project go to the terminal and execute this command "php artisan serve".This will run on http://127.0.0.1:8000
6. In your browser paste the link and you will encounter an error"no application encryption key has been spesified". To solve this go on your terminal and excute this command"php artisan key:generate" then refresh your browuser to see register/login page.
7. To create the necessary tables run this command "php artisan migrate"
8. To create one user and one blog using seeder excute this command"php artisan db:seed". 
9. TO login use the following name=maina and password=1234.