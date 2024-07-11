<?php include_once ("templates2/nav.php")?>

<?php
// Move the database connection code to the top
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kivusneakers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all the required fields are set in the $_POST array
    if (isset($_POST["fullname"], $_POST["email"], $_POST["password"], $_POST["confirm_password"])) {
        $fn = $_POST["fullname"];
        $mail = $_POST["email"];
        $password = $_POST["password"];
        $con = $_POST["confirm_password"];

        // Check if the password and confirm password fields match
        if ($password !== $con) {
            echo "Passwords do not match.";
        } else {
            // Insert data into the database
            $sql = "INSERT INTO signup (fullname, email, password, confirm_password) 
                    VALUES ('$fn', '$mail', '$password', '$con')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    } else {
        echo "Please fill in all required fields.";
    }
}
?>

<style>
    body {
        background-color: rgb(230, 210, 220);
    }
</style>

<div class="header">
    <h1>Sign Up</h1>
</div>

<body>
    <pr>You are required to fill in the following:</pr>

    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"><br>

        <label for="fn">Full Name</label><br>
        <input type="text" id="fn" placeholder="Full Name" name="fullname" required><br><br>

        <label for="email">Email</label><br>
        <input type="email" id="email" placeholder="Email" name="email" required><br><br>

        <label for="password">Password</label><br>
        <input type="password" id="password" placeholder="Password" name="password" required><br><br>

        <label for="confirm_password">Confirm Password</label><br>
        <input type="password" id="confirm_password" placeholder="Confirm Password" name="confirm_password" required><br><br>

        <input type="submit" value="Sign Up" name="Sign Up">
    </form>
    <?php include_once ("templates4/footer.php")?>
</body>