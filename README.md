# 🏨 Ejercicio 19 — Sistema de Reservas Hoteleras

API REST desarrollada con **Laravel 10** que modela un sistema de gestión
hotelera con reservas de habitaciones por agencias y particulares.


## 🗄 Modelo de datos

| Entidad | Relaciones |
|---|---|
| `Categoria` | tiene muchos `Hotel` |
| `Hotel` | pertenece a `Categoria`, tiene muchas `Habitacion` |
| `Habitacion` | pertenece a `Hotel`, reservada por `Agencia` y `Particular` (N:M) |
| `Agencia` | reserva muchas `Habitacion` |
| `Particular` | reserva muchas `Habitacion` |

> Las tablas pivote `agencia_habitacion` y `particular_habitacion`
> almacenan `fecha_ini` y `fecha_fin` de cada reserva.

---

## 🔍 Query Params disponibles

Todos los endpoints soportan los siguientes parámetros:

| Parámetro | Descripción | Ejemplo |
|---|---|---|
| `included` | Carga relaciones | `?included=categoria` |
| `filter[campo]` | Filtra por campo | `?filter[nombre]=Hotel` |
| `sort` | Ordena ASC, `-campo` DESC | `?sort=-nombre` |
| `perPage` | Pagina resultados | `?perPage=5` |

---

## 🚀 Endpoints

### 2.1 · Reservas por agencia
GET /api/consultas/reservas-agencia
GET /api/consultas/reservas-agencia?included=habitaciones
GET /api/consultas/reservas-agencia?included=habitaciones&filter[nombre]=Kulas
GET /api/consultas/reservas-agencia?included=habitaciones&perPage=2

### 2.2 · Reservas por particulares
GET /api/consultas/reservas-particulares
GET /api/consultas/reservas-particulares?included=habitaciones
GET /api/consultas/reservas-particulares?included=habitaciones&perPage=3

### 2.3 · Hoteles con categoría
GET /api/consultas/hoteles-con-categoria
GET /api/consultas/hoteles-con-categoria?included=categoria
GET /api/consultas/hoteles-con-categoria?included=categoria&sort=-nombre
GET /api/consultas/hoteles-con-categoria?included=categoria&filter[nombre]=Hotel

---

## 🧪 Base URL
http://localhost:8000/api

---

## 📁 Estructura relevante
app/
├── Http/Controllers/ConsultasController.php
├── Models/
│   ├── Agencia.php
│   ├── Categoria.php
│   ├── Habitacion.php
│   ├── Hotel.php
│   └── Particular.php
└── Traits/
└── HasQueryScopes.php          ← scopes reutilizables (DRY)
database/
├── factories/                      ← datos de prueba
├── migrations/                     ← 7 migraciones (5 entidades + 2 pivotes)
└── seeders/

---

## 👤 Autor

 - Cristian Acosta

## | Instructor 

 - Alejandro Plazas

Desarrollado como ejercicio académico del Taller del plan de mejoramiento — Programa ADSO · SENA Ficha : 3066446