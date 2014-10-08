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
      <div class="panel-heading text-center">
      <h3 class="panel-title text-center">Account Settings</h3>
      </div>

        <div class="col-md-4 col-md-offset-1" style="padding-top: 10px;">
          <div class="panel panel-default">
            <div class="panel-heading text-center">
            <h3 class="panel-title text-center">Profile Picture</h3>
            </div>
            <div class="panel-body">
              <img class="pull-right" src="<?php echo $this->webroot; ?>img/default-img.jpg" width="317px" height="200px">
            </div>
          </div>
        </div>

        <div class="col-md-4 col-md-offset-2" style="padding-top: 10px;">
          <div class="panel panel-default">
            <div class="panel-heading text-center">
            <h3 class="panel-title text-center">Profile Details</h3>
            </div>
            <div class="panel-body">
              <form>
              <input type="text" class="form-control" name="txt1" placeholder="First Name"><br />
              <input type="text" class="form-control" name="txt2" placeholder="Last Name"><br />
              <label>Change Password</label>
                <input type="text" class="form-control" name="txt1" placeholder="Old Password"><br />
                <input type="text" class="form-control" name="txt2" placeholder="New Password"><br />
                <input type="text" class="form-control" name="txt3" placeholder="Confirm Password"><br />
                <label>Change Profile Picture</label>
                <input type="file" class="form-control" name="txt4"><br />
                <input type="submit" class="btn btn-success" value="Update Profile">
              </form>
            </div>
          </div>
        </div>

    </div>
  </div>
</div>