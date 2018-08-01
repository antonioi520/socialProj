<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>test</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
  <!-- Side NavBar -->
  <?php include 'views/nav.html.php'; ?>
  <!-- End of SideNav Bar -->

  <!-- Search Bar -->
  <div class="search-container" style="float:right">
      <form action="/action_page.php">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
      </form>
  </div>

  <!-- Hub -->
  <div class="hubMain">
    <div id="logos">
        <div class="row" style="margin-left:1%">
            <div class="column" style="margin-top:1%">
                <a href="#"><img src="img/twitter.jpg" alt="twitter" style="height:40px;width:40px;margin-right:8px;border:1px solid limegreen"></a>
            </div>
            <div class="column" style="margin-top:1%">
                <a href="#"><img src="img/facebook.png" alt="facebook" style="height:40px;width:40px;margin-right:8px;"></a>
            </div>
            <div class="column" style="margin-top:1%">
                <a href="#"><img src="img/instagram.png" alt="instagram" style="height:40px;width:40px;margin-right:8px;"></a>
            </div>
            <div class="column" style="margin-top:1%">
                <a href="#"><img src="img/youtube.png" alt="youtube" style="height:40px;width:40px;margin-right:8px;"></a>
            </div>
            <div class="column" style="margin-top:1.1%">

                <a href=""style="color:#242D34;"><i class="fa fa-plus-square-o fa-2x" style="margin-top:3px;""></i></a>

            </div>
        </div>
    </div>
  </div>

  <script>
      function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
          document.getElementById("main").style.marginLeft = "250px";
      }

      function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
          document.getElementById("main").style.marginLeft= "0";
      }
  </script>






  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  </body>
</html>