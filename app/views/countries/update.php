<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-3"></div>
    </div>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form method="post" action="<?= URLROOT; ?>/countries/update/<?= $data['info']->Id; ?>">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>Land:</th>
                            <td><input type="text" name="country" value="<?= $data['info']->Name; ?>" /></td>
                        </tr>
                        <tr>
                            <th>Hoofdstad:</th>
                            <td><input type="text" name="capitalCity" value="<?= $data['info']->CapitalCity; ?>" /></td>
                        </tr>
                        <tr>
                            <th>Continent:</th>
                            <td><input type="text" name="continent" value="<?= $data['info']->Continent; ?>" /></td>
                        </tr>
                        <tr>
                            <th>Aantal Inwoners:</th>
                            <td><input type="number" name="population" value="<?= $data['info']->Population; ?>" /></td>
                        </tr>
                        <tr>
                            <td><input name="Id" type="hidden" value="<?= $data['info']->Id; ?>" ?></td>
                        </tr> 
                        <tr>
                            <td colspan="2"><input class="btn btn-primary btn-lg" type="submit" name="submit" value="Wijzig" /></td>
                        </tr>                    
                    </tbody>
                </table>
            </form>
            <!-- Een link maak je door te verwijzen naar de URL van de virtuele host en dan
            de naam van de controller en dan de naam van de method van de view -->
            <a href="<?= URLROOT; ?>/Homepage/index">homepage</a>

        </div>
        <div class="col-3"></div>
    </div>
</div>


<?php require_once APPROOT . '/views/includes/footer.php'; ?>