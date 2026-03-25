IMPORTANT: Follow step rules strictly.

## RENDER BUNDLE

[PASTE GLOBAL PREFIX ABOVE]

### PURPOSE
Translate strategy outputs into render, schema, and sanitization contracts.

### READ
- 01_page_goal.json
- 02_content_model.json
- 05_strategy.json

### CANONICAL OUTPUTS
- 06_render.json

### BUNDLE RULES
1. Map content entities to templates and fields.
2. Define render visibility and fallback behavior.
3. Build ACF groups and field structures from the content model.
4. Define sanitization and escaping rules per field and template inside `06_render.json`.

### HARD RULES
- output must support plain HTML rendering
- no framework runtime logic
- render spec must be reusable for HTML and WordPress targets

### OUTPUT
Return simple answer.
