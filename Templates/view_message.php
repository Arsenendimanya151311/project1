<?php include_once ("templates2/nav.php")?>




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
<?php
if (isset($_GET["DelId"])) {
    $DelId = mysqli_real_escape_string($conn, $_GET["DelId"]);

    // sql to delete a record
    $del_mes = "DELETE FROM customers WHERE customerid='$DelId' LIMIT 1";

    if ($conn->query($del_mes) === TRUE) {
        header("Location: view_message.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>

<body style="background-color:  rgb(230, 210, 220);">
    <div class="row">
        <div class="content">
            <h1>Messages</h1>
            <style>
                table {
                    border: 1px solid #2e2929;
                    border-collapse: collapse;
                    width: 70%;
                }
            </style>
            <table border="1" ; style="background-color: rgb(209, 144, 144);">
                <thead>
                    <tr>
                        <th colspan="2">email</th>
                        <th>subject</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $select_msg = "SELECT * FROM customers ORDER BY datecreated DESC";
                    $sel_msg_res = $conn->query($select_msg);
                    $en = 0;
                    if ($sel_msg_res->num_rows > 0) {
                        // output data of each row
                        while ($sel_msg_row = $sel_msg_res->fetch_assoc()) {
                            $en++;
                    ?>
                            <tr>
                                <td><?php print $en; ?>.</td>
                                <td><?php print $sel_msg_row["email"]; ?></td>
                                <td><?php print "<strong>" . $sel_msg_row["subject_line"] . '</strong> - ' . substr($sel_msg_row["message"], 0, 20) . '...'; ?></td>
                                <td><?php print date("d-M-Y H:i", strtotime($sel_msg_row["datecreated"])); ?></td>
                                <td>[ <a href="edit_msg.php?userid=<?php print $sel_msg_row["customerid"]; ?>">Edit</a> ] [ <a href="?DelId=<?php print $sel_msg_row["customerid"]; ?>" onclick="return confirm('This ation will delete this message permanently.\nAre you sure you want ot proceed?');">Del</a> ]</td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include_once("templates2/nav.php");
require_once("includes/db-connect.php");
?>

<body style="background-color:  rgb(230, 210, 220);">
  <?php include_once("Templates/nav.php"); ?>
  <marquee style="color: black;" class="blink">
    <h2>Kivu sneakers</h2>
  </marquee>
  <?php
  // Retrieve the userid from the query string
  $customerid = mysqli_real_escape_string($conn, $_GET["customerid"]);
  $customerid = $_GET["customerid"];
  echo ($userid);
  $spot_msg = "SELECT * FROM customers WHERE customerid = '$customerid' LIMIT 1";
  $sel_msg_res = $conn->query($spot_msg);

  if ($sel_msg_res->num_rows > 0) {
    // output data of each row
    while ($sel_msg_row = $sel_msg_res->fetch_assoc()) {
      $retrievedEmail = $sel_msg_row["email"];
      $retrievedSubject = $sel_msg_row["subject_line"];
      $retrievedMsg = $sel_msg_row["message"];
      $retrievedFullname = $sel_msg_row["fullname"];
      //echo ($sub);
    }
  }
  if (isset($_POST["update_message"])) {
    $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $subject = mysqli_real_escape_string($conn, $_POST["subject_line"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);
    $userid = mysqli_real_escape_string($conn, $_POST["userid"]);

    $update_message = "UPDATE customers SET fullname='$fullname', 
    email='$email',subject='$subject', message='$message' WHERE userid='$userid' LIMIT 1";


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
          <input type="text" id="fn" placeholder="fullname" name="fullname" value="<?php print $retrievedFullname ?>" required><br><br>
          <label for="em">Email:</label><br>
          <input type="email" id="email" placeholder="email" name="email" required value="<?php print $retrievedEmail ?>"><br><br>

          <label for="sb">Subject:</label><br>
          <select name="subject_line" id="sb" required>
            <option value="<?php print $retrievedSubject ?>" selected><?php print $retrievedSubject ?></option>
            <option value="Car hiring">Car hiring</option>
            <option value="car purchase">car purchase</option>
            <option value="Bamma tours">bamma tours</option>
          </select><br><br>

          <label for="sb">Message:</label><br>
          <textarea name="message" id="" cols="30" rows="5" required><?php print $retrievedMsg ?></textarea><br><br>

          <input type="submit" name="update_message" value="update Message">
          <input type="hidden" name="userid" value="<?php print $userid ?>">
        </form>
</body