#!/usr/bin/python3
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

numerador = (z ** 2) * (p * q) * n  # NUMERADOR
denominador = ((e ** 2) * (n - 1)) + ((z ** 2) * (p * q))  # DENOMINADOR

resultado = int(np.ceil(numerador / denominador))

response = {"resultado": resultado}  # Create a dictionary with the "resultado" variable

print("Content-Type: application/json")  # Set the content type to JSON
print()  # Print an empty line to separate the headers from the response body
print(json.dumps(response))  # Output the JSON response
