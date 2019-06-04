<?php
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $con=mysqli_connect('localhost','root');
    if(!$con)
    {
        echo "connection failed";
    }
    else
    {
        "connection done";
    }
    mysqli_select_db($con,'db4');
    $q="insert into data(name,pass) value('$name',$pass)";
    $i= mysqli_query($con,$q);
    if(!$i)
     {
         echo "not inserted";
     }
     else{
         echo "inserted";
     }
    mysqli_close($con); 
?>