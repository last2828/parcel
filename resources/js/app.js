import $ from 'jquery'

$('#27').change(function() {
  if ($(this).val() == '54') {
    $('#field-28,#field-29,#field-30').slideDown()
  } else{
    $('#field-28,#field-29,#field-30').slideUp()
  }
});