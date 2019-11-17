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
                <form>
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                            <select class="form-control search-slt select" data-type="2" name="state">
                                                <option value="">Departamento</option>
                                               @foreach ( $departamentos as $departamento )
                                               <option value="{{ $departamento->id_departamento }}">{{ $departamento->departamento }}</option>
                                               @endforeach
                                            </select>
                                        </div>
                                    <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                                            <select class="form-control search-slt select3" id="exampleFormControlSelect1" name="city">
                                                <option value="">Municipio</option>
                                                @foreach ($municipios as $municipio )
                                                <option class="opcioned" value="{{ $municipio->id_municipio }}">{{ $municipio->municipio }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                <div class="col-lg-3 col-md-2 col-sm-12 p-0">
                                        <select class="form-control search-slt select" data-type="1" name="educacion">
                                            <option value="">Educacion</option>
                                           @foreach ($educacions as $educacion )
                                           <option value="{{ $educacion->id }}">{{ $educacion->name }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <select class="form-control search-slt select2" id="exampleFormControlSelect1" name="title">
                                        <option value="">Titulo</option>
                                        @foreach ($tipo_educacions as $tipo_educacion )
                                           <option class="opcioned" value="{{ $tipo_educacion->id }}">{{ $tipo_educacion->name }}</option>

                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-2 col-md-1 col-sm-12 p-0">
                                    <button type="button" class="btn btn-danger wrn-btn search">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    @endif
    </section>
    <section class="section-search" style="display:none;">
    <div class="container">
     <div class="row">


     </div>
    </div>
    </section>
    <section class="section-one">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <h4>  Que es JAAC?  </h4>
                    <p>Es una pagina de empleo que en vez de tu buscar para quien trabajar ellos te buscan a ti y tu podras ver cual es el lugar mas favorable para trabajar.</p>
                </div>
                <div class="col-12 col-md-4">
                    <h4>Mision</h4>
                    <p>Disminuir drasticamente el desempleo en el pais.</p>
                </div>
                <div class="col-12 col-md-4">
                    <h4>Vision</h4>
                    <p>Estar en todos los paises del mundo.</p>
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
                    <h4>Necesitas Registrarte</h4>
                    <p>Simplemente dale en donde dice login y abajo hay una pestaña que dice registrate es muy facil.</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
