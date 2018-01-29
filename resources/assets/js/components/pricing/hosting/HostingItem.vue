<template>
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 limit-width-xs max-width-xl space-outside-down-md all-col-centered">	
				<div class="shadow-xs shadow-md-hover transition-normal pointer no-overflow height-auto">
					
					<div style="height: 200px; " class="image">	
						<img style="object-fit:contain" src="https://www.writeclickhosting.com/wp-content/uploads/2015/05/vps-hosting.png">
					</div>

					<div class="space-inside-sides-md space-inside-up-md">							  	
						<h2 class="font-md text-bold space-outside-down-xs text-center">{{ name }}</h2>
						<p class="font-md text-center italic space-outside-down-sm">&euro; 17,50 per <strong>maand</strong></p>

						<p style="line-height:18px;" class="inline-block text-color-accent-darken-md">
							Wil je verzekerd zijn van de beste performance voor jouw webapplicaties? Kies dan voor een razendsnelle VPS.
						</p>

						<div class="text-center space-inside-sm">
							<div class="bg-secondary">Gratis domeinnaam</div>
							<div>IMAP4</div>
							<div class="bg-secondary">Spam / virus filter</div>
							<div>SMTP op mobiel</div>
							<div class="bg-secondary">25 GB Dataverkeer</div>
							<div>5 GB Opslagruimte</div>
						</div>

					</div>

					<div class="text-center space-inside-md">
						<button class="bg-accent bg-accent-hover-darken-xs transition-fast text-color-light space-inside-sides-md space-inside-xs border-none">
							Nu bestellen
						</button>
					</div>

				</div>
			</div>
</template>
<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
      opacity: 0
    }
</style>
<script>
   export default {
	   props: {
		   name: null,
	   }
   }   
</script>