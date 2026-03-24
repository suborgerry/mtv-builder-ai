## STEP 8 — WordPress Build (HTML → PHP + ACF)

[PASTE GLOBAL PREFIX ABOVE]

### READ
- 14_render_spec_generation.json
- 15_acf_schema.json
- 16_sanitization_policy.json
- 23_page_builder_config.json
- 24_image_pipeline.json

### GENERATE FILES
- theme/partials/*.php
- theme/functions.php
- theme/acf-json/*.json
- theme/mc_template.php
- theme/style.css

### TASK

1. Convert HTML partials → PHP templates:
   - replace static content with ACF fields
   - use get_field() / get_sub_field()
   - each section must map to a reusable partial

2. Implement ACF:
   - map fields from acf_schema.json
   - create JSON for ACF local JSON
   - create a `flexible_content` field for page assembly
   - each section from builder config should become a flexible layout

3. Apply sanitization:
   - esc_html
   - esc_url
   - esc_attr
   - wp_kses_post

4. Build template structure:
   - section-based partials
   - reusable components
   - generate a universal page template in `theme/mc_template.php`
   - `mc_template.php` must render sections from ACF Flexible Content, not from hardcoded template order
   - do not generate or rely on `index.php` as the page renderer create `index.php` for full build theme
   - route layouts to partials with a minimal dispatcher
   - keep section rendering order controlled by the Flexible Content field

5. Handle images:
   - wp_get_attachment_image()
   - alt from ACF
   - responsive support

### RULES
- NO inline HTML duplication
- use partial templates
- keep logic minimal
- follow WordPress best practices
- build as a reusable flexible page builder template
- all page sections must be editable/reorderable in ACF Flexible Content
- `mc_template.php` is the canonical entry point for the generated page

### OUTPUT
Return simple answer.
