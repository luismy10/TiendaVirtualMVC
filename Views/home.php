<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["title-page"]; ?></title>
</head>

<body>

    <?php
    dep($data)
    ?>

    <h3>Page home</h3>
    <?php echo base_url(); ?>
    <br />
    <?php echo passGenerator(); ?>
    <br />
    <?php echo token(); ?>
    <br />
    <?php echo SMONEY . formatMoney(35498); ?>
</body>

</html>