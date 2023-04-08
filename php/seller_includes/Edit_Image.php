<!-- Edit Image Part -->
<div id="editImage" class="seller-dashboard" style="display:none;">

    <h2>Edit Your Profile picture</h2>
    <hr>

    <form class="row g-3" action="SignUpForm/Seller_Update_Image.php?id=<?php echo $row['seller_store_id'] ?>"
        method="post" enctype="multipart/form-data">
        <div class="col-md-12">
            <label for="SellerImage" class="form-label">Update Your Profile Picture:</label>
            <input type="file" class="form-control" id="SellerImage" name="SellerImage"
                accept="image/png, image/jpg, image/jpeg" required>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-info text-white">Update</button>
        </div>
    </form>
</div>