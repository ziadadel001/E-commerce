# E-Commerce Laravel Project

## Overview

This is an e-commerce web application built using Laravel. The application includes features such as product browsing, adding products to a cart, managing the cart, and a checkout process.

## Features

- User authentication (signup, login, logout)
- Product listing and details view
- Add products to cart
- View and manage cart
  - Increase/decrease product quantities
  - Remove products from the cart
  - Clear the entire cart
- Checkout process
- Responsive design

## Installation

To run this project locally, follow these steps:

### Prerequisites

- PHP >= 7.3
- Composer
- Laravel
- MySQL or any other supported database

### Steps

1. **Clone the repository**
    ```bash
    git clone https://github.com/ziadadel001/E-commerce.git
    cd e-commerce-laravel
    ```

2. **Install dependencies**
    ```bash
    composer install
    ```

3. **Copy the .env file**
    ```bash
    cp .env.example .env
    ```

4. **Generate an application key**
    ```bash
    php artisan key:generate
    ```

5. **Configure the .env file**

   Update your database and mail settings in the `.env` file:
    ```plaintext
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password

    MAIL_MAILER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    MAIL_ENCRYPTION=null
    ```

6. **Run the migrations**
    ```bash
    php artisan migrate
    ```

7. **Seed the database (optional)**
    ```bash
    php artisan db:seed
    ```

8. **Serve the application**
    ```bash
    php artisan serve
    ```

9. **Visit the application**

   Open your web browser and visit `http://localhost:8000`.

## Usage

### User Authentication

- **Signup**: Users can create a new account.
- **Login**: Existing users can log in.
- **Logout**: Users can log out from their account.

### Product Management

- **View Products**: Browse through the list of available products.
- **Product Details**: Click on a product to view detailed information.

### Cart Management

- **Add to Cart**: Add products to the cart from the product details page.
- **View Cart**: View the contents of the cart.
- **Update Cart**: Increase/decrease the quantity of products or remove them from the cart.
- **Clear Cart**: Remove all items from the cart.

### Checkout

- **Process Order**: Complete the order by filling in the necessary details.

## Contributing

Contributions are welcome! Please open an issue or submit a pull request for any improvements or bug fixes.

## License

This project is open-source and available under the [MIT License](LICENSE).

## Contact

If you have any questions or need further assistance, feel free to contact us at [Ziadadel00120@gmail.com].


