<?php
namespace App\Enums;

enum Role: int 
{
    case SuperAdministrator = 1;
    case Moderator = 2;
    case MarkeringManager = 3;
    case SalesManager = 4;
    case customer = 5;
}