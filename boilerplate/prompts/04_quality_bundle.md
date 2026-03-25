IMPORTANT: Follow step rules strictly.

## QUALITY BUNDLE

[PASTE GLOBAL PREFIX ABOVE]

### PURPOSE
Optimize content and produce QA reports plus final builder config.

### READ
- 01_page_goal.json
- 02_content_model.json
- 03_page_structure.json
- 05_strategy.json
- 06_render.json
- 07_delivery.json

### CANONICAL OUTPUTS
- 08_quality.json
- 09_build.json

### BUNDLE RULES
1. Optimize content for SEO, readability, and Core Web Vitals.
2. Store visual, content, and SEO QA reports inside `08_quality.json`.
3. Build final page assembly config inside `09_build.json` from strategy, render, delivery, and optimization layers.

### HARD RULES
- fail on critical issues
- config must stay consistent with render spec
- no keyword stuffing
- alt text language must be English

### STEP SPLIT
- step 5 owns:
  - initial `08_quality.json`
- step 6 owns:
  - final `08_quality.json`
  - `09_build.json`

### OUTPUT
Return simple answer.
