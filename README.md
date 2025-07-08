# 🏐 Sistema ABM de Jugadores de Vóley

Este proyecto es un sistema simple de ABM (Alta, Baja, Modificación) de jugadores de vóley, desarrollado con **PHP** y **MySQL**. El sitio permite cargar, listar, editar y eliminar jugadores, guardando sus datos personales y deportivos.

## 📋 Funcionalidades principales

- 👉 Agregar nuevos jugadores
- ✏️ Editar datos de jugadores existentes
- 🗑️ Eliminar jugadores
- 📄 Ver una lista completa de los jugadores registrados

## 🧾 Datos que se registran

Cada jugador cuenta con los siguientes campos:

- **DNI** (documento único, usado como identificador)
- **Nombre**
- **Apellido**
- **Contacto** (puede ser teléfono o email)
- **Fecha de nacimiento**
- **Altura**
- **Peso**
- **¿Tiene experiencia?** (Sí / No)
- **Género** (M / F)
- **Posición en la cancha**:
  - Armador
  - Central
  - Punta
  - Opuesto
  - Líbero

## ⚙️ Tecnologías utilizadas

- Frontend: HTML + CSS (sin JavaScript)
- Backend: PHP
- Base de datos: MySQL (usando MySQLi)

## 🛠️ Requisitos

- Servidor local como **XAMPP** o **WAMP** en nuestro caso XAMPP
- PHP 7.x o superior
- MySQL

## 📂 Estructura del proyecto

- `/conexion.php`: Conexión a la base de datos
- `/index.php`: Página principal con el listado de jugadores
- `/agregar.php`: Formulario para agregar un nuevo jugador
- `/editar.php`: Formulario para editar datos de un jugador
- `/eliminar.php`: Script para eliminar un jugador


## 🧑‍💻 Autores

- **Joaquin Marek**-**Camila Gonzalez**-**Roman Quiroga**  
  Técnicos en Programación - Escuela Técnica  
  Proyecto realizado en 6to año

---