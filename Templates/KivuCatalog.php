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
    <img src="../images/JORDAN  KIDS PRS.jpg" alt="sneakers" style="width:100%">
    <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
    <p><h3>JORDAN</h3></p>
    <p style="color:red;">150$</p>


    </div>
    <div class="img-container">
        <img src="../images/NIKE ZOOM.jpg" alt="Mountains" style="width:100%">
        <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
        <p><h3> NIKE ZOOM</h3></p>
        <p style="color:red;">180$</p>
   </div>
    <div class="img-container">
    <img src="../images/KIDS ADIDAS BST.jpg" alt="Forest" style="width:100%">
    <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
    <p><h3>ADIDAS </h3></p>
    <p style="color:red;">100$</p>
 </div>
  
    
    <div class="img-container">
        <img src="../images/AIR MAX.jpg" alt="Mountains" style="width:100%">
        <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
        <p><h3>AIR MAX</h3></p>
        <p style="color:red;">220$</p>
    
        </div>
        <div class="img-container">
            <img src="../images/JJORDAN 1 LOW.jpg" alt="Mountains" style="width:100%">
            <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
            <p><h3> JORDAN 1 LOW</h3></p>
            <p style="color:red;">750$</p>
        
            </div>
            <div class="img-container">
                <img src="../images/JORDAN 1 LOW CHOCOLAT.jpg" alt="Mountains" style="width:100%">
                <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
                <p><h3> JORDAN CHOCOLATE </h3></p>
                <p style="color:red;">280$</p>
           </div>
           <div class="img-container">
            <img src="../images/JORDAN 1 LA.jpg" alt="Mountains" style="width:100%">
            <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
            <p><h3> JORDAN L.A </h3></p>
            <p style="color:red;">180$</p>
       </div>
       <div class="img-container">
        <img src="../images/KIDS AIRMAX.jpg" alt="Mountains" style="width:100%">
        <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
        <p><h3> NEW AIR MAX</h3></p>
        <p style="color:red;">750$</p>
    
        </div>
        <div class="img-container">
            <img src="../images/Old adidas.jpg" alt="Mountains" style="width:100%">
            <input type="checkbox"  Pilot=" Pilot " value="on" />Add to cart
            <p><h3> OLD</h3></p>
            <p style="color:red;">550$</p>
        
            </div>
</div>


<h1 style ="text-align: center ;
                                                     color:rgb(0, 0, 0); 
                                                     text-decoration: underline; 
                                                     text-transform: uppercase;
                                                      font-style: italic; 
                                                      font-weight: 600;"> </h1>
                                                   

                                                   <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contacts_form">
        <label for="fn">Item name:</label><br>
        <input type="text" id="fn" placeholder="Fullname" name="fullname" required><br><br>
                                           
                                                   
                                                  

               
    
                

<label for="sb">Size:</label><br>
        <select name="subject_line" id="sb" required>
            <option value="">--Select size--</option>
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
       
            
            <option value="Delivery">Delivery</option>
            <option value="Own pick up">Own pick up</option>
           
        </select><br><br>                                               

               
                    <hr size="8" width="100%" color="red"> 
                    <p><center>Copyright KIVU Kicks 2024 &copy; Allrights reserved</center> </p>

                    </form>
                    <style> body {
                        background-image: url(../images/bk.jpg);
                    }
                            </style>
</body>
</html>