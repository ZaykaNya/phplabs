<?php
    if (isset($_POST['mail'])) { $mail = $_POST['mail']; }
    if (empty($mail)){
        exit ("Ви ввели не всю інформацію. Заповніть всі поля");
    }
    $mail = strip_tags($mail);
    $mail = trim($mail);
    include ("bd.php");
    $result = $db->query("SELECT id FROM users WHERE mail='$mail'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Вибачте, введена вами пошта вже зареєстрована. Введіть іншу пошту.");
    }
    $result2 = $db->query ("INSERT INTO users (mail) VALUES('$mail')");
    if ($result2=='TRUE')
    {
    echo "Ви успішно підписалися. <a href='../'>Головна сторінка</a>";
    }
    else {
    echo "Помилка! Ви не підписані.";
    }
    ?>