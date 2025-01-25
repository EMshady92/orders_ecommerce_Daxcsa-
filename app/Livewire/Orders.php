<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;
class Orders extends Component
{

    public $orders, $type = 1, $filter_orders, $status;

    public $show_order;

    public function render()
    {

        $orders = Order::all();

        if ($this->status) {
            $orders->where('status', $this->status);
        }

        $solicitudes = Order::where('status', 2)->count();
        $pagados = Order::where('status', 3)->count();
        $entregados = Order::where('status', 4)->count();
        $cancelados = Order::where('status', 5)->count();
        $camino = Order::where('status', 6)->count();
        $todos = $solicitudes + $pagados + $entregados + $cancelados + $camino;
        $this->orders = $orders;
        return view('livewire.orders', compact('solicitudes', 'pagados', 'camino', 'entregados', 'cancelados', 'todos', 'orders'));
    }

}
