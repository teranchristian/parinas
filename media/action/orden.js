
$(document).ready(function() {
 
    var hitEvent = 'ontouchstart' in document.documentElement ? 'touchstart' : 'click';
    $('#agregar').live(hitEvent, function(e) {
// var ID = $(this).attr("value");
        if ($('#descripcion').val() != "") {
//$('.ui-dialog-buttonpane').find('button:contains("Save")').attr("disabled", true).text("Please wait...");
            var data = $('#productoForm').serialize();
            $.ajax({
                type: 'POST',
                url: $('#productoForm').attr('action'),
                data: {
                    DATA: data
                },
                dataType: "json",
                cache: false,
                success: function(dataJSON) {
                    if (dataJSON.idItem)
                        updateRow(dataJSON)
                    else
                        addRow(dataJSON)

                    grandTotal();

                    $('#productoForm')[0].reset();
                },
                error: function() {
                    alert('error!')
                }
            });
        } else
            $('#error-qty').html("You can not leave this empty.");
    });

    $('#editar').live(hitEvent, function(e) {
        $(this).parents('tr').addClass("selectRow ");
        $("#idItem").val(parseInt($(this).closest('tr').children('td:nth-child(1)').text().replace(/ /g, '')));
        $("#descripcion").val($(this).closest('tr').children('td:nth-child(2)').text().replace(/ /g, ''));
        $("#unidad").val($(this).closest('tr').children('td:nth-child(3)').text().replace(/ /g, ''));
        $("#cantidad").val(parseInt($(this).closest('tr').children('td:nth-child(4)').text().replace(/ /g, '')));
        $("#precio").val($(this).closest('tr').children('td:nth-child(5)').text().replace(/ /g, ''));
        $("#idProducto").val($(this).attr("value"));
    });

    $('#del').live(hitEvent, function(e) {
        var posY = hitEvent == 'touchstart' ? 'top' : e.clientY + 20;
        var ID = $(this).attr("value");
        delItem = $(this).parents('tr');
        delItem.addClass("selectRow");
        $('<div></div>').appendTo('body')
                .html('<div><font size="3">Are you sure you want to delete :</br><strong>"' + $(this).closest('tr').children('td:nth-child(2)').text() + '"</strong> ?</font></div>')
                .dialog({
            title: 'Delete message',
            autoOpen: true,
            position: ['center', posY],
            resizable: false,
            modal: true,
            show: 'blind',
            hide: 'blind',
            buttons: {
                Save: function() {
                    if ($('#qty').val() != "") {
                        $('.ui-dialog-buttonpane').find('button:contains("Save")').attr("disabled", true).text("Please wait...");
                        $.ajax({
                            type: 'POST',
                            url: '../../producto/eleminar',
                            data: {
                                ID: ID
                            },
                            dataType: "json",
                            cache: false,
                            success: function(o) {                                
                                delItem.remove();
                                grandTotal();
                                setTableId();
                            },
                            error: function() {
                                alert('error!')
                            }
                        });
                        delItem.removeClass("selectRow");
                        $(this).dialog("close");
                    } else
                        $('#error-qty').html("You can not leave this empty.");
                },
                Cancel: function() {
                    delItem.removeClass("selectRow");
                    $(this).dialog("close");
                }
            },
            open: function() {
                $('.ui-dialog-buttonpane').find('button:contains("Save")').addClass("btn btn-success");
                $('.ui-dialog-buttonpane').find('button:contains("Cancel")').addClass("btn btn-danger");
            },
            close: function(event, ui) {
                delItem.removeClass("warning");
                $(this).remove();
            }
        });
    });

    //update el centro de costo, when the obra is selected
    $('#idObra').on('change', function() {
        $('#ccosto').val($("option:selected", this).attr("rel")); // or $(this).val()
    });
    $('#idObra').trigger('change');
    
    //update direccion when the proveedor is selected
    $('#idProveedor').on('change', function() {
        $('#proveedor').val( $("option:selected", this).attr("rel") ); // or $(this).val()
    });
    $('#idProveedor').trigger('change');
    
    //agregar calendario al al input
    $(function() {
        $('#fechaOrden').datepicker({
            dateFormat: "dd/mm/yy"
        });
        $(this).datepicker('setDate', new Date());
    });
    
});

function pad(str, max) {
    return str.length < max ? pad("0" + str, max) : str;
}

function addRow(dataJSON) {
    idRow = pad($('#productoList tbody tr').length + 1, 2);
    $('#productoList   > tbody:last').append('<tr >' +
            '<td> ' +
            idRow +
            '</td>' +
            '<td>' +
            dataJSON.descripcion +
            '</td>' +
            '<td>' +
            dataJSON.unidad +
            '</td>' +
            '<td class="text-right">' +
            pad(dataJSON.cantidad, 3) +
            '</td>' +
            '<td class="text-right">' +
            dataJSON.precio +
            '</td>' +
            '<td class="text-right total"> ' +
            dataJSON.cantidad * dataJSON.precio +
            '</td>' +
            '<td>' +
            '<center><i id="editar" value="' + dataJSON.idProducto + '" class="icon-pencil"></i></center>' +
            '</td>' +
            '<td>' +
            '<center><i id="del" value="' + dataJSON.idProducto + '" class="icon-trash"></i></center>' +
            '</td>' +
            '</tr>');
}

function updateRow(dataJSON) {
    $("#productoList   > tbody > tr").eq(dataJSON.idItem - 1).remove();
    $('#productoList   tbody tr ').eq(dataJSON.idItem - 2).after('<tr >' +
            '<td> ' +
            dataJSON.idItem +
            '</td>' +
            '<td>' +
            dataJSON.descripcion +
            '</td>' +
            '<td>' +
            dataJSON.unidad +
            '</td>' +
            '<td class="text-right">' +
            pad(dataJSON.cantidad, 3) +
            '</td>' +
            '<td class="text-right">' +
            dataJSON.precio +
            '</td>' +
            '<td class="text-right total"> ' +
            dataJSON.cantidad * dataJSON.precio +
            '</td>' +
            '<td>' +
            '<center><i id="editar" value="' + dataJSON.idProducto + '" class="icon-pencil"></i></center>' +
            '</td>' +
            '<td>' +
            '<center><i id="del" value="' + dataJSON.idProducto + '" class="icon-trash"></i></center>' +
            '</td>' +
            '</tr>');
}
function grandTotal() {
    var sum = 0;
    $('.total').each(function() {
        sum += parseFloat($(this).text());
        $(this).parents('tr').removeClass("selectRow")
    });
    $('#grandtotal').html(sum)
}

function setTableId(){
    id=1;
    $('#productoList > tbody  > tr').each(function() {        
        $(this).closest('tr').children('td:nth-child(1)').html(id);
        id++;
        
    });
}