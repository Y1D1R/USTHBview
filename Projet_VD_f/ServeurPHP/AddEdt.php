<?php
		
    if (array_key_exists('BtnAdd', $_POST)){
        button2();
    }
        function button2() {
			$a = array($_POST['NomSp'], $_POST['NomAn'], $_POST['jour'], $_POST['heure'], $_POST['NomSalle'], $_POST['NumGrp'], $_POST['TypeSc'], $_POST['NomModule'], $_POST['NomPrf'], $_POST['AdrMail']);
            //print_r($a);
            if (($open = fopen("../edt.csv", "r")) !== FALSE)
		    {

			while (($data = fgetcsv($open, 1000, ",")) !== FALSE)
			{		
			$array[] = $data;
			print_r($data);
			}

			fclose($open);

		    }
            /*
                $line= array(
                array("ali","ahmed",20)
            );
            */
		    $msBuffer = fopen("php://memory","w+");
		    $handle = fopen("../edt.csv", "a");
		    fputcsv($msBuffer, $a);
            /*
            foreach($line as $h){
			    fputcsv($msBuffer, $h);
		    }*/
		    rewind($msBuffer);
		    fwrite($handle, stream_get_contents($msBuffer));
		    // Close the memory stream
		    fclose($msBuffer);

		    fclose($handle);
		}
	?>