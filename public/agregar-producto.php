<html>
    <head>
        <title>Mi Tienda Tec - Agregar Producto</title>
    </head>
    <body>
        <header>
            <h1>Bienvenido a Mi Tienda Tec</h1>
            <nav>
                    <a href="index.php">Inicio</a>
                    <a href="productos.php">catalogo</a>
                    <a href="contacto.php">Contacto</a>
            </nav>
        </header>

        <main>
            <section>
            <h2>Agregar nuevo producto</h2>
                <form action="#" method="post">
                    <label for="nombre"> nombre del producto:</label>
                    <input type="text" name="nombre" id="nombre" required>
                    <br>

                    <label for="categoria"> categoría:</label>
                    <input type="text" name="categoria" id="categoria" required>
                    <br>

                    <label for="precio"> precio:</label>
                    <input type="number" name="precio" id="precio" step="0.01" min="0">
                    <br>

                    <label for="stock"> stock:</label>
                    <input type="number" name="stock" id="stock" required>
                    <br>

                    <button type="submit">Agregar producto</button>
                </form>
            </section>
        </main>

        <footer>
            <p>&copy; 2026 Mi Tienda Tec. Todos los derechos reservados.</p>
        </footer>
    </body>
</html> 