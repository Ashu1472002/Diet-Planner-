# Diet Planner using BMI Calculation
<div align="center">
  <img src="https://github.com/Ashu1472002/Diet-planner/assets/71172888/9b2e6094-ad54-4b4d-8cfa-2f8cb22ec937" width="900">
</div>

## Overview
The Diet Planner Web App is a web-based application designed to suggest personalized diet plans and exercises based on the user's Body Mass Index (BMI). The app is built using HTML, CSS, Bootstrap for the front end, and PHP and MySQL for the back end.

## Features
- User registration and login
- BMI calculation
- Personalized diet plans
- Exercise suggestions
- User profile management

## Technologies Used
- HTML
- CSS
- Bootstrap
- PHP
- MySQL

## Setup Instructions
### Prerequisites
- Web server (e.g., Apache)
- PHP 7.x or higher
- MySQL database

### Installation
1. **Clone the repository**
    ```bash
    git clone https://github.com/Ashu1472002/Diet-planner.git
    ```

2. **Navigate to the project directory**
    ```bash
    cd diet-planner
    ```

3. **Import the database**
    - Open your MySQL database management tool (e.g., phpMyAdmin).
    - Create a new database named `diet_planner`.
    - Import the `diet_planner.sql` file located in the `database` directory.

4. **Configure the database connection**
    - Open the `config.php` file in the `includes` directory.
    - Update the database credentials to match your MySQL setup.
    ```php
    <?php
    $servername = "localhost";
    $username = "your_db_username";
    $password = "your_db_password";
    $dbname = "diet_planner";
    ?>
    ```

5. **Start the server**
    - If you are using XAMPP, MAMP, or any similar local server environment, ensure Apache and MySQL services are running.
    - Navigate to the project directory in your browser (e.g., `http://localhost/diet-planner-web-app`).

## Usage
1. Register a new account or log in with existing credentials.
2. Enter your height and weight to calculate your BMI.
3. View your personalized diet plan and exercise suggestions.
4. Update your profile as needed.

## Contributing
Contributions are welcome! Please fork the repository and create a pull request with your changes. Ensure your code follows the project's coding standards and include relevant tests.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

## Contact
If you have any questions or suggestions, feel free to open an issue or contact me at [ashu1472002@gmail.com](mailto:ashu1472002@gmail.com).

## Acknowledgements
- [Bootstrap](https://getbootstrap.com/)
- [PHP](https://www.php.net/)
- [MySQL](https://www.mysql.com/)

---

Thank you for checking out the Diet Planner Web App! We hope it helps you achieve your health goals.

