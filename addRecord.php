<Doctype HTML>
<?php
//take html fields
foreach ($_POST as $key->$value){
$a=$key;
$$a=$value;
}
?>
<HTML lang="en" enctype="multitype_form_data">
<head>
<title>coding challenge</title>
<form method="post" action="">
<h2>New medical record</h2>
<input type="text" name="fn" placeholder="First name:">
<input type="text" name="ln" placeholder="last name:">

<input type="checkbox" name="gd" label="Male">
<input type="checkbox" name="gd" label="Female">
<input type="number" name="age" placeholder="Age:">
<input type="text" name="fn" placeholder="First name">
<select name="country">
<option value=DRC">DR. Congo</option>
<option value=name="..."> Other</option>

</select>
<input type="submit" name="save" value="save">
<table>
<th> List of records
<td><tr></tr></td>
</th>
</table>

</form>
</html>
<?php
if(isset ($_POST['save'])){
$req=$con->query("insert into patient () values('$fn','$ln','$gd','$age','$country','$ct')");
$insert=$con->exec($req);

}

 ?>
