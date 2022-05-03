<?php require 'layout/header.php';?>

<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <h1>Add your pet!</h1>

            <form action="pets_neww.php" method="post">
            <div class="form-group">
                <label for="pet-name" class="control-label">Pet Name</label>
                <input type="text" name="name" id="pet-name" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="pet-breed" class="control-label">Pet Breed</label>
                <input type="text" name="breed" id="pet-breed" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="pet-weight" class="control-label">Pet Weight (lbs)</label>
                <input type="text" name="weight" id="pet-weight" class="form-control"/>
                <textarea></textarea>
            </div>
            <div class="form-group">
                <label for="pet-bio" class="control-label">Pet Bio</label>
                <input type="text" name="bio" id="pet-bio" class="form-control"/>
            </div>

                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-heart"></span>
                        Add
                </button>
            </form>
        </div>
    </div>
</div>

<?php require 'layout/footer.php'; ?>