<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;
use App\Tiket;
use App\Kategori;


class FrontendController extends Controller
{
    public function event()
    {
        $event = Event::with('kategori', 'user')->latest()->get();
        if (count($event) <= 0) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'Data Event Tidak Ada'
            ];

            return response()->json($response, 404);
        }

        $response = [
            'success' => true,
            'data' => $event,
            'message' => 'Data Event Berhasil Ditampikan'
        ];

        return response()->json($response, 200);
    }

    public function kategori()
    {
        $kategori = Kategori::latest()->get();
        if (count($kategori) <= 0) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'Data kategori Tidak Ada'
            ];

            return response()->json($response, 404);
        }

        $response = [
            'success' => true,
            'data' => $kategori,
            'message' => 'Data kategori Berhasil Ditampikan'
        ];

        return response()->json($response, 200);
    }

    public function tiket()
    {
        $tiket = Tiket::with('event', 'user')->latest()->get();
        if (count($tiket) <= 0) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'Data Tiket Tidak Ada'
            ];

            return response()->json($response, 404);
        }

        $response = [
            'success' => true,
            'data' => $tiket,
            'message' => 'Data Tiket Berhasil Ditampikan'
        ];

        return response()->json($response, 200);
    }
}
