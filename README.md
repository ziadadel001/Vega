# Vega

## Description:

The Vega is an educational platform built using Laravel framework that provides users with the ability to book courses, interact with them, and reserve mentors for personalized guidance. The platform also offers a user-friendly dashboard for seamless navigation and management of educational activities.

## Features:

- Course booking system
- Interactive learning experiences
- Mentor reservation for personalized guidance
- User-friendly dashboard for easy management

## Acknowledgements:

We would like to extend our heartfelt gratitude to the frontend development team at Vega for their collaboration throughout this project. They have provided valuable contributions and demonstrated professionalism and dedication in their work.

We would like to give special thanks to:

- [Abdullah ibrahem](https://github.com/Abdoullahibrahem) -Frontend Developer
- [Karen fayez](https://github.com/janesmith) - UI/UX Designer
- [Ziad nader](https://github.com/Ziad1011) - Frontend Developer
- [Abdullah hossam](https://github.com/abdullahhossam22) - backend Developer

We are truly grateful for their collaboration and efforts, which have greatly contributed to the success of this project.

## Project Screenshots:

<div align="center">
<img src="screens/signed in.png" width="300" />
 
  <img src="screens/Course info final.png" width="300" />
  <img src="screens/Courses final.png" width="300" /> 
  <img src="screens/sign in.png" width="300" />
  <img src="screens/sign up.png" width="300" />
  
</div>

## Installation:

To install and run the Vega, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/ziadadel001/-vega.git
   ```

2. Navigate to the project directory:
   ```bash
   cd <project_directory>
   ```

3. Install dependencies using Composer:
   ```bash
   composer install
   ```

4. Create a copy of the .env file:
   ```bash
   cp .env.example .env
   ```

5. Generate an application key:
   ```bash
   php artisan key:generate
   ```

6. Configure the database connection in the .env file:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   ```

7. Run database migrations:
   ```bash
   php artisan migrate
   ```

8. Serve the application:
   ```bash
   php artisan serve
   ```

9. Access the application in your web browser at `http://localhost:8000`.

## Usage:

1. Register for an account on the platform.
2. Log in using your credentials.
3. Browse available courses and select the desired ones.
4. Interact with the courses through various activities.
5. Reserve mentors for personalized guidance if needed.
6. Navigate through the user-friendly dashboard to manage your educational activities.

## Contributing:

Contributions are welcome! Feel free to submit bug reports, feature requests, or pull requests.

## License:

This project is licensed under the [License Name] License - see the [LICENSE.md](LICENSE.md) file for details.
