<?php 
    require 'header.php';
?>
        <!-- bradcam_area  -->
        <div class="bradcam_area bradcam_bg_2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text text-center">
                            <h3 style="font-size: 50px;">Contacto</h3>
                            <p><a href="index.php">Inicio</a> / Contacto</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ bradcam_area  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
               <!-- <div class="d-none d-sm-block mb-5 pb-4">
                    <div id="map" style="height: 480px; position: relative; overflow: hidden;"> </div>
                    <script>
                        function initMap() {
                            var uluru = {
                                lat: -25.363,
                                lng: 131.044
                            };
                            var grayStyles = [{
                                    featureType: "all",
                                    stylers: [{
                                            saturation: -90
                                        },
                                        {
                                            lightness: 50
                                        }
                                    ]
                                },
                                {
                                    elementType: 'labels.text.fill',
                                    stylers: [{
                                        color: '#ccdee9'
                                    }]
                                }
                            ];
                            var map = new google.maps.Map(document.getElementById('map'), {
                                center: {
                                    lat: -31.197,
                                    lng: 150.744
                                },
                                zoom: 9,
                                styles: grayStyles,
                                scrollwheel: false
                            });
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                    </script>
    
                </div>-->
    
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Ponerse en contacto</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                    <div class="form-group col-md-12 mb-3 "> 

                                        <input type="text" class="form-control mt-1 fondo_input_cont input_req" id="nombre_completo_2" placeholder="Nombre *">
                                    </div>
                                    <div class="form-group col-md-12 mb-3 ancho">
                                        
                                        <input type="email" class="form-control mt-1 fondo_input_cont input_req" id="email_2" placeholder="Correo electronico *">
                                    </div>
                                    <div class="form-group col-md-12 mb-3 ancho">
                                        
                                        <input type="number" class="form-control mt-1 fondo_input_cont" id="telefono_2" placeholder="Teléfono">
                                    </div>
                                    <div class="form-group col-md-12 mb-3">
                                        
                                        <textarea class="form-control mt-1 fondo_textarea_cont fondo_textarea_req"  id="mensaje_2"  rows="5" placeholder="Mensaje *"></textarea>
                                    </div>
                                    
                            </div>

                            <div class="row">
                                    <div class="col text-end mt-2" id="div_boton2" align="center">
                                        <div class="">
                                            <a href="#" onclick="save_contact_form2();" class="boxed-btn3">Solicitar</a>
                                        </div>

                                        
                                    </div>
                            </div>

                            <script type="text/javascript">
                                function save_contact_form2()
                                {     

                                   // alert("entra");  
                                    
                                    var nombre_completo = $("#nombre_completo_2").val();
                                    var email = $("#email_2").val();
                                    var telefono = $("#telefono_2").val();
                                    var mensaje = $("#mensaje_2").val();

                                    var fecha=moment().format('YYYY-MM-DD');
                                    var hora=moment().format('HH:mm:ss');
                                    var fecha_hora=fecha+" "+hora;

                                   // alert(fecha_hora);
                                    
                                    if (nombre_completo!="") {

                                        $('#nombre_completo_2').removeClass("input_req").addClass("fondo_input_cont");

                                        if (email!="") {

                                            $('#email_2').removeClass("input_req").addClass("fondo_input_cont");

                                            if (mensaje!="") {

                                                $('#mensaje_2').removeClass("fondo_textarea_req").addClass("fondo_textarea_cont");

                                               // $("#label_req_2").hide();

                                                    $.post("ajax/index.php?op=save_contact_form",{
                                                        nombre_completo : nombre_completo,
                                                        email : email,
                                                        telefono : telefono,
                                                        mensaje : mensaje,
                                                        fecha_hora:fecha_hora
                                                        }, function(data, status)
                                                    {
                                                        data = JSON.parse(data);

                                                        //alert("guardado");

                                                        $("#nombre_completo_2").val("");
                                                        $("#email_2").val("");
                                                        $("#telefono_2").val("");
                                                        $("#mensaje_2").val("");
                                                        
                                                        alert("Registro exitoso, uno de nuestros agentes se comunicará con usted para solucionar todas sus dudas.");
                                                       // $(location).attr("href","http://pizarronesgdl-customer-care.site/indexpost.php");
                                                        //window.open("http://pizarronesgdl-customer-care.site/indexpost.php","_self");

                                                        

                                                    })

                                            }else{

                                                //$("#label_req_2").show();
                                                $('#mensaje_2').removeClass("fondo_textarea_cont").addClass("fondo_textarea_req");

                                            }

                                            

                                        }else{

                                           // $("#label_req_2").show();
                                            $('#email_2').removeClass("fondo_input_cont").addClass("input_req");

                                        }

                                                    
                                    }else{

                                        //$("#label_req_2").show();
                                        $('#nombre_completo_2').removeClass("fondo_input_cont").addClass("input_req");        

                                    }  

                                }
                            </script>

                           <!-- <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>-->
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <!--<div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Buttonwood, California.</h3>
                                <p>Rosemead, CA 91770</p>
                            </div>
                        </div>-->
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>33 23154328</h3>
                                <!--<p>Mon to Fri 9am to 6pm</p>-->
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>cotiza@secadiservicios.com</h3>
                                <!--<p>Send us your query anytime!</p>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
<?php 
    require 'footer.php';
?> 