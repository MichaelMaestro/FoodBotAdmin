<?php

/*
 * This is a simple example of the main features.
 * For full list see documentation.
 */
use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;



Admin::model('App\Dish')->title('Блюда')->display(function ()
{
	$display = AdminDisplay::table();
	$display->columns([
		Column::string('dish_name')->label('Наименование блюда'),
		Column::image('icons')->label('Изображение'),
		Column::string('descr_dish')->label('Описание'),
		Column::string('ingredient')->label('Ингридиенты'),
		Column::string('price')->label('Цена'),

	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('dish_name','Наименование блюда')->required(),
		FormItem::text('icons', 'Url картинки')->required(), 
		FormItem::text('descr_dish','Описание')->required(),
		FormItem::text('ingredient','Ингридиенты')->required(),
		FormItem::text('price','Цена')->required(),
	]);
	return $form;
});