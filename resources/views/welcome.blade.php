@extends('layouts.app')

@section('content')
<main class="wrapper">
    <section class="hero">
        <div class="container">
            <div class="container-hero">
                <div class="content-hero">
                    <h1>JAAC</h1>
                    <h3>Ya no necesito buscar trabajo ahora el trabajo te busca a ti</h3>
                </div>
            </div>
        </div>
        @guest
    @else

    <section class="search-sec">
            <div class="container">
                <form action="#" method="post" novalidate="novalidate">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                                <option>Select Vehicle</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                            </select>
                                        </div>
                                    <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                                <option>Select Vehicle</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                            </select>
                                        </div>
                                <div class="col-lg-3 col-md-2 col-sm-12 p-0">
                                        <select class="form-control search-slt" id="exampleFormControlSelect1">
                                            <option>Select Vehicle</option>
                                            <option>Example one</option>
                                            <option>Example one</option>
                                            <option>Example one</option>
                                            <option>Example one</option>
                                            <option>Example one</option>
                                            <option>Example one</option>
                                        </select>
                                    </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <select class="form-control search-slt" id="exampleFormControlSelect1">
                                        <option>Select Vehicle</option>
                                        <option>Example one</option>
                                        <option>Example one</option>
                                        <option>Example one</option>
                                        <option>Example one</option>
                                        <option>Example one</option>
                                        <option>Example one</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-md-1 col-sm-12 p-0">
                                    <button type="button" class="btn btn-danger wrn-btn">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    @endif
    </section>

    <section class="section-one">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <h4>Gran cantidad de componentes</h4>
                    <p>El kit viene con componentes diseñados para lucir perfectos juntos. Todos los componentes encajan perfectamente entre sí.</p>
                </div>
                <div class="col-12 col-md-4">
                    <h4>Gran cantidad de componentes</h4>
                    <p>El kit viene con componentes diseñados para lucir perfectos juntos. Todos los componentes encajan perfectamente entre sí.</p>
                </div>
                <div class="col-12 col-md-4">
                    <h4>Gran cantidad de componentes</h4>
                    <p>El kit viene con componentes diseñados para lucir perfectos juntos. Todos los componentes encajan perfectamente entre sí.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-two">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img class="img-responsive" src="./img/jaac.png" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <h4>Componentes básicos</h4>
                    <p>Cambiamos el estilo de cada elemento Bootstrap 4 para que coincida con el estilo del Kit de papel. Todos los componentes de Bootstrap 4 que necesita en un desarrollo se han rediseñado con el nuevo aspecto. Además de los numerosos elementos básicos, también hemos creado clases adicionales. Todos estos elementos te ayudarán a llevar tu proyecto al siguiente nivel.</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
