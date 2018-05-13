<?php include('header.php');?>
<div class="container">
  <?php if($error=$this->session->flashdata('response')); ?>
  <div class="alert alert-dismissible alert-success">
<?php echo $error;?>
    </div>



  <div class="row">
    <div class="col-lg-4">
  <td><?php echo anchor('StudentCtrl/create','Create Student Record',['class'=>'btn btn-primary']);?></td>
</div>
</div>
<table class="table">

<tr><th>SI. No.</th>
  <th>Name</th>
  <th>Marks</th>
  <th>Grade</th>
  <th>Edit</th>
  <th>Delete</th>

</tr>
<tbody>
<!-- <?php if(count($records));?>-->
  <?php foreach($records as $record) {?>
<tr>
<td><?php echo $record->id; ?></td>
<td><?php echo $record->name; ?></td>
<td><?php echo $record->marks; ?></td>
<td><?php echo $record->grade; ?></td>
<td><?php echo anchor('StudentCtrl/edit/'.$record->id,'Update',['class'=>'btn btn-success']);?></td>
<td><?php echo anchor('StudentCtrl/delete/'.$record->id,'Delete',['class'=>'btn btn-danger']);?></td>

</tr>
<?php } ?>
</tbody>
</table>
</div>
<?php include('footer.php');?>
