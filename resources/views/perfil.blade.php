    
    @extends('layouts.layout')
    @section('content')
               
              
                <!--Start of Single Job Post Area-->
                <div class="single-job-post-area pt-70 mb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <form action="#">
                                    <div class="single-job-content">
                                        <div class="area-title text-center">
		                                    <h2 class="pt-10 pb-10">MI PERFIL</h2><br/>
		                                </div>
                                        <div class="single-job-form">

                                        	<div class="single-info pb-14">
                                                <label for="f_name" class="uppercase pull-left m-0">Nombre y Apellidos</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="f_name" name="f_name" placeholder="Introduzca su nombre">
                                                </div>
                                            </div>

                                            <div class="single-info mb-14">
                                                <label for="email" class="uppercase pull-left m-0">Correo</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="email" name="email" placeholder="Introduzca una dirección de correo">
                                                </div>
                                            </div>   
                                        </div>
                                        
                                        <div class="single-job-form">
                                            <div class="single-info mb-14">
                                                <label for="address" class="uppercase pull-left m-0">Dirección</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="address" name="address" placeholder="Introduzca su dirección">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14">
                                                <label for="phone" class="uppercase pull-left m-0">Teléfono</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="phone" name="phone" placeholder="Introduzca su teléfono de contacto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-info mb-14 fix">
                                                <label for="photo" class="uppercase pull-left m-0">Curriculum Vitae</label>
                                                <div class="photo-uploader fix pull-left" id="fileupload">
                                                    <input type="file" id="cv" name="fileupload">
                                                     <span class="filename">Sube tu Curriculum aquí</span> 
                                                     <span class="action">Buscar</span> 
                                                </div>
                                            </div>
                                        <div class="ml-160 mt-42">
                                        	<a href="#" class="button button-medium-box">Guardar</a>
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