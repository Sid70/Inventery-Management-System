<nav class="navbar navbar-expand-sm bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#home" onclick="openMenu('home')">IPhone Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="d-flex nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dashboard
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#manageAccount" onclick="openMenu('manageAccount')">Manage
                                Account</a></li>
                        <li><a class="dropdown-item" href="#editImage" onclick="openMenu('editImage')">Edit Profile Picture</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../index.html">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>