<?
require_once("seritore.inc");//this will contain all the needed things to talk to the database
require_once("login.inc");//hand login info and stuff needed 
?>
<style>
body{
    background-color:black;
}
table{
  border:0px solid blue;
}
h1{
  color:red;
  text-align:center;
}
button{
  border-radius:20px;
}

</style>
<?
    print("<h1>Seritor</h1>");

    print("<table style='width:100%;text-color:white;'>");
    print("<tr>");
    print("<td style='width:25%;text-align:center;'><button type="button"><a href="home.php">Home</a></button></td>");
    print("<td style='width:25%;text-align:center;'><button type="button"><a href="missingitems.php">Missing Items</a></button></td>");
    print("<td style='width:25%;text-align:center;'><button tyep="button"><a href="nonstolenitemregister.php">Register Items</a></button></td>");
    print("<td style='width:25%;text-align:center;'><button type="button"><a href="profile.php">Profile</a></button></td>");

    print("</tr>");
    print("</table>");

    print("<table style='width:100%;'>");
    print("<tr>");
    print("<td style='width:33%;'>");
    print("<div style='flaot:left;border-radius:20px;border:1px solid red;background-color:white;'>");
    print("<h1>About Pages</h1>");
    print("<p>The Idea of this came when a friend at work had his house broke into and had items taken,
      of those items a PS4 was involved. He tried to find it but had no luck, then I thought of making a bot
      like thing to search the web for his PS4. It was a long shot and then another friend at work suggested I make
      something like this, and so I did and here it is.</p>");
    print("</div>");
    print("</td>");
    print("<td style='width:33%;'>");
    print("<div style='margin:auto;border-radius:20px;border:1px solid red;background-color:white;'>");
    print("<h1>How It Works</h1>");
    print("<p>This is very simple. You just Register your item(s) so you will add as much detail and description as you can upload a picture
      give what ever information you want to give for contacting you if someone ever finds your stuff and give your name and then hit submit.Then you
      can go to (Profile) and edit, update, and flag your item(s) missing and or found which would just be unflaging your item.</p>");
    print("</div>");
    print("</td>");
    print("<td style='width:33%;'>");
    print("<div style='flaot:right;border-radius:20px;border:1px solid red;background-color:white;'>");
    print("<h1>Public Notice</h1>");
    print("<p>This site is not a Private site so anyone can get on this site and see all of this information. The information is PUBLIC DATA so dont put anything you want to keep private on here because
      anyone can see it.Your profiles will be private the only data everyone can see is the Home and Missing Items page, the other two tabs are just for you mainly profile is just for you to see and the ones
      maintaining the site.</p>");
    print("</div>");
    print("</td>");
    print("</tr>");
    print("</table>");
    print("</div>");
?>
