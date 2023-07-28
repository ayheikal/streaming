<!DOCTYPE html>
<html>
<head>
    <title>Speaking Genie</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        color: #333;
    }

    header {
        background-color: #fff;
        color: #333;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    nav li {
        margin: 0 10px;
    }

    nav a {
        color: #333;
        text-decoration: none;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 14px;
        transition: color 0.2s ease-in-out;
    }

    nav a:hover {
        color: #4CAF50;
    }

    main {
        padding: 20px;
        margin-top: 100px;
    }

    section.hero {
        background-color: #4CAF50;
        color: #fff;
        text-align: center;
        padding: 100px 0;
    }

    section.hero h2 {
        font-size: 40px;
        margin-bottom: 20px;
    }

    section.hero p {
        font-size: 24px;
        margin-bottom: 50px;
    }

    section.hero button {
        background-color: #fff;
        color: #4CAF50;
        border: 2px solid #fff;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
    }

    section.hero button:hover {
        background-color: #4CAF50;
        color: #fff;
    }

    .features {
        text-align: center;
        padding: 50px 0;
    }

    .feature-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1000px;
        margin: 0 auto;
        padding-bottom: 50px;
    }

    .feature-header h3 {
        width: 30%;
    }

    .feature-cards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        max-width: 1000px;
        margin: 0 auto;
        gap: 30px;
    }

    .feature-card {
        text-align: center;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
    }

    .feature-card img {
        margin-bottom: 20px;
    }

    .feature-card h3 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .feature-card p {
        font-size: 16px;
    }

    footer {
        background-color: #333;
        padding: 20px;
        text-align: center;
        font-size: 14px;
        color: #fff;
    }

</style>
<body>
<header>
    <h1>Speaking Genie</h1>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
    </nav>
</header>
<main>
    <section class="hero">
        <h2>Meet Speaking Genie</h2>
        <p>Your personal conversational AI assistant that helps you get things done.</p>
        <button>Get Started</button>
    </section>
    <section class="features">
        <h2>Features</h2>

        <div class="feature-cards">
            <div class="feature-card">
                <img src="https://via.placeholder.com/150" alt="Feature 1">
                <h3>Feature 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac velit vel ex congue euismod.</p>
            </div>
            <div class="feature-card">
                <img src="https://via.placeholder.com/150" alt="Feature 2">
                <h3>Feature 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac velit vel ex congue euismod.</p>
            </div>
            <div class="feature-card">
                <img src="https://via.placeholder.com/150" alt="Feature 3">
                <h3>Feature 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac velit vel ex congue euismod.</p>
            </div>
        </div>
    </section>
</main>
<footer>
    <p>&copy; 2023 Speaking Genie. All rights reserved.</p>
</footer>
</body>
</html>
