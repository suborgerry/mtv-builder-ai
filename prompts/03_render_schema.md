IMPORTANT: Follow step rules strictly.

## STEP 3 — Render + Schema

[PASTE GLOBAL PREFIX ABOVE]

### READ
- 1_page_goal.json
- 2_content_model.json
- 7_ui_tree.json
- 8_design_mapping.json
- 12_section_contracts.json
- 13_fallback_states.json

### GENERATE FILES
- 14_render_spec_generation.json
- 15_acf_schema.json
- 16_sanitization_policy.json

### TASK
1. Create render spec:
   - map fields → HTML structure
   - define templates

2. Define ACF schema:
   - field groups
   - repeaters
   - required fields

3. Define sanitization:
   - text → esc_html
   - rich text → safe HTML
   - url → esc_url
   - attributes → esc_attr

### RULES
- output must support plain HTML rendering
- no framework logic
- prepare for partial templates

### OUTPUT
Return ALL generated JSON files.