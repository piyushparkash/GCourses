
<div class="container">
<h1>List Of Students</h1>
<style>
table {
border:1px solid #ccc;
}
td{
border:1px solid #ccc;
padding:3px;
}
th{
border:1px solid #000;
}
</style>
<table border="1" cellpadding="4" cellspacing="2" width="100%">
<tr>
<th>Name</th>
<th>Father Name</th>
<th>Contact</th>
<th>Roll No</th>
<th>Uni Roll No</th>
<th>Branch</th>
<th>Course</th>
<th>dob</th>
<th>Institute</th>
<th>University</th>
<th>Mailing Address</th>
<th>Accomotion Required</th>
<th>Draft No</th>
</tr>
<?php foreach ($students as $row): ?>
	<tr>
		<td><?php echo $row->name ?></td>
		<td><?php echo $row->father_name ?></td>
		<td><?php echo $row->contact_number ?></td>
		<td><?php echo $row->roll_no ?></td>
		<td><?php echo $row->university_roll_no ?></td>
		<td><?php echo $row->branch_name ?></td>
		<td><?php echo $row->course_name ?></td>
		<td><?php echo $row->dob ?></td>
		<td><?php echo $row->affiliation_institute ?></td>
		<td><?php echo $row->university ?></td>
		<td><?php echo $row->mailing_address ?></td>
		<td><?php echo ($row->accomodation_required ? "Yes" : "No") ?></td>
		<td><?php echo $row->draft_no ?></td>
	</tr>


<?php endforeach; ?>
</table>
</div>