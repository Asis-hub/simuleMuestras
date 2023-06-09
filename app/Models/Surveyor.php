<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surveyor extends Model
{
        /**
    * ENCUESTADOR/SURVEYOR ATTRIBUTES
    * $this->attributes['error'] - int - contains the product primary key (id)
    * $this->attributes['confiabilidad'] - decimal - contains the error value
    * $this->attributes['proporcion_necesaria'] - decimal - contains the proportion necessary
    * $this->attributes['proporcion_restante'] - decimal - contains the proportion left
    * $this->attributes['estratos'] - decimal - contains the number of layers(estratos)
    * $this->attributes['encuestadores'] - decimal - contains the number of surveyors
    * $this->attributes['created_at'] - timestamp - contains the query creation date
    * $this->attributes['updated_at'] - timestamp - contains the query update date
    */
    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getError()
    {
        return $this->attributes['error'];
    }
    public function setError($error)
    {
        $this->attributes['error'] = $error;
    }
    public function getProporcionNecesaria()
    {
        return $this->attributes['proporcion_necesaria'];
    }
    public function setProporcionNecesaria($proporcion_necesaria)
    {
        $this->attributes['proporcion_necesaria'] = $proporcion_necesaria;
    }
    public function getProporcionRestante()
    {
        return $this->attributes['proporcion_restante'];
    }
    public function setProporcionRestante($proporcion_restante)
    {
        $this->attributes['proporcion_restante'] = $proporcion_restante;
    }
    public function getEstratos()
    {
        return $this->attributes['estratos'];
    }
    public function setEstratos($estratos)
    {
        $this->attributes['estratos'] = $estratos;
    }
    public function getEncuestadores()
    {
        return $this->attributes['encuestadores'];
    }
    public function setEncuestadores($encuestadores)
    {
        $this->attributes['encuestadores'] = $encuestadores;
    }
    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }
    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }
    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }
    public function getAutor()
    {
        return $this->attributes['autor'];
    }
    public function setAutor($autor)
    {
        $this->attributes['autor'] = $autor;
    }
}
