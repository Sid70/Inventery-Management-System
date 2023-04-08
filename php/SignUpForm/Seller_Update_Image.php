<?php

require_once("../dbconn/config.php");

$seller_id = $_GET['id'];

$row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM seller_details WHERE seller_store_id = '$seller_id';"));

$image_path = "upload_image_seller/";

// Delete previous File
unlink($row['seller_image']);

$image_path = $image_path . basename($_FILES['SellerImage']['name']);


move_uploaded_file($_FILES['SellerImage']['tmp_name'], $image_path);

if (mysqli_query($conn, "UPDATE seller_details SET seller_image = '$image_path' WHERE seller_store_id = '$seller_id';")) {
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

            <h4>Image Update Successfully.</h4>

            <div class="btn">
                <a href="javascript:history.go(-1)" class="button">Go Back to Dashboard</a>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/6c4e89634a.js" crossorigin="anonymous"></script>
    </body>

    </html>

    <?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>