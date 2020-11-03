/*
 * Copyright (c) 2/2/2020 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

$(function(){

	$('#bx-admin-prefix').on('click', '.kit-iblockprops-list label.parent', function(){
			var li = $(this).parent('li'),
				child = li.children('ul');
			child.slideToggle();
		});
	
	$('#bx-admin-prefix').on('click', '.kit-iblockprops-list + .reset', function(){
			var list = $(this).prev('.kit-iblockprops-list');
			$('input[type=checkbox], input[type=radio]', list).removeAttr('checked');    
		});	
        
	$('#bx-admin-prefix').find('.kit-iblockprops-list').find('input[type=checkbox], input[type=radio]').each(function(){
			if ($(this).is(':checked')) {
				$(this).parents('ul').show().siblings('ul').show();
			}
		});
    
});