


<div class="loadContent">

  <h2 align="center">Insert User Information</h2>
    <form name="saveForm" id="saveForm" method="post">
    <div class="form-group row">
      <label for="Username" class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="name" id="name" value="" placeholder="username">
      </div>
    </div>
    <div class="form-group row">
      <label for="Email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="email" id="email" placeholder="email" value="">
      </div>
    </div>
    <div class="form-group row">
      <label for="Address" class="col-sm-2 col-form-label">Address</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="address" id="address" value="" placeholder="address">
      </div>
    </div>
    <div class="form-group row">
      <label for="Phone" class="col-sm-2 col-form-label">Phone</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="phn" id="phn" placeholder="phone">
      </div>
    </div>

    <div class="form-group row">
     <button type="button" class="btn btn-success" onclick="ajaxLoad('<?= $this->Url->build(["action"=>"save"])?>',$('#saveForm').serialize())" > Submit</button> 
    </div>

  </form>
</div>