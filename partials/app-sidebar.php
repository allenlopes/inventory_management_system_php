<div class="dashboard_sidebar" id="dashboard_sidebar">
    <h3 class="dashboard_logo" id="dashboard_logo">TCTS</h3>
    <div class="dashboard_sidebar_user">
     <!--  <i class="fa fa-2x fa-user"></i>  -->
       <img src="User Image/User.png" alt="User Image." id="userImage" />
        <span> <?= $user['first_name'] . ' ' . $user['last_name'] ?> </span>
    </div>
    <div class="dashboard_sidebar_menus">
        <ul class="dashboard_menu_lists">
            <!--  class="menuActive" -->
            <li>
                <a href="dashboard.php"><i class="fa fa-dashboard"></i>
                    <span class="menuText">Dashboard</span></a>
            </li>

            <li>
                <a href="adduser.php"><i class="fa fa-user-plus"></i>
                    <span class="menuText">Entry Data</span></a>
            </li>

            <li>
                <a href="searchdata.php"><i class="fa fa-search"></i>
                    <span class="menuText">Search Data</span></a>
            </li>
        </ul>
    </div>
</div>