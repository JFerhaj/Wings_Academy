<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="fitness";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
    die("Connection Failed:" .mysql_connect_error());
}

    $Name= $_POST['Name'];
     $Email=$_POST['Email'];
     $Sentinel_Program=$_POST['Sentinel_Program'];
     $Date=$_POST['Date'];
     $Request=$_POST['Request'];
     
$sql;

     $sql_query ="INSERT INTO contact (Name,Email,Sentinel_Program,Date,Request) VALUES ('$Name','$Email','$Sentinel_Program','$Date',$Request')";


    if (mysqli_query($conn, $sql_query))
    {
        echo "Now Details Entry inerted successfully!";
    }
    else 
    {
        echo "Error: " ;
    }
    mysqli_close($conn);



?>