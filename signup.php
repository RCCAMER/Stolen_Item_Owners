
<?
require_once("dbconnect.inc");
?>
<style>
body{
  background-color:black;
}
td{
  color:white;
}
h1{
  color:red;
  text-align:center;
}
.tddata{
  border-spacing:0px;
}
button{
  border-radius:20px;
}
</style>
<?


    $PHP_SELF = 'signup.php';

    print("<FORM name=theForm action=$PHP_SELF method=POST>");
    print("<INPUT type=hidden name=task value=insert >");

    print("<table style='width:100%;text-color:white;'>");
    print("<tr>");
    print("<td style='width:20%;font-size:20px;padding-left:5px;'><B>First Name</B></td>");
    print("<td style='width:20%;font-size:20px;padding-left:5px;'><B>Last Name</B></td>");
    print("<td style='width:20%;font-size:20px;padding-left:5px;'><B>UserName</B></td>");
    print("<td style='width:20%;font-size:20px;'><B>Address</B></td>");
    print("<td style='width:20%;font-size:20px;'><B>Password</B></td>");
    print("</tr>");
    print("</table>");

    print("<table style='width:100%;text-color:white;' class='tddata'>");
    print("<tr>");
    print("<td style='width:20%;border-top:1px solid red;border-bottom:1px solid red;border-left:1px solid red;'><input type='text' name='firstname' value='$fname' ></td>");
    print("<td style='width:20%;border-top:1px solid red;border-bottom:1px solid red;'><input type='text' name='lastname' value='$lname' ></td>");
    print("<td style='width:20%;border-top:1px solid red;border-bottom:1px solid red;'><input type='text' name='username' value='$uname' ></td>");
    print("<td style='width:20%;border-top:1px solid red;border-bottom:1px solid red;'><textarea type='text' name='address' rows='5' cols='50' maxlength='500'>$address </textarea></td>");
    print("<td style='width:20%;border-top:1px solid red;border-right:1px solid red;border-bottom:1px solid red;padding-left:5px;'><input type='text' name='password' value='$password' maxlength='16' size='16'></td>");
    print("</tr>");
    print("</table>");
    print("<br>");

    print("<input type='submit' value='Submit'>");

    print("</FORM>");
////////////////////////////////////////////////////////////////
///TASK
//////////////////////////////////////////////////////////////


$task = $_POST['task'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$uname = $_POST['username'];
$address = $_POST['address'];
$password = $_POST['password'];

if($task == 'insert'){
    $sql = "INSERT INTO Users (FirstName,LastName,UserName,Address,Password) VALUES ('$fname','$lname','$uname','$address','$password')";
if ($con->query($sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $con->error;
}$con->close();
}
mysqli_close($con);

