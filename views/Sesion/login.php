<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-9"></div>
    
    <div class="col-md-8 col-lg-3">
      <div class="login d-flex align-items-center py-2">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-11 mx-auto">
              <h3 class="login-heading mb-4">Administrador</h3>
              <form action="index.php" method="post" name="login">
                <input type="hidden" name="controller" value="Sesion">
                <input type="hidden" name="action" value="checkLogin">
                <div class="form-label-group">
                  <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Email address</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember password</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign in</button>
                <div class="text-center">
                  <a class="small" href="#">Forgot password?</a></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
