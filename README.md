# Gestor de Inventario

¡Bienvenido al Gestor de Inventario! Esta aplicación web te permite gestionar tus productos de forma sencilla y eficiente.

## Descripción

Esta aplicación está desarrollada en PHP, HTML y CSS, y utiliza una base de datos volátil para simular una conexión a una base de datos real. Esto facilita su despliegue en un entorno de desarrollo sin necesidad de configurar una base de datos completa.

## Características

*   **Registro de productos:** Agrega nuevos productos al inventario con su ID, nombre, precio y existencia.
*   **Listado de productos:** Visualiza todos los productos en una tabla organizada.
*   **Eliminación de productos:** Elimina productos del inventario con un solo clic.
*   **Interfaz intuitiva:** Diseño simple y fácil de usar.

## Capturas de Pantalla

Aquí puedes ver cómo luce la aplicación:


*Interfaz principal de la aplicación.*


https://imgur.com/a/en4g47O


## Instalación

Para ejecutar esta aplicación en tu entorno local, sigue estos pasos:

1.  **Requisitos:**
    *   Tener instalado XAMPP (o un entorno similar con Apache, PHP y MySQL).

2.  **Descarga los archivos:**
    *   Descarga el código fuente de este repositorio.

3.  **Copia los archivos a `htdocs`:**
    *   Copia todos los archivos y carpetas del proyecto (incluyendo `index.php`, `style.css` y la carpeta `images` con las capturas de pantalla) a la carpeta `htdocs` de tu instalación de XAMPP.  Esta carpeta generalmente se encuentra en:
        *   **Windows:** `C:\xampp\htdocs\`
        *   **Linux:** `/opt/lampp/htdocs/`
        *   **macOS:** `/Applications/XAMPP/htdocs/`

    *   Si deseas organizar mejor tus proyectos, puedes crear una nueva carpeta dentro de `htdocs` (por ejemplo, `inventario`) y colocar los archivos del proyecto dentro de esa carpeta.

4.  **Inicia los servicios de Apache y MySQL:**
    *   Abre el Panel de Control de XAMPP.
    *   Inicia los servicios de Apache y MySQL.

5.  **Accede a la aplicación en tu navegador:**
    *   Abre tu navegador web y escribe `http://localhost/` en la barra de direcciones.
    *   Si creaste una carpeta dentro de `htdocs`, agrega el nombre de la carpeta a la URL (por ejemplo, `http://localhost/inventario/`).

¡Listo! La aplicación debería estar funcionando correctamente en tu entorno local.

## Estructura de Archivos

*   `index.php`: Archivo principal que contiene la lógica de la aplicación y la interfaz de usuario.
*   `style.css`: Archivo que define el estilo de la aplicación.
*   `images/`: Carpeta que contiene las capturas de pantalla utilizadas en este archivo `README.md`.

## Notas

*   Esta aplicación utiliza una base de datos volátil, lo que significa que los datos se perderán cuando reinicies el servidor o cierres el navegador.
*   Si deseas utilizar una base de datos real, puedes modificar el código para conectarte a una base de datos MySQL o similar.

## Contribuciones

¡Las contribuciones son bienvenidas! Si encuentras algún error o tienes alguna sugerencia, no dudes en abrir un issue o enviar un pull request.

## Licencia

Este proyecto está bajo la licencia [MIT License](LICENSE).
