function reply(u,i) {
	var t = document.getElementById('text');
		t.value  += u + ', ';
	var end = t.value.length;
	t.setSelectionRange(end,end);
	t.focus();
		var uid = document.getElementById('uid');
		uid.value  += i;
}
function quote(qid){
  $.get("/forum/ajax.php", { id: qid, action: 'getQuotePost' }, function(quote){
    $("#text").val(quote).focus();
});
}

    function toggleActionsOver(postID){
         $("#actions"+postID).stop(1).css("padding-left","7px").animate({width: "170px"}, 300, function(){
$("#actions"+postID).html("<a onclick='removeItem("+postID+");'>Удалить</a> <a onclick='getSoursePost("+postID+");' >Изменить</a> Жалоба <img src='/system/icons/settings.gif' title='Действия'  onclick='toggleActionsOut("+postID+");' style='float: right; cursor: pointer;'/>");
    });
    }
        function toggleActionsOut(postID){
      $("#actions"+postID).stop(1).animate({width: "17px"}, 300).html(" <img src='/system/icons/settings.gif' title='Действия' style='float: right; cursor: pointer;' />");
    }
    function removeItem(itemID){
  $.get("/forum/ajax.php", { id: itemID, action: 'removePost' }, function(reply){
    if(reply==='ok'){ $("#item"+itemID).fadeOut(function(){
     $("#item"+itemID).remove();
     }); status('Сообщение удалено','message'); }else status(reply,'error');
     } );
}
    function getSoursePost(itemID){
  $.get("/forum/ajax.php", { id: itemID, action: 'getSoursePost' }, function(post){
     $('<div />').attr({'id': 'hide'+itemID, 'style': 'display:none'}).insertAfter("#item"+itemID).html($("#messageBox"+itemID).html());
    $("#messageBox"+itemID).html("<textarea id='area"+itemID+"' cols=42 rows=9>"+post+"</textarea><br /><input type='button' value='Применить' onclick='confirmChanges("+itemID+");'/> <input type='button' value='Отмена' onclick='cancelChanges("+itemID+")'/>");
});
}
function cancelChanges(itemID){
  $("#messageBox"+itemID).html($("#hide"+itemID).html());
  $("#hide"+itemID).remove();
}
function confirmChanges(itemID){
  $.post("/forum/ajax.php", { id: itemID, message: $("#area"+itemID).val() }, function(post){
    if(post=='error')status('Ошибка доступа','error');
    else {
  $("#messageBox"+itemID).html(post);
  $("#hide"+itemID).remove();
status('Сообщение изменено','message');
   }  } );

}