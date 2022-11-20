<?php

namespace App\Http\Controllers\Api\User;

use App\Traits\ResetsPasswords;
use App\Traits\SendsPasswordResetEmails;

class RecoverPasswordController extends \App\Http\Controllers\Controller
{
    use ResetsPasswords, SendsPasswordResetEmails;

    public function __construct()
    {
        $this->broker = 'users';
    }
}
