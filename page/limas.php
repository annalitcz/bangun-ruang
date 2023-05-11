<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Hitung Limas</title>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col justify-center items-center">
    <form action="" method="post" class="bg-white rounded-lg p-8 shadow-lg w-1/3 d-flex flex-wrap">
        <h1 class="text-3xl text-center font-bold mb-8">Limas</h1>
        <div class="mb-4">
            <label for="panjang" class="block text-gray-700 font-bold mb-2">panjang (cm)</label>
            <input type="text" name="panjang" required="true" class="border border-gray-400 rounded py-2 px-3 w-full">
        </div>
        <div class="mb-4">
            <label for="lebar" class="block text-gray-700 font-bold mb-2">Lebar (cm)</label>
            <input type="text" name="lebar" required="true"class="border border-gray-400 rounded py-2 px-3 w-full">
        </div>
        <div class="mb-4">
            <label for="tinggi" class="block text-gray-700 font-bold mb-2">tinggi (cm)</label>
            <input type="text" name="tinggi" required="true" class="border border-gray-400 rounded py-2 px-3 w-full">
        </div>
        <button type="submit" name="hitung" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Hitung
        </button>
        <?php
        if(isset($_POST['hitung'])){
            $p = floatval($_POST['panjang']);
            $l = $_POST['lebar'];
            $t = $_POST['tinggi'];

            include "../rumus.php";
            $volume = vLimas($p, $l, $t);
            $lp = lpLimas($p, $l, $t);

            echo "<span class='block mt-4'>Luas Permukaan Limas : " . round($lp, 2) . "cm<sup>2</sup></span>";
            echo "<span class='block mt-2'>Volume Limas : " . round($volume, 2) . "cm<sup>3</sup></span>";
        }
        ?>
    </form>
    <button class="bg-blue-600 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mt-8">
        <a href="../index.php">Back</a>
    </button>
</body>

</html>
