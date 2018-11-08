<div class="container-fluid no-padding h-100">
            <div class="row flex-row h-100 bg-white">
                <!-- Begin Left Content -->
                <div class="col-xl-3 col-lg-5 col-md-5 col-sm-12 col-12 no-padding">
                    <div class="elisyam-bg background-03">
                        <div class="elisyam-overlay overlay-08"></div>
                        <div class="authentication-col-content-2 mx-auto text-center">
                            <div class="logo-centered">
                                <a href="db-default.html">
                                    <img src="views/assets/img/logo.png" alt="logo">
                                </a>
                            </div>
                            <h1>CarWash | UPV</h1>
                            <span class="description">
                                Inicia sesión o crea una cuenta para empezar a usar la app. 
                            </span>
                            <ul class="login-nav nav nav-tabs mt-5 justify-content-center" role="tablist" id="animate-tab">
                                <li><a class="active" data-toggle="tab" href="#singin" role="tab" id="singin-tab" data-easein="zoomInUp">Sign In</a></li>
                                <li><a href="index.php?action=registro" role="tab" id="signup-tab" data-easein="zoomInRight">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Left Content -->
                <!-- Begin Right Content -->
                <div class="col-xl-9 col-lg-7 col-md-7 col-sm-12 col-12 my-auto no-padding">
                    <!-- Begin Form -->
                    <div class="authentication-form-2 mx-auto">
                        <div class="tab-content" id="animate-tab-content">
                            <!-- Begin Sign In -->
                            <div role="tabpanel" class="tab-pane show active" id="singin" aria-labelledby="singin-tab">
                                <h3>Sign In To Elisyam</h3>
                                <form method="POST">
                                    <div class="group material-input">
        							    <input type="text" name="username"required>
        							    <span class="highlight"></span>
        							    <span class="bar"></span>
        							    <label>Username</label>
                                    </div>
                                    <div class="group material-input">
        							    <input type="password" name="password" required>
        							    <span class="highlight"></span>
        							    <span class="bar"></span>
        							    <label>Password</label>
                                    </div>

                                    <div class="sign-btn text-center">
                                    <input type="submit" class="btn btn-lg btn-gradient-01" value="Iniciar Sesión">
                                </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- End Form -->                        
                </div>
                <!-- End Right Content -->
            </div>
            <!-- End Row -->
        </div>

<?php
    $mvc = new MvcController();
    $mvc->loginController();
?>