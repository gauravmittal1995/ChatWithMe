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

//SQL queries to insert in table $name.
$sql1="INSERT INTO $name(objectname,objecttype)VALUES('$firstname','FIRSTNAME')";
$sql2="INSERT INTO $name(objectname,objecttype)VALUES('$lastname','LASTNAME')";
$sql3="INSERT INTO $name(objectname,objecttype)VALUES('$sex','SEX')";
$sql4="INSERT INTO $name(objectname,objecttype)VALUES('$country','COUNTRY')";
$sql5="INSERT INTO $name(objectname,objecttype)VALUES('$city','CITY')";
$sql6="INSERT INTO $name(objectname,objecttype)VALUES('$phonenum','PHONENUM')";

//Insert in table.
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
$result3=mysqli_query($conn,$sql3);
$result4=mysqli_query($conn,$sql4);
$result5=mysqli_query($conn,$sql5);
$result6=mysqli_query($conn,$sql6);

//If all the results are being satisfied.
if(($result1)&&($result2)&&($result3)&&($result4)&&($result5)&&($result6)){

header("Location: profile.php");
	
}
//If any result not working.
else{

header("Location: profile_construct.php?msg=Could Not connect with Database. Make sure your logged in.");

}

?>
