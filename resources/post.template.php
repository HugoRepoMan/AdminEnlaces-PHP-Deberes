<?php
require __DIR__ . '/partials/header.php';
?>

<div class="border-b border-gray-200 pb-8 mb-8">
<h2 class="text-4xl font-semibold text-gray-900 sm:text-5xl">
<?= htmlspecialchars($post['titulo']) ?>
</h2>

<p class="mt-4 text-sm font-medium text-indigo-600">
<?= formatear_info_autor($post) ?>
</p>
</div>

<div class="prose max-w-none">
<p class="text-lg text-gray-700">
<?= nl2br(htmlspecialchars($post['contenido'])) ?>
</p>
</div>

<div class="mt-8 pt-8 border-t border-gray-100">
<p class="text-sm text-gray-500 mb-4">
<strong>Número de palabras:</strong> <?= contar_palabras($post['contenido']) ?>
</p>

<div class="flex flex-wrap gap-2">
<span class="text-sm text-gray-600 mr-2">Etiquetas:</span>
<?= renderizar_tags_html($post['tags']) ?>
</div>
</div>

<?php
require __DIR__ . '/partials/footer.php';
?>
