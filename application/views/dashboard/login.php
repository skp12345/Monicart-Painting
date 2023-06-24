<?php 
if (isset($_SESSION)) {
    session_destroy(); 
    session_start();
    $_SESSION['admin_email']='';
    }
?>
    <div class="container mt-5">
  <h2 class="text-center">Admin Login Here</h2>
     
<div class="row">
  <div class="col-md-6 mt-3">
    <img class="login_img" src="https://cdn.pixabay.com/photo/2015/08/28/11/37/painting-911804_960_720.jpg" alt="">
  </div>

  <div class="col-md-6 mt-3">
    <div class="card mylogin">
      <form action="<?php base_url()?>login_process" method="post">
        <div class="mb-3 mt-4">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="admin_email" aria-describedby="emailHelp" required>
          <div id="email" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="admin_pass" required>
        </div>
        <button type="submit" class="w-100 btn btn-primary mt-2 mb-3">Submit</button>
      </form>
    </div>
  </div>
</div>

</div>
   