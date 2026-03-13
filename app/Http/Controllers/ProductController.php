<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Seed if empty for demo
        if (Product::count() == 0) {
            Product::create([
                'name' => 'Classic Choco Giant',
                'description' => 'Soft chewy cookies with premium Belgian chocolate chunks.',
                'price' => 25000,
                'image_url' => '/images/cookies1.png',
                'category' => 'Classic'
            ]);
            Product::create([
                'name' => 'Zen Matcha White',
                'description' => 'Pure ceremonial grade matcha with sweet white chocolate.',
                'price' => 28000,
                'image_url' => '/images/cookies2.png',
                'category' => 'Premium'
            ]);
            Product::create([
                'name' => 'Velvet Crimson Heart',
                'description' => 'Deep red velvet base with a surprise cream cheese center.',
                'price' => 30000,
                'image_url' => '/images/cookies3.png',
                'category' => 'Signature'
            ]);
        }

        $products = Product::all();
        return view('welcome', compact('products'));
    }
}
