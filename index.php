<?php include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arpit Shrestha Web Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <a href="index.php"><img src="./image/College.jpg" alt="College logo" style="padding-left: 30px;"></a>
        <h1 style="padding-left: 20%;">Computer Project Work - 2080</h1>
    </header>

    <div class="navbar">
        <div class="navsep">
            <h2>Arpit's_Project</h2>
        </div>
        <div>
            <a href="index.php">Home</a>
            <a href="display.php">Display</a>
            <a href="insert.php">Insert</a>
        </div>
    </div>

    <!-- Three Containers -->
    <div class="container">
        <div class="box">
            <img src="./image/Html.png" alt="PHP Icon Image" class="top-image">
            <p>HTML (HyperText Markup Language) is the backbone of web content, providing the structure and organization
                for elements on a webpage. CSS (Cascading Style Sheets) is used to enhance
                HTML by controlling the presentation. Together, HTML and CSS form the core
                languages for building and styling websites and web applications.</p>
            <p>Some basic features of HTML and CSS are:</p>
            <ol>
                <li>Structure</li>
                <li>Semantics</li>
                <li>Hyperlinks</li>
                <li>Styling</li>
                <li>Responsive Design</li>
            </ol>
        </div>

        <div class="box">
            <img src="./image/PHP.png" alt="PHP Icon Image" class="top-image">
            <p>
                PHP, or Hypertext Preprocessor, is a widely-used open-source scripting language primarily designed for
                web development and server-side scripting. PHP has a powerful tool for building dynamic web pages and
                web
                applications. PHP is often embedded within HTML, allowing developers to mix dynamic content generation
                with static web
                page elements seamlessly.</p>
            <p>Some of the features that provide by the PHP are:</p>
            <ol>
                <li>Security Features</li>
                <li>Community Support and Documentation</li>
                <li>Continuous development</li>
            </ol>

        </div>
        <div class="box">
            <img src="./image/Database.png" alt="PHP Icon Image" class="top-image">
            <p>
                A database is a structured collection of data organized in a way that enables efficient storage,
                retrieval, and manipulation of that data. Databases are fundamental to the operation of modern
                computer-based systems, providing a central repository for storing and managing information. Some of the
                example of databases are mysql, oracle, PostgreSQL, etc.</p>
            <p>Some of the features that provide by the database are:</p>
            <ol>
                <li>Structured Data Storage</li>
                <li>Data Security</li>
                <li>Backup and Recovery</li>
            </ol>
        </div>

    </div>

    <footer>
        <p>&copy; 2024 Arpit Shrestha. All rights reserved.</p>
    </footer>

</body>

</html>