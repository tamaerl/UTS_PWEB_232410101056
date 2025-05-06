<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    public function pengelolaan()
    {
        $data = [
            [
                'no' => 1,
                'nama_pemesan' => 'Rumi',
                'jenis_komisi' => 'Chibi - $20',
                'status_pembayaran' => 'Paid',
                'tanggal_pemesanan' => '2025-04-17',
            ],
            [
                'no' => 2,
                'nama_pemesan' => 'ReiChan',
                'jenis_komisi' => 'Chibi - $25',
                'status_pembayaran' => 'Waiting payment',
                'tanggal_pemesanan' => '2025-04-18',
            ],
            [
                'no' => 3,
                'nama_pemesan' => 'Arerumie',
                'jenis_komisi' => 'Rendered - $40',
                'status_pembayaran' => 'Paid',
                'tanggal_pemesanan' => '2025-04-20',
            ],
            [
                'no' => 4,
                'nama_pemesan' => 'Lyssannah',
                'jenis_komisi' => 'Rendered - $40',
                'status_pembayaran' => 'Paid',
                'tanggal_pemesanan' => '2025-04-20',
            ],
            [
                'no' => 5,
                'nama_pemesan' => 'Lyssannah',
                'jenis_komisi' => 'Chibi - $20',
                'status_pembayaran' => 'Paid',
                'tanggal_pemesanan' => '2025-04-20',
            ],
            [
                'no' => 6,
                'nama_pemesan' => 'Skylumi',
                'jenis_komisi' => 'Rendered - $40',
                'status_pembayaran' => 'Paid',
                'tanggal_pemesanan' => '2025-04-20',
            ]
        ];

        return view('pengelolaan', compact('data'));
    }

}
