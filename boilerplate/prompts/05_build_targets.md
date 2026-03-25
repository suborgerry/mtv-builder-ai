IMPORTANT: Follow step rules strictly.

## BUILD TARGETS

[PASTE GLOBAL PREFIX ABOVE]

### PURPOSE
Build the final page from canonical JSON into either static HTML or WordPress.

### SHARED READS
- 05_strategy.json
- 06_render.json
- 07_delivery.json
- 08_quality.json
- 09_build.json

### HTML TARGET
Write:
- index.html
- package.json
- vite.config.js
- postcss.config.js
- tailwind.config.js
- src/input.css
- partials/*.html

### WORDPRESS TARGET
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
