<?php require APPROOT . '/views/includes/header.php'; ?>


<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <?php
                echo $data['title'];
            ?>
            <a href='<?= URLROOT; ?>/Instructeur/Index'>Instructeur pagina</a> |
            <a href='<?= URLROOT; ?>/Cars/Index'>De auto pagina</a> | 
            <a href='<?= URLROOT; ?>/Countries/index'>Landen</a>
            
        </div>
        <div class="col-3"></div>
    </div>
</div>
   
    
<?php require APPROOT . '/views/includes/footer.php';
    

