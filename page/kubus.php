<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Hitung Kubus</title>
</head>
<body class="bg-gray-400">
    <div class="mx-auto flex d-flex flex-col justify-center items-center">
        <form action="" method="post" class="mt-20 bg-white w-1/3 shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">
            <h1 class="text-2xl text-center font-bold mb-8">Kubus</h1>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="sisi">Panjang sisi (cm)</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required="true" name="sisi" type="text">
            </div>
            <button type="submit" name="hitung" class="bg-blue-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Hitung</button>
            <div class="mt-8">
                <?php
                if (isset($_POST['hitung'])) {
                    include "../rumus.php";
                    $s = $_POST['sisi'];
                    $lp = lpKubus($s);
                    $volume = vKubus($s);
                    echo "<span  class='block mt-4'>Luas Permukaan kubus: " . $lp . " cm<sup>2</sup></span><br>";
                    echo "<span  class='block'>Volume kubus: " . $volume . " cm<sup>3</sup></span>";
                }
                ?>
            </div>
        </form>
        <button class="bg-blue-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>
