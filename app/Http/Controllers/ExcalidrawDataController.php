<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExcalidrawData;
class ExcalidrawDataController extends Controller
{
 public function save(Request $request)
    {
        $data = $request->validate([
            'content' => 'required|json',
        ]);

        ExcalidrawData::table('excalidraw_data')->updateOrInsert(
            ['id' => 1],
            ['content' => $data['content'], 'updated_at' => now()]
        );

        return response()->json(['message' => 'Data saved successfully']);
    }

    public function load()
    {
        $data = ExcalidrawData::table('excalidraw_data')->find(1);

        if ($data) {
            return response()->json(json_decode($data->content));
        }

        return response()->json(['message' => 'No data found'], 404);
    }
}
