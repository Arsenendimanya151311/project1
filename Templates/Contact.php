<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Information - Kivu Kicks</title>
    <style type="text/css">
        *{
           text-decoration: none; }   
           .navbar{
            background:crimson; font-family: calibri;  padding-right: 15px;padding-left: 15px;
           }
           .navdiv{
               display: flex;align-items: center;justify-content: space-between;
   
           }
           .logo a{
               font-size: 35px;font-weight: 600;color: white;
           }
           li{
               list-style: none; display: inline-block;
           }
           li a{
               color: white; font-size: 18px; font-weight: bold;margin-right: 25px;
           }
           button{
               background-color: black;margin-left: 10px;border-radius: 10px; padding: 10px;width: 90px;
           }
           button{
               color: white;font-weight: bold;font-size: 15px;
           }
       </style>
   </head>
   <body>
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
  if(isset($_POST["send_message"])){
    $fn = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $subject = mysqli_real_escape_string($conn, $_POST["subject_line"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);

    $insert_message = "INSERT INTO customers (fullname, email, subject_line, message) VALUES ('$fullname', '$email', '$subject', '$message')";

    if ($conn->query($insert_message) === TRUE) {
        header("Location: view_message.php");
        exit();
    } else {
        echo "Error: " . $insert_message . "<br>" . $conn->error;
    }
}
?>

    <style>
        body {
            
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            color: #666;
            line-height: 1.6;
        }
        .phone-numbers {
            margin-bottom: 10px;
        }
        .instagram-link {
            display: block;
            margin-top: 10px;
            text-align: center;
        }
        .instagram-link a {
            color: #007bff;
            text-decoration: none;
        }
        .instagram-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
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

                <button><a href="#">Login</a></button>
                <button><a href="#">SignUp</a></button>
            </ul>
        
        </div>
        
        </nav>

    <div class="container">
        <h3>Contact Information</h3>
        <p><strong>Customer Service:</strong> Open from 8AM to 8PM.  Ready to answer your questions.</p>
        <p><strong>country:</strong> KENYA</p>
        <p><strong>Address:</strong> Lynx Appartemet Mbaghati way, Nairobi</p>
        <p><strong>country:</strong> Democratic Republic of Congo</p>
        <p><strong>Address:</strong> Boulevard , Goma</p>
        
        <div class="phone-numbers">
            <p><strong>Phone Number Kenya:</strong></p>
            <ul>
                <li>+254 713497021 - Sales and Customer Service</li>
                <li>+254 7110335593 -Delivery </li>
                <li>+254 725407465 - Technical Assistance (No Sales)</li>
            </ul>
        </div>
        <div class="phone-numbers">
            <p><strong>Phone Number Democratic Republic of Congo:</strong></p>
            <ul>
                <li>+243 997124114 - Sales and Customer Service</li>
                <li>+243 970000000 -Delivery </li>
                <li>+243 990000000 - Technical Assistance (No Sales)</li>
            </ul>
        </div>

        <div class="row">
    <div class="content">
    <h1>Talk to Us</h1>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contacts_form">
        <label for="fn">Fullname:</label><br>
        <input type="text" id="fn" placeholder="Fullname" name="fullname" required><br><br>

        <label for="em">Email Address:</label><br>
        <input type="email" id="em" placeholder="Email Address" name="email_address" required><br><br>

        <label for="sb">Subject:</label><br>
        <select name="subject_line" id="sb" required>
            <option value="">--Subject_line--</option>
            <option value="Delivery">Delivery</option>
            <option value="Own pick up">Own pick up</option>
           
        </select><br><br>

        <label for="sb">Message:</label><br>
        <textarea name="message" id="" cols="30" rows="5" required></textarea><br><br>
       
        <input type="submit" name="send_message" value="Send Message">
    </form>
                </div>
       
        
        <div class="Instagram-link">
            <p> our <a href="https://www.instagram.com/kivu_kicks?igsh=MTFiZDNjMXVpMXE4bw%3D%3D&utm_source=qr" target="_blank">Instagram</a></p>
        </div>
    </div>
    
    <hr size="8" width="100%" color="red"> 
    <p><center>Copyright KIVU Kicks &copy; Allrights reserved</center> </p>
</body>
</html>
