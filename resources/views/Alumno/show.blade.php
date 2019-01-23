     
    @extends('layouts.layout')
    @section('content')

            
<!--Start of Single Job Post Area-->
<div class="single-job-post-area pt-70 mb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form>
                    <div class="single-job-content">
                        <div class="area-title text-center">
                                    <h2 class="pt-10 pb-10">PERFIL DEL ALUMNO</h2>
                                </div>
                        <div class="single-job-form">

                            <div class="single-info mb-4">
                                <div class="title uppercase mt-58 mb-25"><span class="medium">Nombre</span></div>
                                <div class="form-box fix">
                                    <input type="text" id="nombre" name="nombre" value="{{$alumnos->nombreapellidos}}"> 
                                </div>
                            </div>

                            <div class="single-info mb-4">
                                <div class="title uppercase mt-58 mb-25"><span class="medium">Dni</span></div>
                                <div class="form-box fix">
                                    <input type="text" id="l_name" name="apellidos" value="{{$alumnos->dni}}">
                                </div>
                            </div>
                        
                            <div class="single-info mb-4">
                                <div class="title uppercase mt-58 mb-25"><span class="medium">Email</span></div>
                                <div class="form-box fix">
                                    <input type="text" id="country" name="departamento" value="{{$alumnos->email}}">
                                </div>
                            </div>

                            <div class="single-info mb-4">
                                 <div class="title uppercase mt-58 mb-25"><span class="medium">Telefono</span></div>
                                <div class="form-box fix">
                                    <input type="text" id="country" name="departamento" value="{{$alumnos->telefono}}">
                                </div>
                            </div>

                            <div class="single-info mb-4">
                                 <div class="title uppercase mt-58 mb-25"><span class="medium">Direccion</span></div>
                                <div class="form-box fix">
                                    <input type="text" id="country" name="departamento" value="{{$alumnos->direccion}}">
                                </div>
                            </div>

                             <div class="single-info mb-4">
                                 <div class="title uppercase mt-58 mb-25"><span class="medium">Ciudad</span></div>
                                <div class="form-box fix">
                                    <input type="text" id="country" name="departamento" value="{{$alumnos->ciudad}}">
                                </div>
                            </div>


                        </div>
                          
                        <div class="single-job-form">
                                                                       
                        <div class="mt-38">
                            <a href="" class="button button-large-box lg-btn mr-20">Editar</a>
                            <a href="{{ url('/alumno/index')}}" class="button button-large-box lg-btn">Atrás</a>
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


