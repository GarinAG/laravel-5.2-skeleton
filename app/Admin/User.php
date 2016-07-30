<?php
use SleepingOwl\Admin\FormItems\FormItem;

Admin::model('App\User')->title('Пользователи')->display(function () {
    $display = AdminDisplay::datatables();
    $display->with();
    $display->filters([

    ]);
    $display->columns([
        Column::string('first_name')->label('Имя'),
        Column::string('email')->label('Email'),
    ]);
    return $display;
})->createAndEdit(function () {
    $form = AdminForm::form();
    $form->items([
        FormItem::text('email', 'Email'),
        FormItem::password('password', 'Пароль'),
        FormItem::timestamp('last_login', 'Дата последнего входа')->format('d.m.Y'),//->seconds(true),
        FormItem::text('first_name', 'Имя'),
        FormItem::text('last_name', 'Фамилия'),
        FormItem::multiselect('theroles', 'Роли')->model('App\Role')->display('name'),
    ]);
    return $form;
});