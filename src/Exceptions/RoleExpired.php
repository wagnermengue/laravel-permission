<?php

namespace Spatie\Permission\Exceptions;

use Symfony\Component\HttpKernel\Exception\HttpException;

class RoleExpired extends HttpException
{
    private $requiredRoles = [];

    private $requiredPermissions = [];

    public static function expired(): self
    {
        return new static(403, 'Role expired.', null, []);
    }

    public function getRequiredRoles(): array
    {
        return $this->requiredRoles;
    }

    public function getRequiredPermissions(): array
    {
        return $this->requiredPermissions;
    }
}
