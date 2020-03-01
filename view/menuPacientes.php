<?php require_once 'header.php'; ?>

        <h1>Pacientes</h1>
        <br>
        <form name="form1" method="POST" action="./?accion=guardarPaciente">
            
            <p>Nombre: <input type="text" name="txtnombre"></p>
            <p>Apellido: <input type="text" name="txtapellido"></p>
            <p>Tipo documento:
                <select name="seltipodocumento">
                    <option value="">Seleccione...</option>
                    <?php foreach($consultaTipodocumento as $datos): ?>

                        <option value="<?php echo $datos['id']; ?>"><?php echo $datos['documento']; ?></option>

                    <?php endforeach; ?>
                </select>
            </p>
            <p>Numero documento: <input type="text" name="txtnumero"></p>
            <p>Genero:
                <select name="selgenero">
                    <option value="">Seleccione...</option>
                    <?php foreach($consultaGenero as $datos): ?>

                        <option value="<?php echo $datos['id']; ?>"><?php echo $datos['genero']; ?></option>

                    <?php endforeach; ?>
                </select>
            </p>
            <p>Edad: <input type="text" name="txtedad"></p>
            <p><input type="submit" name="btnguardarpaciente" value="Guardar Paciente"></p>
        </form>
        <br>

        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Nombre Producto</th>
                    <th>Precio</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($consultaProductos as $dato): ?>
                <tr>
                    <td><?php echo $dato['id']; ?></td>
                    <td><?php echo $dato['categoria']; ?></td>
                    <td><?php echo $dato['nombre']; ?></td>
                    <td><?php echo $dato['precio']; ?></td>

                    <td><a href="./?accion=modificarProducto&id=<?php echo $dato['id']; ?>">Modificar</a></td>
                    <td><a href="./?accion=eliminarProducto&id=<?php echo $dato['id']; ?>">Eliminar</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


        <br>
        <br>
        <br>
        <a href="./">Volver</a>
<?php require_once 'footer.php'; ?>