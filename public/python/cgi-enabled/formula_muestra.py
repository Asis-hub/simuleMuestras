#!/usr/bin/python3.9
# -*- coding: UTF-8 -*-
# FORMULA PARA MUESTRAS

#z = float(input("Ingresa el valor de confiabilidad Z \n"))  #ESTE VALOR TAMBIEN PUEDE VARIAR
#p = float(input("Ingresa la proporcion necesaria p \n")) #ESTOS PUEDEN VARIAR ENTRE CERO Y UNO 
#q = float(input("Ingresa la proporcion restante q \n")) #ESTOS PUEDEN VARIAR ENTRE CERO Y UNO 
#n = float(input("Ingresa el tamaño de poblacion N \n")) #ESTE VALOR SALE DE ARCHIVO 1 TOTAL DE XALAPA 
#e = float(input("Ingresa el Error E \n")) #ESTE VALOR PUEDE VARIAR ENTRE 0 Y 1

print("Content-type: text/html\n")

import cgi
import json
import numpy as np

form = cgi.FieldStorage()

e = float(form["error_py"].value)
z = float(form["confiabilidad_py"].value)
p = float(form["p_necesaria_py"].value)
q = float(form["p_restante_py"].value)
n = float(form["estratos_py"].value)


numerador = (z**2) * (p * q) * n #NUMERADOR
denominador = ((e**2)*(n-1)) + ((z**2)*(p*q)) #DENOMINADOR

resultado = int(np.ceil(numerador/denominador))


text = json.dumps(resultado)


print (text)