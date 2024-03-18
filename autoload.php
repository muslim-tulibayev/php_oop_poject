<?php

spl_autoload_register(fn ($class_name) => include "$class_name.php");
