
<h2>welcome you are in User dashoard view</h2>
<?php if (Session::get('user_role') == 1):
    require 'views/dashboard/add_user.php';
    else :
  ?>
  <h4>you login as User </h4>
<?php endif;?>
