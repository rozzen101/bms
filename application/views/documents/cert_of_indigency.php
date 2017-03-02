<style type="text/css">
.hr_cust{
	border: 1px solid #34029D;
}

</style>


<?php  $rData = $rInf->row(); ?>


<html>
<head>
	<center>
	<img src="<?php echo base_url();?>public/assets/images/colors.png"  style="height:25px; width:570px;"><br><br>
		<!-- <img src="<?php echo PUBLIC_URL;?>btis/images/doc_logo.jpg" height="80" width="70"> -->
		<p>Republic of the Philippines</p>
		<b>BARANGAY MACTAN</b><br>
		<b>City of LAPU-LAPU</b><br>
		<p>Office of the Barangay Captain</p>
		<hr class="hr_cust">
	</center>
</head>
<body>
<center>
<h4 style="text-decoration:underline;">CERTIFICATE OF INDIGENCY</h4>
</center>
<br>
<h4>TO WHOM IT MAY CONCERN:</h4>
<br>
<p>	This is to certify that <b><?php echo strtoupper($rData->rFname).' '.strtoupper($rData->rMname).' '.strtoupper($rData->rLname);?></b>, 25 of age, MALE<br>
SINGLE, Filipino, is a resident of <b>BARANGAY <?php echo strtoupper($rData->rBarangay);?></b>, <b>LAPU-LAPU CITY</b>, <b>CEBU</b>, this City is one of the indigents in our barangay</p>
<br>
<p>This certification is being issued upon the request of  <b><?php echo strtoupper($rData->rFname).' '.strtoupper($rData->rMname).' '.strtoupper($rData->rLname);?></b> for <b>EMPLOYMENT</b><br>




</p>
<br><br>
<p>Issued this <?php echo date("jS");?> day of <?php echo date('F').' '.date('Y');;?> at the Office of the Punong Barangay, BARANGAY<br>
<?php echo strtoupper($rData->rBarangay);?>, LAPU-LAPU CITY, CEBU PHILIPPINES.</p>
<br>
<center>
<img src="<?php echo base_url();?>public/signatures/sample.png" style="position:absolute;right:260px;" height="40" width="100"><br>
<b>SAMPLE CAPTAIN</b><br>
<span>Barangay Captain</span>
</center>
<br>

<div style="font-size:10px;">
<p>
Paid With: P 100.00
<br>
O.R. No: 
<b id="ToText5" onClick="changeToInput('purpose','ToText1')">OR1234</b>
<!-- <b id="input_field"><input type="text" name="or_no" id="or_no" onBlur="changeTotext_OR('or_no','ToText5')"/></b> --><br>
Date : <?php echo date('M d, Y');?><br>
/aeg/
</p>

</div>


</body>

<footer>
<br><br>
<center>
		<img src="<?php echo base_url();?>public/assets/images/colors.png"  style="height:25px; width:570px;">
	</center>
</footer>
</html>





<script type="text/javascript">



</script>