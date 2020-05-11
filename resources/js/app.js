import $ from 'jquery'
import Tagify from '@yaireo/tagify'

// The DOM element you wish to replace with Tagify
var input = document.querySelector('#email_recipient');

// initialize Tagify on the above input node reference
new Tagify(input)


$('#27').change(function() {
  if ($(this).val() == '54') {
    $('#field-28,#field-29,#field-30').slideDown()
  } else{
    $('#field-28,#field-29,#field-30').slideUp()
  }
});