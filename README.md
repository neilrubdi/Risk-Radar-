# Risk Radar Project

## Overview

The Risk Radar project is designed to enhance sensitive data protection within organizational systems. This application identifies and visualizes sensitive data, ensuring robust data security and compliance with privacy standards.

## Key Features

- **Sensitive Data Identification**: Utilizes a regex-based pattern matching system to accurately detect sensitive data across various data sources within an organization.
- **Data Visualization Dashboard**: Provides an intuitive PHP-based dashboard for visualizing identified sensitive data, enabling effective data monitoring and management.
- **Comprehensive Data Protection Solution**: Integrates various technologies to offer a robust solution for protecting sensitive data.

## Technologies Used

- **Regex-based Pattern Matching**: Employs regular expression libraries to create a powerful and flexible pattern matching system for identifying sensitive data.
- **PHP Programming Language**: Leverages PHP to develop a user-friendly and interactive dashboard for data visualization.
- **Agile Development Methodology**: Follows Agile principles to ensure iterative development, continuous feedback, and timely delivery of project milestones.


## Project Highlights

- **Accurate Data Identification**: The regex-based system significantly improves the accuracy of sensitive data identification.
- **User-friendly Interface**: The PHP dashboard enhances the ability to visualize and manage sensitive data effectively.
- **Efficient Project Management**: Agile methodology facilitates efficient project management and quick delivery of features.


## Installation

To set up the Risk Radar project locally, follow these steps:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/risk-radar.git
   cd risk-radar
   ```

2. **Install dependencies:**
   Ensure you have PHP and a web server (e.g., Apache) installed.

3. **Configure the database:**
   - Create a new MySQL database.
   - Import the provided SQL file (`database.sql`) into your database.

4. **Update configuration:**
   - Open the `config.php` file and update the database connection details.
     ```php
     <?php
     $host     = "127.0.0.1"; // Database Host
     $user     = "root"; // Database Username
     $password = "your_password"; // Database's user Password
     $database = "admin"; // Database Name
     $prefix   = ""; // Database Prefix for the script tables
     
     $mysqli = new mysqli($host, $user, $password, $database);
     
     // Checking Connection
     if ($mysqli->connect_errno) {
         echo "Failed to connect to MySQL: " . $mysqli->connect_error;
         exit();
     }
     
     $mysqli->set_charset("utf8mb4");
     
     $site_url             = "http://localhost";
     $projectsecurity_path = "http://localhost/111/Source";
     ?>
     ```

5. **Start the server:**
   - Ensure your web server is running and navigate to the project directory in your browser.

## Usage

Organizations can use Risk Radar to continuously monitor their data systems for sensitive information, ensuring that any vulnerabilities are quickly identified and addressed. The intuitive dashboard provides actionable insights, helping data security teams track sensitive data and maintain compliance with privacy regulations.

## Contributing

Contributions are welcome! Please open an issue or submit a pull request for any improvements or bug fixes.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact

For any questions or inquiries, please contact Neil Rubdi at neilrubdi@gmail.com.

```

This `README.md` file provides a clear and comprehensive overview of the Risk Radar project, including installation instructions, usage details, and contact information. You can customize the repository URL and any other specific details as needed.
