# Vendor Portal

A web-based portal for managing vendor visits and generating reports. This application allows vendors to track store visits, manage departments, and generate detailed reports.

## Features

- User authentication and role-based access control
- Dashboard with real-time statistics
- Custom date range filtering
- Detailed visit reports
- Export functionality to CSV
- Client and department management
- Responsive design

## Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)

## Installation

1. Clone the repository:
```bash
git clone https://github.com/shplep/vendor-portal.git
cd vendor-portal
```

2. Configure your database:
- Create a new MySQL database
- Copy `config/db.example.php` to `config/db.php`
- Update the database credentials in `config/db.php`

3. Set up your web server:
- Configure your web server to point to the `public` directory
- Ensure the `public` directory is accessible via web browser

4. Initialize the database:
- Import the database schema from `database/schema.sql`
- (Optional) Import sample data from `database/sample_data.sql`

## Usage

1. Access the application through your web browser
2. Log in with your credentials
3. Navigate through the dashboard to:
   - View visit statistics
   - Generate reports
   - Manage vendors and departments
   - Export data

## Security

- All user passwords are hashed
- SQL injection protection
- XSS protection
- CSRF protection
- Role-based access control

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.