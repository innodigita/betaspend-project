
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/"><img src="{{ asset('../public/assets/images/demos/demo5/betaspend-logo.png') }}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="/"><img src="{{ asset('../public/assets/images/demos/demo5/betaspend-logo.png') }}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="/administration"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-fw fa-wrench"></i> General Settings
                        <!-- <span class="caret"></span> -->
                    </a>
                    <ul class="sub-menu children dropdown-menu">

                        <li><a href="general_settings.php">General Settings</a></li>
                        <li><a  href="insert_product.php">Payment Settings</a></li>
                        <li><a  href="insert_product.php">Store Settings</a></li>
                    </ul>

                </li>

                <li class="menu-item-has-children dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-briefcase"></i> Products
                        <span class="caret"></span>
                    </a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><a href="products.php">All Products</a></li>
                        <li><a href="add_product.php">Add Products</a></li>

                    </ul>

                </li>

                <li>
                    <a href="#"><i class="menu-icon fa fa-fw fa-desktop"></i> Orders </a>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-briefcase"></i> Manage Category
                        <span class="caret"></span>
                    </a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><a href="{{ url('./administration/view_category') }}">View Categories</a></li>
                        
                        <li><a href="{{ url('./administration/add_category') }}"> Add Category</a></li>

                    </ul>

                </li>



                <li>
                    <a href="#"><i class="menu-icon fa fa-gift"></i> Coupons</a>
                </li>

                <li>
                    <a href="#"><i class="menu-icon fa fa-shopping-cart"></i> Orders</a>
                </li>

                <li>
                    <a href="#"><i class="menu-icon fa fa-hands-helping"></i> Affiliates</a>
                </li>

                <li>
                    <a href="#S"><i class="menu-icon fa fa-user-in-store"></i> Customers</a>
                </li>

                <li>
                    <a href="categories.php"><i class="menu-icon fa fa-fw fa-desktop"></i> Vendors</a>
                </li>

                <li>
                    <a href="#"><i class="menu-icon fa fa-fw fa-desktop"></i> Vendor Verification</a>
                </li>

                <li>
                    <a href="#"><i class="menu-icon fa fa-fw fa-desktop"></i> Subscription Plans</a>
                </li>

                <li>
                    <a href="categories.php"><i class="menu-icon fa fa-fw fa-desktop"></i> Product Discussions</a>
                </li>

                <li>
                    <a href="categories.php"><i class="menu-icon fa fa-fw fa-desktop"></i> Blogs</a>
                </li>

                <li>
                    <a href="categories.php"><i class="menu-icon fa fa-fw fa-desktop"></i> Notifications</a>
                </li>

                <li>
                    <a href="categories.php"><i class="menu-icon fa fa-fw fa-desktop"></i> Admin Announcement</a>
                </li>

                <li>
                    <a href="categories.php"><i class="menu-icon fa fa-fw fa-desktop"></i> Homepage Settings</a>
                </li>

                <li>
                    <a href="categories.php"><i class="menu-icon fa fa-fw fa-desktop"></i> Menu settings</a>
                </li>

                <li>
                    <a href="categories.php"><i class="menu-icon fa fa-fw fa-desktop"></i> Emails Settings</a>
                </li>

                <li>
                    <a href="categories.php"><i class="menu-icon fa fa-fw fa-desktop"></i> Payments Settings</a>
                </li>

                <li>
                    <a href="categories.php"><i class="menu-icon fa fa-fw fa-desktop"></i> Social Settings</a>
                </li>

                <li>
                    <a href="categories.php"><i class="menu-icon fa fa-fw fa-desktop"></i> Language Settings</a>
                </li>

                <li>
                    <a href="categories.php"><i class="menu-icon fa fa-fw fa-desktop"></i> SEO Tools</a>
                </li>

                <li>
                    <a href="categories.php"><i class="menu-icon fa fa-fw fa-desktop"></i> Manage Staffs</a>
                </li>
                <li>
                    <a href="#"><i class="menu-icon fa fa-fw fa-wrench"></i>Subscribers</a>
                </li>

                <li>
                    <a href="#"><i class="menu-icon fa fa-fw fa-wrench"></i>Manage Roles</a>
                </li>

                <li>
                    <a href="users.php"><i class="menu-icon fa fa-fw fa-wrench"></i>Shipping</a>
                </li>

                <li>
                    <a href="users.php"><i class="menu-icon fa fa-fw fa-wrench"></i>Track Orders</a>
                </li>

                <li>
                    <a href="users.php"><i class="menu-icon fa fa-fw fa-wrench"></i>Users</a>
                </li>



            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
