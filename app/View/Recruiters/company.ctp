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

      <form>

        <div class="col-md-6 col-md-offset-3" style="padding-top: 10px;">
          <div class="panel panel-default">
            <div class="panel-heading">
            <h3 class="panel-title text-center">Recruiter Details</h3>
            </div>
            <div style="padding: 10px;">
              <input type="text" class="form-control" name="txt8" placeholder="Company Nmae"><br />
              <textarea class="form-control" name="txt9" placeholder="Company Profile" rows="3"></textarea><br />
              <label>Upload Company Logo</label><input type="file" class="form-control" name="txt10"><br />
              <input type="text" class="form-control" name="txt11" placeholder="Company Website URL"><br />
              <input type="text" class="form-control" name="txt12" placeholder="Contact Person Name"><br />
              <input type="text" class="form-control" name="txt13" placeholder="Contact Number"><br />
              <input type="submit" class="btn btn-success" value="Submit to Post Job"><br />
            </div>
          </div>
        </div>

      </form>

    </div>
  </div>
</div>