<?php
$page_title       = 'Canal de Denuncias por Comunidad Autónoma | EticAlert';
$page_description = 'Guía 2026 con la normativa, autoridades y particularidades del canal de denuncias en cada comunidad autónoma de España.';
$page_canonical   = 'https://eticalert.com/canal-denuncias-comunidades';
include 'includes/header.php';
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Canal de denuncias por comunidad autónoma: guía completa 2026",
  "description": "Análisis de la obligación del canal de denuncias por cada comunidad autónoma española: sectores, particularidades legales, estimación de empresas obligadas y casos específicos.",
  "url": "https://eticalert.com/canal-denuncias-comunidades",
  "datePublished": "2026-06-03",
  "dateModified": "2026-06-03",
  "author": {"@type": "Organization", "name": "EticAlert"},
  "publisher": {"@type": "Organization", "name": "EticAlert", "url": "https://eticalert.com"},
  "inLanguage": "es-ES"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type":"ListItem","position":1,"name":"Inicio","item":"https://eticalert.com/"},
    {"@type":"ListItem","position":2,"name":"Canal de denuncias","item":"https://eticalert.com/canal-de-denuncias"},
    {"@type":"ListItem","position":3,"name":"Por comunidad autónoma","item":"https://eticalert.com/canal-denuncias-comunidades"}
  ]
}
</script>

<style>
.ccaa-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 1.25rem;
  margin: 2rem 0;
}
.ccaa-card {
  background: var(--bg-card);
  border: 1px solid var(--border);
  border-radius: 14px;
  padding: 1.5rem;
  scroll-margin-top: 100px;
  transition: border-color 0.2s;
}
.ccaa-card:target {
  border-color: var(--accent);
  box-shadow: 0 0 0 3px rgba(74,222,128,0.15);
}
.ccaa-name {
  font-size: 1.0625rem;
  font-weight: 800;
  margin-bottom: 0.25rem;
  display: flex;
  align-items: center;
  gap: 0.5rem;
}
.ccaa-empresas {
  font-size: 0.75rem;
  color: var(--text-muted);
  margin-bottom: 0.875rem;
}
.ccaa-body {
  font-size: 0.875rem;
  color: var(--text-secondary);
  line-height: 1.65;
  margin-bottom: 0.875rem;
}
.ccaa-alert {
  font-size: 0.8rem;
  background: rgba(245,158,11,0.08);
  border-left: 3px solid #d97706;
  padding: 0.5rem 0.75rem;
  border-radius: 0 6px 6px 0;
  color: var(--text-secondary);
  margin-top: 0.75rem;
}
.ccaa-tag {
  display: inline-block;
  font-size: 0.7rem;
  font-weight: 600;
  padding: 0.15rem 0.45rem;
  border-radius: 4px;
  background: rgba(74,222,128,0.1);
  color: var(--accent);
  margin-right: 0.25rem;
  margin-bottom: 0.25rem;
}
.jump-links {
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
  margin: 1.5rem 0 2.5rem;
}
.jump-link {
  font-size: 0.8125rem;
  color: var(--text-secondary);
  background: var(--bg-card);
  border: 1px solid var(--border);
  border-radius: 6px;
  padding: 0.25rem 0.625rem;
  text-decoration: none;
  transition: all 0.15s;
}
.jump-link:hover {
  border-color: var(--accent);
  color: var(--accent);
}
.summary-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 0.875rem;
  margin: 1.5rem 0;
}
.summary-table th {
  padding: 0.625rem 0.875rem;
  border: 1px solid var(--border);
  background: var(--bg-secondary);
  text-align: left;
  font-weight: 700;
}
.summary-table td {
  padding: 0.625rem 0.875rem;
  border: 1px solid var(--border);
  color: var(--text-secondary);
  vertical-align: top;
}
</style>

<main id="main-content">

  <!-- HERO -->
  <section style="padding:120px 0 50px;">
    <div class="container" style="max-width:900px;">
      <nav class="breadcrumb" aria-label="Migas de pan">
        <a href="/">Inicio</a>
        <span class="breadcrumb-sep">›</span>
        <a href="/canal-de-denuncias">Canal de denuncias</a>
        <span class="breadcrumb-sep">›</span>
        <span>Por comunidad autónoma</span>
      </nav>

      <h1 class="fade-up" style="font-size:clamp(1.625rem,4vw,2.25rem);margin:1.25rem 0 1rem;">
        Canal de denuncias por comunidad autónoma: guía 2026
      </h1>
      <p class="fade-up" style="font-size:1.0625rem;color:var(--text-secondary);max-width:680px;margin-bottom:1.25rem;">
        La <a href="/blog/ley-2-2023-canal-de-denuncias" style="color:var(--accent);">Ley 2/2023</a> es legislación estatal y aplica en todo el territorio nacional. Pero el perfil de empresas obligadas, los sectores dominantes y las particularidades locales varían significativamente entre comunidades autónomas. Esta guía analiza la situación en cada una de las 17 CCAA.
      </p>
      <p class="fade-up" style="font-size:0.875rem;color:var(--text-muted);">
        ¿Buscas información específica de tu ciudad? Guía propia para
        <a href="/canal-denuncias-madrid" style="color:var(--accent);">Madrid</a> y
        <a href="/canal-denuncias-barcelona" style="color:var(--accent);">Barcelona</a>.
        Resto de ciudades por comunidad autónoma:
        <a href="#comunitat-valenciana" style="color:var(--accent);">Valencia</a>,
        <a href="#andalucia" style="color:var(--accent);">Sevilla</a>,
        <a href="#pais-vasco" style="color:var(--accent);">Bilbao</a>,
        <a href="#andalucia" style="color:var(--accent);">Málaga</a>,
        <a href="#aragon" style="color:var(--accent);">Zaragoza</a>,
        <a href="#murcia" style="color:var(--accent);">Murcia</a>,
        <a href="#baleares" style="color:var(--accent);">Palma de Mallorca</a>,
        <a href="#canarias" style="color:var(--accent);">Las Palmas de Gran Canaria</a>,
        <a href="#comunitat-valenciana" style="color:var(--accent);">Alicante</a>,
        <a href="#andalucia" style="color:var(--accent);">Córdoba</a>,
        <a href="#castilla-y-leon" style="color:var(--accent);">Valladolid</a>,
        <a href="#galicia" style="color:var(--accent);">Vigo</a> y
        <a href="#asturias" style="color:var(--accent);">Gijón</a>.
      </p>

      <!-- Jump links -->
      <div class="jump-links fade-up">
        <?php
        $ccaas_nav = ['andalucia'=>'Andalucía','aragon'=>'Aragón','asturias'=>'Asturias','baleares'=>'Baleares',
          'canarias'=>'Canarias','cantabria'=>'Cantabria','castilla-la-mancha'=>'Castilla-La Mancha',
          'castilla-y-leon'=>'Castilla y León','cataluna'=>'Cataluña','comunitat-valenciana'=>'C. Valenciana',
          'extremadura'=>'Extremadura','galicia'=>'Galicia','la-rioja'=>'La Rioja','murcia'=>'Murcia',
          'navarra'=>'Navarra','pais-vasco'=>'País Vasco'];
        foreach ($ccaas_nav as $id => $name): ?>
        <a href="#<?= $id ?>" class="jump-link"><?= $name ?></a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- TABLA RESUMEN -->
  <section style="padding:0 0 50px;">
    <div class="container" style="max-width:900px;">
      <h2 style="font-size:1.25rem;margin-bottom:0.5rem;">Resumen: empresas obligadas por CCAA</h2>
      <p style="font-size:0.875rem;color:var(--text-muted);margin-bottom:1rem;">Estimaciones basadas en datos del DIRCE (INE). No incluye sujetos obligados PBC ni entidades del sector público.</p>
      <div style="overflow-x:auto;">
        <table class="summary-table">
          <thead>
            <tr>
              <th>Comunidad Autónoma</th>
              <th>Empresas 50+ emp. (est.)</th>
              <th>Sector más afectado</th>
              <th>Particularidad</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $summary = [
              ['Andalucía',         '~11.500', 'Turismo y hostelería',      'Alta estacionalidad; sector público muy grande'],
              ['Aragón',            '~3.800',  'Logística y automoción',    'Hub logístico nacional; Stellantis Zaragoza'],
              ['Asturias',          '~2.100',  'Industria pesada',          'Instalaciones SEVESO: doble obligación'],
              ['Baleares',          '~3.200',  'Hoteles y turismo',         'Hoteles superan umbral solo en temporada alta'],
              ['Canarias',          '~2.700',  'Turismo y comercio',        'ZEC no exime de Ley 2/2023'],
              ['Cantabria',         '~1.400',  'Industria alimentaria',     'Nestlé y Solvay como referencia del tejido'],
              ['Castilla-La Mancha','~2.900',  'Logística y renovables',    'Corredor Madrid-Valencia concentra operadores'],
              ['Castilla y León',   '~4.200',  'Automoción y agroalimentario','Renault Valladolid: cadena de proveedores'],
              ['Cataluña',          '~21.000', 'Farmacéutica y logística',  'APDCAT: autoridad propia de protección de datos'],
              ['C. Valenciana',     '~11.500', 'Cerámica y agroexportación','Port de València: operadores logísticos'],
              ['Extremadura',       '~1.000',  'Agroalimentario y renovables','Pocas grandes empresas privadas; cooperativas'],
              ['Galicia',           '~4.800',  'Automoción y alimentario',  'Inditex (Arteixo) y Stellantis Vigo'],
              ['La Rioja',          '~700',    'Vitivinícola y agroalimentario','Bodegas con +50 emp. en vendimia'],
              ['Madrid',            '~29.000', 'Finanzas y tecnología',     '<a href="/canal-denuncias-madrid" style="color:var(--accent);">Ver guía Madrid →</a>'],
              ['Murcia',            '~3.200',  'Agroexportación',           'Plantilla variable en campaña'],
              ['Navarra',           '~3.100',  'Automoción e industria',    'Volkswagen Pamplona: cadena de proveedores'],
              ['País Vasco',        '~7.200',  'Banca e industria pesada',  'Concierto económico no exime de la ley'],
            ];
            foreach ($summary as $i => $r): ?>
            <tr <?= $i % 2 === 0 ? '' : 'style="background:var(--bg-secondary);"' ?>>
              <td style="font-weight:600;"><?= $r[0] ?></td>
              <td><?= $r[1] ?></td>
              <td><?= $r[2] ?></td>
              <td style="font-size:0.8125rem;"><?= $r[3] ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- DETALLE POR CCAA -->
  <section style="padding:0 0 80px;">
    <div class="container" style="max-width:900px;">
      <h2 style="font-size:1.375rem;margin-bottom:2rem;">Análisis por comunidad autónoma</h2>

      <div class="ccaa-grid">

        <?php
        $ccaas = [

          'andalucia' => [
            'nombre'   => 'Andalucía',
            'bandera'  => '🌞',
            'empresas' => '~11.500 empresas con 50+ empleados',
            'sectores' => ['Turismo','Hostelería','Agroalimentario','Sector público','Logística'],
            'cuerpo'   => 'Andalucía es la comunidad con mayor número de empresas del sector turístico y hostelero con plantillas superiores a 50 empleados. La Junta de Andalucía, diputaciones y ayuntamientos de más de 10.000 habitantes están obligados independientemente de la plantilla. El sector público es de los más grandes de España en proporción al tejido productivo.',
            'alerta'   => 'Alta estacionalidad: hoteles y operadores turísticos que en temporada baja tienen menos de 50 empleados pueden superar el umbral en verano. La obligación aplica si en algún momento del año se supera el límite.',
          ],

          'aragon' => [
            'nombre'   => 'Aragón',
            'bandera'  => '🏔️',
            'empresas' => '~3.800 empresas con 50+ empleados',
            'sectores' => ['Logística','Automoción','Energías renovables','Agroalimentario','Cerámica'],
            'cuerpo'   => 'Aragón se ha convertido en el principal hub logístico de España gracias a su posición geográfica central. Amazon, XPO, Lidl y decenas de operadores logísticos tienen instalaciones con más de 50 empleados en el área de Zaragoza. La planta de Stellantis (antigua Opel) y su cadena de proveedores representan otro foco de obligados. El creciente sector de energías renovables (parques eólicos y solares) incorpora nuevas empresas al universo de obligados.',
            'alerta'   => 'Los operadores de parques renovables con instalaciones en Aragón deben verificar si sus empleados en contratas y subcontratas cuentan para el umbral del canal de denuncias de la empresa principal.',
          ],

          'asturias' => [
            'nombre'   => 'Asturias',
            'bandera'  => '⚙️',
            'empresas' => '~2.100 empresas con 50+ empleados',
            'sectores' => ['Siderurgia','Química','Industria pesada','Minería','Farmacéutica'],
            'cuerpo'   => 'Asturias concentra algunas de las instalaciones industriales más grandes de España: ArcelorMittal (Avilés y Gijón), Thyssenkrupp y varias plantas químicas de Avilés. Muchas de estas instalaciones son también SEVESO (alto riesgo de accidentes graves), lo que genera una doble capa de obligaciones de comunicación interna: la del canal de denuncias de la Ley 2/2023 y la de comunicación de incidentes de la normativa SEVESO.',
            'alerta'   => 'Las instalaciones SEVESO con más de 50 empleados tienen doble obligación: canal de denuncias (Ley 2/2023) + sistemas de comunicación de incidentes SEVESO III. Ambos pueden integrarse pero tienen requisitos distintos.',
          ],

          'baleares' => [
            'nombre'   => 'Baleares',
            'bandera'  => '🏖️',
            'empresas' => '~3.200 empresas con 50+ empleados',
            'sectores' => ['Hotelería','Turismo','Náutica','Construcción','Comercio'],
            'cuerpo'   => 'Baleares tiene las sedes corporativas de algunas de las cadenas hoteleras más grandes del mundo: Meliá Hotels, Iberostar, Barceló y Riu, todas con más de 50 empleados y obligadas por la Ley 2/2023. La peculiaridad balear es la alta estacionalidad: muchas empresas turísticas duplican o triplican su plantilla entre mayo y octubre. El canal de denuncias debe estar operativo todo el año, independientemente de si la empresa está en temporada alta o baja.',
            'alerta'   => 'Si tu empresa supera los 50 empleados en temporada alta, el canal debe estar activo durante todo el año — no solo durante la temporada. Los informantes tienen derecho a acceso continuo.',
          ],

          'canarias' => [
            'nombre'   => 'Canarias',
            'bandera'  => '🌋',
            'empresas' => '~2.700 empresas con 50+ empleados',
            'sectores' => ['Turismo','Comercio exterior','Logística portuaria','Pesca','Renovables'],
            'cuerpo'   => 'Canarias tiene un régimen fiscal especial (REF) y la Zona Especial Canaria (ZEC) que atrae empresas con actividad internacional. Ninguno de estos regímenes exime del cumplimiento de la Ley 2/2023. Las empresas ZEC con más de 50 empleados en España están plenamente obligadas. Los grandes puertos de Las Palmas y Santa Cruz de Tenerife generan una cadena de operadores logísticos y de servicios con plantillas relevantes. El sector turístico —dominado por grandes complejos hoteleros— es el principal foco de obligados.',
            'alerta'   => 'Las empresas con sede en Canarias y empleados en la Península también computan como una sola entidad para el umbral de 50 trabajadores. El canal debe ser accesible para todos los empleados, independientemente de su ubicación geográfica.',
          ],

          'cantabria' => [
            'nombre'   => 'Cantabria',
            'bandera'  => '🏭',
            'empresas' => '~1.400 empresas con 50+ empleados',
            'sectores' => ['Industria alimentaria','Química','Farmacéutica','Construcción','Turismo'],
            'cuerpo'   => 'Cantabria tiene un tejido industrial relativamente concentrado en grandes instalaciones: Nestlé en Santander, Solvay en Torrelavega y varias empresas del sector lácteo y derivados. La presencia de industria química (Solvay es una de las plantas más grandes de España en ese sector) convierte a Cantabria en otra comunidad con solapamiento entre la Ley 2/2023 y la normativa SEVESO. El sector farmacéutico (laboratorio IFAC, entre otros) también aporta un número significativo de obligados.',
            'alerta'   => 'Las empresas del sector lácteo cooperativista en Cantabria deben revisar si sus socios trabajadores cuentan para el umbral, especialmente en las grandes cooperativas de recogida de leche.',
          ],

          'castilla-la-mancha' => [
            'nombre'   => 'Castilla-La Mancha',
            'bandera'  => '🚛',
            'empresas' => '~2.900 empresas con 50+ empleados',
            'sectores' => ['Logística','Energías renovables','Agroalimentario','Vitivinícola','Construcción'],
            'cuerpo'   => 'Castilla-La Mancha es el corredor logístico que conecta Madrid con Valencia y el litoral mediterráneo. Inditex tiene varias plataformas logísticas en la región, así como Amazon y numerosos operadores de transporte. El sector de energías renovables ha crecido exponencialmente: la comunidad es una de las que más parques eólicos y solares tiene instalados, con las empresas promotoras y de mantenimiento como nuevo foco de obligados. La industria vitivinícola (DO La Mancha, la mayor DO del mundo en superficie) incluye bodegas con más de 50 empleados.',
            'alerta'   => 'Las plataformas logísticas con alta rotación de personal temporal deben contar todos los trabajadores, incluidos los de ETT y los eventuales de campaña, para el cómputo del umbral.',
          ],

          'castilla-y-leon' => [
            'nombre'   => 'Castilla y León',
            'bandera'  => '🍷',
            'empresas' => '~4.200 empresas con 50+ empleados',
            'sectores' => ['Automoción','Agroalimentario','Vitivinícola','Sector público','Energía'],
            'cuerpo'   => 'Castilla y León tiene en Renault Valladolid su empresa industrial más emblemática — la planta más productiva de Renault en Europa — y una extensa cadena de proveedores tier 1 y tier 2 en toda la región. El sector vitivinícola (DO Ribera del Duero, DO Rueda, DO Bierzo) incluye bodegas que en campaña de vendimia superan el umbral de 50 empleados. La universidad pública (cinco universidades con miles de empleados) y la administración autonómica son también obligados relevantes.',
            'alerta'   => 'Los proveedores de Renault tienen un incentivo adicional para implantar el canal: Renault incluye la acreditación de compliance (incluyendo canal de denuncias) en sus auditorías de proveedor. Tenerlo es obligación legal y requisito comercial.',
          ],

          'cataluna' => [
            'nombre'   => 'Cataluña',
            'bandera'  => '💊',
            'empresas' => '~21.000 empresas con 50+ empleados',
            'sectores' => ['Farmacéutica','Moda','Logística','Automoción','Tecnología','Finanzas'],
            'cuerpo'   => 'Cataluña tiene la segunda economía más grande de España y la mayor concentración de filiales de multinacionales. Empresas como Grifols, Almirall, Mango, Desigual, Seat (Volkswagen), Amazon, y centenares de empresas farmacéuticas y tecnológicas tienen su sede o principales operaciones aquí. Una particularidad relevante: Cataluña tiene su propia autoridad de protección de datos (APDCAT) que supervisa los aspectos de privacidad del canal de denuncias en entidades bajo su jurisdicción (Generalitat y entidades locales catalanas), aunque la AIPI mantiene la supervisión general del cumplimiento de la Ley 2/2023.',
            'alerta'   => 'Las empresas catalanas con empleados en el resto de España tienen un canal que debe ser accesible para todos. La APDCAT puede intervenir en aspectos de protección de datos del canal en entidades bajo su jurisdicción, pero no sustituye a la AIPI en materia sancionadora.',
          ],

          'comunitat-valenciana' => [
            'nombre'   => 'Comunitat Valenciana',
            'bandera'  => '🍊',
            'empresas' => '~11.500 empresas con 50+ empleados',
            'sectores' => ['Cerámica','Agroexportación','Logística portuaria','Automoción','Calzado'],
            'cuerpo'   => 'La Comunitat Valenciana combina tres focos principales de obligados: el clúster cerámico de Castellón (capital mundial de la cerámica con grandes productoras como Porcelanosa, Keraben o Roca), el sector agroexportador (citricultura, horticultura con empresas que mueven miles de toneladas de producto) y el área metropolitana de Valencia con Mercadona —la mayor empresa de distribución de España, con sede en Valencia— como referencia del tejido empresarial. El Port de València genera además una extensa cadena de operadores logísticos y agentes marítimos.',
            'alerta'   => 'Mercadona tiene más de 100.000 empleados y está plenamente obligada. Su modelo de proveedor "totaler" ejerce presión indirecta sobre sus proveedores para que cumplan con estándares de compliance, incluido el canal de denuncias.',
          ],

          'extremadura' => [
            'nombre'   => 'Extremadura',
            'bandera'  => '🐖',
            'empresas' => '~1.000 empresas con 50+ empleados',
            'sectores' => ['Agroalimentario','Renovables','Sector público','Turismo','Corcho'],
            'cuerpo'   => 'Extremadura tiene la menor densidad de grandes empresas privadas de España, lo que implica que el sector público (Junta de Extremadura, diputaciones, hospitales) es el principal foco de obligados. En el sector privado destacan las industrias del ibérico (Dehesa de Extremadura, Covap…), el corcho y el sector de energías renovables, que crece con rapidez. Las cooperativas agroalimentarias de gran tamaño también deben verificar si superan el umbral.',
            'alerta'   => 'En Extremadura, los ayuntamientos de más de 10.000 habitantes y las mancomunidades también están obligados. La AIPI puede iniciar inspecciones en entidades públicas de cualquier CCAA.',
          ],

          'galicia' => [
            'nombre'   => 'Galicia',
            'bandera'  => '🐟',
            'empresas' => '~4.800 empresas con 50+ empleados',
            'sectores' => ['Distribución textil','Automoción','Pesca y conservas','Agroalimentario','Energía'],
            'cuerpo'   => 'Galicia tiene dos grandes focos industriales: Inditex (Zara, Massimo Dutti, Pull&Bear, Bershka, entre otras) con sede central en Arteixo (A Coruña), con miles de empleados en la región, y Stellantis en Vigo con una de las plantas de producción de vehículos más grandes de Europa. La industria pesquera y conservera —con cooperativas y empresas de transformación como Jealsa, Pescanova o Calvo— representa otro foco importante. El sector eólico marino (offshore wind) está generando nuevas inversiones con grandes empresas en la región.',
            'alerta'   => 'Las cooperativas pesqueras gallegas con más de 50 socios trabajadores o empleados están obligadas. El modelo cooperativo no exime de la Ley 2/2023.',
          ],

          'la-rioja' => [
            'nombre'   => 'La Rioja',
            'bandera'  => '🍇',
            'empresas' => '~700 empresas con 50+ empleados',
            'sectores' => ['Vitivinícola','Agroalimentario','Conservas','Calzado','Química'],
            'cuerpo'   => 'La Rioja es la comunidad más pequeña y la que menos obligados tiene en términos absolutos. Su economía gira en torno a la DOCa Rioja — la denominación de origen más importante de España en valor exportado — con bodegas como CVNE, Marqués de Riscal, Muga o La Rioja Alta que en algunos casos superan los 50 empleados. El sector de conservas vegetales y la industria del calzado aportan obligados adicionales.',
            'alerta'   => 'Las bodegas que solo superan el umbral durante la vendimia deben tener el canal activo todo el año. La obligación no es estacional aunque la plantilla lo sea.',
          ],

          'murcia' => [
            'nombre'   => 'Murcia',
            'bandera'  => '🫑',
            'empresas' => '~3.200 empresas con 50+ empleados',
            'sectores' => ['Horticultura','Agroexportación','Logística','Cerámica','Turismo'],
            'cuerpo'   => 'Murcia es la primera región exportadora de hortalizas y frutas de España. Grandes grupos agroexportadores como Grupo Fuertes, García Carrión o Nomdedeu tienen plantillas superiores a 50 empleados y están plenamente obligados. La cerámica de Totana y Lorca aporta obligados adicionales. La alta dependencia de trabajadores de campaña hace que muchas empresas superen el umbral en periodos de siembra y recolección, lo que activa la obligación de manera continua.',
            'alerta'   => 'Las empresas de la Región de Murcia que contratan trabajadores de temporada extranjeros también deben asegurarse de que el canal es accesible en los idiomas de sus empleados, aunque la ley no lo exige explícitamente, es una buena práctica para que el canal sea efectivo.',
          ],

          'navarra' => [
            'nombre'   => 'Navarra',
            'bandera'  => '🚗',
            'empresas' => '~3.100 empresas con 50+ empleados',
            'sectores' => ['Automoción','Industria alimentaria','Energías renovables','Healthcare','Aeronáutica'],
            'cuerpo'   => 'Navarra tiene en la planta de Volkswagen en Pamplona (Landaben) el motor industrial de su economía, con más de 5.000 empleados directos y una extensa cadena de proveedores tier 1 y tier 2. La Clínica Universidad de Navarra, el Complejo Hospitalario de Navarra y varias empresas de biotecnología y dispositivos médicos aportan otro foco de obligados en el sector sanitario. Las energías renovables (Navarra fue pionera en energía eólica en España) generan empresas de O&M con plantillas relevantes.',
            'alerta'   => 'Los proveedores de Volkswagen Navarra tienen incentivos similares a los de Renault en Castilla y León: las auditorías de proveedor incluyen verificación de compliance. El canal de denuncias es verificado en las auditorías IATF 16949 que realizan los OEM.',
          ],

          'pais-vasco' => [
            'nombre'   => 'País Vasco',
            'bandera'  => '🏦',
            'empresas' => '~7.200 empresas con 50+ empleados',
            'sectores' => ['Banca','Industria pesada','Automoción','Energía','Tecnología'],
            'cuerpo'   => 'El País Vasco tiene la mayor renta per cápita de España y uno de los tejidos industriales más densos. La banca (BBVA tiene sede corporativa en Bilbao, Kutxabank y Laboral Kutxa son entidades vascas de primer nivel) está plenamente obligada. El grupo Mondragón — la mayor cooperativa del mundo — tiene decenas de sociedades con más de 50 empleados, cada una obligada individualmente. La industria pesada del corredor del Nervión (siderurgia, maquinaria, fabricación de trenes en CAF) y el sector de fabricación de componentes de automoción completan el universo de obligados.',
            'alerta'   => 'El concierto económico vasco no exime del cumplimiento de la Ley 2/2023. Las empresas vascas siguen la normativa estatal en su integridad. Las cooperativas de Mondragón necesitan canal por entidad cooperativa (no basta con uno para todo el grupo corporativo).',
          ],

        ];

        foreach ($ccaas as $id => $ccaa): ?>
        <div class="ccaa-card" id="<?= $id ?>">
          <div class="ccaa-name">
            <span><?= $ccaa['bandera'] ?></span>
            <?= htmlspecialchars($ccaa['nombre']) ?>
          </div>
          <div class="ccaa-empresas"><?= htmlspecialchars($ccaa['empresas']) ?></div>
          <div style="margin-bottom:0.625rem;">
            <?php foreach ($ccaa['sectores'] as $s): ?>
            <span class="ccaa-tag"><?= $s ?></span>
            <?php endforeach; ?>
          </div>
          <div class="ccaa-body"><?= htmlspecialchars($ccaa['cuerpo']) ?></div>
          <?php if (!empty($ccaa['alerta'])): ?>
          <div class="ccaa-alert">⚠️ <?= htmlspecialchars($ccaa['alerta']) ?></div>
          <?php endif; ?>
        </div>
        <?php endforeach; ?>

      </div><!-- .ccaa-grid -->

    </div>
  </section>

  <!-- PREGUNTAS COMUNES -->
  <section style="padding:60px 0;background:var(--bg-secondary);border-top:1px solid var(--border);border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:860px;">
      <h2 style="font-size:1.375rem;margin-bottom:2rem;">Preguntas frecuentes sobre la obligación por comunidad autónoma</h2>

      <details style="border:1px solid var(--border);border-radius:8px;padding:1rem;margin:0.75rem 0;background:var(--bg-card);">
        <summary style="font-weight:600;cursor:pointer;">¿Puede mi comunidad autónoma tener normativa propia además de la Ley 2/2023?</summary>
        <p style="margin:0.75rem 0 0;color:var(--text-secondary);">Sí. La Ley 2/2023 es la normativa básica estatal. Varias CCAA están desarrollando o tienen ya legislación propia para el sector público autonómico (Junta, Generalitat, Diputaciones…). Sin embargo, para las empresas privadas la norma aplicable es siempre la Ley 2/2023 estatal y la supervisora es la AIPI, no un organismo autonómico.</p>
      </details>
      <details style="border:1px solid var(--border);border-radius:8px;padding:1rem;margin:0.75rem 0;background:var(--bg-card);">
        <summary style="font-weight:600;cursor:pointer;">¿Una empresa con empleados en varias comunidades autónomas necesita un canal por cada CCAA?</summary>
        <p style="margin:0.75rem 0 0;color:var(--text-secondary);">No. La obligación es por entidad jurídica, no por comunidad autónoma ni por centro de trabajo. Una empresa con empleados en Cataluña, Madrid y Andalucía necesita un solo canal accesible para todos sus empleados, independientemente de dónde estén ubicados.</p>
      </details>
      <details style="border:1px solid var(--border);border-radius:8px;padding:1rem;margin:0.75rem 0;background:var(--bg-card);">
        <summary style="font-weight:600;cursor:pointer;">¿Los ayuntamientos y entidades locales de todas las CCAA están obligados?</summary>
        <p style="margin:0.75rem 0 0;color:var(--text-secondary);">Todos los municipios de más de 10.000 habitantes y sus organismos dependientes están obligados, independientemente de la comunidad autónoma. Los de menos de 10.000 habitantes pueden compartir canal con otros municipios o con la diputación provincial.</p>
      </details>
      <details style="border:1px solid var(--border);border-radius:8px;padding:1rem;margin:0.75rem 0;background:var(--bg-card);">
        <summary style="font-weight:600;cursor:pointer;">¿Cómo afecta el concierto económico vasco o el convenio navarro a la obligación?</summary>
        <p style="margin:0.75rem 0 0;color:var(--text-secondary);">El concierto económico y el convenio navarro son regímenes fiscales especiales, no exenciones de legislación laboral o de compliance. La Ley 2/2023 aplica íntegramente en País Vasco y Navarra. La supervisora para empresas privadas sigue siendo la AIPI estatal, no un organismo foral.</p>
      </details>

    </div>
  </section>

  <!-- CTA -->
  <section style="padding:70px 0;">
    <div class="container" style="max-width:620px;text-align:center;">
      <h2 style="font-size:1.5rem;margin-bottom:0.875rem;">¿Tu empresa está obligada?</h2>
      <p style="color:var(--text-secondary);margin-bottom:2rem;">Compruébalo en segundos con nuestra herramienta de verificación o activa el canal directamente.</p>
      <div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;">
        <a href="/cumples" class="btn btn-primary">Comprobar si estoy obligado</a>
        <a href="/registro" class="btn btn-secondary">Activar el canal ahora</a>
      </div>
      <p style="margin-top:1.25rem;font-size:0.8125rem;color:var(--text-muted);">
        <a href="/canal-denuncias-madrid" style="color:var(--accent);">Madrid</a> ·
        <a href="/canal-denuncias-barcelona" style="color:var(--accent);">Barcelona</a> ·
        <a href="#comunitat-valenciana" style="color:var(--accent);">Valencia</a> ·
        <a href="#andalucia" style="color:var(--accent);">Sevilla</a> ·
        <a href="#pais-vasco" style="color:var(--accent);">Bilbao</a> ·
        <a href="#andalucia" style="color:var(--accent);">Málaga</a> ·
        <a href="#aragon" style="color:var(--accent);">Zaragoza</a> ·
        <a href="#murcia" style="color:var(--accent);">Murcia</a> ·
        <a href="#baleares" style="color:var(--accent);">Palma</a> ·
        <a href="#canarias" style="color:var(--accent);">Las Palmas</a> ·
        <a href="#comunitat-valenciana" style="color:var(--accent);">Alicante</a> ·
        <a href="#andalucia" style="color:var(--accent);">Córdoba</a> ·
        <a href="#castilla-y-leon" style="color:var(--accent);">Valladolid</a> ·
        <a href="#galicia" style="color:var(--accent);">Vigo</a> ·
        <a href="#asturias" style="color:var(--accent);">Gijón</a> ·
        <a href="/calculadora-multas-aipi" style="color:var(--accent);">Calculadora de multas</a> ·
        <a href="/radar-aipi" style="color:var(--accent);">Radar AIPI</a>
      </p>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
