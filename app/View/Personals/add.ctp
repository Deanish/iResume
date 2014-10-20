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
      <h3 class="panel-title">Personal Details</h3>
      </div>
      <div class="panel-body">
        <div class="col-md-6">
          <?php
          echo $this->Form->create();

          echo $this->Form->input('user_id',array(
            'class' => "form-control",
            // 'disabled',
            'label' => ''
            ));          
          echo $this->Form->input('mobile',array(
            'type' => 'text',
            'class' => 'form-control',
            'placeholder' => 'Mobile Number',
            'maxlength' => '10',
            'label' => ''
            ));
          echo $this->Form->input('nationality', array(
            'class' => 'form-control', 
            'options' => $nationalityOptions, 
            'label' => ''
            ));
          echo $this->Form->input('location', array(
            'class' => 'form-control', 
            'options' => $locationOptions, 
            'label' => ''
            ));
          echo $this->Form->input('gender', array(
            'class' => 'form-control',
            'options' => $genderOptions,
            'label' => ''
            ));
          echo $this->Form->label('Date of Birth : ');
          echo $this->Form->date('dob', array(
            'class' => 'form-control',
            'label' => ''
            ));
          echo $this->Form->input('resume',array(
            'type' => 'file',
            'class' => 'form-control',
            'label' => 'Upload Resume'
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