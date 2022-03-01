<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layout.head')
    <body>
        <header>
            @include('layout.navbar')
        </header>

        <section class="main">
            <div class="container">
                <div class="row">
                    <div class="card col-sm-12">
                        <div class="card-title">
                            @if(session('message'))
                                <div class="alert alert-primary">
                                    {{session('message')}}
                                </div>
                            @endif
                            <div class="card-content">
                                <div class="row" align="center">
                                    <div class="col-md-12">
                                        <h2 class="font-bold">{{'Venta de: '. $order->client->name.' '.$order->client->last_name }}</h2>
                                        
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                        <h4>Referencia</h4>
                                        {{$order->reference}}
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                        <h4>Descuento</h4>
                                        {{$order->discount}}
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                        <h4>Fecha</h4>
                                        {{$order->created_at}}
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                        <h4>Monto Total</h4>
                                        {{'$ '.$order->amount}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <h4>Estado de la Venta</h4>
                                        {{$order->status}}
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <h4>Creado</h4>
                                        {{$order->created_at}}
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <h4>Actualizado</h4>
                                        {{$order->updated_at}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Listado de Productos --}}
                    <div class="card col-sm-12">
                        <div class="card-title">
                            <div class="col-md-12">
                                <br>
                                <h5 class="card-title d-xs-inline-block ">Productos de esta Venta</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary btn-outline" data-toggle="modal" data-target="#agregar">Agregar Productos</a>
                            <br><br>
                            <table class="table table-striped table-hover" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>nombre</th>
                                        <th>referencia</th>
                                        <th>descripcion</th>
                                        <th>Precio Unitario</th>
                                        <th>unidades</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach($order->products as $product) --}}
                                    <tr>
                                        <td>Producto A</td>
                                        <td>Referencia de ejemplo</td>
                                        <td>Descripcion de ejemplo</td>
                                        <td>40</td>
                                        <td>precio de ejemplo</td>
                                        <td>
                                            <form id="destroy-form" class="spinner-form-submit"
                                                action="" method="POST" style="">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" id="deleteConfirmProducto" class="btn btn-outline btn-danger">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
