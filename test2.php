<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="insert.php" method="post">
    <p>
        <label for="firstName">First Name:</label><br>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
        <label for="lastName">Last Name:</label><br>
        <input type="text" name="last_name" id="lastName">
    </p>
    <p>
        <label for="phoneNumber">Contact number:</label><br>
        <input type="text" name="phone_number" id="phoneNumber">
    </p>
    <p>
        <label for="emailAddress">Email Address:</label><br>
        <input type="text" name="email" id="emailAddress">
    </p>
    <p>
        <label for="yourMessage">Your message:</label><br>
        <textarea name="your_message" rows="10" cols="30" placeholder="Enter your query here..." id="yourMessage"></textarea><br>
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>