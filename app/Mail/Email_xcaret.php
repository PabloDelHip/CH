<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Email_xcaret extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Cotizacion para xcaret';
    public $datos = 'hola';
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datos)
    {
        // var_dump($this->$datos);
        $this->datos = $datos;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->from('noreply@cancundoit.com',"Cupón Cancún Doit")
                ->view('email.xcaret')
                ->text('cupon')
                ->with(
                [
                        'testVarOne' => '1',
                        'testVarTwo' => '2',
                 ]);//->attach('cupones'.$cupon);
    return $email;
        // return $this->view('email.nosotros');
    }
}
