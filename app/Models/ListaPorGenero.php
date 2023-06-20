<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaPorGenero extends Model
{
    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getEntidad()
    {
        return $this->attributes['entidad'];
    }
    public function setEntidad($entidad)
    {
        $this->attributes['entidad'] = $entidad;
    }
    public function getMunicipio()
    {
        return $this->attributes['municipio'];
    }
    public function setMunicipio($municipio)
    {
        $this->attributes['municipio'] = $municipio;
    }
    public function getUrlListaPorGenero()
    {
        return $this->attributes['url_lista_por_genero'];
    }
    public function setUrlListaPorGenero($url_lista_por_genero)
    {
        $this->attributes['url_lista_por_genero'] = $url_lista_por_genero;
    }
    public function getListaMujeres()
    {
        return $this->attributes['lista_mujeres'];
    }
    public function setListaMujeres($lista_mujeres)
    {
        $this->attributes['lista_mujeres'] = $lista_mujeres;
    }
    public function getListaHombres()
    {
        return $this->attributes['lista_hombres'];
    }
    public function setListaHombres($lista_hombres)
    {
        $this->attributes['lista_hombres'] = $lista_hombres;
    }
    public function getListaTotal()
    {
        return $this->attributes['lista_total'];
    }
    public function setListaTotal($lista_total)
    {
        $this->attributes['lista_total'] = $lista_total;
    }
    public function getAutor()
    {
        return $this->attributes['autor'];
    }
    public function setAutor($autor)
    {
        $this->attributes['autor'] = $autor;
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
    use HasFactory;
}
