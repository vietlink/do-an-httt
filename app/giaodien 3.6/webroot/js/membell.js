$(document).ready(function(){
	var oTable = $('#example').dataTable();
    var oTableTools = new TableTools( oTable, {
        "buttons": [
            "copy",
            "csv",
            "xls",
            "pdf",
            { "type": "print", "buttonText": "Print me!" }
        ]
    } );
     
    $('#demo').before( oTableTools.dom.container );






    $('input.chonnv').click(function(){
        
    });
});