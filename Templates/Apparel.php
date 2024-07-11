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
    <img src="../images/Apparel1.jpg" alt="apparel1" style="width:100%">
    <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
    <p><h3>T-shirt Zone Gym</h3></p>
    <p style="color:red;">15$</p>


    </div>
    <div class="img-container">
    <img src="../images/Apparel2.jpg" alt="apparel2" style="width:100%">
    <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
    <p><h3>T-shirt calvin</h3></p>
    <p style="color:red;">10$</p>

    </div>
    <div class="img-container">
    <img src="../images/Apparel3.jpg" alt="apparel3" style="width:100%">
    <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
    <p><h3>Couple shirt calvin</h3></p>
    <p style="color:red;">70$</p>
    
</div>
    
    <div class="img-container">
        <img src="../images/Apparel9.jpg" alt="apparel9" style="width:100%">
        <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
        <p><h3>T-shirt OFF White</h3></p>
        <p style="color:red;">20$</p>
    
        </div>
        <div class="img-container">
            <img src="../images/Apparel5.jpg" alt="apparel5" style="width:100%">
            <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
            <p><h3> Black casual T-shirt</h3></p>
            <p style="color:red;">70$</p>
        
            </div>
            <div class="img-container">
                <img src="../images/Apparel6.jpg" alt="apparel6" style="width:100%">
                <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
                <p><h3> Adult Tie </h3></p>
                <p style="color:red;">80$</p>
            </div>
            <div class="img-container">
                <img src="../images/Apparel7.jpg" alt="apparel7" style="width:100%">
                <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
                <p><h3> White</h3></p>
                <p style="color:red;">70$</p>
            </div>
            <div class="img-container">
                <img src="../images/Apparel8.jpg" alt="apparel8" style="width:100%">
                <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
                <p><h3> Blue Navy T-shirt</h3></p>
                <p style="color:red;">80$</p>
            </div>
            <div class="img-container">
                <img src="../images/Apparel10.jpg" alt="apparel10" style="width:100%">
                <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
                <p><h3> Luminary T-Shirt</h3></p>
                <p style="color:red;">65$</p>
            </div>
            <div class="img-container">
                <img src="../images/Apparel11.jpg" alt="apparel11" style="width:100%">
                <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
                <p><h3> Female Rayban</h3></p>
                <p style="color:red;">70$</p>
            </div> 
            
            <div class="img-container">
                <img src="../images/Apparel13.jpg" alt="apparel13" style="width:100%">
                <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
                <p><h3> Yellow rayban </h3></p>
                <p style="color:red;">25$</p>
            </div>
            <div class="img-container">
                <img src="../images/Apparel14.jpg" alt="apparel14" style="width:100%">
                <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
                <p><h3> White shirt</h3></p>
                <p style="color:red;">70$</p>
            </div>
            <div class="img-container">
                <img src="../images/Apparel15.jpg" alt="apparel15" style="width:100%">
                <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
                <p><h3> Black rayban</h3></p>
                <p style="color:red;">70$</p>
                
            </div>
          
            <div class="img-container">
                <img src="../images/Aparel17.jpg" alt="apparel17" style="width:100%">
                <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
                <p><h3> Couple Caps</h3></p>
                <p style="color:red;">30$</p>
            </div>
            <div class="img-container">
                <img src="../images/Apparel18.jpg" alt="apparel18" style="width:100%">
                <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
                <p><h3> Sun Glasses</h3></p>
                <p style="color:red;">15$</p>
            </div>
            
  </div>






                                                   
<br>
<form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contacts_form">
        <label for="fn">Item name:</label><br>
        <input type="text" id="fn" placeholder="Fullname" name="fullname" required><br><br>

                                                   
<label for="sb">Size:</label><br>
        <select name="subject_line" id="sb" required>
            <option value="">--Select size--</option>
            <option value="Smal">S</option>
            <option value="Medium">M</option>
            <option value="Large">L</option>
            <option value="extra large">XL</option>
            <option value="double extra large ">2XL</option>
        
        </select><br><br>                                               
        <br>
                                                   
                                                   <label for="sb">Delivery:</label><br>
                                                           <select name="subject_line" id="sb" required>
                                                               <option value="">--Delivery Mode--</option>
                                                               <option value="Delivery">Delivery</option>
                                                               <option value="Own pick up">Own pick up</option>
                                                              
                                                           </select><br><br>  
               
    
                


                   
                                                           <?php include_once ("templates4/footer.php")?>

                    </form>
                    <style> body {
                        background-image: url(images/bk.jpg);
                    }
                            </style>
</body>
</html>