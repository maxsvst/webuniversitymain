<?php

require 'application/core/Models/Hobbie.php';

function createHobbie($tag, $nameHobbies, $description, $picHobbies) {

    return new Hobbie($nameHobbies, $description, $picHobbies, $tag);
}
