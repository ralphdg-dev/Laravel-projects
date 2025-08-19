<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
    <div class="container">
        <h1>Contact Us</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer feugiat, magna nec ultricies dignissim,
            velit
            odio ullamcorper nunc, a venenatis magna erat sed nibh. Sed commodo accumsan ligula, nec varius turpis.
            Curabitur
            sollicitudin quam vel orci fermentum, vitae consequat elit tempor.</p>
        <p>Email: contact@example.com</p>
        <p>Phone: +123 456 7890</p>
    </div>
</body>

</html>

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #DCE0D9;
        margin: 0;
        padding-top: 70px;
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
        ;
        font-weight: 600;
        transition: color 0.3s ease, border-bottom 0.3s ease;
        padding: 5px 0;
    }

    nav a:hover {
        color: #2e5784;
        border-bottom: 2px solid #3A6EA5;
    }

    /* MAIN CONTENT CONTAINER */
    .container {
        background-color: #E0E0E0;
        max-width: 800px;
        margin: auto;
        margin-top: 175px;
        padding: 50px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    h1 {
        text-align: center;
        color: #3A606E;
        margin-bottom: 20px;
    }

    p {
        color: #333;
        line-height: 1.6;
        text-align: justify;
    }
</style>