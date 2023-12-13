# 1) identificar_numero
def identificar_numero(num):
    if num > 0:
        return "Positivo"
    elif num < 0:
        return "Negativo"
    else:
        return "Cero"
numero = 5
print(f" {identificar_numero(numero)}")

# 2) materias aprobadas
def aprobar_materia(nota1, nota2, nota3):
    promedio = (nota1 + nota2 + nota3) / 3
    if promedio >= 3.5:
        return "Aprobó"
    else:
        return "Reprobó"


notas = (4, 3, 5)
resultado_materia = aprobar_materia(*notas)
print(f"El estudiante con notas {notas} {resultado_materia} ")

# 3) Hallar hipotenusa

import math

def hallar_hipotenusa(cateto1, cateto2):
    return math.sqrt(cateto1**2 + cateto2**2)

cateto1, cateto2 = 3, 4
print(f"La hipotenusa es: {hallar_hipotenusa(cateto1, cateto2)}")

# 4) identificar edad

def identificar_generacion(edad):
    if 0 < edad <= 12:
        return "Niño"
    elif 12 < edad <= 21:
        return "Adolescente"
    elif 21 < edad <= 31:
        return "Joven"
    elif 31 < edad <= 60:
        return "Adulto"
    else:
        return "Adulto mayor"

edad_persona = 25
print(f"La persona de {edad_persona} años es: {identificar_generacion(edad_persona)}")