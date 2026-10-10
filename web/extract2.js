const fs = require('fs');
const readline = require('readline');

async function extract() {
    const fileStream = fs.createReadStream('C:\\Users\\taerin\\.gemini\\antigravity-ide\\brain\\50955670-b5c7-483b-a11c-e406ac470a0e\\.system_generated\\logs\\transcript_full.jsonl');
    const rl = readline.createInterface({ input: fileStream, crlfDelay: Infinity });

    for await (const line of rl) {
        try {
            const parsed = JSON.parse(line);
            if (parsed.type === 'PLANNER_RESPONSE' && parsed.tool_calls) {
                for (const call of parsed.tool_calls) {
                    if (call.name === 'write_to_file' && call.args.TargetFile && call.args.TargetFile.endsWith('page.tsx')) {
                        console.log('Found write_to_file for page.tsx! Length:', call.args.CodeContent.length);
                        fs.writeFileSync('C:\\Users\\taerin\\Desktop\\buyxtron\\web\\page_extracted.tsx', call.args.CodeContent, 'utf-8');
                    }
                    if (call.name === 'replace_file_content' && call.args.TargetFile && call.args.TargetFile.endsWith('page.tsx')) {
                        console.log('Found replace_file_content for page.tsx');
                    }
                    if (call.name === 'multi_replace_file_content' && call.args.TargetFile && call.args.TargetFile.endsWith('page.tsx')) {
                        console.log('Found multi_replace_file_content for page.tsx');
                    }
                }
            }
        } catch (e) {}
    }
}
extract();
