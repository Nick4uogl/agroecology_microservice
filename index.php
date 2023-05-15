<?php
include './config/Database.php';
include './repositories/FieldsRepository.php';
$database = Database::getInstance();
$db = $database->getConnection();
$data;

if (isset($_GET['field'])) {
    $fieldsRepository = new FieldsRepository($db);
    $data = $fieldsRepository->read_by_name($_GET['field']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrocology</title>
</head>

<body>
    <form action="#" method="GET">
        <input placeholder="enter field" type="text" name="field">
    </form>
    <p>name: <?php echo $data['name'] ?></p>
    <p>aria: <?php echo $data['aria'] ?></p>
    <p>bal: <?php echo $data['bal'] ?></p>
    <p>pH: <?php echo $data['pH'] ?></p>
    <p>gumus: <?php echo $data['gumus'] ?></p>
    <p>azot: <?php echo $data['azot'] ?></p>
    <p>phosfor: <?php echo $data['phosfor'] ?></p>
    <p>kaliy: <?php echo $data['kaliy'] ?></p>
</body>

</html>