# Post-it Note App

This is a simple web application for creating and managing digital post-it notes. Built with Laravel and Vite, it offers a clean, intuitive interface for jotting down quick notes and ideas.

## Features

- Create, read, update, and delete notes
- Responsive design that works on desktop and mobile
- Real-time updates using Vite
- User authentication and personalized note management

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP >= 8.1
- Composer
- Node.js and npm
- MySQL or another Laravel-supported database

## Installation

1. Clone the repository:
   ```
   git clone https://github.com/yourusername/post-it-note-app.git
   ```

2. Navigate to the project directory:
   ```
   cd post-it-note-app
   ```

3. Install PHP dependencies:
   ```
   composer install
   ```

4. Install JavaScript dependencies:
   ```
   npm install
   ```

5. Copy the `.env.example` file to `.env` and configure your environment variables:
   ```
   cp .env.example .env
   ```

6. Generate an application key:
   ```
   php artisan key:generate
   ```

7. Set up your database and update the `.env` file with your database credentials.

8. Run database migrations:
   ```
   php artisan migrate
   ```

## Running the Application

To run the application, you need to start both the Laravel development server and the Vite server.

1. Start the Laravel development server:
   ```
   php artisan serve
   ```

2. In a separate terminal window, start the Vite server:
   ```
   npm run dev
   ```

The application should now be accessible at `http://localhost:8000`.

## Usage

1. Register a new account or log in to an existing one.
2. Click the "New Note" button to create a new note.
3. Click on a note to view or edit its contents.
4. Use the buttons on each note to edit or delete it.

## Contributing

Contributions to the Post-it Note App are welcome. Please feel free to submit a Pull Request.

## License

This project is open source and available under the [MIT License](LICENSE).

## Contact

If you want to contact me, you can reach me at `kelbal@gmail.com`.

## Acknowledgements

- Laravel - The web framework used
- Vite - Frontend build tool
- Tailwind CSS - For styling