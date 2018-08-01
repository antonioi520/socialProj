<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 7/31/2018
 * Time: 1:36 AM
 */

?>
<div class="container" >
    <div class="row main">
        <div class="main-login main-center">
            <form class="form-horizontal" method="post" action="#">
                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Your Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user " aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>" placeholder="Enter your Name"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Your Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="email" id="email" value="<?php echo $email; ?>"  placeholder="Enter your Email"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">Username</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="username" id="username" value="<?php echo $username; ?>"  placeholder="Enter your Username"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon" style="margin-top:0px; height:34px" ><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="password" id="password"   placeholder="Enter your Password"/>
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <input type="submit" value="Submit" class="btn btn-primary btn-lg btn-block login-button">
                </div>
                <div class="login-register">
                    <a href="./login.php">Login</a>
                </div>
            </form>
        </div>
    </div>
</div>
