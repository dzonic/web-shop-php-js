<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">Admin</a>
     <a class="navbar-brand" href="../index.php">Prodavnica</a>
</div>


<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">
  <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
            <?php 

            if(isset($_SESSION['username']) ){
               echo $_SESSION['username'];

            } else {

                echo "unregistered user";
            }



            ?>

            <b class="caret"></b></a>
        <ul class="dropdown-menu">
           
            <li class="divider"></li>
            <li>
                <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>Odjavi se </a>
            </li>
        </ul>
    </li>
</ul>