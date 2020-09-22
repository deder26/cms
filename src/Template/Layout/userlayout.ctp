<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <?= $this->Html->css('bootstrap.min.css')?>
  <!-- <?= $this->Html->script('jquery.min.js')?> -->
</head>
<body>

<script type="text/javascript">
  function ajaxLoad(pageurl='/',data=''){
   $.ajax({
                type:"POST",
                url: pageurl,
                data: data,
                dataType: 'html',
                success: function(data){
                     var obj = $(data);
                    
                     $(".ajax-content").empty();
                    $( ".ajax-content" ).html(obj.find(".loadContent").html());
                },
                error: function (data) {
                    alert('error' + data.statusText);
                }
            });
  }



</script>

<div class="container">
    <button class="btn btn-secondary" onclick="ajaxLoad('<?= $this->Url->build(["controller"=>"user","action"=>"index"])?>')">Top</button>
<div class="ajax-content">
  <?= $this->fetch('content')?>
</div>
</div>

</body>
</html>
