 // Code to show and hide the success message
 setTimeout(function() {
    toastr.clear();
  }, 3000);

  $(document).ready(function() {
    $('#datepicker').datetimepicker({
      format: 'YYYY-MM-DD',
      // Additional configuration options...
    });
  });