<div id="custom-text">
	<div class="col-sm-12"> 
		
		{foreach from=$testimonials item=t}
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<img src="{$base_img}{$t.img}" style="max-width:100px;"> 
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="text-align:left;">
					<b>{$t.name}</b><br>
					{$t.message}<br>
				</div>
			</div>	
		{/foreach}
		
	</div>
</div>