<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <style>
       body {
    margin: 0;
    font-family: 'Arial', sans-serif;
    background-color: #87CEEB; /* Sky Blue background for the sea effect */
}
.container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .centered-form {
            text-align: center;
            max-width: 300px; /* Adjust the maximum width as needed */
            width: 100%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
.logo {
    text-align: center;
    padding: 20px;
}

.logo img {
    width: 150px; /* Adjust the width of your logo */
    height: auto;
}


/* Default logo size */
.logo img {
    width: 200px; /* Default width for larger screens */
    height: auto;
}

/* Media query for smaller screens (e.g., smartphones) */
@media screen and (max-width: 768px) {
    .logo img {
        width: 150px; /* Adjusted width for smaller screens */
    }
}
    </style>
</head>
<body>
 <?php
    // Display funny message if present in the URL
    if (isset($_GET['msg'])) {
        $funnyMessage = $_GET['msg'];
        echo '<p style="color: red; text-align: center;">' . $funnyMessage . '</p>';
    }
    ?>
    <div class="logo">
    <img src="../img/logo.png" alt="Website Logo" class="logo">
    </div>
    <div class="container">
        <div class="centered-form">
            <form method="post" action="essentials/login_process.php">
            <h2>Login</h2>
            <form action="essentials/login_process.php" method="post">
                <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required><br><br>
        
                 <label for="password">Password:</label>
                     <input type="password" id="password" name="password" required><br><br>
        
                 <input type="submit" value="Login">
            </form>
    </div>
         </div>
</body>
</html>
