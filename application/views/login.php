<br>
<div class="row">
	<div class="large-11 large-centered columns">
		<img src="<?php echo base_url()?>images/a.jpg" height="50" width="150">
		<h1>DEPARTMENT OF SCIENCE AND TECHNOLOGY</h1>
		<h3 class="subheader">Scholarship system</h3>
	</div>
<br>
<div class="row">
	<div class="small-3 small-centered columns">
		<h3>Log-in</h3>
	</div>
</div>
<form action="logging-in" method="POST" role="form">
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Username</label>
				</div>
				<div class="small-9 columns">
					<input type="text" id="username" name="username" placeholder="Username"/>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Password</label>
				</div>
				<div class="small-9 columns">
					<input type="password" id="password" name="password" placeholder="Password"/>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-3 small-centered columns">
			<button type="submit" class="button round">Log-in</button>
		</div>
	</div>
</form>
<div class="row">
	<div class="medium-6 medium-pull columns">
		<h5>Don't have an account? <a href="sign-up">Sign up</a> here!</h5>
	</div>
</div>
