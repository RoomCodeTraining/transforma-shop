<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class Role extends Enum
{
    const SUPER_ADMIN = 'super_admin';
    const ADMIN = 'admin';
    const SELLER = 'Gestionnaire de commande';
    const CUSTOMER = 'customer';
}
