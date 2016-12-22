<?php if($nl == "berlingske"): ?>

<style>

	body {
		padding: 0;
		margin: 1rem;
	}
	a {
		text-decoration: underline;
	}
	.newsletter-container {
		max-width: 600px;
		margin: 0 auto;

	}
	.newsletter-inner {
		border: 1px solid #ddd;
		margin: 0rem;
		padding: 2rem;
		background-color: #fff;
	}
	.newsletter-element p {
		
	}
	.newsletter-logo {
		margin-bottom: 2rem;
	}
	.large-text p {
		font-size: 19px;
	}
	p:last-child {
		margin-bottom: 0;
	}

	.medium-text p {
		font-size: 16px;
	}

	.micro-text p {
		font-size: 12px;
	}
	.space {
		padding: 0 .2rem;
	}
	hr {
		margin: 2rem 0;
	}
	
	@media (max-width:767px){
		.newsletter-inner {
			margin: .5rem;
			padding: 2rem 1rem;

		}
	}

</style>

<?php elseif ($nl == "bt") :?>

	<style>
		body {
			padding: 0;
			margin: 1rem;
			font-family: "helvetica neue", helvetica, arial, sans-serif;
		}
		a {
			text-decoration: underline;
			color: #cd0403;
		}
		.newsletter-container {
			max-width: 600px;
			margin: 0 auto;

		}
		.newsletter-inner {
			border: 1px solid #ddd;
			margin: 0rem;
			padding: 2rem;
			background-color: #fff;
		}
		.newsletter-element p {
			
		}
		.newsletter-logo {
			margin-bottom: 2rem;
		}
		.large-text p {
			font-size: 19px;
		}
		p:last-child {
			margin-bottom: 0;
		}

		.medium-text p {
			font-size: 16px;
		}

		.micro-text p {
			font-size: 12px;
		}
		.space {
			padding: 0 .2rem;
		}
		hr {
			margin: 2rem 0;
		}
		
		@media (max-width:767px){
			.newsletter-inner {
				margin: 0rem;
				padding: 2rem 1rem;

			}
			.logo {
				max-width: 110px;
			}
		}
	</style>


<?php endif; ?>