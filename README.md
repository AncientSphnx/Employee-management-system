
# 🏢 Employee Management System (EMS)

A simple **Employee & Department Management System** built with **PHP**, **MySQL**, **HTML/CSS**, and **JavaScript**.  
This system allows managing employees and departments, including creating, viewing, searching, and deleting records.  
The dashboard also includes charts and statistics for quick insights.

---

## 🚀 Features

- 🔑 **Login System** (basic frontend validation)
- 👨‍💼 **Employee Management**
  - Register new employees  
  - View all employees  
  - Search employees by name  
  - Delete employees  
- 🏢 **Department Management**
  - Create new departments  
  - View all departments  
  - Delete departments  
- 📊 **Dashboard**
  - Employee & department counts  
  - Area and bar charts (powered by Chart.js)  
  - Sidebar navigation with sections  

---
## 📂 Project Structure
```
Employee-management-system/
├── index.php # Main dashboard
├── login.html # Login page
├── login-page.css # Login page styles
├── login-page.js # Login page logic
├── styles.css # Main styles
├── scripts.js # Chart.js & sidebar toggle logic
│
├── add.php # Add new employee handler
├── createu.php # Employee registration form
├── delete.php # Delete employee
├── viewu.php # View all employees
├── search.php # Search employees
│
├── create.php # Create department form
├── deleted.php # Delete department
├── view1.php # View all departments
│
├── count.php # Count employees & departments (used in dashboard)
└── README.md # Project documentation
```

---

## 🛠️ Tech Stack

- **Frontend:** HTML5, CSS3 (custom + TailwindCSS for some views), JavaScript  
- **Backend:** PHP (mysqli)  
- **Database:** MySQL  
- **Charts:** Chart.js  

---

## ⚙️ Installation & Setup

1. Clone this repository:
   ```bash
   git clone https://github.com/yourusername/Employee-management-system.git
   cd Employee-management-system
2. Set up the database:
- Create a MySQL database named employee.
- Import your SQL schema (tables: employee, department).

3. Configure database connection:
- In each PHP file (e.g., add.php, create.php, etc.), update DB credentials if needed:
  ```
  $dbServername = "localhost";
  $dbUsername   = "root";
  $dbPassword   = "";
  $dbName       = "employee";
  ```
4. Start a local PHP server:
   ```
   php -S localhost:8000
   ```
5. Open in browser:
   ```
   http://localhost:8000/login.html
   ```

🔮 Future Improvements

  ✅ Add user authentication with sessions

  ✅ Improve input validation and security (prevent SQL injection, XSS)

  ✅ Add role-based access (Admin, Manager, Employee)

  ✅ Add employee profile pictures & editing

🤝 Contributing

- Pull requests are welcome! If you’d like to improve features or fix bugs:

- Fork the repo

- Create a new branch (feature/your-feature-name)

- Commit your changes

- Push and submit a PR

📜 License

This project is licensed under the MIT License – free to use and modify.




