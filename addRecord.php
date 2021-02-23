<Doctype HTML>
<?php
//take html fields
foreach ($_POST as $key->$value){
$a=$key;
$$a=$value;
}
//connect to database
$server="localhost";
$pass="";
$user="root";
$db="MedicaRec";
try{
$con=new PDO($server,$db,$user,$pass);
}
catch (PDOException $e){
die($e);
}
//display data filter <18 years old
$req="select * from patient where age <18";
$do=$con->query($req);
$res=$do->fetchAll();
foreach($res as $row){
echo "<td><tr>$row['firstname]</tr></td><td>";
//Continue fetching other reliable data
}
?>
<HTML lang="en" enctype="multitype_form_data">
<head>
<title>coding challenge</title>
<form method="post" action="">
<h2>New medical record</h2>
<input type="text" name="fn" placeholder="First name:"required>
<input type="text" name="ln" placeholder="last name:" required>

<input type="checkbox" name="gd" label="Male">
<input type="checkbox" name="gd" label="Female">
<input type="number" name="age" placeholder="Age:" required>
<input type="text" name="fn" placeholder="First name" required>
<select name="country" required>
<option value=DRC">DR. Congo</option>
<option value=name="..."> Other</option>

</select>
<input type="submit" name="save" value="save" onclick="checkvalues()">
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
if($insert) echo "<script>
Medical record added successfully
</script>"
else echo "<script>
Medical record has not been added. Please, try again
</script>"
}

 ?>
