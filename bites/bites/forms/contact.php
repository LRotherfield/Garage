<?php
$form = NibbleForm::getInstance('', 'Send us your message', 'post', true, 'flash', 'list');
$form->name = new Text('Please enter your name so we know who to reply to');
$form->email = new email('Please enter your email', 6, true, false);
$form->email->addConfirmation('Please confirm your email');
$form->message = new TextArea('Please enter your message to us');
