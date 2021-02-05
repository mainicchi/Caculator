<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Calculator</title>
	</head>

    <?php 
extract($_POST);
if(isset($save))
{
	switch($ch)
	{
		case '+':
		$res=$fn+$sn;
		break;
		
		case '-':
		$res=$fn-$sn;
		break;
		
		case '*':
		$res=$fn*$sn;
        break;
        
        case '/':
            $res=$fn/$sn;
            break;
		
	}
	
}

?>
	<body>
		<form method="post">		
			<div>
				<p>Number one</p>
				<input type="number" name="fn" value="<?php  echo @$fn;?>"/>
			</div>

			<div>
				<p>Number two</p>
				<input type="number" name="sn" value="<?php  echo @$sn;?>"/>
			</div>

			<div>
				<p>Select calculation</p>
				
				<select name="ch">
					<option>+</option>
					<option>-</option>
					<option>*</option>
                    <option>/</option>
				</select>
			
			</div>

			<div>
				
				<input type="submit" 
				name="save" value="Show Result"/>
			
			</div>

            <div>
				<p>Result = </p>
				<input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$res;?>"/>
			</div> 

		</form>


</body>
</html>