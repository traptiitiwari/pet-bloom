<div
  class="modal fade"
  id="loginModal"
  tabindex="-1"
  role="dialog"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title w-100 text-center" id="exampleModalLabel">
          <i class="fa fa-user"></i> Welcome Admin
        </h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="text-center" method="POST" action="adminlogin_process.php">
          <div class="form-group">
            <label for="exampleInputusername"><strong>Username</strong></label>
            <input
              type="text"
              class="form-control"
              id="exampleInputusername"
              aria-describedby="usernameHelp"
              name="username"
              placeholder="Enter Username"
              onKeyPress="return isNotAlphanumeric(event)"
              required
            />
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><strong>Password</strong></label>
            <input
              type="password"
              class="form-control"
              id="exampleInputPassword1"
              name="password"
              placeholder="Enter Password"
              onKeyPress="return isNotAlphanumeric(event)"
              required
            />
          </div>
          <div class="modal-footer" style="justify-content: center">
            <button type="submit" class="btn btn-success">
              <span class="glyphicon glyphicon-log-in"></span> Login
            </button>
            <button type="reset" class="btn btn-secondary">Clear</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">
              Close
            </button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
