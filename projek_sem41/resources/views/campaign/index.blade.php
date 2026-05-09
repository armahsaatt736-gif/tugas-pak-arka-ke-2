<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Campaign</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 p-10">

<div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">

    <div class="flex justify-between items-center mb-5">

        <h1 class="text-3xl font-bold">
            Data Campaign
        </h1>

        <a href="/campaign/create"
           class="bg-blue-500 text-white px-4 py-2 rounded">
            Tambah Campaign
        </a>

    </div>

    @foreach($campaigns as $campaign)

        <!-- <a href="/campaign/{{ $campaign->id }}/edit" -->
   <!-- class="bg-yellow-500 text-white px-3 py-1 rounded">
    Edit -->
        </a>

        <div class="border p-4 rounded mb-4">

            <h2 class="text-xl font-bold">
                {{ $campaign->title }}
            </h2>

            <p class="text-gray-700">
                {{ $campaign->description }}
            </p>

            <p class="mt-2">
                Target:
                Rp {{ number_format($campaign->target_donation) }}
            </p>

            <p>
                Terkumpul:
                Rp {{ number_format($campaign->collected_donation) }}
            </p>

            <p>
                Deadline:
                {{ $campaign->deadline }}
            </p>

            <div class="mt-3 flex gap-2">

                <a href="/campaign/{{ $campaign->id }}/edit"
                   class="bg-yellow-500 text-white px-3 py-1 rounded">
                    Edit
                </a>

                <form action="/campaign/{{ $campaign->id }}"
                      method="POST">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="bg-red-500 text-white px-3 py-1 rounded">
                        Hapus
                    </button>

                </form>

            </div>

        </div>

    @endforeach

</div>

</body>
</html>