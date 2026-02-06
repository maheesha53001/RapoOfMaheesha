<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : "My Website"; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            min-height: 100vh;
            position: relative;
        }
        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            background: #444;
            margin: 0;
        }
        nav li { margin: 10px 15px; }
        nav a { color: white; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #ffca28; }

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        main {
            padding: 20px 20px 60px 20px; /* Extra bottom padding for the footer */
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
        <p>Class room Tasks</p>
        <nav>
            <ul>
                <li><a href="ex1.php">Task 1</a></li>
                <li><a href="ex2.php">Task 2</a></li>
                <li><a href="ex3.php">Task 3</a></li>
                <li><a href="ex4.php">Task 4</a></li>
                <li><a href="ex5.php">Task 5</a></li>
                <li><a href="ex6.php">Task 6</a></li>
                <li><a href="ex7.php">Task 7</a></li>
            </ul>
        </nav>
    </header>