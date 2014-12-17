jQuery(document).ready(function() {
    
    $( "body").delegate( ".loadHourDetail", "click", function() {
        //var option = $('option:selected', this).attr('value');
        var fecha = $(this).data('fecha');
        var customer = $(this).data('customer');
        
        $('.panelPrepaids').fadeOut('slow');
        $('.panelDetailHours').load(base+'ajax/loadhours/'+fecha+'/'+customer);
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
    
    $( "body").delegate( ".panel-close", "click", function() {
        $('.panelPrepaids').fadeIn('slow');
        $('.panelDetailHours').html('');
        $('.panelPrepaids').show();
    });
    
    $( "body").delegate( ".goToHours", "click", function() {
        var customer = $(this).data('customer');
        $('.customer').val(customer);
        $('#prepaidHoursForm').submit();
    });
    
    $( "body").delegate( ".optionSelect", "change", function() {
        var option = $('option:selected', this).attr('value');
        if(option=="range"){
            $('.pickerFromTo').show();    
        }else{
            $('.pickerFromTo').hide();    
        }
    });
    
    $( "body").delegate( "#prepaidHoursForm", "submit", function(e) {
        e.preventDefault();
        var data = $(this).serialize();
        var customer = $('option:selected', '.customer').attr('value');
        var option = $('option:selected', '.optionSelect').attr('value');
        var from = $('#datepickerFrom').val();
        var to = $('#datepickerTo').val();
        
        if(option=="range" && (from=="" || to=="")){
            swal({
              title: "ERROR",
              text: "All fields are required.",
              type: "error",
            });
        }else{
            if(customer==0){
                swal({
                  title: "ERROR",
                  text: "You need to select a customer.",
                  type: "error",
                });
            }else{
                if(option==0){
                    swal({
                      title: "ERROR",
                      text: "You need to select an option",
                      type: "error",
                    });
                }else{
$(".loadHoursTable").html('<div style="padding: 5px 0px; text-align: center;"><i class="fa fa-circle-o-notch fa-spin fa-4x"></i></div>');                       $.ajax({
                        data: data,
                        url: base+"ajax/loadTablePrepaids",
                        type: "POST"
                    }).done(function(d) {
                        $('.loadHoursTable').html(d);
                    });
                }   
            }
        }
    });
      
    
});