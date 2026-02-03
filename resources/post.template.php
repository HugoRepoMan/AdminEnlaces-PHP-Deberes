<article style="max-width: 800px; margin: 40px auto; font-family: sans-serif;">
    <h1><?= htmlspecialchars($post['titulo']) ?></h1>
    
    <p style="color: #666; font-style: italic;">
        <?= formatear_info_autor($post) ?>
    </p>

    <div style="line-height: 1.6; margin-bottom: 20px;">
        <?= nl2br(htmlspecialchars($post['contenido'])) ?>
    </div>

    <hr style="border: 0; border-top: 1px solid #eee;">

    <p><strong>Número de palabras:</strong> <?= contar_palabras($post['contenido']) ?></p>
    
    <div>
        <strong>Etiquetas:</strong> 
        <?= renderizar_tags_html($post['tags']) ?>
    </div>
</article>