<html>
<head>
	<title>How Much is that in...</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    
<div id="header">
    <h1>How Much Is That In Babies?</h1>
    <h3>The original pounds to babies converter</h3>
</div>

<div id="section" class="page-wrap">  

    <form action="index.php" method="POST">
    	<table>
    		<tr>
    			<td>From:  </td>
    			<td><input type=text name=val></td> 
    			<td><p>lbs.</p></td> 
    		</tr>
    		<tr>
    			<td>To: </td>
    			<td>
    				<select name="to">
    					<option value=1>Babies</option>
    					<option value=2>Watermelons</option>
    					<option value=3>Adult Male Honey Badgers</option>
    					<option value=4>Macbook Pros</option>
    					<option value=5>Human Brains</option>
    					<option value=6>Volvo 960 Sedans</option>
    				</select>
    			</td>
    		</tr>
    	</table>
    	<div id="input">
    	    <input type=submit value=Convert>
        </div>
    	<?php
    	if(isset($_POST['val'])) {
    	    
    	    $val=$_POST['val'];
    	    
    	    if(!preg_match('/^[0-9.]/',$val)) {
    	        
            	echo '<script language="JavaScript">'."\n".'alert("Sorry. I can not calculate retard.");'."\n";
            	echo "window.location=('index.php');\n";
            	echo '</script>';
            	
        	}
        	
        	$to=$_POST['to'];
        	
        	if($to==0) {
        	    
            	echo '<script language="JavaScript">'."\n".'alert("Please select unit to convert to.");'."\n";
            	echo '</script>';
            	
        	} else {
        	    
            	function assign($to,$val) {
            	    
                	switch ($to) {
                	    
                    	case 1:
                        	$tounit="Babies";
                        	$output=(double)($val / 7.5);
                        	$result = number_format($output, 4);
                    	break;
                    	
                    	case 2:
                        	$tounit="Watermelons";
                        	$output=(double)($val / 20.00);
                        	$result = number_format($output, 4);
                    	break;
                    	
                    	case 3:
                    	    $tounit="Adult Male Honey Badgers";
                        	$output=(double)($val / 27.50);
                        	$result = number_format($output, 4);
                    	break;
                    	
                    	case 4:
                    	    $tounit="MackBook Pros";
                        	$output=(double)($val / 4.49);
                        	$result = number_format($output, 4);
                    	break;
                    	
                    	case 5:
                    	    $tounit="Human Brains";
                        	$output=(double)($val / 3.00);
                        	$result = number_format($output, 4);
                    	break;
                    	
                    	case 6:
                            $tounit="Volvo 960 Sedans";
                        	$output=(double)($val / 3460.00);
                        	$result = number_format($output, 4);
                    	break;
                
                	}
                	
            	echo "<br><br><h3 align=center> ",$val," lbs. is equal to ",$result,"</u> $tounit  </h3>";
            	}
            	
        	assign($to,$val);
        	}
    	}
    ?>
    </form>
</div>

<footer class="site-footer">
    <p>A Product by Android Hell</p>
</footer>

</body>
</html>


