<?php

return [
    'plugin' => [
        'name' => 'Translate',
        'description' => 'Tillar sozlamalari.',
        'tab' => 'Tarjima',
        'manage_locales' => 'Tillarni boshqarish',
        'manage_messages' => 'Tekstlarni boshqarish'
    ],
    'locale_picker' => [
        'component_name' => 'Tilni tanlash',
        'component_description' => 'Tillar royhatini chiqaradi.',
    ],
    'alternate_hreflang' => [
        'component_name' => 'Alternativ elementlar hrefLang',
        'component_description' => 'Sahifaga alernativ taglarni kiritadi'
    ],
    'locale' => [
        'title' => 'Tillarni boshqarish',
        'update_title' => 'Tilni yangilash',
        'create_title' => 'Til qoshish',
        'select_label' => 'Tilni tanlash',
        'default_suffix' => 'По умолчанию',
        'unset_default' => '":locale" уже установлен как язык по умолчанию.',
        'delete_default' => '":locale" используется по умолчанию и не может быть удален.',
        'disabled_default' => '":locale" отключен и не может быть использован как язык по умолчанию.',
        'name' => 'Название',
        'code' => 'Код',
        'is_default' => 'По умолчанию',
        'is_default_help' => 'Использовать этот язык, как язык по умолчанию.',
        'is_enabled' => 'Включено',
        'is_enabled_help' => 'Сделать язык доступным в интерфейсе сайта.',
        'not_available_help' => 'Нет настроек других языков.',
        'hint_locales' => 'Создание новых переводов содержимого интерфейса сайта.',
        'reorder_title' => 'Изменить порядок языков',
        'sort_order' => 'Порядок сортировки',
    ],
    'messages' => [
        'title' => 'Перевод сообщений',
        'description' => 'Перевод статических сообщений в шаблоне',
        'clear_cache_link' => 'Очистить кэш',
        'clear_cache_loading' => 'Очистка кэша приложения...',
        'clear_cache_success' => 'Очистка кэша завершена успешно!',
        'clear_cache_hint' => 'Используйте кнопку <strong>Очистить кэш</strong>, чтобы увидеть изменения в интерфейсе сайта.',
        'scan_messages_link' => 'Сканирование сообщений',
        'scan_messages_begin_scan' => 'Begin scan',
        'scan_messages_loading' => 'Сканирование наличия новых сообщений...',
        'scan_messages_success' => 'Сканирование файлов шаблона темы успешно завершено!',
        'scan_messages_hint' => 'Используйте кнопку <strong>Сканирование сообщений</strong> для поиска новых ключей перевода активной темы интерфейса сайта.',
        'scan_messages_process' => 'Этот процесс попытается отсканировать активную тему для сообщений, которые можно перевести.',
        'scan_messages_process_limitations' => 'Некоторые сообщения могут не быть отсканированы и появлятся только после первого использования.',
        'scan_messages_purge_label' => 'Сначала очистить все сообщения',
        'scan_messages_purge_help' => 'Если этот флажок установлен, это приведет к удалению всех сообщений перед выполнением сканирования.',
        'scan_messages_purge_confirm' => 'Вы действительно хотите удалить все сообщения? Операция не может быть отменена!',
        'hint_translate' => 'Здесь вы можете переводить сообщения, которые используются в интерфейсе сайта.',
        'hide_translated' => 'Скрыть перевод',
    ],
];
