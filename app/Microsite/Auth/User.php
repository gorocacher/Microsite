<?php

namespace Microsite\Auth;

use Nette\Security\Passwords;
use Microsite\LeanMapper\Entity;

/**
 * @property int $id
 * @property string $username
 * @property string $password
 */
class User extends Entity
{

	public function matchesPassword($password)
	{
		return Passwords::verify($password, $this->password);
	}

}
