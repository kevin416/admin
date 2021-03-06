<?php
/**
* Language file for group error/success messages
*
*/

return array(

    'group_exists'        => 'Группа уже создана!',
    'group_not_found'     => 'Группа с id [:id] не создана.',
    'group_name_required' => 'Необходимо поле с названием.',
    'users_exists'        => 'Группа содержит пользователей и не может просто так быть удалена',

    'success' => array(
        'create' => 'Группа успешно создана.',
        'update' => 'Группа успешно отредактирована.',
        'delete' => 'Группа успешно удалена.',
    ),

    'delete' => array(
        'create'    => 'Возникли какие-то проблемы во время создания группы пользователей. Пожалуйста, повторите попытку позже.',
        'update'    => 'Возникли какие-то проблемы во время редактирования группы пользователей. Пожалуйста, повторите попытку позже.',
        'delete'    => 'Возникли какие-то проблемы во время удаления группы пользователей. Пожалуйста, повторите попытку позже.',
    ),

    'error' => array(
        'group_exists' => 'Группа с таким именем уже существует, вам необходимо придумать другое уникальное имя.',
    ),

);
