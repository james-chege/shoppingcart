<?php

namespace Cart\Validation;

use Cart\Validation\Contracts\ValidatorInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Respect\Validation\Exceptions\NestedValidationException;
class validator implements validatorInterface
{
	protected $errors = [];

	public function validate(Request $request, array $rules)
	{
		foreach ($rules as $field => $rules) {
			try {
				$rules->setName(ucfirst($field))->assert($request->getParam($field));
			}	catch(NestedValidationException $e) {
				$this->errors[$field] = $e->getMessage();
			}
		}
		$_SESSION['errors'] = $this->errors;

		return $this;
	}
	public function fails()
	{
		return !empty($this->errors);
	}
}