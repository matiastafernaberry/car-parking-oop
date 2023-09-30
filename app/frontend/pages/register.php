
<div class="container" style="padding-top: 5%; padding-bottom: 5%;">
<h2>Register Form</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="name">Name :</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo escape(Input::get('name')); ?>">
    </div>
    <div class="form-group">
      <label for="username">Username :</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" value="<?php echo escape(Input::get('username')); ?>">
    </div>
    <div class="form-group">
      <label for="password">Password :</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
      <label for="password_again">Confirm Passworddd:</label>
      <input type="password" class="form-control" id="password_again" placeholder="Confirm your password" name="password_again">
    </div>
    <div class="form-group">
      
      <input type="submit" value="Register me"/>
      <input type="hidden" name="csrf_token" value="<?php echo Token::generate(); ?>">
    </div>
  </form>
</div>
