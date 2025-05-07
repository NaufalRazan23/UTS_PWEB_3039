<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan()
    {
        // Data contoh untuk ditampilkan di halaman pengelolaan
        $items = [
            [
                'id' => 1,
                'name' => 'Item 1',
                'description' => 'Deskripsi item 1',
                'status' => 'Active'  // Akan ditampilkan sebagai "Baik" di view
            ],
            [
                'id' => 2,
                'name' => 'Item 2',
                'description' => 'Deskripsi item 2',
                'status' => 'Inactive'  // Akan ditampilkan sebagai "Rusak" di view
            ],
            [
                'id' => 3,
                'name' => 'Item 3',
                'description' => 'Deskripsi item 3',
                'status' => 'Active'  // Akan ditampilkan sebagai "Baik" di view
            ],
            [
                'id' => 4,
                'name' => 'Item 4',
                'description' => 'Deskripsi item 4',
                'status' => 'Pending'  // Akan ditampilkan sebagai "Perbaikan" di view
            ],
        ];

        return view('pengelolaan', compact('items'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('profile', compact('username'));
    }
}
