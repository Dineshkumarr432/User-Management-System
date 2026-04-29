# User-Management-System
User Management System using OOP Constructors, include/require_once, Namespaces &amp; use (with Aliasing)


Project Structure
(Create these folders/files — do NOT prefill code)
user_management_project/
├── index.php
├── utils/
│   ├── User.php
│   ├── Validator.php
│   └── helpers.php
└── data/
    └── users.php
Goal
Trainees will build a small PHP project that:
Uses classes with constructors to initialize data
Demonstrates require_once / include_once clearly
Organizes code using namespaces
Uses use statements and aliasing to avoid name conflicts
Creates and uses objects correctly
Keeps logic modular and easy to understand

Step-by-Step Instructions
1. Setup Project Structure
Create the folders and files as shown above
index.php will act as the entry point

2. Create Sample Data (data/users.php)
Store user data as a PHP array
Return the array using return
Each user should contain:
username
email
password
This file must be loaded using require_once in index.php

3. Create Utils Namespace
All files inside utils/ must use a namespace:
namespace Utils;

This ensures trainees practice fully qualified class names and use

4. Implement User Class (Constructor Focus)
File: utils/User.php
Requirements:
Create a User class inside the Utils namespace
Add public properties:
username
email
password
Implement a constructor that:
Accepts username, email, password as parameters
Assigns values to class properties
Add a method like getProfile() or displayUser() to print user details
Constructor must be used when creating objects (no property assignment outside)

5. Implement Validator Class (Simple OOP)
File: utils/Validator.php
Requirements:
Create a Validator class inside the Utils namespace
Add methods such as:
validateUsername($username)
validateEmail($email)
validatePassword($password)
These methods can return simple strings or booleans (Valid / Invalid)
Keep logic simple — focus is on class usage, not complex validation

6. helpers.php (Include Practice)
File: utils/helpers.php
Create one or two helper functions (example: formatting output)
Load this file using include_once in index.php

7. Use include / require_once in index.php
In index.php:
Load files using:
require_once for critical files (User, Validator, users.php)
include_once for helpers
Explain via comments:
Why require_once is used instead of include

8. Use Namespaces & use Statements (with Aliasing)
In index.php:
Import classes using:
use Utils\User;
use Utils\Validator as UserValidator;

This must demonstrate use renaming (aliasing) clearly

9. Create Objects and Validate Users
Loop through users from users.php
For each user:
Create a User object using the constructor
Validate data using the Validator object or static methods
Print results clearly
Example output idea:
User: Rahul
Username: Valid
Email: Valid
Password: Weak
-----------------


Learning Outcomes
By completing this task, trainees will confidently:
Use constructors correctly
Understand when and why to use include vs require_once
Work with namespaces and avoid naming conflicts
Use use and use as professionally
Build a clean, modular PHP project

Trainer Notes
Ensure trainees do not skip namespaces
Ensure constructors are actually used
Watch for misuse of include vs require_once
Emphasize real-world folder structure


