1. Features
   Home Page
    * A welcoming home page with a navigation menu.
    * Accessible to both registered and unregistered users.
  Login and Registration
    * Separate login and registration pages.
    * Registration page includes CAPTCHA for added security.
    * Login credentials determine redirection:
       1. Admin credentials redirect to the admin dashboard.
       2. User credentials redirect to the user interface.
  Admin Side
    * User Management: Admin can manage user accounts (view, add, delete).
    * Product Management: Admin can add, delete, and manage products.
    * Category Management: Admin can manage product categories.
    * Order Management: Admin can view and manage customer orders.
  User Side
    * Product Browsing: Users can browse products by category.
    * Cart: Users can add products to their cart and proceed to purchase.
    * Order History: Users can view their past orders.

2. Technologies Used
    * Frontend: HTML, CSS, Bootstrap
    * Backend: PHP
    * Database: Oracle 10 Application Express

3. Database
    * Utilizes Oracle 10 Application Express for storing user data, product information, and order details.

4. Sessions and Cookies
    * Sessions are maintained for user login and product purchases.
    * GET and POST methods are used for data transfer.
    * Cookies are used to enhance user experience and maintain session states.

5. Installation
    * Clone the repository: git clone https://github.com/khushijtrivedi/Epiphany.git

6. Navigate to the project directory:
    * http://localhost/Epiphany
7. Usage
    * Register as a new user or login with existing credentials.
    * Admin can manage users, products, categories, and orders through the admin dashboard.
    * Users can browse products, add to cart, and place orders.

Contributing
Contributions are welcome! Please fork the repository and create a pull request with your changes.
