<?php

/* 
 * Copyright (C) 2020 sgilyin
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

include_once 'config.php';

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});

switch ($_REQUEST['action']) {
    case "sync":
        BX24::syncBGBilling($_REQUEST['type']);
        break;
    case "chatMessage":
        BX24::chatMessage($_REQUEST['chat_id'], $_REQUEST['message']);
        break;
    default:
        break;
}