<?php

require_once __DIR__ . '/model/quizzesdatabaseservice.class.php';

function sendJSONandExit($message)
{
    // Kao izlaz skripte pošalji $message u JSON formatu i prekini izvođenje.
    header( 'Content-type:application/json;charset=utf-8' );
    echo json_encode($message);
    flush();
    exit( 0 );
}

$qds = new QuizzesDatabaseService();

if ($_GET['action'] === 'delete') {
    if ($qds->deleteQuiz($_GET['id'])) // Uspješan delete
        sendJSONandExit(true);
    else
        sendJSONandExit(false);
}

?>