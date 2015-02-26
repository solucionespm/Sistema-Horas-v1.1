jQuery(document).ready(function() {
    
    $( "body").delegate( ".panel-close", "click", function() {
        $('.panelPrepaids').fadeIn('slow');
        $('.panelDetailHours').html('');
        $('.panelPrepaids').show();
    });
    
        
    $( "body").delegate( ".optionSelect", "change", function() {
        var option = $('option:selected', this).attr('value');
        if(option=="range"){
            $('.pickerFromTo').show();    
        }else{
            $('.pickerFromTo').hide();    
        }
    });
    
    $("body").delegate(".submitCheckBoxes", "click", function(){
            metodo = $(this).data('method');
            $(".checkBoxesForm").submit();
    });
    
    $("body").delegate(".submitCheckBoxes2", "click", function(){
            metodo = $(this).data('method');
            $(".checkBoxesForm").submit();
    });
    
    $( "body").delegate( ".checkBoxesForm", "submit", function(e) {
            e.preventDefault();
            var datos = $(this).serialize();
            $.ajax({
                    data: datos,
                    url: base+"ajax/"+metodo,
                    type: "POST"
            }).done(function(d){
                    if(d=='error'){
                             swal({
                                    title: "ERROR",
                                    text: "You have to select at least one row.",
                                    type: "error"
                              });
                    }else{
                            $(".loadHoursTable").html('<div style="padding: 5px 0px; text-align: center;"><i class="fa fa-circle-o-notch fa-spin fa-4x"></i></div>');
                            $('#reportHoursForm').submit();
                    }
            });
            
            return false;
    });
    
    $( "body").delegate( ".lockHour", "click", function() {
            //block button
            $(this).html('<i class="fa fa-circle-o-notch fa-spin"></i>');
            $(this).addClass('disabled');
        
            //vars
            var hourBlockID = $(this).data('idhour');
            //update block
            $(".loadHoursTable").html('<div style="padding: 5px 0px; text-align: center;"><i class="fa fa-circle-o-notch fa-spin fa-4x"></i></div>');
            $.ajax({
                    data: { id: hourBlockID },
                    url: base+"ajax/hourLock",
                    type: "POST"
            }).done(function(d){
                    $('#reportHoursForm').submit();
            });
    });
    
    $( "body").delegate( ".unlockHour", "click", function() {
            //block button
            $(this).html('<i class="fa fa-circle-o-notch fa-spin"></i>');
            $(this).addClass('disabled');
            
            //vars
            var hourBlockID = $(this).data('idhour');
            //update block
            $.ajax({
                    data: { id: hourBlockID },
                    url: base+"ajax/hourUnLock",
                    type: "POST"
            }).done(function(d){
                    $('#reportHoursForm').submit();
                    $(".loadHoursTable").html('<div style="padding: 5px 0px; text-align: center;"><i class="fa fa-circle-o-notch fa-spin fa-4x"></i></div>');                       
            });
    });
    
    $( "body").delegate( "#reportHoursForm", "submit", function(e) {
        e.preventDefault();
        var data = $(this).serialize();
                $(".loadHoursTable").html('<div style="padding: 5px 0px; text-align: center;"><i class="fa fa-circle-o-notch fa-spin fa-4x"></i></div>');                       
        
        $.ajax({
            data: data,
            url: base+"ajax/loadTableReportHours",
            type: "POST"
        }).done(function(d) {
            if(d=='error'){
                swal({
                    title: "ERROR",
                    text: "All fields are required.",
                    type: "error"
                });
                $(".loadHoursTable").html('');
            }else{
                    $('.loadHoursTable').html(d);
                    $('.opcionesFiltro').slideUp();
                    $('.createPDF').prop('href', base+'pdf/reporteBilling?'+data);
            }
            //$('.loadHoursTable').html(d);
        });
        return false;
    });
    
    $( "body").delegate( "#checkAll", "click", function() {
        var isChecked = !$('.reportTable input:checkbox').prop('checked');
        $('.reportTable input:checkbox').prop('checked', isChecked);
    });
});