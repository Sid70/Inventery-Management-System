<div class="sidebar">
    <!-- Display Seller Details and Image with his proof -->
    <a class="active" href="#home" onclick="openMenu('home')"><i class="fa-solid fa-house"></i>&nbsp;&nbsp;Home</a>
    <a href="#salesreport" onclick="openMenu('salesreport')"><i class="fa-solid fa-cart-shopping"></i>&nbsp;&nbsp;Sales
        Report</a>
    <a href="#overview" onclick="openMenu('overview')"><i class="fa-solid fa-bars"></i>&nbsp;&nbsp;Overview</a>
    <a href="#order" onclick="openMenu('order')"><i class="fa-solid fa-cart-shopping"></i>&nbsp;&nbsp;Order</a>
</div>

<div class="content">

    <?php

    // Home Page Part
    require_once("Home.php");
    // Manage Account Part
    require_once("Manage_Account.php");
    // Edit Image Part
    require_once("Edit_Image.php");
    // // Pagination Part
    // require_once("Pagination.php");
    ?>
    <div id="salesreport" class="seller-dashboard" style="display:none;">
        <h1>Sales Report</h1>
        <hr>

        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>


    </div>

    <div id="overview" class="seller-dashboard" style="display:none;">
        <h1>Overview</h1>
        <hr>
        <!-- Contain Sales Report and Line Graph of sales report-->

    </div>

    <div id="order" class="seller-dashboard" style="display:none;">
        <h1>Order</h1>
        <hr>
    </div>

    <!-- pagination part -->

    <nav aria-label="Page navigation example" class="d-flex justify-content-end">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#home" onclick="openMenu('home')">1</a></li>
            <li class="page-item"><a class="page-link" href="#salesreport" onclick="openMenu('salesreport')">2</a></li>
            <li class="page-item"><a class="page-link" href="#overview" onclick="openMenu('overview')">3</a></li>
            <li class="page-item"><a class="page-link" href="#order" onclick="openMenu('order')">4</a></li>
        </ul>
    </nav>
</div>

<script>
    function openMenu(menuName) {
        var i, x;
        x = document.getElementsByClassName("seller-dashboard");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(menuName).style.display = "block";
    }

    function check() {
        let x = document.getElementById('manageNewPassword').value;
        let y = document.getElementById('manageConfirmPassword').value;

        let z = document.getElementById('manageOldPassword').value;

        let p = '<?php echo $row['seller_password'] ?>';

        if (p != z) {
            alert("Your Old Password is Incorrect.");
            return false;
        }

        if (x === y) {
            return true;
        }
        else {
            alert("Your Confirm password don't match.");
            return false;
        }
    }
</script>