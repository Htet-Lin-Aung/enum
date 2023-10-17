<?php
  
namespace App\Enums;
use App\Traits\EnumValues;

enum ProductStatusEnum:string {
    use EnumValues;
    case Pending = 'pending';
    case Active = 'active';
    case Inactive = 'inactive';
    case Rejected = 'rejected';
}