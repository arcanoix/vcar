/* show file value after file select
$('.custom-file-input').on('change',function(){
  $(this).next('.form-control-file').addClass("selected").html($(this).val());
})
*/

$('.custom-file-input').on('change',function(){
    var fileName = $(this).val();
    $(this).next('.form-control-file').hide();
    $(this).toggleClass('form-control custom-file-input').attr('type','text').val(fileName);
})
