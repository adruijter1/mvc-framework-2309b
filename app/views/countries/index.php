<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3><?= $data['title']; ?></h3>
            <p><a href="<?= URLROOT; ?>/countries/create">Voeg nieuw land toe</a></p>
        </div>
        <div class="col-3"></div>
    </div>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <table class="table table-hover">
                <thead>
                    <th>Landen</th>
                    <th>Hoofdstad</th>
                    <th>Continent</th>
                    <th>Aantal Inwoners</th>
                </thead>
                <tbody>
                    <!-- We geven de rows weer in de controller zijn gevormd -->
                    <?= $data['dataRows']; ?>
                </tbody>
            </table>
            <!-- Een link maak je door te verwijzen naar de URL van de virtuele host en dan
            de naam van de controller en dan de naam van de method van de view -->
            <a href="<?= URLROOT; ?>/Homepage/index">homepage</a>

        </div>
        <div class="col-3"></div>
    </div>
</div>




<?php require_once APPROOT . '/views/includes/footer.php'; ?>