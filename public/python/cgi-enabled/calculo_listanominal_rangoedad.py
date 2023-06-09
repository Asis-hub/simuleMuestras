#!/usr/bin/python3.9
# -*- coding: UTF-8 -*-
# FORMULA PARA LISTA NOMINAL

print("Content-type: text/html\n")

import cgi
import json
import pandas as pd
import numpy as np

form = cgi.FieldStorage()

#Datos por rango de edad y sexo
#INE
#https://ine.mx/transparencia/datos-abiertos/#/archivo/datos-por-rangos-de-edad-entidad-de-origen-y-sexo-del-padron-electoral-y-lista-nominal-2022

#df = pd.read_excel(r'https://ine.mx/wp-content/uploads/2022/03/DatosAbiertos-derfe-pdln_edms_re_20220311.xlsx', sheet_name=0)
municipio = str(form["municipio_py"].value)
entidad = str(form["entidad_py"].value)

xlsx_en_URL_INE = str(form["lista_poredad_py"].value)

df = pd.read_excel(xlsx_en_URL_INE, sheet_name=0)

if municipio != "TODOS":
    suma_listahombres18 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_18_HOMBRES"].sum()
    suma_listamujeres18 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_18_MUJERES"].sum()
    suma_listahombres19 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_19_HOMBRES"].sum()
    suma_listamujeres19 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_19_MUJERES"].sum()
    suma_listahombres20_24 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_20_24_HOMBRES"].sum()
    suma_listamujeres20_24 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_20_24_MUJERES"].sum()
    suma_listahombres25_29 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_25_29_HOMBRES"].sum()
    suma_listamujeres25_29 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_25_29_MUJERES"].sum()
    suma_listahombres30_34 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_30_34_HOMBRES"].sum()
    suma_listamujeres30_34 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_30_34_MUJERES"].sum()
    suma_listahombres35_39 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_35_39_HOMBRES"].sum()
    suma_listamujeres35_39 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_35_39_MUJERES"].sum()
    suma_listahombres40_44 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_40_44_HOMBRES"].sum()
    suma_listamujeres40_44 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_40_44_MUJERES"].sum()
    suma_listahombres45_49 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_45_49_HOMBRES"].sum()
    suma_listamujeres45_49 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_45_49_MUJERES"].sum()
    suma_listahombres50_54 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_50_54_HOMBRES"].sum()
    suma_listamujeres50_54 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_50_54_MUJERES"].sum()
    suma_listahombres55_59 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_55_59_HOMBRES"].sum()
    suma_listamujeres55_59 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_55_59_MUJERES"].sum()
    suma_listahombres60_64 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_60_64_HOMBRES"].sum()
    suma_listamujeres60_64 = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_60_64_MUJERES"].sum()
    suma_listahombres65_mas = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_65_Y_MAS_HOMBRES"].sum()
    suma_listamujeres65_mas = df[(df["NOMBRE\nMUNICIPIO"] == municipio) & (df["NOMBRE\nENTIDAD"] == entidad)]["LISTA_65_Y_MAS_MUJERES"].sum()
else:
    suma_listahombres18 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_18_HOMBRES"].sum()
    suma_listamujeres18 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_18_MUJERES"].sum()
    suma_listahombres19 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_19_HOMBRES"].sum()
    suma_listamujeres19 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_19_MUJERES"].sum()
    suma_listahombres20_24 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_20_24_HOMBRES"].sum()
    suma_listamujeres20_24 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_20_24_MUJERES"].sum()
    suma_listahombres25_29 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_25_29_HOMBRES"].sum()
    suma_listamujeres25_29 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_25_29_MUJERES"].sum()
    suma_listahombres30_34 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_30_34_HOMBRES"].sum()
    suma_listamujeres30_34 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_30_34_MUJERES"].sum()
    suma_listahombres35_39 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_35_39_HOMBRES"].sum()
    suma_listamujeres35_39 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_35_39_MUJERES"].sum()
    suma_listahombres40_44 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_40_44_HOMBRES"].sum()
    suma_listamujeres40_44 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_40_44_MUJERES"].sum()
    suma_listahombres45_49 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_45_49_HOMBRES"].sum()
    suma_listamujeres45_49 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_45_49_MUJERES"].sum()
    suma_listahombres50_54 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_50_54_HOMBRES"].sum()
    suma_listamujeres50_54 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_50_54_MUJERES"].sum()
    suma_listahombres55_59 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_55_59_HOMBRES"].sum()
    suma_listamujeres55_59 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_55_59_MUJERES"].sum()
    suma_listahombres60_64 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_60_64_HOMBRES"].sum()
    suma_listamujeres60_64 = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_60_64_MUJERES"].sum()
    suma_listahombres65_mas = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_65_Y_MAS_HOMBRES"].sum()
    suma_listamujeres65_mas = df[df["NOMBRE\nENTIDAD"] == entidad]["LISTA_65_Y_MAS_MUJERES"].sum()


#print("Lista nominal hombres: " + suma_listahombres)
#print("Lista nominal mujeres: " + suma_listamujeres)
#print("Lista nominal total: " + suma_listanominal)

#print("Lista nominal hombres: " + str(suma_listahombres18 + suma_listahombres19 + suma_listahombres20_24 + suma_listahombres25_29 + suma_listahombres30_34 + suma_listahombres30_34 + suma_listahombres35_39 + suma_listahombres40_44 + suma_listahombres45_49 + suma_listahombres50_54 + suma_listahombres55_59 + suma_listahombres60_64 + suma_listahombres65_mas))
#print("Lista nominal mujeres: " + str(suma_listamujeres18 + suma_listamujeres19 + suma_listamujeres20_24 + suma_listamujeres25_29 + suma_listamujeres30_34 + suma_listamujeres30_34 + suma_listamujeres35_39 + suma_listamujeres40_44 + suma_listamujeres45_49 + suma_listamujeres50_54 + suma_listamujeres55_59 + suma_listamujeres60_64 + suma_listamujeres65_mas))
#print("Lista nominal todos: " + str(suma_listahombres18 + suma_listahombres19 + suma_listahombres20_24 + suma_listahombres25_29 + suma_listahombres30_34 + suma_listahombres30_34 + suma_listahombres35_39 + suma_listahombres40_44 + suma_listahombres45_49 + suma_listahombres50_54 + suma_listahombres55_59 + suma_listahombres60_64 + suma_listahombres65_mas)+(suma_listamujeres18 + suma_listamujeres19 + suma_listamujeres20_24 + suma_listamujeres25_29 + suma_listamujeres30_34 + suma_listamujeres30_34 + suma_listamujeres35_39 + suma_listamujeres40_44 + suma_listamujeres45_49 + suma_listamujeres50_54 + suma_listamujeres55_59 + suma_listamujeres60_64 + suma_listamujeres65_mas))

#print("Estrato 1")
lista_hombres_18_24 = int(suma_listahombres18 + suma_listahombres19 + suma_listahombres20_24)
lista_mujeres_18_24 = int(suma_listamujeres18 + suma_listamujeres19 + suma_listamujeres20_24)
#print("Lista nominal de 18-24 años hombres: " + (str(lista_hombres_18_24)))
#print("Lista nominal de 18-24 años mujeres: " + (str(lista_mujeres_18_24)))

#print("Estrato 2")
lista_hombres25_34 = int(suma_listahombres25_29 + suma_listahombres30_34)
lista_mujeres25_34 = int(suma_listamujeres25_29 + suma_listamujeres30_34)
#print("Lista nominal de 25-34 años hombres: " + (str(lista_hombres25_34)))
#print("Lista nominal de 25-34 años mujeres: " + (str(lista_mujeres25_34)))

#print("Estrato 3")
lista_hombres_35_49 = int(suma_listahombres35_39 + suma_listahombres40_44 + suma_listahombres45_49)
lista_mujeres_35_49 = int(suma_listamujeres35_39 + suma_listamujeres40_44 + suma_listamujeres45_49)
#print("Lista nominal de 35-49 años hombres: " + (str(lista_hombres_35_49)))
#print("Lista nominal de 35-49 años mujeres: " + (str(lista_mujeres_35_49)))

#print("Estrato 4")
lista_hombres_50_64 = int(suma_listahombres50_54 + suma_listahombres55_59 + suma_listahombres60_64)
lista_mujeres_50_64 = int(suma_listamujeres50_54 + suma_listamujeres55_59 + suma_listamujeres60_64)
#print("Lista nominal de 50-64 años hombres: " + (str(lista_hombres_50_64)))
#print("Lista nominal de 50-64 años mujeres: " + (str(lista_mujeres_50_64)))

#print("Estrato 5")
lista_hombres_65_mas = int(suma_listahombres65_mas)
lista_mujeres_65_mas = int(suma_listamujeres65_mas)
#print("Lista nominal de 65 o más años hombres: " + (str(lista_hombres_65_mas)))
#print("Lista nominal de 65 o más años mujeres: " + (str(lista_mujeres_65_mas)))

#listaTotal = (int(suma_listahombres18 + suma_listahombres19 + suma_listahombres20_24 + suma_listamujeres18 + suma_listamujeres19 + suma_listamujeres20_24 + suma_listahombres25_29 + suma_listahombres30_34 + suma_listamujeres25_29 + suma_listamujeres30_34 + suma_listahombres35_39 + suma_listahombres40_44 + suma_listahombres45_49 + suma_listamujeres35_39 + suma_listamujeres40_44 + suma_listamujeres45_49 + suma_listahombres50_54 + suma_listahombres55_59 + suma_listahombres60_64 + suma_listamujeres50_54 + suma_listamujeres55_59 + suma_listamujeres60_64 + suma_listahombres65_mas + suma_listamujeres65_mas))

listaTotal = int(lista_hombres_18_24 + lista_mujeres_18_24 + lista_hombres25_34 + lista_mujeres25_34 + 
lista_hombres_35_49 + lista_mujeres_35_49 + lista_hombres_50_64 + lista_mujeres_50_64 + 
lista_hombres_65_mas + lista_mujeres_65_mas)

#print("La lista nominal total es: " + str(listaTotal))

##print("La proporción para hombres de 18 a 24 años sería: " + (str(round(float(lista_hombres_18_24/listaTotal),3))))
##print("La proporción para mujeres de 18 a 24 años sería: " + (str(round(float(lista_mujeres_18_24/listaTotal),3))))
##print("La proporción para hombres de 25 a 34 años sería: " + (str(round(float(lista_hombres25_34/listaTotal),3))))
##print("La proporción para mujeres de 25 a 34 años sería: " + (str(round(float(lista_mujeres25_34/listaTotal),3))))
#print("La proporción para hombres de 35 a 49 años sería: " + (str(round(float(lista_hombres_35_49/listaTotal),3))))
#print("La proporción para mujeres de 35 a 49 años sería: " + (str(round(float(lista_mujeres_35_49/listaTotal),3))))
#print("La proporción para hombres de 50 a 64 años sería: " + (str(round(float(lista_hombres_50_64/listaTotal),3))))
#print("La proporción para mujeres de 50 a 64 años sería: " + (str(round(float(lista_mujeres_50_64/listaTotal),3))))
#print("La proporción para hombres de 65 o más años sería: " + (str(round(float(lista_hombres_65_mas/listaTotal),3))))
#print("La proporción para mujeres de 65 o más años sería: " + (str(round(float(lista_mujeres_65_mas/listaTotal),3))))

proporcionHombres_18_24  = (round(float(lista_hombres_18_24/listaTotal),3))
proporcionMujeres_18_24  = (round(float(lista_mujeres_18_24/listaTotal),3))
proporcionHombres_25_34  = (round(float(lista_hombres25_34/listaTotal),3))
proporcionMujeres_25_34  = (round(float(lista_mujeres25_34/listaTotal),3))
proporcionHombres_35_49  = (round(float(lista_hombres_35_49/listaTotal),3))
proporcionMujeres_35_49  = (round(float(lista_mujeres_35_49/listaTotal),3))
proporcionHombres_50_64  = (round(float(lista_hombres_50_64/listaTotal),3))
proporcionMujeres_50_64  = (round(float(lista_mujeres_50_64/listaTotal),3))
proporcionHombres_65  = (round(float(lista_hombres_65_mas/listaTotal),3))
proporcionMujeres_65  = (round(float(lista_mujeres_65_mas/listaTotal),3))

#
#print("Si fueran 600 encuestas por realizar, a los hombres de 18 a 24 años les tocaría: " + (str(int((round(float(lista_hombres_18_24/listaTotal),3))*600))))
#print("Si fueran 600 encuestas por realizar, a las mujeres de 18 a 24 años les tocaría: " + (str(int((round(float(lista_mujeres_18_24/listaTotal),3))*600))))
#print("Si fueran 600 encuestas por realizar, a los hombres de 25 a 34 años les tocaría: " + (str(int((round(float(lista_hombres25_34/listaTotal),3))*600))))
#print("Si fueran 600 encuestas por realizar, a las mujeres de 25 a 34 años les tocaría: " + (str(int((round(float(lista_mujeres25_34/listaTotal),3))*600))))
#print("Si fueran 600 encuestas por realizar, a los hombres de 35 a 49 años les tocaría: " + (str(int((round(float(lista_hombres_35_49/listaTotal),3))*600))))
#print("Si fueran 600 encuestas por realizar, a las mujeres de 35 a 49 años les tocaría: " + (str(int((round(float(lista_mujeres_35_49/listaTotal),3))*600))))
#print("Si fueran 600 encuestas por realizar, a los hombres de 50 a 64 años les tocaría: " + (str(int((round(float(lista_hombres_50_64/listaTotal),3))*600))))
#print("Si fueran 600 encuestas por realizar, a las mujeres de 50 a 64 años les tocaría: " + (str(int((round(float(lista_mujeres_50_64/listaTotal),3))*600))))
#print("Si fueran 600 encuestas por realizar, a los hombres de 65 o más años les tocaría: " + (str(int((round(float(lista_hombres_65_mas/listaTotal),3))*600))))
#print("Si fueran 600 encuestas por realizar, a las mujeres de 65 o más años les tocaría: " + (str(int((round(float(lista_mujeres_65_mas/listaTotal),3))*600))))

#encuestasRealizar_Hombres_18_24 = proporcionHombres_18_24 * numEncuestas;
#encuestasRealizar_Mujeres_18_24 = proporcionMujeres_18_24 * numEncuestas;
#encuestasRealizar_Hombres_25_34 = proporcionHombres_25_34 * numEncuestas;
#encuestasRealizar_Mujeres_25_34 = proporcionMujeres_25_34 * numEncuestas;
#encuestasRealizar_Hombres_35_49 = proporcionHombres_35_49 * numEncuestas;
#encuestasRealizar_Mujeres_35_49 = proporcionMujeres_35_49 * numEncuestas;
#encuestasRealizar_Hombres_50_64 = proporcionHombres_50_64 * numEncuestas;
#encuestasRealizar_Mujeres_50_64 = proporcionMujeres_50_64 * numEncuestas;
#encuestasRealizar_Hombres_65  = proporcionHombres_65 * numEncuestas;
#encuestasRealizar_Mujeres_65  = proporcionMujeres_65 * numEncuestas;

resultado = [listaTotal, lista_mujeres_18_24, lista_hombres_18_24, lista_mujeres25_34, lista_hombres25_34,
lista_mujeres_35_49, lista_hombres_35_49, lista_mujeres_50_64, lista_hombres_50_64, lista_mujeres_65_mas,
lista_hombres_65_mas, proporcionMujeres_18_24, proporcionHombres_18_24, proporcionMujeres_25_34, proporcionHombres_25_34,
proporcionMujeres_35_49, proporcionHombres_35_49, proporcionMujeres_50_64, proporcionHombres_50_64, proporcionMujeres_65, proporcionHombres_65]

text = json.dumps(resultado)

print (text)