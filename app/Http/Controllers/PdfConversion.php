<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfConversion extends Controller
{
    public function getPdf()
    {
        $item = null;

        if ($item) {
            return response()->json([
                'data' => $item
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
}
