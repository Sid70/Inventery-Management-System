<?php

require_once("../dbconn/config.php");

$name = $_POST['AdminName'];
$email = $_POST['AdminEmail'];
$phoneNumber = $_POST['AdminPhoneNumber'];
$EmployeeID = $_POST['AdminEmployeeID'];
$password = $_POST['AdminPassword'];

$image_path = "upload_image_admin/";
$image_path = $image_path . basename($_FILES['AdminImage']['name']);



$target_path = "upload_image_admin/";
$target_path = $target_path . basename($_FILES['AdminProof']['name']);



$sql = "INSERT INTO admin_details ( employee_id , admin_name , admin_email , admin_image ,admin_phone_number , admin_proof , admin_password) VALUES ('$EmployeeID','$name','$email', '$image_path','$phoneNumber','$target_path','$password');";

try {

  if (mysqli_query($conn, $sql)) {

    move_uploaded_file($_FILES['AdminImage']['tmp_name'], $image_path);
    move_uploaded_file($_FILES['AdminProof']['tmp_name'], $target_path);
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
        * {
          box-sizing: border-box;
          margin: 0;
          border: 0;
        }

        h4 {
          text-align: center;
          text-transform: uppercase;
          font-size: 26px;
          padding-bottom: 20px;
        }

        p {
          text-align: center;
        }

        .btn {
          text-align: center;
          padding: 20px;
        }

        .container {
          /* background-color: green; */
          width: 100%;
          margin: auto;
          padding: 100px 0px 200px;
        }

        .verify {
          margin: auto;
          background-color: rgb(123, 234, 138);
          width: 50%;
          color: green;
          padding: 30px;
          border-radius: 7px;
        }

        .icon {
          text-align: center;
          color: green;
          padding-bottom: 20px;
          width: 100%;
        }

        .button {
          text-decoration: none;
          border: 2px solid lightgray;
          padding: 6px 12px;
          border-radius: 7px;
        }

        .button:hover {
          background-color: antiquewhite;
        }

        @media (max-width:768px) {
          .verify {
            width: 80%;
            color: green;
            padding: 30px;
            border-radius: 7px;
          }
        }

        @media (max-width:425px) {
          .verify {
            width: 98%;
          }
        }
      </style>
    </head>

    <body>
      <div class="container">

        <div class="icon">
          <i class="fa-solid fa-7x fa-circle-check"></i>
        </div>

        <h4>Admin Account Added Successfully.</h4>

        <div class="verify">
          <p>Thank you
            <?php echo "'" . $name . "'"; ?> .You can check your Dashboard.
          </p>
        </div>

        <div class="btn">
          <a href="../../index.html" class="button">Close</a>
        </div>
      </div>
      <script src="https://kit.fontawesome.com/6c4e89634a.js" crossorigin="anonymous"></script>
    </body>

    </html>

    <?php
  }
} catch (\Throwable $th) {
  echo "<h1>Don't Give Dupplicate Data ? You have entered Duplicate email or Employee Id Which is already exist.</h1> ";
  echo "<h1>Check your pdf name format.It doesn't contain any ' 's ' .</h1> ";
}



?>