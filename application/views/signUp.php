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
		<h3>Sign-up</h3>
	</div>
</div>
<form action="insert" method="POST" data-abide>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Username</label>
				</div>
				<div class="small-9 columns">
					<input type="text" id="username" name="username" placeholder="Username" required pattern="[a-zA-Z]+"/>
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
					<input type="password" id="password" name="password" placeholder="Password" required/>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Confirm Password</label>
				</div>
				<div class="small-9 columns">
					<input type="password" id="Conpassword" name="Conpassword" placeholder="Confirm Password" required data-equalto="password" onfocusout="sample()"/>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-3 small-centered columns">
			<button type="submit" class="button round">Sign ug</button>
		</div>
	</div>
</form>

<script>
	function sample(){
		var x = document.getElementById('Conpassword').value;
		var y = document.getElementById('password').value;
		if(y != x){
			alert('password must be matched');
		}
	}
</script>