<?php
include "core.php";
head();

if (isset($_POST['username'])) {
    $_SESSION['username'] = addslashes($_POST['username']);
} else {
    $_SESSION['username'] = '';
}
if (isset($_POST['password'])) {
    $_SESSION['password'] = $_POST['password'];
} else {
    $_SESSION['password'] = '';
}
?>
            <center><h6>Please provide the following information. Don’t worry, you can always change these settings later.</h6></center><hr />
            <form method="post" action="" class="form-horizontal row-border">
                        
				<div class="form-group row">
					<p class="col-sm-3">Username: </p>
					<div class="col-sm-8">
					<div class="input-group">
					    <div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fas fa-user"></i>
							</span>
						</div>
						<input type="text" name="username" class="form-control" placeholder="admin" value="<?php
echo $_SESSION['username'];
?>" required>
				    </div>
					</div>
				</div>
				<div class="form-group row">
					<p class="col-sm-3">Password: </p>
					<div class="col-sm-8">
					<div class="input-group">
					    <div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fas fa-key"></i>
							</span>
					    </div>
						<input type="text" name="password" class="form-control" placeholder="admin" value="<?php
echo $_SESSION['password'];
?>" required>
					</div>
					</div>
				</div>
				
<?php
if (isset($_POST['submit'])) {
    $username = addslashes($_POST['username']);
    $password = $_POST['password'];
    
    echo '<meta http-equiv="refresh" content="0; url=done.php" />';
}
?>
					<br /><div class="row">
	                    <div class="col-md-6">
							<a href="index.php" class="btn-secondary btn btn-block"><i class="fas fa-arrow-left"></i> Back</a>
						</div>
						<div class="col-md-6">
							<input class="btn-primary btn btn-block" type="submit" name="submit" value="Next" />
						</div>
					</div>
				
				</form>
				</div>
<?php
footer();
?>