<?php
$FirstName= $_POST['FirstName'];
$SureName= $_POST['SureName'];
$Date= date('Y-m-d', strtotime($_POST['Date']));
$Gender= $_POST['Gender'];
$FatherName= $_POST['FatherName'];
$MotherName= $_POST['MotherName'];
$Email= $_POST['Email'];
$FatherNumber= $_POST['FatherNumber'];
$MotherNumber= $_POST['MotherNumber'];
$ParentEmail= $_POST['ParentEmail'];
$Address= $_POST['Address'];
$PinCode= $_POST['PinCode'];
$Std= $_POST['Std'];
$College_name= $_POST['College_name'];
$Clg_Address= $_POST['Clg_Address'];
$Clg_Pincode= $_POST['Clg_Pincode'];

//database connection

$conn = new mysqli('localhost','root','','greducation');
if($conn->connect_error){
    die('Connection Falied : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into addmission(FirstName, SureName, Date, Gender, FatherName, MotherName, Email, FatherNumber, MotherNumber, ParentEmail, Address, PinCode, Std, College_name, Clg_Address, Clg_Pincode) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssissssiississsi",$FirstName, $SureName, $Date, $Gender, $FatherName, $MotherName, $Email, $FatherNumber, $MotherNumber, $ParentEmail, $Address, $PinCode, $Std, $College_name, $Clg_Address, $Clg_Pincode);
    $stmt->execute();
    echo "success";
    $stmt->close();
    $conn->close();


}
?>
