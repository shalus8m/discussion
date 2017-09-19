<!-- /.Section -->
<?php
// print_r($data);
for ($i=0 ;$i<count($data);$i++) {
  ?>
<div class="row">
  <div class="col-md-9 well comments">
  <div class = "row name">
  <div class="col-md-4">
    <strong><?php echo $data[$i]['name'];?></strong>
  </div>
  <div class="col-md-2 time">
  <?php echo $data[$i]['time'];?>
  </div>
  </div>
  <div class = "row">
  <div class="col-md-9">
    <?php echo $data[$i]['comment'];?>
  </div>
  </div>
  </div>
  <div class="col-md-1">
  </div>
</div>
<?php
}
?>

<div class="row">
  <!-- <form action="<?php base_url() ?>discuss/insert_comment" method="post"> -->
<?php echo form_open('discuss/insert_comment'); ?>
  <div class="col-md-2">
  </div>
  <div class="col-md-7">
    <label for="comment">Comment:</label>
    <textarea class="form-control" rows="3" id="comment" name="comment"></textarea>
  </div>
  <div class="col-md-2">
  </div>
</div>


<div class="row">
  <div class="col-md-6">
  </div>
  <div class="col-md-4 nameClass" >
    <div class="col-md-7">
      <input class="form-control" id="name"  name= "name" type="text">
    </div>
    <div class="col-md-5">
      <button type="submit" class="btn btn-success" >Comment</button>
    </div>
    <div class="col-md-2">
    </div>
  </div>
<?php echo form_close();?>
</div>
