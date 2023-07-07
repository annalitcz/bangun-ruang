<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hitung Prisma</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <div class="container mx-auto p-4 flex flex-column justify-center items-center">
      <form action="" method="post" class="bg-white p-4 w-2/3 mt-5 rounded-md shadow-md">
        <h1 class="text-3xl text-center font-bold mb-4">Prisma</h1>
        <div class="flex w-full gap-20 justify-center items-center">
            <div class="mb-4">
              <label for="alas" class="block font-medium mb-2">Masukkan Jumlah Sisi Tegak (cm)</label>
              <input type="text" name="sisi-tegak" required="true" class="block w-full p-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
              <label for="alas" class="block font-medium mb-2">Keliling Alas (cm)</label>
              <input type="text" name="keliling-alas" required="true" class="block w-full p-2 border border-gray-300 rounded-md">
            </div>
        </div>
        <div class="flex w-full gap-28 justify-center items-center">
            <div class="mb-4">
              <label for="alas" class="block font-medium mb-2 mr-0">Masukkan Luas Alas (cm)</label>
              <input type="text" name="luas-alas" required="true" class="block w-full p-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
              <label for="alas" class="block font-medium mb-2 ml-3">Masukkan Tinggi Prisma (cm)</label>
              <input type="text" name="tinggi-prisma" required="true" class="block w-full ml-3 p-2 border border-gray-300 rounded-md">
            </div>
        </div>
        <div class="d-flex justify-beetwen item w-full">
      <button type="submit" name="hitung" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-green-700">Hitung</button>
      <?php
      if (isset($_POST['hitung'])) {
        $la = $_POST['luas-alas'];
        $st = $_POST['sisi-tegak'];
        $tp = $_POST['tinggi-prisma'];
        $ka = $_POST['keliling-alas'];

        include "../rumus.php";
        $volume = vPrisma($la, $tp);
        $lp = lpPrisma($ka, $st, $la);

        echo "<span class='block mt-4'>Luas Permukaan Prisma: " . round($lp, 2) . "cm<sup>2</sup></span>";
        echo "<span class='block'>Volume Prisma: " . round($volume, 2) . "cm<sup>3</sup></span>";
      }
      ?>
        </div>
    </form>
    <button class="bg-blue-600 hover:bg-red-600 text-white px-4 py-2 rounded-md ml-4"><a href="../index.php">back</a></button>
  </div>
</body>

</html>
