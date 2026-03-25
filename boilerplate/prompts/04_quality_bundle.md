IMPORTANT: Follow step rules strictly.

## QUALITY BUNDLE

[PASTE GLOBAL PREFIX ABOVE]

### PURPOSE
Optimize content and produce QA reports plus final builder config.

### READ
- 14_render_spec_generation.json
- 17_performance_budget.json
- 18_content_optimization.json
- 20_content_optimization.json
- 11_delivery_bundle.json

### CANONICAL OUTPUTS
- 18_content_optimization.json
- 19_content_optimization.json
- 12_quality_bundle.json

### BUNDLE RULES
1. Optimize content for SEO, readability, and Core Web Vitals.
2. Store visual, content, and SEO QA reports inside `12_quality_bundle.json`.
3. Build final page assembly config from render, media, and optimization layers.

### HARD RULES
- fail on critical issues
- config must stay consistent with render spec
- no keyword stuffing
- alt text language must be English

### STEP SPLIT
- step 5 owns:
  - 18_content_optimization.json
  - initial `12_quality_bundle.json`
- step 6 owns:
  - 19_content_optimization.json
  - final `12_quality_bundle.json`
  - `13_build_bundle.json`

### OUTPUT
Return simple answer.
