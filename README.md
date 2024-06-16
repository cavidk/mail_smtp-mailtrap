# Client Register Form

## Overview

This is a simple HTML and Bootstrap-based client registration form designed to collect personal information from clients. The form includes fields for the client's name, surname, patronymic, gender, blood group, phone number, nationality, date of birth, passport expiry date, personal number, card number, address, and passport images. The data collected from the form is sent via a POST request to a PHP script for further processing.

## Features

- **Responsive Design**: The form is designed to be responsive and adapts to various screen sizes using Bootstrap.
- **Form Validation**: All input fields are required to be filled out, ensuring that no critical information is left blank.
- **File Upload**: The form allows clients to upload images of their passport (both face and back).

## Technologies Used

- HTML5
- Bootstrap 5.3.3
- CSS (external stylesheet)
- PHP (for handling form submission)

## File Structure

```plaintext
project-directory/
│
├── css/
│   └── style.css         # Custom styles for the form
│
├── image/
│   └── 3817256.jpg       # Profile image displayed on the form
│
├── actions/
│   └── send-mail-SMTP.php# PHP script to handle form submission
│
└── index.html            # Main HTML file containing the form

Detailed Description
HTML Structure
Head Section:

Meta tags for character set and viewport settings.
Title of the webpage.
Links to Bootstrap CSS and custom stylesheet.
Body Section:

A container with a responsive layout using Bootstrap classes.
The form is divided into two columns:
Left column (hidden on smaller screens) containing an image.
Right column containing the registration form.
Form Fields
Name Fields:

Given Name
Surname
Patronymic
Selection Fields:

Gender
Blood Group
Contact Information:

Phone
Nationality
Date Fields:

Date of Birth
Passport Expiry Date
Identification Fields:

Personal Number
Card Number
Address:

Textarea for entering the address.
File Uploads:

Upload fields for passport images (face and back).
Form Submission
The form data is submitted to actions/send-mail-SMTP.php using the POST method. The enctype attribute is set to multipart/form-data to handle file uploads.

Usage
Setup:

Ensure the index.html file is in the root directory of your project.
Place the style.css file in the css directory.
Place the profile image in the image directory.
Ensure the PHP script send-mail-SMTP.php is in the actions directory.
Customizing:

Modify the style.css file to change the appearance of the form.
Update the profile image by replacing 3817256.jpg with your desired image.
Running:

Open index.html in a web browser to view and use the form.
Ensure your server supports PHP to handle the form submission.
