# EticAlert — Landing Page

Web pública de [eticalert.com](https://eticalert.com) — SaaS de canal de denuncias para pymes españolas (Ley 2/2023).

---

## Entornos

| Entorno | Rama | URL | API |
|---------|------|-----|-----|
| Producción | `main` | https://eticalert.com | https://app.eticalert.com |
| Staging | `staging` | https://staging.eticalert.com | https://staging.app.eticalert.com |

El entorno se detecta automáticamente por hostname en `config.php`. Staging tiene `noindex/nofollow` activado.

---

## Stack

- **PHP 7.4** — sin frameworks, páginas simples con includes compartidos
- **CSS custom** — design system propio con variables CSS (`--accent`, `--bg-primary`, etc.)
- **Vanilla JS** — sin dependencias, animaciones y formularios
- **Apache** — `.htaccess` con URLs limpias (sin `.php`), HTTPS forzado, caché de assets

---

## Estructura

```
/
├── index.php                  # Home
├── precios.php                # Página de precios
├── registro.php               # Formulario de registro (2 pasos)
├── registro-confirmacion.php  # Confirmación tras registro
├── canal-de-denuncias.php     # Página de producto
├── faq.php                    # Preguntas frecuentes
├── privacidad.php             # Política de privacidad
├── legal.php                  # Términos de uso
├── blog/                      # Blog (index + artículos)
├── includes/
│   ├── header.php             # <head> + nav compartido
│   └── footer.php             # Footer compartido
├── css/styles.css             # Estilos globales
├── js/
│   ├── main.js                # Animaciones, acordeón FAQ, nav
│   └── registro.js            # Lógica formulario multi-paso
├── config.php                 # Variables por entorno (API URLs, etc.)
├── sitemap.xml
└── .htaccess                  # Reescritura URLs, HTTPS, caché, seguridad
```

---

## Flujo de despliegue

```
Desarrollo local (rama staging)
        ↓ git push origin staging
Staging (auto-deploy via Plesk webhook)
        ↓ PR staging → main (requiere aprobación manual)
Producción (auto-deploy via Plesk webhook)
```

---

## Formulario de registro

El formulario `/registro` llama a la API de la app al enviar:

- **Endpoint:** `POST /api/auth/register`
- **Payload:** `companyName`, `cif`, `sector`, `adminEmail`, `plan`, `billing`, `acceptTermsAndPrivacy`, `acceptCompanyAdminContract`
- **Fallback:** si la API falla, guarda el lead en `data/registros.csv` y envía email a `info@eticalert.com`
- **Log API:** `data/api_log.txt` (últimas respuestas para diagnóstico)

---

## Variables de entorno relevantes (`config.php`)

| Constante | Producción | Staging |
|-----------|-----------|---------|
| `APP_ENV` | `production` | `staging` |
| `API_BASE` | `https://app.eticalert.com` | `https://staging.app.eticalert.com` |
| `API_REGISTER` | `/api/auth/register` | `/api/auth/register` |
| `APP_LOGIN_URL` | `/login` | `/login` |

---

## Contacto

**info@eticalert.com**
