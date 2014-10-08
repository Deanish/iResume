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
      <h3 class="panel-title">Educational Details</h3>
      </div>
      <div class="panel-body">
        <div class="col-md-6">
          <form>
            <select class="form-control">
              <option> - Select Qualification - </option>
              <option> BE </option>
              <option> BSc </option>
              <option> BCom </option>
              <option> BCA </option>
              <option> MBA </option>
              <option> MCA </option>
              <option> Others </option>
            </select><br />
            <select class="form-control">
              <option> - Select Specialization - </option>
              <option> Computer Science </option>
              <option> Electrical </option>
              <option> Electronics </option>
              <option> Mechanical </option>
              <option> Finance </option>
              <option> Others </option>
            </select><br />
            <input type="text" class="form-control" name="txt1" placeholder="Institute Name"><br />
            <input type="text" class="form-control" name="txt2" placeholder="University"><br />   
            <input type="text" class="form-control" name="txt3" placeholder="Grade / Marks"><br />
            <b>Year of passout : </b><input type="date" class="form-control" name="txt4"><br />  
            <b>Course Type : </b><br />
            <input type="radio" name="course">Full Time &nbsp
            <input type="radio" name="course">Part Time &nbsp
            <input type="radio" name="course">Distant Education <br/><br />
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