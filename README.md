# Auction Management System

This project is an **Auction Management System** designed to streamline the process of adding and managing auction items. It includes features like adding new items, deleting items, and dynamically updating the list without refreshing the page.

## Features

### 🛠️ Admin Login:
- Secure login system for admins.
- Only authorized users can access the auction management panel.

### 🏷️ Add New Items:
- Admins can add new items to the auction list.
- Items are dynamically added to the list without refreshing the page.

### ❌ Delete Items:
- Admins can delete items from the list.
- Items are removed dynamically without refreshing the page.

### 📱 Responsive Design:
- The interface is fully responsive and works seamlessly on mobile, tablet, and desktop devices.

### ⚡ Smooth User Experience:
- AJAX-based form submissions ensure a smooth and fast user experience.

## 📸 Screenshots

1. **Admin Login Page**  
   *Admins can log in using their credentials.*  
   ![Admin Login](screenshots/admin_login.png)

2. **Auction Management Page**  
   *Admins can view the list of items, add new items, and delete existing items.*  
   ![Auction Management](screenshots/auction_management.png)

3. **Add New Item Modal**  
   *Admins can add new items using a popup modal.*  
   ![Add New Item](screenshots/add_new_item.png)

4. **Delete Confirmation Dialog**  
   *Admins are prompted to confirm before deleting an item.*  
   ![Delete Confirmation](screenshots/delete_confirmation.png)

## 🛠️ Technologies Used

### Frontend:
- HTML, CSS, JavaScript
- AJAX for dynamic updates

### Backend:
- PHP for server-side logic
- MySQL for database management

### Tools:
- XAMPP for local development
- Git for version control

## 🚀 Setup Instructions

### 1️⃣ Prerequisites
- **XAMPP**: Install [XAMPP](https://www.apachefriends.org/index.html) to run PHP and MySQL locally.
- **Code Editor**: Use a code editor like VS Code or Sublime Text.

### 2️⃣ Clone the Repository
```bash
git clone https://github.com/your-username/auction-management-system.git
```

### 3️⃣ Set Up the Database
1. Open **phpMyAdmin** in your browser (`http://localhost/phpmyadmin`).
2. Create a new database named **auction_system**.
3. Import the SQL file (`auction_system.sql`) to create the necessary tables.

### 4️⃣ Configure the Project
Update the database credentials in `includes/db.php`:
```php
$host = 'localhost';
$db = 'auction_system';
$user = 'root';
$pass = '';
```
Place the project folder inside the `htdocs` directory of your XAMPP installation (`C:\xampp\htdocs\auction_project`).

### 5️⃣ Run the Application
1. Start **Apache** and **MySQL** from the XAMPP Control Panel.
2. Open your browser and go to:
   ```
   http://localhost/auction_project/admin/login.php
   ```
3. Log in using the default credentials:
   ```
   Username: admin
   Password: password
   ```

## 📁 File Structure
```
auction_project/
│
├── css/
│   └── styles.css          # Custom styles for the project
│
├── js/
│   └── script.js           # JavaScript for dynamic functionality
│
├── includes/
│   ├── db.php              # Database connection file
│   └── auth.php            # Admin authentication logic
│
├── admin/
│   ├── login.php           # Admin login page
│   └── logout.php          # Admin logout script
│
├── add_uniquebid_auction.php  # Main auction page
├── submit_item.php         # Backend script to add new items
├── delete_item.php         # Backend script to delete items
└── README.md               # Project documentation
```

## 🎯 How to Use

### 🔹 Log In:
1. Navigate to `http://localhost/auction_project/admin/login.php`.
2. Enter the admin credentials to access the auction management panel.

### 🔹 Add New Items:
1. Click the **Add New Item** button.
2. Enter the item name in the modal and click **Add Item**.

### 🔹 Delete Items:
1. Click the **Delete** button next to an item.
2. Confirm the deletion in the dialog.

### 🔹 Log Out:
Click the **Logout** button to securely end the session.

## 🤝 Contributing
Want to contribute? Follow these steps:
1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Commit your changes and push to the branch.
4. Submit a pull request.

## 📜 License
This project is licensed under the **MIT License**. See the `LICENSE` file for details.

## 📩 Contact
For any questions or feedback, feel free to reach out:
- **Email:** your-email@example.com
- **GitHub:** [your-username](https://github.com/your-username)

## 🙏 Acknowledgments
- Thanks to **XAMPP** for providing a local development environment.
- Special thanks to my **manager** for guiding me through this project.

---

_Replace `your-username` with your GitHub username and add actual screenshots in the `screenshots/` folder._

🚀 Happy Coding! 🎯
