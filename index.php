<?php
  
    
    /*include('include.php'); 
    $icl_photo = incl(2); 
    echo $icl_photo;
    include('test-photo/test-photo.php'); */
    include('basic.php');
    include('telegram_bot/vendor/autoload.php'); //Подключаем библиотеку
    use Telegram\Bot\Api; 
    
    file_put_contents(__DIR__ . '/log.txt', file_get_contents('php://input'));

    $telegram = new Api('1377077600:AAFmomSuRUfH5bSBYeLW7TMPso04shIlYwA'); //Устанавливаем токен, полученный у BotFather
    $result = $telegram -> getWebhookUpdates(); //Передаем в переменную $result полную информацию о сообщении пользователя
    
    $text = $result["message"]["text"]; //Текст сообщения
    $chat_id = $result["message"]["chat"]["id"]; //Уникальный идентификатор пользователя
    $name = $result["message"]["from"]["username"]; //Юзернейм пользователя
    $location = $result["message"]["location"]["latitude"];
  
 
    
    $keyboard = [[['text' => 'location', 'request_location' => true]], ["отправить фото"]]; //Клавиатура

    switch($text)
    {
        
         case $Location:
            
       
         print_r($text);
        break;
        
        case '/start':
        
         
         
            $reply = "Добро пожаловать в бота!";
            $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $keyboard, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);
            $telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => 'вот', 'reply_markup' => $reply_markup]);
           break; 
           
            case "отправить фото":
         
              $telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => 'Загрузите фотографию данного места']);
           break;
          
         
           
       

    }
   

