
<div class="row">
	<div class="col-md-4" style="padding-top: 10px;">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title">Recruiter Login</h3>
			</div>
			<div style="padding: 10px;">
				<?php echo $this->Session->flash(); ?>
				<?php

					echo $this->Form->create();
					echo $this->Form->input('email', array(
						'class' => 'form-control',
						'placeholder' => 'Email',
						'label' => ''
						));
					echo $this->Form->input('password', array(
						'class' => 'form-control',
						'placeholder' => 'Password',
						'label' => ''
						));
					echo "<br />";
					echo $this->Form->submit('Recruiter Login',array('class' => 'btn btn-primary')); 
					echo $this->Form->end();
					echo "<br />";
					echo $this->html->link('New Recruiter? Register',array('controller' => 'recruiters', 'action' => 'add'),array('class' => 'btn btn-success'));

				?>
			</div>
		</div>
	</div>
	<div class="col-md-8" style="padding-top: 10px;">
	<!-- Carousel
	    ================================================== -->
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
	      <!-- Indicators -->
	      <ol class="carousel-indicators">
	        <li data-target="#myCarousel" data-slide-to="0" class="active "></li>
	        <li data-target="#myCarousel" data-slide-to="1"></li>
	        <li data-target="#myCarousel" data-slide-to="2"></li>
	        <li data-target="#myCarousel" data-slide-to="3"></li>
	      </ol>
	      <div class="carousel-inner">
	        <div class="item active">
	          <img src="<?php echo $this->webroot; ?>img/banner.jpg" alt="First slide">
	          <div class="container">
	            <div class="carousel-caption">
	            </div>
	          </div>
	        </div>
	        <div class="item">
	          <img src="<?php echo $this->webroot; ?>img/banner2.jpg" alt="Second slide">
	          <div class="container">
	            <div class="carousel-caption">
	            </div>
	          </div>
	        </div>
	        <div class="item">
	          <img src="<?php echo $this->webroot; ?>img/banner3.jpg" alt="Third slide">
	          <div class="container">
	            <div class="carousel-caption">
	            </div>
	          </div>
	        </div>
	        <div class="item">
	          <img src="<?php echo $this->webroot; ?>img/banner4.jpg" alt="Fourth slide">
	          <div class="container">
	            <div class="carousel-caption">
	            </div>
	          </div>
	        </div>
	      </div>
	      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	    </div><!-- /.carousel -->		
	</div>
</div>