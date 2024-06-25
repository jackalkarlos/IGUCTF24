<?php
session_start();

$maxRequests = 20;
$timeFrame = 5;
$blockDuration = 20; 

if (!isset($_SESSION['request_times'])) {
    $_SESSION['request_times'] = [];
}

$currentTime = time();

$_SESSION['request_times'] = array_filter($_SESSION['request_times'], function($timestamp) use ($currentTime, $timeFrame) {
    return ($currentTime - $timestamp) <= $timeFrame;
});

if (count($_SESSION['request_times']) >= $maxRequests) {
        if (!isset($_SESSION['block_start_time'])) {
        $_SESSION['block_start_time'] = $currentTime;
    }
    
        if (($currentTime - $_SESSION['block_start_time']) <= $blockDuration) {
        http_response_code(429);
	echo json_encode(['message' => 'Çok fazla istek. Lütfen daha sonra tekrar deneyin.']);
        exit;
    } else {
        unset($_SESSION['block_start_time']);
    }
}

$_SESSION['request_times'][] = $currentTime;

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['inputId']) && isset($data['answer'])) {
    $inputId = $data['inputId'];
    $answer = mb_strtolower($data['answer'], 'UTF-8');

    $correctAnswers = [
        '1' => 'tusi',
        '2' => 'aziz sancar',
        '3' => 'mehmet akif ersoy'
    ];

    if (array_key_exists($inputId, $correctAnswers)) {
        $correctAnswer = mb_strtolower($correctAnswers[$inputId], 'UTF-8');
        if (strcmp($answer, $correctAnswer) === 0) {
            http_response_code(200);
            echo json_encode(['message' => 'Doğru']);
        } else {
            http_response_code(403);
            echo json_encode(['message' => 'Yanlış']);
        }
    } else {
        http_response_code(400);
        echo json_encode(['message' => 'Geçersiz input id']);
    }
} elseif (isset($data['input1']) && isset($data['input2']) && isset($data['input3'])) {
    $answer1 = mb_strtolower($data['input1'], 'UTF-8');
    $answer2 = mb_strtolower($data['input2'], 'UTF-8');
    $answer3 = mb_strtolower($data['input3'], 'UTF-8');

    $correctAnswers = ['tusi', 'aziz sancar', 'mehmet akif ersoy'];

    $isCorrect1 = strcmp($answer1, 'tusi') === 0;
    $isCorrect2 = strcmp($answer2, 'aziz sancar') === 0;
    $isCorrect3 = strcmp($answer3, 'mehmet akif ersoy') === 0;

    if ($isCorrect1 && $isCorrect2 && $isCorrect3) {
        http_response_code(200);
        echo json_encode(['message' => 'iguctf{0h_d0_u_l1ke_gel1sim_univ3rsity?}']);
    } else {
        http_response_code(403);
        echo json_encode(['message' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ']);
    }
} else {
    http_response_code(400);
    echo json_encode(['message' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ']);
}
?>
