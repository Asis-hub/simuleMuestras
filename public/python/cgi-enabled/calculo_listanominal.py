#!/usr/bin/python3.9
# -*- coding: UTF-8 -*-
# FORMULA PARA LISTA NOMINAL

print("Content-type: text/html\n")

import cgi
import json
import pandas as pd
import numpy as np

form = cgi.FieldStorage()

#Datos por sexo
#INE
#https://ine.mx/transparencia/datos-abiertos/#/archivo/datos-por-rangos-de-edad-entidad-de-origen-y-sexo-del-padron-electoral-y-lista-nominal-2022

#xlsx_en_home = '/home/asis/porSexoListaNominal.xlsx'
municipio = str(form["municipio_py"].value)
entidad = str(form["entidad_py"].value)

xlsx_en_URL_INE = str(form["URL_lista_nominal_py"].value)
df = pd.read_excel(xlsx_en_URL_INE, sheet_name=0)
#df = pd.read_excel(xlsx_en_URL_INE, sheet_name=0)
#df = pd.read_excel(r'/home/asis/porSexoListaNominalFinalOctubre.xlsx', sheet_name='pdln_edms_sexo_20221028')

if municipio != "TODOS":
    suma_listahombres = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA\nHOMBRES"].sum()
    suma_listamujeres = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA\nMUJERES"].sum()
    suma_listanominal = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA\nNOMINAL"].sum()
else:
    suma_listahombres = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA\nHOMBRES"].sum()
    suma_listamujeres = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA\nMUJERES"].sum()
    suma_listanominal = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA\nNOMINAL"].sum()
#print("Lista nominal hombres: " + suma_listahombres)
#print("Lista nominal mujeres: " + suma_listamujeres)
#print("Lista nominal total: " + suma_listanominal)

resultadoTotal = int(suma_listanominal)
resultadoMujeres = int(suma_listamujeres)
resultadoHombres = int(suma_listahombres)

resultado = [resultadoTotal, resultadoMujeres, resultadoHombres]

text = json.dumps(resultado)


print (text)

#print("Lista nominal hombres: " + str(suma_listahombres))
#print("Lista nominal mujeres: " + str(suma_listamujeres))
#print("Lista nominal total: " + str(suma_listanominal))