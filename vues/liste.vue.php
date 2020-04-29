<style>
    .table{
       
        margin:40px;
        margin-top:0px;
        margin-left:9%;
    width: 80%;
    border:none;
}
tbody ,thead{
    background-color:red;
    color: black ;
    font-size:20px;
}
.total{
    padding:0px 90px 20px 90px;
}
.decompte{
    padding-right:30%;
}
</style>
<div class="d-flex justify-content-between p-4" class="afficher" class>
<span class="total"><b>TOTAL =<?php echo $nombre?></b></span>
<div class="decompte" class="d-flex">
<b>Decompte :</b>
<a href="index.php?page=liste" class="btn btn-light">TOUS</a>
<a href="index.php?page=liste&marque=Yamaha" class="btn btn-light">Yamaha</a>
<a href="index.php?page=liste&marque=Triwin" class="btn btn-light">Triwin</a>
<a href="index.php?page=liste&marque=Sanili" class="btn btn-light">Sanili</a>
<a href="index.php?page=liste&marque=Kaizer" class="btn btn-light" >Kaizer</a>
</div>
</div>
<table class="table table-bordered table-striped table-responsive" >
    <thead>
       <th>Modele </th>
       <th>Marque </th>
       <th>Couleur</th>
       <th>Cylindre</th>
       <th>Disponible</th>
       <th>Serie</th>
       <th>Prix</th>
       <th>Options</th>
    </thead>
    <tbody>
        <?php
        foreach ($motoliste as $moto) {
        ?>
        <tr>
          <td><?php echo $moto->getmodele(); ?></td>
          <td><?php echo $moto->getmarque(); ?></td>
          <td><?php echo $moto->getcouleur(); ?></td>
          <td><?php echo $moto->getcylindre(); ?></td>
          <td><?php echo $moto->getdisponibilite() ?></td>
          <td><?php echo $moto->getserie(); ?></td>
          <td><?php echo $moto->getPrix() ?></td>
          <td>
           <a href="index.php?page=ins_up&serie=<?php echo $moto->getserie(); ?>" class="btn btn-success" >MOD</a>
           <a href="index.php?page=vente&serie=<?php echo $moto->getserie(); ?>" class="btn btn-info" <?php toUpdate($moto->getdisponibilite()) ?>>VENDRE</a>
           <a href="index.php?page=liste&serie=<?php echo $moto->getserie(); ?>" class="btn btn-danger">SUPP</a>
           
           </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>