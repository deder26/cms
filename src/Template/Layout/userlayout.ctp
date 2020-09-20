<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= $this->Html->css('bootstrap.min.css')?>
</head>
<body>

<div class="container">
    <?= $this->Html->link(
            "Top",
            "/",
            [
              "class"=>"btn btn-secondary float-center",

            ]
          )?>
  <?= $this->fetch('content')?>
</div>

</body>
</html>
