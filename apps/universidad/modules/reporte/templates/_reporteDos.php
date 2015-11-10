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
        <?php foreach ($datos['listadoUno'] as $dato): ?>
            <tr>
                <td><?php echo $dato['Cliente'] ?></td>
                <td><?php echo $dato['Maximo'] ?></td>
            </tr>
        <?Php endforeach; ?>
    </tbody>
</table>
<h3>5 Clientes con mas Facturas</h3>
<br/>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Cliente</td>
            <td>Maximo</td>
        </tr>
        <?php foreach ($datos['listadoDos'] as $dato): ?>
            <tr>
                <td><?php echo $dato['Cliente'] ?></td>
                <td><?php echo $dato['Maximo'] ?></td>
                
            </tr>
        <?php endforeach; ?>
</table>
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
        <?php foreach ($datos['listadoTres'] as $dato): ?>
            <tr>
                <td><?php echo $dato['Cliente'] ?></td>
                <td><?php echo $dato['Monto'] ?></td>
            </tr>
        <?Php endforeach; ?>
    </tbody>
</table>