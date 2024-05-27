<?php

require_once dirname(__DIR__, 3) . "/vendor/autoload.php";

use DesignPatterns\Behavioral\Mediator\Mediators\Dialog;

use DesignPatterns\Behavioral\Mediator\Components\Button;
use DesignPatterns\Behavioral\Mediator\Components\ButtonClose;
use DesignPatterns\Behavioral\Mediator\Components\Checkbox;
use DesignPatterns\Behavioral\Mediator\Components\Textbox;
use Helpers\Console;

$dialog = new Dialog();

// Components
$button = new Button($dialog);
$buttonClose = new ButtonClose($dialog);
$checkbox = new Checkbox($dialog);
$textbox = new Textbox($dialog);

// Set components in dialog
$dialog->setButton($button);
$dialog->setButtonClose($buttonClose);
$dialog->setCheckbox($checkbox);
$dialog->setTextbox($textbox);

// actions
$button->click();
$textbox->keypress("D");
$textbox->keypress("e");
$textbox->keypress("v");
$textbox->keypress("e");
$textbox->keypress("l");
$textbox->keypress("o");
$textbox->keypress("p");
$textbox->keypress("e");
$textbox->keypress("r");
$checkbox->toggleChecked(true);
$checkbox->toggleChecked(false);
$buttonClose->click();