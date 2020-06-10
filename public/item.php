<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>
    <!-- Page Content -->
<div class="container">

       <!-- Side Navigation -->

              <?php include(TEMPLATE_FRONT . DS . "side_nav.php") ?>

<?php 


$query = query(" SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . " ");
confirm($query);

while($row = fetch_array($query)):


 ?>


<div class="col-md-9">

<!--Row For Image and Short Description-->

<div class="row">

    <div class="col-md-7">


       <img class="img-responsive" src="../resources/<?php  echo display_image($row['product_image']); ?>" alt="">


    </div>

    <div class="col-md-5">

        <div class="thumbnail">
         

    <div class="caption-full">
        <h4><a href="#"><?php echo $row['product_title']; ?></a> </h4>
        <hr>
        <h4 class=""><?php echo "RSD" . $row['product_price']; ?></h4>

    <div class="ratings">
     
        <p>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star-empty"></span>
            4.0 stars
        </p>
    </div>
          
        <p><?php echo $row['short_desc']; ?></p>

   
    <form action="">
        <div class="form-group">
           <a href="../resources/cart.php?add=<?php echo $row['product_id']; ?>" class="btn btn-primary">Dodaj</a>
        </div>
    </form>

    </div>
 
</div>

</div>


</div><!--Row For Image and Short Description-->


        <hr>


<!--Row for Tab Panel-->

<div class="row">

<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Ocene</a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">

<p></p>

<p><?php echo $row['product_description']; ?></p>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">

  <div class="col-md-6">

       <h3>2 Reviews From </h3>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">Pre 10 dana</span>
                <p>Ovaj proizvod je jako kvalitetan. Definitivno ću dokupiti još!</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">Pre 12 dana</span>
                <p>Super je! Naručio sam još!</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">Pre 15 dana</span>
                <p>Video sam nešto bolje od ovoga ali ne svakako po ovoj ceni,sve preporuke.</p>
            </div>
        </div>

    </div>


    <div class="col-md-6">
        <h3>Dodaj recenziju</h3>

     <form action="" class="form-inline">
        <div class="form-group">
            <label for="">Ime</label>
                <input type="text" class="form-control" >
            </div>
             <div class="form-group">
            <label for="">Email</label>
                <input type="test" class="form-control">
            </div>

        <div>
            <h3>Vaša ocena</h3>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
        </div>

            <br>
            
             <div class="form-group">
             <textarea name="" id="" cols="60" rows="10" class="form-control"></textarea>
            </div>

             <br>
              <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="POTVRDI">
            </div>
        </form>

    </div>

 </div>

 </div>

</div>


</div><!--Row for Tab Panel-->




</div><!-- col-md-9 ends here -->


<?php endwhile; ?>

</div>
    <!-- /.container -->

<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>