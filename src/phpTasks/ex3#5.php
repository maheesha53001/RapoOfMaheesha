<?php 
    $title = "Exercise 3: String Variables";
    include 'header.php'; 
?>

<main class="container mt-5">
    <div class="row justify-content-center">
        
        <div class="col-md-8 card shadow p-4">
<h2 class="mb-4 text-center">String Manipulation</h2>

            <?php
                $str1 = "Hello";
                $str2 = "World";
                $combined = $str1 . " " . $str2;
                $length = strlen($combined);

                echo "<div class='alert alert-info'>";
                echo "<p class='fs-4'>Joined String: <strong>$combined</strong></p>";
                echo "<hr>";
                                echo "<p class='fs-5'>The length of the string is: <span class='badge bg-primary'>$length</span> characters.</p>";
                echo "</div>";
            ?>
            <a href="ex3.php" class="btn btn-secondary mt-3">Back to Form</a>
        
        </div> </div> 
    </main>

<?php include 'footer.php'; ?>
