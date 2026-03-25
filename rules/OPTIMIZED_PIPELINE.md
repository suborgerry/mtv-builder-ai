# Optimized Pipeline

## Goal
Preserve the current repository folder structure while reducing the working complexity of the JSON pipeline.

This optimization does not rename or move the existing folders:

- `boilerplate/prompts/` stays the prompt source
- `boilerplate/json_references/` stays the JSON reference directory
- `rules/` stays the operational contract for agents
- `src/`, project root, and `production/wp_theme/` stay the build output targets

## Physical Layout

### Prompt source
- `boilerplate/prompts/00_global_prefix.md`
- `boilerplate/prompts/01_strategy_bundle.md`
- `boilerplate/prompts/02_render_bundle.md`
- `boilerplate/prompts/03_delivery_bundle.md`
- `boilerplate/prompts/04_quality_bundle.md`
- `boilerplate/prompts/05_build_targets.md`

Canonical merged prompts:
- `01_strategy_bundle.md`
- `02_render_bundle.md`
- `03_delivery_bundle.md`
- `04_quality_bundle.md`
- `05_build_targets.md`

### Reference JSON source
All pipeline JSON must live in:

- `boilerplate/json_references/`

This includes two files already referenced by prompts/rules and treated as first-class references:

- `boilerplate/json_references/05_theme_selection.json`
- `boilerplate/json_references/20_content_optimization.json`

Merged bundle references:

- `boilerplate/json_references/09_strategy_bundle.json`
- `boilerplate/json_references/10_render_bundle.json`
- `boilerplate/json_references/11_delivery_bundle.json`
- `boilerplate/json_references/12_quality_bundle.json`
- `boilerplate/json_references/13_build_bundle.json`

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

The repository keeps the current file names, but they should be treated as 5 logical bundles.

### 1. Strategy Bundle
Generated in steps 1-2.

Canonical files:
- `01_page_goal.json`
- `02_content_model.json`
- `03_page_structure.json`
- `05_theme_selection.json`
- `06_section_variants.json`
- `07_ui_tree.json`
- `08_design_mapping.json`
- `09_strategy_bundle.json`

Static library file:
- `04_section_registry.json`

### 2. Render Bundle
Generated in step 3.

Canonical files:
- `14_render_spec_generation.json`
- `15_acf_schema.json`
- `16_sanitization_policy.json`

### 3. Delivery Bundle
Generated in step 4.

Canonical files:
- `17_performance_budget.json`
- `20_content_optimization.json`
- `11_delivery_bundle.json`

### 4. Quality Bundle
Generated in steps 5-6.

Canonical file:
- `18_content_optimization.json`
- `12_quality_bundle.json`
- `13_build_bundle.json`

Derived summary:
- `19_content_optimization.json`

### 5. Build Bundle
Generated in steps 7-8.

Static target input:
- `19_content_optimization.json`

Build target:
- HTML/Vite in root + `src/`
- WordPress in `production/wp_theme/`

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
- `boilerplate/json_references/05_theme_selection.json`
- `boilerplate/json_references/06_section_variants.json`
- `boilerplate/json_references/09_strategy_bundle.json`

### Step 2
Prompt:
- `boilerplate/prompts/01_strategy_bundle.md`

Read:
- step 1 outputs
- `boilerplate/json_references/04_section_registry.json`

Write:
- `boilerplate/json_references/07_ui_tree.json`
- `boilerplate/json_references/08_design_mapping.json`
- `boilerplate/json_references/09_strategy_bundle.json`

### Step 3
Prompt:
- `boilerplate/prompts/02_render_bundle.md`

Read:
- `boilerplate/json_references/01_page_goal.json`
- `boilerplate/json_references/02_content_model.json`
- `boilerplate/json_references/07_ui_tree.json`
- `boilerplate/json_references/08_design_mapping.json`
- `boilerplate/json_references/09_strategy_bundle.json`

Write:
- `boilerplate/json_references/14_render_spec_generation.json`
- `boilerplate/json_references/15_acf_schema.json`
- `boilerplate/json_references/16_sanitization_policy.json`
- `boilerplate/json_references/10_render_bundle.json`

### Step 4
Prompt:
- `boilerplate/prompts/03_delivery_bundle.md`

Read:
- `boilerplate/json_references/03_page_structure.json`
- `boilerplate/json_references/06_section_variants.json`
- `boilerplate/json_references/14_render_spec_generation.json`
- `boilerplate/json_references/09_strategy_bundle.json`

Write:
- `boilerplate/json_references/17_performance_budget.json`
- `boilerplate/json_references/20_content_optimization.json`
- `boilerplate/json_references/11_delivery_bundle.json`

### Step 5
Prompt:
- `boilerplate/prompts/04_quality_bundle.md`

Read:
- `boilerplate/json_references/01_page_goal.json`
- `boilerplate/json_references/02_content_model.json`
- `boilerplate/json_references/03_page_structure.json`
- `boilerplate/json_references/14_render_spec_generation.json`
- `boilerplate/json_references/17_performance_budget.json`
- `boilerplate/json_references/20_content_optimization.json`
- `boilerplate/json_references/09_strategy_bundle.json`
- `boilerplate/json_references/11_delivery_bundle.json`

Write:
- `boilerplate/json_references/18_content_optimization.json`
- `boilerplate/json_references/12_quality_bundle.json`

### Step 6
Prompt:
- `boilerplate/prompts/04_quality_bundle.md`

Read:
- `boilerplate/json_references/14_render_spec_generation.json`
- `boilerplate/json_references/17_performance_budget.json`
- `boilerplate/json_references/18_content_optimization.json`
- `boilerplate/json_references/20_content_optimization.json`
- `boilerplate/json_references/11_delivery_bundle.json`
- `boilerplate/json_references/12_quality_bundle.json`

Write:
- `boilerplate/json_references/19_content_optimization.json`
- `boilerplate/json_references/12_quality_bundle.json`
- `boilerplate/json_references/13_build_bundle.json`

### Step 7
Prompt:
- `boilerplate/prompts/05_build_targets.md`

Read:
- `boilerplate/json_references/08_design_mapping.json`
- `boilerplate/json_references/14_render_spec_generation.json`
- `boilerplate/json_references/16_sanitization_policy.json`
- `boilerplate/json_references/19_content_optimization.json`
- `boilerplate/json_references/20_content_optimization.json`

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
- `boilerplate/json_references/14_render_spec_generation.json`
- `boilerplate/json_references/15_acf_schema.json`
- `boilerplate/json_references/16_sanitization_policy.json`
- `boilerplate/json_references/19_content_optimization.json`
- `boilerplate/json_references/20_content_optimization.json`

Write:
- `production/wp_theme/partials/*.php`
- `production/wp_theme/functions.php`
- `production/wp_theme/acf-json/*.json`
- `production/wp_theme/mc_template.php`
- `production/wp_theme/style.css`

## Reduction Rules

To reduce prompt and JSON bloat without changing filenames:

### Treat these as canonical
- `01_page_goal.json`
- `02_content_model.json`
- `03_page_structure.json`
- `05_theme_selection.json`
- `06_section_variants.json`
- `07_ui_tree.json`
- `08_design_mapping.json`
- `09_strategy_bundle.json`
- `14_render_spec_generation.json`
- `15_acf_schema.json`
- `16_sanitization_policy.json`
- `10_render_bundle.json`
- `17_performance_budget.json`
- `11_delivery_bundle.json`
- `18_content_optimization.json`
- `12_quality_bundle.json`
- `19_content_optimization.json`
- `13_build_bundle.json`
- `20_content_optimization.json`
- `05_theme_selection.json`

### Treat these as library or static inputs
- `04_section_registry.json`

## Prompt Compression

Canonical merged prompts:

1. `01_strategy_bundle.md`
2. `02_render_bundle.md`
3. `03_delivery_bundle.md`
4. `04_quality_bundle.md`
5. `05_build_targets.md`

The prompt layer is now reduced to 5 canonical prompts and 5 logical JSON bundles.
