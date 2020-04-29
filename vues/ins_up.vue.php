<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h2>Bienvenue</h2>
                        <p>Espace d'enregistrement YAMAMOTO</p>
                    </div>
                
                    <div class="col-md-9 register-right">
                    <form action="" method="post">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Nouveau enregistrement</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Marque" name="marque" <?php echo $marque ?>>
                                        </div>
                                        <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Model" name="modele" <?php echo $modele?>>
                                        </div>
                                        <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Prix" name="prix" <?php echo $prix?>>
                                        </div>   
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Couleur" name="couleur" <?php echo $couleur?>>
                                        </div>
                                        <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Cylindre" name="cylindre" <?php echo $cylindre?>>
                                        </div>
                                        <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Numero de serie" name="numero_de_serie" <?php echo $serie ?>>
                                        </div>
                                        <input class="form-control w-25" type="submit" value="<?php echo $titre ?>">
                                    </div>
                                    </form>
                                </div>
                            </div>

            </div>
