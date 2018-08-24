<?php 
	class Funcs
	{
		function notNull($value, $default)
		{
			return $value == null || $value == '' ? $default : $value;
		}
		/**
		*E-echo
		*P-print_r
		*V-var_dump
		*/
		function divBorder($content, $style = "solid", $color = "red", $radius = "5px")
		{
			return "<div style='border-style: ".$style."; border-width: 5px; border-color: ".$color."; border-radius: ".$radius.";'>".$content."</div>";
		}

		function trataSpecialChars($str)
		{
			$str = trim($str, '<p>');
			$str = trim($str, '</p>');
			$str = trim($str, '\\n');
			$str = trim($str, '\\r');
			$str = trim($str, '\n');
			$str = trim($str, '\r');
			$str = trim($str, '<br>');
			$str = trim($str, '</br>');
			$str = trim($str, '\\n\\r');
			$str = trim($str, '\n\r');
			$str = str_replace("\\n", "", $str);
			while (strpos($json, "  ") || strpos($json, "\\n")|| strpos($json, "\n")|| strpos($json, "\\r")|| strpos($json, "\r")|| strpos($json, "\\n\\r") || strpos($json, "\n\r") || strpos($json, "\\r\\n") || strpos($json, "\r\n") || strpos($json, "<p>") || strpos($json, "</p>")) {
				if (strpos($json, "  ")) {
					$json = str_replace("  ", " ", $json);
				}
				if (strpos($json, "\\n\\r")) {
					$json = str_replace("\\n\\r", "", $json);
				}
				if (strpos($json, "\n\r")) {
					$json = str_replace("\n\r", "", $json);
				}
				if (strpos($json, "\\n")) {
					$json = str_replace("\\n", "", $json);
				}
				if (strpos($json, "\n")) {
					$json = str_replace("\n", "", $json);
				}
				if (strpos($json, "\\r")) {
					$json = str_replace("\\r", "", $json);
				}
				if (strpos($json, "\r")) {
					$json = str_replace("\r", "", $json);
				}
				if (strpos($json, "\\r\\n")) {
					$json = str_replace("\\r\\n", "", $json);
				}
				if (strpos($json, "\r\n")) {
					$json = str_replace("\r\n", "", $json);
				}
				if (strpos($json, "<p>")) {
					$json = str_replace("<p>", "", $json);
				}
				if (strpos($json, "</p>")) {
					$json = str_replace("</p>", "", $json);
				}
			}
		}
	}
 ?>