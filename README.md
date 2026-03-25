# MTV Builder AI

AI-driven page builder foundation focused on turning structured content rules into predictable page assembly.

This project combines a lightweight frontend setup with a schema-first builder model. The repository currently includes the app shell, static assets, and a set of JSON reference files that describe how pages should be planned, validated, rendered, and reviewed.

## What It Covers

- page goals and audience intent
- content models and section contracts
- page structure and builder configuration
- design mapping and editable rules
- fallback states, sanitization, and performance budgets
- visual, content, and SEO QA layers

## Tech Stack

- TypeScript
- Vite
- Tailwind CSS v4

## Project Structure

- `src/` - frontend entry point and styles
- `public/` - static assets
- `boilerplate/json_references/` - schema and workflow reference files for the builder pipeline
- `to_do.md` - short development notes
- `rules/OPTIMIZED_PIPELINE.md` - current merged reference model, generation ownership, and file mapping
- `boilerplate/prompts/01_strategy_bundle.md` ... `05_build_targets.md` - canonical prompts
- `boilerplate/json_references/01_page_goal.json` ... `04_section_registry.json` - atomic inputs and static registry
- `boilerplate/json_references/05_strategy.json` ... `09_build.json` - merged working references for strategy, render, delivery, quality, and build

## JSON Reference Model

The pipeline now uses 9 JSON reference files instead of the previous fragmented set:

- `01_page_goal.json`
- `02_content_model.json`
- `03_page_structure.json`
- `04_section_registry.json`
- `05_strategy.json`
- `06_render.json`
- `07_delivery.json`
- `08_quality.json`
- `09_build.json`

The split is intentional:

- `01-04` are atomic source inputs
- `05-09` are merged working references used by the generation steps

This keeps the pipeline compact without collapsing everything into one large file.

## Local Development

```bash
npm install
npm run dev
```

## Production Build

```bash
npm run build
npm run preview
```

## Current State

The project is in an early foundation stage. The frontend is intentionally minimal, while the main value of the repository today is the structured JSON system that defines the future page-builder workflow.

The repository keeps the current folder layout, but the JSON pipeline has been reduced to a smaller 9-file reference model. See `rules/OPTIMIZED_PIPELINE.md`.
