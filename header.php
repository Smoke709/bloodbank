<nav id= "navv" class="navbar navbar-expand-sm navbar-light sticky-top" style="background-color: #e3f2fd;">
	<div class="container">
		<a class="navbar-brand" href="index.php"><img src="image/favicon.jpg" width="30" height="30" class="rounded-circle">Blood Bank</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fas fa-align-left"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <?php if (isset($_SESSION['hid'])) { ?>

		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="bloodinfo.php"  style="color: red; font-weight: bold;">Add blood info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="bloodrequest.php"  style="color: red; font-weight: bold;">Blood Request</a>
            </li>
			<li class="nav-item">
				<a class="nav-link" href="abs.php"  style="color: red; font-weight: bold;">Available blood samples</a>
            </li>
            <li class="nav-item">
                <a href="hprofile.php?id=<?php echo $_SESSION['hid']; ?>" class="nav-link btn font-weight-bold"><img src="image/hospital.png" width="15" height="15" class="rounded-circle"><mark><?php echo $_SESSION['hname']; ?></mark></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger btn-sm font-weight-bold" href="logout.php">Logout</a>
            </li>
        </ul>

        <?php } elseif (isset($_SESSION['rid'])) { ?>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="sentrequest.php"  style="color: red; font-weight: bold;">Sent Blood Request</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="abs.php"  style="color: red; font-weight: bold;;">Available blood samples</a>
            </li>
            <li class="nav-item">
                <a href="rprofile.php?id=<?php echo $_SESSION['rid']; ?>" class="nav-link btn font-weight-bold" href="#"><img src="image/user.png" width="15" height="15" class="rounded-circle"> <mark><?php echo ' '.$_SESSION['rname']; ?></mark></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger btn-sm font-weight-bold" href="logout.php">Logout</a>
            </li>
        </ul>

        <?php }  else { ?>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="abs.php" style="color: red; font-weight: bold;" >
                Available blood samples</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php"  style=" color:red; font-weight: bold;">
                Register</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="login.php"  style=" color:red; font-weight: bold;">
                Login</a>
            </li>
            

        </ul>

        <?php } ?>
       </div>
    </div>
</nav>