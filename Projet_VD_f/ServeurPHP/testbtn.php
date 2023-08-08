<?php
		if(array_key_exists('button1', $_POST)) {
			button1();
		}
		else if(array_key_exists('button2', $_POST)) {
			button2();
		}
		function button1() {
			echo ' 
			<link rel="icon" type="image/png" href="../logoUsthb.png" />
			<style>
			html, body {
				width: 100%;
				height:100%;
			  }

			div{
				margin:20px;
				margin-left: 30px;
			}  
			p{
				margin:10px;
				margin-left: 20px;
			}

			svg{
				position: absolute;
			    width : 45%;
				right : 5%;

			}  
			 
			  body {
				  background: #ececec;
				  background-size: 400% 400%;
				  font-family: verdana;
			      font-size: 24px;
				  color:black;
			  }
			  
			 
			.container {
				position: absolute;
				top: 10%;
			  }
			  .button {
				border: none;
				display: block;
				text-align: center;
				cursor: pointer;
				text-transform: uppercase;
				outline: none;
				overflow: hidden;
				position: relative;
				color: #eeeeee;
				font-weight: 600;
				font-size: 15px;
				background-color: #142d4c;
				padding: 15px 50px;
				margin: 0 auto;
				border-radius: 10px;      
			  }
			  .button span {
				position: relative;
				z-index: 1;
			  }
			  .button:after {
				content: "";
				position: absolute;
				left: 0;
				top: 0;
				height: 470%;
				width: 140%;
				background: #385170;
				-webkit-transition: all 0.5s ease-in-out;
				transition: all 0.5s ease-in-out;
				-webkit-transform: translateX(-100%) translateY(-25%) rotate(45deg);
				transform: translateX(-100%) translateY(-25%) rotate(45deg);
			  }
			  .button:hover:after {
				-webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
				transform: translateX(-9%) translateY(-25%) rotate(45deg);
			  }
			
				
			div.tooltip {   
				position: absolute;         
				text-align: center;         
				width: 80px;                    
				height: 28px;                   
				padding: 2px;               
				font: 12px sans-serif;      
				background: lightsteelblue; 
				border: 0px;        
				border-radius: 10px;         
				pointer-events: none;           
			}

		.cl1{
		fill:white;
		stroke: black;
		color: cornflowerblue;
		}

		pathh {
			fill: #3182bd;
		  }
		  
		  text {
			font-family: verdana;
			font-size: 24px;
		  }
		 select{
			font-family: verdana;
			font-size: 20px;
			background-color: whitesmoke;
			color: black;
			border-radius: 10px;
		 }
		 input{
			font-family: verdana;
			font-size: 20px;
			background-color: whitesmoke;
			color: black;
			border-radius: 10px;
		 }
		 h1 {
			
			font-family: verdana;
			font-size: 120%;
			text-align-last: center;
			color: aliceblue;
			background-color: #385170;
			border-radius: 10px;
			padding: 20px;
		  }
    
    table {
        border-collapse: collapse;
        width : 80%;
        color : #eb4034;
        font-family : monospace;
        font-size : 25px;
        text-align : left;


    }
    th{
        background-color : #eb4034;
        color:white;
    }
    tr:nth-child(even){background-color:white}
	</style>';
			echo "<html><title>Affichage des noms des etudiants</title><body><center><table>\n\n";

		// Open a file
		$file = fopen("../edt.csv", "r");

		// Fetching data from csv file row by row
		while (($data = fgetcsv($file)) !== false) {

			// HTML tag for placing in row format
			echo "<tr>";
			foreach ($data as $i) {
				
				echo "<td>" . htmlspecialchars($i)
					. "</td>";
			}
			echo "</tr> \n";
		}

		// Closing the file
		fclose($file);

		echo "\n</table></center></body></html>";
		}
		function button2() {
			echo "This is Button2 that is selected";
		}
	?>