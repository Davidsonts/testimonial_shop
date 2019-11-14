{*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2017 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<script type="text/javascript">
$(function() {
	$("#shook [value='{$hook|escape:'html':'UTF-8'}']").attr("selected","selected");
	$("#shareThis [value='{$shareThis|escape:'html':'UTF-8'}']").attr("checked","checked");
});
</script>
<div class="panel">



	<h3><i class="icon icon-credit-card"></i> {l s='Testimonial Shop' mod='testimonial_shop'}</h3>
	<form class="form-horizontal" enctype="multipart/form-data" action="" method="POST">

		{if !empty($erros)}
			<div class="alert alert-danger" role="alert"> 
				{$erros}
			</div>
		{/if}

	  <div class="form-group">

		{* <label for="input1" class="col-sm-2 control-label">{l s='Tel' mod='testimonial_shop'}</label> *}
		<label for="input1" class="col-sm-2 control-label">{l s='' mod='testimonial_shop'}</label>

		<div class="col-sm-6">

			<div class="col-lg-12">
			Name: <input type="text" class="form-control" name="name" id="input1" placeholder="">
				<br />
			</div>
			
			<div class="col-lg-12">
			{* Img: <input type="text" class="form-control" name="img" id="input1" placeholder=""> *}
			</div>
			<input type="file" name="fileToUpload" id="fileToUpload">
			{* <div class="col-lg-12">
				{if isset($fields[0]['form']['images'])}
				<img src="{$image_baseurl}{$fields[0]['form']['images'][$language.id_lang]}" class="img-thumbnail" />
				{/if}
				<input id="{$input.name}_{$language.id_lang}" type="file" name="{$input.name}_{$language.id_lang}" class="hide" />
				<div class="dummyfile input-group">
					<span class="input-group-addon"><i class="icon-file"></i></span>
					<input id="{$input.name}_{$language.id_lang}-name" type="text" class="disabled" name="filename" readonly />
					<span class="input-group-btn">
						<button id="{$input.name}_{$language.id_lang}-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
							<i class="icon-folder-open"></i> {l s='Choose a file' mod='labslideshow'}
						</button>
					</span>
				</div>
			</div> *}

				<br />	
			<div class="col-lg-12">		
			Message: 
			<textarea name="message" id="message" class="form-control" cols="30" rows="2"></textarea>
			</div>

				<br />						
			</div>



{* 
		<div class="alert alert-warning col-sm-10 pull-right">
			{if $lang_iso == 'tr'}
				&nbsp;{l s='Add contry number not add + eg TURKEY' mod='testimonial_shop'} : <b>90</b>5XXXX
			{else}
				&nbsp;{l s='Add contry number not add + eg USA' mod='testimonial_shop'} : <b>1</b>XXXXX
			{/if}
		</div> *}
	  </div>
{* 
	  <div class="form-group">	
	  <label for="shareThis" class="col-sm-2 control-label">{l s='Share Product' mod='testimonial_shop'}</label>
		<div class="col-sm-10">
			<span id="shareThis" class="switch prestashop-switch fixed-width-lg">
				<input type="radio" name="shareThis" id="CB_on" value="1" checked="checked"/>
				<label  for="CB_on">{l s='Yes' mod='testimonial_shop'}</label>
				<input type="radio" name="shareThis" id="CB_off" value="0"/>
				<label  for="CB_off">{l s='No' mod='testimonial_shop'}</label>
				<a class="slide-button btn"></a>
			</span>
		</div>
	  </div> *}
	  {* <div class="form-group">
		<label for="shareMessage" class="col-sm-2 control-label">{l s='Message' mod='testimonial_shop'}</label>
		<div class="col-sm-8">
		  <textarea name="shareMessage" id="shareMessage" class="form-control" cols="30" rows="2">{$shareMessage|escape:'html':'UTF-8'}</textarea>
		  <br />
		</div>
		<div class="alert alert-info col-sm-10 pull-right">
			&nbsp;{$pyazi|escape:'html':'UTF-8'} = {l s='Product Name' mod='testimonial_shop'}
		</div>
	  </div> *}
	  <div class="form-group">
	  	<div class="col-sm-2">
	  	</div>
		<div class="col-sm-8">
		  <button type="submit" name="save" class="btn btn-primary">{l s='Save' }</button>
		</div>
	  </div>
	</form>
</div>

<div class="panel">	
	<form class="form-horizontal" enctype="multipart/form-data" action="" method="POST">
		<div class="form-group">
			<label for="shook" class="col-sm-2 control-label">{l s='Select Local' mod='testimonial_shop'}</label>
			<div class="row">
				<div class="col-sm-3">
					<select name="shook" id="shook" class="form-control">
						<option value="hookdisplayPosition1" {if $hook_select == "hookdisplayPosition1"}  {'selected'} {/if}} >{l s='hookdisplayPosition1' mod='testimonial_shop'}</option>
						<option value="hookdisplayPosition2" {if $hook_select == "hookdisplayPosition2"}  {'selected'} {/if}} >{l s='hookdisplayPosition2' mod='testimonial_shop'}</option>
						<option value="hookdisplayPosition3" {if $hook_select == "hookdisplayPosition3"}  {'selected'} {/if}} >{l s='hookdisplayPosition3' mod='testimonial_shop'}</option>
						<option value="hookdisplayPosition4" {if $hook_select == "hookdisplayPosition4"}  {'selected'} {/if}} >{l s='hookdisplayPosition4' mod='testimonial_shop'}</option>
						<option value="hookdisplayPosition5" {if $hook_select == "hookdisplayPosition5"}  {'selected'} {/if}} >{l s='hookdisplayPosition5' mod='testimonial_shop'}</option>
						<option value="hookdisplayPosition6" {if $hook_select == "hookdisplayPosition6"}  {'selected'} {/if}} >{l s='hookdisplayPosition6' mod='testimonial_shop'}</option>			
					</select>
				</div>
				<div class="col-sm-4">
					<button type="submit" name="hook_up" class="btn btn-primary">{l s='Save' }</button>
				</div>
			</div>
		</div>
	</form>
</div>

 <div class="panel">		  
	<div clas="col-12"> 
		{foreach from=$testimonials item=t}

			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
					<img src="{$base_img}{$t.img}" style="max-width:100px;"> 
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="text-align:left;">
					<b>{$t.name}</b><br>
					{$t.message}<br>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="text-align:left;">
					<!-- Botão para acionar modal -->
					<button type="button" class="btn btn-link" data-toggle="modal" data-target="#modalEdit{$t.id}">
						Editar
					</button>
					<!-- Button trigger modal DELETE -->
					<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDelet{$t.id}">
						Delete
				</button>
				</div>
			</div>


			<br>


			<!-- Modal -->
			<div class="modal fade" id="modalEdit{$t.id}" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modalLabel">Editar</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form class="form-horizontal" enctype="multipart/form-data" action="" method="POST">	
							<div class="modal-body">			
															
								Name: <input type="text" class="form-control" name="name" id="input1" value="{$t.name}">
								<br />
								<img src="{$base_img}{$t.img}" style="max-width:100px;"> <br> 
								<input type="hidden" name="id" value="{$t.id}" > 	
								<input type="hidden" name="fileToUpload_old" value="{$t.img}">

								Img: <input type="file" name="fileToUpload" id="fileToUpload">
								<br />	 
								{l s='Message:' }
								<textarea name="message" id="message" class="form-control" cols="30" rows="2">{$t.message}</textarea>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Fechar</button>
								<button type="submit" name="edit" class="btn btn-default float-right">{l s='Save' }</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<!-- MODAL DELETE --->
			<div class="modal" tabindex="-1" id="modalDelet{$t.id}" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">{l s='Delete' }</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form class="form-horizontal" enctype="multipart/form-data" action="" method="POST">
							<div class="modal-body">
								<p>{l s='Delete??' }</p>

								<input type="hidden" name="id" value="{$t.id}" > 
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">{l s='Close' }</button>
								<button type="submit" name="delete" class="btn btn-danger">{l s='Delete' }</button>
							</div>
								
						</form>	
					</div>
				</div>
			</div>
		{/foreach}
	</div>
	</div>
</div>

<script>
$(document).ready(function(){
	$('#{$input.name}_{$language.id_lang}-selectbutton').click(function(e){
		$('#{$input.name}_{$language.id_lang}').trigger('click');
	});
	$('#{$input.name}_{$language.id_lang}').change(function(e){
		var val = $(this).val();
		var file = val.split(/[\\/]/);
		$('#{$input.name}_{$language.id_lang}-name').val(file[file.length-1]);
	});
});
</script>
