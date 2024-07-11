<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once ("templates2/nav.php")?>

        <body>




            <p>

                <br>
                <?php include_once ("templates3/tab.php")?>





            <div class="clearfix">
                <div class="img-container">
                    <img src="../images/ladie 1.jpg" alt="boots" style="width:100%">
                    <input type="checkbox" Pilot=" Pilot " value="on" />Add to cart
                    <p>
                    <h3>Zara Green Boots</h3>
                    </p>
                    <p style="color:red;">1500$</p>


                </div>
                <div class="img-container">
                    <img src="../images/ladie 10.jpg" alt="boots" style="width:100%">
                    <input type="checkbox" Pilot=" Pilot " value="on" />Add to cart
                    <p>
                    <h3>Zara Black Boots</h3>
                    </p>
                    <p style="color:red;">1000$</p>

                </div>
                <div class="img-container">
                    <img src="../images/ladie 11.jpg" alt="louboutin" style="width:100%">
                    <input type="checkbox" Pilot=" Pilot " value="on" />Add to cart
                    <p>
                    <h3>New Generation Louboutin Red Cross Escarpin</h3>
                    </p>
                    <p style="color:red;">700$</p>

                </div>

                <div class="img-container">
                    <img src="../images/ladie 2.jpg" alt="boots" style="width:100%">
                    <input type="checkbox" Pilot=" Pilot " value="on" />Add to cart
                    <p>
                    <h3> OFF White Black Boots</h3>
                    </p>
                    <p style="color:red;">200$</p>

                </div>
                <div class="img-container">
                    <img src="../images/ladie 3.jpg" alt="Escarpin" style="width:100%">
                    <input type="checkbox" Pilot=" Pilot " value="on" />Add to cart
                    <p>
                    <h3>New Black Cross Escarpin</h3>
                    </p>
                    <p style="color:red;">700$</p>

                </div>
                <div class="img-container">
                    <img src="../images/ladie 4.jpg" alt="New louboutin" style="width:100%">
                    <input type="checkbox" Pilot=" Pilot " value="on" />Add to cart
                    <p>
                    <h3> New Louboutin Red Cross Escarpin</h3>
                    </p>
                    <p style="color:red;">800$</p>
                </div>
                <div class="img-container">
                    <img src="../images/ladie 5.jpg" alt="Red louboutin" style="width:100%">
                    <input type="checkbox" Pilot=" Pilot " value="on" />Add to cart
                    <p>
                    <h3>Louboutin Red Cross Escarpin</h3>
                    </p>
                    <p style="color:red;">700$</p>
                </div>
                <div class="img-container">
                    <img src="../images/ladie 6.jpg" alt="balamin escarpain" style="width:100%">
                    <input type="checkbox" Pilot=" Pilot " value="on" />Add to cart
                    <p>
                    <h3> Balmain Escarpin</h3>
                    </p>
                    <p style="color:red;">800$</p>
                </div>
                <div class="img-container">
                    <img src="../images/ladie 7.jpg" alt="zara red cross" style="width:100%">
                    <input type="checkbox" Pilot=" Pilot " value="on" />Add to cart
                    <p>
                    <h3> Zara Red Cross Escarpin</h3>
                    </p>
                    <p style="color:red;">650$</p>
                </div>
                <div class="img-container">
                    <img src="../images/ladie 9.jpg" alt="Red cross escarpin" style="width:100%">
                    <input type="checkbox" Pilot=" Pilot " value="on" />Add to cart
                    <p>
                    <h3> Red Cross Escarpin</h3>
                    </p>
                    <p style="color:red;">770$</p>
                </div>

                <div class="img-container">
                    <img src="../images/LOUBOUTIN.jpg" alt="Louboutin" style="width:100%">
                    <input type="checkbox" Pilot=" Pilot " value="on" />Add to cart
                    <p>
                    <h3> Louboutin </h3>
                    </p>
                    <p style="color:red;">1000$</p>
                </div>
                <div class="img-container">
                    <img src="../images/ladie 11.jpg" alt="Escarpin" style="width:100%">
                    <input type="checkbox" Pilot=" Pilot " value="on" />Add to cart
                    <p>
                    <h3> Escarpin Rouge</h3>
                    </p>
                    <p style="color:red;">770$</p>
                </div>
                <div class="img-container">
                    <img src="../images/ladie 12.jpg" alt="New balance" style="width:100%">
                    <input type="checkbox" Pilot=" Pilot " value="on" />Add to cart
                    <p>
                    <h3> Woman New balance</h3>
                    </p>
                    <p style="color:red;">270$</p>
                </div>
                <div class="img-container">
                    <img src="../images/ladie 13.jpg" alt="Gym shoes" style="width:100%">
                    <input type="checkbox" Pilot=" Pilot " value="on" />Add to cart
                    <p>
                    <h3> Gym Shoes</h3>
                    </p>
                    <p style="color:red;">70$</p>
                </div>


                <div class="img-container">
                    <img src="../images/ladie 18.jpg" alt="sneakerss" style="width:100%">
                    <input type="checkbox" Pilot=" Pilot " value="on" />Add to cart
                    <p>
                    <h3> Puma Sneakers </h3>
                    </p>
                    <p style="color:red;">170$</p>
                </div>
            </div>




            <h1 style="text-align: center ;
                                                     color:rgb(0, 0, 0); 
                                                     text-decoration: underline; 
                                                     text-transform: uppercase;
                                                      font-style: italic; 
                                                      font-weight: 600;"> </h1>


<br>
<form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contacts_form">
        <label for="fn">Item name:</label><br>
        <input type="text" id="fn" placeholder="Fullname" name="fullname" required><br><br>

                                                   
<label for="sb">Size:</label><br>
        <select name="subject_line" id="sb" required>
           <option value="Large">36</option>
            <option value="Large">37</option>
            <option value="shoes">38</option>
            <option value="shoes">39</option>
            <option value="shoes">40</option>
            <option value="shoes">41</option>
            <option value="Large">42</option>
            <option value="Large">43</option>
          
        </select><br><br>
                                                
                                                   
<label for="sb">Delivery:</label><br>
<option value="">--Delivery Mode--</option>
<option value="Delivery">Delivery</option>
<option value="Own pick up">Own pick up</option>
                                                              
</select><br><br>  
               
    
                

                   
                    <?php include_once ("templates4/footer.php")?>

                </form>
                <style>
                    body {
                        background-image: url(../images/bk.jpg);
                    }
                </style>
        </body>

</html>