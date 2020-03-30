<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     // public $car_name =' ';
     public $car_model =' ';
     public $total_price =' ';

    public function __construct($car_model,$total_price)
    {
        // $this->car_name =$car_name;
        $this->car_model =$car_model;
        $this->total_price =$total_price;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $car_name ='';
        $car_model ='';
        $total_price ='';
        return $this->view('email.mail',compact('car_model','total_price'));
    }
}
