# user-security-php
A simple script designed by me to show my method of making Login and Register based scripts.
<h1>Login Mechanism</h1>
<p>The user inputs his/her login credentials and then the data is forwarded to login.php. This file encrypts the password using double sha1 encryption with a salt to make it more secure. Sha1 is used because it's faster in processing than md5 encryption. The username and haash value is checked with database, and if only one record exists, user is logged in.</p>
<h1>Register Mechanism</h1>
<p>The password is hashed in the same way and the user details are saved in database.</p>
