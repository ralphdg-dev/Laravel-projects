<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <nav>
            <a href="home">Home</a>
            <a href="about">About</a>
            <a href="contact">Contact</a>
            <a href="registerPage">Register</a>
            <a href="profile">Profile</a>
            <a href="userManagement">User Management</a>
        </nav>
    </header>

    <form action="action_page.php">
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
            <hr>

            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <button type="submit" class="registerbtn">Register</button>
            <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
        </div>
    </form>
</body>

</html>

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #DCE0D9;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }

    .container {
        background-color: #fff;
        width: 380px;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #2F2F2F;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        z-index: 1000;
    }

    nav {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 15px 20px;
        gap: 25px;
    }

    nav a {
        text-decoration: none;
        color: #E0E0E0;
        font-weight: 600;
        transition: color 0.3s ease, border-bottom 0.3s ease;
        padding: 5px 0;
    }

    nav a:hover {
        color: #2e5784;
        border-bottom: 2px solid #3A6EA5;
    }


    h1 {
        text-align: center;
        color: #3A606E;
        margin-bottom: 10px;
    }

    p {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    /* Inputs */
    input[type=text],
    input[type=password] {
        width: 90%;
        padding: 14px;
        margin: 8px 0 20px 0;
        border: 1px solid #ccc;
        border-radius: 6px;
        background: #f9f9f9;
        transition: border-color 0.3s ease, background 0.3s ease;
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #fff;
        border-color: #3A606E;
        outline: none;
    }

    hr {
        border: none;
        border-top: 1px solid #bbb;
        margin: 20px 0;
    }

    /* Button */
    .registerbtn {
        background-color: #3A6EA5;
        color: white;
        padding: 14px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
        font-weight: 600;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .registerbtn:hover {
        background-color: #2e5784;
        transform: translateY(-2px);
    }

    .signin {
        background-color: #dcdcdc;
        margin-top: 15px;
        padding: 15px;
        border-radius: 8px;
        text-align: center;
        font-size: 14px;
    }

    a {
        color: #3A6EA5;
        text-decoration: none;
        font-weight: 500;
    }
</style>