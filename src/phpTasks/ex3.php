<?php 
    $title = "Exercise 3: Form Handling";
    include 'header.php'; 
?>

<main>
    <h2>User Input Form</h2>
    
    <form method="post" action="">
        <input type="text" name="fname" placeholder="First Name" required>
        <input type="text" name="lname" placeholder="Last Name" required>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php

        if (isset($_POST['submit'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            echo "<h3>Hello $fname $lname, You are welcome to my site.</h3>";
        }
    ?>
</main>

<?php include 'footer.php'; ?>