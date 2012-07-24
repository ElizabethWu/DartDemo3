<?php

include_once("dewisfunctions.inc");

global $wb;

if($_FILES["media"]["tmp_name"] != '') {
     uploadTest($_POST);
} 
$year = $_POST['year'] == '' ? $CurrentYear : $_POST['year'];
$benchmark = $_POST['benchmark'] == '' ? '1' : $_POST['benchmark'];
$test = $_POST['test'] == '' ? 'M-CAP' : $_POST['test'];

${"year_".$year} = "selected";
${"benchmark_".$benchmark} = "selected";
${"test_".str_replace("-","",$test)} = "selected";

$yearoptions .= <<<END
	<select name=year>
		<option value=2010 $year_2010>2010</option>
		<option value=2011 $year_2011>2011</option>
		<option value=2012 $year_2012>2012</option>
		<option value=2013 $year_2013>2013</option>
	</select>
END;
$benchmarkoptions .= <<<END
	<select name=benchmark>
		<option value=1 $benchmark_1>Fall</option>
		<option value=2 $benchmark_2>Winter</option>
		<option value=3 $benchmark_3>Spring</option>
	</select>
END;
$testoptions .= <<<END
	<select name=test>
		<option value=R-CMB $test_RCMB>R-CMB</option>
		<option value=M-COMP $test_MCOMP>M-COMP</option>
		<option value=M-CAP $test_MCAP>M-CAP</option>
	</select>
END;
$body .= <<<END
<form enctype="multipart/form-data" method="POST">
<table>
	<tr>
		<th>Year</th><th>Benchmark</th><th>Test</th>
	</tr>
	<tr>
		<td>$yearoptions</td><td>$benchmarkoptions</td><td>$testoptions</td>
	</tr>
</table>
Choose a file to upload: <input name="media" type="file" /><br />
<input type="submit" value="Upload File" />
</form>
END;

include ("template.inc");

?>