 <div class="col-lg-12">
                        <h1 class="page-header">
                            Korisnici
                        </h1>
                          <p class="bg-success">
                        </p>
                        <a href="index.php?add_user" class="btn btn-primary">Dodaj korisnika</a>
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Korisničko ime</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php display_users(); ?>
                                </tbody>
                            </table> <!--End of Table-->
                        </div>                    
                    </div>
    
