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
    <img src="../images/JORDAN  KIDS PRS.jpg" alt="jordan" style="width:100%">
    <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
    <p><h3>JORDAN</h3></p>
    <p style="color:red;">150$</p>


    </div>
    <div class="img-container">
        <img src="../images/NIKE ZOOM.jpg" alt="nike zoom" style="width:100%">
        <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
        <p><h3> NIKE ZOOM</h3></p>
        <p style="color:red;">180$</p>
   </div>
    <div class="img-container">
    <img src="../images/KIDS ADIDAS BST.jpg" alt="adidas" style="width:100%">
    <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
    <p><h3>ADIDAS </h3></p>
    <p style="color:red;">100$</p>
 </div>
  
    
    <div class="img-container">
        <img src="../images/AIR MAX.jpg" alt="air max" style="width:100%">
        <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
        <p><h3>AIR MAX</h3></p>
        <p style="color:red;">220$</p>
    
        </div>
        <div class="img-container">
            <img src="../images/JJORDAN 1 LOW.jpg" alt="jordan" style="width:100%">
            <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
            <p><h3> JORDAN 1 LOW</h3></p>
            <p style="color:red;">750$</p>
        
            </div>
            <div class="img-container">
                <img src="../images/JORDAN 1 LOW CHOCOLAT.jpg" alt="jordan" style="width:100%">
                <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
                <p><h3> JORDAN CHOCOLATE </h3></p>
                <p style="color:red;">280$</p>
           </div>
           <div class="img-container">
            <img src="../images/JORDAN 1 LA.jpg" alt="jordan 1" style="width:100%">
            <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
            <p><h3> JORDAN L.A </h3></p>
            <p style="color:red;">180$</p>
       </div>
       <div class="img-container">
        <img src="../images/KIDS AIRMAX.jpg" alt="kids air max" style="width:100%">
        <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
        <p><h3> NEW AIR MAX</h3></p>
        <p style="color:red;">750$</p>
    
        </div>
        <div class="img-container">
            <img src="../images/Old adidas.jpg" alt="old adidas" style="width:100%">
            <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
            <p><h3> OLD</h3></p>
            <p style="color:red;">550$</p>
        
            </div>
</div>



                                                   
        <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contacts_form">
        <label for="fn">Item name:</label><br>
        <input type="text" id="fn" placeholder="Fullname" name="fullname" required><br><br>
                                           
                                                   
                                                  

               
    
                

<label for="sb">Size:</label><br>
        <select name="subject_line" id="sb" required>
            
          <option value="Large">37</option>
            <option value="shoes">38</option>
            <option value="shoes">39</option>
            <option value="shoes">40</option>
            <option value="shoes">41</option>
            <option value="Large">42</option>
            <option value="Large">43</option>
            <option value="Large">44</option>
            <option value="Large">45</option>
        </select><br><br>
         <label for="sb">Delivery Mode:</label><br>
        <select name="subject_line" id="sb" required>
       
            <option value="Delivery">Delivery</option>
            <option value="Own pick up">Own pick up</option>
           
        </select><br><br>                                               

               
                  

                    </form>

                    <?php include_once ("templates4/footer.php")?>

                    <style> body {
                        background-image: url(../images/bk.jpg);
                    }
                            </style>
</body>
</html>