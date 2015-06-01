
/*
 * Editor client script for DB table usuarios
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		"ajax": "php/table.usuarios.php",
		"table": "#usuarios",
		"fields": [
			{
				"label": "firstn",
				"name": "first_name"
			},
			{
				"label": "lastn",
				"name": "last_name"
			},
			{
				"label": "url",
				"name": "url"
			},
			{
				"label": "email",
				"name": "email"
			},
			{
				"label": "password",
				"name": "password"
			},
			{
				"label": "type",
				"name": "type"
			}
		]
	} );

	$('#usuarios').DataTable( {
		"dom": "Tfrtip",
		"ajax": "php/table.usuarios.php",
		"columns": [
			{
				"data": "first_name"
			},
			{
				"data": "last_name"
			},
			{
				"data": "url"
			},
			{
				"data": "email"
			},
			{
				"data": "password"
			},
			{
				"data": "type"
			}
		],
		"tableTools": {
			"sRowSelect": "os",
			"aButtons": [
				{ "sExtends": "editor_create", "editor": editor },
				{ "sExtends": "editor_edit",   "editor": editor },
				{ "sExtends": "editor_remove", "editor": editor }
			]
		}
	} );
} );

}(jQuery));

