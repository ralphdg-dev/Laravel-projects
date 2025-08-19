<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <h1>Welcome to my Home Page</h1>
        <nav>
            <button><a href="home">Home</a></button>
            <button><a href="contact">Contact</a></button>
            <button><a href="about">About</a></button>
            <button><a href="registerPage">Register</a></button>
            <button><a href="profile">Profile</a></button>
            <button><a href="userManagement">User Management</a></button>
        </nav>
    </div>
</body>

</html>

<style>
    body {
        font-family: poppins, sans-serif;
        background-color: #2F2F2F;
        margin: 0;
        text-align: center;
        padding: 250px;
        margin-left: 225px;
    }

    h1 {
        color: #333;
    }

    nav {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        justify-content: center;
        margin-top: 20px;
    }


    nav a {
        margin-right: 15px;
        text-decoration: none;
        color: black;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #E0E0E0;
        height: 50vh;
        width: 75%;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    button {
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 1em 0em 1em 1em;
        background-color: #fff;
        cursor: pointer;
        box-shadow: 4px 6px 0px black;
        border: 4px solid;
        border-radius: 15px;
        position: relative;
        overflow: hidden;
        z-index: 100;
        transition: box-shadow 250ms, transform 250ms, filter 50ms;
    }

    button:hover {
        transform: translate(2px, 2px);
        box-shadow: 2px 3px 0px black;
    }

    button:active {
        filter: saturate(0.75);
    }

    button::after {
        content: "";
        position: absolute;
        inset: 0;
        background-color: pink;
        z-index: -1;
        transform: translateX(-100%);
        transition: transform 250ms;
    }

    button:hover::after {
        transform: translateX(0);
    }

    .bgContainer {
        position: relative;
        display: flex;
        justify-content: start;
        align-items: center;
        overflow: hidden;
        max-width: 35%;
        /* adjust this if the button text is not proper */
        font-size: 2em;
        font-weight: 600;
    }

    .bgContainer span {
        position: relative;
        transform: translateX(-100%);
        transition: all 250ms;
    }

    .button:hover .bgContainer>span {
        transform: translateX(0);
    }

    .arrowContainer {
        padding: 1em;
        margin-inline-end: 1em;
        border: 4px solid;
        border-radius: 50%;
        background-color: pink;
        position: relative;
        overflow: hidden;
        transition: transform 250ms, background-color 250ms;
        z-index: 100;
    }

    .arrowContainer::after {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: inherit;
        background-color: yellow;
        transform: translateX(-100%);
        z-index: -1;
        transition: transform 250ms ease-in-out;
    }

    button:hover .arrowContainer::after {
        transform: translateX(0);
    }

    button:hover .arrowContainer {
        transform: translateX(5px);
    }

    button:active .arrowContainer {
        transform: translateX(8px);
    }

    .arrowContainer svg {
        vertical-align: middle;
    }
</style>