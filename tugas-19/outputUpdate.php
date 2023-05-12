<?php
if(isset($_POST['submit']) && isset($_FILES['avatar'])){
    include "connectDB.php";
    echo "Halaman Penambahan User. <br>";

    $id = $_POST['id'];
    $name = $_POST['name'];
    $role = $_POST['role'];
    $password = $_POST['password'];
    $email = $_POST['email']; 
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $avatar = $_FILES['avatar']['name'];
    $avatar_tmp = $_FILES['avatar']['tmp_name'];

    $img_ex = pathinfo($avatar, PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);
    $avatarName = uniqid("IMG-", true).'.'.$img_ex_lc;
    
    $sql_update = "UPDATE Customers SET email = '$email', name = '$name', `role` = '$role', avatar = '$avatarName', phone = '$phone', address = '$address', password = '$password', created_at = DEFAULT WHERE CustomerID = $id;";

    if ($conn->query($sql_update) === TRUE) {
        echo "Insert user Successfully <br>";
        $img_upload_path = 'image/'. $avatarName;
        move_uploaded_file($avatar_tmp, $img_upload_path);
    } else {
        echo "Error: " . $sql_update . "<br>" . $conn->error;
    }

    $sql_read = "select * from user where id = $id";
    $result = $conn->query($sql_read);

    $row = mysqli_fetch_array($result);
    echo "id = " . $row['id'] . "<br>
    email = " . $row['email'] . "<br>
    name = " . $row['name'] . "<br>
    role = " . $row['role'] . "<br>
    avatar = <img src='image/" . $row['avatar'] . "' width = 150px> <br>
    phone = " . $row['phone'] . "<br>
    address = " . $row['address'] . "<br>
    password = " . $row['password'] . "<br>
    created_at = " . $row['created_at'] . "<br>
    updated_at = " . $row['updated_at'];
}
else {
    echo "error";
}
?>