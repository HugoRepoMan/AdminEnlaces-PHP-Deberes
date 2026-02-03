<?php
//Tarea 2
$post = [
    'titulo'    => 'El Poder de PHP en el Desarrollo Web Moderno',
    'autor'     => 'Ana García',
    'fecha'     => '2026-03-15',
    'contenido' => 'PHP ha sido durante mucho tiempo un pilar fundamental del desarrollo web debido a su flexibilidad, facilidad de uso y su enorme comunidad de soporte. A pesar de la aparición de nuevas tecnologías, PHP sigue evolucionando constantemente con versiones modernas que mejoran el rendimiento y la seguridad de manera significativa. Esto permite a los desarrolladores crear aplicaciones robustas, escalables y fáciles de mantener en entornos de servidores profesionales actuales, manteniendo su relevancia en el mercado tecnológico global.',
    'tags'      => ['PHP', 'Backend', 'Servidores', 'Desarrollo Web']
];

function formatear_info_autor(array $postData): string {
    return "Publicado por " . $postData['autor'] . " el " . $postData['fecha'];
}

function renderizar_tags_html(array $tags): string {
    $html = "";
    foreach ($tags as $tag) {
        $html .= "<span style='background:#e2e8f0; padding:2px 8px; border-radius:4px; margin-right:5px; font-size:12px;'>$tag</span>";
    }
    return $html;
}

function contar_palabras(string $texto): int {
    return str_word_count($texto);
}