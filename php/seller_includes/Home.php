<!-- Homw Page Part -->
<div id="home" class="seller-dashboard" style="display:block;">
    <h2>Seller Details</h2>
    <hr>

    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>Seller Store ID : </th>
                <td>
                    <?php echo $row['seller_store_id']; ?>
                </td>
            </tr>
            <tr>
                <th>Seller Name : </th>
                <td>
                    <?php echo $row['seller_name']; ?>
                </td>
            </tr>
            <tr>
                <th>Seller Image : </th>
                <td>
                    <img src="SignUpForm/<?php echo $row['seller_image'] ?>" alt="img" width="200px" height="150px">
                </td>
            </tr>
            <tr>
                <th>Seller Email : </th>
                <td>
                    <?php echo $row['seller_email']; ?>
                </td>
            </tr>
            <tr>
                <th>Seller's Document Proof : </th>
                <td>
                    <iframe src="SignUpForm/<?php echo $row['seller_proof'] ?>" width="100%" height="500px"
                        frameborder="0"></iframe>
                </td>
            </tr>
            <tr>
                <th>Seller Phone Number : </th>
                <td>
                    <?php echo $row['seller_phone_number']; ?>
                </td>
            </tr>
            <tr>
                <th>Seller Password : </th>
                <td>
                    <?php echo $row['seller_password']; ?>
                </td>
            </tr>

        </tbody>
    </table>
</div>