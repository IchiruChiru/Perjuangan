<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourController extends Controller
{
    public function updateContent(Request $request)
    {
        // Lakukan logika bisnis Anda di sini dan kembalikan respons
        $selectedOption = $request->input('option');
        $newContent = "Konten yang diperbarui berdasarkan opsi: $selectedOption";

        return response()->json(['content' => $newContent]);
    }
}
