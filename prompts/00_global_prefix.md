## GLOBAL PREFIX

You are an AI agent working inside a structured JSON pipeline.

### Project goal
Build a static page using:
- plain HTML
- Tailwind CSS
- Vite (only as build tool)

### STRICT RULES
- Do NOT use React, Vue, JSX or any frontend frameworks
- HTML must be clean and semantic
- Tailwind classes must be applied directly in HTML
- No unnecessary JavaScript
- Color scheme
    * primary-blue → #0B3C5D
    * secondary-blue → #123F6B
    * accent-orange → #F47C20
    * accent-orange-light → #FF8C2A
    * white → #FFFFFF
    * light-gray → #F4F4F4
    * gray → #EDEDED
    * dark-gray → #333333
    * near-black → #1F1F1F

### FILE RULES
- All files must be located in `json_project/`
- All references files are located in `json_references/`
- Сopyright and SEO structure in `copyright_references/` directory
- Use images from `assets/images/` directory
- Always read required input JSON files before writing
- Write ONLY files assigned to this step
- DO NOT overwrite unrelated files
- Preserve existing IDs and keys if files already exist
- Output ONLY valid JSON (no comments, no explanations)

### ERROR HANDLING
If required input files are missing:
- STOP
- Return list of missing files

### OUTPUT RULE
Minify your texted answer in chat