<?
//require_once("seritore.inc");
require_once("login.php");
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
    $PHP_SELF = 'profile.php';

    print("<h1>User Profile </h1>");

    print("<table style='width:100%;text-color:white;'>");
    print("<tr>");
    print("<td style='width:25%;text-align:center;'><a href='home.php'><button type='button' >Home</button></a></td>");
    print("<td style='width:25%;text-align:center;'><a href='missingitems.php'><button type='button'>Missing Items</button></a></td>");
    print("<td style='width:25%;text-align:center;'><a href='nonstolenitemregister.php'><button tyep='button'>Register Items</button></a></td>");
    print("<td style='width:25%;text-align:center;'><a href='profile.php'><button type='button'>Profile</button></a></td>");
    print("</tr>");
    print("</table>");
    print("<br>");

    print("<FORM name=theForm action=$PHP_SELF method=POST>");
    if($userid){
    print("<INPUT type=hidden name=task value=update>");
    }else{
    print("<INPUT type=hidden name=task value=insert>");
    }

    $sql  ="SELECT r.Item, r.Serial_Number,r.Picture,r.Contact_Info,r.Description ";
    $sql .="FROM Registration r ";
    //$sql .="AND r.UID = u.UID ";
    if($rs = $con->query($sql)){ echo "this work"};
    if($rs->num_rows) {
    while($mysql_row = $rs->fetch_assoc()) {
        $item = $mysql_row['Item'];
        $serial_number = $mysql_row['Serial_Number'];
        $pic = $mysql_row['Picture'];
        $info = $mysql_row['Contact_Info'];
        $desc = $mysql_row['Description'];
        $userid = $mysql_row['UID'];

    print("<table style='width:100%;text-color:white;' class='tddata'>");
    print("<tr>");
    print("<td style='width:10%;font-size:20px;padding-left:5px;'><B>Item</B></td>");
    print("<td style='width:20%;font-size:20px;'><B>Serial Number</B></td>");
    print("<td style='width:20%;font-size:20px;'><B>Picture</B></td>");
    print("<td style='width:20%;font-size:20px;'><B>Contact Information</B></td>");
    print("<td style='width:15%;font-size:20px;'><B>Description</B></td>");
    print("<td style='width:10%;text-align:center;font-size:20px;'><B>Stolen</B></td>");
    print("</tr>");
    print("<tr>");
    print("<td style='border-top:1px solid red;border-left:1px solid red;border-bottom:1px solid red;padding-left:5px;'><input type='text' name='serial number' maxlength='16' size='16'>$serial_name</td>");
    print("<td style='border-top:1px solid red;border-bottom:1px solid red;'><input type='text' name='item' >$item</td>");
    print("<td style='border-top:1px solid red;border-bottom:1px solid red;'> <input type='file' name='pic' accept='image/'></td>");
    print("<td style='border-top:1px solid red;border-bottom:1px solid red;'><textarea type='text' name='description' rows='5' cols='30' maxlength='500' >$info </textarea></td>");
    print("<td style='border-top:1px solid red;border-bottom:1px solid red;'><textarea type='text' name='description' rows='5' cols='50' maxlength='500' >$desc</textarea></td>");
    if($stolen) $str == 'CHECKED'; else $str =='';
    print("<td style='text-align:center;border-top:1px solid red;border-bottom:1px solid red;border-right:1px solid red;'><input type='checkbox' $str  name='stolen' value='1' ></td>");
    print("</tr>");
    print("</table>");
    print("<br>");
    }
    print("<table>");
    print("<tr>");
    print("<td>");
    print("<button type='submit' value'=submit'>Submit</button>");
    print("</td>");
    print("</tr>");
    print("</table>");
    }else{
    print("<table style='width:100%;text-color:white;' class='tddata'>");
    print("<tr>");
    print("<td style='width:10%;font-size:20px;padding-left:5px;'><B>Item</B></td>");
    print("<td style='width:20%;font-size:20px;'><B>Serial Number</B></td>");
    print("<td style='width:20%;font-size:20px;'><B>Picture</B></td>");
    print("<td style='width:20%;font-size:20px;'><B>Contact Information</B></td>");
    print("<td style='width:15%;font-size:20px;'><B>Description</B></td>");
    print("<td style='width:10%;text-align:center;font-size:20px;'><B>Stolen</B></td>");
    print("</tr>");
    print("<tr>");
    print("<td style='border-top:1px solid red;border-left:1px solid red;border-bottom:1px solid red;padding-left:5px;'><input type='text' name='serial_number' maxlength='16' size='16'>$serial_name</td>");
    print("<td style='border-top:1px solid red;border-bottom:1px solid red;'><input type='text' name='item' >$item</td>");
    print("<td style='border-top:1px solid red;border-bottom:1px solid red;'> <input type='file' name='pic' accept='image/'></td>");
    print("<td style='border-top:1px solid red;border-bottom:1px solid red;'><textarea type='text' name='contact_information' rows='5' cols='30' maxlength='500' >$info </textarea></td>");
    print("<td style='border-top:1px solid red;border-bottom:1px solid red;'><textarea type='text' name='description' rows='5' cols='50' maxlength='500' >$desc</textarea></td>");
    if($stolen) $str == 'CHECKED'; else $str =='';
    print("<td style='text-align:center;border-top:1px solid red;border-bottom:1px solid red;border-right:1px solid red;'><input type='checkbox' $str  name='stolen' value='1' ></td>");
    print("</tr>");
    print("</table>");
    print("<table>");
    print("<tr>");
    print("<td>");
    print("<button type='submit' value'=submit'>Submit</button>");
    print("</td>");
    print("</tr>");
    print("</table>");
    }
    print("<br>");
    print("</FORM>");

/////////////////////////////////////////////////////////////////////
//TASK
////////////////////////////////////////////////////////////////////
    $task = $_POST['task'];
    $serial_number = $_POST['serial_number'];
    $item = $_POST['item'];
    $stolen = $_POST['stolen'];
    $desc = $_POST['description'];
    $info = $_POST['contact_information'];

if($task == 'insert'){
    $sql = "INSERT INTO Registration (Item,Serial_Number,Picture,Contact_Info,Description,UID) VALUES ('$item','$serial_number',0,'$info','$desc',$userid)";
if ($con->query($sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $con->error;
}$con->close();
}

if($task == 'update'){
    $sql = "UPDATE  Registration SET ";
    $sql .="Item = '$item' ";
    $sql .="UID = '$userid' ";
    $sql .="Serial_Number = '$serial_number' ";
    $sql .="Picture = '0' ";
    $sql .="Contact_Info = '$info' ";
    $sql .="Description = '$desc' ";
if ($con->query($sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $con->error;
}$con->close();
}
mysqli_close($con);
?>

