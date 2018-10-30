/*!
 * SharePointFormSubmit
 *
 * 2009 Alex Dinnouti
 * licensed under GPL licenses.
 * 
 * http://code.google.com/p/jquerysharepointform/
 * 
 * Date: 2009-09-17
 * Revision: 2
 *
 * *
 * Allow to send a form within a form in sharepoint
 * 
 * parameters:
 * 	element - the element that contains the form
 * 	frmMethod - post / get
 * 	frmAction - url
 *  frmTarget optional,  default = '_self' -  '_blank' / '_parent' / '_self' / '_top' / window name
 *  debug - true/false
 
 * in case you need a custom submit button
 *	sbmCustom - true/false
 *	sbmID - submit ID
 *	sbmName - submit Name
 *	sbmValue - submit Value
 
 * in case you need to add form ID and Name	
 *  frmID - form id - optional
 *  frmName - form name - optional
 
 * see a example at:
 * http://code.google.com/p/jquerysharepointform/
 
 * for Convio fans, replace the submit with hidden
*/

(function($){
	$.fn.SharePointFormSubmit = function(arr) {
	
		var frmMethod = arr['frmMethod'];
		var frmAction = arr['frmAction'];
		var element = arr['element'];
		
		frmTarget = (arr['frmTarget'] === undefined) ? '_self' : arr['frmTarget'] ; 
		frmID = (arr['frmID'] === undefined) ? '' : arr['frmID'] ;
		frmName = (arr['frmName'] === undefined) ? '' : arr['frmName'] ;
		
		debug = ((arr['debug'] === undefined) || (arr['debug'] == false)) ? 'none' :  'block' ;
		
		
		var f = $('<form></form>');
			f.attr('method', frmMethod);
			f.attr('action', frmAction);
			f.attr('target', frmTarget);
			f.attr('id', frmID);
			f.attr('name',frmName);
			f.css('display', debug);
		
		$(element).find('select, textarea, :input:not(:checkbox)').each(function(){
			e = $('<input>');
			e.attr('type', $(this).attr('type'));
			e.attr('id', $(this).attr('id'));
			e.attr('name', $(this).attr('name'));
			e.attr('value', $(this).val());
			e.attr('checked', $(this).attr('checked'));
			e.attr('multiple', $(this).attr('multiple'));
			f.append(e);
		});
		
		// seems IE have a bug in the type=checkbox it insert value=on instead of checked='checked'
		$(element).find('input:checkbox').each(function(){
			if ($(this).attr('checked'))
			{
				chkboxChecked = 'checked';
			} else {
				chkboxChecked = '';
			};

			e = '<input type="checkbox" id="'+ $(this).attr("id") +'" name="'+ $(this).attr("name") +'" checked="'+ chkboxChecked  +'">';
			f.append(e);
		});


		// in case you need a custom submit buttom, Convio.com does.
		if (arr['sbmCustom']){
			sbmt = $('<submit>');
			sbmt.attr('type', 'submit');
			sbmt.attr('id', arr['sbmID']);
			sbmt.attr('name', arr['sbmName']);
			sbmt.attr('value', arr['sbmValue']);
			f.append(sbmt);			
		}
		
		// submit the form
		// add the form to the document between </form> and </html>
		// if you put a breakpoint before the submit you will be able to see it
		var h = $('body').append(f);
		// $(sbmt).trigger('click');
		f.submit();
	};
})(jQuery);