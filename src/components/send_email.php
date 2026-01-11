<?php
use Lasso\Requests\ContactFormRequest;
use Lasso\Models\ContactForm;
use Lasso\Services\EmailService;
use Lasso\Mappers\ToModelMapper;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../../vendor/autoload.php';

header('Content-Type: application/json; charset=UTF-8');

$response = [];

try {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
    $dotenv->load();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fields = [
            'firstName' => ['required' => true, 'min' => 2, 'message' => "Le prénom doit comporter au moins 2 caractères."],
            'lastName' => ['required' => true, 'min' => 2, 'message' => "Le nom doit comporter au moins 2 caractères."],
            'email' => ['required' => true, 'filter' => FILTER_VALIDATE_EMAIL, 'message' => "L'adresse email est invalide."],
            'motif' => ['required' => true, 'min' => 5, 'message' => "Le motif est requis."],
            'message' => ['required' => true, 'min' => 30, 'message' => "Le message doit comporter au moins 30 caractères."],
        ];

        $errors = [];
        $contact_form = ToModelMapper::request_to_model($fields);

        if (empty($errors)) {
            $response = EmailService::send_email($contact_form);
        } else {
            $response = [
                'status' => 'error',
                'errors' => $errors
            ];
        }
    } else {
        $response = [
            'status' => 'error',
            'message' => 'Service momentanément disponible.'
        ];
    }
} catch (Exception $e) {
    $response = [
        'status' => 'error',
        'message' => 'Erreur lors de l\'envoi du message.'
    ];
}

echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
