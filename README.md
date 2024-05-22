# Student-Records
This project is a web-based application designed to manage student records. It allows users to add new student records, search for specific students by their ID, and display all existing student records. The application is built using a combination of front-end and back-end technologies to create a seamless user experience.

Features:
Add New Student: Users can add new students by providing their name, age, address, and CGPA.
Search Students: Users can search for a student by their ID.
Display All Students: Users can fetch and display all student records.
Technologies Used:
HTML: Used to structure the web pages.
CSS: Used for styling the web pages to make them visually appealing.
JavaScript: Used for client-side scripting to handle user interactions and make asynchronous requests to the server.
PHP: Used for server-side scripting to handle data processing and interact with the JSON file that stores the student records.
JSON: Used to store and retrieve student data in a structured format.
Detailed Explanation:
1. Front-end (HTML, CSS, JavaScript):
HTML: The HTML code structures the content of the web pages, including forms for adding new students, a search bar for finding students by ID, and a container to display student records.
CSS: CSS styles the HTML elements to create a user-friendly interface with a dark theme.
JavaScript: JavaScript handles the front-end logic, including:
Collecting form data and sending it to the server via AJAX requests.
Fetching all student records from the server and displaying them.
Filtering student records based on the search query.
Example of JavaScript Functions:
addStudent(): Sends a POST request to add_student.php to add a new student and displays the newly added student.
fetchAllStudents(): Sends a GET request to get_students.php to fetch and display all student records.
searchStudents(): Filters and displays student records based on the entered student ID.
2. Back-end (PHP):
add_student.php: This script handles the addition of new student records.
It reads the existing student data from students.json.
Validates the input data.
Adds the new student to the data array.
Writes the updated data back to students.json.
Returns the newly added student record as a JSON response.
get_students.php: This script handles the retrieval of student records.
It reads all student data from students.json.
Returns all student records as a JSON response.
If a specific student ID is requested via a GET parameter, it returns only the record for that student.
3. Data Storage (JSON):
students.json: This file stores all the student records in JSON format. Each student record includes an ID, name, age, address, and CGPA.
Project Files:
index.html: The main front-end file that includes the HTML structure, CSS styles, and JavaScript code for user interactions.
add_student.php: The server-side script to handle adding new students.
get_students.php: The server-side script to handle retrieving student records.
students.json: The data file where all student records are stored.
How It Works:
When the user visits the page, they can add a new student by filling out the form and clicking the "Add Student" button. This triggers the addStudent() JavaScript function, which sends the form data to add_student.php.
The PHP script processes the data, updates students.json, and returns the new student record, which is then displayed on the page.
Users can also click the "Fetch All Students" button to retrieve and display all student records, which triggers the fetchAllStudents() function.
The search functionality allows users to enter a student ID and find the corresponding student record using the searchStudents() function.
This project demonstrates the integration of various web technologies to create a functional and interactive web application for managing student records.
