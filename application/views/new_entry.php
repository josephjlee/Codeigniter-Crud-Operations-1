<?php
$this->load->helper('url');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Codeigniter Mysql CRUD Operations</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
<div class="container">

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Item</h2>
        </div>
        <br><br>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url();?>"> Back</a>
        </div>
    </div>
</div>


<form method="post" action="<?php echo base_url('crudopsCreate');?>">
    <?php


    if ($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }


    ?>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Age:</strong>
                <input type="number" name="age" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>


</form>

  </div>
 </body>
</html>