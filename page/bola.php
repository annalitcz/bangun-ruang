<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bola</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-400">

    <div class="container mx-auto mt-20 my-8 p-4 rounded-md shadow-md bg-white w-1/3 h-2/3">
        <h1 class="text-3xl font-bold mb-4 text-center">Bola</h1>

        <form action="" method="post" class="mb-4">
            <div class="flex flex-col mb-4">
                <label for="jari-jari" class="mb-1 font-medium text-gray-800">Masukkan Jari-jari (cm)</label>
                <input type="text" name="jari-jari" required="true" class="border border-gray-400 rounded-md py-2 px-3 focus:outline-none focus:border-blue-400">
            </div>

            <button type="submit" name="hitung" class="bg-blue-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50 transition duration-300 ease-in-out w-20 mb-4">
                Hitung
            </button>

            <?php
            if(isset($_POST['hitung'])){
                $r = $_POST['jari-jari'];

                include "../rumus.php";
                $volume = vBola($r);
                $lp = lpBola($r);

                echo "<span class='block mt-4 text-center'>Luas Permukaan Bola: " . round($lp,2) . "cm<sup>2</sup></span>";
                echo "<span class='block text-center'>Volume Bola: " . round($volume,2) . "cm<sup>3</sup></span>";
            }
            ?>

        </form>

    </div>
    <div class="text-center">
        <a href="../index.php" class="bg-blue-600 hover:bg-red-600 text-white font-medium py-2 px-4 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 transition duration-300 ease-in-out">
            back
        </a>
    </div>

</body>
</html>
