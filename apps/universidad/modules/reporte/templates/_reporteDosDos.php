<br/>
<h3>5 Clientes con mas Facturas</h3>
<br/>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Clientes</td>
            <td>Maximo</td>
        </tr>
        <?php foreach ($listadoDos as $dato): ?>
            <tr>
                <td><?php echo $dato['Cliente'] ?></td>
                <td><?php echo $dato['Maximo'] ?></td>
                
            </tr>
        <?php endforeach; ?>
</table>
<br/>