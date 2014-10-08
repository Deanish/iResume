
<div class="row">
	<div class="col-md-4" style="padding-top: 10px;">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title">Recruiter Register</h3>
			</div>
			<div style="padding: 10px;">
				<?php

					echo $this->Form->create();
					echo $this->Form->input('firstname', array(
						'class' => 'form-control',
						'placeholder' => 'First Name',
						'label' => ''
						));
					echo $this->Form->input('lastname', array(
						'class' => 'form-control',
						'placeholder' => 'Last Name',
						'label' => ''
						));
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
					echo $this->Form->submit('Register',array('class' => 'btn btn-primary'));
					echo $this->Form->end();

				?>
			</div>
		</div>
	</div>
</div>