<?php

namespace Cart\Validation;

use Cart\Validation\Contracts\ValidatorInterface;
use Psr\Http\Message\ServerRequestInterface as Request;

class validator implements validatorInterface
{
	public function validate(Request $request, array $rules)
	{

	}
	public function fails()
	{
		return false;
	}
}