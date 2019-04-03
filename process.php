<?php
$conn = mysqli_connect("localhost","root","","crud");
$name = '';
$location='';
$id=0;
$edit = false;

if(isset($_POST["submit"])) {
    $name = $_POST['name'] ;
    $location = $_POST['location'] ;

    $query = "INSERT INTO data (name,location) VALUES ('$name', '$location'); ";

    mysqli_query($conn, $query);
}

if(isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $query = "DELETE FROM data WHERE id = $id";

    mysqli_query($conn,$query);


    header('Location:index.php');
}

if(isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit = true;
    $query = "SELECT * FROM data WHERE id = $id";

   $result = mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($result);

    $id = $row['id'];
    $name= $row['name'];
    $location = $row['location'];
}





if(isset($_POST['change'])) {
    $id = $_POST['id'];
    $name =$_POST['name'];
    $location = $_POST['location'];
    $query = "UPDATE data SET name = '$name', location='$location' WHERE id = $id";

   $result = mysqli_query($conn,$query);

//     $row = mysqli_fetch_assoc($result);

//     $id = $row['id'];
//     $name= $row['name'];
//     $location = $row['location'];
 }











?>