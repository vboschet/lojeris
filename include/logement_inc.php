<article class="property">
                    <a href="#">
                        <img src="images/<?php echo $logement["image"]; ?>" alt="<?php echo $logement["titre"]; ?>">
                        <footer class="overlay">
                            <div class="info">
                                <div class="tag <?php echo ($logement["prix"] < 200000) ? "reduc" : ""; ?> ">
                                    <?php echo $logement["prix"]; ?> €</div>
                                <h3><?php echo $logement["titre"]; ?></h3>
                            </div>
                            <div class="more-info">
                                <div class="property-info">
                                    <i class="fa fa-calendar"></i>
                                    <?php echo $logement["dateCreation"]->format("d/m/Y"); ?>
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-tag"></i>
                                    <?php echo $logement["type"]; ?>
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-expand"></i>
                                    <?php echo $logement["taille"]; ?>
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-bed"></i>
                                    <?php echo $logement["nb_chambre"]; ?>
                                </div>
                            </div>
                        </footer>
                    </a>
                </article>