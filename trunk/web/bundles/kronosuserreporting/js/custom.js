/**
 * Copyright (C) 2014 Orange
 */

jQuery(document).ready(function() {
    $("div#content").on('click', 'button#kronos_form_line_x_save', function() {
        var createLineAction = $('form#kronos_form_line').attr('action');
        var tableId = $('select#kronos_x_line_form_line_type').val();
        var table = $("table#" + tableId);

        var Data = $('form#kronos_form_line').serialize();
        //replace form with a blank one
        $.post(createLineAction,
                Data
                , function(createNewLine) {
                    $("div#addNewTable").html(createNewLine);
                    //decide if we update a table or the entire page (if table exists)
                    if (table.length) {
                        var getTableAction = createLineAction.replace(/create-line\/.*/, 'get-table/' + tableId);
                        $.get(getTableAction, function(tableResults) {
                            table.html(tableResults);
                        });
                    } else {
                        //form#kronos_form_line_save
                        var getIndexAction = createLineAction.replace(/create-line/, 'index');
                        $.get(getIndexAction, function(indexResults) {
                            $("form#kronos_form_line_save").html(indexResults);
                        });
                    }
                });
        return false;
    });

    $("a.removeDatas").click(function() {
        var deleteAction = $(this).attr('href');
        var parentTable = $(this).closest('table');
        var tableId = parentTable.attr('id');
        var getTableAction = deleteAction.replace(/delete-line-datas\/.*/, 'get-table/' + tableId);
        $.get(deleteAction, function(deleteData) {
            $("div#errorsParent").replaceWith(deleteData);
            $.get(getTableAction, function(tableData) {
                $("table#" + tableId).html(tableData);
            });
        });
        return false;
    });
});