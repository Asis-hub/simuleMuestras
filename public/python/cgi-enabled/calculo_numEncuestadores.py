#!/usr/bin/python3.9
# -*- coding: UTF-8 -*-
# FORMULA PARA LISTA NOMINAL

print("Content-type: text/html\n")

import cgi
import json
import numpy as np

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

resultado_inputncuestadores_Mujeres_18_24 = int(np.floor(inputncuestadores_Mujeres_18_24 * numEncuestadores))
resultado_inputncuestadores_Hombres_18_24 = int(np.floor(inputncuestadores_Hombres_18_24 * numEncuestadores))
resultado_inputncuestadores_Mujeres_25_34 = int(np.floor(inputncuestadores_Mujeres_25_34 * numEncuestadores))
resultado_inputncuestadores_Hombres_25_34 = int(np.floor(inputncuestadores_Hombres_25_34 * numEncuestadores))
resultado_inputncuestadores_Mujeres_35_49 = int(np.floor(inputncuestadores_Mujeres_35_49 * numEncuestadores))
resultado_inputncuestadores_Hombres_35_49 = int(np.floor(inputncuestadores_Hombres_35_49 * numEncuestadores))
resultado_inputncuestadores_Mujeres_50_64 = int(np.floor(inputncuestadores_Mujeres_50_64 * numEncuestadores))
resultado_inputncuestadores_Hombres_50_64 = int(np.floor(inputncuestadores_Hombres_50_64 * numEncuestadores))
resultado_inputncuestadores_Mujeres_65 = int(np.floor(inputncuestadores_Mujeres_65 * numEncuestadores))
resultado_inputncuestadores_Hombres_65 = int(np.floor(inputncuestadores_Hombres_65 * numEncuestadores))

resultado = [resultado_inputncuestadores_Mujeres_18_24, resultado_inputncuestadores_Hombres_18_24, resultado_inputncuestadores_Mujeres_25_34,
resultado_inputncuestadores_Hombres_25_34, resultado_inputncuestadores_Mujeres_35_49, resultado_inputncuestadores_Hombres_35_49,
resultado_inputncuestadores_Mujeres_50_64, resultado_inputncuestadores_Hombres_50_64,
resultado_inputncuestadores_Mujeres_65, resultado_inputncuestadores_Hombres_65]

text = json.dumps(resultado)

print (text)