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
                            <div class="col-md-12">
                                <br>
                                <h5 class="card-title text-center">Dashboard</h5>
                            </div>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
