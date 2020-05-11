import $ from 'jquery'
import Tagify from '@yaireo/tagify'
import dayjs from 'dayjs';

// The DOM element you wish to replace with Tagify
var input = document.querySelector('#email_recipient');

// initialize Tagify on the above input node reference
new Tagify(input)


$('#27').change(function() {
  if ($(this).val() == '54') {
    $('#field-28,#field-29,#field-30').slideDown()
    $('#field-28 select,#field-29 select,#field-30 select').attr('required', true);
  } else{
    $('#field-28,#field-29,#field-30').slideUp()
    $('#field-28 select,#field-29 select,#field-30 select').attr('required', false);
  }
});


$('#19').change(function() {
  if ($(this).val() == '68') {
    $('#field-20,#field-21').slideDown()
    $('#field-20 input, #field-21 input').attr('required', true);
  } else{
    $('#field-20,#field-21').slideUp()
    $('#field-20 input,#field-21 input').attr('required', false);
  }
});

$('#22').change(function() {
  if ($(this).val() == '33') {
    $('#field-23').slideDown()
    $('#field-23 input').attr('required', true);
  } else{
    $('#field-23').slideUp()
    $('#field-23 input').attr('required', false);
  }
});

$('#24').change(function() {
  if ($(this).val() == '46') {
    $('#field-25').slideDown()
    $('#field-25 input').attr('required', true);
  } else{
    $('#field-25').slideUp()
    $('#field-25 input').attr('required', false);
  }
});

const month  = dayjs().subtract('1', 'month').format('YYYY-MM-DD');
const today  = dayjs().format('YYYY-MM-DD');
$('input[type="date"]').attr('min', month)
$('input[type="date"]').attr('max', today)
