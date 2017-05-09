<?php

/*
 * This is a simple example of the main features.
 * For full list see documentation.
 */

Admin::model('App\User')->title('Клиенты')->display(function ()
{
	$display = AdminDisplay::table();
	$display->columns([
		Column::string('first_name')->label('Имя'),
		Column::string('last_name')->label('Фамилия'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('id', 'Telegram id')->required()->unique(),
		FormItem::text('first_name', 'Имя')->required(),
		FormItem::text('last_name', 'Фамилия')->required(),
	]);
	return $form;
});