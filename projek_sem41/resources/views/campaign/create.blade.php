<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Campaign</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 p-10">

<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">

    <h1 class="text-2xl font-bold mb-5">
        Tambah Campaign
    </h1>

    <form action="/campaign" method="POST">

        @csrf

        <input type="text"
               name="title"
               placeholder="Judul Campaign"
               class="border p-2 w-full mb-3 rounded">

        <textarea name="description"
                  placeholder="Deskripsi"
                  class="border p-2 w-full mb-3 rounded"></textarea>

        <input type="number"
               name="target_donation"
               placeholder="Target Donasi"
               class="border p-2 w-full mb-3 rounded">

        <input type="number"
               name="collected_donation"
               placeholder="Donasi Terkumpul"
               class="border p-2 w-full mb-3 rounded">

        <input type="date"
               name="deadline"
               class="border p-2 w-full mb-3 rounded">

        <button type="submit"
                class="bg-green-500 text-white px-4 py-2 rounded">
            Simpan
        </button>

    </form>

</div>

</body>
</html>