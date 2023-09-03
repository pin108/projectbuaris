<?php

namespace App\Http\Controllers;

use App\Mail\beasiswastatus;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index($email){

        $details = [
        'title' => 'Informasi Status Pendaftaran Beasiswa',
        'body' => 'Status Beasiswa Anda'
        ];
       
        Mail::to($email)->send(new beasiswastatus($details));
        // Connection could not be established with host "mailpit:1025": stream_socket_client(): php_network_getaddresses: getaddrinfo for mailpit failed: No such host is known.
        dd("Email sudah terkirim.");
        }
}
