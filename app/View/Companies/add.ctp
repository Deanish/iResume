<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */
?>


<div class="row">
  <div class="col-md-12" style="padding-top: 10px;">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h3 class="panel-title text-center">Job Post Details</h3>
      </div>
        <div class="col-md-6 col-md-offset-3" style="padding-top: 10px;">
          <div class="panel panel-default">
            <div class="panel-heading">
            <h3 class="panel-title text-center">Recruiter Details</h3>
            </div>
            <div style="padding: 10px;">
              <?php
                echo $this->Form->create();
                echo $this->Form->input('name',array(
                  'class' => 'form-control',
                  'placeholder' => 'Company Name',
                  'label' => ''
                  ));
                echo $this->Form->input('profile',array(
                  'type' => 'textarea',
                  'class' => 'form-control',
                  'placeholder' => 'Company Profile',
                  'label' => ''
                  ));
                echo $this->Form->input('logo',array(
                  'type' => 'file',
                  'class' => 'form-control',
                  'label' => 'Upload Company Logo'
                  ));
                echo $this->Form->input('url',array(
                  'class' => 'form-control',
                  'placeholder' => 'Company Website URL',
                  'label' => ''
                  ));
                echo $this->Form->input('person',array(
                  'class' => 'form-control',
                  'placeholder' => 'Contact Person',
                  'label' => ''
                  ));
                echo $this->Form->input('contact',array(
                  'type' => 'text',
                  'class' => 'form-control',
                  'placeholder' => 'Contact Number',
                  'label' => ''
                  ));
                echo "<br />";
                echo $this->Form->submit('Submit to Post Job',array('class' => 'btn btn-success')); 
                echo $this->Form->end();

              ?>

            </div>
          </div>
        </div>
    </div>
  </div>
</div>