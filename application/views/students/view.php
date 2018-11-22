<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Student Details <a href="<?php echo site_url('students/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>Name:</label>
                    <p><?php echo !empty($student['name'])?$student['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>Email : </label>
                    <p><?php echo !empty($student['email'])?$student['email']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>Phone:</label>
                    <p><?php echo !empty($student['phone'])?$student['phone']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>