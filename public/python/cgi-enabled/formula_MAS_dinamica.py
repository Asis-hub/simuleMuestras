#!/usr/bin/python3.9
# -*- coding: UTF-8 -*-

print("Content-type: text/html\n")

import json
import cgi
import math
import numpy as np
from collections import OrderedDict

# Analizar los datos de entrada enviados por el cliente
form = cgi.FieldStorage()

B_variable = float(form["B_variable_py"].value)
confianza_Z2 = float(form["confianza_Z2_py"].value)


# Create an ordered dictionary to store input_data
input_data = OrderedDict()

# Read input values from the HTML form
for key in form.keys():
    input_data[key] = form.getvalue(key)

# Realiza los cálculos necesarios basados en los datos de entrada
# Suma de Ni
sumaNi = 0
ni_list = []
for key, value in input_data.items():
    if "_ni" in key:
        val = float(value)
        ni_list.append(val)


sumaNi = math.fsum(ni_list)

# Cálculo de B2
B_variable_cuadrado = pow(B_variable, 2)

# Cálculo de D
D_variable = B_variable_cuadrado/confianza_Z2

# Cálculo de N2 
N2_variable = pow(sumaNi, 2)


# Cálculo de Raíz de p * q
variablesP = []
variablesQ = []

for key in input_data.keys():
    if "_p_variable" in key:
        val_p = float(input_data[key])
        variablesP.append(val_p)  # Añadir val_p a la lista variablesP

for key in input_data.keys():
    if "_q_elemento" in key:
        val_q = float(input_data[key])
        variablesQ.append(val_q)  # Añadir val_q a la lista variablesQ

# Suponiendo que sumaP y sumaQ ya están definidas como listas
resultado_raizPQ = []  # Inicializar una lista vacía para almacenar los resultados

for i in range(len(variablesP)):
    productoP_Q = variablesP[i] * variablesQ[i]  # Multiplicar los elementos correspondientes
    sqrt_productoP_Q = math.sqrt(productoP_Q)  # Obtener la raíz cuadrada del producto
    resultado_raizPQ.append(sqrt_productoP_Q)  # Añadir la raíz cuadrada a la lista de resultados
#Las raíces cuadradas de los valores multiplicados se almacenan ahora en la lista `result`.
# Inicializar variable suma
resultado_Ni_Por_Raiz = 0

# Multiplica cada elemento de ni_list por cada elemento respectivo de resultado_raizPQ
for ni, resultado in zip(ni_list, resultado_raizPQ):
    productNi_PQ = ni * resultado
    resultado_Ni_Por_Raiz += productNi_PQ

##########################################

# Cálculo de Ni * (Raíz pi * qi)

# Inicializar una lista vacía para almacenar los resultados
result_list_Ni_p_q = []

# Recorre las listas y realiza la multiplicación
for ni, q, p in zip(ni_list, variablesQ, variablesP):
    result = ni * q * p
    result_list_Ni_p_q.append(result)

# Calcular la suma de todos los elementos de result_list_Ni_p_q
sum_result_list_Ni_p_q = math.fsum(result_list_Ni_p_q)

# Cálculo de númerador
numerador = pow(resultado_Ni_Por_Raiz, 2)

# Cálculo de denominador
demoninador = (N2_variable * D_variable) + sum_result_list_Ni_p_q


# Cálculo (y redondeo) de n
n_variable = numerador/demoninador
n_redondeado = int(np.ceil(n_variable))

################

# PERSONAL DE CONFIANZA

personal_confianza = []
for ni in ni_list:
    personal = ni / sumaNi * n_redondeado
    personal = np.ceil(personal)
    personal = int(personal)
    personal_confianza.append(personal)

# Recorre la matriz y añade "Estrato i" a cada elemento
for i, num in enumerate(personal_confianza):
    personal_confianza[i] = " Estrato " + str(i + 1) + ":" + str(num)

# Crear un diccionario con claves correspondientes a los nombres de entrada
# y valores correspondientes a los valores de salida
response_data = [sumaNi, B_variable_cuadrado, D_variable, N2_variable, resultado_Ni_Por_Raiz, sum_result_list_Ni_p_q, numerador, demoninador, n_variable, n_redondeado, personal_confianza]

# Serializar el diccionario de salida a JSON
response_json = json.dumps(response_data)

# Enviar la respuesta JSON al cliente
#print("Content-Type: application/json")
#print("Access-Control-Allow-Origin: *")  # Permitir solicitudes de cualquier origen
#print()  # Línea en blanco requerida por el protocolo CGI
print(response_json)