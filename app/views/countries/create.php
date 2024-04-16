<?php require_once 'C:/projects2023/MVC-Framework-2309B/app/views/includes/header.php'; ?>
    


<div class="container">

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
            <form action="<?= URLROOT; ?>/countries/create" method="post">
                <div class="mb-3">
                <label for="inputCountry" class="form-label">Land:</label>
                <input type="text" name="country" class="form-control" id="inputCountry" placeholder="Vul hier het land in">
                </div>
                <div class="mb-3">
                <label for="inputCapitalCity" class="form-label">Hoofdstad:</label>
                <input type="text" name="capitalCity" class="form-control" id="inputCapitalCity" placeholder="Vul hier de hoofdstad in">
                </div>
                <div class="mb-3">
                <label for="inputContinent" class="form-label">Continent:</label>
                <input type="text" name="continent" class="form-control" id="inputContinent" placeholder="Vul hier het continent in">
                </div>
                <div class="mb-3">
                <label for="inputPopulation" class="form-label">Aantal inwoners:</label>
                <input type="text" name="population" class="form-control" id="inputPopulation" placeholder="Vul hier het aantal inwoners in">
                </div>

                <button type="submit" class="btn btn-primary">Verzend</button>
            </form>
        </div>
        <div class="col-3"></div>
    </div>

</div>


    
    
    
    
    
    
<?php require_once 'C:/projects2023/MVC-Framework-2309B/app/views/includes/footer.php'; ?>