<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Auto-migrate for demo if using sqlite memory on Vercel
        if (config('database.default') === 'sqlite' && config('database.connections.sqlite.database') === ':memory:') {
            try {
                \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
            } catch (\Exception $e) {
                // Potential issue with Artisan facade if not fully booted, 
                // but by now it should be fine.
            }
        }

        // Seed if empty for demo
        try {
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
    } catch (\Exception $e) {
        // Silently skip seeding if it fails
    }

        try {
            $products = Product::all();
        } catch (\Exception $e) {
            $products = collect();
        }
        return view('welcome', compact('products'));
    }
}
