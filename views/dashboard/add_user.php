<div style="margin:5%;width:40%;" class="well">
  <form class="form-horizontal"  method="post" action="user/create">

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-5">
          <input type="email" name="new_email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-5">
          <input name="new_username" class="form-control" id="inputEmail3" placeholder="Username">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-5">
          <input type="password" class="form-control" id="inputPassword3" name="new_password" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">role</label>
        <div class="col-sm-5">
          <select name="role">
            <option value="1">Admin </option>
            <option value="0">User</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </div>
    </form>
    </div>
