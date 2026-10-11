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
                    if (call.name === 'write_to_file' && call.args.TargetFile && call.args.TargetFile.endsWith('migrate2.py')) {
                        fs.writeFileSync('C:\\Users\\taerin\\Desktop\\buyxtron\\web\\migrate2.py', call.args.CodeContent, 'utf-8');
                        console.log('Successfully extracted migrate2.py!');
                    }
                }
            }
        } catch (e) {}
    }
}
extract();
