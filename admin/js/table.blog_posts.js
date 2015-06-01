
/*
 * Editor client script for DB table blog_posts
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		"ajax": "php/table.blog_posts.php",
		"table": "#blog_posts",
		"fields": [
			{
				"label": "title",
				"name": "title"
			},
			{
				"label": "post",
				"name": "post"
			},
			{
				"label": "postfull",
				"name": "post_full"
			},
			{
				"label": "authorid",
				"name": "author_id"
			},
			{
				"label": "datepost",
				"name": "date_posted",
				"type": "date",
				"dateFormat": "yy-mm-dd"
			}
		]
	} );

	$('#blog_posts').DataTable( {
		"dom": "Tfrtip",
		"ajax": "php/table.blog_posts.php",
		"columns": [
			{
				"data": "title"
			},
			{
				"data": "post"
			},
			{
				"data": "post_full"
			},
			{
				"data": "author_id"
			},
			{
				"data": "date_posted"
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

