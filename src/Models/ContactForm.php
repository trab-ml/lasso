<?php
namespace Lasso\Models;

class ContactForm {
    private string $reason;
    private string $firstname;
    private string $lastname;
    private string $email;
    private string $phone;
    private string $message;
    private string $isLassoMember;

    function __construct(string $reason, string $firstname, string $lastname, string $email, string $phone, string $message, string $isLassoMember) {
        $this->reason = $reason;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
        $this->isLassoMember = $isLassoMember;
    }

    function get_reason(): string {
        return $this->reason;
    }

    function set_reason(string $val) {
        $this->reason = $val;
    }

    function get_firstname(): string {
        return $this->firstname;
    }

    function set_firstname(string $val) {
        $this->firstname = $val;
    }

    function get_lastname(): string {
        return $this->lastname;
    }

    function set_lastname(string $val) {
        $this->lastname = $val;
    }

    function get_email(): string {
        return $this->email;
    }

    function set_email(string $val) {
        $this->email = $val;
    }

    function get_phone(): string {
        return $this->phone;
    }

    function set_phone(string $val) {
        $this->phone = $val;
    }
    
    function get_message(): string {
        return $this->message;
    }

    function set_message(string $val) {
        $this->message = $val;
    }

    function get_lasso_member(): string {
        return $this->isLassoMember;
    }

    function set_lasso_member(string $val) {
        $this->isLassoMember = $val;
    }
}
