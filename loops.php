<h1>loops</h1>
<?php
//while loop
$in=0;
while(
    $in<10
){
    print $in. "<br>";
    $in ++;
}
?>
<h4>do while-loops</h4>
<?php
//do while
$s = 55;
do{
    print $s . "<br>";
    $in ++;
}
while
($s<15); 



for($f=45; $f<55;$f++){
    print $f. "<br>";
}
?>
<h4>For reach</h4>
<?php
$months=["January","February","March","April","May","June","Jully","August","September","October","November","December"];
foreach($months AS $month){
    print $month."<br>";
}
?>
<form action="">
    <select name="" id="">
        <option value="">--Months--</option>
        <?php
        foreach($months AS $months){
            print "<option value='' >months</option>";
        }
        ?>
    </select>

    <select name="" id="">
    <option value="">--Year--</option>
    <?php
    // while loop
    $y=2014;
    while($y<2030){
        print "<option value='' >$y</option>";
        $y++;
    }
     ?>
    </select>
    
    </form>