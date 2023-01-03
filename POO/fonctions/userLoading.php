<?php

function loadUser(int $id): array 
{
    if ($id === 1) {
        return ['name' => 'John', 'surname' => 'Doe', 'civility' => 'M'];
    }

    return ['name' => 'Laure', 'surname' => 'Dupont', 'civility' => 'Mme'];
}