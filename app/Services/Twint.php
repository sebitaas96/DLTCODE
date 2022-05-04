<?php


namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Twint
{

    protected $time, $hash;
    protected $path;

    public function __construct()
    {
        $this->time = time();
        $this->hash = md5(rand('1000000', '9999999999') . time());
        $this->path = storage_path() . "/twint";
    }

    public function search($parameters)
    {
        $username = $parameters['username'];
        $palabra = $parameters['palabra'];
        $maximo = $parameters['maximo'];
        $sitio = $parameters['sitio'];
        /*
            $email = $parameters['email'];
            $phone = $parameters['phone'];
            */
        $geo = $parameters['geo'];
        $fechaini = $parameters['fechaini'];
        $fechafin = $parameters['fechafin'];

        if (!empty($username)) {
            $add_username = "-u $username";
        } else {
            $add_username = '';
        }

        if (!empty($palabra)) {
            $add_palabra = "-s \" $palabra \"";
        } else {
            $add_palabra = '';
        }

        if (!empty($maximo)) {
            $add_maximo = "--limit $maximo";
        } else {
            $add_maximo = '';
        }

        if (!empty($sitio)) {
            $add_sitio = "--near $sitio";
        } else {
            $add_sitio = '';
        }

        if (!empty($geo)) {
            $add_geo = "-g \" $geo \"";
        } else {
            $add_geo = '';
        }

        if (isset($_POST['email']) && $_POST['email'] != '1') {
            $add_email = " --email ";
        } else {
            $add_email = '';
        }

        if (isset($_POST['phone']) && $_POST['phone'] != '1') {
            $add_phone = " --phone ";
        } else {
            $add_phone = '';
        }

        if (!empty($fechaini)) {
            $add_fechaini = "--since $fechaini";
        } else {
            $add_fechaini = '';
        }


        if (!empty($fechafin) && $fechafin > $fechaini) {
            $add_fechafin = "--until $fechafin";
        } else if (!empty($fechafin)) {
            //echo '<script language="javascript">alert("La fecha fin es menor que la fecha inicio");</script>';
        } else {
            $add_fechafin = '';
        }
        $comando = "twint $add_username $add_palabra $add_sitio $add_geo $add_email $add_phone $add_maximo $add_fechaini $add_fechafin -o {$this->path}/{$this->hash}-{$this->time}.json --json";

        return shell_exec($comando);
    }
    public function fileExists($file = null)
    {
        if ($file != null) {
            echo ("{$this->path}/{$file}");
            if (Storage::exists("{$this->path}/{$file}")) {
                echo ("true");
            } else {
                echo ("false");
            }

            return Storage::exists("{$this->path}/{$file}");
        }
        return Storage::exists("{$this->path}/{$this->hash}-{$this->time}.json");
    }

    public function parseJson()
    {

        $lines = file("{$this->path}/{$this->hash}-{$this->time}.json", FILE_IGNORE_NEW_LINES);
        $lines = array_map(function ($v) {
            return $v . "," . PHP_EOL;
        }, $lines);
        file_put_contents("{$this->path}/{$this->hash}-{$this->time}.json", $lines);
        $file = "{$this->path}/{$this->hash}-{$this->time}.json";
        $lines[0] = "[\n";
        $lines[-1] = "]";
        file_put_contents($file, $lines);
        $lines = file("{$this->path}/{$this->hash}-{$this->time}.json", FILE_IGNORE_NEW_LINES);
        $no_of_lines = count(file($file));
        $lines[$no_of_lines - 2] = substr_replace($lines[$no_of_lines - 2], "", -1);
        file_put_contents($file, $lines);
    }
}
