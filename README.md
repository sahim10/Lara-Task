1.Clone Repository:

git clone https://github.com/sahim10/Lara-task.git
cd Lara-task

2.Install Dependencies
Install PHP and Composer for Laravel backend.
Install Node.js and npm for the frontend.

composer install

npm install

3.Set Up the Environment:

cp .env.example .env #Copy .env.example to .env:
php artisan key:generate #Generate the application key
php artisan migrate --seed  #Set up the database and run migrations


4.Run the Application:

php artisan serve  #To start the Laravel backend server

npm run dev  #To run the Vue 3 frontend

php artisan test #run unit test