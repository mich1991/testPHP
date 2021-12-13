<div class="card border-dark p-5">
    <form action="?page=createuser" method="post" data-action='create'>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingFirstName" name="firstName" placeholder="name@example.com" required> 
            <label for="floatingFirstName">First Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingLastName" name="lastName" placeholder="LastName" required>
            <label for="floatingLastName">Last Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="float" class="form-control" id="floatingHeight" name="height" placeholder="180cm" required>
            <label for="floatingHeight">Height (cm)</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" class="form-control" id="floatingDate" name="birthday" placeholder="Date" required>
            <label for="floatingDate">Birthday</label>
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" value="true" id="flexSwitchMember" name="clubMember">
            <label class="form-check-label" for="flexSwitchMember">Club Member?</label>
        </div>
        <button type="submit" class='btn btn-success mt-3'>Submit</button>
    </form>
</div>

<?php 
var_dump($_POST);
?>