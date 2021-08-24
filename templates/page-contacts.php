<?php
/** Template name: Contacts */
get_header(); ?>
<script>
 function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500); 
</script>
    <div class="main page page-contacts">
        <?php get_template_part('parts/top', 'block'); ?>
        <div id="scroll"></div>
        <div class="form-block">
            <div class="wrapper">
                <h2><?php the_field('kontaktai_1_antraste'); ?></h2>
                <div class="wrap">
                    <div role="form" id="wpcf7-f336-o1" lang="lt-LT" dir="ltr" class="wpcf7">
				<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" class="wpcf7-form">
				<input type=hidden name='captcha_settings' value='{"keyname":"paystra_website","fallback":"true","orgId":"00D3X000001t9Va","ts":""}'>
				<input type=hidden name="oid" value="00D3X000001t9Va">
				<input type=hidden name="retURL" value="https://paystra.com/587-2">

				<!--  ----------------------------------------------------------------------  -->
				<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
				<!--  these lines if you wish to test in debug mode.                          -->
				<!--  <input type="hidden" name="debug" value=1>                              -->
				<!--  <input type="hidden" name="debugEmail" value="gunnar@paystra.com">      -->
				<!--  ----------------------------------------------------------------------  -->
				<div class="row">
					<span class="wpcf7-form-control-wrap">
						<input required id="first_name" type="text" name="first_name" value="" size="20" class="wpcf7-form-control wpcf7-text" maxlength="40" aria-invalid="false" placeholder="First name">
					</span>
					<span class="wpcf7-form-control-wrap">
						<input required id="last_name" type="text" name="last_name" value="" size="20" class="wpcf7-form-control wpcf7-text" maxlength="80" aria-invalid="false" placeholder="Last name">
					</span>
				</div>
				<div class="row">
					<span class="wpcf7-form-control-wrap">
						<input required id="title" maxlength="40" type="text" name="title" value="" size="20" class="wpcf7-form-control wpcf7-text" maxlength="40" aria-invalid="false" placeholder="Title">
					</span>
					<span class="wpcf7-form-control-wrap">
						<input required id="email" maxlength="80" type="email" name="email" value="" size="20" class="wpcf7-form-control wpcf7-text" maxlength="80" aria-invalid="false" placeholder="Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$">
					</span>
				</div>
				<div class="row">
					<span class="wpcf7-form-control-wrap">
						<input required id="company" type="text" name="company" value="" size="20" class="wpcf7-form-control wpcf7-text" maxlength="40" aria-invalid="false" placeholder="Company">
					</span>
					<span class="wpcf7-form-control-wrap">
						<input required id="country" type="text" name="country" value="" size="20" class="wpcf7-form-control wpcf7-text" maxlength="40" aria-invalid="false" placeholder="Country">
					</span>
				</div>
				<span class="wpcf7-form-control-wrap comments">
					<select required id="industry" name="industry"  style="margin-bottom: 16px;">
						<option value="">Industry</option>
						<option value="Agriculture">Agriculture</option>
						<option value="Apparel">Apparel</option>
						<option value="Banking">Banking</option>
						<option value="Biotechnology">Biotechnology</option>
						<option value="Chemicals">Chemicals</option>
						<option value="Communications">Communications</option>
						<option value="Construction">Construction</option>
						<option value="Consulting">Consulting</option>
						<option value="Education">Education</option>
						<option value="Electronics">Electronics</option>
						<option value="Energy">Energy</option>
						<option value="Engineering">Engineering</option>
						<option value="Entertainment">Entertainment</option>
						<option value="Environmental">Environmental</option>
						<option value="Finance">Finance</option>
						<option value="Food &amp; Beverage">Food &amp; Beverage</option>
						<option value="Government">Government</option>
						<option value="Healthcare">Healthcare</option>
						<option value="Hospitality">Hospitality</option>
						<option value="Insurance">Insurance</option>
						<option value="Machinery">Machinery</option>
						<option value="Manufacturing">Manufacturing</option>
						<option value="Media">Media</option>
						<option value="Not For Profit">Not For Profit</option>
						<option value="Other">Other</option>
						<option value="Recreation">Recreation</option>
						<option value="Retail">Retail</option>
						<option value="Shipping">Shipping</option>
						<option value="Technology">Technology</option>
						<option value="Telecommunications">Telecommunications</option>
						<option value="Transportation">Transportation</option>
						<option value="Utilities">Utilities</option>
					</select>
				</span>
				<div class="row">
					<span class="wpcf7-form-control-wrap">
						<input id="phone" type="number" name="phone" value="" size="20" class="wpcf7-form-control wpcf7-text" maxlength="40" aria-invalid="false" placeholder="Phone">
					</span>
					<span class="wpcf7-form-control-wrap">
						<input required id="mobile" type="number" name="mobile" value="" size="20" class="wpcf7-form-control wpcf7-text" maxlength="40" aria-invalid="false" placeholder="Mobile">
					</span>
				</div>
				<div class="row">
					<span class="wpcf7-form-control-wrap">
						<input required id="url" type="text" name="url" value="" size="20" class="wpcf7-form-control wpcf7-text" maxlength="80" aria-invalid="false" placeholder="Website" pattern="www+\.[a-z0-9.-]+\.[a-z]{2,}$">
					</span>
					<span class="wpcf7-form-control-wrap">
						<input id="fax" type="number" name="fax" value="" size="20" class="wpcf7-form-control wpcf7-text" maxlength="40" aria-invalid="false" placeholder="Fax">
					</span>
				</div>
				<span class="wpcf7-form-control-wrap comments">
				<textarea required id="00N3X00000LmPuhUAF" name="00N3X00000LmPuhUAF" type="text" wrap="soft" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Comments"></textarea>
				<script>
				CKEDITOR.timestamp = '4.11.2.22';
				var protocolAndHost = window.location.protocol + '//' + window.location.host;

				var editor = CKEDITOR.replace('00N3X00000LmPuhUAF', {
				removePlugins : 'elementspath,maximize,image,tabletools,liststyle,contextmenu,resize',
				baseHref : protocolAndHost + '/ckeditor/ckeditor-4.x/rel/',
				customConfig : '/ckeditor/ckeditor-4.x/rel/sfdc-config.js',
				height : '255',
				bodyId : '00N3X00000LmPuhUAF_rta_body',
				toolbar : 'SalesforceBasic',
				sfdcLabels :{CkeQuickText : { title : 'Insert quick text'}, CkeMediaEmbed : { iframeMissing : 'Invalid &lt;iframe&gt; element. Please use valid code from the approved sites.', subtitle : 'Paste &amp;lt;iframe&amp;gt; code here:', description : 'Use &lt;iframe&gt; code from an approved video source.', title : 'Embed Multimedia Content', exampleTitle : 'Example:', example : '\n            \n                &lt;iframe width=\&quot;560\&quot; height=\&quot;315\&quot; src=\&quot;https://www.youtube.com/embed/KcOm0TNvKBA\&quot; frameborder=\&quot;0\&quot; allowfullscreen&gt;&lt;/iframe&gt;\n            \n        '}, CkeImageMenu : { uploadFile : ' Browse or Upload', uploadUrl : 'Web Image', title : 'Insert images into your message'}, CkeImagePaste : { CkeImagePasteWarning : 'Pasting an image is not working properly with Firefox, please use [Copy Image location] instead.'}, CkeImageDialog : { infoTab_desc_info : 'Enter a description of the image for visually impaired users', uploadTab_desc : 'Description', defaultImageDescription : 'User-added image', uploadTab_file_info : 'Maximum size 1 MB. Only png, gif or jpeg', uploadTab_desc_info : 'Enter a description of the image for visually impaired users', imageUploadLimit_info : 'Max number of upload images exceeded', btn_insert_tooltip : 'Insert Image', httpUrlWarning : 'Are you sure you want to use an HTTP URL? Using HTTP image URLs may result in security warnings about insecure content. To avoid these warnings, use HTTPS image URLs instead.', title : 'Insert Image', error : 'Error:', uploadTab : 'Upload Image', wrongFileTypeError : 'You can insert only .gif .jpeg and .png files.', infoTab_url : 'URL', infoTab : 'Web Address', infoTab_url_info : 'Example: http://www.mysite.com/myimage.jpg', missingUrlError : 'You must enter a URL', uploadTab_file : 'Select Image', btn_update_tooltip : 'Update Image', infoTab_desc : 'Description', btn_insert : 'Insert', btn_update : 'Update', btn_upadte : 'Update', invalidUrlError : 'You can only use http:, https:, data:, //, /, or relative URL schemes.'}, sfdcSwitchToText : { sfdcSwitchToTextAlt : 'Use plain text'}, CkeSmartLink : { SmartLinkContextMenuEdit : 'Edit Smart Link', title : 'Insert a Smart Link'}},
				contentsCss: ['/ckeditor/ckeditor-4.x/rel/contents.css', '/sCSS/48.0/sprites/1580155678000/Theme3/default/base/CKEditor.css', '/sCSS/48.0/sprites/1580155678000/Theme3/default/base/HtmlDetailElem.css'],
				disableNativeSpellChecker : false,
				language : 'en-us',
				allowIframe : false,
				sharedSpaces : { top : 'cke_topSpace', bottom : ' cke_bottomSpace' }
				,filebrowserImageUploadUrl : '/_ui/common/request/servlet/RtaImageUploadServlet?_CONFIRMATIONTOKEN=VmpFPSxNakF5TUMwd05DMHlNMVF4TXpvek5Eb3dNaTR5T1RGYSxXcGNQYVkwSWVCQ29YcUd3UmtBNlBPLE5HRm1NemMy'
				,extraPlugins : 'sfdcImage,sfdcMediaEmbed,sfdcSmartLink,sfdcCodeBlock,sfdcVfAjax4J,sfdcQuickText'
				});

				editor.on('instanceReady', function( evt ) {
					try {
						var id = evt.editor.name;
						CKiframe = document.getElementById('cke_' + id).querySelector('iframe');
						meta = document.createElement('meta');
						meta.setAttribute('name', 'referrer');
						meta.setAttribute('content', 'no-referrer');
						CKiframe.contentDocument.head.appendChild(meta);
					} catch(e) {}
				} );
				</script>
				</span>
				<input type=hidden id="00D3X000001t9Va" name="00D3X000001t9Va" type="checkbox" value="1" />
				<input type=hidden name="recordType" id="recordType" value="0123O000000Iwyw">
				<input type=hidden name="lead_source" id="lead_source" value="Website" />
				<div class="g-recaptcha" data-sitekey="6LfNFucUAAAAAD-J5EioOR2FblMwtN9slvD-J8Jr" data-theme="dark"></div>
				<span id="captcha_error" class="text-danger"></span>
				<input type="submit" name="submit" value="Send" class="wpcf7-form-control wpcf7-submit">
				</form>   
			</div>
                </div>
            </div>
        </div>
    </div>
<script>
	 $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });
</script>
<?php get_footer(); ?>