<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Order;
use App\Models\Order_Product;
use App\Models\Product;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index() {
        //Obtener todas las ordenes para la vista
        $ordersP = Order::where('status', 'Pendiente')->orderBy('id', 'desc')->paginate(25);
        $ordersC = Order::where('status', 'Pagada')->orderBy('id', 'desc')->paginate(25);

        return view('orders.index', compact('ordersP', 'ordersC'));
    }

    public function create() {
        $clients = Client::all();
        return view('orders.create', compact('clients'));
    }

    public function store(Request $request){
        // crear nuevo objeto order/venta
        $order = new Order();
        // llenar todos los campos del formulario
        $order->fill($request->all());

        // verificar si guarda
        if ($order->save()) {
            
            return redirect()->route('orders.index')->with(['message' => 'Orden Registrada']);
        } else {
            return redirect()->back()->with(['message' => 'Error']);
        }
    }

    public function edit($id){
        // buscar order por id
        $order = Order::findOrFail($id);
        //Buscar listado de clientes
        $clients = Client::all();
        //Comprobar que la orden esta 'Pendiente'
        if($order->status == 'Pendiente'){
            return view('orders.edit', compact('order', 'clients'));
        } else {
            return redirect()->back()->with(['message' => 'Error esta Orden ya esta Completada']);
        }

    }

    public function update(Request $request, $id){
        // buscar order por id
        $order = Order::findOrFail($id);

        //Verificar que la orden este 'pendiente'
        if($order->status == 'Pendiente'){
            // llenar todos los campos del formulario
            $order->fill($request->all());
            // verificar si guarda
            if ($order->save()) {
                
                return redirect()->route('orders.index')->with(['message' => 'Registro Actualizado']);

            } else {

                return redirect()->back()->with(['message' => 'Error']);

            }

        } else {

            return redirect()->back()->with(['message' => 'Error esta Orden ya esta Completada']);

        }
    }

    public function destroy($id){
        // buscar order por id
        $order = Order::findOrFail($id);

        //Verificar si elimina
        if ($order->delete()) {

            return redirect()->route('orders.index')->with(['message' => 'Registro eliminado correctamente']);

        } else {

            return redirect()->route('orders.index', $id)->with(['message' => 'Error']);
        }

    }

    public function show($id) {
        //Buscar order por id
        $order = Order::findOrFail($id);

        // echo '<pre>';
        // var_dump($order->clients->nombres);
        // echo '</pre>';
        return view('orders.show', compact('order'));
    }
}
