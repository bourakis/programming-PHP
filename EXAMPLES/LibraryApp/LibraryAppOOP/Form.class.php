<?php

class Form
{
	function create($method, $action)
	{
		echo "
		<form method=\"$method\" action=\"$action\">
		<table border=\"0\">
		";
	}

	function text($label, $name, $value)
	{
		echo "
		<tr><td>
				<b>$label</b>
			</td>
			<td>
				<input type=\"text\" name=\"$name\" value=\"$value\" />
			</td>
		</tr>
		";
	}


	function hidden($name, $value)
	{
		echo "
			<input type=\"hidden\" name=\"$name\" value=\"$value\" />
		";
	}

	function button($value)
	{
		echo "
		<tr><td>
				
			</td>
			<td>
				<input type=\"submit\" name=\"submit\" value=\"$value\" />
			</td>
		</tr>
		";
	}

	function close()
	{
		echo "
		</table>
		</form>
		";
	}

}

?>