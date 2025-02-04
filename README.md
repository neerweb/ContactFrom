# ContactFrom
Creating a simple Contact Form using PHP and SQL Server involves

**Set up the database in SQL Server.**
Build the PHP application (frontend contact form with backend logic).
Submit data to the database (INSERT query).
Display submitted contact information (if required).
This example will demonstrate how to create a contact form with fields like name, email, phone, and message, and how to store the data in a SQL Server database.

**Replace:**

YOUR_SERVER_NAME with your SQL Server instance name.
YOUR_USERNAME and YOUR_PASSWORD with your SQL Server credentials.

**Folder Structure**
Make sure your project folder structure looks like this:

**Code**
/contact_form_app
    - db.php
    - contact.php
    - view_contacts.php

**Testing the Contact Form**
Open contact.php in your browser to display your form (e.g., http://localhost/contact_form_app/contact.php).
Fill out the form, click Submit, and check if the data is saved in your database.
Open view_contacts.php to fetch and display the stored submissions.
 **Bonus Features (Optional)**
Validation: Add client-side validation using JavaScript.
Captcha: Integrate Google reCAPTCHA to prevent spam.
Email Notification: Use PHP's mail() function or tools like PHPMailer to send email notifications for new submissions.
