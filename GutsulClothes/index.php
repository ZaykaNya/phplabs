<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gutsul Clothes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/selector.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,900&display=swap&subset=cyrillic" rel="stylesheet">

</head>
<body>
    <?php
        require_once('./parts/header.php');
        $page = strip_tags("./pages/".($_GET['page'] ?? "landing")).".php";
        require($page);
        require_once('./parts/footer.php');
    ?>
</body>
</html>