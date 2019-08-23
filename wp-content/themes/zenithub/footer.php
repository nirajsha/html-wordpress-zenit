<section class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <nav-bottom>
              <ul  class="justify-content-md-center" style="display: flex; text-decoration: none; list-style-type: none; color: #fff;">
               <li> <strong>
                        <?php
wp_nav_menu( array( 
    'theme_location' => 'my-footer-menu', 
    'container_class' => 'footer-menu-class' ) ); 
?>
</strong></a></li>
                 <!-- <a href="<?php echo site_url('services/digital-marketing'); ?>" style="text-decoration: none;"><li class="pl-4"><strong>Digital Marketing</strong></li></a>
                 <a href="<?php echo site_url('services/erp-solution'); ?>" style="text-decoration: none;"><li  class="pl-4"><strong>ERP Solution</strong></li></a>
                 <a href="<?php echo site_url('services/career'); ?>" style="text-decoration: none;"><li class="pl-4"><strong>Career</strong></li></a> -->
              </ul>
            </nav-bottom>
              <p><?php echo get_theme_mod('zenithub_footer_location_handle'); ?>
                <br>
                <i class="fa fa-phone-square"></i> <?php echo get_theme_mod('zenithub_footer_phone_handle'); ?>&nbsp;&nbsp;&nbsp;
                <i class="fa fa-envelope"></i> <a href=""><?php echo get_theme_mod('zenithub_footer_email_handle'); ?></a><br>
              </p>
              <p class="logos">
                  <?php
                if(has_custom_logo() || is_customize_preview()){
                the_custom_logo();
              }
              else{
                ?> 
                <a class="navbar-brand" href="<?php echo site_url('/about-us'); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo2.png" class="logo img-fluid" alt="ZENITHUB"></a>
                 <?php } ?> 
                
              </p>
              <p style="margin-bottom: 0px;"> </p>
              
              <p class="text-center">© <?php echo date('Y'); ?> <?php echo get_theme_mod('zenithub_footer_content_handle'); ?></p>
            </div>
          </div>
        </div>
         <button id="topBtn"><i class="fa fa-arrow-up"></i></button>
      </section>
    </div> 
        <style>
    
#topBtn{
  position: fixed;
  bottom: 100px;
  right: 20px;
  font-size: 22px;
  width: 50px;
  height: 50px;
  background: #2bc0a4;
  color: white;
  border: none;
  cursor: pointer;
  display: none;
}
@media screen and (max-width: 767px){
  #topBtn{
  font-size: 18px;
  width: 40px;
  height: 40px;

}

}
nav-bottom a{
 
  text-decoration: none;
}
nav-bottom li a{
  color: #fff;

}
nav-bottom li a:hover{
  color: #2bc0a4;
  text-decoration: none;
}


  
    div.footer-menu-class ul {
    list-style-type: none;
    list-style: none;
    list-style-image: none;
    padding-bottom: -10px;
    /*padding-top: 0px;*/
}
div.footer-menu-class li {
    padding-left: 20px;
    display: inline;
}
      </style>
        </style>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   
    <?php wp_footer(); ?>
   <!--  <script>
      
     $(document).ready(function(){
      scroller.init();
     });
    </script> -->
   <!-- WhatsHelp.io widget -->
<!-- <script type="text/javascript">
    (function () {
        var options = {
            facebook: "429522433791872", // Facebook page ID
            call_to_action: "Message us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script> -->
<!-- /WhatsHelp.io widget -->
  </body>
</html>