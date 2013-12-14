$(document).ready(function() {  
    var hitEvent = 'ontouchstart' in document.documentElement ? 'touchstart' : 'click';    
    $('#del').live(hitEvent, function(e) {  
        var posY = hitEvent=='touchstart' ? 'top':e.clientY+20;
        var ID = $(this).attr("value");
        delItem = $(this).parents('tr');
        delItem.addClass("warning"); 
        $('<div></div>').appendTo('body')
        .html('<div><font size="3">Are you sure you want to delete :</br><strong>"'+ $(this).closest('tr').children('td:nth-child(2)').text() +'"</strong> ?</font></div>')
        .dialog({
            title: 'Delete message', 
            autoOpen: true,
            position: [ 'center',posY],
            resizable: false,
            modal: true,
            show: 'blind',
            hide: 'blind',
            buttons: {
                Save:function ()  { 
                    if ($('#qty').val()!=""){
                        $('.ui-dialog-buttonpane').find('button:contains("Save")').attr("disabled", true).text("Please wait...");
                        $.ajax({
                            type: 'POST',
                            url: 'obra/eleminar',
                            data: {
                                ID : ID
                            },
                            dataType: "json",
                            cache: false,
                            success: function(o){                      
                                delItem.remove();
                            },
                            error: function() {
                                alert( 'error!' )
                            }
                        });                    
                        delItem.removeClass("warning");   
                        $(this).dialog("close");
                    }else
                        $('#error-qty').html("You can not leave this empty."); 
                },
                Cancel: function () {
                    delItem.removeClass("warning");                       
                    $(this).dialog("close");
                }
            },
            open: function() {
                $('.ui-dialog-buttonpane').find('button:contains("Save")').addClass("btn btn-success");
                $('.ui-dialog-buttonpane').find('button:contains("Cancel")').addClass("btn btn-danger");             
            },
            close: function (event, ui) {
                delItem.removeClass("warning");  
                $(this).remove();
            }
        });
    });
    $(window).resize(function() {        
        $(".ui-dialog-content").dialog('option', 'position', $(".ui-dialog-content").dialog('option','position'));
    });   
    $('#idObra').on('change', function() {
        $('#ccosto').val( $("option:selected", this).attr("rel") ); // or $(this).val()
});
    
    
})