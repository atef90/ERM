<?php 

$this->load->view('templates/header', $bandeau);

echo $titre ;

?>
			<table style="margin-left:auto;margin-right:auto;">
				<tr>
					<td style="width:500px;">
						Cette application est l'aboutissement de plus de 500 heures de travail acharné.<br />
						Elle remplace avantageusement le <a href="http://www.ceck.org/resources/pack-vip/">projet VIP</a> en faisant appel au framework « codeigniter ».<br />
						Si vous estimez qu'elle vaut bien un petit encouragement de votre part<br />(5 € ou plus), merci d'utiliser le bouton « Faire un don » ci-dessous.<br />
					</td>
				</tr>
				<tr><td> &nbsp; </td></tr>
				<tr>
					<td>
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="margin-left:140px;">
							<input type="hidden" name="cmd" value="_s-xclick" />
							<input type="hidden" name="hosted_button_id" value="E7JHNA5XHXTMG" />
							<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif" style="border: 0;" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !" title="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !" />
							<img alt="" style="border: 0;" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1" />
						</form>
					</td>
				</tr>
				<tr><td> &nbsp; </td></tr>
				<tr>
					<td>
						La section « Gestion bancaire » sera identique à <a href="http://vip.ceck.org/index.php?location=bank&amp;topic=banks">celle du projet VIP</a>. Elle est en cours de ré-écriture.<br /><br />
						<?php echo safe_mailto('christianeckenspieller@gmail.com', 'Merci de me contacter'); ?> si vous avez besoin d'une nouvelle fonctionnalité, ou d'une application spécifique répondant à votre propre cahier des charges.<br />
						Christian Eckenspieller - <a href="http://www.ceck.org/">ceck.org</a><br />
					</td>
				</tr>
			</table>
<?php 

$this->load->view('templates/footer');



// «  »






