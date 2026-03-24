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
- theme/index.php
- theme/style.css

### TASK

1. Convert HTML partials → PHP templates:
   - replace static content with ACF fields
   - use get_field() / get_sub_field()

2. Implement ACF:
   - map fields from acf_schema.json
   - create JSON for ACF local JSON

3. Apply sanitization:
   - esc_html
   - esc_url
   - esc_attr
   - wp_kses_post

4. Build template structure:
   - section-based partials
   - reusable components

5. Handle images:
   - wp_get_attachment_image()
   - alt from ACF
   - responsive support

### RULES
- NO inline HTML duplication
- use partial templates
- keep logic minimal
- follow WordPress best practices

### OUTPUT
Return simple answer.