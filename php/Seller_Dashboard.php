<?php
require_once("./dbconn/config.php");

$email = $_POST['SellerEmail'];
$password = $_POST['SellerPassword'];

// Check for email id

if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM seller_details WHERE seller_email = '$email';")) > 0) {

    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM seller_details WHERE seller_email = '$email' AND seller_password = '$password';")) > 0) {
        $result = mysqli_query($conn, "SELECT * FROM seller_details WHERE seller_email = '$email' AND seller_password = '$password';");
        $row = mysqli_fetch_assoc($result);
    } else {
        ?>
        <script>
            alert("Your Password is incorrect !");
            window.location.href = '../index.html';
        </script>
        <?php
    }
} else {
    ?>
    <script>
        alert("Your Email id is not registered !");
        window.location.href = '../index.html';
    </script>

    <?php
}
?>

<!-- After Suucessful registration -->
<?php

// Header Part
require_once("seller_includes/Header.php");

// Navbar Part
require_once("seller_includes/Navbar.php");

// Sidebar Part and All Main Content Part
require_once("seller_includes/Sidebar.php");



session_destroy();
mysqli_close($conn);

?>