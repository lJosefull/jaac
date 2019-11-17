@extends('layouts.profile')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image:url('http://wallpapere.org/wp-content/uploads/2012/02/black-and-white-city-night.png');">
</div>
<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                   <div class="profile">
                        <div class="avatar">
                            <img src="https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTU0NjQzOTk4OTQ4OTkyMzQy/ansel-elgort-poses-for-a-portrait-during-the-baby-driver-premiere-2017-sxsw-conference-and-festivals-on-march-11-2017-in-austin-texas-photo-by-matt-winkelmeyer_getty-imagesfor-sxsw-square.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                        </div>
                        {{-- <div class="name">
                            <h3 class="title">{{ Auth::user()->name }}</h3>
                            <h6>Designer</h6>
                            <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                            <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="row">

            <div class="col-md-12 order-md-1">
@if($profile->complet==0)
                <h4 class="mb-3">Completar Registro</h4>
                <form class="needs-validation" method="POST" action="{{ url('profile',[$profile->id]) }}">
                        @if(count($errors)>0)
                        <ul>
                          @foreach($errors->all() as $error)
                          <li style="background-color:rgba(255,0,0,0.3); color: #fff;height: auto;line-height: 10px;    height: 30px;
               line-height: 25px;
               background-color: #f8d7da;
               color: #721c24;
               border-color: #f5c6cb;
               /* margin-left: 10px; */
               border-radius: .25rem;
               padding-left: 28px;">{{$error}}</li>
                           @endforeach
                        </ul>
                        @endif
                        @method('PUT')
                        @csrf
                        <div class="row">
                                <div class="col-md-5 mb-3">
                                  <label for="Educacion">Educacion</label>
                                  <select class="custom-select d-block w-100 select" name="educacion" data-type="1" required>
                                    <option value="">Educacion...</option>
                                   @foreach ( $Education as $Educations )
                                   <option value="{{ $Educations->id }}">{{ $Educations->name }}</option>
                                   @endforeach
                                  </select>
                                  @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                 @enderror
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="state">Titulo</label>
                                  <select class="custom-select d-block w-100 select2"  name="titulo" required>
                                    <option value="">Titulo...</option>

                                  </select>
                                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                                </div>
                                <div class="col-md-3 mb-3">
                                        <label for="state">Edad</label>
                                        <input type="number" class="form-control" id="Edad" name="edad"  placeholder="Edad">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                       @enderror
                                </div>
                              </div>
                              <div class="row">


                  <div class="mb-3 col-md-3">
                    <label for="address2">Sexo</label>

                    <select class="custom-select d-block w-100 select" id="sexo" name="sexo"  required>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                          </select>
                          @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                  </div>
                </div>
                  <div class="row">
                    <div class="col-md-5 mb-3">
                      <label for="country">Departamentos</label>
                      <select class="custom-select d-block w-100 select" data-type="2"  name="departamentos" required>
                            @foreach ( $DB as $DB )
                            <option value="{{ $DB->id_departamento }}">{{ $DB->departamento }}</option>
                            @endforeach
                      </select>

                      @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="state">Ciudad</label>
                      <select class="custom-select d-block w-100 select3" data-type="2" name="city" required>
                        <option value="">Ciudad...</option>
                      </select>
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="Phone">Telefono</label>
                      <input type="number" class="form-control" id="tel" placeholder="" name="tel" required>
                      <input type="hidden" class="form-control" id="hidden" placeholder="" name="complet" value="1" required>
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                    </div>
                     <div class="col-md-3 mb-3">

                     <button type="submit" class="btn btn-success">Guardar</button>
                     </div>
                  </div>
                </form>
@else
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile-tabs">
                      <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                              <i class="material-icons">camera</i>
                              Studio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                              <i class="material-icons">palette</i>
                                Work
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                              <i class="material-icons">favorite</i>
                                Favorite
                            </a>
                        </li>
                      </ul>
                    </div>
            </div>
        </div>


    </div>
    </div>
      <div class="tab-content tab-space">
        <div class="tab-pane active text-center gallery" id="studio">
              <div class="row">
                  <div class="col-md-3 ml-auto">
                      <img src="https://images.unsplash.com/photo-1524498250077-390f9e378fc0?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=83079913579babb9d2c94a5941b2e69d&auto=format&fit=crop&w=751&q=80" class="rounded">
                      <img src="https://images.unsplash.com/photo-1528249227670-9ba48616014f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=66b8e7db17b83084f16fdeadfc93b95b&auto=format&fit=crop&w=357&q=80" class="rounded">
                  </div>
                  <div class="col-md-3 mr-auto">
                      <img src="https://images.unsplash.com/photo-1521341057461-6eb5f40b07ab?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=72da2f550f8cbd0ec252ad6fb89c96b2&auto=format&fit=crop&w=334&q=80" class="rounded">
                      <img src="https://images.unsplash.com/photo-1506667527953-22eca67dd919?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6326214b7ce18d74dde5e88db4a12dd5&auto=format&fit=crop&w=750&q=80" class="rounded">
                  </div>
              </div>
          </div>
        <div class="tab-pane text-center gallery" id="works">
              <div class="row">
                  <div class="col-md-3 ml-auto">
                  <img src="https://images.unsplash.com/photo-1524498250077-390f9e378fc0?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=83079913579babb9d2c94a5941b2e69d&auto=format&fit=crop&w=751&q=80" class="rounded">
                    <img src="https://images.unsplash.com/photo-1506667527953-22eca67dd919?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6326214b7ce18d74dde5e88db4a12dd5&auto=format&fit=crop&w=750&q=80" class="rounded">
                    <img src="https://images.unsplash.com/photo-1505784045224-1247b2b29cf3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ec2bdc92a9687b6af5089b335691830e&auto=format&fit=crop&w=750&q=80" class="rounded">  					</div>
                  <div class="col-md-3 mr-auto">
                  <img src="https://images.unsplash.com/photo-1504346466600-714572c4b726?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6754ded479383b7e3144de310fa88277&auto=format&fit=crop&w=750&q=80" class="rounded">
                  <img src="https://images.unsplash.com/photo-1494028698538-2cd52a400b17?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=83bf0e71786922a80c420c17b664a1f5&auto=format&fit=crop&w=334&q=80" class="rounded">
                  </div>
              </div>
          </div>
        <div class="tab-pane text-center gallery" id="favorite">
              <div class="row">
                  <div class="col-md-3 ml-auto">
                    <img src="https://images.unsplash.com/photo-1504346466600-714572c4b726?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6754ded479383b7e3144de310fa88277&auto=format&fit=crop&w=750&q=80" class="rounded">
                  <img src="https://images.unsplash.com/photo-1494028698538-2cd52a400b17?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=83bf0e71786922a80c420c17b664a1f5&auto=format&fit=crop&w=334&q=80" class="rounded">
                  </div>
                  <div class="col-md-3 mr-auto">
                    <img src="https://images.unsplash.com/photo-1505784045224-1247b2b29cf3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ec2bdc92a9687b6af5089b335691830e&auto=format&fit=crop&w=750&q=80" class="rounded">
                    <img src="https://images.unsplash.com/photo-1524498250077-390f9e378fc0?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=83079913579babb9d2c94a5941b2e69d&auto=format&fit=crop&w=751&q=80" class="rounded">
                    <img src="https://images.unsplash.com/photo-1506667527953-22eca67dd919?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6326214b7ce18d74dde5e88db4a12dd5&auto=format&fit=crop&w=750&q=80" class="rounded">
                  </div>
              </div>
          </div>
      </div>
      @endif
        </div>
    </div>
</div>

@endsection
