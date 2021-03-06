<?php include '../elements/meta.php' ?>

<body>
    <header class="text-center m-3">
        <h1>Aero-Loc</h1>
    </header>

    <?php include '../elements/navBar.php' ?>

    <h1 class="text-center mt-4">Les formations</h1>

    <div class="text-center mt-5">
        <p class="fs-4">Préparez vous pour la formation théorique</p>

        <p>La formation théorique est accessible sous reserve de validation médicale.</p>
        <p>Vous devez présenter l'examen pratique de vol dans les 24 mois suivants l'optention de l'examen théorique</p>
    </div>



    <p class="text-center mt-5 fs-5">Conditions d'admission pour la formation</p>

    <div class="row m-0 p-0 justify-content-center">
        <div class="col-lg-2">
            <p class="text-center">Etre Français</p>
        </div>
        <div class="col-lg-2">
            <p class="text-center">Etre majeur</p>
        </div>
    </div>

    <p class="text-center mt-5 fs-4">Programme de la formation théorique</p>

    <div class="row m-0 p-0 justify-content-center">
        <div class="col-lg-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="tableauSize">Module</th>
                        <th scope="col" class="tableauSize">Sujet</th>
                        <th scope="col" class="tableauSize">Temps</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <td scope="col">01</td>
                        <td scope="col">Réglementation</td>
                        <td scope="col">2h30</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Performances humaines</td>
                        <td>1h30</td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Communication</td>
                        <td>2h00</td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>Météorologie</td>
                        <td>2h00</td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="tableauSize">Module</th>
                        <th scope="col" class="tableauSize">Sujet ciblé</th>
                        <th scope="col" class="tableauSize">Temps</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <td>01</td>
                        <td>Connaissances générales de l'aéronef</td>
                        <td>2h30</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Procédures opérationnelles</td>
                        <td>1h30</td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Performances et préparation du vol</td>
                        <td>2h00</td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>Navigation</td>
                        <td>2h00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="text-center">
        <p>Début des leçons de pilotage pratique a l'issu de l'obention du PPL théorique .</p>
    </div>

    <div class="row m-0 p-0 justify-content-center">

        <div class="col-lg-3 col-11 text-center">
            7 heures en simulateur de vol
        </div>

        <div class="col-lg-3 col-11 text-center">
            28 heures en vol avec instructeur
        </div>

    </div>


    <p class="text-center fs-4">Formulaire</p>


    <div class="row m-0 p-0 justify-content-center ">
        <div class="col-lg-3 border border-dark m-2">
            <div class="input-group flex-nowrap  FormularSize">
                <span class="input-group-text border border-dark spanSize" id="addon-wrapping">Nom</span>
                <input type="text" class="form-control border border-dark" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap  FormularSize mt-4">
                <span class="input-group-text border border-dark spanSize" id="addon-wrapping">Prénom</span>
                <input type="text" class="form-control border border-dark" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap  FormularSize mt-4">
                <span class="input-group-text border border-dark spanSize" id="addon-wrapping">Email</span>
                <input type="text" class="form-control border border-dark" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap  FormularSize mt-4">
                <span class="input-group-text border border-dark spanSize" id="addon-wrapping">Mobile</span>
                <input type="text" class="form-control border border-dark" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
        </div>
        <div class="form-floating col-lg-3 border border-dark m-2">
            <textarea class=" form-control" style="width: 23rem; height:13.5rem" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea  ">Comments</label>
        </div>

        <div class=" row d-flex justify-content-center border border-dark mt-3">
            <button type="button" class="btn col-lg-3 btn-primary buttonSize">Envoyer</button>
        </div>


    </div>









    <?php include '../elements/footer.php' ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>