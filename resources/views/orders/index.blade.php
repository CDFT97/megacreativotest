<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layout.head')
    <style>
        form{
            display: inline;
        }
    </style>
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
                            <div class="col-md-12">
                                <br>
                                <h5 class="card-title">Lista de Ordenes Pendientes</h5>
                                <a href="{{route('orders.create')}}" class="peque btn btn-primary "> Nueva Orden</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Acciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($ordersP as $order)
                                    <tr>
                                        <th scope="row">{{$order->id}}</th>
                                        <td>{{$order->client->name}} {{$order->client->last_name}} </td>
                                        <td>{{$order->created_at}}</td>
                                        <td>{{$order->status}}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('orders.edit', $order->id) }}" role="button">Editar</a>
                                            <a class="btn btn-warning" href="{{ route('orders.show', $order->id) }}" role="button">Ver</a>
                                            <form id="destroy-form" method="POST" action="{{route('orders.destroy', $order->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" onclick="alerta();" id="deleteConfirm"   role="button" type="submit">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                    
                    <div class="card col-sm-12">
                        <div class="card-title">
                            <div class="col-md-12">
                                <br>
                                <h5 class="card-title d-xs-inline-block ">Lista de Ordenes Pagadas</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Acciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($ordersC as $order)
                                    <tr>
                                        <th scope="row">{{$order->id}}</th>
                                        <td>{{$order->client->name}} {{$order->client->last_name}} </td>
                                        <td>{{$order->created_at}}</td>
                                        <td>{{$order->status}}</td>
                                        <td>
                                            <a class="btn btn-warning" href="#" role="button">Ver</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
