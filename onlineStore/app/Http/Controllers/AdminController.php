<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistics;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;

class AdminController extends Controller{

    // creamos un "adminController" para mostrar los statistics con la variable statistics 
    public function dashboard()
    {
        $userCount = User::count();
        $orderCount = Order::count();
        $productCount = Product::count();

        // Guardar o actualizar las estadísticas en la base de datos
        $statistics = Statistics::latest()->first();

        if (!$statistics) {
            $statistics = new Statistics();
        }

        $statistics->user_count = $userCount;
        $statistics->order_count = $orderCount;
        $statistics->product_count = $productCount;

        // Agrega otras estadísticas según sea necesario
        $statistics->save();

        return view('admin.dashboard', compact('userCount', 'orderCount', 'productCount'));
    }
}
