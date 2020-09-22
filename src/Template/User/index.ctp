

<div class="loadContent">
  
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h2 align="center">User Information</h2>
          <button class="btn btn-info float-right" onclick="ajaxLoad('<?= $this->Url->build(["action"=>"insert"])?>')">Insert</button>
          <table class="table table-hover" >
          
            <thead>
           
              <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Adress</th>
                <th>Phone</th>
                <th><th>
              </tr>
            </thead>
            <?php 
              foreach($users as $key=>$user){
            ?>
            <tbody>
              <tr>
                <td><?= $user->name?></td>
                <td><?= $user->email?></td>
                <td><?= $user->address?></td>
                <td><?= $user->phone?></td>
                <td>
                <button class="btn btn-success" onclick="ajaxLoad('<?= $this->Url->build(["action"=>"edit"])?>'+'/'+'<?= $user->seq?>')">Update</button>
                 
                <button class="btn btn-danger" onclick="ajaxLoad('<?= $this->Url->build(["action"=>"delete"])?>'+'/'+'<?= $user->seq?>')">Delete</button>
                  
                </td>
              </tr>
              <?php
                }
              ?>
             
            </tbody>
          </table>
        </div>
      </div>
    
</div>