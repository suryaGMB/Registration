# Registration

This project is a simple registration system using PHP and MySQL. It allows users to perform basic CRUD (Create, Read, Update, Delete) operations on a registration database.

Files and Structure:

index.php:
Displays a table of registered users with options to edit or delete each entry.
Includes a "Add New" button that redirects to add.php for user registration.

edit.php:
Allows users to edit their registration details.
Accessed through the "Edit" button on the index.php page.

delete.php:
Allows users to delete their registration.
Accessed through the "Delete" button on the index.php page.

add.php:
Enables users to add new entries to the registration system.

Technologies Used:
HTML: Used for structuring the web pages.
Bootstrap: Utilized for styling and layout components.
PHP: Server-side scripting language for dynamic content.
MySQL: Database management system for storing registration data.

Database Configuration:
The project assumes a local MySQL database with a connection to a database named "registration."

Setup Instructions:
Set up a local server environment (e.g., XAMPP, WampServer).
Create a MySQL database named "registration" and import the necessary table.
Configure the database connection in your PHP files.
Host the project on your local server and access it through a web browser.(http://localhost/registration/)
