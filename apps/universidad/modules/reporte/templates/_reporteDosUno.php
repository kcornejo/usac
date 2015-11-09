<br/>
<h3>5 Clientes con mas Compras</h3>
<br/>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Cliente</td>
            <td>Maximo</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listadoUno as $dato): ?>
            <tr>
                <td><?php echo $dato['Cliente'] ?></td>
                <td><?php echo $dato['Maximo'] ?></td>
            </tr>
        <?Php endforeach; ?>
    </tbody>
</table>
<br/>