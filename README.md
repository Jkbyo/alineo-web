# Alineo

Web de Alineo, construida con Laravel 12, Vite y Tailwind CSS 4.

## Desarrollo en local

Requisitos: PHP 8.2+, Composer y Node.js 20.19+.

```bash
composer setup   # instala dependencias, crea .env, genera la clave y compila assets
composer dev     # servidor, colas, logs y Vite a la vez
```

La web queda en http://localhost:8000.

## Tests

```bash
composer test
vendor/bin/pint   # formatea el código
```

## Despliegue

Se despliega en Coolify con Nixpacks (`nixpacks.toml`). La configuración de producción
se define con variables de entorno en Coolify (no hay `.env` en producción). Las mínimas:

| Variable | Valor |
| --- | --- |
| `APP_NAME` | `Alineo` |
| `APP_ENV` | `production` |
| `APP_DEBUG` | `false` |
| `APP_KEY` | generada una vez con `php artisan key:generate --show` |
| `APP_URL` | URL pública de la web |
| `APP_LOCALE` | `es` |
| `SESSION_DRIVER` / `CACHE_STORE` | `file` |
| `QUEUE_CONNECTION` | `sync` |
