<?php

return array(
    'codigo' => array(
        'not_empty' => ':field no puede ser vacio',
        'min_length' => 'The username must be at least :param2 characters long.',
        'max_length' => 'The username must be less than :param2 characters long.',
        'username_available' => 'This username is not available.',
    ),
    'password' => array(
        'not_empty' => 'You must provide a password.',
    ),
);

?>
