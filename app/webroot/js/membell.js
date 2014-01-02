$(document).ready(function(){



    $('#commenthoatdong').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode:event.which);
        //alert ('Bạn vừa nhấn enter');
        var id = $('#idbaiviet').val();
        if (keycode ==  '13') {
            var noidung = $('#commenthoatdong').val();

            var tmlurl ='/da/hoatdongs/addcomment/'+noidung+'/'+id;
            //alert(tmlurl);
            var str_string = 'noidung='+noidung+'&idbv='+id;    
            $('#commenthoatdong').val('');  
            $.ajax({
                    type: 'POST',
                    contentType: "application/json; charset=utf-8",
                    url: tmlurl,
                    dataType: 'json',
                    success: function(data){
                        //alert(data);
                        //return data;
                        
                            //alert('Trùng tên rồi nhé');
                            //alert('Success');
                            
                            $('#showcomment div:first-child').hide().fadeIn().before('<div>'+data.tenNhanVien+'</div><div><img class="img-circle" src="/da/img/ava/%20'+data.anh+'"/><div>'+noidung+'</div>');
                            
                            //$('#checkname').val(2);
                            //alert('Lỗi');
                         
                   }
                   }); 
        }
    });


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



    


});