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
- `json_references/` - schema and workflow reference files for the builder pipeline
- `to_do.md` - short development notes
- `rules/OPTIMIZED_PIPELINE.md` - current bundle model, generation ownership, and file mapping for the existing folder layout
- `boilerplate/prompts/01_strategy_bundle.md` ... `05_build_targets.md` - canonical prompts
- `boilerplate/json_references/09_strategy_bundle.json` ... `13_build_bundle.json` - merged bundle references and embedded support/report layers

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

The repository keeps the current folder layout, but the pipeline is now documented as 5 logical bundles over the existing prompt and JSON files. See `rules/OPTIMIZED_PIPELINE.md`.
