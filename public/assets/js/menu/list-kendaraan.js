console.log("List Kendaraan Js");

$(document).ready(function(){
    $(".btn-view-list-vehicle").click(function(){ 
        // alert ($(this).data('id'));
        $('#img-viewer').attr('src', $(this).data('id'));
        $('.modal-title').html($(this).data('name'));
        $('#modal-default').modal('show');
      });
});