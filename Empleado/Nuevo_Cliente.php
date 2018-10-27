<?php include ("../php/Header.php"); ?>

<script language="javascript">
<?php //include ("../js/".$_SESSION["Funciones"].""); //Archivo que contiene funciones para validar en javascript ?>
</script>
<?php include ("../php/Body.php"); ?>



<div class="page-header">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>REGISTRO NUEVO CLIENTE</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- End Page Header -->        
      
      <!-- Start Content Section -->
      <section id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <h2>Contact Form</h2>   

            <!-- Start Contact Form -->
            <form role="form" id="contactForm" class="contact-form" data-toggle="validator" class="shake">
              <div class="form-group">
                <div class="controls">
                  <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message" onBlur="this.value=this.value.toUpperCase()"></textarea>
                  <div class="help-block with-errors"></div>
                </div>  
              </div>

              <button type="submit" id="submit" class="btn btn-success"></i> Send Message</button>
              <div id="msgSubmit" class="h3 text-center hidden"></div> 
              <div class="clearfix"></div>   

            </form>     
            <!-- End Contact Form -->

            </div>
            <div class="col-md-3">
              <h2 class="big-title">Contact Info</h2>   
              <div class="information">              
                <div class="contact-datails">
                  <p> 12 Tottenham Road, London, England.</p>
                  <p> +880 123 456 789 </p>
                  <p> hello@graygrids.com </p>
                  <p> Sun-Sat (9am-5pm)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Content Section  -->

<?php include ("../php/Footer.php"); ?>