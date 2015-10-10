<html>
<head>
	<title>How Much is that in...</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    
<div id="header">
    <h1>How Much Is That In Babies?</h1>
    <h3>The origninal pounds to babies converter</h3>
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
    					<option value=2>Watermelon</option>
    				</select>
    			</td>
    		</tr>
    	</table>
    	<input type=submit value=Convert>
    
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
                        	$tounit="babies";
                        	$output=(double)($val / 7.5);
                        	$result = number_format($output, 4);
                    	break;
                    	
                    	case 2:
                        	$tounit="Watermelons";
                        	$output=(double)($val / 20.0);
                        	$result = number_format($output, 4);
                    	break;
                    	case 3:
                    	    $tounit="babies";
                        	$output=(double)($val / 7.5);
                        	$result = number_format($output, 4);
                    	case 4:
                    	    $tounit="babies";
                        	$output=(double)($val / 7.5);
                        	$result = number_format($output, 4);
                    	case 5:
                    	    $tounit="babies";
                        	$output=(double)($val / 7.5);
                        	$result = number_format($output, 4);
                    	case 6:
                            $tounit="babies";
                        	$output=(double)($val / 7.5);
                        	$result = number_format($output, 4);
                    	case 7:
                    	    $tounit="babies";
                        	$output=(double)($val / 7.5);
                        	$result = number_format($output, 4);
                    	case 8:
                    	    $$tounit="babies";
                        	$output=(double)($val / 7.5);
                        	$result = number_format($output, 4);
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
A Product by Android Hell
</footer>

</body>
</html>


