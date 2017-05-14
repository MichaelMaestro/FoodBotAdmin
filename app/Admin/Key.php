<?php

/*
 * This is a simple example of the main features.
 * For full list see documentation.
 */

Admin::model('App\Key')->title('Ключевые слова')->display(function ()
{
	$display = AdminDisplay::table();
	$display->columns([
		Column::string('word')->label('Слово'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('word', 'Слово')->required()->unique(),
	]);
	return $form;
});