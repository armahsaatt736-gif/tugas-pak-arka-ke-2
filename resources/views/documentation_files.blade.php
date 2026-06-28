@extends('app')

@section('title', 'Documentation Files')

@section('content')

{{-- Pesan berhasil --}}
@if(session('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
    {{ session('success') }}
</div>
@endif

{{-- Pesan error --}}
@if($errors->any())
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
    <ul>
        @foreach($errors->all() as $error)
            <li>• {{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/Documentations" method="POST" enctype="multipart/form-data" class="space-y-4">

    @csrf

    <div>
        <label class="block text-sm font-medium text-gray-700">
            Nama Dokumen / Gambar
        </label>

        <input
            type="text"
            name="title"
            class="mt-1 block w-full border rounded p-2"
            required>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">
            Pilih File (PDF, DOCX, PNG, JPG - Maksimal 5 MB)
        </label>

        <input
            type="file"
            name="attachment"
            class="mt-1 block w-full"
            required>
    </div>

    <button
        type="submit"
        class="bg-blue-600 text-white px-4 py-2 rounded">

        Unggah File

    </button>

</form>

<hr class="my-8">

<h2 class="text-xl font-bold mb-4">
    Daftar File dan Gambar
</h2>

@if($files->count())

<table class="table-auto w-full border border-collapse">

    <thead>

        <tr class="bg-gray-200">

            <th class="border p-2">No</th>
            <th class="border p-2">Nama Dokumen</th>
            <th class="border p-2">Jenis File</th>
            <th class="border p-2">Preview</th>
            <th class="border p-2">Tanggal Upload</th>

        </tr>

    </thead>

    <tbody>

        @foreach($files as $file)

        <tr>

            <td class="border p-2 text-center">
                {{ $loop->iteration }}
            </td>

            <td class="border p-2">
                {{ $file->title }}
            </td>

            <td class="border p-2 text-center">
                {{ strtoupper($file->file_type) }}
            </td>

            <td class="border p-2 text-center">

                {{-- Preview Gambar --}}
                @if(in_array($file->file_type,['jpg','jpeg','png']))

                    <img
                        src="{{ asset('storage/'.$file->file_path) }}"
                        width="150"
                        class="mx-auto rounded">

                {{-- Preview PDF --}}
                @elseif($file->file_type == 'pdf')

                    <iframe
                        src="{{ asset('storage/'.$file->file_path) }}"
                        width="220"
                        height="250">
                    </iframe>

                {{-- DOCX --}}
                @elseif($file->file_type == 'docx')

                    <a
                        href="{{ asset('storage/'.$file->file_path) }}"
                        target="_blank"
                        class="text-blue-600 underline">

                        Download DOCX

                    </a>

                @endif

            </td>

            <td class="border p-2 text-center">
                {{ $file->created_at->format('d-m-Y') }}
            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@else

<div class="mt-4 text-gray-600">
    Belum ada file yang diunggah.
</div>

@endif

@endsection