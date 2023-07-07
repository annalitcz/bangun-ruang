<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabung</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-400">
    <div class="flex flex-col items-center justify-center h-screen">
        <form class="mt-5 p-10 bg-white shadow-md rounded-md w-1/3" action="" method="post">
            <h1 class="text-3xl font-bold text-center">Tabung</h1>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="jari-jari">Jari-jari (cm)</label>
                <input class="border border-gray-400 p-2 w-2/3" type="text" name="jari-jari" required="true">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="tinggi">Tinggi (cm)</label>
                <input class="border border-gray-400 p-2 w-2/3" type="text" name="tinggi" required="true">
            </div>
            <button class="bg-blue-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="submit" name="hitung">Hitung</button>
            <?php
            if(isset($_POST['hitung'])){
                $r = $_POST['jari-jari'];
                $t = $_POST['tinggi'];

                include "../rumus.php";
                $lp = lpTabung($r, $t);
                $volume = vTabung($r,$t);

                echo "<span class='block mt-5'>Luas Permukaan Prisma: " . round($lp,2) . "cm<sup>2</sup></span>";
                echo "<span class='block mt-2'>Volume Prisma: " . round($volume,2) . "cm<sup>3</sup></span>";
            }
            ?>
        </form>
        <button class="bg-blue-600 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mt-5"><a href="../index.php">Back</a></button>
    </div>
</body>
</html>
