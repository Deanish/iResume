<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */
?>


<div class="row">
  <div class="col-md-9 col-md-offset-1" style="padding-top: 10px">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h3 class="panel-title">Desired Job Details</h3>
      </div>
      <div class="panel-body">
        <div class="col-md-6">
          <?php
           echo $this->Form->create();
           echo $this->Form->input('location', array(
            'class' => 'form-control',
            'options' => $locationOptions,
            'label' => ''
            ));
           echo $this->Form->input('skills', array(
            'class' => 'form-control',
            'placeholder' => 'Key Skills',
            'label' => ''
            ));
           echo $this->Form->input('industry_type', array(
            'class' => 'form-control',
            'options' => $industryOptions,
            'label' => ''
            ));
           echo $this->Form->input('job_type', array(
            'class' => 'form-control',
            'options' => $jobOptions,
            'label' => ''
            ));
           echo $this->Form->input('shift_type', array(
            'class' => 'form-control',
            'options' => $shiftOptions,
            'label' => ''
            ));
            echo "<br />";
            echo $this->Form->submit('Save',array('class' => 'btn btn-success')); 
            echo $this->Form->end();
          ?>
        </div>
        <div class="col-md-6" style="padding-top: 10px;">
          <div class="panel panel-default">
            <div class="panel-heading text-center">
            <h3 class="panel-title text-center">Profile Picture</h3>
            </div>
            <div class="panel-body">
              <img class="pull-right" src="<?php echo $this->webroot; ?>img/default-img.jpg" width="345px" height="200px">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>