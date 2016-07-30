<?php

Admin::model('App\Permit')->title('Права пользователей')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with();
	$display->filters([

	]);
	$display->columns([
		Column::string('name')->label('Название'),
		Column::string('slug')->label('Код'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('name', 'Название'),
		FormItem::text('slug', 'Код'),
	]);
	return $form;
});