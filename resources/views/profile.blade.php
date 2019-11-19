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
                        <div class="name">
                            <h3 class="title">{{ $user->name }}</h3>
                            <h6>{{$user->education->name}}</h6>
                            <h6>{{$user->education_type->name}}</h6>
                            <h6>{{$departamentos->departamento}}</h6>
                            <h6>{{$municipios->municipio}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="row">

            <div class="col-md-12 order-md-1">
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
             @if($verifi>0)
                    <div class="col-lg-12">


                            <video width="640" height="360" controls>
                                    <source src="{{secure_asset(asset($uservideo->url))}}" type="video/mp4">
                                    Tu navegador no soporta HTML5 video.
                              </video>
                      </div>
                @endif
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

        </div>
    </div>
</div>

@endsection
