# Optimized Pipeline

## Goal
Preserve the current repository layout while reducing the JSON reference surface to the minimum useful set.

This model keeps the prompt folder, rules folder, and build targets unchanged, but reduces `boilerplate/json_references/` from many small interdependent files to 9 files total:

- `01_page_goal.json`
- `02_content_model.json`
- `03_page_structure.json`
- `04_section_registry.json`
- `05_strategy.json`
- `06_render.json`
- `07_delivery.json`
- `08_quality.json`
- `09_build.json`

## Physical Layout

### Prompt source
- `boilerplate/prompts/00_global_prefix.md`
- `boilerplate/prompts/01_strategy_bundle.md`
- `boilerplate/prompts/02_render_bundle.md`
- `boilerplate/prompts/03_delivery_bundle.md`
- `boilerplate/prompts/04_quality_bundle.md`
- `boilerplate/prompts/05_build_targets.md`

### Reference JSON source
All pipeline JSON lives in:

- `boilerplate/json_references/`

Atomic inputs:
- `01_page_goal.json`
- `02_content_model.json`
- `03_page_structure.json`
- `04_section_registry.json`

Merged working references:
- `05_strategy.json`
- `06_render.json`
- `07_delivery.json`
- `08_quality.json`
- `09_build.json`

### Build outputs
- static HTML build:
  - project root `index.html`
  - project root config files
  - `src/input.css`
  - `partials/*.html` if used by the generator
- WordPress build:
  - `production/wp_theme/functions.php`
  - `production/wp_theme/mc_template.php`
  - `production/wp_theme/header.php`
  - `production/wp_theme/footer.php`
  - `production/wp_theme/partials/*.php`
  - `production/wp_theme/acf-json/*.json`
  - `production/wp_theme/style.css`

## Logical Bundles

### 1. Strategy
Generated in steps 1-2.

Canonical outputs:
- `01_page_goal.json`
- `02_content_model.json`
- `03_page_structure.json`
- `05_strategy.json`

Static input:
- `04_section_registry.json`

### 2. Render
Generated in step 3.

Canonical outputs:
- `06_render.json`

### 3. Delivery
Generated in step 4.

Canonical outputs:
- `07_delivery.json`

### 4. Quality
Generated in steps 5-6.

Canonical outputs:
- `08_quality.json`
- `09_build.json`

### 5. Build Targets
Generated in steps 7-8.

Required inputs:
- `05_strategy.json`
- `06_render.json`
- `07_delivery.json`
- `08_quality.json`
- `09_build.json`

## What To Generate Where

### Step 1
Prompt:
- `boilerplate/prompts/01_strategy_bundle.md`

Read:
- `boilerplate/json_references/04_section_registry.json`

Write:
- `boilerplate/json_references/01_page_goal.json`
- `boilerplate/json_references/02_content_model.json`
- `boilerplate/json_references/03_page_structure.json`
- initial `boilerplate/json_references/05_strategy.json`

### Step 2
Prompt:
- `boilerplate/prompts/01_strategy_bundle.md`

Read:
- step 1 outputs
- `boilerplate/json_references/04_section_registry.json`

Write:
- final `boilerplate/json_references/05_strategy.json`

### Step 3
Prompt:
- `boilerplate/prompts/02_render_bundle.md`

Read:
- `boilerplate/json_references/01_page_goal.json`
- `boilerplate/json_references/02_content_model.json`
- `boilerplate/json_references/05_strategy.json`

Write:
- `boilerplate/json_references/06_render.json`

### Step 4
Prompt:
- `boilerplate/prompts/03_delivery_bundle.md`

Read:
- `boilerplate/json_references/03_page_structure.json`
- `boilerplate/json_references/05_strategy.json`
- `boilerplate/json_references/06_render.json`

Write:
- `boilerplate/json_references/07_delivery.json`

### Step 5
Prompt:
- `boilerplate/prompts/04_quality_bundle.md`

Read:
- `boilerplate/json_references/01_page_goal.json`
- `boilerplate/json_references/02_content_model.json`
- `boilerplate/json_references/03_page_structure.json`
- `boilerplate/json_references/05_strategy.json`
- `boilerplate/json_references/06_render.json`
- `boilerplate/json_references/07_delivery.json`

Write:
- initial `boilerplate/json_references/08_quality.json`

### Step 6
Prompt:
- `boilerplate/prompts/04_quality_bundle.md`

Read:
- `boilerplate/json_references/05_strategy.json`
- `boilerplate/json_references/06_render.json`
- `boilerplate/json_references/07_delivery.json`
- `boilerplate/json_references/08_quality.json`

Write:
- final `boilerplate/json_references/08_quality.json`
- `boilerplate/json_references/09_build.json`

### Step 7
Prompt:
- `boilerplate/prompts/05_build_targets.md`

Read:
- `boilerplate/json_references/05_strategy.json`
- `boilerplate/json_references/06_render.json`
- `boilerplate/json_references/07_delivery.json`
- `boilerplate/json_references/08_quality.json`
- `boilerplate/json_references/09_build.json`

Write:
- `index.html`
- `package.json`
- `vite.config.js`
- `postcss.config.js`
- `tailwind.config.js`
- `src/input.css`
- `partials/*.html`

### Step 8
Prompt:
- `boilerplate/prompts/05_build_targets.md`

Read:
- `boilerplate/json_references/05_strategy.json`
- `boilerplate/json_references/06_render.json`
- `boilerplate/json_references/07_delivery.json`
- `boilerplate/json_references/08_quality.json`
- `boilerplate/json_references/09_build.json`

Write:
- `production/wp_theme/partials/*.php`
- `production/wp_theme/functions.php`
- `production/wp_theme/acf-json/*.json`
- `production/wp_theme/mc_template.php`
- `production/wp_theme/style.css`

## Reduction Rules

- Keep `01-04` as atomic source inputs.
- Keep `05-09` as merged working references.
- Do not reintroduce thin bundle wrappers that only duplicate refs.
- Store strategy, render, delivery, quality, and build state inside their merged file instead of cross-linking several small files.
- Prefer one write target per step unless a step explicitly owns a base input.
