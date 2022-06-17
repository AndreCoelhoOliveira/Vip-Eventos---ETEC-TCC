    <footer>
        <div id="footer-container">
            <div class="container">
                <div class="row">
                    <p class="text-center text-white col-md-12"><i class="fas fa-map-marker mr-2 text-warning"></i>Rua Aldeia da Formiga, 179
                    - São Paulo, SP</p> 
                </div>
                <div class="row">
                    <h6 class="float-left col-sm-6 text-white"><i class="fab fa-whatsapp mr-2 text-success"></i>(11) 96909-7474</h6>
                    <h6 class="float-right col-sm-6 text-white"><i class="far fa-envelope mr-2 text-danger"></i> vipeventosjpp@gmail.com</h6> 
                </div>
                <div class="row">
                    <h6 class="copyright-text col-sm-4">&copy; copyright 2018 VIP Eventos.<br />Desenvolvido por Sigmas Code.</h6>
                    <ul class="social col-sm-7">
                        <li><a href="https://www.facebook.com/DJVAION/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/pedrovaion/" target="_blank"><i class="fab fa-instagram mr-2"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>    

      
    <script src="js/lightbox-plus-jquery.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script>
        
        function msg() {
            alert('Formulário enviado!');
        }
    
        lightbox.option({
            'resizeDuration': 100,
            'fadeDuration': 400,
            'positionFromTop': 150,
            'wrapAround': true
        })
        //JQuery Scroll
        jQuery(document).ready(function($) { 
   		   $(".scroll").click(function(event){        
               event.preventDefault();
               $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
   			});
		});
        
        // Menu toggle-button
        $(document).ready(function() {
            $(".menu-icon").on("click", function(){
                $("nav ul").toggleClass("showing");
            });
        });
        
    </script>
  </body>
</html>
