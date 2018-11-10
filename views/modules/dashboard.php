<?php
    session_start();
?>


<?php if($_SESSION['usuario'] === 'admin'){?>

    <h1>Dasboard de admin</h1>

<?php }else{?>

    <h2 class="page-header-title">Dashboard</h2>
    <h3>Imagen del carwash</h3>
    <br>
    <div class="row flex-row">
        <div class="col-xl-3 col-md-6 col-sm-6">
            <div class="widget widget-12 has-shadow">
                <div class="widget-body">
                    <div class="media">
                        <div class="align-self-center ml-5 mr-5">
                            <i class="ion ion-model-s "></i>
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title"><a href=""> Mis Visitas </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 col-sm-6">
            <div class="widget widget-12 has-shadow">
                <div class="widget-body">
                    <div class="media">
                        <div class="align-self-center ml-5 mr-5">
                            <i class="ti-gift"></i>
                        </div>
                        <div class="media-body align-self-center">
                        <div class="title"> <a href="index.php?action=premios"> Premios</a> </div>
                        </div>
                    </div>            
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 col-sm-6">
            <div class="widget widget-12 has-shadow">
                <div class="widget-body">
                    <div class="media">
                        <div class="align-self-center ml-5 mr-5">
                            <i class="meteocons-cloudy3"></i>
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title"> <a href="index.php?action=clima">Clima</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 col-sm-6">
            <div class="widget widget-12 has-shadow">
                <div class="widget-body">
                    <div class="media">
                        <div class="align-self-center ml-5 mr-4">
                            <i class="ion ion-star"></i>
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title"><a href="">Promociones</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    </div>





<?php }?>




