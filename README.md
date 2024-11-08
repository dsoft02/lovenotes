# 💖 Love Notes to My Baby

**Love Notes to My Baby** is a Laravel-powered web app that allows users to share heartfelt notes with their partners. Featuring a beautiful, love-themed landing page, this project provides a unique way for users to write and share personalized messages, while administrators can easily download each note as an image with customized styling and share it directly on social media.

## 🌹 Features

- **Love-Themed Landing Page**: An aesthetically pleasing design tailored to a romantic atmosphere.
- **User-Friendly Note Submission**: Users can create and share love notes with ease.
- **Custom Image Download and Social Sharing**: Admins can download each love note as an image, complete with a unique style, and share it directly on social media.
- **Admin Control Panel**: Simple access for admins to view, manage, download, and share love notes on social platforms.

## 🚀 Getting Started

### Prerequisites

- **PHP >= 8.2x**
- **Composer** for dependency management
- **Laravel >= 10.x**
- **MySQL** or **PostgreSQL** database

### Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/dsoft02/lovenotes.git
   cd lovenotes
   ```

2. **Install dependencies**:
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Setup environment**:
   - Copy `.env.example` to `.env` and update with your database and application settings.
   ```bash
   cp .env.example .env
   ```
   - Generate an application key:
   ```bash
   php artisan key:generate
   ```

4. **Run migrations and seeders**:
   ```bash
   php artisan migrate --seed
   ```

5. **Start the development server**:
   ```bash
   php artisan serve
   ```

   Visit `http://localhost:8000` to access the app.

## 🛠 Usage

- **User**: Write and submit a love note on the landing page.
- **Admin**: View and download notes as styled images through the admin panel.

## 🤝 Contributing

We welcome contributions! If you'd like to help improve **Love Notes to My Baby**, please fork the repository and submit a pull request.

## ⚖️ License

This project is licensed under the MIT License.

---

### 💌 Spread the Love

If you enjoy this project, don't forget to share it and let others express their love in a unique way!
