<?php
    include_once(__DIR__."/../template/head.php");
?>


<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <h2 class="text-center my-3">Sign up</h2>
        <form method="POST">

            <div class="form-outline mb-4">
                <input name="firstname" type="text" id="firstname" class="form-control form-control-lg" 
                placeholder="Your Firstname"/>
            </div>

            <div class="form-outline mb-4">
                <input name="lastname" type="text" id="lastname" class="form-control form-control-lg" 
                placeholder="Your Lastname"/>
            </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input name="email" type="email" id="email" class="form-control form-control-lg" 
            placeholder="Email address"/>
          </div>
            
          <!-- Password input -->
          <div class="form-outline mb-4">
            <input name="password" type="password" id="password" class="form-control form-control-lg" 
            placeholder="Password"/>
          </div>
          <div class="form-outline mb-4">
            <input name="passwordConfirm" type="password" id="passwordConfirm" class="form-control form-control-lg" 
            placeholder="Confirm Password"/>
          </div>

          <!-- Submit button -->
          <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Sign up</button>
          <a href="/login" class="btn btn-secondary btn-lg btn-block">Login</a>

        </form>
      </div>
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
      </div>
    </div>
  </div>
</section>

<?php
    include_once(__DIR__."/../template/footer.php");
?>