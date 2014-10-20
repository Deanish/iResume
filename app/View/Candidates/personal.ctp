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
          <form>
            <input type="text" class="form-control" name="txt3" placeholder="Contact Number"><br />
            <select class="form-control">
              <option> - Select Nationality - </option>
              <option> India </option>
              <option> Others </option>
            </select><br />
            <select class="form-control">
              <option> - Select Currrent Location - </option>
              <option> Bangalore </option>
              <option> Delhi </option>
              <option> Mumbai </option>
              <option> Kolkata </option>
              <option> Chennai </option>
              <option> Others </option>
            </select><br />
            <b>Gender : </b><input type="radio" name="gender">Male &nbsp
            <input type="radio" name="gender">Female <br/><br />
            <b>Date of Birth : </b><input type="date" class="form-control" name="txt4"><br />
            <label>Upload Resume : </label>
            <input type="file" class="form-control"><br />
            <input type="submit" class="btn btn-success" value="Save">
          </form>
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