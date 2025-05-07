**Task Preview**:
Build a dynamic CMS with a nested page structure using Laravel (backend) and Vue3 (frontend). The system must dynamically handle pages with unlimited nesting while resolving their unique content based on parent-child relationships.

Functional Requirements
Dynamic Nested Page Structure

Pages can be nested to any depth.

Each page has:

ID

parent_id (nullable for root-level pages)

Slug (non-unique, used for dynamic routing)

Title

Content

Sample Nested Structure:

Page1  

  └── Page2  

      ├── Page1  

      └── Page3  

          ├── Page4  

          └── Page5  

Page5 (root-level page)  

Dynamic Routing

Create routes that dynamically resolve page content based on the tree structure.

Example routes:

/page1 → Displays Page1

/page1/page2 → Displays Page2

/page1/page2/page1 → Displays child Page1 (different from /page1)

/page1/page2/page3/page4 → Displays Page4

/page1/page3/page5 → Displays child Page5 (different from /page5)

General Rule:

Route resolution must consider the parent-child relationship.

Pages with the same slug must be distinguished based on their position in the tree.

CRUD for Pages

Build a backend interface to create, update, delete, and view pages with nested relationships.

Ensure the page structure updates dynamically when parent-child relationships change.

Dynamic Tree Visualization

On the frontend, display the page structure in a tree view (e.g., collapsible nested list).

Allow the tree to dynamically reflect updates (add, edit, delete pages).

Controller

Create a PageController that dynamically fetches and displays page content based on the requested route.

Technical Requirements
Framework: Laravel 11+ and Vue 3 (Composition API).

Database: MySQL (use migrations for the Pages table).

Tools: Composer, NPM, and GIT.

Architecture: Follow the MVC pattern and use Eloquent ORM for nested relationships.

Dynamic Tree:

Implement Eloquent's self-referencing relationships for the parent-child structure.

Avoid hardcoding routes—routing logic must dynamically resolve page hierarchy.

Tree View: Use Vue to create a nested, collapsible UI component.





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
