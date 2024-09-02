<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="registration-container">
        <h2>Registration Form</h2>
        <form id="registrationForm" action="dpcon.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br><br>
            
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
            <br><br>
            
            <button type="submit">Register</button>
        </form>
        <div id="errorMessages" class="error"></div>
    </div>
    <script >
/*
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    // Clear previous error messages
    const errorMessages = document.getElementById('errorMessages');
    errorMessages.innerHTML = '';

    // Get form values
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    // Validate form fields
    let isValid = true;
    let errors = [];

    if (username === '') {
        isValid = false;
        errors.push('Username is required.');
    }

    if (email === '') {
        isValid = false;
        errors.push('Email is required.');
    } else if (!validateEmail(email)) {
        isValid = false;
        errors.push('Email format is invalid.');
    }

    if (password === '') {
        isValid = false;
        errors.push('Password is required.');
    } else if (password.length < 6) {
        isValid = false;
        errors.push('Password must be at least 6 characters long.');
    }

    if (confirmPassword === '') {
        isValid = false;
        errors.push('Confirm Password is required.');
    } else if (password !== confirmPassword) {
        isValid = false;
        errors.push('Passwords do not match.');
    }

    // Display error messages if validation fails
    if (!isValid) {
        errors.forEach(error => {
            const errorElement = document.createElement('div');
            errorElement.textContent = error;
            errorMessages.appendChild(errorElement);
        });
    } else {
        // Submit the form if validation passes (this is a placeholder, handle form submission as needed)
        alert('Form submitted successfully!');
    }
});

function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}
*/
    </script>
</body>


<style>

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.registration-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

.registration-container h2 {
    margin-bottom: 20px;
}

.registration-container form {
    display: flex;
    flex-direction: column;
}

.registration-container label {
    margin-bottom: 5px;
    text-align: left;
}

.registration-container input {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.registration-container button {
    padding: 10px;
    background-color: #007bff;
    border: none;
    color: white;
    border-radius: 4px;
    cursor: pointer;
}

.registration-container button:hover {
    background-color: #0056b3;
}

.error {
    color: red;
    margin-top: 10px;
}

</style>


</html>
