<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    private const PRODUCTS = [
        ['name' => 'Sepatu', 'price' => 300000],
        ['name' => 'Baju', 'price' => 200000],
        ['name' => 'Celana', 'price' => 150000],
    ];

    public function home(): View
    {
        return view('dashboard.home');
    }

    public function product(): View
    {
        return view('dashboard.product', ['products' => self::PRODUCTS]);
    }

    public function about(): View
    {
        return view('dashboard.about');
    }

    public function detail(string $harga): View
    {
        $product = collect(self::PRODUCTS)->firstWhere('price', (int) $harga);

        abort_if($product === null, 404);

        return view('dashboard.detail', ['product' => $product]);
    }
}
