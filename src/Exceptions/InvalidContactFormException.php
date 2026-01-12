<?php
namespace Lasso\Exceptions;

use Exception;

class InvalidContactFormException extends Exception {
    private array $errors;

    function __construct() {
        $this->errors = [];
    }

    public function with_errors(array $errors) {
        $this->errors = $errors;
        return $this;
    }

    public function get_errors()
    {
        return $this->errors;
    }
}
