# Bodyfuel - Gym Management System Website

## Project Overview
The **Gym Management System Website** is a website designed to enhance gym operations and improve user experiences for members, trainers, and administrators. Members can sign up, manage memberships, view workout plans, and more, while trainers and administrators can track and manage gym activities efficiently.

---

## Features

### **User (Gym Member)**
- **Sign Up/Sign In:** Create and access accounts securely.
- **Membership Management:** Apply for memberships and view details.
- **Workout Plans:** Access personalized workout plans.
- **Profile Management:** Update personal information.

### **Trainer**
- **Dashboard:** Track member progress and view client information.
- **Workout Plans:** Create and manage workout plans for members.
- **Member Tracking:** Monitor attendance, progress, and feedback.

### **Admin**
- **Dashboard:** Oversee the system, including user and trainer management.
- **User Management:** Add, update, or delete members and trainers.
- **Trainer Management:** Assign roles and monitor trainer activities.
- **Reports and Analytics:** Generate reports on gym performance and user statistics.

---

## Technologies Used

### **Frontend**
- HTML for structure
- CSS for styling and responsive design
- JavaScript for interactivity and dynamic content

### **Backend**
- PHP for server-side logic and database interaction
- MySQL for data management and storage

### **Additional Tools**
- SQL for database queries
- Third Party Fonts and icons

---

## Installation

### Prerequisites
- A local server environment like **XAMPP**, **WAMP**, or **MAMP**
- A web browser to access the application

### Steps
1. Clone this repository or download the project files.
2. Place the project folder in the `htdocs` directory (if using XAMPP).
3. Start your server and open the browser.
4. Create a database in **phpMyAdmin** and import the provided `.sql` file.
5. Update the database credentials in the `config.php` file:
   ```php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "gym_management";

Key Pages

1. Index Page
Displays gym services overview.
Includes navigation links for login and signup.

2. User Pages
Login: User authentication form.
Signup: Registration form for new members.
Dashboard: Displays membership details, workout plans, and progress.

3. Trainer Pages
Dashboard: Tracks assigned members and their progress.
Workout Plans: Manage workout plans and schedules.

4. Admin Pages
Dashboard: Displays gym analytics and system status.
User Management: Add, edit, or remove members and trainers.

