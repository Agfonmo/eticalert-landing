<?php
/**
 * Plantilla programática para páginas de ciudad — Canal de denuncias
 * Uso: cada archivo /canal-denuncias-[ciudad].php define $city_slug y hace include de este fichero.
 *
 * Solo Madrid y Barcelona tienen página propia con contenido profundo.
 * El resto redirige 301 al hub por comunidad autónoma.
 */

// Mapa ciudad → anchor en /canal-denuncias-comunidades
$city_ccaa_redirects = [
  'valencia'   => 'comunitat-valenciana',
  'sevilla'    => 'andalucia',
  'bilbao'     => 'pais-vasco',
  'malaga'     => 'andalucia',
  'zaragoza'   => 'aragon',
  'murcia'     => 'murcia',
  'palma'      => 'baleares',
  'las-palmas' => 'canarias',
  'alicante'   => 'comunitat-valenciana',
  'cordoba'    => 'andalucia',
  'valladolid' => 'castilla-y-leon',
  'vigo'       => 'galicia',
  'gijon'      => 'asturias',
];

if (isset($city_ccaa_redirects[$city_slug])) {
  header('HTTP/1.1 301 Moved Permanently');
  header('Location: https://eticalert.com/canal-denuncias-comunidades#' . $city_ccaa_redirects[$city_slug]);
  exit;
}

$cities = [
  'madrid' => [
    'nombre'    => 'Madrid',
    'provincia' => 'Madrid',
    'gentilicio'=> 'madrileño',
    'empresas'  => '29.000',
    'plan_recomendado' => 'Company',
    'sectores'  => 'finanzas, tecnología, consultoría, administración pública y medios de comunicación',
    'sector_destacado' => 'servicios financieros y tecnológicos',
    'intro_extra' => 'Madrid concentra el mayor número de grandes empresas obligadas de España. La AIPI tiene su sede en Madrid, lo que facilita la tramitación de expedientes en la provincia.',
    'faqs' => [
      ['q' => '¿Qué empresas de Madrid están obligadas a tener canal de denuncias?', 'a' => 'Todas las empresas con 50 o más empleados domiciliadas o con centros de trabajo en Madrid, más las entidades del sector financiero, auditoría, notarías y sujetos obligados PBC independientemente de su plantilla.'],
      ['q' => '¿Dónde está la sede de la AIPI?', 'a' => 'La AIPI tiene su sede en Madrid. Las notificaciones y comunicaciones se realizan preferentemente por vía electrónica a través de la sede electrónica de la AIPI, independientemente de dónde esté domiciliada la empresa sancionada.'],
    ],
  ],
  'barcelona' => [
    'nombre'    => 'Barcelona',
    'provincia' => 'Barcelona',
    'gentilicio'=> 'barcelonés',
    'empresas'  => '21.000',
    'plan_recomendado' => 'Company',
    'sectores'  => 'industria farmacéutica, moda, logística, tecnología y servicios financieros',
    'sector_destacado' => 'industria farmacéutica y tecnológica',
    'intro_extra' => 'Barcelona es la segunda ciudad con más empresas obligadas de España. El tejido industrial de la provincia —especialmente farmacéutico y logístico— incluye numerosas filiales de grupos multinacionales con canal de denuncias obligatorio también en España.',
    'faqs' => [
      ['q' => '¿Las empresas con sede en Barcelona y empleados en otras comunidades están obligadas?', 'a' => 'Sí. La obligación de la Ley 2/2023 aplica a nivel de entidad jurídica, no de centro de trabajo. Una empresa con sede en Barcelona y trabajadores en toda España está obligada si supera los 50 empleados en total.'],
      ['q' => '¿Las filiales de grupos multinacionales con sede en Barcelona necesitan canal propio?', 'a' => 'Depende. Si la filial española tiene más de 50 empleados propios, necesita canal individual o participar en el canal del grupo con cumplimiento específico para España. Las filiales de grupos que operan solo bajo normativa extranjera no se eximen del cumplimiento de la Ley 2/2023.'],
    ],
  ],
  'valencia' => [
    'nombre'    => 'Valencia',
    'provincia' => 'Valencia',
    'gentilicio'=> 'valenciano',
    'empresas'  => '11.500',
    'plan_recomendado' => 'Business',
    'sectores'  => 'exportación agroalimentaria, sector cerámico, automoción, logística portuaria y turismo',
    'sector_destacado' => 'agroalimentario y logístico',
    'intro_extra' => 'La economía valenciana combina grandes exportadoras del sector agroalimentario y cerámico —con plantillas que frecuentemente superan los 50 empleados— con un creciente ecosistema tecnológico. El puerto de Valencia genera además una cadena de obligados en logística y servicios portuarios.',
    'faqs' => [
      ['q' => '¿Las cooperativas agrarias valencianas están obligadas?', 'a' => 'Las cooperativas son personas jurídicas de derecho privado y están sujetas a la Ley 2/2023 si tienen 50 o más empleados (socios trabajadores + empleados por cuenta ajena). Las grandes cooperativas exportadoras suelen superar este umbral.'],
      ['q' => '¿Las empresas cerámicas de Castellón con centro en Valencia también deben tener canal?', 'a' => 'La obligación aplica a la entidad jurídica en conjunto, no por provincia. Si una empresa tiene centros en Castellón y Valencia y suma más de 50 empleados en total, está obligada independientemente de dónde tenga su domicilio social.'],
    ],
  ],
  'sevilla' => [
    'nombre'    => 'Sevilla',
    'provincia' => 'Sevilla',
    'gentilicio'=> 'sevillano',
    'empresas'  => '6.200',
    'plan_recomendado' => 'Business',
    'sectores'  => 'turismo, agroalimentario, administración pública, aeronáutica y sector inmobiliario',
    'sector_destacado' => 'turístico y aeronáutico',
    'intro_extra' => 'Sevilla alberga grandes operadores turísticos y hoteleros con plantillas que superan los 50 empleados, así como proveedores del sector aeronáutico (Airbus, Escribano…) que como sujetos de contratación pública tienen especial interés en acreditar el cumplimiento de la Ley 2/2023.',
    'faqs' => [
      ['q' => '¿Los hoteles y cadenas hoteleras de Sevilla están obligados?', 'a' => 'Sí, si tienen 50 o más empleados. Las grandes cadenas hoteleras suelen superar ampliamente este umbral. El canal de denuncias en hostelería requiere atención especial al acceso móvil, dado el perfil de trabajadores sin ordenador corporativo.'],
      ['q' => '¿Los proveedores de la Junta de Andalucía necesitan canal de denuncias?', 'a' => 'Sí si cumplen el umbral. Además, la infracción muy grave (no tener canal) conlleva la prohibición de contratar con el sector público hasta 3 años, lo que en Sevilla —con fuerte presencia de contratación pública— es un riesgo especialmente relevante.'],
    ],
  ],
  'bilbao' => [
    'nombre'    => 'Bilbao',
    'provincia' => 'Bizkaia',
    'gentilicio'=> 'bilbaíno',
    'empresas'  => '7.400',
    'plan_recomendado' => 'Company',
    'sectores'  => 'industria pesada, banca, siderurgia, energía y servicios profesionales',
    'sector_destacado' => 'bancario e industrial',
    'intro_extra' => 'El País Vasco concentra una de las densidades más altas de empresas industriales con más de 50 empleados de España. La fuerte presencia bancaria (BBVA, Kutxabank) y el tejido industrial hacen del área metropolitana de Bilbao una de las zonas con mayor proporción de obligados por la Ley 2/2023.',
    'faqs' => [
      ['q' => '¿Las empresas vascas acogidas al concierto económico están obligadas por la Ley 2/2023?', 'a' => 'Sí. La Ley 2/2023 es legislación estatal básica y se aplica en todo el territorio nacional, incluyendo las empresas del País Vasco independientemente de su régimen fiscal foral.'],
      ['q' => '¿Las cooperativas del grupo Mondragón necesitan canal de denuncias?', 'a' => 'Las cooperativas de Mondragón con más de 50 socios trabajadores o empleados están obligadas por la Ley 2/2023 como cualquier otra persona jurídica. Las que superen los 249 empleados no pueden compartir canal con las demás entidades del grupo sin cumplir los requisitos adicionales.'],
    ],
  ],
  'malaga' => [
    'nombre'    => 'Málaga',
    'provincia' => 'Málaga',
    'gentilicio'=> 'malagueño',
    'empresas'  => '4.800',
    'plan_recomendado' => 'Business',
    'sectores'  => 'turismo, tecnología, construcción, sector inmobiliario y servicios financieros',
    'sector_destacado' => 'tecnológico y turístico',
    'intro_extra' => 'Málaga ha emergido como polo tecnológico con la llegada de multinacionales a su Tech Hub. Empresas de alto crecimiento que alcanzan los 50 empleados en poco tiempo deben activar el canal de denuncias antes de superar el umbral, no después.',
    'faqs' => [
      ['q' => '¿Las empresas tecnológicas de nueva creación en Málaga cuándo están obligadas?', 'a' => 'Desde el momento en que superan los 50 empleados. No hay periodo de gracia desde que se cruza el umbral. Se recomienda activar el canal antes de llegar a 50 empleados para evitar el riesgo de sanción desde el primer día.'],
      ['q' => '¿Las promotoras inmobiliarias de la Costa del Sol están obligadas?', 'a' => 'Si tienen 50 o más empleados propios, sí. Las promotoras inmobiliarias que además gestionan fondos de inversión o actúan como agentes inmobiliarios pueden estar obligadas también como sujetos de prevención de blanqueo de capitales, independientemente del umbral de plantilla.'],
    ],
  ],
  'zaragoza' => [
    'nombre'    => 'Zaragoza',
    'provincia' => 'Zaragoza',
    'gentilicio'=> 'zaragozano',
    'empresas'  => '4.100',
    'plan_recomendado' => 'Business',
    'sectores'  => 'automoción, logística, agroalimentario, distribución y energías renovables',
    'sector_destacado' => 'logístico y automovilístico',
    'intro_extra' => 'Zaragoza es uno de los centros logísticos más importantes de España, con grandes operadores de almacenamiento y distribución que suelen superar los 50 empleados. La planta de Stellantis (ex-Opel) y su cadena de proveedores representan además un sector industrial con alta obligación de cumplimiento.',
    'faqs' => [
      ['q' => '¿Los centros logísticos de Zaragoza con plantilla temporal están obligados?', 'a' => 'La Ley 2/2023 no distingue entre trabajadores fijos y temporales para el cómputo del umbral. Si en cualquier momento del año la plantilla supera los 50 empleados, incluidos eventuales y de ETT en plantilla, la obligación aplica.'],
      ['q' => '¿Las empresas de energías renovables de Aragón necesitan canal de denuncias?', 'a' => 'Sí, si superan los 50 empleados. Además, las empresas del sector energético que gestionan infraestructuras críticas pueden tener obligaciones adicionales de reporte conforme a la normativa sectorial.'],
    ],
  ],
  'murcia' => [
    'nombre'    => 'Murcia',
    'provincia' => 'Murcia',
    'gentilicio'=> 'murciano',
    'empresas'  => '3.200',
    'plan_recomendado' => 'Business',
    'sectores'  => 'horticultura, exportación agroalimentaria, conservas, construcción y turismo',
    'sector_destacado' => 'agroalimentario exportador',
    'intro_extra' => 'La Región de Murcia tiene una de las concentraciones más altas de empresas exportadoras agroalimentarias de España. Las grandes cooperativas y sociedades del sector, con plantillas que frecuentemente superan los 50 empleados en temporada alta, están obligadas por la Ley 2/2023.',
    'faqs' => [
      ['q' => '¿Las empresas agrícolas murcianas con trabajadores temporales de campaña están obligadas?', 'a' => 'El criterio es la plantilla media del año, incluyendo trabajadores de temporada. Si habitualmente se supera el umbral de 50 empleados durante el año, la obligación aplica aunque fuera de campaña la plantilla sea inferior.'],
    ],
  ],
  'palma' => [
    'nombre'    => 'Palma de Mallorca',
    'provincia' => 'Illes Balears',
    'gentilicio'=> 'palmesano',
    'empresas'  => '3.600',
    'plan_recomendado' => 'Business',
    'sectores'  => 'turismo, hostelería, transporte aéreo, náutica y servicios financieros',
    'sector_destacado' => 'turístico y hotelero',
    'intro_extra' => 'Baleares concentra una altísima proporción de grandes cadenas hoteleras y operadores turísticos. Muchas empresas que son pequeñas en invierno superan los 50 empleados en temporada alta y deben tener el canal operativo durante todo el año.',
    'faqs' => [
      ['q' => '¿Las empresas turísticas de Baleares con temporalidad están obligadas?', 'a' => 'Sí, si en algún momento del ejercicio superan los 50 empleados. La obligación es permanente una vez que se supera el umbral, independientemente de la estacionalidad. El canal debe estar operativo todo el año.'],
    ],
  ],
  'las-palmas' => [
    'nombre'    => 'Las Palmas de Gran Canaria',
    'provincia' => 'Las Palmas',
    'gentilicio'=> 'grancanario',
    'empresas'  => '2.800',
    'plan_recomendado' => 'Business',
    'sectores'  => 'turismo, comercio exterior, pesca, logística portuaria y servicios financieros',
    'sector_destacado' => 'turístico y de comercio exterior',
    'intro_extra' => 'Canarias tiene una fiscalidad especial (REF, ZEC) que atrae empresas con actividad internacional. Los operadores del puerto de Las Palmas y las empresas de la Zona Especial Canaria con más de 50 empleados están obligados, y muchos tienen además presencia en varios países que requiere coordinación del canal.',
    'faqs' => [
      ['q' => '¿Las empresas de la Zona Especial Canaria (ZEC) están obligadas por la Ley 2/2023?', 'a' => 'Sí. El régimen fiscal especial de Canarias no exime del cumplimiento de la legislación laboral y de compliance. Las empresas ZEC con 50 o más empleados en España están obligadas a disponer de canal de denuncias.'],
    ],
  ],
  'alicante' => [
    'nombre'    => 'Alicante',
    'provincia' => 'Alicante',
    'gentilicio'=> 'alicantino',
    'empresas'  => '4.400',
    'plan_recomendado' => 'Business',
    'sectores'  => 'calzado, mármol, turismo, sector inmobiliario y textil',
    'sector_destacado' => 'calzado e industrial',
    'intro_extra' => 'La provincia de Alicante combina un potente tejido industrial (calzado en Elche, mármol en Novelda) con un sector turístico costero de primer orden. Las grandes empresas del clúster del calzado de Elda-Petrer y los operadores turísticos de Benidorm frecuentemente superan los 50 empleados.',
    'faqs' => [
      ['q' => '¿Las fábricas de calzado de Elche con más de 50 empleados están obligadas?', 'a' => 'Sí, sin excepción. La Ley 2/2023 aplica a cualquier empresa privada con 50 o más empleados independientemente de su sector. El sector del calzado alicantino tiene una alta proporción de medianas empresas en ese rango.'],
    ],
  ],
  'cordoba' => [
    'nombre'    => 'Córdoba',
    'provincia' => 'Córdoba',
    'gentilicio'=> 'cordobés',
    'empresas'  => '2.100',
    'plan_recomendado' => 'Starter',
    'sectores'  => 'agroalimentario, sector oleícola, turismo, administración pública y energía solar',
    'sector_destacado' => 'oleícola y agroalimentario',
    'intro_extra' => 'Córdoba es la capital mundial del aceite de oliva. Las grandes cooperativas oleícolas y las sociedades agroalimentarias exportadoras de la provincia frecuentemente alcanzan el umbral de obligación. El sector público cordobés (Diputación, municipios) también está obligado independientemente de la plantilla.',
    'faqs' => [
      ['q' => '¿Las cooperativas oleícolas de Córdoba están obligadas?', 'a' => 'Las cooperativas con 50 o más empleados o socios trabajadores sí. Muchas de las grandes cooperativas almazareras cordobesas superan ese umbral y deben tener canal de denuncias operativo.'],
    ],
  ],
  'valladolid' => [
    'nombre'    => 'Valladolid',
    'provincia' => 'Valladolid',
    'gentilicio'=> 'vallisoletano',
    'empresas'  => '2.900',
    'plan_recomendado' => 'Business',
    'sectores'  => 'automoción, agroalimentario, administración autonómica, energía y servicios',
    'sector_destacado' => 'automovilístico',
    'intro_extra' => 'Valladolid es el centro de la industria del automóvil de Castilla y León, con Renault y su extensa cadena de proveedores. Las empresas del clúster automovilístico tienen especial presión de cumplimiento porque sus clientes OEM exigen acreditación de compliance en sus auditorías de proveedor.',
    'faqs' => [
      ['q' => '¿Los proveedores de Renault Valladolid necesitan canal de denuncias?', 'a' => 'Si superan los 50 empleados, sí por imperativo legal. Además, Renault y otros OEM incluyen en sus auditorías de proveedores la verificación del canal de denuncias como parte del compliance corporativo. Tenerlo es obligación legal y también requisito comercial.'],
    ],
  ],
  'vigo' => [
    'nombre'    => 'Vigo',
    'provincia' => 'Pontevedra',
    'gentilicio'=> 'vigués',
    'empresas'  => '3.300',
    'plan_recomendado' => 'Business',
    'sectores'  => 'automoción, pesca, conservas, tecnología naval y logística portuaria',
    'sector_destacado' => 'automovilístico y pesquero',
    'intro_extra' => 'Vigo alberga la planta de Stellantis más productiva de Europa y uno de los puertos pesqueros más importantes del mundo. Ambos sectores generan una extensa cadena de proveedores y operadores logísticos que frecuentemente superan los 50 empleados.',
    'faqs' => [
      ['q' => '¿Las empresas conserveras gallegas necesitan canal de denuncias?', 'a' => 'Las conserveras con 50 o más empleados sí. El sector conservero gallego incluye empresas de tamaño mediano-grande que frecuentemente superan el umbral, especialmente en campaña de campaña de atún y sardina.'],
    ],
  ],
  'gijon' => [
    'nombre'    => 'Gijón',
    'provincia' => 'Asturias',
    'gentilicio'=> 'gijonés',
    'empresas'  => '2.200',
    'plan_recomendado' => 'Business',
    'sectores'  => 'siderurgia, química, logística portuaria, energía y servicios industriales',
    'sector_destacado' => 'industrial y siderúrgico',
    'intro_extra' => 'Asturias concentra grandes instalaciones industriales con plantillas superiores a los 50 empleados: ArcelorMittal, Arcelor, plantas químicas de Avilés y el puerto de El Musel. En sectores industriales con alto riesgo laboral y medioambiental, el canal de denuncias cumple además una función de alerta temprana especialmente valorada.',
    'faqs' => [
      ['q' => '¿Las instalaciones industriales SEVESO de Asturias necesitan canal de denuncias?', 'a' => 'Las instalaciones SEVESO con más de 50 empleados están obligadas por la Ley 2/2023. Además, la normativa de prevención de riesgos mayores exige canales de comunicación interna para accidentes e incidentes, que pueden integrarse con el canal de denuncias.'],
    ],
  ],
];

// ── Validar que el slug existe ──
if (!isset($cities[$city_slug])) {
  header('HTTP/1.1 404 Not Found');
  exit;
}

$city = $cities[$city_slug];

$page_title       = "Canal de Denuncias en {$city['nombre']} — Obligación, Costes y Cómo Activarlo · EticAlert";
$page_description = "¿Tu empresa en {$city['nombre']} está obligada a tener canal de denuncias? Guía actualizada 2026 sobre la Ley 2/2023 en la provincia de {$city['provincia']}: quién debe cumplir, plazos y cómo activarlo desde 9€/mes.";
$page_canonical   = "https://eticalert.com/canal-denuncias-" . str_replace('-', '-', $city_slug);

include __DIR__ . '/header.php';
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php foreach ($city['faqs'] as $i => $faq): ?>
    <?= $i > 0 ? ',' : '' ?>
    {
      "@type": "Question",
      "name": "<?= htmlspecialchars($faq['q'], ENT_QUOTES) ?>",
      "acceptedAnswer": {"@type": "Answer", "text": "<?= htmlspecialchars($faq['a'], ENT_QUOTES) ?>"}
    }
    <?php endforeach; ?>
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type":"ListItem","position":1,"name":"Inicio","item":"https://eticalert.com/"},
    {"@type":"ListItem","position":2,"name":"Canal de denuncias","item":"https://eticalert.com/canal-de-denuncias"},
    {"@type":"ListItem","position":3,"name":"<?= htmlspecialchars($city['nombre']) ?>","item":"<?= $page_canonical ?>"}
  ]
}
</script>

<main id="main-content">
  <div class="legal-page" style="padding-top:100px;">
    <div class="container">

      <nav class="breadcrumb" aria-label="Migas de pan">
        <a href="/">Inicio</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <a href="/canal-de-denuncias">Canal de denuncias</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <span><?= htmlspecialchars($city['nombre']) ?></span>
      </nav>

      <div class="article-content" style="margin:0 auto;">

        <h1>Canal de denuncias en <?= htmlspecialchars($city['nombre']) ?>: obligación, requisitos y cómo activarlo en 2026</h1>
        <p style="font-size:1.125rem;color:var(--text-secondary);margin:1rem 0 2rem;">Actualizado junio 2026 · Guía para empresas <?= $city['gentilicio'] ?>s</p>

        <p>Si tu empresa tiene sede o centros de trabajo en <?= htmlspecialchars($city['nombre']) ?> y supera los 50 empleados —o opera en un <a href="/cumples" style="color:var(--accent);">sector regulado</a>— tienes obligación legal de disponer de un canal de denuncias conforme a la <a href="/blog/ley-2-2023-canal-de-denuncias" style="color:var(--accent);">Ley 2/2023</a>. En la provincia de <?= htmlspecialchars($city['provincia']) ?> hay aproximadamente <strong><?= $city['empresas'] ?> empresas obligadas</strong>, con presencia destacada en <?= $city['sectores'] ?>.</p>

        <p><?= htmlspecialchars($city['intro_extra']) ?></p>

        <div style="background:rgba(74,222,128,0.08);border:1px solid var(--accent-border);border-radius:12px;padding:1.5rem;margin:2rem 0;">
          <p style="margin:0;font-weight:600;margin-bottom:0.5rem;">📋 En este artículo</p>
          <ul style="margin:0.5rem 0 0 1rem;color:var(--text-secondary);">
            <li><a href="#quien-esta-obligado" style="color:var(--accent);">¿Qué empresas de <?= $city['nombre'] ?> están obligadas?</a></li>
            <li><a href="#requisitos" style="color:var(--accent);">Qué debe incluir el canal según la ley</a></li>
            <li><a href="#plazos" style="color:var(--accent);">Plazos y sanciones</a></li>
            <li><a href="#como-activar" style="color:var(--accent);">Cómo activar el canal en tu empresa</a></li>
          </ul>
        </div>

        <h2 id="quien-esta-obligado">¿Qué empresas de <?= htmlspecialchars($city['nombre']) ?> están obligadas a tener canal de denuncias?</h2>

        <p>La obligación de la Ley 2/2023 aplica a cualquier empresa con domicilio social o centros de trabajo en España —incluida <?= htmlspecialchars($city['provincia']) ?>— que cumpla alguno de estos criterios:</p>

        <ul style="color:var(--text-secondary);line-height:1.9;">
          <li><strong>50 o más empleados</strong> (criterio general): la obligación aplica desde el día en que se supera el umbral.</li>
          <li><strong>Sector financiero</strong>: bancos, aseguradoras, gestoras de fondos, entidades de pago, fintech reguladas. Sin umbral de empleados.</li>
          <li><strong>Prevención del blanqueo de capitales</strong>: notarías, registros, asesorías fiscales, inmobiliarias, joyerías. Sin umbral.</li>
          <li><strong>Auditoría</strong>: firmas de auditoría de cualquier tamaño.</li>
          <li><strong>Administración pública</strong>: ayuntamientos, diputaciones, organismos autónomos. Sin umbral de empleados.</li>
        </ul>

        <p>¿No estás seguro si tu empresa está obligada? <a href="/cumples" style="color:var(--accent);font-weight:600;">Usa nuestra herramienta de verificación →</a></p>

        <h2 id="requisitos">Qué debe incluir el canal de denuncias según la Ley 2/2023</h2>

        <p>No basta con tener un buzón de correo o un formulario de contacto. La ley exige:</p>

        <div style="overflow-x:auto;margin:1.5rem 0;">
          <table style="width:100%;border-collapse:collapse;font-size:0.9rem;">
            <thead>
              <tr style="background:var(--bg-secondary);">
                <th style="padding:0.75rem;border:1px solid var(--border);text-align:left;">Requisito</th>
                <th style="padding:0.75rem;border:1px solid var(--border);">Referencia</th>
                <th style="padding:0.75rem;border:1px solid var(--border);">EticAlert</th>
              </tr>
            </thead>
            <tbody>
              <tr><td style="padding:0.75rem;border:1px solid var(--border);">Confidencialidad de la identidad del informante</td><td style="padding:0.75rem;border:1px solid var(--border);text-align:center;">Art. 10</td><td style="padding:0.75rem;border:1px solid var(--border);text-align:center;color:var(--accent);">✓</td></tr>
              <tr style="background:var(--bg-secondary);"><td style="padding:0.75rem;border:1px solid var(--border);">Comunicación anónima si el informante lo solicita</td><td style="padding:0.75rem;border:1px solid var(--border);text-align:center;">Art. 7</td><td style="padding:0.75rem;border:1px solid var(--border);text-align:center;color:var(--accent);">✓</td></tr>
              <tr><td style="padding:0.75rem;border:1px solid var(--border);">Acuse de recibo en 7 días hábiles</td><td style="padding:0.75rem;border:1px solid var(--border);text-align:center;">Art. 9.1</td><td style="padding:0.75rem;border:1px solid var(--border);text-align:center;color:var(--accent);">✓ Automático</td></tr>
              <tr style="background:var(--bg-secondary);"><td style="padding:0.75rem;border:1px solid var(--border);">Respuesta en máximo 3 meses</td><td style="padding:0.75rem;border:1px solid var(--border);text-align:center;">Art. 9.2</td><td style="padding:0.75rem;border:1px solid var(--border);text-align:center;color:var(--accent);">✓ Alerta automática</td></tr>
              <tr><td style="padding:0.75rem;border:1px solid var(--border);">RSII designado y notificado a la AIPI</td><td style="padding:0.75rem;border:1px solid var(--border);text-align:center;">Art. 8</td><td style="padding:0.75rem;border:1px solid var(--border);text-align:center;color:var(--accent);">✓ Guía incluida</td></tr>
              <tr style="background:var(--bg-secondary);"><td style="padding:0.75rem;border:1px solid var(--border);">Libro-registro de comunicaciones</td><td style="padding:0.75rem;border:1px solid var(--border);text-align:center;">Art. 26</td><td style="padding:0.75rem;border:1px solid var(--accent);">✓ Automático</td></tr>
              <tr><td style="padding:0.75rem;border:1px solid var(--border);">Política del Sistema Interno de Información</td><td style="padding:0.75rem;border:1px solid var(--border);text-align:center;">Art. 5</td><td style="padding:0.75rem;border:1px solid var(--border);text-align:center;color:var(--accent);">✓ Plantilla incluida</td></tr>
            </tbody>
          </table>
        </div>

        <h2 id="plazos">Plazos y sanciones para empresas de <?= htmlspecialchars($city['provincia']) ?></h2>

        <p>La Ley 2/2023 lleva en vigor desde marzo de 2023. La AIPI (Autoridad Independiente de Protección del Informante) está plenamente operativa desde febrero de 2026 y puede iniciar expedientes sancionadores en cualquier momento. No hay periodo de gracia.</p>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:1rem;margin:1.5rem 0;">
          <div style="background:rgba(239,68,68,0.06);border:1px solid rgba(239,68,68,0.2);border-radius:10px;padding:1.25rem;text-align:center;">
            <div style="font-size:1.5rem;font-weight:800;color:#dc2626;">1.000.000 €</div>
            <div style="font-size:0.8125rem;color:var(--text-secondary);margin-top:0.25rem;">Multa máx. muy grave<br>(no tener canal)</div>
          </div>
          <div style="background:rgba(245,158,11,0.06);border:1px solid rgba(245,158,11,0.2);border-radius:10px;padding:1.25rem;text-align:center;">
            <div style="font-size:1.5rem;font-weight:800;color:#d97706;">600.000 €</div>
            <div style="font-size:0.8125rem;color:var(--text-secondary);margin-top:0.25rem;">Multa máx. grave<br>(canal sin requisitos)</div>
          </div>
          <div style="background:rgba(74,222,128,0.06);border:1px solid var(--accent-border);border-radius:10px;padding:1.25rem;text-align:center;">
            <div style="font-size:1.5rem;font-weight:800;color:var(--accent);">9 €/mes</div>
            <div style="font-size:0.8125rem;color:var(--text-secondary);margin-top:0.25rem;">Canal conforme<br>con EticAlert Starter</div>
          </div>
        </div>

        <p>¿Quieres calcular tu exposición exacta? <a href="/calculadora-multas-aipi" style="color:var(--accent);font-weight:600;">Usa la calculadora de multas AIPI →</a></p>

        <h2 id="como-activar">Cómo activar el canal de denuncias en tu empresa de <?= htmlspecialchars($city['nombre']) ?></h2>

        <p>Con EticAlert puedes tener el canal operativo y conforme a la Ley 2/2023 en menos de 10 minutos, sin instalación ni consultor:</p>

        <ol style="color:var(--text-secondary);line-height:2.0;">
          <li><strong>Crea tu cuenta</strong> en EticAlert y elige el plan para tu tamaño de empresa.</li>
          <li><strong>Personaliza el canal</strong>: nombre de empresa, logo, categorías de denuncia.</li>
          <li><strong>Designa al RSII</strong> y notifícalo a la AIPI con el formulario que te guiamos a completar.</li>
          <li><strong>Publica la URL</strong> del canal en tu web corporativa e informa a los empleados.</li>
          <li><strong>Descarga la Política del SII</strong> generada automáticamente y preséntala al órgano de gobierno.</li>
        </ol>

        <div style="background:var(--bg-card);border:1px solid var(--accent-border);border-radius:16px;padding:2rem;margin:3rem 0;text-align:center;">
          <p style="font-size:1.125rem;font-weight:600;margin-bottom:0.75rem;">Canal de denuncias para empresas de <?= htmlspecialchars($city['nombre']) ?></p>
          <p style="color:var(--text-secondary);margin-bottom:1.5rem;">Plan <?= htmlspecialchars($city['plan_recomendado']) ?> recomendado para el perfil de empresa <?= $city['gentilicio'] ?>. Activación en minutos. Sin permanencia.</p>
          <a href="/registro" class="btn btn-primary">Activar el canal de denuncias →</a>
          <a href="/precios" class="btn btn-secondary" style="margin-left:1rem;">Ver planes y precios</a>
        </div>

        <!-- FAQs específicas de ciudad -->
        <h2>Preguntas frecuentes</h2>
        <?php foreach ($city['faqs'] as $faq): ?>
        <details style="border:1px solid var(--border);border-radius:8px;padding:1rem;margin:0.75rem 0;">
          <summary style="font-weight:600;cursor:pointer;"><?= htmlspecialchars($faq['q']) ?></summary>
          <p style="margin:0.75rem 0 0;color:var(--text-secondary);"><?= htmlspecialchars($faq['a']) ?></p>
        </details>
        <?php endforeach; ?>

        <details style="border:1px solid var(--border);border-radius:8px;padding:1rem;margin:0.75rem 0;">
          <summary style="font-weight:600;cursor:pointer;">¿La sede de la empresa debe estar en <?= htmlspecialchars($city['nombre']) ?> para estar obligada?</summary>
          <p style="margin:0.75rem 0 0;color:var(--text-secondary);">No. La obligación aplica a cualquier empresa que tenga empleados en España, independientemente de dónde esté su domicilio social. Una empresa con sede en Alemania y 60 empleados en <?= htmlspecialchars($city['nombre']) ?> está igualmente obligada por la Ley 2/2023 española.</p>
        </details>

        <p style="margin-top:2rem;font-size:0.875rem;color:var(--text-muted);">Recursos relacionados: <a href="/canal-de-denuncias" style="color:var(--accent);">Qué es el canal de denuncias</a> · <a href="/blog/ley-2-2023-canal-de-denuncias" style="color:var(--accent);">Guía Ley 2/2023</a> · <a href="/blog/rsii-guia-formulario-aipi" style="color:var(--accent);">Cómo notificar al RSII</a> · <a href="/calculadora-multas-aipi" style="color:var(--accent);">Calculadora de multas AIPI</a></p>

      </div>
    </div>
  </div>
</main>

<?php include __DIR__ . '/footer.php'; ?>
