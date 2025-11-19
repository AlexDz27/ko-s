<?php

move_uploaded_file($_FILES['file']['tmp_name'], '../u/' . $_FILES['file']['name']);

header('Location: /');