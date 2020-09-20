<div class="container">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h2 align="center">User Information</h2>
         <?= $this->Html->link(
            "Insert",
            "/user/insert",
            [
              "class"=>"btn btn-info float-right",

            ]
          )?>
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
                <?= $this->Html->link(
                    "Update",
                    "/user/edit/".$user->seq,
                    [
                      "class"=>"btn btn-success"
                    ]
                  );?>
                  <?= $this->Html->link(
                    "Delete",
                    "/user/delete/".$user->seq,
                    [
                      "class"=>"btn btn-danger"
                    ]
                  );?>
                
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