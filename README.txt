# SQUO - Sistema de Cotizaciones

![Laravel Version](https://img.shields.io/badge/Laravel-10.x-red)
![PHP Version](https://img.shields.io/badge/PHP-8.3.30-777bb4)
![License](https://img.shields.io/badge/License-MIT-green)

**SQUO** es una plataforma profesional diseñada para la gestión, creación y seguimiento de cotizaciones. Desarrollada con un enfoque en la velocidad y la facilidad de uso.

---

## 🛠 Requisitos del Sistema

Para garantizar la estabilidad del sistema, asegúrate de cumplir con las siguientes versiones:

* **PHP:** `8.3.30` (Versión recomendada)
* **Framework:** Laravel `10.x`
* **Gestor de paquetes:** Composer `2.x`
* **Frontend:** Node.js `18.x` o superior

---

## 🚀 Instalación y Configuración

Sigue estos pasos para desplegar el entorno de desarrollo:

### 1. Clonar el repositorio
```bash
git clone <url-del-repositorio>
cd squo
2. Instalación de dependencias
Instala las librerías de PHP y los paquetes de Node.js:

Bash
composer install
npm install
3. Configuración de variables de entorno
Crea tu archivo .env a partir del ejemplo y genera la llave de seguridad:

Bash
cp .env.example .env
php artisan key:generate
[!IMPORTANT]
No olvides configurar las credenciales de tu base de datos en el archivo .env antes de continuar.

4. Base de Datos
Ejecuta las migraciones para crear la estructura necesaria:

Bash
php artisan migrate
5. Compilación de Assets
SQUO utiliza Vite para el manejo de frontend:

Bash
npm run dev
🔐 Autenticación
Este sistema implementa Laravel Breeze, proporcionando una capa de autenticación robusta y ligera que incluye:

Registro y Login de usuarios.

Gestión de perfiles.

Recuperación de contraseñas.

Protección de rutas mediante middleware.

🖥️ Ejecución
Para levantar el servidor local:

Bash
php artisan serve
Accede desde tu navegador a: http://localhost:8000