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
          <form>
            <select class="form-control">
              <option> - Desired Job Location - </option>
              <option> Bangalore </option>
              <option> Delhi </option>
              <option> Mumbai </option>
              <option> Kolkata </option>
              <option> Chennai </option>
              <option> Others </option>
            </select><br />
            <input type="text" class="form-control" name="txt5" placeholder="Key Skills"><br />
            <select class="form-control">
              <option> - Desired Industry Type - </option>
                <option>Accounts Jobs</option>
                <option>Bank Jobs</option>
                <option>BPO Jobs</option>
                <option>HR Jobs</option>
                <option>IT Jobs</option>
                <option>Others</option>
            </select><br />
            <select class="form-control">
              <option> - Desired Job Type - </option>
              <option> Software </option>
              <option> Support </option>
              <option> Product </option>
              <option> Service </option>
              <option> Others </option>
            </select><br />            
            <b>Shift Type : </b>
            <input type="radio" name="shift">Full Time &nbsp
            <input type="radio" name="shift">Shift Basis &nbsp
            <input type="radio" name="shift">Part Time <br/><br />
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