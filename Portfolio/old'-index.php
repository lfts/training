<?php
include 'tpl/document_start.php'; 
?>
	 
			
<!--Corp du site-->

<br><br><br><br>
<br><br><br><br>

			<section class="titres" id="wrapper" id="bienvenue"> 
			

					<h3>Bonjour,<h4> aujourd'hui nous sommes le 
<?php

$datejour = date("d/m/y h:m:s");
echo $datejour

?>
					<br><br>Je vous souhaite la</h4>	<h3><strong>Bienvenue</strong></h3><h4>sur mon Site</h4><br><br><br><br>

							<div class="corp1">
			
								<span>Je m'appelle JOSEPH WIDDY<br><br>
								Vous trouverez ici, mon "resumé"</span><br><br>
														
							</div>
						
			</section>
		
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
			
			

<div id="bienvenue">			
<?php
include 'presentation.php'; 
?>			
</div>
<div id="presentation">	
<?php
include 'realisation.php'; 
?>	
</div>
<div id="contact">
<?php
include 'contact.php'; 
?>	
</div>
<div id="pied de page">
<?php
include 'tpl/document_end.php'; 
?>
</div>
