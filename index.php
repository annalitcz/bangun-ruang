<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Bangun Ruang | 2113030041</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-400">
    <div class="flex justify-center items-center h-screen">
        <form action="/routes.php" method="post" class="w-1/3 h-auto bg-white p-10 rounded-lg shadow-md">
            <label class="block text-gray-700 text-center font-bold mb-2" for="me">Pilih Bangun Ruang</label>
            <div class="relative mt-8">
                <select class="block appearance-none text-center w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="pilih" id="pilih">
                    <option value="kubus">kubus</option>
                    <option value="balok">balok</option>
                    <option value="bola">bola</option>
                    <option value="tabung">tabung</option>
                    <option value="kerucut">kerucut</option>
                    <option value="limas">limas</option>
                    <option value="prisma">prisma</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M18.94 10a8 8 0 11-15.88 0 8 8 0 0115.88 0zm-1.64 0a6.36 6.36 0 10-12.72 0 6.36 6.36 0 0012.72 0z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-10">Pilih</button>
            </div>
        </form>
    </div>
</body>

</html>
