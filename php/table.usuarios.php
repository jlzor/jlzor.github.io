<?php

/*
 * Editor server script for DB table usuarios
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
Editor::inst( $db, 'usuarios', 'id' )
	->fields(
		Field::inst( 'first_name' )
			->validator( 'Validate::notEmpty' )
			->validator( 'Validate::maxLen', array( 'max'=>255 ) ),
		Field::inst( 'last_name' )
			->validator( 'Validate::notEmpty' )
			->validator( 'Validate::maxLen', array( 'max'=>255 ) ),
		Field::inst( 'url' )
			->validator( 'Validate::notEmpty' )
			->validator( 'Validate::maxLen', array( 'max'=>255 ) ),
		Field::inst( 'email' )
			->validator( 'Validate::notEmpty' )
			->validator( 'Validate::maxLen', array( 'max'=>255 ) ),
		Field::inst( 'password' )
			->validator( 'Validate::notEmpty' )
			->validator( 'Validate::maxLen', array( 'max'=>12 ) ),
		Field::inst( 'type' )
			->validator( 'Validate::notEmpty' )
			->validator( 'Validate::maxLen', array( 'max'=>10 ) )
	)
	->process( $_POST )
	->json();
