<?php 
    $title = "Received";
    require_once './includes/header.php';
    require_once './db/conn.php';

    If($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $area_code = $_POST['area_code'];

        $email = mysqli_real_escape_string($conn, $email);
        $address = mysqli_real_escape_string($conn, $address);
        $city = mysqli_real_escape_string($conn, $city);
        $province = mysqli_real_escape_string($conn, $province);
        $area_code = mysqli_real_escape_string($conn, $area_code);
        $sql = "INSERT INTO client_info (email, address, city, province, area_code) VALUES ('$email', '$address', '$city', '$province', '$area_code')";

        if (mysqli_query($conn, $sql)) {
            echo "Record added successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

 }
 mysqli_close($conn);


?>
<?php 
    require_once "./includes/footer.php"
?>