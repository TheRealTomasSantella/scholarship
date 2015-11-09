<?php $year = array('2000-2001','2001-2002','2002-2003','2003-2004','2004-2005','2005-2006','2006-2007','2007-2008','2008-2009','2009-2010','2010-2011','2011-2012','2012-2013','2013-2014','2014-2015','2015-2016')?>

<div class="row">
	<div class="large-3 columns">
		<img src="<?php echo base_url()?>images/ah.png" alt="" height="50" width="150">
	</div>
</div>
<div class="row">
	<div class="large-6 large-offset-1 columns">
		&nbsp;
		<h2>Breakdown of Financial Release: </h2>
	</div>
</div>

<div class="padd" style="padding-bottom:30px;"></div>

<div class="row">
	<div class="small-3 columns">
		<Iabel for="name">Name: </label>
	</div>
	<div class="small-9 columns">
		<label><?php echo $result['name']?></label>
	</div>
</div>
<div class="row">
	<div class="small-3 columns">
		<Iabel for="name">Program: </label>
	</div>
	<div class="small-9 columns">
		<label><?php echo $result['scholarshipProgram']?></label>
	</div>
</div>
<div class="row">
	<div class="small-3 columns">
		<Iabel for="name">Year of award: </label>
	</div>
	<div class="small-9 columns">
		<label><?php echo $result['yearOfAward']?></label>
	</div>
</div>
<div class="row">
	<div class="small-3 columns">
		<Iabel for="name">School: </label>
	</div>
	<div class="small-9 columns">
		<label><?php echo $result['university']?></label>
	</div>
</div>

<div class="space" style="padding-bottom:30px;"></div>

<div class="row text-center">
	<div class="small-3 small-centered columns">
		<label>School Year</label>
	</div>
</div>

<div class="style" style="padding-bottom:10px;"></div>

<?php 
	if(empty($results)){
		$action = '/scholarship/record/';
		$results = null;
		$button = 'Submit';
	}else{
		$action = '/scholarship/update/';
		$button = 'Edit';
	}
?>

<form action="<?php echo $action?><?php echo $result['scholarID']?>/<?php echo $this->session->userdata('name');?>" method="POST">

<div class="row">
	<div class="small-1 columns">
		Years
	</div>
	<div class="small-2 columns">
		<select name="year1">
		<option selected disabled>---</option>
		<?php foreach($year as $y1){?>
		<option value="<?php echo $y1?>"><?php echo $y1?></option>
		<?php }?>
		</select>
	</div>
	<div class="small-2 columns">
		<select name="year2">
		<option selected disabled>---</option>
		<?php foreach($year as $y2){?>
		<option value="<?php echo $y2?>"><?php echo $y2?></option>
		<?php }?>
		</select>
	</div>
	<div class="small-2 columns">
		<select name="year3">
		<option selected disabled>---</option>
		<?php foreach($year as $y3){?>
		<option value="<?php echo $y3?>"><?php echo $y3?></option>
		<?php }?>
		</select>
	</div>
	<div class="small-2 columns">
		<select name="year4">
		<option selected disabled>---</option>
		<?php foreach($year as $y4){?>
		<option value="<?php echo $y4?>"><?php echo $y4?></option>
		<?php }?>
		</select>
	</div>
	<div class="small-2 columns">
		<select name="year5">
		<option selected disabled>---</option>
		<?php foreach($year as $y5){?>
		<option value="<?php echo $y5?>"><?php echo $y5?></option>
		<?php }?>
		</select>
	</div>
	<div class="small-1 columns">
		Total
	</div>
</div>

<div class="pad" style="padding-bottom:10px;"></div>

<div class="row">
	<div class="small-1 columns">
		<label>STIPEND</label>
	</div>
	<div class="small-2 columns">
		<input type="text" name="fAmount1" id="fAmount1" value="<?php echo $results['stipend1']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="sAmount1" id="sAmount1" value="<?php echo $results['stipend2']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="tAmount1" id="tAmount1" value="<?php echo $results['stipend3']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="forAmount1" id="forAmount1" value="<?php echo $results['stipend4']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="fivAmount1"  id="fivAmount1" value="<?php echo $results['stipend5']?>"/>
	</div>
	<div class="small-1 columns">
		<input type="text" name="sixAmount1" id="sixAmount1" value="<?php echo $results['stipend']?>"/>
	</div>
</div>

<div class="pad" style="padding-bottom:10px;"></div>

<div class="row">
	<div class="small-1 columns">
		<label>TUITION FEE</label>
	</div>
	<div class="small-2 columns">
		<input type="text" name="fAmount2" id="fAmount2" value="<?php echo $results['tuition_fee1']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="sAmount2" id="sAmount2" value="<?php echo $results['tuition_fee2']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="tAmount2" id="tAmount2" value="<?php echo $results['tuition_fee3']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="forAmount2" id="forAmount2" value="<?php echo $results['tuition_fee4']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="fivAmount2" id="fivAmount2" value="<?php echo $results['tuition_fee5']?>"/>
	</div>
	<div class="small-1 columns">
		<input type="text" name="sixAmount2"  id="sixAmount2" value="<?php echo $results['tuitionFee']?>"/>
	</div>
</div>

<div class="pad" style="padding-bottom:10px;"></div>

<div class="row">
	<div class="small-1 columns">
		<label>BOOK ALLOWANCE</label>
	</div>
	<div class="small-2 columns">
		<input type="text" name="fAmount3" id="fAmount3" value="<?php echo $results['book1']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="sAmount3" id="sAmount3" value="<?php echo $results['book2']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="tAmount3" id="tAmount3" value="<?php echo $results['book3']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="forAmount3" id="forAmount3" value="<?php echo $results['book4']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="fivAmount3" id="fivAmount3" value="<?php echo $results['book5']?>"/>
	</div>
	<div class="small-1 columns">
		<input type="text" name="sixAmount3" id="sixAmount3" value="<?php echo $results['bookAllowance']?>"/>
	</div>
</div>

<div class="pad" style="padding-bottom:10px;"></div>

<div class="row">
	<div class="small-1 columns">
		<label>UNIFORM ALLOWANCE</label>
	</div>
	<div class="small-2 columns">
		<input type="text" name="fAmount4" id="fAmount4" value="<?php echo $results['uniform1']?>"/>
	</div>
	<div class="small-2 columns">	
		<input type="text" name="sAmount4" id="sAmount4" value="<?php echo $results['uniform2']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="tAmount4" id="tAmount4" value="<?php echo $results['uniform3']?>">
	</div>
	<div class="small-2 columns">
		<input type="text" name="forAmount4" id="forAmount4" value="<?php echo $results['uniform4']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="fivAmount4" id="fivAmount4" value="<?php echo $results['uniform5']?>"/>
	</div>
	<div class="small-1 columns">
		<input type="text" name="sixAmount4" id="sixAmount4" value="<?php echo $results['uniformAllowance']?>"/>
	</div>
</div>

<div class="pad" style="padding-bottom:10px;"></div>

<div class="row">
	<div class="small-1 columns">
		<label>TRANSPO ALLOWANCE</label>
	</div>
	<div class="small-2 columns">
		<input type="text" name="fAmount5" id="fAmount5" value="<?php echo $results['transpo1']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="sAmount5" id="sAmount5" value="<?php echo $results['transpo2']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="tAmount5" id="tAmount5" value="<?php echo $results['transpo3']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="forAmount5" id="forAmount5" value="<?php echo $results['transpo4']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="fivAmount5" id="fivAmount5" value="<?php echo $results['transpo5']?>"/>
	</div>
	<div class="small-1 columns">
		<input type="text" name="sixAmount5" id="sixAmount5" value="<?php echo $results['transpoAllowance']?>"/>
	</div>
</div>

<div class="pad" style="padding-bottom:10px;"></div>

<div class="row">
	<div class="small-1 columns">
		<label>SOEP</label>
	</div>
	<div class="small-2 columns">
		<input type="text" name="fAmount6" id="fAmount6" value="<?php echo $results['soep1']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="sAmount6" id="sAmount6" value="<?php echo $results['soep2']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="tAmount6" id="tAmount6" value="<?php echo $results['soep3']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="forAmount6" id="forAmount6" value="<?php echo $results['soep4']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="fivAmount6" id="fivAmount6" value="<?php echo $results['soep5']?>"/>
	</div>
	<div class="small-1 columns">
		<input type="text" name="sixAmount6" id="sixAmount6" value="<?php echo $results['soep']?>"/>
	</div>
</div>

<div class="pad" style="padding-bottom:10px;"></div>

<div class="row">
	<div class="small-1 columns">
		<label>SPTP ALLOWANCE</label>
	</div>
	<div class="small-2 columns">
		<input type="text" name="fAmount7" id="fAmount7" value="<?php echo $results['sptp1']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="sAmount7" id="sAmount7" value="<?php echo $results['sptp2']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="tAmount7" id="tAmount7" value="<?php echo $results['sptp3']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="forAmount7" id="forAmount7" value="<?php echo $results['sptp4']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="fivAmount7" id="fivAmount7" value="<?php echo $results['sptp5']?>"/>
	</div>
	<div class="small-1 columns">
		<input type="text" name="sixAmount7" id="sixAmount7" value="<?php echo $results['sptpAllowance']?>"/>
	</div>
</div>

<div class="row">
	<div class="small-1 columns">
		<label>TOTAL</label>
	</div>
	<div class="small-2 columns">
		<input type="text" name="fAmount8" id="fAmount8" value="<?php echo $results['sptp1']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="sAmount8" id="sAmount8" value="<?php echo $results['sptp2']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="tAmount8" id="tAmount8" value="<?php echo $results['sptp3']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="forAmount8" id="forAmount8" value="<?php echo $results['sptp4']?>"/>
	</div>
	<div class="small-2 columns">
		<input type="text" name="fivAmount8" id="fivAmount8" value="<?php echo $results['sptp5']?>"/>
	</div>
	<div class="small-1 columns">
		<input type="text" name="sixAmount8" id="sixAmount8" value="<?php echo $results['sptpAllowance']?>"/>
	</div>
</div>

<div class="pad1" style="padding-bottom:10px;"></div>

<div class="row">
	<div class="small-3 small-offset-7 columns">
		<label>Plus 12% interest</label>
	</div>
	<div class="small-2 columns">
		<input type="text" readonly name="interest" id="interest" value="<?php echo $results['interest']?>" />
	</div>
</div>
<div class="row">
	<div class="small-3 small-offset-7 columns">
		<label>Grand Total</label>
	</div>
	<div class="small-2 columns">
		<input type="text" readonly name="grandTotal" id="grandTotal" value="<?php echo $results['grandTotal']?>"/>
	</div>
</div>
<div style="padding-bottom:10px"></div>
<div class="row">
	<div class="small-3 columns">
		<button type="submit" class="button radius"><?php echo $button?></buttom>
	</div>
	<div class="small-3 columns">
		<button type="button" class="button radius" id="computation">Compute</buttom>
	</div>
</div>

</form>
<script>
//variables for the total found on the right side
	var total = 0;
	var total1 = 0;
	var total2 = 0;
	var total3 = 0;
	var total4 = 0;
	var total5 = 0;
	var total6 = 0;
//variables for the total found on the bottom part
	var btotal = 0;
	var btotal1 = 0;
	var btotal2 = 0;
	var btotal3 = 0;
	var btotal4 = 0;

//varible for the final total
	var toTotal = 0;
	var botTotal = 0;
	var finalTotal = 0;

	var percent = 0;

	$("#computation").click(function(){
		//computations on the right side total
		total = Number($("#fAmount1").val()) + Number($("#sAmount1").val()) + Number($("#tAmount1").val()) + Number($("#forAmount1").val())
		 + Number($("#fivAmount1").val());
		$("#sixAmount1").val(total);

		total1 = Number($("#fAmount2").val()) + Number($("#sAmount2").val()) + Number($("#tAmount2").val()) 
		+ Number($("#forAmount2").val())
		 + Number($("#fivAmount2").val());
		$("#sixAmount2").val(total1);

		total2 = Number($("#fAmount3").val()) + Number($("#sAmount3").val()) + Number($("#tAmount3").val()) 
		+ Number($("#forAmount3").val())
		 + Number($("#fivAmount3").val());
		$("#sixAmount3").val(total2);

		total3 = Number($("#fAmount4").val()) + Number($("#sAmount4").val()) + Number($("#tAmount4").val()) 
		+ Number($("#forAmount4").val())
		 + Number($("#fivAmount4").val());
		$("#sixAmount4").val(total3);

		total4 = Number($("#fAmount5").val()) + Number($("#sAmount5").val()) + Number($("#tAmount5").val()) 
		+ Number($("#forAmount5").val())
		 + Number($("#fivAmount5").val());
		$("#sixAmount5").val(total4);

		total5 = Number($("#fAmount6").val()) + Number($("#sAmount6").val()) + Number($("#tAmount6").val()) 
		+ Number($("#forAmount6").val())
		 + Number($("#fivAmount6").val());
		$("#sixAmount6").val(total5);

		total6 = Number($("#fAmount7").val()) + Number($("#sAmount7").val()) + Number($("#tAmount7").val()) 
		+ Number($("#forAmount7").val())
		 + Number($("#fivAmount7").val());
		$("#sixAmount7").val(total6);

		//computations on the bottom side total
		btotal = Number($("#fAmount1").val()) + Number($("#fAmount2").val()) + Number($("#fAmount3").val()) 
		+ Number($("#fAmount4").val())
		 + Number($("#fAmount5").val())
		 Number($("#fAmount6").val()) + 
		 Number($("#fAmount7").val());
		$("#fAmount8").val(btotal);

		btotal1 = Number($("#sAmount1").val()) + Number($("#sAmount2").val()) + Number($("#sAmount3").val()) 
		+ Number($("#sAmount4").val())
		 + Number($("#sAmount5").val())
		 Number($("#sAmount6").val()) + 
		 Number($("#sAmount7").val());
		$("#sAmount8").val(btotal1);

		btotal2 = Number($("#tAmount1").val()) + Number($("#tAmount2").val()) + Number($("#tAmount3").val()) 
		+ Number($("#tAmount4").val())
		 + Number($("#tAmount5").val())
		 Number($("#tAmount6").val()) + 
		 Number($("#tAmount7").val());
		$("#tAmount8").val(btotal2);

		btotal3 = Number($("#forAmount1").val()) + Number($("#forAmount2").val()) + Number($("#forAmount3").val()) 
		+ Number($("#forAmount4").val())
		 + Number($("#forAmount5").val())
		 Number($("#forAmount6").val()) + 
		 Number($("#forAmount7").val());
		$("#forAmount8").val(btotal3);

		btotal4 = Number($("#fivAmount1").val()) + Number($("#fivAmount2").val()) + Number($("#fivAmount3").val()) 
		+ Number($("#fivAmount4").val())
		 + Number($("#fivAmount5").val())
		 Number($("#fivAmount6").val()) + 
		 Number($("#fivAmount7").val());
		$("#fivAmount8").val(btotal4);

		finalTotal = (btotal + btotal1 + btotal2 + btotal3 + btotal4);
		$("#sixAmount8").val(finalTotal);

		percent = finalTotal * 0.12;
		$("#interest").val(percent);

		$("#grandTotal").val(Math.round((finalTotal + percent) * 100) / 100);
	});
</script>