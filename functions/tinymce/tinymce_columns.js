// AGEGA COLUMNAS EN EL EDITOR DEL ADMIN
(function() {
	tinymce.PluginManager.add('columnas', function( editor, url ) {
		editor.addButton( 'columnas', {
			icon: 'columnas',
			type: 'menubutton',
			title: 'Columnas',
			menu: [
				{text: 'Dos columnas', onclick: function() { editor.insertContent('<table class="two_col"><tr><td class="col_izq">Edita la primera columna</td><td class="col_der">Edita la segunda columna</td></tr></table>');}},
				{text: 'Tres columnas', onclick: function() { editor.insertContent('<table class="three_col"><tr><td class="col_izq">Edita la primera columna</td><td>Edita la segunda columna</td><td class="col_der">Edita la tercera columna</td></tr></table>');}},
				{text: 'Cuatro columnas', onclick: function() { editor.insertContent('<table class="four_col"><tr><td class="col_izq">Edita la primera columna</td><td>Edita la segunda columna</td><td>Edita la tercera columna</td><td class="col_der">Edita la cuarta columna</td></tr></table>');}}
			]
		});
	});
	paste_as_text: true
})();