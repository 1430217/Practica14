<?php
    $mvc = new MvcController();
    $stmt = $mvc->getPremiosController();
?>
<div class="col-xl-12">
    <div class="widget widget-18 has-shadow">
        <!-- Begin Widget Header -->
        <div class="widget-header bordered d-flex align-items-center">
            <h2>Premios</h2>
            <?php if($_SESSION['usuario'] === 'admin'){
                //echo  '<a href="#addPremios"><button type="button" class="btn btn-success mr-1 mb-2"><i class="la la-pencil"></i>Agregar un premio</button></a>';
                echo '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-Premio">Agregar premio</button>';
            }?>
        </div>
        <!-- End Widget Header -->
        <div class="widget-body">
            <ul class="list-group w-100">

                <?php 
                foreach($stmt as $premios => $r){
                   echo '<li class="list-group-item">
                        <div class="new-message">
                            <div class="media">
                                <div class="media-left align-self-center mr-3">
                                    <img src="views/assets/img/avatar/avatar-04.jpg" alt="..." class="img-fluid rounded-circle" style="width: 50px;">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="new-message-sender">'.$r['nombre_premio'].'</div>
                                    <div class="new-message-time">'.$r['descripcion'].'</div>
                                </div>

                                <div class="media-right align-self-center">
                                    <div class="actions">
                                        <a href="">
                                            <button class="btn btn-gradient-01 mr-1 mb-2">Obtener</button>
                                        </a>

                                        <a href="index.php?action=premios&idBorrar='.$r['idPremio'].'">
                                            <button class="btn btn-gradient-01 mr-1 mb-2">Eliminar</button>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>';
                }
                    $mvc->deletePremioController();
                ?>

            </ul>
        </div>
    </div>
</div>



<div id="add-Premio" class="modal modal-top fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar un premio</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Cerrar</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST">

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon addon-primary">
                                <i class="la la-user"></i>
                            </span>
                            <input type="text" placeholder="Nombre del premio" name="nombre_premio" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon addon-primary">
                                <i class="la la-user"></i>
                            </span>
                            <textarea name="descripcion" cols="30" rows="10" placeholder="Descripcion del premio" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-shadow" data-dismiss="modal">Cerrar</button>
                        <input type="submit" class="btn btn-primary" value="Guardar">
                    </div>
                </form>
                <?php
                    $mvc = new MvcController();
                    $mvc->addPremiosController();
                ?>
            </div>
        </div>
    </div>
</div>