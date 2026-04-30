# SQUO - Sistema de Cotizaciones

**SQUO** es una plataforma diseñada para la gestión y generación de cotizaciones de manera eficiente. Construido con **Laravel 10**, ofrece una base sólida, segura y escalable para procesos administrativos.

---

## 🛠 Requisitos del Sistema

Para asegurar el correcto funcionamiento de SQUO, se recomienda el siguiente entorno:

* **PHP:** `v8.3.30` (Versión recomendada).
* **Framework:** Laravel `10.x`.
* **Base de Datos:** MySQL 8.0+ / MariaDB 10.4+.
* **Gestor de Dependencias:** Composer 2.x.
* **Entorno de Frontend:** Node.js (v18+) & NPM.

---

## 🚀 Instalación y Configuración

Sigue estos pasos para instalar el proyecto en tu entorno local:

### 1. Clonar el repositorio
```bash
git clone <url-del-repositorio>
cd squo
2. Instalar dependencias de PHP
Bash
composer install
3. Configurar el entorno
Copia el archivo de ejemplo de variables de entorno y genera la clave de aplicación:

Bash
cp .env.example .env
php artisan key:generate
[!IMPORTANT]
Configura tus credenciales de base de datos (DB_DATABASE, DB_USERNAME, DB_PASSWORD) en el archivo .env antes de continuar.

4. Ejecutar migraciones
Crea la estructura de las tablas en tu base de datos:

Bash
php artisan migrate
5. Configuración de Frontend
Este proyecto utiliza Laravel Breeze para la gestión de acceso. Instala las dependencias de Node y compila los recursos:

Bash
npm install
npm run dev
🔐 Autenticación
El sistema implementa Laravel Breeze, proporcionando un flujo de autenticación robusto y ligero que incluye:

Registro e Inicio de sesión.

Gestión de perfiles.

Restablecimiento de contraseñas.

Interfaz construida con Tailwind CSS.

💻 Ejecución
Para iniciar el servidor de desarrollo, ejecuta:

Bash
php artisan serve
El sistema estará disponible en: http://localhost:8000

SQUO - Cotiza con precisión, gestiona con facilidad.