# save-world
Проект оринтированный на помощь окружающей среде.

Пользователь, видя мусор в несанкционированном для этого месте, отмечает это на карте (в telegram). Обладая этой информацией будет быстрее проиходить уборка мусора и обычные люди смогут помочь экологии. 

    Сайт: 
    по типу (landing page) без дополнительных вкладок (все на одной странице)

     дизайн: adobe XD, photoshop
     среда разработки: sublime text 3
     языки программирования: html, css, js, php
     база данных: mysql

     Наполнение
       Описание проблем экологии
       Способы решения
       Интерактивная карта (показывает несанкционированиые свалки в ближайшей местности) ( Данные подгружаются на сервер )
       Фотографии этих мест (привязанные к меткам на карте) ( Данные подгружаются на сервер )
       На фтот должна быть разница до уборки места и после. Видет ник пользователя (по его желанию)
       Информация о функционали и добавлении телеграм бота
       Подвал сайта с контактными данными
  
    телеграм бот:
    Выодится информация о его функционале
    Интерфейс состоит из кнопок:
    "Тут есть мусор" спрашивает геолокацию пользователя
    "Сделать фотографию" спрашивает разрешения на открытия камеры
      Если два пункта будут выполнены, загружаем данные на сервер
      
    "Убрать мусор" открывается карта с интерактивными метками.
      при выборе метки прокладывается маршрут с месту назначения
      Появляются кнопки:
        "Завершить уборку" 
        Появляются кнопки:
          "Сделать фото" спрашивает разрешения на открытия камеры
          "Указыввать ваш ник на фото?" пишет в углу фота никнейм пользователя
           Если пункт "Сделать фото" будет выполнен, загружаем данные на сервер
            При успешном выполнении отправляем сообщение:
              "Ваши данные отпралены на обработку, вы можете посмореть их на сайте save-world.ru"
        "Отмена" возвращает в начальное состояние
         
    
    
