<?php require_once APPROOT . '/views/includes/header.php'; ?>

<h3><?= $data['title']; ?></h3>

<!-- Een link maak je door te verwijzen naar de URL van de virtuele host en dan
     de naam van de controller en dan de naam van de method van de view -->
<a href="<?= URLROOT; ?>/Homepage/index">homepage</a>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>