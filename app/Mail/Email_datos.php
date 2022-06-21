<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Email_datos extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Nueva cotización';
    public $datos;
    public $tours;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datos,$tours)
    {
        // var_dump($this->$datos);
        $this->datos = $datos;
        $this->tours = $tours;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->from('noreply@cancundoit.com',"Solicitud de Cotización")
                ->view('email.cotizacion')
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
