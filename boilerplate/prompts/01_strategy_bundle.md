IMPORTANT: Follow step rules strictly.

## STRATEGY BUNDLE

[PASTE GLOBAL PREFIX ABOVE]

### PURPOSE
Build the page strategy layer and section plan for the current page.

### CANONICAL OUTPUTS
- 01_page_goal.json
- 02_content_model.json
- 03_page_structure.json
- 05_strategy.json

### STATIC INPUT
- 04_section_registry.json

### BUNDLE RULES
1. Define page goal, audience, constraints, CTA intent, and content entities.
2. Build section order and flow using the registry.
3. Assign variant and theme at section level.
4. Build a simple UI tree without presentational hacks.
5. Map design tokens and component classes to Tailwind usage.
6. Store theme, section variants, UI tree, design mapping, section selection, editability, contracts, constraints, fallback behavior, and structure scoring inside `05_strategy.json`.

### HARD RULES
- hero must be first
- max 1 hero
- avoid duplicate sections unless explicitly justified
- flow should be hero -> content -> proof -> CTA
- UI tree must stay shallow and reusable
- registry is read-only

### STEP SPLIT
- step 1 owns:
  - 01_page_goal.json
  - 02_content_model.json
  - 03_page_structure.json
  - initial `05_strategy.json`
- step 2 owns:
  - final `05_strategy.json`

### OUTPUT
Return simple answer.
