<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title>Students</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    </div>
    <?php }elseif(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default ">
                <div class="panel-heading">Posts <a href="<?php echo site_url('student/add/'); ?>" class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="20%">Name</th>
                            <th width="40%">Email</th>
                            <th width="30%">Phone</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <?php
                    foreach($students as $student):
                    ?>
                    <tr>
                    <td><?php echo $student->name; ?></td>
                    <td><?php echo $student->email; ?></td>
                    <td><?php echo $student->phone; ?></td>
                    <td>
                    <a href="<?php echo site_url('students/view/'.$student->id); ?>" class="glyphicon glyphicon-eye-open"></a>
                    <a href="<?php echo site_url('students/edit/'.$student->id); ?>" class="glyphicon glyphicon-edit"></a>
                    <a href="<?php echo site_url('students/delete/'.$student->id); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete?')"></a>
                    </td>
                    </tr>
                    <?php endforeach; ?>

                </table>
            </div>
        </div>
    </div>
</div>

</body>

</html>