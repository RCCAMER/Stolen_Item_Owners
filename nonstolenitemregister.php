<?
//require_once("seritore.inc");
//require_once("login.inc");
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

    print("<h1>Item Registration</h1>");

    print("<table style='width:100%;text-color:white;'>");
    print("<tr>");
    print("<td style='width:25%;text-align:center;'><button type='button' ><a href='home.php'>Home</a></button></td>");
    print("<td style='width:25%;text-align:center;'><button type='button'><a href='missingitems.php'>Missing Items</a></button></td>");
    print("<td style='width:25%;text-align:center;'><button tyep='button'><a href='nonstolenitemregister.php'>Register Items</a></button></td>");
    print("<td style='width:25%;text-align:center;'><button type='button'><a href='profile.php'>Profile</a></button></td>");
    print("</tr>");
    print("</table>");
    print("<br>");

    print("<FORM name=theForm action='nonstolenitemregister.php' method=POST>");
    print("<INPUT type=hidden name=task value=insert >");

    print("<table style='width:100%;text-color:white;'>");
    print("<tr>");
    print("<td style='width:10%;font-size:20px;padding-left:5px;'><B>Item</B></td>");
    print("<td style='width:15%;font-size:20px;'><B>Serial Number</B></td>");
    print("<td style='width:20%;font-size:20px;'><B>Picture</B></td>");
    print("<td style='width:25%;font-size:20px;'><B>Contact Information</B></td>");
    print("<td style='width:40%;font-size:20px;'><B>Description</B></td>");
    print("</tr>");
    print("</table>");

    print("<table style='width:100%;text-color:white;' class='tddata'>");
    print("<tr>");
    print("<td style='width:15%;border-top:1px solid red;border-bottom:1px solid red;'><input type='text' name='item' value='$item' ></td>");
    print("<td style='width:10%;border-top:1px solid red;border-left:1px solid red;border-bottom:1px solid red;padding-left:5px;'><input type='text' name='serial_number' value='$serial_number' maxlength='16' size='16'></td>");
   // print("<td style='width:20%;border-top:1px solid red;border-bottom:1px solid red;'> <input type='file' name='pic' accept='image/'></td>");
    print("<td style='width:25%;border-top:1px solid red;border-bottom:1px solid red;'><textarea type='text' name='contact_information' rows='5' cols='50' maxlength='500'>$info </textarea></td>");
    print("<td style='width:40%;border-top:1px solid red;border-bottom:1px solid red;border-right:1px solid red;'><textarea type='text' name='description' rows='5' cols='50' maxlength='500' >$desc </textarea></td>");
    print("</tr>");
    print("</table>");
    print("<br>");

    print("<input type='submit' value='Submit'>");

    print("</FORM>");

////////////////////////////////////////////////////
///TASK
//////////////////////////////////////////////////
$task = $_POST['task'];
$item = $_POST['item'];
$serial_number = $_POST['serial_number'];
$info = $_POST['contact_information'];
$desc = $_POST['description'];

if($task == 'insert'){
$sql = "INSERT INTO Registration (Item,Serial_Number,Picture,Contact_Info,Description) VALUES ('$item','$serial_number',0,'$info','$desc')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}


}
mysqli_close($con);
?>


