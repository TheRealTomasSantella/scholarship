<?php $year = array('2000-2001','2001-2002','2002-2003','2003-2004','2004-2005','2005-2006','2006-2007','2007-2008','2008-2009','2009-2010','2010-2011','2011-2012','2012-2013','2013-2014','2014-2015','2015-2016')?>

<div class="row">
	<div class="large-3 columns">
		<img src="<?php echo base_url()?>images/ah.png" alt="" height="50" width="150">
	</div>
</div>

<div class="row">
	<div class="large-6 large-offset-1 columns">
		&nbsp;
		<h2>Monitoring sheet: </h2>
	</div>
</div>

<div style="padding-bottom:10px;"></div>

<div class="row text-center">
	<div class="small-3 small-centered columns">
		<label for="schoolYear">Academic Year</label>
	</div>
	<div class="small-5 small-centered columns">
		<select name="schoolYear">
		<option selected disabled>---</option>
		<?php foreach($year as $y){?>
		<option value="<?php echo $y?>"><?php echo $y?></option>
		<?php }?>
		</select>
	</div>
</div>

<div style="padding-bottom:20px;"></div>

<div class="row">
	<div class="small-2 columns">
		<label for="name">Name of Scholar</label>
	</div>
	<div class="small-10 columns">
		<?php echo $result['name']?>
	</div>
</div>
<div class="row">
	<div class="small-2 columns">
		<label for="name">Course</label>
	</div>
	<div class="small-10 columns">
		<?php echo $result['degree']?>
	</div>
</div>
<div class="row">
	<div class="small-2 columns">
		<label for="name">School</label>
	</div>
	<div class="small-10 columns">
		<?php echo $result['university']?>
	</div>
</div>
<div class="row">
	<div class="small-2 columns">
		<label for="name">Scholarship Program</label>
	</div>
	<div class="small-10 columns">
		<?php echo $result['scholarshipProgram']?>
	</div>
</div>
<div class="row">
	<div class="small-2 columns">
		<label for="name">Year of Awards</label>
	</div>
	<div class="small-10 columns">
		<?php echo $result['yearOfAward']?>
	</div>
</div>

<div style="padding-bottom:20px;"></div>
<div class="row text-center">
	<div class="small-12 small-centered columns">
		<b>First Year</b>
	</div>
	<div style="padding-bottom:20px;"></div>
</div>
<fieldset>
<div class="row text-center">
	<div class="small-3 ">
		<b>First Semester</b>
	</div>
	<div style="padding-bottom:10px;"></div>
	<div class="small-6 columns">
		<table>
			<tr>
				<th>Subject</th>
				<th>Unit</th>
				<th>Grade</th>
			</tr>
			<tr>
				<td><input type="text" name="fsub1"></td>
				<td><input type="text" name="fsub2"></td>
				<td><input type="text" name="fsub3"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub4"></td>
				<td><input type="text" name="fsub5"></td>
				<td><input type="text" name="fsub6"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub7"></td>
				<td><input type="text" name="fsub8"></td>
				<td><input type="text" name="fsub9"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub10"></td>
				<td><input type="text" name="fsub11"></td>
				<td><input type="text" name="fsub12"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub13"></td>
				<td><input type="text" name="fsub14"></td>
				<td><input type="text" name="fsub15"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub16"></td>
				<td><input type="text" name="fsub17"></td>
				<td><input type="text" name="fsub18"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub19"></td>
				<td><input type="text" name="fsub20"></td>
				<td><input type="text" name="fsub21"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub22"></td>
				<td><input type="text" name="fsub23"></td>
				<td><input type="text" name="fsub24"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub25"></td>
				<td><input type="text" name="fsub26"></td>
				<td><input type="text" name="fsub27"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub28"></td>
				<td><input type="text" name="fsub29"></td>
				<td><input type="text" name="fsub30"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub31"></td>
				<td><input type="text" name="fsub32"></td>
				<td><input type="text" name="fsub33"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub34"></td>
				<td><input type="text" name="fsub35"></td>
				<td><input type="text" name="fsub36"></td>
			</tr>
			<tr>
				<th></th>
				<th>Semestral Average</th>
				<th>Status</th>
			<tr>
			<tr>
				<td></td>
				<td><input type="text" name="average"></td>
				<td><input type="text" name="status"></td>
			</tr>
		</table>
	</div>
</div>

<div class="row text-center">
	<div class="small-3">
		<b>Second Semester</b>
	</div>
	<div class="small-6 columns">
		<table>
			<tr>
				<th>Subject</th>
				<th>Unit</th>
				<th>Grade</th>
			</tr>
			<tr>
				<td><input type="text" name="ssub1"></td>
				<td><input type="text" name="ssub2"></td>
				<td><input type="text" name="ssub3"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub4"></td>
				<td><input type="text" name="ssub5"></td>
				<td><input type="text" name="ssub6"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub7"></td>
				<td><input type="text" name="ssub8"></td>
				<td><input type="text" name="ssub9"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub10"></td>
				<td><input type="text" name="ssub11"></td>
				<td><input type="text" name="ssub12"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub13"></td>
				<td><input type="text" name="ssub14"></td>
				<td><input type="text" name="ssub15"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub16"></td>
				<td><input type="text" name="ssub17"></td>
				<td><input type="text" name="ssub18"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub19"></td>
				<td><input type="text" name="ssub20"></td>
				<td><input type="text" name="ssub21"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub22"></td>
				<td><input type="text" name="ssub23"></td>
				<td><input type="text" name="ssub24"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub25"></td>
				<td><input type="text" name="ssub26"></td>
				<td><input type="text" name="ssub27"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub28"></td>
				<td><input type="text" name="ssub29"></td>
				<td><input type="text" name="ssub30"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub31"></td>
				<td><input type="text" name="ssub32"></td>
				<td><input type="text" name="ssub33"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub34"></td>
				<td><input type="text" name="ssub35"></td>
				<td><input type="text" name="ssub36"></td>
			</tr>
			<tr>
				<th></th>
				<th>Semestral Average</th>
				<th>Status</th>
			<tr>
			<tr>
				<td></td>
				<td><input type="text" name="average"></td>
				<td><input type="text" name="status"></td>
			</tr>
		</table>
	</div>
</div>

<div class="row text-center">
	<div class="small-3">
		<b>Summer</b>
	</div>
	<div class="small-6 columns">
		<table>
			<tr>
				<th>Subject</th>
				<th>Unit</th>
				<th>Grade</th>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub2"></td>
				<td><input type="text" name="tsub3"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub4"></td>
				<td><input type="text" name="tsub5"></td>
				<td><input type="text" name="tsub6"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub7"></td>
				<td><input type="text" name="tsub8"></td>
				<td><input type="text" name="tsub9"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub10"></td>
				<td><input type="text" name="tsub11"></td>
				<td><input type="text" name="tsub12"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub13"></td>
				<td><input type="text" name="tsub14"></td>
				<td><input type="text" name="tsub15"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub16"></td>
				<td><input type="text" name="tsub17"></td>
				<td><input type="text" name="tsub18"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub19"></td>
				<td><input type="text" name="tsub20"></td>
				<td><input type="text" name="tsub21"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub22"></td>
				<td><input type="text" name="tsub23"></td>
				<td><input type="text" name="tsub24"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub25"></td>
				<td><input type="text" name="tsub26"></td>
				<td><input type="text" name="tsub27"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub28"></td>
				<td><input type="text" name="tsub29"></td>
				<td><input type="text" name="tsub30"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub31"></td>
				<td><input type="text" name="tsub32"></td>
				<td><input type="text" name="tsub33"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub34"></td>
				<td><input type="text" name="tsub35"></td>
				<td><input type="text" name="tsub36"></td>
			</tr>
			<tr>
				<th></th>
				<th>Semestral Average</th>
				<th>Status</th>
			<tr>
			<tr>
				<td></td>
				<td><input type="text" name="average"></td>
				<td><input type="text" name="status"></td>
			</tr>
		</table>
	</div>
</div>
</fieldset>

<div style="padding-bottom:20px;"></div>
<div class="row text-center">
	<div class="small-12 small-centered columns">
		<b>Second Year</b>
	</div>
	<div style="padding-bottom:20px;"></div>
</div>
<fieldset>
<div class="row text-center">
	<div class="small-3 ">
		<b>First Semester</b>
	</div>
	<div style="padding-bottom:10px;"></div>
	<div class="small-6 columns">
		<table>
			<tr>
				<th>Subject</th>
				<th>Unit</th>
				<th>Grade</th>
			</tr>
			<tr>
				<td><input type="text" name="fsub1"></td>
				<td><input type="text" name="fsub2"></td>
				<td><input type="text" name="fsub3"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub4"></td>
				<td><input type="text" name="fsub5"></td>
				<td><input type="text" name="fsub6"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub7"></td>
				<td><input type="text" name="fsub8"></td>
				<td><input type="text" name="fsub9"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub10"></td>
				<td><input type="text" name="fsub11"></td>
				<td><input type="text" name="fsub12"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub13"></td>
				<td><input type="text" name="fsub14"></td>
				<td><input type="text" name="fsub15"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub16"></td>
				<td><input type="text" name="fsub17"></td>
				<td><input type="text" name="fsub18"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub19"></td>
				<td><input type="text" name="fsub20"></td>
				<td><input type="text" name="fsub21"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub22"></td>
				<td><input type="text" name="fsub23"></td>
				<td><input type="text" name="fsub24"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub25"></td>
				<td><input type="text" name="fsub26"></td>
				<td><input type="text" name="fsub27"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub28"></td>
				<td><input type="text" name="fsub29"></td>
				<td><input type="text" name="fsub30"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub31"></td>
				<td><input type="text" name="fsub32"></td>
				<td><input type="text" name="fsub33"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub34"></td>
				<td><input type="text" name="fsub35"></td>
				<td><input type="text" name="fsub36"></td>
			</tr>
			<tr>
				<th></th>
				<th>Semestral Average</th>
				<th>Status</th>
			<tr>
			<tr>
				<td></td>
				<td><input type="text" name="average"></td>
				<td><input type="text" name="status"></td>
			</tr>
		</table>
	</div>
</div>

<div class="row text-center">
	<div class="small-3">
		<b>Second Semester</b>
	</div>
	<div class="small-6 columns">
		<table>
			<tr>
				<th>Subject</th>
				<th>Unit</th>
				<th>Grade</th>
			</tr>
			<tr>
				<td><input type="text" name="ssub1"></td>
				<td><input type="text" name="ssub2"></td>
				<td><input type="text" name="ssub3"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub4"></td>
				<td><input type="text" name="ssub5"></td>
				<td><input type="text" name="ssub6"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub6"></td>
				<td><input type="text" name="ssub7"></td>
				<td><input type="text" name="ssub8"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub9"></td>
				<td><input type="text" name="ssub10"></td>
				<td><input type="text" name="ssub11"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub12"></td>
				<td><input type="text" name="ssub13"></td>
				<td><input type="text" name="ssub14"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub15"></td>
				<td><input type="text" name="ssub16"></td>
				<td><input type="text" name="ssub17"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub18"></td>
				<td><input type="text" name="ssub19"></td>
				<td><input type="text" name="ssub20"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub21"></td>
				<td><input type="text" name="ssub22"></td>
				<td><input type="text" name="ssub23"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub24"></td>
				<td><input type="text" name="ssub25"></td>
				<td><input type="text" name="ssub26"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub27"></td>
				<td><input type="text" name="ssub28"></td>
				<td><input type="text" name="ssub29"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub30"></td>
				<td><input type="text" name="ssub31"></td>
				<td><input type="text" name="ssub32"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub33"></td>
				<td><input type="text" name="ssub34"></td>
				<td><input type="text" name="ssub35"></td>
			</tr>
			<tr>
				<th></th>
				<th>Semestral Average</th>
				<th>Status</th>
			<tr>
			<tr>
				<td></td>
				<td><input type="text" name="average"></td>
				<td><input type="text" name="status"></td>
			</tr>
		</table>
	</div>
</div>

<div class="row text-center">
	<div class="small-3">
		<b>Summer</b>
	</div>
	<div class="small-6 columns">
		<table>
			<tr>
				<th>Subject</th>
				<th>Unit</th>
				<th>Grade</th>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<th></th>
				<th>Semestral Average</th>
				<th>Status</th>
			<tr>
			<tr>
				<td></td>
				<td><input type="text" name="average"></td>
				<td><input type="text" name="status"></td>
			</tr>
		</table>
	</div>
</div>
</fieldset>

<div style="padding-bottom:20px;"></div>
<div class="row text-center">
	<div class="small-12 small-centered columns">
		<b>Third Year</b>
	</div>
	<div style="padding-bottom:20px;"></div>
</div>
<fieldset>
<div class="row text-center">
	<div class="small-3 ">
		<b>First Semester</b>
	</div>
	<div style="padding-bottom:10px;"></div>
	<div class="small-6 columns">
		<table>
			<tr>
				<th>Subject</th>
				<th>Unit</th>
				<th>Grade</th>
			</tr>
			<tr>
				<td><input type="text" name="fsub1"></td>
				<td><input type="text" name="fsub2"></td>
				<td><input type="text" name="fsub3"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub4"></td>
				<td><input type="text" name="fsub5"></td>
				<td><input type="text" name="fsub6"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub7"></td>
				<td><input type="text" name="fsub8"></td>
				<td><input type="text" name="fsub9"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub10"></td>
				<td><input type="text" name="fsub11"></td>
				<td><input type="text" name="fsub12"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub13"></td>
				<td><input type="text" name="fsub14"></td>
				<td><input type="text" name="fsub15"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub16"></td>
				<td><input type="text" name="fsub17"></td>
				<td><input type="text" name="fsub18"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub19"></td>
				<td><input type="text" name="fsub20"></td>
				<td><input type="text" name="fsub21"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub22"></td>
				<td><input type="text" name="fsub23"></td>
				<td><input type="text" name="fsub24"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub25"></td>
				<td><input type="text" name="fsub26"></td>
				<td><input type="text" name="fsub27"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub28"></td>
				<td><input type="text" name="fsub29"></td>
				<td><input type="text" name="fsub30"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub31"></td>
				<td><input type="text" name="fsub32"></td>
				<td><input type="text" name="fsub33"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub34"></td>
				<td><input type="text" name="fsub35"></td>
				<td><input type="text" name="fsub36"></td>
			</tr>
			<tr>
				<th></th>
				<th>Semestral Average</th>
				<th>Status</th>
			<tr>
			<tr>
				<td></td>
				<td><input type="text" name="average"></td>
				<td><input type="text" name="status"></td>
			</tr>
		</table>
	</div>
</div>

<div class="row text-center">
	<div class="small-3">
		<b>Second Semester</b>
	</div>
	<div class="small-6 columns">
		<table>
			<tr>
				<th>Subject</th>
				<th>Unit</th>
				<th>Grade</th>
			</tr>
			<tr>
				<td><input type="text" name="ssub1"></td>
				<td><input type="text" name="ssub2"></td>
				<td><input type="text" name="ssub3"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub4"></td>
				<td><input type="text" name="ssub5"></td>
				<td><input type="text" name="ssub6"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub6"></td>
				<td><input type="text" name="ssub7"></td>
				<td><input type="text" name="ssub8"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub9"></td>
				<td><input type="text" name="ssub10"></td>
				<td><input type="text" name="ssub11"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub12"></td>
				<td><input type="text" name="ssub13"></td>
				<td><input type="text" name="ssub14"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub15"></td>
				<td><input type="text" name="ssub16"></td>
				<td><input type="text" name="ssub17"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub18"></td>
				<td><input type="text" name="ssub19"></td>
				<td><input type="text" name="ssub20"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub21"></td>
				<td><input type="text" name="ssub22"></td>
				<td><input type="text" name="ssub23"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub24"></td>
				<td><input type="text" name="ssub25"></td>
				<td><input type="text" name="ssub26"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub27"></td>
				<td><input type="text" name="ssub28"></td>
				<td><input type="text" name="ssub29"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub30"></td>
				<td><input type="text" name="ssub31"></td>
				<td><input type="text" name="ssub32"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub33"></td>
				<td><input type="text" name="ssub34"></td>
				<td><input type="text" name="ssub35"></td>
			</tr>
			<tr>
				<th></th>
				<th>Semestral Average</th>
				<th>Status</th>
			<tr>
			<tr>
				<td></td>
				<td><input type="text" name="average"></td>
				<td><input type="text" name="status"></td>
			</tr>
		</table>
	</div>
</div>

<div class="row text-center">
	<div class="small-3">
		<b>Summer</b>
	</div>
	<div class="small-6 columns">
		<table>
			<tr>
				<th>Subject</th>
				<th>Unit</th>
				<th>Grade</th>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<th></th>
				<th>Semestral Average</th>
				<th>Status</th>
			<tr>
			<tr>
				<td></td>
				<td><input type="text" name="average"></td>
				<td><input type="text" name="status"></td>
			</tr>
		</table>
	</div>
</div>
</fieldset>

<div style="padding-bottom:20px;"></div>
<div class="row text-center">
	<div class="small-12 small-centered columns">
		<b>Fourth Year</b>
	</div>
	<div style="padding-bottom:20px;"></div>
</div>
<fieldset>
<div class="row text-center">
	<div class="small-3 ">
		<b>First Semester</b>
	</div>
	<div style="padding-bottom:10px;"></div>
	<div class="small-6 columns">
		<table>
			<tr>
				<th>Subject</th>
				<th>Unit</th>
				<th>Grade</th>
			</tr>
			<tr>
				<td><input type="text" name="fsub1"></td>
				<td><input type="text" name="fsub2"></td>
				<td><input type="text" name="fsub3"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub4"></td>
				<td><input type="text" name="fsub5"></td>
				<td><input type="text" name="fsub6"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub7"></td>
				<td><input type="text" name="fsub8"></td>
				<td><input type="text" name="fsub9"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub10"></td>
				<td><input type="text" name="fsub11"></td>
				<td><input type="text" name="fsub12"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub13"></td>
				<td><input type="text" name="fsub14"></td>
				<td><input type="text" name="fsub15"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub16"></td>
				<td><input type="text" name="fsub17"></td>
				<td><input type="text" name="fsub18"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub19"></td>
				<td><input type="text" name="fsub20"></td>
				<td><input type="text" name="fsub21"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub22"></td>
				<td><input type="text" name="fsub23"></td>
				<td><input type="text" name="fsub24"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub25"></td>
				<td><input type="text" name="fsub26"></td>
				<td><input type="text" name="fsub27"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub28"></td>
				<td><input type="text" name="fsub29"></td>
				<td><input type="text" name="fsub30"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub31"></td>
				<td><input type="text" name="fsub32"></td>
				<td><input type="text" name="fsub33"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub34"></td>
				<td><input type="text" name="fsub35"></td>
				<td><input type="text" name="fsub36"></td>
			</tr>
			<tr>
				<th></th>
				<th>Semestral Average</th>
				<th>Status</th>
			<tr>
			<tr>
				<td></td>
				<td><input type="text" name="average"></td>
				<td><input type="text" name="status"></td>
			</tr>
		</table>
	</div>
</div>

<div class="row text-center">
	<div class="small-3">
		<b>Second Semester</b>
	</div>
	<div class="small-6 columns">
		<table>
			<tr>
				<th>Subject</th>
				<th>Unit</th>
				<th>Grade</th>
			</tr>
			<tr>
				<td><input type="text" name="ssub1"></td>
				<td><input type="text" name="ssub2"></td>
				<td><input type="text" name="ssub3"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub4"></td>
				<td><input type="text" name="ssub5"></td>
				<td><input type="text" name="ssub6"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub6"></td>
				<td><input type="text" name="ssub7"></td>
				<td><input type="text" name="ssub8"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub9"></td>
				<td><input type="text" name="ssub10"></td>
				<td><input type="text" name="ssub11"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub12"></td>
				<td><input type="text" name="ssub13"></td>
				<td><input type="text" name="ssub14"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub15"></td>
				<td><input type="text" name="ssub16"></td>
				<td><input type="text" name="ssub17"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub18"></td>
				<td><input type="text" name="ssub19"></td>
				<td><input type="text" name="ssub20"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub21"></td>
				<td><input type="text" name="ssub22"></td>
				<td><input type="text" name="ssub23"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub24"></td>
				<td><input type="text" name="ssub25"></td>
				<td><input type="text" name="ssub26"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub27"></td>
				<td><input type="text" name="ssub28"></td>
				<td><input type="text" name="ssub29"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub30"></td>
				<td><input type="text" name="ssub31"></td>
				<td><input type="text" name="ssub32"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub33"></td>
				<td><input type="text" name="ssub34"></td>
				<td><input type="text" name="ssub35"></td>
			</tr>
			<tr>
				<th></th>
				<th>Semestral Average</th>
				<th>Status</th>
			<tr>
			<tr>
				<td></td>
				<td><input type="text" name="average"></td>
				<td><input type="text" name="status"></td>
			</tr>
		</table>
	</div>
</div>

<div class="row text-center">
	<div class="small-3">
		<b>Summer</b>
	</div>
	<div class="small-6 columns">
		<table>
			<tr>
				<th>Subject</th>
				<th>Unit</th>
				<th>Grade</th>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<th></th>
				<th>Semestral Average</th>
				<th>Status</th>
			<tr>
			<tr>
				<td></td>
				<td><input type="text" name="average"></td>
				<td><input type="text" name="status"></td>
			</tr>
		</table>
	</div>
</div>
</fieldset>

<div style="padding-bottom:20px;"></div>
<div class="row text-center">
	<div class="small-12 small-centered columns">
		<b>Fifth Year</b>
	</div>
	<div style="padding-bottom:20px;"></div>
</div>
<fieldset>
<div class="row text-center">
	<div class="small-3 ">
		<b>First Semester</b>
	</div>
	<div style="padding-bottom:10px;"></div>
	<div class="small-6 columns">
		<table>
			<tr>
				<th>Subject</th>
				<th>Unit</th>
				<th>Grade</th>
			</tr>
			<tr>
				<td><input type="text" name="fsub1"></td>
				<td><input type="text" name="fsub2"></td>
				<td><input type="text" name="fsub3"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub4"></td>
				<td><input type="text" name="fsub5"></td>
				<td><input type="text" name="fsub6"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub7"></td>
				<td><input type="text" name="fsub8"></td>
				<td><input type="text" name="fsub9"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub10"></td>
				<td><input type="text" name="fsub11"></td>
				<td><input type="text" name="fsub12"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub13"></td>
				<td><input type="text" name="fsub14"></td>
				<td><input type="text" name="fsub15"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub16"></td>
				<td><input type="text" name="fsub17"></td>
				<td><input type="text" name="fsub18"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub19"></td>
				<td><input type="text" name="fsub20"></td>
				<td><input type="text" name="fsub21"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub22"></td>
				<td><input type="text" name="fsub23"></td>
				<td><input type="text" name="fsub24"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub25"></td>
				<td><input type="text" name="fsub26"></td>
				<td><input type="text" name="fsub27"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub28"></td>
				<td><input type="text" name="fsub29"></td>
				<td><input type="text" name="fsub30"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub31"></td>
				<td><input type="text" name="fsub32"></td>
				<td><input type="text" name="fsub33"></td>
			</tr>
			<tr>
				<td><input type="text" name="fsub34"></td>
				<td><input type="text" name="fsub35"></td>
				<td><input type="text" name="fsub36"></td>
			</tr>
			<tr>
				<th></th>
				<th>Semestral Average</th>
				<th>Status</th>
			<tr>
			<tr>
				<td></td>
				<td><input type="text" name="average"></td>
				<td><input type="text" name="status"></td>
			</tr>
		</table>
	</div>
</div>

<div class="row text-center">
	<div class="small-3">
		<b>Second Semester</b>
	</div>
	<div class="small-6 columns">
		<table>
			<tr>
				<th>Subject</th>
				<th>Unit</th>
				<th>Grade</th>
			</tr>
			<tr>
				<td><input type="text" name="ssub1"></td>
				<td><input type="text" name="ssub2"></td>
				<td><input type="text" name="ssub3"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub4"></td>
				<td><input type="text" name="ssub5"></td>
				<td><input type="text" name="ssub6"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub6"></td>
				<td><input type="text" name="ssub7"></td>
				<td><input type="text" name="ssub8"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub9"></td>
				<td><input type="text" name="ssub10"></td>
				<td><input type="text" name="ssub11"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub12"></td>
				<td><input type="text" name="ssub13"></td>
				<td><input type="text" name="ssub14"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub15"></td>
				<td><input type="text" name="ssub16"></td>
				<td><input type="text" name="ssub17"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub18"></td>
				<td><input type="text" name="ssub19"></td>
				<td><input type="text" name="ssub20"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub21"></td>
				<td><input type="text" name="ssub22"></td>
				<td><input type="text" name="ssub23"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub24"></td>
				<td><input type="text" name="ssub25"></td>
				<td><input type="text" name="ssub26"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub27"></td>
				<td><input type="text" name="ssub28"></td>
				<td><input type="text" name="ssub29"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub30"></td>
				<td><input type="text" name="ssub31"></td>
				<td><input type="text" name="ssub32"></td>
			</tr>
			<tr>
				<td><input type="text" name="ssub33"></td>
				<td><input type="text" name="ssub34"></td>
				<td><input type="text" name="ssub35"></td>
			</tr>
			<tr>
				<th></th>
				<th>Semestral Average</th>
				<th>Status</th>
			<tr>
			<tr>
				<td></td>
				<td><input type="text" name="average"></td>
				<td><input type="text" name="status"></td>
			</tr>
		</table>
	</div>
</div>

<div class="row text-center">
	<div class="small-3">
		<b>Summer</b>
	</div>
	<div class="small-6 columns">
		<table>
			<tr>
				<th>Subject</th>
				<th>Unit</th>
				<th>Grade</th>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
				<td><input type="text" name="tsub1"></td>
			</tr>
			<tr>
				<th></th>
				<th>Semestral Average</th>
				<th>Status</th>
			<tr>
			<tr>
				<td></td>
				<td><input type="text" name="average"></td>
				<td><input type="text" name="status"></td>
			</tr>
		</table>
	</div>
</div>
</fieldset>