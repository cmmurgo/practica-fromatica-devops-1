# Practica Formativa

- Riveros Cabibbo Daniel 
- Murgo Marcelo 


---

## Documentación de los Parámetros

Los siguientes parámetros se envían desde el frontend al backend:

### Detalles de la llamada:
- **Parámetros enviados al backend:**
  - **username**: Nombre de usuario ingresado.
  - **password**: Contraseña ingresada.

### Estructura del JSON enviado:

{
    "username": "valor_del_nombre_de_usuario",
    "password": "valor_de_la_contraseña"
}


### Destino de la solicitud:
- `backend.php`.

### Método HTTP:
- `POST`.

### Respuesta esperada:
- Formato JSON con `status` y `message`.




