<?php include "db.php";?>
<?php include "functions.php";?>
<?php include "includes/header.php"; ?>
<?php include "includes/footer.php"; ?>
<?php deleteRow(); ?>
 
    <div class="container">
    <div class="col-xs-6">
    <h1 class="text-center">Delete User</h1>
        <form action="login_delete.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password"class="form-control">
            </div>
            <div class="form-group">
            <select name="id" id="">
            <?php
                    
                  showAllData();
                ?>
            </select>
            </div>
            <div class="form-group">
            <input class="btn btn-primary" type="submit" name='submit'  value="DELETE">
            </div>
        </form>
    </div>
    
