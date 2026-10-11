# wp-plugin-shortcode-cta

![stack: WordPress](https://img.shields.io/badge/stack--WordPress-0d9488?style=flat-square) ![stack: PHP](https://img.shields.io/badge/stack--PHP-0d9488?style=flat-square) ![stack: Shortcode API](https://img.shields.io/badge/stack--Shortcode%20API-0d9488?style=flat-square)
![IA: asistido](https://img.shields.io/badge/IA--asistido-6366f1?style=flat-square)

Plugin WordPress que registra un shortcode [cta] con atributos y salida escapada.

> **Transparencia sobre IA:** este proyecto se desarrollo con asistencia de inteligencia artificial (generacion de codigo, revision y documentacion). El codigo fue leido, ejecutado y probado manualmente antes de publicarse. No declara clientes, metricas ni resultados que no puedan verificarse.

## Problema que resuelve

Insertar llamadas a la accion dentro de entradas sin editar plantillas ni depender del editor de bloques.

## Solucion implementada

Plugin que registra el shortcode [cta] con atributos, salida escapada y estilo propio encolado solo cuando se usa.

### Funcionalidades principales

- Shortcode con atributos y valores por defecto
- Escapado de salida (esc_html/esc_url)
- CSS en linea registrado como estilo
- readme.txt de plugin

## Stack

- WordPress
- PHP
- Shortcode API

## Estructura

```
wp-plugin-shortcode-cta.php  # plugin
readme.txt                    # metadatos
```

## Puesta en marcha

```bash
# Copiar en wp-content/plugins/ y activar
```

## Complejidad del proyecto

**Nivel: Intermedio** — Uso de la API de shortcodes y de encolado; requiere el entorno WordPress.

El nivel describe la complejidad tecnica del proyecto, no el grado de dominio de quien lo escribio.

## Despliegue

Plugin de WordPress; necesita PHP y una instalacion de WordPress.  
El codigo fuente si esta disponible en este repositorio.

## Autor

**Luis Felipe Zuniga Leon** — Desarrollador de software asistido por IA

- GitHub: <https://github.com/Luisf2020>

---

_Proyecto de portafolio. El desarrollo se apoyo en herramientas de IA bajo revision tecnica humana._
