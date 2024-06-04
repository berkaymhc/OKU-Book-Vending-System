OKU Book Vending Machine Web Application

Description
The OKU Book Vending Machine Web Application is a comprehensive project designed to facilitate the management and distribution of books through vending machines. This application allows users to locate vending machines, view the available books, and manage the inventory of books within each vending machine. It features a clean and modern web interface, built using HTML, CSS, JavaScript, and PHP, and connects to a MySQL database for data storage.

Features
* Book Management: Add, view, and delete books from the vending machines.
* Vending Machine Locations: View and manage the locations of book vending machines.
* Interactive Map: Easily locate vending machines using an interactive map.
* User-Friendly Interface: Clean and modern design for ease of use.

Technologies Used
* Frontend: HTML, CSS, JavaScript, Bootstrap
* Backend: PHP
* Database: MySQL
* Development Tools: Visual Studio Code, XAMPP

Project Structure
* index.html: Home page of the application.
* about.html: About Us page.
* map.html: Interactive map showing vending machine locations.
* book.html: Page to view and manage books.
* contact.html: Contact Us page.
* add_book.html: Form to add new books.
* delete_book.html: Form to delete books.
* fetch_books.php: Script to fetch books from the database.
* add_book.php: Script to add a new book to the database.
* delete_book.php: Script to delete a book from the database.
* style.css: Main stylesheet for the application.

Database Schema
Books Table
* Table Name: Books
* Fields:
- book_id (Book ID - Primary Key)
- title (Book Name)
- author
- description (Topic or Description)
Vending Machines Table
* Table Name: VendingMachines
* Fields:
- machine_id (Vending Machine ID - Primary Key)
- latitude
- longitude
MachineBooks Table
* Table Name: MachineBooks
* Fields:
- machine_id (Vending Machine ID - Primary Key)
- book_id (Book ID - Primary Key)
- quantity (Number of books in the vending machine)

Installation
1. Clone the repository: git clone https://github.com/yourusername/oku-book-vending-machine.git
2. Navigate to the project directory: cd oku-book-vending-machine
3. Set up the database: Import the SQL schema from database/schema.sql into your MySQL database. Update the database connection settings in db_connect.php.
4. Start the XAMPP server and ensure Apache and MySQL are running.
5. Open the project in your browser: http://localhost/oku-book-vending-machine
   
Usage
* Navigate to the home page to view the available features.
* Use the map to locate vending machines.
* Manage books by adding or deleting them through the book.html page.

Contributing
Contributions are welcome! Please fork this repository and submit a pull request for review.

License
This project is licensed under the MIT License.

Contact
For any questions or inquiries, please contact us at email@example.com.
