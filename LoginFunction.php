<?php 

$conn = mysqli_connect("localhost", "root", "", "PortofolioUser"); 

function query ($query) {
    global $conn;
    $hasil = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($hasil) ) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data) {
    global $conn;

    $Gmail = strtolower(stripslashes($data["Gmail"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
           
    // Check if username already exists
    $result = mysqli_query($conn, "SELECT * FROM user WHERE gmail = '$gmail'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('Username already registered!')</script>";
        return false;
    }

    // Check password confirmation
    if ($password !== $password2) {
        echo "<script>alert('Password confirmation does not match')</script>";
        return false;
    }   

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert new user into the database
    $query = "INSERT INTO user (Gmail, password) VALUES ('$Gmail', '$hashedPassword')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        return mysqli_affected_rows($conn);
    } else {
        echo mysqli_error($conn); // Print the error message for debugging
        return false;
    }
}

?>