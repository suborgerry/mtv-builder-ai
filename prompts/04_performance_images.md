IMPORTANT: Follow step rules strictly.

## STEP 4 — Performance + Images

[PASTE GLOBAL PREFIX ABOVE]

### READ
- 3_page_structure.json
- 6_section_variants.json
- 14_render_spec_generation.json

### GENERATE FILES
- 17_performance_budget.json
- 18_preview_matrix.json
- 24_image_pipeline.json

### TASK
1. Define performance budget:
   - limit heavy sections
   - limit media usage

2. Define preview states:
   - minimal content
   - full content
   - empty states

3. Build image pipeline:
   - assign images to sections
   - define responsive sizes
   - define formats (webp/avif)
   - define lazy loading
   - define alt texts

4. Define CWV rules:
   - LCP: hero image optimized
   - CLS: fixed dimensions
   - INP: avoid heavy interactions

### RULES
- hero image = high priority
- no lazy loading for hero
- all other images lazy
- always define width/height

### OUTPUT
Return simple answer.