<?php
// Estructura del post [cite: 110, 112, 122]
$post = [
    'titulo'    => 'El Poder de PHP en el Desarrollo Web Moderno',
'autor'     => 'Ana García',
'fecha'     => '2026-03-15',
'contenido' => 'PHP ha sido durante mucho tiempo un pilar del desarrollo web debido a su flexibilidad y gran comunidad. A pesar de la aparición de nuevas tecnologías, PHP sigue evolucionando con versiones modernas que mejoran el rendimiento y la seguridad significativamente, permitiendo crear aplicaciones robustas y escalables.',
'tags'      => ['PHP', 'Backend', 'Servidores', 'Desarrollo Web']
];

// Funciones requeridas [cite: 125]
function formatear_info_autor(array $postData): string {
    return "Publicado por " . $postData['autor'] . " el " . $postData['fecha']; // [cite: 128]
}

function renderizar_tags_html(array $tags): string {
    $html = "";
    foreach ($tags as $tag) {
        $html .= "<span class='tag' style='background:#eee; margin:2px; padding:2px 5px;'>$tag</span>"; // [cite: 134]
    }
    return $html;
}

function contar_palabras(string $texto): int {
    return str_word_count($texto); // [cite: 138]
}
