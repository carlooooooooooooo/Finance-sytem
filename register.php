<?php
include "topmenu.php";
?>

<div class="container">
    <h7>Reservation<h7>
        <form action=""method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input
                type="text"
                class="form-control"
                name="name"
                id="name"
                placeholder="Enter Name"
                />
</div>
<div class="mb-3">
                <label for="name" class="form-label">Email</label>
                <input
                type="text"
                class="form-control"
                name="email"
                id="name"
                placeholder="Enter Email"
                 />
</div>
<div class="mb-3">
                <label for="name" class="form-label">Password</label>
                <input
                type="password"
                class="form-control"
                name="pwd"
                id="pwd"
                placeholder="Enter password"

                />


</div>
<div class="mb-3">
                <label for="name" class="form-label">ComfirmPassword</label>
                <input
                type="password"
                class="form-control"
                name="cpsw"
                id="cpsw"
                placeholder="Confirm password"
                />
          </div>

          <div class="form-check"
                class="form-check-input"
                name=""
                 type="checkbox"
                 value="checkedvalue"
                aria-label="text for screen reader"
         
        >
        </div>
        <button
            type="submit"
            class="btn btn-primary"
         Register
        >
         submit
       </button>
   
   
    </form>
    </div>
</body>
<html>