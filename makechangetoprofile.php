<?php

include("config.php");
include("varfromtable.php");

//Store Post vars in temp vars.
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$sex=$_POST['sex'];
$country=$_POST['country'];
$city=$_POST['city'];
$phonenum=$_POST['phonenum'];

//SQL queries to update in table $name.
$sql1="UPDATE $name 
SET objectname='$firstname'
WHERE objecttype='FIRSTNAME';";
$sql2="UPDATE $name 
SET objectname='$lastname'
WHERE objecttype='LASTNAME';";
$sql3="UPDATE $name 
SET objectname='$sex'
WHERE objecttype='SEX';";
$sql4="UPDATE $name 
SET objectname='$country'
WHERE objecttype='COUNTRY';";
$sql5="UPDATE $name 
SET objectname='$city'
WHERE objecttype='CITY';";
$sql6="UPDATE $name 
SET objectname='$phonenum'
WHERE objecttype='PHONENUM';";

//Insert in table.
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
$result3=mysqli_query($conn,$sql3);
$result4=mysqli_query($conn,$sql4);
$result5=mysqli_query($conn,$sql5);
$result6=mysqli_query($conn,$sql6);

//If all the results are being satisfied.
if(($result1)&&($result2)&&($result3)&&($result4)&&($result5)&&($result6)){

header("Location: profile_make.php?msg2=Information Updated");
	
}
//If any result not working.
else{

header("Location: profile_make.php?msg2=Connection Error");

}

?>
