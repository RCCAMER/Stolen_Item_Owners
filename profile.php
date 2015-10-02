<?
require_once("seritore.inc");
require_once("login.inc");
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


    print("<h1>User Profile </h1>");

    print("<table style='width:100%;text-color:white;'>");
    print("<tr>");
    print("<td style='width:25%;text-align:center;'><button type="button" ><a href="home.php">Home</a></button></td>");
    print("<td style='width:25%;text-align:center;'><button type="button"><a href="missingitems.php">Missing Items</a></button></td>");
    print("<td style='width:25%;text-align:center;'><button tyep="button"><a href="nonstolenitemregister.php">Register Items</a></button></td>");
    print("<td style='width:25%;text-align:center;'><button type="button"><a href="profile.php">Profile</a></button></td>");
    print("</tr>");
    print("</table>");
    print("<br>");

    print("<form action="demo_form.asp">");

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
    print("<td style='border-top:1px solid red;border-left:1px solid red;border-bottom:1px solid red;padding-left:5px;'><input type="text" name="serial number" maxlength="16" size="16"></td>");
    print("<td style='border-top:1px solid red;border-bottom:1px solid red;'><input type="text" name="item" ></td>");
    print("<td style='border-top:1px solid red;border-bottom:1px solid red;'> <input type="file" name="pic" accept="image/"></td>");
    print("<td style='border-top:1px solid red;border-bottom:1px solid red;'><textarea type="text" name="description" rows="5" cols="30" maxlength="500" > </textarea></td>");
    print("<td style='border-top:1px solid red;border-bottom:1px solid red;'><textarea type="text" name="description" rows="5" cols="50" maxlength="500" > </textarea></td>");
    print("<td style='text-align:center;border-top:1px solid red;border-bottom:1px solid red;border-right:1px solid red;'><input type="checkbox" name="stolen" ></td>");
    print("</tr>");
    print("</table>");
    print("<br>");

    print("<table>");
    print("<tr>");
    print("<td>");
    print("<button type="submit" value="submit">Update</button>");
    print("</td>");
    print("</tr>");
    print("</table>");

    print("</form>");
?>

