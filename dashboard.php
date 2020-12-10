<?php
include("include/entete.inc");
include("admin/heure.php");

?>
    <div class="container-fluid">
        <div class="row align-items-center">

            <?php
            totaljourner("2020-11-15");
            totaljourner("2020-11-16");

            ?>
        </div>


    </div>

<?php


include("include/pied-de-page.inc");
