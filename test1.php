

<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
$user= $_POST['username'];
$pass= $_POST['password'];

//connecting to the database
$servername="localhost";
$username="root";
$password="";
$database="priyul";

// create a connection
$conn=mysqli_connect($servername,$username,$password,$database);

// die if connection was not successful
if(!$conn)
{
    die("sorry we failed to connect:".mysqli_connect_error());

}
else{
    echo "loading";
    // submited to these query
    // sql query to executed
    $sql="INSERT INTO `pj`(`username`,`password`) VALUES ('$user','$pass')";
    $result=mysqli_query($conn,$sql);
    
    // check for insert data into table pj is successful
    if($result)
    {
        echo " ...<br>";
    }
    else 
    {
        echo "the record was not  inserted succesfully beacuse of this error-->".mysqli_error($conn );
    }
    


}


}
?>
</body>
</html>


