(function($) {
  $('.appointment_date').datepicker({
	  'format': 'd/m/yyyy',
	  'autoclose': true
	});

	$('.appointment_time').timepicker();
})(jQuery);