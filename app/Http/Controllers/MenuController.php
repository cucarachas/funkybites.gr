<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Support\Facades\Log;

class MenuController extends Controller
{

    public function __invoke()
    {
        try {
            return view('menu', ['menu' => Category::active()->with('products')->orderBy('order')->get()]);
        } catch (Exception $e) {
            Log::error('Error fetching menu: ' . $e->getMessage());
            return view('menu', ['menu' => []])->with('error', 'Error fetching menu');
        }
    }
}
