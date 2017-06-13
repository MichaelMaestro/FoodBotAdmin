<?php

/*
 * This is a simple example of the main features.
 * For full list see documentation.
 */
use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;



Admin::model('App\Res')->title('Рестораны')->display(function ()
{
	$display = AdminDisplay::table();
	$display->columns([
		Column::string('acs')->label('Доступ'),
		Column::string('name')->label('Название ресторана'),
		Column::image('lic')->label('Лицензия'),
		Column::string('login')->label('Логин'),
		Column::string('phone')->label('Телефон'),
		Column::string('name_dir')->label('Имя директора'),
		Column::string('e-mail')->label('Почта'),

	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::select('acs','Доступ')->options([0 => 'Нет доступа', 1 => 'Есть доступ'])->required(),
		FormItem::text('name','Название реторана')->required(),
		FormItem::image('lic', 'Лицензия')->required(),
		FormItem::text('login','Логин')->required(),
		FormItem::text('pass','Пароль')->required(),
		FormItem::text('phone','Телефон')->required(),
		FormItem::text('name_dir','Имя директора')->required(),
		FormItem::text('e-mail','Почта')->required(),
	]);
	return $form;
});