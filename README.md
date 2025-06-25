# Invisible Emotion Detector API

This repository contains a skeleton of the Invisible Emotion Detector REST API built with Laravel 12+ and PHP 8.4.

## Requirements
- PHP 8.4+
- Composer
- MySQL

## Installation
1. Clone the repository
2. Run `composer install`
3. Copy `.env.example` to `.env` and set your database credentials
4. Run `php artisan key:generate`
5. Run migrations with `php artisan migrate`
6. Serve the application using `php artisan serve`

## Features
- Authentication with Laravel Sanctum
- Emotion input logging and pattern/insight retrieval
- Basic Clean Architecture folder structure

> **Note:** This project is a simplified skeleton due to environment limitations. It requires additional implementation to become fully functional.
