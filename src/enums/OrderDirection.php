<?php


declare(strict_types = 1);


namespace src\queryBuilder\src\enums;


enum OrderDirection: string
{
	case ASC = 'ASC';
	case DESC = 'DESC';
}