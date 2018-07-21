<?php
$this->load->helper('url');
phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
    <name>Edvizo Assignment</name>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
	<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Codeigniter Mysql CRUD Operations</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('crudops/create') ?>"> Create New Item</a>
        </div>
    </div>
</div>


<table class="table table-bordered">


  <thead>
      <tr>
          <th>name</th>
          <th>email</th>
          <th>age</th>
          <th width="220px">Action</th>
      </tr>
  </thead>


  <tbody>
   <?php foreach ($data as $item) { ?>      
      <tr>
          <td><?php echo $item->name; ?></td>
          <td><?php echo $item->email; ?></td>
          <td><?php echo $item->age; ?></td>          
      <td>
        <form method="DELETE" action="<?php echo base_url('crudops/delete/'.$item->id);?>">
         <a class="btn btn-primary" href="<?php echo base_url('crudops/edit/'.$item->id) ?>"> Edit</a>
          <button type="submit" class="btn btn-danger"> Delete</button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>


</table>

 </div>
 </body>
</html>