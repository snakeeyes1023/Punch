<?php
include("include/entete.inc");
?>


<div class="container-fluid background">
    <div class="row" style="min-height: 400px">


        <div id="punch" class="col-6 align-items-center text-center mx-auto">
            <div class=" col-12 mx-auto text-center mt-10 font_hour">
                <span id='ct' class="hour"></span>
            </div>
            <div class="searchbar mt-5">
                <input class="search_input" id="search" type="text" name="recherche" placeholder="Nom...">

                <div id="employer">

                </div>

            </div>

            <div class="col-12 text-center align-items-center mx-auto mt-5">
                <h2 class="mx-auto">ou</h2>
            </div>
            <div class="col-12 align-items-center mt-5">
                <img src="img/rfid.jpg" class="rfid mx-auto" alt="Image de RFID (Scan)">
            </div>
        </div>


        <div id="lastpunch" class="">

        </div>
    </div>
</div>
<script>

    function myfunction(id, nom) {
        document.getElementById("user").value = id;
        document.getElementById("nom").innerHTML = nom;
        $('#exampleModalLong').modal('show');
        $("#exampleModalLong").on('shown.bs.modal', function () {
            $(this).find('#exampleInputPassword1').focus();
        });
    }

    document.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
            if ("" !== document.getElementById("search").value)
            {
                document.getElementById('0').click();
            }
        }
    });

</script>


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="function/punch.php">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <h1 id="nom"></h1>
                                <input autofocus required type="password" name="password" class="form-control"
                                       id="exampleInputPassword1" placeholder="Mot de passe ...">
                                <input type="hidden" id="user" name="iduser" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ANNULER</button>
                    <input type="submit" class="btn btn-success" value="PUNCH">
                </div>
            </form>

        </div>
    </div>
</div>


<?php
include_once("include/pied-de-page.inc");
?>
