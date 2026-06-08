<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Campaign</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-10">

<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">

    <h1 class="text-3xl font-bold mb-5">
        Edit Campaign
    </h1>

    <form action="/campaign/{{ $campaign->id }}" method="POST">

        @csrf
        @method('PUT')

        <input type="text"
               name="title"
               value="{{ $campaign->title }}"
               class="border p-2 w-full mb-3 rounded">

        <textarea name="description"
                  class="border p-2 w-full mb-3 rounded">{{ $campaign->description }}</textarea>

        <input type="number"
               name="target_donation"
               value="{{ $campaign->target_donation }}"
               class="border p-2 w-full mb-3 rounded">

        <input type="number"
               name="collected_donation"
               value="{{ $campaign->collected_donation }}"
               class="border p-2 w-full mb-3 rounded">

        <input type="date"
               name="deadline"
               value="{{ $campaign->deadline }}"
               class="border p-2 w-full mb-5 rounded">

        <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Update
        </button>

    </form>

</div>

</body>
</html>