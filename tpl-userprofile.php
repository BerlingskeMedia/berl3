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
$showDate = true;


?>



<?php 
	// $showWell = rand(1,1);
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<?php include('includes/head.php'); ?>
	<title>Berlingske - Section</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
</head>
<body class="tpl-section default-header <?php if($template): ?> default-header <?php endif; ?> <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search">








<div class="main-wrapper">



	<?php include('includes/header-front.php'); ?>

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
			
			
			<div class="col-lg-8 col-lg-offset-2">
							
							

							

							<div class="mb">

								<h1 class="box-title">
									Din profilside
								</h1>
								<p>Nedenfor kan du se dine profiloplysinger. Vi håber, at du vil hjælpe med at holde oplysningerne opdaterede, så vi kan give dig den optimale service</p>
										<form name="userProfileForm" method="post" action="">

								                <div class="form-group  ">
								                    <label class="form-control-label" for="userProfileForm_username">Navn:</label>
								                    <input type="text" id="userProfileForm_username" name="userProfileForm[username]" required="required" class="form-control" placeholder="Navn" value="Bo Skakke">
								                      <small class="form-control-label user-feedback">Dette felt er obligatorisk.</small>
								                </div>
												
												<!-- Form with error message: -->
								                <div class="form-group  has-error">
								                    <label class="form-control-label" for="userProfileForm_username" >Navn:</label>
								                    <input type="text" id="userProfileForm_username" name="userProfileForm[username]" required="required" class="form-control form-control-error" placeholder="Navn" value="">
								                      <small class="form-control-label user-feedback">Dette felt er obligatorisk.</small>
								                </div>

								                <div class="form-group  ">
								                    <label class="form-control-label" for="userProfileForm_address">Adresse: </label>
								                    <input type="text" id="userProfileForm_address" name="userProfileForm[address]" required="required" class="form-control form-control-error" placeholder="Adresse" value="Skovkanten 74">
													<small class="form-control-label user-feedback">Dette felt er obligatorisk.</small>
								                </div>

								                <div class="row">
								                    <div class="col-sm-4">
								                        <div id="edit-profile-zipcode-wrapper" class="form-group  ">
								                            <label class="form-control-label" for="userProfileForm_zipcode" >Postnummer:</label>
								                            <input type="text" id="userProfileForm_zipcode" name="userProfileForm[zipcode]" required="required" class="form-control form-control-success" placeholder="Postnummer" value="2850">
								                        </div>
								                    </div>
								                    <div class="col-sm-8">
								                        <div id="edit-profile-zipcode-wrapper" class="form-group ">
								                            <label class="form-control-label" for="userProfileForm_city">By:</label>
								                            <input type="text" id="userProfileForm_city" name="userProfileForm[city]" required="required" class="form-control" placeholder="By" value="Nærum">
								                                
								                        </div>
								                    </div>
								                </div>

								                <div class="form-group ">
								                    <label class="form-control-label" for="userProfileForm_phone">Telefon: </label>
								                    <input type="text" id="userProfileForm_phone" name="userProfileForm[phone]" required="required" class="form-control" placeholder="Telefon" value="20616768">
								                        
								                </div>

								                <div class="form-group ">
								                    <label class="form-control-label" for="">Email: </label>
								                    <input type="text" id="userProfileForm_phone" name="userProfileForm[phone]" required="required" class="form-control" placeholder="" value="bo@skakke.dk" disabled>
								                </div>

								                <div class="form-group ">
								                    <label class="form-control-label" for="">Password:</label>
								                    <input type="password" id="userProfileForm_phone" name="userProfileForm[phone]" required="required" class="form-control" placeholder="" value="" disabled>
								                    <small><a href="#">Klik her for at skifte email eller password <i class="bticon-right-dir"></i></a></small>
								                </div>
								                    
								                        <div class="checkbox ">

								                        	<label >
								                                <input type="checkbox" name="userProfileForm[newsletter_subscriber]" value="1" checked>
								                                <p>
								                                <strong>Samtykke</strong></label><br>
								                                								                                <small>
								                                								                                Berlingske Media må gerne gøre mig opmærksom på relevante nyheder og tilbud fra både
								                                								                                Berlingske Media og samarbejdspartnere via telefon, brev og elektroniske medier (fx
								                                								                                e-mail, sms, mms, videobeskeder, pop-ups m.v). Jeg kan til enhver tid sige ”Nej tak” og
								                                								                                afmelde mig denne service. Samtidig accepterer jeg, at Berlingske Media for at målrette
								                                								                                nyheder og tilbud til mig samkører oplysninger jeg indtaster med oplysninger om mine
								                                								                                adfærd indsamlet på hjemmesider og øvrige digitale platforme tilhørende Berlingske Media
								                                								                                og samarbejdspartnere. 
								                                
								                                								                                <a href="#" class="toggle-trigger">Mere info <i class="bticon-down-dir"></i></a></p>


								                                <div class="toggle-content hidden">Fra tid til anden har Berlingske Media og vores tætte samarbejdspartnere attraktive tilbud og spændende nyheder til dig indenfor forskellige interesseområder. Disse nyheder og tilbud kan bl.a. vedrøre medier, rejser, tøj, mode, mad og vin, sundhed, bolig og livsstil, finans, sport og fritid, biler, elektronik, job og uddannelse, arrangementer, konkurrencer m.v.”
								    							Du kan læse mere om samkøring og brug af af data i Berlingske Medias Cookie- og Privatlivspolitik <a target="_blank" class="link-blue" href="http://berlingskemedia.dk/82494/">her..</a>
								    							</div>

								    							</small>

								                            
														</div>
								                    
								                

								                <div class="text-right">
								                    <button type="submit" id="userProfileForm_save" name="userProfileForm[save]" class="btn btn-blue btn-sm">Gem ændringer</button>
								                </div>

								                <input type="hidden" id="userProfileForm_ssoUid" name="userProfileForm[ssoUid]" value="111160"><input type="hidden" id="userProfileForm__token" name="userProfileForm[_token]" value=""></form>
										</div>

										
										<hr>

										<div class="mb">
											<h2 class="box-title">
												Få hjælp til dit abonnement
											</h2>
											<p>På Berlingskes kundeunivers kan du se dit abonnement, melde ferieflytning og meget andet</p>
											<a href="http://berlingskemedia.kundeunivers.dk/kontakt" class="btn btn-blue btn-sm" target="_blank">Gå til dit Kundeunivers <i class="bticon-right-dir"></i></a>
										</div>
										
										<hr>

										<h2>Kontakt kundeservice</h2>


										<p><strong>Kundeservice</strong><br>
										Telefon: 33 75 33 30
										Mandag – torsdag: kl. 8.00-20.00
										Fredag: kl. 8.00-18.00
										Weekend/helligdage: 8.00-12.00</p>

										<p>Mail til kundeservice: <a href="mailto:#">[EMAIL TIL KUNDESERVICE]</a><br>
										Svar på mails vil ske inden for 48 timer i hverdage</p>
										

							

						</div>
						
										
						
					
			
			
			</div>

		</div><!-- banner-wrapper -->

	</div><!-- canvas-main -->

</div><!-- main-wrapper -->

<?php include('includes/footer.php'); ?>

<?php include('includes/footer-content.php'); ?>


</body>
</html>