<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once ("templates2/nav.php")?>

   



    <p>
   
<br>
<?php include_once ("templates3/tab.php")?>




        
<div class="clearfix">
    <div class="img-container">
    <img src="../images/KIDS JORDAN 1 B.jpg" alt="sneakers" style="width:100%">
    <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
    <p><h3>JORDAN</h3></p>
    <p style="color:red;">150$</p>


    </div>
    <div class="img-container">
        <img src="../images/kids2.jpg" alt="Mountains" style="width:100%">
        <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
        <p><h3> ADIDAS SPLY</h3></p>
        <p style="color:red;">80$</p>
   </div>
    <div class="img-container">
    <img src="../images/kids3.jpg" alt="Forest" style="width:100%">
    <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
    <p><h3>ADIDAS PUL </h3></p>
    <p style="color:red;">30$</p>
 </div>
  
    
    <div class="img-container">
        <img src="../images/kids4.jpg" alt="Mountains" style="width:100%">
        <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
        <p><h3>AIR FORCE</h3></p>
        <p style="color:red;">40$</p>
    
        </div>
        <div class="img-container">
            <img src="../images/kids5.jpg" alt="Mountains" style="width:100%">
            <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
            <p><h3> SPADRI</h3></p>
            <p style="color:red;">30$</p>
        
            </div>
            <div class="img-container">
                <img src="../images/kids6.jpg" alt="Mountains" style="width:100%">
                <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
                <p><h3> FRAGMA CACTUS </h3></p>
                <p style="color:red;">80$</p>
           </div>
           <div class="img-container">
            <img src="../images/kids7.jpg" alt="Mountains" style="width:100%">
            <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
            <p><h3> JORDAN 1 </h3></p>
            <p style="color:red;">180$</p>
       </div>
       <div class="img-container">
        <img src="../images/kids8.jpg" alt="Mountains" style="width:100%">
        <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
        <p><h3> JORDAN 6</h3></p>
        <p style="color:red;">80$</p>
    
        </div>
        <div class="img-container">
            <img src="../images/kids9.jpg" alt="Mountains" style="width:100%">
            <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
            <p><h3> Vans</h3></p>
            <p style="color:red;">50$</p>
        
            </div>
</div>


                                          
<form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contacts_form">
        <label for="fn">Item name:</label><br>
        <input type="text" id="fn" placeholder="Fullname" name="fullname" required><br><br>
                                                   

        <label for="sb">Size:</label><br>
        <select name="subject_line" id="sb" required>
          
            <option value="Large">33</option>
            <option value="shoes">34</option>
            <option value="shoes">35</option>
            <option value="shoes">36</option>
            <option value="shoes">37</option>
            <option value="Large">38</option>
            <option value="Large">39</option>
            
        </select><br><br>

        <label for="sb">Delivery:</label><br>
        <select name="subject_line" id="sb" required>
            <option value="Delivery">Delivery</option>
            <option value="Own pick up">Own pick up</option>
           
        </select><br><br>      

                    <button>Submit</button>
                    <hr size="8" width="100%" color="red"> 
                    <p><center>Copyright KIVU Kicks 2024 &copy; Allrights reserved</center> </p>

                    </form>
                    <style> body {
                        background-image: url(images/bk.jpg);
                    }
                            </style>
</body>
</html>