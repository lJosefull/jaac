@extends('layouts.app')

@section('content')
<!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1 overlay2">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-9">
                    <div class="slider_text text-center">
                        <p>Ya no necesitas buscar trabajo ahora el trabajo te busca a ti</p>
                        <h3>Bienvenido</h3>
                        <div class="find_dowmain">
                            <form action="#" class="find_dowmain_form">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->


<!-- footer -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <div class="favicon.ico">
                            <a href="#">
                                <img src="img/favicon.ico" alt="">
                            </a>
                        </div>
                        <p class="footer_text doanar"> <a class="first" href="#">+57 3005439000
                            </a> <br>
                            <a href="#">jaacgroup@hotmail.com</a></p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer -->
<!-- link that opens popup -->

<!-- form itself end-->

<div id="test-form" class="white-popup-block mfp-hide">
    <div class="popup_box ">
        <div class="popup_inner">
            <div class="logo text-center">
                <a href="#">
                    <img src="img/favicon.ico" alt="">
                </a>
            </div>
            <h3>Iniciar sesión</h3>
            <form method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <input type="email" placeholder="Enter email">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="password" placeholder="Password">
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" class="boxed_btn_green">Sign in</button>
                    </div>
                </div>
            </form>
            <p class="doen_have_acc">¿No tienes una cuenta? <a class="dont-hav-acc" href="#test-form2">Registrarse</a>
            </p>
        </div>
    </div>
</div>
<!-- form itself end -->

<!-- form itself end-->

    <div id="test-form2" class="white-popup-block mfp-hide">
    <div class="popup_box ">
        <div class="popup_inner">
            <div class="logo text-center">
                <a href="#">
                    <img src="img/favicon.ico" alt="">
                </a>
            </div>
            <h3>Registrar</h3>
            <div class="row">
                <div class="col-xl-6 col-md-6 user">
                <button type="submit" class="boxed_btn_green">Usuario</button>
                </div>
                <div class="col-xl-6 col-md-6 business">
                <button type="submit" class="boxed_btn_green">Empresa</button>
                </div>

            </div>
            <div id="profile_User">
            <form role="form" method="POST"  action="{{ url('profile') }}">
                        {{ csrf_field() }}
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <input type="text" placeholder="Nombre" name="First_name" >
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="text" placeholder="Apellido" name="Last_name" >
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="email" placeholder="Correo Electronico" name="Email">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="password" placeholder="Contraseña" name="Password">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="Password" placeholder="Confirmar Contraseña" name="Password2">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="hidden" placeholder="Confirmar Contraseña" name="type" value=1>
                    </div>
                    <div class="col-xl-12">

                        <button type="submit" class="boxed_btn_green">Registrarte</button>
                    </div>
                </div>
            </form>
        </div>
        <div id="profile_Business" style="display:none">
        <form role="form" method="POST"  action="{{ url('profile') }}">
                    {{ csrf_field() }}
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <input type="text" placeholder="Nombre de la empresa" name="Business_name">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="email" placeholder="Enter email" name="Email">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="password" placeholder="Contraseña" name="Password">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="Password" placeholder="Confirm password" name="Password2">
                    </div>
                    <div class="col-xl-12 col-md-12">
                            <input type="hidden" placeholder="Confirmar Contraseña" name="type" value=2>
                        </div>
                    <div class="col-xl-12">
             <button type="submit" class="boxed_btn_green">Registrarte</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection

<style>
.user{

    border-color: blueviolet;
}
</style>
