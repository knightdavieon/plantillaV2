<div class="modal fade" id="loginpop" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form>
    <div class="modal-content">
      <div class="modal-header custom-modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>

      <div class="modal-body">

        <hr style="background-color: black;" />
        <div class="form-group">
          <div class="row" style="text-align: center;">
            <div class="col-md-5"><hr/></div>
            <div class="col-md-2"><label>Username</label></div>
            <div class="col-md-5"><hr/></div>
          </div>
          <input type="text" class="form-control" name="loginusername" placeholder="username" >
        </div>
        <div class="form-group">
           <div class="row" style="text-align: center;">
            <div class="col-md-5"><hr/></div>
            <div class="col-md-2"><label>Password</label></div>
            <div class="col-md-5"><hr/></div>
          </div>
          <input type="password" class="form-control" name="loginpassword" placeholder="password" >
        </div>
        <hr style="background-color: black;"  />
        <div class="form-group" style="text-align: right;">
          <span style="color:#0375B4;" class="forgotpass">forgot?</span>
        </div>
        <hr />
        <div class="form-group">
          <button type="submit" class="btn btn-block btn-md custombg-color-blue" name="submit">Login</button>
        </div>
      </div>
      <div class="modal-footer custom-modal-header">
      </div>
    </div>
    </form>
  </div>
</div>

<div class="modal fade" id="signuppop" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form>
    <div class="modal-content">
      <div class="modal-header custom-modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>

      <div class="modal-body">

        <hr style="background-color: black;" />
        <div class="form-group">
          <div class="row" style="text-align: center;">
            <div class="col-md-5"><hr/></div>
            <div class="col-md-2"><label>Username</label></div>
            <div class="col-md-5"><hr/></div>
          </div>
          <input type="text" class="form-control" name="signupusername" placeholder="username" >
        </div>
        <div class="form-group">
           <div class="row" style="text-align: center;">
            <div class="col-md-5"><hr/></div>
            <div class="col-md-2"><label>Password</label></div>
            <div class="col-md-5"><hr/></div>
          </div>
          <input type="password" class="form-control" name="signuppassword" placeholder="password" >
        </div>
        <div class="form-group">
           <div class="row" style="text-align: center;">
            <div class="col-md-5"><hr/></div>
            <div class="col-md-2"><label>Retype-Password</label></div>
            <div class="col-md-5"><hr/></div>
          </div>
          <input type="password" class="form-control" name="signuprepassword" placeholder="re - password" >
        </div>
        <hr style="background-color: black;"  />
        <hr />
        <div class="form-group">
          <button type="submit" class="btn btn-block btn-md custombg-color-blue" name="submit">Sign Up</button>
        </div>
      </div>
      <div class="modal-footer custom-modal-header">
      </div>
    </div>
    </form>
  </div>
</div>