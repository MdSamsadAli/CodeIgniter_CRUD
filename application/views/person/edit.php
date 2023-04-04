<div class="text-center mt-4 mb-4">
    <h2>Update Person</h2>
</div>
<div class="mb-4">
    <a href="<?php echo base_url() ?>./person" class="btn btn-info btn-sm">Show All</a>
</div>
<form class="row g-3 col-8" action="<?php echo base_url(); ?>person/update/<?php echo $person->id ?> " method="POST">
    <input type="hidden" value="<?php echo $person->id ?>" name="id">
    <div class="col-md-6">
        <label for="validationDefault01" class="form-label">First Name</label>
        <input type="text" class="form-control" id="validationDefault01" name="fname" required value="<?php echo $person->firstName ?>">
    </div>
    <div class="col-md-6">
        <label for="validationDefault02" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="validationDefault02" name="lname" required value="<?php echo $person->lastName ?>">
    </div>


    <div class="col-md-6">
        <label for="validationDefault02" class="form-label">Address</label>
        <input type="text" class="form-control" id="validationDefault02" name="address" required value="<?php echo $person->address ?>">
    </div>

    <div class="col-md-6">
        <label for="validationDefault01" class="form-label">Date Of Birth</label>
        <input type="date" class="form-control" id="validationDefault01" name="dob" required value="<?php echo $person->dob ?>">
    </div>

    <div class="col-md-4">
        <label for="validationDefault01" class="form-label">Gender</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="male" <?php if ($person->gender == "male") echo "checked"; ?> />
            <label class="form-check-label" for="exampleRadios1">
                Male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="female" <?php if ($person->gender == "female") echo "checked" ?> />
            <label class="form-check-label" for="exampleRadios1">
                Female
            </label>
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationDefault02" class="form-label">Department</label>
        <select name="department" selected id="dep" class="form-control" />
            <option selected><?php echo $person->department; ?></option>
            <option value="IT">IT</option>
            <option value="HR">HR</option>
            <option value="BIM">BIM</option>
        </select>
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</form>