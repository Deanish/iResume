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
            <h3 class="panel-title text-center">Job Details</h3>
            </div>
            <div style="padding: 10px;">
              <?php

                AuthComponent::user('id');

                echo $this->Form->create();
                $userId = $this->Auth->user('id');
                echo $userId;
                echo $this->Form->input('title', array(
                  'class' => 'form-control',
                  'placeholder' => 'Job Title / Designation',
                  'label' => ''
                  ));
                echo $this->Form->input('skills', array(
                  'class' => 'form-control',
                  'placeholder' => 'Skills Required',
                  'label' => ''
                  ));
                echo $this->Form->input('qualification', array(
                  'class' => 'form-control',
                  'placeholder' => 'Required Qualification',
                  'label' => ''
                  ));
                echo $this->Form->input('vacancies', array(
                  'class' => 'form-control',
                  'placeholder' => 'Number of vacancies',
                  'label' => ''
                  ));
                echo $this->Form->input('description', array(
                  'class' => 'form-control',
                  'placeholder' => 'Job Description',
                  'type' => 'textarea',
                  'label' => ''
                  ));
                echo $this->Form->input('experience', array(
                  'class' => 'form-control', 
                  'options' => $experienceOptions, 
                  'label' => ''
                  ));
                echo $this->Form->input('salary', array(
                  'class' => 'form-control',
                  'placeholder' => 'CTC / Salary',
                  'label' => ''
                  ));
                echo $this->Form->input('location', array(
                  'class' => 'form-control', 
                  'options' => $locationOptions, 
                  'label' => ''
                  ));
                echo $this->Form->input('industry_type', array(
                  'class' => 'form-control', 
                  'options' => $industryOptions, 
                  'label' => ''
                  ));
                echo "<br />";
                echo $this->Form->submit('Next',array('class' => 'btn btn-success')); 
                echo $this->Form->end();
              ?>
            </div>
          </div>
        </div>

    </div>
  </div>
</div>