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
print("<h1>Missing Items List</h1>");

    print("<table style='width:100%;text-color:white;'>");
    print("<tr>");
    print("<td style='width:25%;text-align:center;'><button type="button" ><a href="home.php">Home</a></button></td>");
    print("<td style='width:25%;text-align:center;'><button type="button"><a href="missingitems.php">Missing Items</a></button></td>");
    print("<td style='width:25%;text-align:center;'><button tyep="button"><a href="nonstolenitemregister.php">Register Items</a></button></td>");
    print("<td style='width:25%;text-align:center;'><button type="button"><a href="profile.php">Profile</a></button></td>");
    print("</tr>");
    print("</table>");
    print("<br>");

    print("<table style='width:100%;text-color:white;'>");
    print("<tr>");
    print("<td style='width:10%;font-size:20px;padding-left:5px;'><B>Item</B></td>");
    print("<td style='width:15%;font-size:20px;'><B>Serial Number</B></td>");
    print("<td style='width:10%;font-size:20px;'><B>Picture</B></td>");
    print("<td style='width:25%;font-size:20px;'><B>Contact Information</B></td>");
    print("<td style='width:50%;font-size:20px;'><B>Description</B></td>");
    print("</tr>");
    print("</table>");

    print("<table style="width:100%;text-color:white;" class='tddata'>");
    print("<tr>");
    print("<td style='width:10%;border-top:1px solid red;border-bottom:1px solid red;border-left:1px solid red;padding-left:5px;'>Play Station 4</td>");
    print("<td style='width:15%;border-top:1px solid red;border-bottom:1px solid red;'>4930293847584930</td>");
    print("<td style='width:10%;border-top:1px solid red;border-bottom:1px solid red;'><img src="ps4.jpg" alrt="fun" style='width:100px;height:100px;'></td>");
    print("<td style='width:25%;border-top:1px solid red;border-bottom:1px solid red;'>Ryan Cameron rcameron@live.com</td>");
    print("<td style='width:50%;border-top:1px solid red;border-bottom:1px solid red;border-right:1px solid red;'>Special edition ps4 with an amaerican flag on top and whiteish silver bottom</td>");


    print("</tr>");
    print("</table>");

?>






