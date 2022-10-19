                <style>
                    
                   
                    .alert {
                        position: fixed;
                        right: 8px;
                        top: 15%;
                        z-index: 999;
                        padding: 20px;
                        color: white !important;
                    }
                        
                    .danger {
                        background-color: #ff6c6c;
                    }
                    .success {
                        background-color: #39d040;
                    }
                    .warning {
                        background-color: #fbc038;
                    }
                    
                    .closebtn {
                      margin-left: 15px;
                      color: white;
                      font-weight: bold;
                      float: right;
                      font-size: 22px;
                      line-height: 20px;
                      cursor: pointer;
                      transition: 0.3s;
                    }
                    
                    .closebtn:hover {
                      color: black;
                    }
                    
                </style>
                
                <script>
                    function closeAlert() {
                        document.getElementById("alert").style.display = "none";
                    }
                    
                    setTimeout(function() {
                        $('#alert').fadeOut('fast');
                    }, 5000);
                    
                </script>
                
                <?php
                //FUNCION PARA DECIFRAR LOS DATOS
               

                if($_REQUEST['msg']=="all"){
                    
                    echo'<div id="alert" class="mt-50 alert warning">';
                    echo'<span class="closebtn" onclick="closeAlert()">&times;</span>';
                    echo'Por favor llena el formulario.';
                    echo'</div>';
                }

                if($_REQUEST['msg']=="ok"){
                    
                    echo'<div id="alert" class="mt-50 alert success">';
                    echo'<span class="closebtn" onclick="closeAlert()">&times;</span>';
                    echo'¡Recibimos tu mensaje!';
                    echo'</div>';
                }

                if($_REQUEST['msg']=="err"){
                    
                    echo'<div id="alert" class="mt-50 alert danger">';
                    echo'<span class="closebtn" onclick="closeAlert()">&times;</span>';
                    echo'¡Algo salió mal! Intenta de nuevo';
                    echo'</div>';
                }  

                
                ?>
	
                