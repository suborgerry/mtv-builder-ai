IMPORTANT: Follow step rules strictly.

## BUILD TARGETS

[PASTE GLOBAL PREFIX ABOVE]

### PURPOSE
Build the final page from canonical JSON into either static HTML or WordPress.

### SHARED READS
- 14_render_spec_generation.json
- 16_sanitization_policy.json
- 19_content_optimization.json
- 20_content_optimization.json
- 13_build_bundle.json

### HTML TARGET
Additional read:
- 08_design_mapping.json

Write:
- index.html
- package.json
- vite.config.js
- postcss.config.js
- tailwind.config.js
- src/input.css
- partials/*.html

### WORDPRESS TARGET
Additional read:
- 15_acf_schema.json

Write:
- production/wp_theme/partials/*.php
- production/wp_theme/functions.php
- production/wp_theme/acf-json/*.json
- production/wp_theme/mc_template.php
- production/wp_theme/style.css

### HARD RULES
- semantic HTML only
- no frameworks
- keep logic minimal
- use partials
- WordPress build must render from Flexible Content, not hardcoded order

### OUTPUT
Return simple answer.
