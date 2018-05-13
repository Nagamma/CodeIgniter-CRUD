<?php include('header.php');?>



<div class="container">
  <h2>Vertical (basic) form</h2>
  <?php if(isset($msg)){echo $msg;}?>

    <?php echo form_open('StudentCtrl/save',['class'=>'form-horizontal']);?>
    <div class="row">
    <div class="col-sm-6">
    <div class="form-group">
      <label for="email"class="col-sm-4" >Name:</label>
      <!--<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">-->
      <div class="col-sm-6">
      <?php  echo form_input(['name'=>'name','class'=>'form-control','placeholder'=>'Enter Student Name',
      'value'=>set_value('name')]); ?>
    </div>
  </div>
</div>
    <div class="col-sm-6">
  <?php echo form_error('name');?>
    </div>
  </div>
  <div class="row">
  <div class="col-sm-6">
    <div class="form-group">
      <label for="pwd" class="col-sm-4" >Marks:</label>
    <!--  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">-->
    <div class="col-sm-6">
      <?php  echo form_input(['name'=>'marks','class'=>'form-control','placeholder'=>'Enter Marks',
      'value'=>set_value('marks')]); ?>
    </div>
    </div>
  </div>
  <div class="col-sm-6">
    <?php echo form_error('marks');?>

  </div>
  </div>


    <div class="row">
    <div class="col-sm-6">
    <div class="form-group">
      <label for="pwd" class="col-sm-4">Grade:</label>
    <!--  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">-->
    <div class="col-sm-6">
      <?php  echo form_input(['name'=>'grade','class'=>'form-control','placeholder'=>'Enter Grade',
      'value'=>set_value('grade')]); ?>
    </div>
    </div>
  </div>
    <div class="col-sm-6">
      <?php echo form_error('grade');?>

    </div>
  </div>
<?php echo form_submit(['value'=>'submit','class'=>'btn btn-primary']);?>
<?php echo form_reset(['value'=>'reset','class'=>'btn btn-default']);?>

  <?php echo form_close();?>

</div>



<?php include('footer.php');?>
