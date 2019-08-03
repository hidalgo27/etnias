<?php

namespace EtniasPeru\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailReservaSender extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $email;
    public $reserva;
    public $pw;
    public function __construct($p_email,$p_reserva,$p_pw)
    {
        $this->email=$p_email;
        $this->reserva=$p_reserva;
        $this->pw=$p_pw;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        return $this->view('mail.new-reserva',['reserva'=>$this->reserva,'email'=>$this->email,'pw'=>$this->pw])
            ->to($this->email)
            ->cc('misreservas@mietnia.com')
            ->from('misreservas@mietnia.com','Reservas')
            ->subject('ENVIO AUTOMATICO - CONSTANCIA DE PAGO DE SERVICIO');
    }
}
