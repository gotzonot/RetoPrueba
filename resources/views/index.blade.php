    
    @extends('layouts.layout')
    @section('content')
                <!-- End of Header Area -->
                
                <!--Start of Blog Area-->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="js/jquery/index.js"></script>
                <div class="blog-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-center ">
                                    <div class="separator mt-35 mb-77">
                                        <span><img src="images/icons/1.png" alt=""></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">

                                <div class="col-xs-4" id="divperfil">
                                    <div class="single-blog hover-effect">
                                        <div class="blog-image box-hover">
                                            <a id="opcion" href="{{ url('/perfil')  }}" class="block">
                                                <img src="images/icons/perfil.png" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-text">
                                            <h5 class="pt-28 mb-70 text-center"><a href="#">Mi perfil</a></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-4" id="divofertas">
                                    <div class="single-blog">
                                        <div class="blog-image box-hover">
                                            <a href="{{ url('/oferta/index')  }}" class="block">
                                                <img src="images/icons/ofertas.png" id="ofertas" alt="">
                                            </a>
                                        </div>
                                       <div class="blog-text">
                                            <h5 class="pt-28 mb-6 text-center"><a href="{{ url('/oferta/index')  }}">Mis ofertas</a></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-4 bgcolor" id="divalumnos">
                                    <div class="single-blog hover-effect ">
                                        <div class="blog-image box-hover">
                                            <a href="{{ url('/alumno/index')  }}" class="block">
                                                <img src="images/icons/alumnos.png" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-text">
                                            <h5 class="pt-28 mb-6 text-center"><a href="{{ url('/alumno/index')  }}">Mis alumnos</a></h5>
                                        </div>
                                    </div>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Blog Area-->
                @stop