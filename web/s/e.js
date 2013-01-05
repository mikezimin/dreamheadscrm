log = function(o) {
	console.log(o);
}

EParams = {
	init: function() {
	
		// Текстовые поля ввода
		$('.EParams input.E').focusout(function() {
			var t = $(this);
			var params = t.parents('.EParams');
			
			var updateUrl = params.attr('data-update-url');
			var column = t.attr('name');
			var value = t.val();
			
			EParams.update(updateUrl, column, value);
		});
		
		$('.EParams input.E').keyup(function(e) {
			code = e.keyCode ? e.keyCode : e.which;
            if (code == 13) {
				$(this).trigger('blur');
			}
		})
		
		// Чекбоксы
		$('.EParams input.EC').change(function() {		
			
			var t = $(this);
			var params = t.parents('.EParams');
			
			var updateUrl = params.attr('data-update-url');
			var column = t.attr('name');
			var checked = t.is(':checked');
			
			EParams.update(updateUrl, column, checked);
		});
		
	},
	
	update: function(updateUrl, column, value) {
		
		var request = $.ajax({
			url: updateUrl,
			type: "POST",
			data: {
				'column': column,
				'value': value
			},
			dataType: "json"
		});

		request.done(function(msg) {
			// $("#log").html( msg );
		});

		request.fail(function(jqXHR, textStatus) {
			// alert( "Request failed: " + textStatus );
		});
	}
}

EData = {
	init: function() {
	
		// td.E используют EditField
		$('.EData td.E').click(function() {
		
			var t = $(this);
			EData.td = t;
			var data = t.parents('.EData');
			EData.field = data.find('.EditField');
			var p = t.position();
			
			EData.dataUpdateUrl = data.attr('data-update-url');
			EData.dataCell = t.attr('data-cell');
			
			EData.field.css({
				'display': 'block',
				'left': p.left + 1 + 'px',
				'top': p.top + 1 + 'px',
				'width': t.innerWidth() - 24 + 'px',
				'height': t.innerHeight() - 8 + 'px'
			});
			EData.field.attr('value', t.text());
			EData.field.focus();
		});
		
		// td.EC используют собственные input type="checkbox"
		$('.EData td.EC input').change(function() {
		
			var t = $(this);
			EData.td = t;
			
			var data = t.parents('.EData');
			var td = t.parents('td.EC');
			
			var dataUpdateUrl = data.attr('data-update-url');
			var dataCell = td.attr('data-cell');
			
			var dataCheckedRowClass = td.attr('data-checked-row-class');
			
			var checked = t.is(':checked');
			
			var tr = t.parents('.EData tr');
			if (checked) {
				tr.addClass(dataCheckedRowClass);
			} else {
				tr.removeClass(dataCheckedRowClass);
			}
			
			EData.update(dataUpdateUrl, dataCell, checked);
		});
		
		$('.EData tr').mouseover(function() {
			var t = $(this);
			t.addClass('Selected');
		});
		
		$('.EData tr').mouseout(function() {
			var t = $(this);
			t.removeClass('Selected');
		});
		
		$('.EditField').focusout(function() {
			var t = $(this);
			t.css('display', 'none');
			EData.td.text(EData.field.val());
			EData.update(EData.dataUpdateUrl, EData.dataCell, EData.field.val());
		});
		
		$('.EditField').keypress(function(e) {
			var t = $(this);
			if(e.which == 13) {
				t.blur();
			}
		});
	},
	
	update: function(dataUpdateUrl, dataCell, value) {
	
		var	s = dataCell.split(',');
		var request = $.ajax({
			url: dataUpdateUrl,
			type: "POST",
			data: {
				'id': s[0],
				'column': s[1],
				'value': value
			},
			dataType: "json"
		});

		request.done(function(msg) {
			// $("#log").html( msg );
		});

		request.fail(function(jqXHR, textStatus) {
			// alert( "Request failed: " + textStatus );
		});
		
	}
}

$(document).ready(function() {
	EData.init();
	EParams.init();
});