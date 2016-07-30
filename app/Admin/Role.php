<?php

Admin::model('App\Role')->title('Роли пользователей')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with();
	$display->filters([

	]);
	$display->columns([
			Column::string('name')->label('Название роли'),
			Column::string('slug')->label('Код'),
	]);
	return $display;
})->createAndEdit(function ($id)
{
	$form = AdminForm::form();
	if ( in_array($id, [1,2,3])) {
		$form->items([
				FormItem::text('name', 'Название роли'),
				FormItem::text('slug', 'Код')->readonly(),
				FormItem::multiselect('permits', 'Права доступа')->model('App\Permit')->display('name'),
		]);
	}
	else {
		$form->items([
				FormItem::text('name', 'Название роли'),
				FormItem::text('slug', 'Код'),
				FormItem::multiselect('permits', 'Права доступа')->model('App\Permit')->display('name'),
		]);
	}
	return $form;
})->delete(function ($id) { if ( in_array($id, [1,2,3])) return null; else return 1; });