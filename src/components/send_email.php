<?php
use Lasso\Requests\ContactFormRequest;
use Lasso\Models\ContactForm;
use Lasso\Services\EmailService;
use Lasso\Mappers\ToModelMapper;
use Lasso\Exceptions\InvalidContactFormException;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../../vendor/autoload.php';

header('Content-Type: application/json; charset=UTF-8');

function validate_user_inputs_and_send_email(): array
{
    try {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return [
                'status' => 'error',
                'errors' => 'Service momentanément disponible.'
            ];
        }

        $fields = [
            'firstName' => ['required' => true, 'min' => 2, 'message' => "Le prénom doit comporter au moins 2 caractères."],
            'lastName' => ['required' => true, 'min' => 2, 'message' => "Le nom doit comporter au moins 2 caractères."],
            'email' => ['required' => true, 'filter' => FILTER_VALIDATE_EMAIL, 'message' => "L'adresse email est invalide."],
            'motif' => ['required' => true, 'min' => 5, 'message' => "Le motif est requis."],
            'message' => ['required' => true, 'min' => 30, 'message' => "Le message doit comporter au moins 30 caractères."],
        ];

        $contact_form = ToModelMapper::request_to_model($fields);
        $response = EmailService::send_email($contact_form);
    } catch (InvalidContactFormException $excep) {
        $response = [
            'status' => 'error',
            'errors' => $excep->get_errors()
        ];
    } catch (Exception) {
        $response = [
            'status' => 'error',
            'errors' => 'Erreur lors de l\'envoi du message.'
        ];
    }

    return $response;
}

$response = validate_user_inputs_and_send_email();
echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
