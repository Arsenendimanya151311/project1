<?php
// Indexed or numeroic array
$color=["black","Green","Yellow"];

print_r( $colors);
?>
<br>
<?php
$user=array("Alex","Peter","Ann");
print $user[2];
?>
<pre>
<?php print_r($user);?>
</pre>
<?php
$user_data=[
    "fullname"=>"Alex OKama",
    "email"=>"AOKama@yahoo.com",
    "phone"=>"+254746315411"];
    print $user_data["email"];
    ?>
    <pre>
        <?php print_r($user_data);?> 
    </pre>

    <?php
    //Multidimensional Arrays
    $user_details=[
        "Director"=>array(
            "fullname"=>"Alex OKama",
            "email"=>"AOKama@yahoo.com",
            "phone"=>[
             "Home"=>  "+254746315411",
            "Work"=>"52685",
            "mobile"=>"55587",]
        ),

            "Manager"=>array(
                "fullname"=>"Paul OKama",
                "email"=>"POKama@yahoo.com",
                "phone"=>[
                 "Home"=>   "+121320",
                "Work"=>"5",
                "mobile"=>"56982",
                ]),


            ];
        
    
        
    ?>
    <pre>
     <?php print_r($user_details); ?>  
    
    </pre>
