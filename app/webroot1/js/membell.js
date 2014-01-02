$(document).ready(function(){
	//alert('ok');
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
        alert('ok111111');
    });
});