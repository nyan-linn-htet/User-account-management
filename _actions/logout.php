<?php

session_start();

unset( $_SESSION["nyan"] );

header("location: ../index.php?los=1");