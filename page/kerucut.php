<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Kerucut</title>
</head>
<body class="bg-gray-400 min-h-screen flex flex-col items-center justify-center">
    <div class="w-full max-w-lg">
        <form action="" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h1 class="text-2xl text-center font-bold mb-4">Kerucut</h1>
            <div class="mb-4">
                <label for="jari-jari" class="block text-gray-700 font-bold mb-2">Masukkan Jari-jari (cm)</label>
                <input type="text" name="jari-jari" required="true" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="tinggi" class="block text-gray-700 font-bold mb-2">Masukkan Tinggi (cm)</label>
                <input type="text" name="tinggi" required="true" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" name="hitung" class="bg-blue-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Hitung</button>
            </div>
            <?php
            if(isset($_POST['hitung'])){
                $r = $_POST['jari-jari'];
                $t = $_POST['tinggi'];

                include "../rumus.php";
                $lp = lpKerucut($r, $t);
                $volume = vKerucut($r, $t);
                
                echo "<span class='block mt-4'>Luas Permukaan Kerucut: " . number_format($lp, 2) . "cm<sup>2</sup></span>";
                echo "<span class='block mt-4'>Volume Kerucut: " . number_format($volume, 2) . "cm<sup>3</sup></span>";
            }
            ?>
        </form>
    </div>
    <button class="bg-blue-600 hover:bg-red-600 text-gray-800 font-bold text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline"><a href="../index.php">back</a></button>
</body>
</html>
