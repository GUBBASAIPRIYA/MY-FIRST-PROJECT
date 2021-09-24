<!doctype html>
<?php
$servername = "localhost";
$username="sai";
$password="sai";
$dbname="saipriya";
try{
$conn = mysqli_connect($servername, $username,$password,$dbname);
echo("successful in connection");
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection");
}
if(isset($_POST['submit'])){
$Customer_Name=$_POST['Customer_Name'];
$Email=$_POST['Email'];
$Phone_Number=$_POST['Phone_Number'];
$Feedback=$_POST['Feedback'];
$register_query = "INSERT INTO `form3`(`Customer_Name`,`Email`,`Phone_Number`,`Feedback`) VALUES ('$Customer_Name','$Email','$Phone_Number','$Feedback')";
try{
$register_result = mysqli_query($conn, $register_query);
if($register_result){
if(mysqli_affected_rows($conn)>0){
echo(" THANK YOU ");
}else{
echo("error occur");
}
 
}
}catch(Exception $ex){
echo("error".$ex->getMessage());
}
}
?>






<html>
<body style="background-color:#ccccff" ><br><br><br><br><br>
<div class="feed">
	<h2 align="center">GIVE YOUR FEEDBACK</h2>
	<div class="feed_form">
		<form  name='f2' align="center">
			<input type="text" name="Customer_Name" placeholder="YOUR NAME" required><br><br>
			<input type="email" name="Email" placeholder="EMAIL ID" required><br><br>
			<input type="number" name="Phone_Number" placeholder="CONTACT NUMBER" required=><br><br>
			<textarea rows="5" cols="20" name="Feedback" placeholder="FEEDBACK" required></textarea><br><br><br>
                   	<input type="submit" name="submit">
		</form>
	</div>
</div>
</body>
</html>