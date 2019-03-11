<?php
							
							if (isset($_GET['Nom']) == true)
							{
								$login = $_GET['Nom'];
								$pass = $_GET['Prenom'];
								
								if ($_GET['status'] == '1') {
								
								}
								echo "<div class=\"dispo\">dispo</div>";
							
								if ($_GET['status'] == 2) {
								
								}
								echo "<div class=\"dispo\">occupe</div>";
							
								if ($_GET['status'] == 3) {
								
								}
								echo "<div class=\"dispo\">absent</div>";
								
							}
							
?>