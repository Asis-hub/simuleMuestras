#!/usr/bin/python3.9
# -*- coding: UTF-8 -*-
# FORMULA PARA MUESTRAS

import cgi
import json
import numpy as np

form = cgi.FieldStorage()

e = float(form["error_py"].value)
z = float(form["confiabilidad_py"].value)
p = float(form["p_necesaria_py"].value)
q = float(form["p_restante_py"].value)
n = float(form["estratos_py"].value)

numerador = (z**2) * (p * q) * n
denominador = ((e**2)*(n-1)) + ((z**2)*(p*q))
resultado = int(np.ceil(numerador/denominador))

print("Content-type: text/html\n")
print(json.dumps(resultado))
