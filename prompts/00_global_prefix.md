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

### FILE RULES
- All files are located in `json_project/`
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
Return ONLY JSON file contents.