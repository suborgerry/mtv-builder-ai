IMPORTANT: Follow step rules strictly.

## RENDER BUNDLE

[PASTE GLOBAL PREFIX ABOVE]

### PURPOSE
Translate strategy outputs into render, schema, and sanitization contracts.

### READ
- 01_page_goal.json
- 02_content_model.json
- 07_ui_tree.json
- 08_design_mapping.json
- 09_strategy_bundle.json

### CANONICAL OUTPUTS
- 14_render_spec_generation.json
- 15_acf_schema.json
- 16_sanitization_policy.json
- 10_render_bundle.json

### BUNDLE RULES
1. Map content entities to templates and fields.
2. Define render visibility and fallback behavior.
3. Build ACF groups and field structures from the content model.
4. Define sanitization and escaping rules per field and template.

### HARD RULES
- output must support plain HTML rendering
- no framework runtime logic
- render spec must be reusable for HTML and WordPress targets

### OUTPUT
Return simple answer.
