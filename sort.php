<?php	
		$xml = simplexml_load_file("data.xml");
		$ar = array();
		foreach ( $xml as $arr_row )
		{
			$ar[] = $arr_row;
		}
		
		function sort_callback($a, $b)
		{
			return (string)$a->item > (string)$b->item;
		}

		usort($ar, 'sort_callback');
        
		foreach ($ar as $row) {
            echo $row->item."<br>";
        }
