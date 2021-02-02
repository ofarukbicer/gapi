<?php
require "../src/core/Gapi.php";
require "../src/gui/Profile.php";

use Gapi\Core\Gapi;
use Gapi\Gui\Profile;

$gapi = new Profile("omerfarukbicer0446");

echo $gapi->print;