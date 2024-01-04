<?php
// Initialize a variable to track form submission success
$insert = false;

// Check if the form has been submitted
if(isset($_POST['name'])){

    // **Database Connection:**
    // Establish a connection to the database
    $server = 'localhost';
    $username = 'root';
    $password = '';

$connection = mysqli_connect($server, $username, $password);

// Handle connection errors
if(!$connection){
    die("Connection failed: " . mysqli_connect_error());
}

// **Data Collection:**
// Retrieve form data from POST variables
$name = $_POST['name'];  
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

// **SQL Query:**
 // Prepare the SQL query to insert data into the 'trip' table
$sql = "INSERT INTO `google`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

// **Query Execution:**
// Execute the SQL query
if($connection->query($sql) == true){
    // Set the $insert flag to true if insertion is successful
    $insert = true;
}
else{
    // Handle query errors
    echo "ERROR: $sql <br> $connection->error";

}

// **Database Closure:**
// Close the database connection
$connection->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg" alt="Google Us Office ">
    <div class="container">
        <h2>Welcome to Google USA Trip form</h2>
        <p>Fill the form to confirm your willingness to visit USA</p>
        <?php
        if($insert == true){
            echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the USA trip</p>";
        }
        ?>
        
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Tell us why you want to join this trip"></textarea>
            <button class="btn f-left">Reset</button>
            <button class="btn f-right">Submit</button>
        </form>
        
        <script src="app.js"></script>
        
    </div>
</body>
</html>