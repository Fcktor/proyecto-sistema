# Khopy Plaza - Sistema de Gestión de Ventas e Inventario

Sistema web de gestión de ventas e inventario desarrollado como proyecto de tesis. Permite la administración de productos, pedidos, categorías, marcas y usuarios, además de contar con un módulo de tienda para clientes.

## Tecnologías

- **Backend:** PHP (mysqli + PDO)
- **Base de datos:** MySQL
- **Frontend:** HTML5, CSS3, Bootstrap 5.0.2, JavaScript
- **Autenticación:** Sesiones PHP con roles (Administrador / Cliente)

## Funcionalidades

### Módulo Administrador
- Gestión de usuarios (CRUD)
- Gestión de productos con imágenes
- Gestión de pedidos
- Gestión de categorías
- Gestión de marcas de productos
- Gestión de marcas de sociedad/empresa

### Módulo Cliente
- Catálogo de productos
- Vista de detalle de producto
- Carrito de compras

## Estructura del proyecto

```
Proyecto-Sistema/
├── index.php                  # Punto de entrada / login
├── login1.php                 # Página de inicio de sesión
├── home.php                   # Panel principal (dashboard)
├── conec.php                  # Conexión a BD (PDO)
├── usuario.php                # Clase Usuario
├── usersession.php            # Manejo de sesiones
├── clientes/                  # Tienda para clientes
├── users/                     # CRUD de usuarios
├── productos/                 # CRUD de productos
├── pedidos/                   # CRUD de pedidos
├── categorias/                # CRUD de categorías
├── marcaproductos/            # CRUD de marcas de productos
├── marcasociedad/             # CRUD de marcas de sociedad
├── reportes/                  # Reportes
└── css/ js/ img/              # Recursos estáticos
```

## Base de datos

**Base de datos:** `khopy_bd`

Tablas principales: `users`, `productos`, `pedidos`, `categoria_producto`, `marca_producto`, `marca_sociedad`

## Instalación

1. Clonar el repositorio
2. Importar la base de datos `khopy_bd` en MySQL
3. Configurar la conexión en `conec.php` (host: localhost, usuario: root, contraseña: vacío)
4. Ejecutar con Apache + PHP (XAMPP, WAMP, etc.)

## Licencia

Proyecto académico - Universidad
