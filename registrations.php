<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<!-- saved from url=(0031)http://day.scratch.mit.edu/home -->
<html>
  <head>
      <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>

      <title>Scratch Day</title>
      
      <script src='./scratch_files/maps' type='text/javascript'></script><script src='./scratch_files/main.js' type='text/javascript'></script><style type='text/css'>@media print{.gmnoprint{display:none}}@media screen{.gmnoscreen{display:none}}</style>
      <link rel='shortcut icon' href='http://day.scratch.mit.edu/sites/default/files/pictures/favicon.png' type='image/x-icon'>
        <link type='text/css' rel='stylesheet' media='all' href='./scratch_files/3dbce13e3e0104029952f4239c8957e0.css'>
      <link type='text/css' rel='stylesheet' media='all' href='./scratch_files/css_1c568289f6252198d77ba0ab1802e6f3.css'>
      
      <link type='text/css' rel='stylesheet' media='all' href='./scratch_files/ui.theme.css'>
      
      <!--[if lt IE 7]>
        <link rel='stylesheet' href='/sites/all/themes/ad_blueprint/ie_lt7.css' type='text/css'>
      <![endif]-->
      <script type='text/javascript' src='./scratch_files/js_d031147d2e20a652d59aa957bb98decf.js'></script>
      <script type='text/javascript' src='./scratch_files/gmap_markers.js'></script>
      <script type='text/javascript'> </script>
      <script type='text/javascript' charset='UTF-8' src='./Scratch   Day_files/{mod_drag,mod_ctrapi,mod_zoom,mod_scrwh}.js'></script>
  </head>
  <body class='none'>
    <div id='wrapper1'>
      <div id='wrapper2'>
        <div id='wrapper3'>
          <div id='wrapper4' class='navbar-1'>
            <div class='clear-block'>
              <div id='header' class='clear-block'>
                <div>
                  <div id='logo-sitename'>
                    <div class='clear-block'>
                        <a href='http://day.scratch.wncc-iitb.org/' title='Home' id='logo'>
                          <img src='./scratch_files/ad_blueprint_logo.png' alt='Home'>
                        </a> 
                        <a href='http://day.scratch.wncc-iitb.org/' title='Home' id='logo'>
                          <img style='padding-left:150px;padding-right:0px;padding-top:100px' width='200px' src='./scratch_files/wncc_logo.png' alt='Home'>
                        </a>    
                    </div>
                  </div>
                </div>
              </div>  
              <div id='right-header'>
                <div id='block-block-3' class='block block-block'>
                  <div class='content'>
                    <a href='/register.php'>Register Here!</a>  
                  </div>
                </div>
              </div>
            </div>
          
            <div id='middle' class='clear-block'>
              <div id='main-outer'>
              <div id='main-outer2'>
                <div>
                  <div id='main'>
                    <div id='main2'>
                      <div id='main-inner'>
                        <div id='main-inner2'>
                          <div class='inner'>
                            <div class='panel-flexible panels-flexible-1 clear-block'>
                              <div class='panel-flexible-inside panels-flexible-1-inside'>
                                <div class='panels-flexible-row panels-flexible-row-1-row_2 panels-flexible-row-last clear-block'>
                                  <div class='inside panels-flexible-row-inside panels-flexible-row-1-row_2-inside panels-flexible-row-inside-last clear-block'>
<?php
$con=mysqli_connect("wncc-iitb.org","sushant","wnccsushant","scratch_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * from Team";
$result = mysqli_query($con, $sql);
$num_rows = mysqli_num_rows($result); 
echo "<h1>$num_rows</h1>";
if (!$result)
{
  die('Error: ' . mysql_error($con));
}
echo "<table><tr><th>Team Name</th><th>Member 1</th><th>Member 2</th></tr>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result, MYSQL_ASSOC)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['team'] . "</td><td>" . $row['name1'] . "</td><td>" . $row['name2'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
mysqli_close($con);

?>
                                </div>
                              </div>
                            </div>
                          </div>          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div id='navbar'>
                  <div id='primary'>
                    <ul class='links'>
                      <li class='menu-153 active-trail first active'><a href='http://day.scratch.wncc-iitb.org/' title='' class='active'>Home</a></li>
                      <li class='menu-886'><a href='/register' title='Media'>Registrations</a></li>
                      <li class='menu-886'><a href='/prizes' title='Media'>Prizes</a></li>
                      <li class='menu-133'><a href='/resources' title=''>Resources</a></li>                      
                      <li class='menu-132'><a href='/store' title=''>Store</a></li>
                      <li class='menu-503 last'><a href='/about' title=''>About</a></li>
                    </ul>          
                  </div>
                </div>      
              </div>
            </div>
          </div>
        </div>
        <div id='footer'>
          <div id='footer-inner'>
            <div id='block-block-4' class='block block-block'>
              <div class='content'>
                <div id='logo-sitename'>
                    <div style='padding-left:50px' class='clear-block'>
                        <a href='http://day.scratch.wncc-iitb.org/' title='Home' id='logo'>
                          <img style='padding-left:50px;padding-right:50px;padding-top:20px' width='50px' src='./scratch_files/iitb_logo.png' alt='Home'>
                        </a>   
                        <a href='http://day.scratch.wncc-iitb.org/' title='Home' id='logo'>
                          <img style='padding-left:50px;padding-right:50px;padding-top:20px' width='100px' src='./scratch_files/wncc_logo.png' alt='Home'>
                        </a>   
                        <a href='http://day.scratch.wncc-iitb.org/' title='Home' id='logo'>
                          <img style='padding-left:50px;padding-right:50px;padding-top:20px' width='130px' src='./scratch_files/stab_logo.png' alt='Home'>
                        </a>   
                        <a href='http://day.scratch.wncc-iitb.org/' title='Home' id='logo'>
                          <img style='padding-left:50px;padding-right:50px;padding-top:0px' width='100px' src='./scratch_files/scratch_logo.png' alt='Home'>
                        </a>  

                    </div>
                    <div class='clear-block'>
                        
                    </div>
                  </div>
              </div>
            </div>
            <br>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
