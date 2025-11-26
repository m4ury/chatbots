<?php

namespace App\Actions;

use Illuminate\Support\Facades\Storage;
use Spatie\PdfToText\Pdf;

class ExtractTextFromPdfAction
{
    public function execute(string $pdfPath)
    {
        $fullPath = Storage::path($pdfPath);

        $text = Pdf::getText($fullPath);

        return mb_convert_encoding($text, 'UTF-8', 'UTF-8');
    }
}
