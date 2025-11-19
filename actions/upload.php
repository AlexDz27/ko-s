<?php

$cwd = dirname(getcwd());

move_uploaded_file($_FILES['file']['tmp_name'], $cwd . '/u/' . $_FILES['file']['name']);

header('Location: /');