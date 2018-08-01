<?php
$userInfo = $accounts->getUserInfo($_SESSION['username']);
?>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <!---profile section -->
    <div>
        <div class="user">

                <img class="user" style="background-image" src="uploads/<?php echo $userInfo['image']?>.jpg">
                <p class="center" style="font-weight: bold;color:#E0E0E2"><?php echo $_SESSION['username'];?></p>

        </div>
    </div>

    <hr>


          <div class="test1">
              <a href="../admin.php" class="button"><i class="fa fa-comments" aria-hidden="true" style="margin-right:10px;"></i>View Hub</a>
          </div>
          <div class="test1">
              <a href="#" class="button"><i class="fa fa-users" aria-hidden="true" style="margin-right:10px;"></i>Following</a>
          </div>
          <div class="test1">
              <a href="#" class="button"><i class="fa fa-fire" aria-hidden="true" style="margin-right:14px;"></i>Popular</a>
          </div>
          <div class="test1">
              <a href="../myaccount.php" class="button"><i class="fa fa-cog" aria-hidden="true" style="margin-right:10px;"></i>My Account</a>
          </div>
          <div class="test1">
              <a href="logout.php" class="button" style="border-bottom: 1px solid #161B20;"><i class="fa fa-sign-out" aria-hidden="true" style="margin-right:10px;"></i>Logout</a>
          </div>

    <div class="bottom">
        <div class="test1">
            <a href="#" class="button2" style="font-size: 18px;text-align: center;padding-right:45px;">About</a>
        </div>
        <div class="test1">
            <a href="#" class="button2" style="font-size: 18px;text-align: center;padding-right:45px;">Contact</a>
        </div>
    </div>

</div>

<div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>