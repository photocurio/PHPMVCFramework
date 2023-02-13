<?php

/**
 * The registration form.
 */

?>
<h1>Register</h1>
<div class="row">
    <div class="col-md-4">
        <form action="" method="post" class="mb-4">
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input name="firname" type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input name="lastname" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input name="email" type="email" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input name="password" type="password" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Password Confirm</label>
                <input name="password-confirm" type="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
