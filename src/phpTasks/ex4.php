<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Form Submission Page</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body { background-color: #0a2d39; }
        .registration-card { max-width: 500px; margin-top: 50px; }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center">
    <div class="card shadow registration-card">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0 text-center">User Registration Form</h3>
        </div>
        <div class="card-body p-4">
            
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name:</label>
                    <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter first name" required>
                </div>
                
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name:</label>
                    <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter last name" required>
                </div>
                
                <div class="d-grid gap-2">
                    <input type="submit" class="btn btn-primary" value="Submit Registration">
                </div>
            </form>

            <hr>

            <?php
            // 3. PHP Logic to handle the POST request
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Collect and sanitize input
                $fname = htmlspecialchars($_POST['fname'] ?? '');
                $lname = htmlspecialchars($_POST['lname'] ?? '');

                if (!empty($fname) && !empty($lname)) {
                    // Styled welcome message
                    echo "
                    <div class='alert alert-success border-0 shadow-sm mb-0'>
                        <h5 class='alert-heading'>Submission Successful!</h5>
                        <p class='mb-0'>Hello <strong>$fname $lname</strong>, you are welcome to my site.</p>
                    </div>";
                }
            }
            ?>
            
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
