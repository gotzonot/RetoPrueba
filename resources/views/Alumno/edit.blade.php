   
    @extends('layouts.layout')
    @section('content')

            <script src="js/jquery/controlformu.js"></script>
                <!--Start of Single Job Post Area-->
                <div class="single-job-post-area pt-70 mb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <form>
                                    <div class="single-job-content">
                                        <div class="title uppercase pt-50 pb-38"><span class="lg">Perfil del alumno</span>
                                        </div>
                                        <div class="single-job-form">
                                            <div class="single-info pb-14">
                                                <label for="f_name" class="uppercase pull-left m-0">Nombre</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="nombre" name="nombre" placeholder="Introduzca su nombre">
                                                </div>
                                            </div>
                                            <div class="single-info pb-14">
                                                <label for="l_name" class="uppercase pull-left m-0">Apellidos</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="l_name" name="apellidos" placeholder="Introduzca sus apellidos">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-job-form">
                                            <div class="single-info mb-14">
                                                <label for="country" class="uppercase pull-left m-0">Departamento</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="country" name="departamento" placeholder="Introduzca departamento">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14">
                                                <label for="dni" class="uppercase pull-left m-0">DNI</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="city" name="dni" placeholder="Introduzca su DNI">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14">
                                                <label for="email" class="uppercase pull-left m-0">Correo</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="email" name="email" placeholder="Introduzca una dirección de correo">
                                                </div>
                                            </div>
                                            <div class="single-job-form">
                                            <div class="single-info pb-14">
                                                <label for="f_name" class="uppercase pull-left m-0">Contraseña</label>
                                                <div class="form-box fix">
                                                    <input type="password" id="f_name" name="passw" placeholder="Introduzca su contraseña">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-job-form">
                                            
                                            
                                            <button onclick="checkInput('nombre',namePattern)">Prueba</button>
                                            
                                            <div class="ml-160 mt-42">
                                                 <a href ="{{ url('/insertarprofe') }}"class="button button-medium-box">Guardar</a>
                                            </div> 

                                            
                                        </div>
                                    </div>
                                </form>
                 
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Single Job Post Area-->
    
    @stop


