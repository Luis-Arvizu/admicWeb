<?php

namespace App\Notifications;

use App\Convocatoria;
use App\DatosUsuario;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Input;
use ReflectionProperty;

class ConvocatoriaNotification extends Notification
{
    use Queueable;

    protected $convocatoria;
    protected $datos_usuario;

    public function __construct(Convocatoria $convocatoria, DatosUsuario $datos_usuario)
    {
        $this->convocatoria = $convocatoria;
        $this->datos_usuario = $datos_usuario;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $id_usuario = $this->datos_usuario->getAttributeValue('id_usuario');
        $id_convocatoria = $this->convocatoria->getAttributeValue('id_convocatoria');
        $curp_usuario = $this->datos_usuario->getAttributeValue('curp');
        $nombre_convocatoria = $this->convocatoria->getAttributeValue('titulo');


        $data = array('id_usuario' => $id_usuario , 'id_convocatoria' => $id_convocatoria , 'curp_usuario' => $curp_usuario , 'nombre_convocatoria' => $nombre_convocatoria);

        //dd($data);


        return (new MailMessage)
                    ->line($this->datos_usuario->getAttributeValue('nombre').'.')
                    ->line('Hemos visto que estas interesado en la convocatoria: '.$this->convocatoria->getAttributeValue('titulo').'.')
                    ->line('Con fechas de: '.$this->convocatoria->getAttributeValue('fecha_inicio').' a '.$this->convocatoria->getAttributeValue('fecha_cierre').'.')
                    ->line('Si estas de acuerdo con ello, favor de oprimir el boton de aceptar, caso contrario has caso omiso a este mensaje.')
            //ingresamos a la url correspondiente con los parametros

                    ->action('Aceptar', route('convocatoria.registrada', array('id_usuario' => $id_usuario , 'id_convocatoria' => $id_convocatoria , 'curp_usuario'  => $this->datos_usuario->getAttributeValue('curp') , 'nombre_convocatoria' => $nombre_convocatoria)))

                    ->line('Gracias por usar nuestra aplicación!');

    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}