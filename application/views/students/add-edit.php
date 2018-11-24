<div class="container">
    <div class="col-xs-12">
    <?php 
        if(!empty($success_msg)){
            echo '<div class="alert alert-success">'.$success_msg.'</div>';
        }elseif(!empty($error_msg)){
            echo '<div class="alert alert-danger">'.$error_msg.'</div>';
        }
    ?>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Create Student</div>
                <div class="panel-body">
                    <?php echo form_open("student/create"); ?>
                    <div class="form-group">
                            <input type="hidden" class="form-control" name="id" value="<?php if(!$student == "NA") { echo $student['id']; }?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="<?php if(!$student == "NA") {echo $student['name'];} ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="<?php if(!$student == "NA") {echo $student['email'];} ?>"> 
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone" value="<?php if(!$student == "NA") {echo $student['phone'];} ?>">
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="<?php echo $button; ?>"/>
                        <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>