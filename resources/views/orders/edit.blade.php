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
                        <div class="card-body">
                            @if(session('message'))
                                <div class="alert alert-primary">
                                    {{session('message')}}
                                </div>
                            @endif
                            <form action="{{route('orders.update', $order->id)}}" method="POST">
                                @csrf
                                {{ method_field('PUT') }}
                                <h5 class="card-title">Editar Orden</h5>
                                <div class="row m-b-sm m-t-sm">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary"> Guardar</button>
                                        <a href="{{route('orders.index')}}" class="btn btn-danger"> Cancelar</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form-group">
                                            <label class="control-label" for="client_id">Cliente</label>
                                            <select class="form-control" name="client_id" required>
                                                @foreach ($clients as $client)
                                                <option value="{{ $client->id }}" {{ $client->id == $order->client->id ? 'selected' : ''}}>{{ $client->name.' '.$client->last_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form-group">
                                            <label class="control-label" for="discount">Descuento</label>
                                            <div class="input-group">
                                                <input type="number" name="discount" class="form-control" value="{{ $order->discount }}" required step="0.01">
                                            </div>
                                        </div>
                                        
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form-group">
                                            <label class="control-label" for="tax_amount">Impuesto</label>
                                            <div class="input-group">
                                                <input type="number" name="tax_amount" class="form-control" value="{{ $order->tax_amount }}" required step="0.01">
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form-group">
                                            <label class="control-label" for="reference">Referencia</label>
                                            <div class="input-group">
                                                <textarea name="reference" class="form-control" rows="3">{{ $order->reference }}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form-group">
                                            <label class="control-label" for="status">Estado</label>
                                            <div class="">
                                                <select class="form-control" name="status" required>
                                                    <option {{$order->status == 'Pendiente' ? 'selected' : ''}} value="Pendiente">Pendiente</option>
                                                    <option {{$order->status == 'Pagada' ? 'selected' : ''}} value="Pagada">Pagada</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
