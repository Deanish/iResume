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
      <h3 class="panel-title">Professional Details</h3>
      </div>
      <div class="panel-body">
        <div class="col-md-6">
          <?php
            echo $this->Form->create();
            echo $this->Form->input('status', array(
              'class' => 'form-control',
              'options' => $statusOptions,
              'label' => ''
              ));
            echo "<br />";
            echo $this->Form->label('Experience :');
            echo $this->Form->input('years', array(
              'class' => 'form-control',
              'options' => $yearsOptions,
              'label' => false
              ));
            echo $this->Form->input('months', array(
              'class' => 'form-control',
              'options' => $monthsOptions,
              'label' => false
              ));
            echo $this->Form->input('salary',array(
              'class' => 'form-control',
              'placeholder' => 'Current Salary / CTC',
              'label' => ''
              ));
            echo "<br />";
            echo $this->Form->label('Job Details : ');
            echo $this->Form->input('company',array(
              'class' => 'form-control',
              'placeholder' => 'Comapny Name',
              'label' => false
              ));
            echo $this->Form->input('designation',array(
              'class' => 'form-control',
              'placeholder' => 'Designation',
              'label' => ''
              ));
            echo $this->Form->input('skills',array(
              'class' => 'form-control',
              'placeholder' => 'Key Skills',
              'label' => ''
              ));
            echo $this->Form->input('notice',array(
              'class' => 'form-control',
              'placeholder' => 'Notice Period',
              'label' => ''
              ));
            echo $this->Form->input('prev_companies',array(
              'type' => 'textarea',
              'class' => 'form-control',
              'placeholder' => 'Other Previous Companies Details',
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
              <img class="pull-right" src="<?php echo$this->webroot; ?>img/default-img.jpg" width="345px" height="200px">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>