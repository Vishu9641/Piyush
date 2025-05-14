$(document).ready
(function () 
{
    $('#example1').datepicker({format: "dd/mm/yyyy",autoclose: true});

    //Alternativ way
    $('#example2').datepicker({format: "dd/mm/yyyy"})
    .on('change', function(){$('.datepicker').hide();});
});