IMPORTANT: Follow step rules strictly.

## DELIVERY BUNDLE

[PASTE GLOBAL PREFIX ABOVE]

### PURPOSE
Define performance, preview, and image delivery behavior.

### READ
- 03_page_structure.json
- 05_strategy.json
- 06_render.json

### CANONICAL OUTPUTS
- 07_delivery.json

### BUNDLE RULES
1. Define page and section performance budgets.
2. Define preview states for minimal, full, and fallback content inside `07_delivery.json`.
3. Define image assignment, formats, dimensions, loading, and alt requirements.

### HARD RULES
- hero image is high priority
- hero image must not be lazy loaded
- all other images are lazy by default
- all images must define width and height
- prefer webp and avif

### OUTPUT
Return simple answer.
