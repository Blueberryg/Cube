<?php 
$token = "1364669535:AAFm_ELt-psl9NjVCqgoFe9D2ar69OCfKuM";
$bot = new \TelegramBot\Api\Client($token);
// команда для start
$bot->command('start', function ($message) use ($bot) {
    $answer = 'Добро пожаловать! Здесь вы можете заработать больше, чем в ставках на спорт, ведь тут шансы 50%/50%, а ставках еще есть ничья, т.е 33%/33%/33%. Играя у нас вы повышаете свои шансы стать богаче!';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});

// команда для помощи
$bot->command('help', function ($message) use ($bot) {
    $answer = 'Команды:
/help - вывод справки';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});

$bot->run();
switch ($message) {
        // если начало диалога
    case '/start':
        $dataSend = array(
            'text' => "Добро пожаловать! Здесь вы можете заработать больше, чем в ставках на спорт, ведь тут шансы 50%/50%, а ставках еще есть ничья, т.е 33%/33%/33%. Играя у нас вы повышаете свои шансы стать богаче!",
            'chat_id' => $chat_id,
                // отправляем клавиатуру
            'reply_markup' => $justKeyboard,
        );
        $this->requestToTelegram($dataSend, "sendMessage");
        break;
        // если пришла команда Голосовать
    case 'Голосовать':
        $dataSend = array(
            'text' => "Оплата на киви кошелек +79173663537",
            'chat_id' => $chat_id,
        );
        $this->requestToTelegram($dataSend, "sendMessage");
        break;
        // если запросили Помощь
    case 'Играть':
        $dataSend = array(
            'text' => "Скоро подберется соперник",
            'chat_id' => $chat_id,
        );
        $this->requestToTelegram($dataSend, "sendMessage");
        break;
}
?>