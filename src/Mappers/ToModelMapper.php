<?php
namespace Lasso\Mappers;

use Lasso\Models\ContactForm;
use Lasso\Exceptions\InvalidContactFormException;

abstract class ToModelMapper {
    static function request_to_model(array $fields): ContactForm {
        $data = [];

        foreach ($fields as $field => $rules) {
            $value = isset($_POST[$field]) ? htmlspecialchars(trim($_POST[$field]), ENT_QUOTES, 'UTF-8') : '';
            if ($rules['required'] && empty($value)) {
                $errors[] = $rules['message'];
            }
            if (isset($rules['min']) && strlen($value) < $rules['min']) {
                $errors[] = $rules['message'];
            }
            if (isset($rules['filter']) && !filter_var($value, $rules['filter'])) {
                $errors[] = $rules['message'];
            }
            $data[$field] = $value;
        }

        if (!empty($errors)) {
            $excep = new InvalidContactFormException(); 
            throw $excep->with_errors($errors);
        }

        $data['phone'] = htmlspecialchars(trim($_POST['phone'] ?? ''), ENT_QUOTES, 'UTF-8');
        $data['adherent'] = isset($_POST['adherent']) ? 'Oui' : 'Non';

        return new ContactForm(
            $data['motif'],
            $data['firstName'],
            $data['lastName'],
            $data['email'],
            $data['phone'],
            $data['message'],
            $data['adherent']);
    }
}
