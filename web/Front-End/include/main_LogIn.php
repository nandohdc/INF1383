<!-- main.php -->
<div class="container">
	<form action="" method="" class="form-signin">
		<h2 class="form-signin-heading">Área Restrita - RESPUC</h2>
		<label for="login" class="sr-only">Email address</label>
        <input type="txt" name="logintxt" id="login" class="form-control" placeholder="Email address" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="passwordtxt" id="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Lembrar-me
          </label>
        </div>
        <div id="divRetornoMsg">
           <?php 
              // if(isset($_GET['msg'])) {
             //     echo str_replace('-', ' ', $_GET['msg']);
             // }
             echo str_replace('-', ' ', @$_GET['msg']); 
              ?>                    
        </div>
        <button class="btn btn-md btn-primary btn-block" type="submit">Sign in</button>
      </form>
</div>