<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Email extends Mailable
{
    use Queueable, SerializesModels;
    public $contacto;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacto,$datos)
    {
        $this->contacto = $contacto; 
        $this->datos = $datos;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $cupon = session('cupon');
            $cupones = session('cupones');
            $cupon_auto = session('cupon_auto');
            $efectivo = session('efectivo');
            $email = $this->from('noreply@cancundoit.com',"Cupón Cancún Doit")
                ->view('texto_correo')
                ->text('cupon')
                ->with(
                [
                        'testVarOne' => '1',
                        'testVarTwo' => '2',
                 ]);//->attach('cupones'.$cupon);
               
                    foreach($cupones as $cupon)
                     {
                        $email->attach('cupones'.$cupon);
                     }

                     if($cupon_auto=='auto')
                     {
                        $email->attach('cupones/cupon_autos.pdf');
                     }

                      if($efectivo != '')
                {
                    $email->attach('cupones/cupon-efectivo.pdf');
                }
                
                 
                ->attach(public_path('/cupones').$cupon, [
                        'as' => 'listado5.pdf',
                        'mime' => 'application/pdf',
                ]);
                foreach($archivosadjuntos as $rutaArchivo){
                    $email->attach($rutaArchivo);
                }
        return $email;


    }
}
