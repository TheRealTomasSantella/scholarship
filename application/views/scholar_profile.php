<?php 
	if(empty($result)){
		$action = 'inserting';
		$result = null;
		$button = 'Submit';
	}else{
		$action = '/scholarship/editing/'.$result['scholarID'];
		$button = 'Edit';
	}
?>

<div class="row">
	<div class="large-3 columns">
		<img src="<?php echo base_url()?>images/ah.png" alt="" height="50" width="150">
	</div>
</div>
<div class="row">
	<div class="large-4 large-offset-1 columns">
		&nbsp;
		<h2>Scholar Profile	</h2>
	</div>
</div>
<form action="<?php echo $action?>" method="POST" data-abide>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Name</label>
				</div>
				<div class="small-9 columns">
					<input type="text" name="name" id="name" placeholder="Students Name" required value="<?php echo $result['name']?>"/>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Address</label>
				</div>
				<div class="small-9 columns">
					<input type="text" name="address" placeholder="Adress" id="address" required value="<?php echo $result['address']?>"/>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Gender</label>
				</div>
				<div class="small-9 columns">
					<?php $gender = array('Male','Female');?>
					<?php foreach($gender as $value){?>
						<input <?php echo $value==$result['sex']?'checked':'' ?> type="radio" name="gender" value="<?php echo $value?>" required id="gender" />
					<?php echo $value;	}?>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Birthday</label>
				</div>
				<div class="small-5 columns">
					<?php $month = array('January','February','March','April','May','June','July','August','September','October','November','December');?>
					<?php $day = array('01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31',);?>
					<?php $year = array('1995','1996','1997','1998','1999','2000','2001','2002','2003','2004','2005',);?>

					<select name="month" id="month" required>
						<option selected disabled>---</option>
						<?php foreach($month as $m){?>
						<option <?php echo $m==$result['month']?'selected':'' ?> value="<?php echo $m?>"><?php echo $m?></option>
						<?php }?>
					</select>
					
				</div>
				<div class="small-2 columns">
					<select name="day" id="day" required>
						<option selected disabled>---</option>
						<?php foreach($day as $d){?>
						<option <?php echo $d==$result['day']?'selected':'' ?>  value="<?php echo $d?>"><?php echo $d?></option>
						<?php }?>
					</select>
				</div>
				<div class="small-2 columns">
					<select name="year" id="year" required>
						<option selected disabled>---</option>
						<?php foreach($year as $y){?>
						<option <?php echo $y==$result['year']?'selected':'' ?> value="<?php echo $y?>"><?php echo $y?></option>
						<?php }?>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Age</label>
				</div>
				<div class="small-9 columns">
					<input type="text" name="age" id="age" placeholder="Age" readonly required value="<?php echo $result['age']?>"/>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Place of Birth</label>
				</div>
				<div class="small-9 columns">
					<input type="text" name="pod" placeholder="Place of Birth" required value="<?php echo $result['placeOfBirth']?>"/>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Civil Status</label>
				</div>
				<div class="small-9 columns">
					<?php $status = array("Single","Divorced","Married");?>
					<select name="status" required>
						<option selected>---</option>
					<?php foreach($status as $stat){?>
					<option <?php echo $stat==$result['civilStatus']?'selected':'' ?> value="<?php echo $stat?>"><?php echo $stat?></option>
					<?php }?>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Elementary</label>
				</div>
				<div class="small-9 columns">
					<input type="text" name="elementary" placeholder="School Name" required value="<?php echo $result['elementary']?>"/>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Secondary School</label>
				</div>
				<div class="small-9 columns">
					<input type="text" name="secondary" placeholder="School Name" required value="<?php echo $result['secondary']?>"/>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Type of School</label>
				</div>
				<div class="small-9 columns">
					<?php $type = array("Private","Semi-Private","Public");?>
					<select name="type" required>
					<option selected disabled>---</option>
					<?php foreach($type as $typ){?>
					<option <?php echo $typ==$result['typeOfSchool']?'selected':'' ?> value="<?php echo $typ?>"><?php echo $typ?></option>
					<?php }?>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Scholarship Program</label>
				</div>
				<div class="small-9 columns">
					<input type="text" name="sp" placeholder="Program" required value="<?php echo $result['scholarshipProgram']?>"/>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Year of Award</label>
				</div>
				<div class="small-9 columns">
					<input type="text" name="ya" placeholder="Year" required value="<?php echo $result['yearOfAward']?>"/>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">University</label>
				</div>
				<div class="small-9 columns">
					<input type="text" name="univ" placeholder="School Name" required value="<?php echo $result['university']?>"/>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Degree</label>
				</div>
				<div class="small-9 columns">
					<input type="text" name="degree" placeholder="Degree" required value="<?php echo $result['degree']?>"/>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Name of Contact</label>
				</div>
				<div class="small-9 columns">
					<input type="text" name="contactName" placeholder="Name" required value="<?php echo $result['contactName']?>"/>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Relation to the scholar</label>
				</div>
				<div class="small-9 columns">
					<input type="text" name="relation" placeholder="Relation" required value="<?php echo $result['relation']?>"/>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Address of the Contact Person</label>
				</div>
				<div class="small-9 columns">
					<input type="text" name="contactAddress" placeholder="Address" required value="<?php echo $result['addressContact']?>"/>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns">
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Contact Number</label>
				</div>
				<div class="small-9 columns">
					<input type="text" name="contactNumber" placeholder="Number" required value="<?php echo $result['contactNumber']?>"/>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-3 small-centered columns">
			<button type="submit" class="button round"><i class="fi-social-foursquare"></i>	<?php echo $button;?></button>
		</div>
	</div>
</form>
<script>
	document.getElementById('year').onchange = function(){
		var age= document.getElementById('age');
 		var e = document.getElementById('year');
 		var valueOfE = e.options[e.selectedIndex].value;
 		var d = new Date();
 		var currentYear = d.getFullYear();
		age.value =(currentYear - valueOfE);
		alert(Age);
	};
</script>