<?php

/*
 * Editor server script for DB table blog_posts
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Join,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;


// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'blog_posts', 'id' )
	->fields(
		Field::inst( 'title' )
			->validator( 'Validate::notEmpty' )
			->validator( 'Validate::maxLen', array( 'max'=>255 ) ),
		Field::inst( 'post' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'post_full' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'author_id' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'date_posted' )
			->validator( 'Validate::notEmpty' )
			->validator( 'Validate::dateFormat', array( 'format'=>'Y-m-d' ) )
			->getFormatter( 'Format::date_sql_to_format', 'Y-m-d' )
			->setFormatter( 'Format::date_format_to_sql', 'Y-m-d' )
	)
	->process( $_POST )
	->json();
