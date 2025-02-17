<?php
include './maison.php';

$villa = new Maison("villa pour la mama",200,50);

echo'<br><p>la surface de '.$villa->getNom().' est égale à'.$villa->surface().'m2 </p>';
