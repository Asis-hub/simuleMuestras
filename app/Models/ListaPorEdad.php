<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaPorEdad extends Model
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
    public function getUrlListaPorEdad()
    {
        return $this->attributes['url_lista_por_edad'];
    }
    public function setUrlListaPorEdad($url_lista_por_edad)
    {
        $this->attributes['url_lista_por_edad'] = $url_lista_por_edad;
    }
    public function getListaTotal()
    {
        return $this->attributes['lista_total'];
    }
    public function setListaTotal($lista_total)
    {
        $this->attributes['lista_total'] = $lista_total;
    }
    public function getListaMujeres_18_24()
    {
        return $this->attributes['lista_mujeres_18_24'];
    }
    public function setListaMujeres_18_24($lista_mujeres_18_24)
    {
        $this->attributes['lista_mujeres_18_24'] = $lista_mujeres_18_24;
    }
    public function getListaHombres_18_24()
    {
        return $this->attributes['lista_hombres_18_24'];
    }
    public function setListaHombres_18_24($lista_hombres_18_24)
    {
        $this->attributes['lista_hombres_18_24'] = $lista_hombres_18_24;
    }
    public function getListaMujeres_25_34()
    {
        return $this->attributes['lista_mujeres_25_34'];
    }
    public function setListaMujeres_25_34($lista_mujeres_25_34)
    {
        $this->attributes['lista_mujeres_25_34'] = $lista_mujeres_25_34;
    }
    public function getListaHombres_25_34()
    {
        return $this->attributes['lista_hombres_25_34'];
    }
    public function setListaHombres_25_34($lista_hombres_25_34)
    {
        $this->attributes['lista_hombres_25_34'] = $lista_hombres_25_34;
    }
    public function getListaMujeres_35_49()
    {
        return $this->attributes['lista_mujeres_35_49'];
    }
    public function setListaMujeres_35_49($lista_mujeres_35_49)
    {
        $this->attributes['lista_mujeres_35_49'] = $lista_mujeres_35_49;
    }
    public function getListaHombres_35_49()
    {
        return $this->attributes['lista_hombres_35_49'];
    }
    public function setListaHombres_35_49($lista_hombres_35_49)
    {
        $this->attributes['lista_hombres_35_49'] = $lista_hombres_35_49;
    }
    public function getListaMujeres_50_64()
    {
        return $this->attributes['lista_mujeres_50_64'];
    }
    public function setListaMujeres_50_64($lista_mujeres_50_64)
    {
        $this->attributes['lista_mujeres_50_64'] = $lista_mujeres_50_64;
    }
    public function getListaHombres_50_64()
    {
        return $this->attributes['lista_hombres_50_64'];
    }
    public function setListaHombres_50_64($lista_hombres_50_64)
    {
        $this->attributes['lista_hombres_50_64'] = $lista_hombres_50_64;
    }
    public function getListaMujeres_65_mas()
    {
        return $this->attributes['lista_mujeres_65_mas'];
    }
    public function setListaMujeres_65_mas($lista_mujeres_65_mas)
    {
        $this->attributes['lista_mujeres_65_mas'] = $lista_mujeres_65_mas;
    }
    public function getListaHombres_65_mas()
    {
        return $this->attributes['lista_hombres_65_mas'];
    }
    public function setListaHombres_65_mas($lista_hombres_65_mas)
    {
        $this->attributes['lista_hombres_65_mas'] = $lista_hombres_65_mas;
    }
    public function getProporcionMujeres_18_24()
    {
        return $this->attributes['proporcion_mujeres_18_24'];
    }
    public function setProporcionMujeres_18_24($proporcion_mujeres_18_24)
    {
        $this->attributes['proporcion_mujeres_18_24'] = $proporcion_mujeres_18_24;
    }
    public function getProporcionHombres_18_24()
    {
        return $this->attributes['proporcion_hombres_18_24'];
    }
    public function setProporcionHombres_18_24($proporcion_hombres_18_24)
    {
        $this->attributes['proporcion_hombres_18_24'] = $proporcion_hombres_18_24;
    }
    public function getProporcionMujeres_25_34()
    {
        return $this->attributes['proporcion_mujeres_25_34'];
    }
    public function setProporcionMujeres_25_34($proporcion_mujeres_25_34)
    {
        $this->attributes['proporcion_mujeres_25_34'] = $proporcion_mujeres_25_34;
    }
    public function getProporcionHombres_25_34()
    {
        return $this->attributes['proporcion_hombres_25_34'];
    }
    public function setProporcionHombres_25_34($proporcion_hombres_25_34)
    {
        $this->attributes['proporcion_hombres_25_34'] = $proporcion_hombres_25_34;
    }
    public function getProporcionMujeres_35_49()
    {
        return $this->attributes['proporcion_mujeres_35_49'];
    }
    public function setProporcionMujeres_35_49($proporcion_mujeres_35_49)
    {
        $this->attributes['proporcion_mujeres_35_49'] = $proporcion_mujeres_35_49;
    }
    public function getProporcionHombres_35_49()
    {
        return $this->attributes['proporcion_hombres_35_49'];
    }
    public function setProporcionHombres_35_49($proporcion_hombres_35_49)
    {
        $this->attributes['proporcion_hombres_35_49'] = $proporcion_hombres_35_49;
    }
    public function getProporcionMujeres_50_64()
    {
        return $this->attributes['proporcion_mujeres_50_64'];
    }
    public function setProporcionMujeres_50_64($proporcion_mujeres_50_64)
    {
        $this->attributes['proporcion_mujeres_50_64'] = $proporcion_mujeres_50_64;
    }
    public function getProporcionHombres_50_64()
    {
        return $this->attributes['proporcion_hombres_50_64'];
    }
    public function setProporcionHombres_50_64($proporcion_hombres_50_64)
    {
        $this->attributes['proporcion_hombres_50_64'] = $proporcion_hombres_50_64;
    }
    public function getProporcionMujeres_65_mas()
    {
        return $this->attributes['proporcion_mujeres_65_mas'];
    }
    public function setProporcionMujeres_65_mas($proporcion_mujeres_65_mas)
    {
        $this->attributes['proporcion_mujeres_65_mas'] = $proporcion_mujeres_65_mas;
    }
    public function getProporcionHombres_65_mas()
    {
        return $this->attributes['proporcion_hombres_65_mas'];
    }
    public function setProporcionHombres_65_mas($proporcion_hombres_65_mas)
    {
        $this->attributes['proporcion_hombres_65_mas'] = $proporcion_hombres_65_mas;
    }
    public function getEncuestadoresMujeres_18_24()
    {
        return $this->attributes['encuestadores_mujeres_18_24'];
    }
    public function setEncuestadoresMujeres_18_24($encuestadores_mujeres_18_24)
    {
        $this->attributes['encuestadores_mujeres_18_24'] = $encuestadores_mujeres_18_24;
    }
    public function getEncuestadoresHombres_18_24()
    {
        return $this->attributes['encuestadores_hombres_18_24'];
    }
    public function setEncuestadoresHombres_18_24($encuestadores_hombres_18_24)
    {
        $this->attributes['encuestadores_hombres_18_24'] = $encuestadores_hombres_18_24;
    }
    public function getEncuestadoresMujeres_25_34()
    {
        return $this->attributes['encuestadores_mujeres_25_34'];
    }
    public function setEncuestadoresMujeres_25_34($encuestadores_mujeres_25_34)
    {
        $this->attributes['encuestadores_mujeres_25_34'] = $encuestadores_mujeres_25_34;
    }
    public function getEncuestadoresHombres_25_34()
    {
        return $this->attributes['encuestadores_hombres_25_34'];
    }
    public function setEncuestadoresHombres_25_34($encuestadores_hombres_25_34)
    {
        $this->attributes['encuestadores_hombres_25_34'] = $encuestadores_hombres_25_34;
    }
    public function getEncuestadoresMujeres_35_49()
    {
        return $this->attributes['encuestadores_mujeres_35_49'];
    }
    public function setEncuestadoresMujeres_35_49($encuestadores_mujeres_35_49)
    {
        $this->attributes['encuestadores_mujeres_35_49'] = $encuestadores_mujeres_35_49;
    }
    public function getEncuestadoresHombres_35_49()
    {
        return $this->attributes['encuestadores_hombres_35_49'];
    }
    public function setEncuestadoresHombres_35_49($encuestadores_hombres_35_49)
    {
        $this->attributes['encuestadores_hombres_35_49'] = $encuestadores_hombres_35_49;
    }
    public function getEncuestadoresMujeres_50_64()
    {
        return $this->attributes['encuestadores_mujeres_50_64'];
    }
    public function setEncuestadoresMujeres_50_64($encuestadores_mujeres_50_64)
    {
        $this->attributes['encuestadores_mujeres_50_64'] = $encuestadores_mujeres_50_64;
    }
    public function getEncuestadoresHombres_50_64()
    {
        return $this->attributes['encuestadores_hombres_50_64'];
    }
    public function setEncuestadoresHombres_50_64($encuestadores_hombres_50_64)
    {
        $this->attributes['encuestadores_hombres_50_64'] = $encuestadores_hombres_50_64;
    }
    public function getEncuestadoresMujeres_65_mas()
    {
        return $this->attributes['encuestadores_mujeres_65_mas'];
    }
    public function setEncuestadoresMujeres_65_mas($encuestadores_mujeres_65_mas)
    {
        $this->attributes['encuestadores_mujeres_65_mas'] = $encuestadores_mujeres_65_mas;
    }
    public function getEncuestadoresHombres_65_mas()
    {
        return $this->attributes['encuestadores_hombres_65_mas'];
    }
    public function setEncuestadoresHombres_65_mas($encuestadores_hombres_65_mas)
    {
        $this->attributes['encuestadores_hombres_65_mas'] = $encuestadores_hombres_65_mas;
    }
    use HasFactory;
}
