# AGENT RULES

## Goal
Build a static page using:
- plain HTML
- Tailwind CSS
- Vite only as build tool

Do not use:
- React
- Vue
- JSX
- component frameworks
- runtime JS unless explicitly required

## File generation policy
- Read existing files from `json_project/` before writing new ones
- Update only files related to the current step
- Do not overwrite unrelated files
- Preserve stable ids, keys, and references if they already exist
- All JSON files must be valid JSON without comments
- Do not invent extra files unless required by the current step
- If dependency files are missing, report it and stop the current step

## Project policy
- HTML must be clean and semantic
- Tailwind classes must be applied directly in HTML
- Vite is used only for build/dev pipeline
- CSS entry point must be minimal and Tailwind-based
- Prefer reusable HTML partials
- Images must follow SEO and Core Web Vitals rules
- Alt texts must be in English

## JSON policy
- Each step owns a fixed set of JSON files
- A step may read previous files, but may only write its owned files
- Do not rename JSON files
- Do not change schema structure unless explicitly instructed

## Quality policy
- Prefer deterministic output over creative variation
- Keep structure simple and maintainable
- Avoid duplicate sections and unstable layouts
- Respect performance budget and image rules