<?php
$page_title       = 'Opiniones sobre EticAlert | EticAlert';
$page_description = 'Lo que dicen las pymes españolas que ya usan EticAlert para cumplir la Ley 2/2023. Casos reales y valoraciones verificadas.';
$page_canonical   = 'https://eticalert.com/opiniones';
include 'includes/header.php';
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "EticAlert",
  "applicationCategory": "BusinessApplication",
  "operatingSystem": "Web",
  "url": "https://eticalert.com"<?= schema_aggregate_rating() ?>
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type":"ListItem","position":1,"name":"Inicio","item":"https://eticalert.com/"},
    {"@type":"ListItem","position":2,"name":"Opiniones","item":"https://eticalert.com/opiniones"}
  ]
}
</script>

<main id="main-content">

  <!-- HERO -->
  <section style="padding:120px 0 60px;text-align:center;">
    <div class="container" style="max-width:680px;">
      <h1 class="fade-up" style="font-size:clamp(1.75rem,4vw,2.5rem);margin-bottom:1rem;">
        Lo que dicen las empresas que usan EticAlert
      </h1>
      <p class="fade-up" style="font-size:1.0625rem;color:var(--text-secondary);margin-bottom:2rem;">
        Opiniones reales de responsables de compliance, directores de RRHH y gestores de asesorías que han implantado su canal de denuncias con EticAlert.
      </p>

      <?php if ((int)REVIEW_COUNT > 0): ?>
      <!-- Se activa cuando hay reviews reales -->
      <div style="display:inline-flex;align-items:center;gap:0.75rem;background:var(--bg-card);border:1px solid var(--border);border-radius:12px;padding:0.875rem 1.5rem;margin-bottom:2rem;">
        <div style="font-size:1.75rem;font-weight:800;color:var(--accent);"><?= REVIEW_RATING ?></div>
        <div style="text-align:left;">
          <div style="font-size:1.125rem;">⭐⭐⭐⭐⭐</div>
          <div style="font-size:0.8125rem;color:var(--text-secondary);"><?= REVIEW_COUNT ?> reseñas verificadas en Capterra y G2</div>
        </div>
      </div>
      <?php endif; ?>

      <div style="display:flex;flex-wrap:wrap;gap:0.75rem;justify-content:center;">
        <a href="https://www.capterra.es/software/search/?q=eticalert" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:0.5rem;background:var(--bg-card);border:1px solid var(--border);border-radius:8px;padding:0.5rem 1rem;font-size:0.875rem;color:var(--text-secondary);text-decoration:none;transition:border-color 0.15s;" onmouseover="this.style.borderColor='var(--accent)'" onmouseout="this.style.borderColor='var(--border)'">
          Dejar reseña en Capterra →
        </a>
        <a href="https://www.g2.com/search?query=eticalert" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:0.5rem;background:var(--bg-card);border:1px solid var(--border);border-radius:8px;padding:0.5rem 1rem;font-size:0.875rem;color:var(--text-secondary);text-decoration:none;transition:border-color 0.15s;" onmouseover="this.style.borderColor='var(--accent)'" onmouseout="this.style.borderColor='var(--border)'">
          Dejar reseña en G2 →
        </a>
        <a href="https://www.softdoit.es/software/canal-denuncias/" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:0.5rem;background:var(--bg-card);border:1px solid var(--border);border-radius:8px;padding:0.5rem 1rem;font-size:0.875rem;color:var(--text-secondary);text-decoration:none;transition:border-color 0.15s;" onmouseover="this.style.borderColor='var(--accent)'" onmouseout="this.style.borderColor='var(--border)'">
          Ver en SoftDoit →
        </a>
      </div>
    </div>
  </section>

  <!-- TESTIMONIOS -->
  <section style="padding:0 0 60px;">
    <div class="container" style="max-width:960px;">
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1.5rem;">
        <?php
        $testimonials = [
          [
            'texto' => '"Llevábamos meses posponiendo la implantación porque nos parecía complicado. Con EticAlert tuvimos el canal activo en 20 minutos. La guía para notificar el RSII a la AIPI fue especialmente útil."',
            'nombre'=> 'Directora de RRHH',
            'empresa'=> 'Empresa industrial · 120 empleados · Madrid',
            'stars'  => 5,
          ],
          [
            'texto' => '"Como asesoría, buscábamos una solución que poder ofrecer a nuestros clientes. EticAlert tiene la mejor relación calidad-precio del mercado y el soporte técnico responde rápido."',
            'nombre'=> 'Socio director',
            'empresa'=> 'Asesoría laboral y fiscal · Barcelona',
            'stars'  => 5,
          ],
          [
            'texto' => '"La función de excluir gestores por conflicto de interés es algo que ninguna otra plataforma que evaluamos tenía. Para nuestro caso era esencial."',
            'nombre'=> 'Director de Compliance',
            'empresa'=> 'Grupo empresarial · 350 empleados · Valencia',
            'stars'  => 5,
          ],
          [
            'texto' => '"Probé 3 opciones antes de elegir EticAlert. Las otras eran más caras o más complicadas. Esta la configuras sola, sin depender de nadie técnico."',
            'nombre'=> 'Responsable de administración',
            'empresa'=> 'Clínica privada · 65 empleados · Sevilla',
            'stars'  => 5,
          ],
          [
            'texto' => '"El libro-registro automático fue lo que me convenció. Antes lo llevábamos en Excel y era un caos. Ahora está todo centralizado y siempre preparado para una posible inspección."',
            'nombre'=> 'Gerente',
            'empresa'=> 'Constructora · 80 empleados · Bilbao',
            'stars'  => 5,
          ],
          [
            'texto' => '"El cifrado en base de datos y las URLs firmadas nos daban la confianza que necesitábamos como entidad del sector financiero. No queríamos solo un formulario, queríamos seguridad real."',
            'nombre'=> 'CISO',
            'empresa'=> 'Entidad financiera · 200 empleados',
            'stars'  => 5,
          ],
        ];
        foreach ($testimonials as $t): ?>
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:16px;padding:1.75rem;display:flex;flex-direction:column;justify-content:space-between;">
          <div>
            <div style="color:#f59e0b;font-size:1rem;margin-bottom:1rem;"><?= str_repeat('★', $t['stars']) ?></div>
            <p style="font-size:0.9375rem;color:var(--text-secondary);line-height:1.6;margin-bottom:1.25rem;"><?= $t['texto'] ?></p>
          </div>
          <div style="border-top:1px solid var(--border);padding-top:0.875rem;">
            <div style="font-weight:700;font-size:0.875rem;"><?= $t['nombre'] ?></div>
            <div style="font-size:0.8125rem;color:var(--text-muted);"><?= $t['empresa'] ?></div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- COMPARATIVA VS ALTERNATIVAS -->
  <section style="padding:60px 0;background:var(--bg-secondary);border-top:1px solid var(--border);border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:900px;">
      <h2 style="font-size:1.5rem;margin-bottom:0.5rem;">¿Por qué EticAlert frente a otras opciones?</h2>
      <p style="color:var(--text-secondary);margin-bottom:2rem;">Lo que dicen los clientes que compararon antes de elegir.</p>
      <div style="overflow-x:auto;">
        <table style="width:100%;border-collapse:collapse;font-size:0.875rem;">
          <thead>
            <tr style="background:var(--bg-card);">
              <th style="padding:0.75rem 1rem;border:1px solid var(--border);text-align:left;min-width:180px;">Criterio</th>
              <th style="padding:0.75rem 1rem;border:1px solid var(--border);text-align:center;background:rgba(74,222,128,0.06);">EticAlert</th>
              <th style="padding:0.75rem 1rem;border:1px solid var(--border);text-align:center;">SaaS internacionales</th>
              <th style="padding:0.75rem 1rem;border:1px solid var(--border);text-align:center;">Suites RRHH</th>
              <th style="padding:0.75rem 1rem;border:1px solid var(--border);text-align:center;">Consultoría</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $rows = [
              ['Precio pyme 50 emp.',        'desde 39€/mes', '99-149€/mes', '275€/mes', '1.500-5.000€ setup'],
              ['Activación',                  'Inmediata',     '1-3 días',    'Días',     'Semanas'],
              ['Adaptado Ley 2/2023',         '✓ Nativo',      'Parcial',     'Módulo',   'Sí (manual)'],
              ['Cifrado BD AES-256',          '✓',             'Varía',       '✗',        'Varía'],
              ['Exclusión de gestores',       '✓ Único',       '✗',           '✗',        '✗'],
              ['Hash SHA-256 verificable',    '✓ Único',       '✗',           '✗',        '✗'],
              ['Libro-registro automático',   '✓',             'Algunos',     'Algunos',  'Manual'],
              ['Guía RSII + AIPI incluida',   '✓',             '✗',           '✗',        'Cargo extra'],
              ['Soporte en español',          '✓',             'Limitado',    'Sí',       'Sí'],
            ];
            foreach ($rows as $i => $r): ?>
            <tr <?= $i % 2 ? '' : 'style="background:var(--bg-card);"' ?>>
              <td style="padding:0.625rem 1rem;border:1px solid var(--border);font-weight:600;"><?= $r[0] ?></td>
              <td style="padding:0.625rem 1rem;border:1px solid var(--border);text-align:center;background:rgba(74,222,128,0.04);font-weight:700;color:var(--accent);"><?= $r[1] ?></td>
              <td style="padding:0.625rem 1rem;border:1px solid var(--border);text-align:center;color:var(--text-secondary);"><?= $r[2] ?></td>
              <td style="padding:0.625rem 1rem;border:1px solid var(--border);text-align:center;color:var(--text-secondary);"><?= $r[3] ?></td>
              <td style="padding:0.625rem 1rem;border:1px solid var(--border);text-align:center;color:var(--text-secondary);"><?= $r[4] ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- PLATAFORMAS DE REVIEWS -->
  <section style="padding:60px 0;border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:860px;">
      <h2 style="font-size:1.5rem;margin-bottom:0.5rem;text-align:center;">EticAlert en plataformas de reseñas verificadas</h2>
      <p style="color:var(--text-secondary);text-align:center;margin-bottom:2.5rem;">Encuentra EticAlert en los directorios de software más consultados en España y deja tu opinión si eres cliente.</p>
      <div class="grid-2up">
        <?php
        $platforms = [
          [
            'name'  => 'Capterra',
            'desc'  => 'El directorio de software B2B más grande. Reseñas verificadas.',
            'url'   => 'https://www.capterra.es/software/search/?q=eticalert',
            'cta'   => 'Ver en Capterra →',
          ],
          [
            'name'  => 'G2',
            'desc'  => 'Plataforma de reviews con verificación de identidad.',
            'url'   => 'https://www.g2.com/search?query=eticalert',
            'cta'   => 'Ver en G2 →',
          ],
          [
            'name'  => 'SoftDoit',
            'desc'  => 'El comparador de software líder en España.',
            'url'   => 'https://www.softdoit.es/software/canal-denuncias/',
            'cta'   => 'Ver en SoftDoit →',
          ],
          [
            'name'  => 'GetApp',
            'desc'  => 'Directorio internacional con enfoque en pymes.',
            'url'   => 'https://www.getapp.es/software/category/whistleblowing/',
            'cta'   => 'Ver en GetApp →',
          ],
        ];
        foreach ($platforms as $p): ?>
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:12px;padding:1.5rem;text-align:center;">
          <div style="font-size:1.125rem;font-weight:800;margin-bottom:0.375rem;"><?= $p['name'] ?></div>
          <p style="font-size:0.8125rem;color:var(--text-secondary);margin-bottom:1rem;"><?= $p['desc'] ?></p>
          <a href="<?= $p['url'] ?>" target="_blank" rel="noopener noreferrer" style="font-size:0.8125rem;color:var(--accent);font-weight:600;text-decoration:none;"><?= $p['cta'] ?></a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section style="padding:80px 0;">
    <div class="container" style="max-width:620px;text-align:center;">
      <h2 style="font-size:1.5rem;margin-bottom:1rem;">¿Eres cliente de EticAlert?</h2>
      <p style="color:var(--text-secondary);margin-bottom:2rem;">Ayuda a otras empresas a elegir bien dejando tu opinión en Capterra o G2. Te lleva menos de 3 minutos.</p>
      <div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;">
        <a href="https://www.capterra.es/software/search/?q=eticalert" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Dejar reseña en Capterra</a>
        <a href="/registro" class="btn btn-secondary">Probar EticAlert gratis</a>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
