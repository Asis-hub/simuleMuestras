#!/usr/bin/python3.9
# -*- coding: UTF-8 -*-
# FORMULA PARA LISTA NOMINAL

print("Content-type: text/html\n")

import cgi
import json
import numpy as np
import math

form = cgi.FieldStorage()

numEncuestadores = float(form["numEncuestadores_py"].value)

inputncuestadores_Mujeres_18_24 = float(form["encuestadores_Mujeres_18_24_py"].value)
inputncuestadores_Hombres_18_24 = float(form["encuestadores_Hombres_18_24_py"].value)
inputncuestadores_Mujeres_25_34 = float(form["encuestadores_Mujeres_25_34_py"].value)
inputncuestadores_Hombres_25_34 = float(form["encuestadores_Hombres_25_34_py"].value)
inputncuestadores_Mujeres_35_49 = float(form["encuestadores_Mujeres_35_49_py"].value)
inputncuestadores_Hombres_35_49 = float(form["encuestadores_Hombres_35_49_py"].value)
inputncuestadores_Mujeres_50_64 = float(form["encuestadores_Mujeres_50_64_py"].value)
inputncuestadores_Hombres_50_64 = float(form["encuestadores_Hombres_50_64_py"].value)
inputncuestadores_Mujeres_65 = float(form["encuestadores_Mujeres_65_py"].value)
inputncuestadores_Hombres_65 = float(form["encuestadores_Hombres_65_py"].value)

import math

def process_value(val):
    if (float(val) % 1) >= 0.5:
        x = math.ceil(val)
    else:
        x = round(val)
    return x

resultado_inputncuestadores_Mujeres_18_24 = process_value(inputncuestadores_Mujeres_18_24 * numEncuestadores)
resultado_inputncuestadores_Hombres_18_24 = process_value(inputncuestadores_Hombres_18_24 * numEncuestadores)
resultado_inputncuestadores_Mujeres_25_34 = process_value(inputncuestadores_Mujeres_25_34 * numEncuestadores)
resultado_inputncuestadores_Hombres_25_34 = process_value(inputncuestadores_Hombres_25_34 * numEncuestadores)
resultado_inputncuestadores_Mujeres_35_49 = process_value(inputncuestadores_Mujeres_35_49 * numEncuestadores)
resultado_inputncuestadores_Hombres_35_49 = process_value(inputncuestadores_Hombres_35_49 * numEncuestadores)
resultado_inputncuestadores_Mujeres_50_64 = process_value(inputncuestadores_Mujeres_50_64 * numEncuestadores)
resultado_inputncuestadores_Hombres_50_64 = process_value(inputncuestadores_Hombres_50_64 * numEncuestadores)
resultado_inputncuestadores_Mujeres_65 = process_value(inputncuestadores_Mujeres_65 * numEncuestadores)
resultado_inputncuestadores_Hombres_65 = process_value(inputncuestadores_Hombres_65 * numEncuestadores)

resultado = [resultado_inputncuestadores_Mujeres_18_24, resultado_inputncuestadores_Hombres_18_24, resultado_inputncuestadores_Mujeres_25_34,
resultado_inputncuestadores_Hombres_25_34, resultado_inputncuestadores_Mujeres_35_49, resultado_inputncuestadores_Hombres_35_49,
resultado_inputncuestadores_Mujeres_50_64, resultado_inputncuestadores_Hombres_50_64,
resultado_inputncuestadores_Mujeres_65, resultado_inputncuestadores_Hombres_65]

text = json.dumps(resultado)

print (text)