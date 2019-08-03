#-*- coding: utf-8 -*-
import cv2
import numpy as np
from matplotlib import pyplot as plt

def matplotlib():
	img = cv2.imread('falta.jpeg')
	plt.imshow(img)
	plt.xticks([]), plt.yticks([])
	plt.show()
	return

#img = cv2.imread("fuga.jpg")
#Para escala de grises
pic = ['dificultadRespirar.jpg','dolorGarganta.jpg','dolorToraxRespirar.jpg','resequedadGarganta.jpg','respirarEjercicio.jpg','ruidosRespiratorios.jpg','tos.jpg' ,'tosCronica.jpg','tosSeca.jpg'];
picName = ['dificultadRespirarGray.jpg','dolorGargantaGray.jpg','dolorToraxRespirarGray.jpg','resequedadGargantaGray.jpg','respirarEjercicioGray.jpg','ruidosRespiratoriosGray.jpg','tosGray.jpg','tosCronicaGray.jpg','tosSecaGray.jpg'];

for i in range(0,9):
	img = cv2.imread(pic[i], cv2.IMREAD_GRAYSCALE)
	#Para guardar una imagen
	cv2.imwrite(picName[i],img)
'''
img1 = "dolhom.png"
img = cv2.imread(img1, cv2.IMREAD_GRAYSCALE)
#Para guardar una imagen
cv2.imwrite("dolhomGray.png",img)
#cv2.imshow('fuga', img)
#Espera a recibir una recla
#cv2.waitKey(0)
#te ayuda para cerrar las ventanas que se abran en el programa
'''
cv2.destroyAllWindows()

#matplotlib()
