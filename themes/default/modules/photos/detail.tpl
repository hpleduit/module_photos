<!-- BEGIN: main -->
<link href="{NV_BASE_SITEURL}themes/default/modules/{MODULE_FILE}/plugins/blueimp/bootstrap-image-gallery.min.css" type="text/css" rel="StyleSheet"/>
<link rel="stylesheet" href="{NV_BASE_SITEURL}themes/default/modules/{MODULE_FILE}/plugins/blueimp/blueimp-gallery.min.css">

<div class="row">
	<div class="col-md-24 col-sm-24 col-xs-24">
		<h3><span class="pd5">{PHOTO.name}</span></h3>
		<span class="pd5"><em class="fa fa-eye"></em> {PHOTO.viewed}</span>
	</div>
	<div class="col-md-24 col-sm-24 col-xs-24">
		<a href="{PHOTO.file}" title="{PHOTO.name}" data-gallery="gallery">
			<img src="{PHOTO.file}" class="img-responsive"/>
		</a>
	</div>
	<div class="col-md-24 col-sm-24 col-xs-24">
		<div class="clear" style="height: 20px"></div>
		<div class="fb-like"></div>
		<div class="fb-comments" data-href="{SELFURL}" data-width="100%" data-numposts="20" data-colorscheme="light"></div>
	</div>
	<div id="blueimp-gallery" class="blueimp-gallery">
		<div class="slides"></div>
		<h3 class="title"></h3>
		<a class="prev">‹</a>
		<a class="next">›</a>
		<a class="close">×</a>
		<a class="play-pause"></a>
		<ol class="indicator"></ol>
		<div class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" aria-hidden="true">&times;</button>
						<h4 class="modal-title"></h4>
					</div>
					<div class="modal-body next"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left prev">
							<i class="fa fa-chevron-left"></i>
							{LANG.view_previous}
						</button>
						<button type="button" class="btn btn-primary next">
							{LANG.view_next}
							<i class="fa fa-chevron-right"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="{NV_BASE_SITEURL}themes/default/modules/{MODULE_FILE}/plugins/blueimp/bootstrap-image-gallery.min.js" type="text/javascript" ></script>
<script src="{NV_BASE_SITEURL}themes/default/modules/{MODULE_FILE}/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
<!-- END: main -->