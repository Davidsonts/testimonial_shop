<div id="custom-testimonial">
	<div class="col-sm-12"> 
		<p class="h1 text-muted">{l s='Testimonial' }</p>
		{$count = count($testimonials)}
		{foreach from=$testimonials item=t}
			<div class="row">
				<div class="testimonial-shop-img col-lg-2 col-md-2 col-sm-12 col-xs-12">
					<img src="{$base_img}{$t.img}" style="max-width:100px;"> 
				</div>
				<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="text-align:left;">
									
					<i class="fa fa-quote-left" aria-hidden="true"></i>
					 
					<b>{$t.message}</b>
					 
					<i class="fa fa-quote-right" aria-hidden="true"></i>
					<br>
					<small>{$t.name}</small>
				</div>
			</div>	
			{[$count--]}
			{if $count>0}
				<hr />
			{/if}
			
		{/foreach}
		
	</div>
</div>

<style>
	#custom-testimonial{
		margin-top:20px;
		margin-bottom:20px;
	}
</style>