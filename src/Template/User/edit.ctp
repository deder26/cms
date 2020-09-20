<h2 align="center">Update User Information</h2>
 <?= $this->Form->create(
    null,
    [
      "url"=>["action"=>"update"]
    ]
  )?>
  <div class="form-group row">
    <label for="Username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
       
       <input type="hidden" class="form-control" name="seq" id="seq" value="<?= $user->seq?>">

      <input type="text" class="form-control" name="name" id="name" value="<?= $user->name?>">

    </div>
  </div>
  <div class="form-group row">
    <label for="Email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" id="email" placeholder="email" value="<?= $user->email?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="Address" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="address" id="address" value="<?= $user->address?>" placeholder="address">
    </div>
  </div>
  <div class="form-group row">
    <label for="Phone" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="phn" id="phn" value="<?= $user->phone?>" placeholder="phone">
    </div>
  </div>

  <div class="form-group row">
   <button type="submit" class="btn btn-success" > Update</button> 
  </div>

</form>