<?php

require_once dirname(__DIR__, 3) . '/vendor/autoload.php';

use Helpers\Console;
use DesignPatterns\Behavioral\Command\Commands\CopyCommand;
use DesignPatterns\Behavioral\Command\Commands\CutCommand;
use DesignPatterns\Behavioral\Command\Commands\PasteCommand;
use DesignPatterns\Behavioral\Command\Commands\UndoCommand;
use DesignPatterns\Behavioral\Command\Others\App;
use DesignPatterns\Behavioral\Command\Others\Editor;

$app = new App();
$editor = new Editor();

Console::log(
    "Digite um valor para o editor: ",
    Console::FG_GREEN_LIGHT,
    Console::BOLD
);

$value_editor = is_string($line = fgets(STDIN)) ? trim($line) : '';
$editor->replaceSelection($value_editor);

while (true) {
    Console::log(
        "Digite uma ação [copy, cut, paste, undo]: " . PHP_EOL,
        Console::FG_GREEN_LIGHT,
        Console::BOLD
    );

    $action = is_string($line = fgets(STDIN)) ? trim($line) : '';

    if (in_array($action, ['quit', 'exit'])) break;

    if ($action == 'copy')
        $app->executeCommand(new CopyCommand($app, $editor));

    if ($action == 'cut')
        $app->executeCommand(new CutCommand($app, $editor));

    if ($action == 'paste')
        $app->executeCommand(new PasteCommand($app, $editor));

    if ($action == 'undo')
        $app->executeCommand(new UndoCommand($app, $editor));

    Console::log($app->clipboard . PHP_EOL, Console::FG_GREEN);
}
