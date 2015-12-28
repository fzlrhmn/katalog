</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2015 &copy; Satker PPLP.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.blockui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/uniform/jquery.uniform.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url(); ?>assets/global/plugins/select2/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.highlight.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/datatables/media/js/dataTables.searchHighlight.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/global/scripts/metronic.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/layout4/scripts/layout.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/layout4/scripts/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/pages/scripts/table-editable.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/pages/scripts/custom.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
  Layout.init(); // init current layout
  Demo.init(); // init demo features
   TableEditable.init();
});
</script>
<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  var roxyFileman = root + 'assets/fileman/index.html'; 
  CKEDITOR.replace( 'editor',{
                      filebrowserBrowseUrl:roxyFileman,
                      filebrowserImageBrowseUrl:roxyFileman+'?type=image',
                      removeDialogTabs: 'link:upload;image:upload',
                      on: {
                          instanceReady: function() {
                              this.document.appendStyleSheet( root + 'assets/global/plugins/bootstrap/css/bootstrap.min.css' );
                              this.document.appendStyleSheet( root + 'assets/global/css/plugins-md.css' );
                              this.document.appendStyleSheet( root + 'assets/admin/layout4/css/layout.css' );
                              this.document.appendStyleSheet( root + 'assets/admin/layout4/css/custom.css' );
                              this.document.appendStyleSheet( root + 'assets/admin/layout4/css/themes/light.css' );
                          }
                      }
                    } );
</script>
</body>
<!-- END BODY -->
</html>