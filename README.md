# TPE 2024 - Primera parte - Dominio
## Tema: Guía de espectáculos

La propuesta consiste en desarrollar un servicio de registro y consultas, referido a eventos sociales y culturales.

## Modelo de datos

Para cada evento se almacena el nombre del espectáculo o evento, una descripción, y la fecha de realización. Además se lo clasifica en la categoría que corresponda de acuerdo a su tipo.

La representación se modela con dos entidades: **evento** y **tipoevento** emparentadas con una relación de *1 a N*, esto es: para cada tipoevento pueden existir varios eventos asociados.

![image](https://github.com/user-attachments/assets/9278b4cf-380a-44d0-89e8-b88fa33548ff)


