<?php
/**
 * Created by PhpStorm.
 * User: Pathologic
 * Date: 15.05.2016
 * Time: 1:26
 */
if (!defined('MODX_BASE_PATH')) {die();}

setlocale(LC_ALL, 'ru_RU.UTF-8');

$_lang = array();
$_lang['form.protectSubmit'] = 'Данные успешно отправлены. Нет нужды отправлять их еще раз.';
$_lang['form.submitLimit'] = 'Отправлять форму можно 1 раз в ';
$_lang['form.minutes'] = 'мин';
$_lang['form.dateFormat'] = 'm.d.Y в H:i:s';
$_lang['form.default_successTpl'] = '@CODE:Форма успешно отправлена в [+form.date.value+]';
return $_lang;