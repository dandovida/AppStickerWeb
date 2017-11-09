<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="site-index">
        <div class="container">    
            <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                <div class="panel panel-info" >
                        <div class="panel-heading">
                            <div class="panel-title">Autenticación de Usuario</div>
                            
                            <div style="float:right; font-size: 80%; position: relative; top:-10px">
                                <a href="#" onClick="$('#loginbox').hide(); $('#signupass').show()">
                                    ¿Olvidaste tu contraseña?
                                </a>                                                        
                            </div>
                        </div>     

                    <div style="padding-top:30px" class="panel-body" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>                      
                        <form id="loginform" class="form-horizontal" role="form">                               
                        
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Escribe tu usaurio">
                            </div>                          
                        
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Escribe tu contraseña">
                            </div>                          
                        
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Recordarme
                                        </label>
                                      </div>
                                    </div>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                      <a id="btn-login" href="#" class="btn btn-success">Ingresar</a>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            No tienes una cuenta! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Ingresa Aquí
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     
                        </div>                     
                    </div>  
            </div>
            
            
            <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Nueva cuenta</div>
                        <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Ya tengo cuenta</a></div>
                    </div>  
                    <div class="panel-body" >
                        <form id="signupform" class="form-horizontal" role="form">
                            
                            <div id="signupalert" style="display:none" class="alert alert-danger">
                                <p>Error:</p>
                                <span></span>
                            </div>                        
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="email" placeholder="Correo Electronico">
                                </div>
                            </div>                          
                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Nombres</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="firstname" placeholder="Nombres">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="col-md-3 control-label">Apellidos</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="lastname" placeholder="Apellidos">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cedula" class="col-md-3 control-label">Cedula</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="cedula" placeholder="Numero Cedula">
                                </div>
                            </div>                              
                            <div class="form-group">
                                <label for="password" class="col-md-3 control-label">Contraseña</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="passwd" placeholder="Contraseña">
                                </div>
                            </div>
                                
                            <div class="form-group">
                                <label for="icode" class="col-md-3 control-label">Repetir Contraseña</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="icode" placeholder="Contraseña">
                                </div>
                            </div>

                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3 col-md-9">
                                    <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Crear Cuenta</button>
                                </div>
                            </div>
                        </form>
                     </div>
                </div>
             </div> 
             
            <div id="signupass" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Recordar contraseña</div>
                        <div style="float:right; font-size: 85%; position: relative; top:-10px">
                            <a id="signinlink" href="#" onclick="$('#signupass').hide(); $('#loginbox').show()">Regresar</a>
                        </div>
                    </div>  
                    <div class="panel-body" >
                        <form id="signupform" class="form-horizontal" role="form">
                          
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="text-justify">
                                        <p>Por favor ingresa tu número de cédula y te enviaremos las instrucciones para restaurar tu contraseña al correo electrónico que tengas registrado en la base de datos.<br /> Gracias por utilizar este servicio.</p>
                                        <div class="clearfix"></div>                    
                                    </div>
                                </div>  

                                <div class="form-group">    
                                    <label for="email" class="col-md-3 control-label">Cedula</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Numero Cedula">
                                    </div>  
                                </div>  
                                        
                                <div class="form-group">        
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Enviar correo</button>
                                    </div>
                                </div>      
                            </div>
                        </form>
                     </div>
                </div>
             </div>          
        </div>
    </div>
</div>
