<nav class="navbar"> 
        <div class="navdiv">
            <div class="logo"><a href="#"></a><h2>KIVU SNEAKERS</h2></div>
            <ul>
                <li> <a href="About.php"> About Us </a> </li>
                <li>  <a href="index.php"> Home </a>  </li>
                <li> <a href="KivuCatalog.php">KivuCatalog</a> </li>
                <li>  <a href="KidsCatolog.php">kidsCatalog</a></li>
                <li> <a href="WomanKicksCatalog.php">WomanKicksCatalog</a> </li>
                <li> <a href="Apparel.php">Apparel</a> </li>
                <li>  <a href="Contact.php">Contact</a> </li>
                <li>  <a href="view_message.php">view_message</a> </li>
                <li>  <a href="signup.php">signup</a> </li>
                
            </ul>
        
        </div>
        
        </nav>
        <?php
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
?>

<body style="background-color:  rgb(230, 210, 220);">
<?php
if (isset($_GET["customerid"]))
  $customerid = $_GET["customerid"];

  $spot_msg = "SELECT * FROM customers WHERE customerid = 'customerid' LIMIT 1";
  $sel_msg_res = $conn->query($spot_msg);
 
  if ($sel_msg_res->num_rows > 0) {
    // output data of each row
    while ($sel_msg_row = $sel_msg_res->fetch_assoc()) {
      $sub = $sel_msg_row["email"];
      echo ($sub);
    }
  }
  if (isset($_POST["update_message"])) {
    $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $subject = mysqli_real_escape_string($conn, $_POST["subject_line"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);
    $userid = mysqli_real_escape_string($conn, $_POST["userid"]);

    $update_message = "UPDATE customers SET fullname='$fullname', 
    email='$email',subject='$subject', message='$message' WHERE customerid='$userid' LIMIT 1";


    if ($conn->query($update_message) === TRUE) {
      header("Location: view_messages.php");
      exit();
    } else {
      echo "Error: " . $update_message . "<br>" . $conn->error;
    }
  }
  ?>


  <div class="row">
    <div class="content">
      <div class="side-bar">
        <h1>update message</h1>
        <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="fn">fullname:</label><br>
        <input type="text" id="fn" placeholder="fullname" name="fullname" required><br><br>
          <label for="em">Email:</label><br>
          <input type="email" id="email" placeholder="email" name="email" required value="<?php print $spot_msg_row["email"]; ?>"><br><br>

          <label for="sb">Subject:</label><br>
          <select name="subject_line" id="sb" required value="<?php print $sel_msg_row["subject_line"]; ?>">
          <option value="">--Select Delivery mode --</option>
          <option value="Delivery">Delivery</option>
          <option value="Own pick up">Own pick up</option>
          </select><br><br>

          <label for="sb">Message:</label><br>
          <textarea name="message" id="" cols="30" rows="5" required value="<?php print $spot_msg_row["message"]; ?>"></textarea><br><br>

          <input type="submit" name="update_message" value="update Message">
          <input type="hidden" name="customerid" value="<?php print $spot_msg_row["customerid"]; ?>">
          <?php include_once ("templates4/footer.php")?>
        </form>