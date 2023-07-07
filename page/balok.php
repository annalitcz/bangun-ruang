<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balok</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-400">
    <div class="flex flex-col items-center justify-center min-h-screen">
        <form action="" method="post" class="w-1/3 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h1 class="text-2xl text-center font-bold mb-4">Balok</h1>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="panjang">Masukkan Panjang (cm)</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="panjang" required="true">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="lebar">Masukkan Lebar (cm)</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="lebar" required="true">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="tinggi">Masukkan Tinggi (cm)</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="tinggi" required="true">
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="hitung">Hitung</button>
            </div>
            <?php
            if (isset($_POST['hitung'])) {
                $p = $_POST['panjang'];
                $l = $_POST['lebar'];
                $t = $_POST['tinggi'];

                include "../rumus.php";
                $lp = lpBalok($p, $l, $t);
                $volume = vBalok($p, $l, $t);

                echo "<span class='block mt-4 text-center'>Luas Permukaan Balok: " . $lp . "cm<sup>2</sup></span>";
                echo "<span class='block text-center'>Volume Balok: " . $volume . "cm<sup>3</sup></span>";
            }
            ?>
        </form>
        <button class="bg-blue-600 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"><a href="../index.php">back</a></button>
    </div>
</body>

</html>
