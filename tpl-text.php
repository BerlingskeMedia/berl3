<? require_once("../dummy/dummy.php") ?>

<?php include('includes/_variables.php') ;?>

<?php 
if(isset($_GET["wide"])) {
	$showWide = true;
} 

if(isset($_GET["well"])) {
	$showWell = true;
} 
if(isset($_GET["oneliner"])) {
	$showOneliner = true;
} 
if(isset($_GET["top"])) {
	$showTop = true;
}
if(isset($_GET["business"])) {
	$siteBusiness = true;
}
?>


<?php 
	// $showWell = rand(1,1);
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<?php include('includes/head.php'); ?>
	<title>Berlingske - Topic</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
</head>
<body class="tpl-front <?php if($siteBusiness): ?>site-business<?php endif; ?> default-header show-site-search">








<div class="main-wrapper">
<?php include('includes/offcanvas-menu.php'); ?>

<?php if($siteBusiness): ?>
	<?php include('includes/header-front.php'); ?>
<?php else: ?>
	<?php include('includes/header-front.php'); ?>
<?php endif; ?>

<?php // include('includes/banners.php'); ?>

<?php 
$campaignId = 'campaign-' . mt_rand(1,3);
?>

	<div class="canvas-main <?php echo $campaignId; ?>">


	<div class="banner-wrapper">
		<div class="bg-banner"></div>
			<div class="topbanner demo-banner hidden-sm-down" style="width: 930px; height: 180px;"></div>
			<div class=" demo-banner hidden-md-up" style="width: 100%; height: 160px;">Leaderboard_1 320 x 320/160</div>
			<!-- <div class="hidden-lg-up hidden-sm-down"><img src="/dist/images/banners/ipad930x180.png" width="" height="" alt="" style="margin: 0 auto"/></div> -->
		
		


			<div class="container main-content">
			
			
<div class=" deck flex-row">

	
		<?php if($authorProfile): ?>

			
				<div class="row flex-row teaser-flow">
					<div class="col-xs-12">

						<img src="<? dummy("image/!author@100x100,") ?>" width="" height="" alt="" class="img-round" />
						
						<h1><? dummy("text@author") ?></h1>
						<? dummy("text@short-teaser") ?>

					</div>
				</div>
			

		<?php endif; ?>
	

	<div class="col-wrapper flex-row">

	
	
		<div class="col-tags col-border-right-xl-up ">
		
			
			
		</div>
		
		<div class="col-primary ">
			
			<div class="row flex-row teaser-flow">

				
				<div class="col-xs-12">
					
					<div class="page-content">
						<?php if($page === 'adblocker'): ?>
						<h1>Tak for at du tillader annoncer på berlingske.dk!</h1>

						<p>Når du bruger en adblocker, forhindrer du annoncer i at blive hentet og vist på websites såsom berlingske.dk. Vi er nødt til at vise dig annoncer for at kunne finansiere de gratis nyheder på berlingske.dk. Denne guide viser dig, hvordan du indstiller din adblocker til at tillade annoncer på berlingske.dk. Oplever du problemer, så kontakt os på <a href="mailto:kundeservice@berlingske.dk">kundeservice@berlingske.dk</a>.</p>

						<p>Her kan du se, hvordan du tillader annoncer på berlingske.dk i de mest populære adblockere.</p>

						<h2>AdBlock Plus</h2>
						
						<p><em>Chrome</em></p>

						<ul>
							<li>Tryk på 'ABP'-knappen foroven til højre og klik på “Aktiveret på dette websted”  eller “Enabled on this site”</li>
						</ul>

						<p><em>Internet Explorer (version 11)</em></p>

						<ul>
							<li>Bruger du Adblock Plus i Internet Explorer, kan du desværre ikke tillade annoncer på udvalgte websites. Du er derfor nødt til at deaktivere Adblock Plus.</li>
						</ul>
						
						<ul>
							<li>Klik på tandhjulet i øverste højre hjørne og vælg "Administrer tilføjelsesprogrammer"
							<li>I den menu, der kommer frem, skal du markere "Adblock Plus for IE Browser" i listen og trykke  "Deaktiver"
							<li>Klik på "Luk", og vinduet med tilføjelsesprogrammer lukker.
						</ul>

						<p><em>Firefox</em></p>

						<ul><li>Klik på ikonet “ABP” foroven til højre og klik på “Slå fra på berlingske.dk” / “Disable on berlingske.dk”</li></ul>

						<p><em>Safari</em></p>

						<ul>
							<li>Klik på ikonet “ABP”til venstre for adresselinjen og klik på “Aktiveret på dette websted” / ”Enabled on this site”</li>
						</ul>

						<h2>Chrome AdBlock</h2>
						<ul>
							<li>Klik på AdBlock-ikonet og vælg “Benyt ikke på sider på dette domæne” / “Don't run on pages on this domain”</li>
							<li>I vinduet, der dukker op, skal du nu trykke på 'Udeluk'-knappen</li>
						</ul>

						 

						<h2>Safari AdBlock</h2>
						
						<ul>
						<li>Klik på AdBlock-ikonet (hånd på rød baggrund) og vælg “Benyt ikke på sider på dette domæne” / “Don't run on pages on this domain”</li>
						<li>I vinduet, der dukker op, skal du nu trykke på “Udeluk”</li>
						</ul>

						 

						<h2>Chrome Ghostery</h2>
						
						<ul>
							<li>Tryk på Ghostery-knappen i højre hjørne (til højre for adressefeltet) og vælg “Whitelist site”</li>
							<li>Kontrollér, at teksten "Site is whitelisted" (grøn baggrund) dukker op</li>	
						</ul>
						

						 

						<h2>FireFox Ghostery</h2>
						<ul>
							<li>Tryk på Ghostery-knappen i højre hjørne (til højre for adressefeltet) og vælg 'Trust site'</li>
							<li>Kontrollér, at 'Trust site'-knappen får grøn baggrund</li>	
						</ul>
						


						<?php endif; ?>
						<?php if($page === 'ethics'): ?>
						
						<h1>
							Berlingske Medias regler for journalistisk etik
						</h1>

						<h2>Indholdsfortegnelse</h2>
						<ul>
						<li><a href="#">Indledning</a></li>
						<li><a href="#">Mindstekrav til journalistisk kvalitet</a></li>
						<li><a href="#">Journalistisk integritet</a></li>
						<li><a href="#">Regler for retsstof</a></li>
						<li><a href="#">Behandling af kilder</a></li>
						<li><a href="#">Rettelser</a></li>
						<li><a href="#">Guidelines til sociale medier</a></li>
						<li><a href="#">Brug af billeder, grafik og lyd</a></li>
						</ul>
						<a name="1"></a>
						<h2>Indledning</h2>
						<p>Som en publicistisk virksomhed forpligter Berlingske Media sig til at levere journalistik af høj kvalitet uanset hvilken medieplatforme, vi vælger at udkomme på, og i alle de forskellige former og genrer, vi arbejder med.</p>

						<p>Udgangspunktet for alle koncernens publikationer er, at de skal levere oplysning og underholdning til deres læsere og brugere. Vores ambitionsniveau for den journalistiske etik skal sikre, at Berlingske Media er karakteriseret ved at være en medievirksomhed, der sikrer kilderne en ordentlig og fair behandling og læserne en redelig og troværdig journalistik. Vi efterlever Reglerne for god presseskik i Medieansvarsloven.</p>

						<p>Nedenstående etiske regler skal sikre den journalistiske kvalitet i Berlingske Media. Samtlige redaktionelle medarbejdere er forpligtiget til at sætte sig ind i både etiske regler og guidelines for sociale medier samt at efterleve dem i deres journalistiske arbejde. Reglerne gælder også freelancemedarbejdere og vikarer.</p>

						<p>Selve regelsættet er mindstekrav til de etiske standarder for medier i Berlingske Media.
												Det er udarbejdet i respekt for de enkelte mediers unikke situation og supplerer, men 
												erstatter ikke, de enkelte mediers egne etiske regelsæt, hvor sådanne findes.</p>

						<p>Med de etiske regler følger også Berlingske Medias guidelines for brug af sociale medier. Disse guidelines skal opfattes som gode råd snarere end håndfaste krav.</p>
						
						<a name="2"></a>
						<h2>Mindstekrav til journalistisk kvalitet</h2>
						<p>Journalistikken i de artikler, som produceres i Berlingske Media, skal være kritisk, fordomsfri og fair. Journalistens egne holdninger må ikke have indflydelse på en sags udfoldelse eller fremlæggelse.</p>

						<p>Journalister skal have en kritisk indstilling til kilder, og kilders motiver og egeninteresser skal til enhver tid indgå i den journalistiske vurdering af en sag.</p>

						<p>Artikler må som udgangspunkt ikke være frembragt ’under cover’. Alle journalister arbejder under fuld og åben identitet med mindre særlige forhold gør sig gældende, så en sag med væsentlig offentlig interesse ikke kan tilvejebringes på anden vis. I de tilfælde skal det altid godkendes af chefredaktionen.</p>

						<p>Artikler må ikke være frembragt med journalisten som agent provocateur, hvor journalisten forleder kilder til handlinger, de ellers ikke ville have udført, eller ved at journalisten har tilskønnet til ulovligheder.</p>

						<p>Artiklers vinkling, rubrikker mv. skal have dækning i research og dokumentation. Artikler må ikke strammes for at gøre dem mere interessante eller slagkraftige.</p>

						<p>Artikler hvori der indgår konflikter og/eller interessemodsætninger må som udgangspunkt ikke være baseret på én kilde. Dette gælder ikke online nyhedsopdateringer, men her skal historiens karakter afspejles i rubrikken med en klar afsender på budskabet. Desuden skal det meddeles i artiklen, at vi arbejder på at få modpartens kommentar. Lykkes det ikke, skal vi anføre, at det ikke har været muligt at få en kommentar fra modparten.</p>

						<p>Berlingske Media linker ikke til artikler, der bringer oplysninger i strid med Berlingske Medias etiske regler.</p>

						<p>Berlingske Media forbeholder sig ret til at moderere i blogs således at fejlagtige eller underlødige oplysninger rettes eller slettes. Det er den enkelte bloggers ansvar at moderere blogindlæg.</p>

						<p>Anonyme kilder kan anvendes, men kun i situationer, hvor en sag ellers ikke kan udredes, og sagen vurderes at have tilstrækkelig offentlig relevans. Anonyme kilders udsagn må ikke fremstå som verificerede med mindre de er det. Anonymitet respekteres fuldt ud, og navnet vil under ingen omstædigheder blive videregivet.</p>

						<p>Journalister må ikke betale kilder for oplysninger eller på anden vis levere en tjenester eller ydelser, der på nogen måde kan kompromittere vores troværdighed.</p>
						<a name="3"></a>
						<h2>Journalistisk integritet</h2>
						<p>Journalisternes – eller andre redaktionelle medarbejderes – habilitet må ikke kunne drages i tvivl. Dette vedrører forhold af både politisk, ideologisk og økonomisk art. Journalister bør ikke være medlemmer af foreninger, politiske partier eller andet, der kan drage deres journalistiske integritet og motivation i tvivl.</p>

						<p>Journalister, som behandler emner, der kan påvirke aktiekurser, må ikke eje aktier i danske virksomheder eller i selskaber, der er noteret på børsen i Danmark. Bestemmelsen angår alle og ikke alene journalister ansat direkte til at skrive om erhvervsstof.</p>

						<p>Deltagelse i aktiespil og lignende er heller ikke tilladt.</p>

						<p>Reglerne gælder både redaktionelle chefer, skrivende og redigerende journalister og andre, som påvirker det redaktionelle indhold samt freelancere.</p>

						<p>Journalister må gerne eje investeringsforeningsbeviser, statsobligationer og realkreditobligationer, ligesom det er tilladt at investere via bankers og pensionsselskabers puljeordninger, hvor forvalteren – og ikke journalisten - træffer beslutning om aktivernes placering.</p>

						<p>Disse regler gælder investering for frie såvel som for bundne midler.</p>

						<p>Fravigelse af reglerne kræver i alle tilfælde dispensation fra chefredaktionen eller den pågældende medarbejders chef. I forbindelse med nyansættelse eller overflytning i anden jobfunktion for allerede ansatte kan der aftales en overgangsperiode for afhændelse eller omlægning af aktiebeholdning med nærmeste chef.</p>

						<p>Journalister må gerne tage imod betalte rejser, men det skal anføres tydeligt i forbindelse med teksten, at der er tale om en betalt rejse. Det gør sig gældende både på rejseartikler og al andet journalistisk produktion, hvor vi har fået betalt hele eller dele af udgifterne. Det er den enkelte fagredaktørs ansvar at godkende rejserne og forvalte reglerne.</p>

						<p>Der er vandtætte skodder mellem avisens journalistik og de holdninger, der gives udtryk for i avisens leder.</p>

						<p>Medier i Berlingske Media skal opretholde en klar skillelinje mellem annoncering og redaktionel tekst. Redaktionel omtale må aldrig være en betingelse for indrykning af annoncer. Tekst og billeder foranlediget af direkte eller indirekte merkantile interesser bør kun bringes, hvis et klart journalistisk kriterium taler for offentliggørelse.</p>

						<p>Hvis en annonce i typografi eller design kan forveksles med et redaktionelt produkt, skal den markeres tydeligt med ’Annonce’.</p>
						<a name="4"></a>
						<h2>Regler for retsstof</h2>
						<p>Artikler må som udgangspunkt ikke oplyse navne på folk, der er anholdt af politiet, eller andre oplysninger, der kan identificere dem.</p>

						<p>Artikler må ikke navngive folk, medmindre de er idømt minimum et halvt års ubetinget fængselsstraf. Den enkelte titel kan vælge en endnu strammere regel på f.eks. et års fængselsstraf.</p>

						<p>En undtagelse kan være tilfælde, hvor offentligheden har betydelig interesse i, at personens identitet offentliggøres. Det kan være personer, der bærer ”gyldne kæder” eller som på anden vis har medvirket til en stærk eksponering i mediebilledet. Det er kun chefredaktionen på det enkelte medie, der kan træffe en afgørelse om sådanne undtagelser.</p>

						<p>Berlingske Media respekterer navneforbud nedlagt at domstolene. I det tilfælde at påstand om navneforbud afventer domstolens afgørelse, redigeres onlinemedier som om der er et navneforbud.</p>

						<p>For alle medier gælder det ved retsreportager, at journalisterne udviser særlig omtanke i forbindelse med at nævne personers slægtsforhold, stilling, race, nationalitet, trosbekendelse, seksualitet eller organisationsforhold, medmindre dette direkte har noget med sagen at gøre. </p>
						<p>Vi navngiver dømte, hvor straffen er udstået, ned til seks måneders ubetinget fængselsstraf, hvis oplysningerne vurderes at have samfundsrelevans og/eller relevans for nye oplysninger, vi eller andre frembringer om personen.</p>
						<?php endif; ?>

						<?php if($page === 'contact'): ?>
							
							<h1>Kontaktinformation</h1>
							

							    
							  
							  
							<p>Chefredaktør: <a href="mailto:tj@berlingske.dk">Tom Jensen</a> (ansvarhavende)</p>
							<p>Chefredaktør: <a href="mailto:grund@berlingske.dk">Jens Grund</a></p>
							<p><strong>Berlingskes hovednummer: 33 75 75 75</strong></p>
							<p><strong>Redaktionen:</strong><br />Pilestræde 34<br />DK-1147 København K<br />Tlf. 33 75 75 75<br />Fax 33 75 20 20</p>
							<p><strong>Kundeservice</strong><br />(Kontakt for henvendelser vedr. abonnement og nyhedsabonnement)<br /><a href="mailto:kundeservice@berlingske.dk">kundeservice@berlingske.dk</a><br /><a href="https://b.kundeunivers.dk/" target="_blank">b.kundeunivers.dk</a><br />Tlf. 33 75 36 36 mandag-fredag kl. 08.00-17.00.<br />Fax 33 75 20 75</p>
							<p><strong>Digitalservice</strong><br /><a href="mailto:digital@berlingske.dk">digital@berlingske.dk</a><br />Tlf. 33 75 33 30 mandag-fredag kl. 08.00-18.00, lørdag og søndag 08.00-12.00.</p>
							<p><strong>Annoncesalg</strong><br /><a href="mailto:annoncer@berlingske.dk">annoncer@berlingske.dk</a><br />Tlf. 33 75 75 00<br />Fax 33 75 20 26</p>
							<p><strong>berlingske.dk</strong><br /><a href="mailto:internet@berlingske.dk">internet@berlingske.dk</a><br />Tlf. 33 75 22 42</p>
							<p><strong>Business.dk redaktionen</strong><br /><a href="mailto:redaktionen@business.dk">redaktionen@business.dk</a></p>
							<p><strong>Job hos Berlingske Media?</strong><br /><a href="http://www.berlingskemedia.dk/65680/">Job &amp; karriere</a></p>
							
							<h2>Berlingskes redaktioner - redaktører og kontaktoplysninger:</h2>
							<p><strong>Redaktionen</strong> (hovedadresse):<br /><a href="mailto:redaktionen@berlingske.dk">redaktionen@berlingske.dk</a></p>

							<h2>Berlingske e-mail-adresser</h2>
							<p><strong>Indland</strong><br /><em>Kasper Krogh</em><br /><a href="mailto:kkh@berlingske.dk">kkh@berlingske.dk</a><br />tlf. 25 45 62 96 fax 33 75 20 20</p>
							<p><strong>Livsstil</strong><br /><em>Nina Rølle</em><br /><a href="mailto:nin@berlingske.dk">nin@berlingske.dk</a><br />tlf. 33 75 21 60 fax 33 75 20 20</p>
							<p><strong>Udland</strong><br /><em>Anna Libak</em><br /><a href="mailto:udland@berlingske.dk">udland@berlingske.dk</a><br />tlf. 33 75 75 75 fax 33 75 20 20</p>
							<p><strong>Debat og Navne</strong><br /><em>Jesper Beinov</em><br /><a href="mailto:debat@berlingske.dk">debat@berlingske.dk</a><br />Husk at vedlægge adresse!<br />Tlf. 33 75 28 05<br />(telefontid hverdage 10:00-13.00)</p>
							<p><a href="mailto:navne@berlingske.dk">navne@berlingske.dk</a><br />tlf. 33 75 21 73<br />(telefontid hverdage 10-16)</p>
							<p><strong>Kultur</strong><br /><em>Lars Rix</em><br /><a href="mailto:kultur@berlingske.dk">kultur@berlingske.dk</a><br />tlf. 33 75 75 75 fax 33 75 20 20</p>
							<p><strong>Business</strong><br /><em>Erhvervsredaktør </em><em>Peter Suppli Benson</em><br /><a href="mailto:pebe@berlingske.dk">pebe@berlingske.dk</a><br />tlf. 25 45 63 66</p>
							<p><em>Souschef / Digital redaktør </em><em>Mikael Hjorth</em><br /><a href="mailto:mih@berlingske.dk">mih@berlingske.dk</a><br />tlf. 25 45 63 49</p>
							<p><em>Vagthavende nyhedsredaktør</em><br />tlf. 33 75 22 57 fax 33 75 20 20<br /><a href="mailto:business@berlingske.dk">business@berlingske.dk</a></p>
							<p><strong>Sport</strong><br /><em>Benjamin Munk Lund</em><br /><a href="mailto:sporten@berlingske.dk">bemu@berlingske.dk</a><br />tlf. 33 75 22 19 fax 33 75 20 20</p>
							<p><strong>Søndag</strong><br /><em>Jette Holm</em><br /><a href="mailto:magasin@berlingskemedia.dk">magasin@berlingskemedia.dk</a><br />tlf. 33 75 22 51 fax 33 75 20 20</p>
							<p><strong>Billedredaktionen</strong><br /><em>Søren Lorenzen</em><br /><a href="mailto:slo@berlingske.dk">slo@berlingske.dk</a><br />tlf. 33 75 20 54 fax 33 75 20 20</p>
							<p><strong>Politik</strong><br /><em>Michael Bjerre</em><br /><a href="mailto:mic@berlingske.dk">mic@berlingske.dk</a><br />tlf. 33 75 75 75</p>
							<p><strong>Produktion</strong><br />tlf. 33 75 28 62 fax 33 75 20 20</p>
							<p><strong>Nyhedsgrafik</strong><br /><em>Jakob Weiss</em><br /><a href="mailto:grafik@berlingske.dk">grafik@berlingske.dk</a><br />tlf. 33 75 21 15 fax 33 75 20 20</p>
							<p><strong>Research</strong><br /><a href="mailto:research@berlingske.dk">research@berlingske.dk</a><br />tlf. 33 75 24 24 fax 33 75 20 20</p>
							<p><strong>Sektioner</strong><br /><strong>Bilen</strong><br /><a href="mailto:bilen@berlingske.dk">bilen@berlingske.dk</a><br />tlf. 33 75 75 75 fax 33 75 20 20</p>
							<p><strong>Boligen</strong><br /><a href="mailto:boligen@berlingske.dk">boligen@berlingske.dk</a><br /><strong>Indrykning af boligannoncer</strong><br />kontakt tlf. 3375 7500</p>
							<p><strong>AOK</strong><br /><em>Camilla Lützhøft Stahlschmidt</em><br /><a href="mailto:cast@aok.dk">cast@aok.dk</a><br />tlf. 25 44 24 74</p>
							<p><strong>Rejseliv</strong><br /><a href="mailto:nin@berlingske.dk">nin@berlingske.dk</a><br />tlf. 33 75 21 60 fax 33 75 20 20</p>
							<p><strong>B Søndag</strong><br /><em>Nina Rølle</em><br /><a href="mailto:nin@berlingske.dk">nin@berlingske.dk</a></p>
							<p><strong>www.berlingske.dk</strong><br /><em>Jakob Weiss</em><br /><a href="mailto:internet@berlingske.dk">internet@berlingske.dk</a><br />tlf. 33 75 75 75</p>
							<p><strong>www.business.dk</strong><br /><em>Mikael Hjorth</em><br /><a href="mailto:redaktionen@business.dk">redaktionen@business.dk</a><br />Tlf. 25 45 63 49</p>
							<p><strong>www.politiko.dk</strong><br /><em>Jakob Stig Jørgensen</em><br /><a href="mailto:politiko@berlingske.dk">politiko@berlingske.dk</a><br />tlf. 33 75 24 63</p>
							<p><strong>Fejl og fakta</strong><br /><a href="http://www.berlingske.dk/fejlogfakta">www.berlingske.dk/fejlogfakta</a><br /><a href="mailto:fejlogfakta2@berlingske.dk">fejlogfakta2@berlingske.dk</a></p>
							<p><strong>Kundeservice</strong><br /><a href="http://b.kundeunivers.dk">b.kundeunivers.dk</a><br /><a href="mailto:kundeservice@berlingske.dk">kundeservice@berlingske.dk</a><br />Tlf. 33 75 36 36 mandag-fredag kl. 08.00-17.00.</p>
							<p><strong>Annoncesalg</strong><br />Tlf. 33 75 75 00<br />Fax 33 75 20 26<br /><a href="mailto:annoncer@berlingske.dk">annoncer@berlingske.dk</a></p>
							<p><strong>Bannerannoncer på berlingske.dk</strong><br /><a href="http://www.berlingskemedia.dk/45385/">www.berlingskemedia.dk</a></p>
							<p><strong>Bureau salg</strong><br /><a href="http://www.berlingskemedia.dk/45385/">www.berlingskemedia.dk</a></p>
							<p><strong>Bladsalg og marketing</strong><br /><a href="http://www.berlingskemedia.dk/45385/">www.berlingskemedia.dk</a></p>
							<p><strong>Personaleafdeling</strong><br />Tlf.: 33 75 31 01<br /><a href="mailto:personale@berlingske.dk">personale@berlingske.dk</a></p>
							<p><strong>Job hos Berlingske Media?</strong><br /><a href="http://www.berlingskemedia.dk/40194/">www.berlingskemedia.dk</a></p>


						<?php endif; ?>

					</div>

				</div>
				
			</div>
		</div>
	</div><!-- col-wrapper --> 
		

	

	<div class="col-sidebar col-border-left-lg-up">

			
		<div class="row">
			<div class="col-lg-12 col-md-6 col-sm-12">
				<div style="width: 300px; height: 600px;" class="demo-banner mb hidden-sm-down">Square_1</div>
			</div>

			<div class="col-lg-12 col-md-6 col-sm-12">
					<?php 
						$sectionClass 	= 'latest-news mb-05';
						$imgRatio 		= '1:1';
						$premium 		= true;
						$showComments 	= true;
						$imgSrc 		= false;
						$imgW 			= '120';
						$showTime 		= false;
						$showImage 		= false; 
						$listClass 		= 'list list-top-lg';
						$listTitle 		= 'Mest læste lige nu';
						$listCount 		= '5';
							
						include('includes/list-news.php'); ?>

						<div style="width: 300px; height: 250px;" class="demo-banner hidden-sm-down">Square_2 sticky</div>
			</div>

			
			

		</div>

			
		
		
		
		

			
	</div>
	
</div>


			<?php $bannerLabel = 'Leaderboard_2 930 x 180' ; include('includes/frontpage/deck-ad.php'); ?>
			<?php $bannerLabel = 'Leaderboard_2 320 x 320/160'; include('includes/frontpage/deck-ad-mobile.php'); ?>

			

			
			
			</div>

		</div><!-- banner-wrapper -->

	</div><!-- canvas-main -->

</div><!-- main-wrapper -->

<?php include('includes/footer.php'); ?>

<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.2/js/tether.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script> -->
<script src="/dist/scripts/main.js"></script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-8992845-4', 'auto');
  ga('send', 'pageview');

</script>


</body>
</html>