<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
            $products = [
                [
                    'name' => 'Red Velvet Latte',
                    'image' => 'macchiato.jpg',
                    'description' => 'Delicious red velvet latte with creamy texture. Made from the finest Arabica beans, blended with rich cocoa and smooth velvet syrup, topped with whipped cream and red velvet crumbs. Perfect for indulging your sweet cravings.',
                    'price' => 5.99
                ],
                [
                    'name' => 'Caramel Macchiato',
                    'image' => 'macchiato.jpg',
                    'description' => 'Strong and intense espresso shot. Our classic espresso is brewed to perfection, delivering a bold and robust flavor with a rich crema. Enjoy it on its own or as the base for your favorite espresso-based drinks.',
                    'price' => 6.49
                ],
                [
                    'name' => 'Espresso',
                    'image' => 'macchiato.jpg',
                    'description' => 'Strong and intense espresso shot. Our classic espresso is brewed to perfection, delivering a bold and robust flavor with a rich crema. Enjoy it on its own or as the base for your favorite espresso-based drinks.',
                    'price' => 4.99 
                ],
                [
                    'name' => 'Iced Mocha',
                    'image' => 'macchiato.jpg',
                    'description' => 'Delicious red velvet latte with creamy texture. Made from the finest Arabica beans, blended with rich cocoa and smooth velvet syrup, topped with whipped cream and red velvet crumbs. Perfect for indulging your sweet cravings.',
                    'price' => 5.79 
                ],
                [
                    'name' => 'Hazelnut Frappuccino',
                    'image' => 'macchiato.jpg',
                    'description' => 'Delicious red velvet latte with creamy texture. Made from the finest Arabica beans, blended with rich cocoa and smooth velvet syrup, topped with whipped cream and red velvet crumbs. Perfect for indulging your sweet cravings.',
                    'price' => 6.99 
                ],
                [
                    'name' => 'Vanilla Bean Latte',
                    'image' => 'macchiato.jpg',
                    'description' => 'Velvety vanilla bean latte with a hint of sweetness. Our signature vanilla bean latte is made with freshly brewed espresso, steamed milk, and fragrant vanilla bean syrup, creating a smooth and comforting beverage that’s perfect for any time of day.',
                    'price' => 5.49 
                ],
            ];
            
        return view('produk.index', compact('products'));
    }
}