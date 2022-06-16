# Kontur Api Gateway

Kontur Api Gateway - клиент для работы с сервисом [Контур API](https://developer.kontur.ru/doc/focus). Данные пакет можно
использовать совместно с фреймворком Yii2, а так же как самостоятельный пакет.

Структура пакета
-------------------
    src/                    основой код пакета
        components/         компоненты Yii2 фреймворка
        exceptions/         исключения сервиса Контур API
        helpers/            вспомогательные уртилиты
        requests/           запросы к сервису Контур API
        responses/          ответы от сервиса Контур API

Установка
------------
### Установка через composer
Добавить в composer.json:
~~~
"require": {
    "mf-team/yii2-kontur-api-gateway": "dev-main",
    ...
}

"repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/dev-moneyfriends-ru/yii2-kontur-api-gateway.git"
    },
    ...
]
~~~

Конфигурация
-------------

### Конфигурация Yii2
Добавить в файл `config/main.php`:
```php
return [
    'components' => [
        'konturGateway' => [
            'class' => KonturGatewayComponent::class,
            'apiKey' => '<Ключ API>',
        ],
    ],
    ...
];
```

Виды запросов
-------------
    По юр. лицу
        CompanyRequest              запрос по ИНН и(или) ОГРН компании
        CompanyAffiliationRequest   запрос с выбором связи компании
        CompanyRangeRequest         запрос с выбором диапазона значений

    По физ. лицу
        PersonRequest               базовый запрос по физ. лицу
        PersonAffiliationRequest    запрос с выбором компаниям связи
    
    Остальные
        DateRequest                 запрос по дате
        PassportRequest             запрос по паспорту

**Примечание:**
- Некоторые API методы могут возвращать ответ в формате PDF или XML. Для этого у экземпляра класса CompanyRequest необходимо вызвать метод asPdf() и asXml()

Примеры запросов
-------------
### Базовые реквизиты компании по ИНН
```php
$konturGateway = KonturGatewayFactory::instanceHttp('<Ключ API>');
$request = CompanyRequest::byInn("<ИНН компании>");
$responses = $konturGateway->req($request);

foreach ($responses as $response) {
    ...
}
```

### Поиск публичных должностных лиц
```php
$konturGateway = KonturGatewayFactory::instanceHttp('<Ключ API>');
$request = PersonRequest::byFio("<ФИО>");
$responses = $konturGateway->pepSearch($request);

foreach ($responses as $response) {
    ...
}
```

### Экспресс-отчет по контрагенту в формате PDF
```php
$konturGateway = KonturGatewayFactory::instanceHttp('<Ключ API>');
$request = CompanyRequest::byInn("<ИНН компании>");
$request->asPDF();

$konturGateway->briefReport($request);
```

Исключения
-------------
    KonturExceptionInterface        общий интерфейс исключения
    KonturBadRequestException       данные указаны не по формату
    KonturDownloadFileException     ошибка скачивания файла
    KonturForbiddenException        доступ запрещен
    KonturNotFoundException         не найдены данные по запросу
    KonturTooManyRequestException   много запросов за  промежуток времени