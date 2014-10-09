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
          <form>
            <select class="form-control">
              <option> - Employee Status - </option>
              <option> Fresher </option>
              <option> Experienced </option>
            </select><br />
            <label>Experience : </label>
            <select class="form-control ">
              <option> - Years - </option>
              <option> 0 </option>
              <option> 1 </option>
              <option> 2 </option>
              <option> 3 </option>
              <option> 4 </option>
              <option> 5 </option>
              <option> 6 </option>
              <option> 7 </option>
              <option> 8 </option>
              <option> 9 </option>
              <option> 10 </option>
              <option> > 10 </option>
            </select>
            <select class="form-control">
              <option> - Months - </option>
              <option> 0 </option>
              <option> 1 </option>
              <option> 2 </option>
              <option> 3 </option>
              <option> 4 </option>
              <option> 5 </option>
              <option> 6 </option>
              <option> 7 </option>
              <option> 8 </option>
              <option> 9 </option>
              <option> 10 </option>
              <option> 11 </option>
              <option> 12 </option>
            </select><br />
            <input type="text" class="form-control" name="txt1" placeholder="Current Salary"><br />
            <label>Job Details : </label>  
            <input type="text" class="form-control" name="txt3" placeholder="Comapny Name"><br /> 
            <input type="text" class="form-control" name="txt4" placeholder="Designation"><br />
            <input type="text" class="form-control" name="txt5" placeholder="Key Skills"><br />   
            <input type="text" class="form-control" name="txt6" placeholder="Notice Period"><br /> 
            <input type="text" class="form-control" name="txt6" placeholder="Other Previous Companies"><br /> 
            <input type="submit" class="btn btn-success" value="Save"> 
          </form>
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