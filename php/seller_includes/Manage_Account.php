<!-- Manage Account Part -->
<div id="manageAccount" class="seller-dashboard" style="display:none;">

    <h2>Manage Your Account</h2>
    <hr>

    <form onSubmit="return check()" class="row g-3"
        action="SignUpForm/Seller_Manage_Account.php?manageEmail=<?php echo $row['seller_email'] ?>" method="post">
        <div class="col-md-6">
            <label for="manageEmail" class="form-label">Email</label>
            <input type="email" name="manageEmail" class="form-control" id="manageEmail"
                value="<?php echo $row['seller_email']; ?>" disabled required>
        </div>
        <div class="col-md-6">
            <label for="manageOldPassword" class="form-label">Old Password</label>
            <input type="password" class="form-control" id="manageOldPassword" name="manageOldPassword" required>
        </div>
        <div class="col-md-6">
            <label for="manageNewPassword" class="form-label">New Password</label>
            <input type="password" class="form-control" id="manageNewPassword" name="manageNewPassword" required>
        </div>
        <div class="col-md-6">
            <label for="manageConfirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="manageConfirmPassword" name="manageConfirmPassword"
                required>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-info text-white">Change</button>
        </div>
    </form>
</div>