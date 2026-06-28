<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentationFile; // 1. PERBAIKAN: Model sekarang sudah di-import

class DocumentationFileController extends Controller
{
    public function index()
    {
        $files = DocumentationFile::latest()->get();
        return view('documentation_files', compact('files'));
    }
        
    public function store(Request $request) // 2. PERBAIKAN: 'Request' diawali huruf kapital
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'attachment' => 'required|mimes:pdf,docx,png,jpg,jpeg|max:5120', // 3. PERBAIKAN: Ditambahkan tanda titik dua (:) pada max
        ]);

        $file = $request->file('attachment'); // 4. PERBAIKAN: Menghapus spasi sebelum tanda panah

        $extension = $file->getClientOriginalExtension(); // 5. PERBAIKAN: Typo kata 'extension' diperbaiki

        $folder = in_array($extension, ['pdf','docx']) ? 'documents' : 'images';
        $path = $file->store($folder, 'public');

        DocumentationFile::create([
            'title' => $request->title,
            'file_path' => $path,
            'file_type' => $extension
        ]);

        return redirect()->back()->with('success', 'File berhasil diunggah'); // 6. PERBAIKAN: Typo 'success' diperbaiki
    }
}