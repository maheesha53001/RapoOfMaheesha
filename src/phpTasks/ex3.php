<?php 
    $title = "Exercise 3: Form Handling";
    include 'header.php'; 
?>

<main class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 border p-4 shadow-sm bg-light">

   <h2 class="mb-4 text-center">User Input Form</h2>
   <form method="post" action="">
                <div class="mb-3">
                    <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                </div>
                <input type="submit" name="submit" class="btn btn-primary w-100" value="Submit">
            </form>

    <?php

        if (isset($_POST['submit'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
           echo "<div class='alert alert-info mt-4'>";
           echo "<h3>Hello $fname $lname, You are welcome to my site.</h3>";
                    echo "</div>";
                }
    ?>
        </div>
    </div>

</main>

<?php include 'footer.php'; ?>