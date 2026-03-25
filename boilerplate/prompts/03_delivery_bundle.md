IMPORTANT: Follow step rules strictly.

## DELIVERY BUNDLE

[PASTE GLOBAL PREFIX ABOVE]

### PURPOSE
Define performance, preview, and image delivery behavior.

### READ
- 03_page_structure.json
- 06_section_variants.json
- 14_render_spec_generation.json

### CANONICAL OUTPUTS
- 17_performance_budget.json
- 20_content_optimization.json
- 11_delivery_bundle.json

### BUNDLE RULES
1. Define page and section performance budgets.
2. Define preview states for minimal, full, and fallback content inside `11_delivery_bundle.json`.
3. Define image assignment, formats, dimensions, loading, and alt requirements.

### HARD RULES
- hero image is high priority
- hero image must not be lazy loaded
- all other images are lazy by default
- all images must define width and height
- prefer webp and avif

### OUTPUT
Return simple answer.
