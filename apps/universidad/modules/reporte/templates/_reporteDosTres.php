<br/>
<h3>5 Clientes con mas Monto Facturado</h3>
<br/>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Cliente</td>
            <td>Monto</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listadoTres as $dato): ?>
            <tr>
                <td><?php echo $dato['Cliente'] ?></td>
                <td><?php echo $dato['Monto'] ?></td>
            </tr>
        <?Php endforeach; ?>
    </tbody>
</table>
<br/>