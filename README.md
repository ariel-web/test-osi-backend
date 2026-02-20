# Sistema de suscripción de noticias (Backend)

Este repositorio contiene el backend hecho en Laravel para la prueba técnica de OSI. Este repositorio se complementa con un frontend hecho en AngularJS disponible en [`https://github.com/ariel-web/test-osi-backend.git`]

## Endpoints API

- `POST /api/subscribers` – crear suscriptor
- `GET /api/subscribers` – listar suscriptores
- `GET /api/subscribers/{id}` – trae datos de un suscriptor
- `PUT /api/subscribers/{id}` – actualiza un suscriptor
- `DELETE /api/subscribers/{id}` – elimina un suscriptor
- `POST /api/subscribers/send-emails` – disparar envío de correos de suscriptores seleccionados

## Backend

El servicio API está disponible en `http://127.0.0.1:8000/api/subscribers`

### Instrucciones para ejecutar

1. **Instala dependencias de PHP**:
   ```bash
   composer install
   ```

2. **Configura el archivo `.env`**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

   Asegúrate de configurar las variables de correo SMTP:
   ```
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.gmail.com
   MAIL_PORT=465
   MAIL_USERNAME=tu-email@gmail.com
   MAIL_PASSWORD=tu-contraseña-app
   MAIL_ENCRYPTION=ssl
   MAIL_FROM_ADDRESS=tu-email@gmail.com
   ```

3. **Ejecuta las migraciones**:
   ```bash
   php artisan migrate
   ```

4. **Inicia el servidor Laravel**:
   ```bash
   php artisan serve
   ```
   El backend estará disponible en `http://127.0.0.1:8000`

5. **En otra terminal, inicia el worker de cola** (necesario para enviar correos):
   ```bash
   php artisan queue:work
   ```

### Notas importantes

- El frontend accede a `http://127.0.0.1:8000/api/subscribers`
- Los correos se envían de forma asincrónica mediante colas (queue). El worker debe estar ejecutándose.
- CORS está habilitado para permitir solicitudes desde frontends en orígenes diferentes.
- Los suscriptores reciben correos de bienvenida personalizados con sus nombres.


**Los correos no se envían**: Asegúrate de que el worker de cola está ejecutándose (`php artisan queue:work`).

**Errores de CORS**: Verifica que `CORS_ALLOWED_ORIGINS` en el `.env` incluya el origen del frontend, o déjalo como `*` en desarrollo.

**Base de datos vacía**: Ejecuta `php artisan migrate`
