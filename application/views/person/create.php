<div class="text-center mt-4 mb-4">
    <h2>Create Person</h2>
</div>
<div class="mb-4">
    <a href="<?php echo base_url() ?>./person" class="btn btn-info btn-sm">Show All</a>
</div>
<form class="row g-3 col-8" action="<?php echo base_url('person/store'); ?>" method="POST">
    <div class="col-md-6">
        <label for="validationDefault01" class="form-label">First Name</label>
        <input type="text" class="form-control" id="validationDefault01" name="fname" value="<?php echo set_value('fname'); ?>" />
        <?php if (form_error('fname')) {
                            echo "<span style='color:red'>" . form_error('fname') . "</span>";
                        }
                        ?>
    </div>
    <div class="col-md-6">
        <label for="validationDefault02" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="validationDefault02" name="lname" value="<?php echo set_value('lname'); ?>">
        <?php if (form_error('lname')) {
                            echo "<span style='color:red'>" . form_error('lname') . "</span>";
                        }
                        ?>
    </div>


    <div class="col-md-6">
        <label for="validationDefault02" class="form-label">Address</label>
        <input type="text" class="form-control" id="validationDefault02" name="address" value="<?php echo set_value('address'); ?>" />
        <?php if (form_error('address')) {
                            echo "<span style='color:red'>" . form_error('address') . "</span>";
                        }
                        ?>
    </div>

    <div class="col-md-6">
        <label for="validationDefault02" class="form-label">department</label>
        <select name="department" id="dep" class="form-control">
            <option value="HR">HR</option>
            <option value="IT">IT</option>
            <option value="BIM">BIM</option>
        </select>
        <?php if (form_error('department')) {
                            echo "<span style='color:red'>" . form_error('department') . "</span>";
                        }
                        ?>
    </div>

    <div class="col-md-6">
        <label for="validationDefault01" class="form-label">Date Of Birth</label>
        <input type="date" class="form-control" id="validationDefault01" name="dob" value="<?php echo set_value('dob'); ?>" />
        <?php if (form_error('dob')) {
                            echo "<span style='color:red'>" . form_error('dob') . "</span>";
                        }
                        ?>
    </div>

    <div class="col-md-4">
        <label for="validationDefault01" class="form-label">Gender</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="Male" checked>
            
            <label class="form-check-label" for="exampleRadios1">
                Male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="Female" />
            
            <label class="form-check-label" for="exampleRadios1">
                Female
            </label>
        </div>
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</form>