<div style="padding: 20px; font-family: sans-serif;">
    <!-- Tarea 1 -->
    <h1>Enlaces por Categoría</h1>
    <?php foreach ($enlacesCategorizados as $categoria => $enlaces): ?>
        <h3 style="color: #4f46e5; border-bottom: 1px solid #eee; padding-top: 15px;">
            <?= htmlspecialchars($categoria) ?>
        </h3>
        <ul>
            <?php foreach ($enlaces as $enlace): ?>
                <li>
                    <a href="<?= $enlace['url'] ?>" target="_blank">
                        <?= htmlspecialchars($enlace['descripcion']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</div>