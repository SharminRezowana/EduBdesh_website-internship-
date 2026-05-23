<?php
// 1. Database Connection Configuration (Default XAMPP Credentials)
$servername = "localhost:8080";
$username = "root"; 
$password = "";     
$dbname = "edubdesh_db";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if connection works
if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
}

// 2. Process form data only if a POST request happens
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Grab and trim user input data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $education_level = trim($_POST['education_level']);
    $ielts_score = trim($_POST['ielts_score']);
    $country = trim($_POST['country']);
    $intake_year = trim($_POST['intake_year']);
    $message = trim($_POST['message']);

    // 3. Prepare SQL Statement (Secures against SQL Injection hacks)
    $stmt = $conn->prepare("INSERT INTO consultations (name, email, phone, education_level, ielts_score, country, intake_year, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    
    // Bind all 8 strings ("ssssssss") to the placeholders
    $stmt->bind_param("ssssssss", $name, $email, $phone, $education_level, $ielts_score, $country, $intake_year, $message);

    // 4. Execute and give user alert feedback
    if ($stmt->execute()) {
        // Automatically redirects the student back to whatever page they submitted the form from!
        echo "<script>
                alert('Thank you! Your profile data has been securely saved. Our experts will call you shortly.');
                window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
              </script>";
    } else {
        echo "<script>
                alert('Oops! Something went wrong while saving your details. Please try again.');
                window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
              </script>";
    }

    // Close parameters and system connection
    $stmt->close();
}

$conn->close();
?>