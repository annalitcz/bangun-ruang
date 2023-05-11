<?php
    if (isset($_POST['submit'])) {
        $pilih = $_POST['pilih'];

        switch ($pilih){
            case "kubus":
                header("Location:./page/kubus.php");
                break;
            case "balok":
                header("Location: ./page/balok.php");
                break;
            case "bola":
                header("Location: ./page/bola.php");
                break;
            case "tabung":
                header("Location: ./page/tabung.php");
                break;
            case "kerucut":
                header("Location: ./page/kerucut.php");
                break;
            case "limas":
                header("Location: ./page/limas.php");
                break;
            case "prisma":
                header("Location: ./page/prisma.php");
                break;
            default:
                echo "<h1>error</h1>";
        }
    }
?>