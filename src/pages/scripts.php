
  	<!-- jQuery 3 -->
  	<script src="../../assets/vendor_components/jquery/dist/jquery.js"></script>

  	<!-- jQuery UI 1.11.4 -->
  	<script src="../../assets/vendor_components/jquery-ui/jquery-ui.js"></script>

  	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  	<script>
  	  $.widget.bridge('uibutton', $.ui.button);
  	</script>

  	<script src="../../assets/vendor_components/popper/dist/popper.min.js"></script>
  	<script src="../../assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>
  	<script src="../../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
  	<script src="../../assets/vendor_components/fastclick/lib/fastclick.js"></script>
  	<script src="../../assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
  	<script src="../../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
  	<script src="../../assets/vendor_components/jquery.peity/jquery.peity.js"></script>
  	<script src="../js/template.js"></script>
  	<script src="../js/pages/dashboard.js"></script>
  	<script src="../js/demo.js"></script>
    <!-- datatables -->
    <script src="../js/pages/data-table.js"></script>
    <script src="../../assets/vendor_components/datatable/datatables.min.js"></script>
    <!-- popper -->
    <script src="../../assets/vendor_components/popper/dist/popper.min.js"></script>
    <!-- formarter -->
    <script src="../../assets/vendor_components/formatter/formatter.js"></script>
	  <script src="../../assets/vendor_components/formatter/jquery.formatter.js"></script>
    <script src="../js/pages/formatter.js"></script>	
    <!-- form validation -->
    <script src="../js/pages/validation.js"></script>
    <script>
    ! function(window, document, $) {
        "use strict";
			$("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
		}(window, document, jQuery);
    </script>
