import re
from bs4 import BeautifulSoup

def convert_html_to_jsx(html):
    # BeautifulSoup parse
    soup = BeautifulSoup(html, 'html.parser')
    
    # Remove script tags
    for s in soup.select('script'):
        s.extract()
        
    # Extract style tags
    styles = []
    for s in soup.select('style'):
        if s.string:
            styles.append(s.string)
        s.extract()

    # Convert specific attributes
    # BS4 lowercase all attributes, so we need to fix them
    # But wait, html.parser lowercases. lxml might preserve or we can just string replace later.
    
    # Fix the mis-nested p and span inside it.
    # BS4 handles mis-nested tags by closing them properly.
    
    # Render as XML to ensure all tags are closed
    # This also converts <img> to <img/>
    xml_output = soup.decode(formatter="html") 
    # 'html' formatter doesn't close void tags like <br> with /> in bs4 sometimes, 
    # let's use 'html' and manually fix, or just string manipulations.
    # Actually, soup.encode(formatter="html") works, but XML formatter is stricter.
    
    # Let's just use string replacement on the soup's string output, 
    # BS4 closes missing tags automatically.
    output = str(soup)
    
    # Comments: <!-- comment --> to {/* comment */}
    output = re.sub(r'<!--(.*?)-->', r'{/*\1*/}', output, flags=re.DOTALL)
    
    # class to className
    output = output.replace('class="', 'className="')
    output = output.replace("class='", "className='")
    
    # Event handlers
    output = re.sub(r'onclick="([^"]*)"', r'onClick={() => {}} /* \1 */', output)
    output = re.sub(r'onchange="([^"]*)"', r'onChange={() => {}} /* \1 */', output)
    output = re.sub(r'onsubmit="([^"]*)"', r'onSubmit={(e) => e.preventDefault()} /* \1 */', output)
    output = re.sub(r'onerror="([^"]*)"', r'onError={() => {}} /* \1 */', output)

    # React attributes
    output = output.replace('xmlns:xlink="', 'xmlnsXlink="')
    output = output.replace('xml:space="', 'xmlSpace="')
    output = output.replace('viewbox="', 'viewBox="')
    output = output.replace('fill-rule="', 'fillRule="')
    output = output.replace('clip-rule="', 'clipRule="')
    output = output.replace('stroke-width="', 'strokeWidth="')
    output = output.replace('stroke-linecap="', 'strokeLinecap="')
    output = output.replace('stroke-linejoin="', 'strokeLinejoin="')
    output = output.replace('stroke-miterlimit="', 'strokeMiterlimit="')
    output = output.replace('allowfullscreen=""', 'allowFullScreen={true}')
    output = output.replace('allowfullscreen="true"', 'allowFullScreen={true}')
    output = output.replace('frameborder="', 'frameBorder="')
    output = output.replace('tabindex="', 'tabIndex="')
    output = output.replace('readonly="', 'readOnly="')
    output = output.replace('colspan="', 'colSpan="')
    
    # Self closing tags
    def fix_self_closing(match):
        tag = match.group(0)
        if not tag.endswith('/>'):
            return tag[:-1] + ' />'
        return tag

    tags_to_close = ['img', 'br', 'hr', 'input', 'link', 'meta', 'col', 'source', 'path', 'rect', 'circle', 'polygon', 'use']
    for t in tags_to_close:
        output = re.sub(r'<' + t + r'\b[^>]*?(?<!/)>', fix_self_closing, output, flags=re.IGNORECASE)

    # Convert src paths
    output = re.sub(r'src="/assets/([^"]+)"', r'src={`${IMAGE_BASE_URL}/\1`}', output)
    output = re.sub(r'src="/image/([^"]+)"', r'src={`${IMAGE_BASE_URL}/\1`}', output)
    
    # Replace inline styles. To avoid JSX syntax errors with style="...", we strip it or convert it.
    output = re.sub(r'style="([^"]+)"', r'style={{}} /* \1 */', output)
    
    # BS4 might convert `<` to `&lt;` in text, which is good for JSX.
    
    # Fix the specific TS2657 errors for multiple expressions.
    # We will wrap the output in a Fragment.
    return f"<>\\n{output}\\n</>", styles

with open('../260928_FINAL.php', 'r', encoding='utf-8') as f:
    content = f.read()

start_marker = "<!-- 02. EVENT Section -->"
end_marker = "</body>"

start_idx = content.find(start_marker)
end_idx = content.find(end_marker)
if start_idx == -1 or end_idx == -1:
    print("Could not find start or end marker")
    exit(1)

html_content = content[start_idx:end_idx]

jsx_content, styles = convert_html_to_jsx(html_content)

page_template = """"use client";

import React from "react";
import Image from "next/image";

const IMAGE_BASE_URL = process.env.NEXT_PUBLIC_IMAGE_BASE_URL || "/image";

export default function Home() {
  const scrollToPricingAndTab = (tab: string) => {
    console.log("Scrolled to", tab);
  };

  const openAccModal = () => {
    console.log("Opened Access Modal");
  };

  return (
    <>
      <section className="relative min-h-screen flex items-center justify-center overflow-hidden bg-[#050505] pt-24 pb-24">
        
        {/* Background Glow */}
        <div className="absolute inset-0 z-0 opacity-30 pointer-events-none">
          <div className="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-brand-blue rounded-full mix-blend-screen filter blur-[150px] opacity-40"></div>
        </div>

        <div className="relative z-10 container mx-auto px-4 sm:px-6 text-center flex flex-col items-center mt-4 md:mt-8">
          
          {/* Logo */}
          <div className="mb-6 md:mb-10">
            <img 
              src={`${IMAGE_BASE_URL}/BATTERY_LOGO_SET/XxQ.png`} 
              alt="XTRON x QUALISPORTS" 
              className="h-6 sm:h-8 md:h-10 object-contain drop-shadow-xl" 
            />
          </div>

          <div className="mb-10 w-full flex flex-col items-center">
            
            {/* 1. Key Visual */}
            <div className="w-full max-w-5xl mx-auto mb-8 sm:mb-12 relative group z-10 px-4 sm:px-0">
              <div className="absolute inset-0 bg-gradient-to-tr from-[#05e5f9] to-[#c0fb0c] rounded-[2rem] blur-2xl opacity-20 group-hover:opacity-40 transition duration-700 pointer-events-none"></div>
              
              <div className="relative w-full aspect-video rounded-2xl sm:rounded-[2rem] overflow-hidden border border-gray-800/80 shadow-2xl z-10 bg-[#0a0a0a]">
                <img 
                  src={`${IMAGE_BASE_URL}/EVENT/MEGA_DAY_TITLE.webp`} 
                  alt="MEGA DAY 이벤트" 
                  className="absolute inset-0 w-full h-full object-cover transform group-hover:scale-[1.02] transition-transform duration-700" 
                />
              </div>
            </div>

            {/* 2. HTML 텍스트 타이틀 */}
            <h2 className="text-3xl sm:text-4xl md:text-5xl font-black tracking-tighter mb-4 sm:mb-6 leading-tight text-center relative z-10">
              <span className="text-transparent bg-clip-text bg-gradient-to-r from-[#05e5f9] to-[#c0fb0c] drop-shadow-[0_0_15px_rgba(192,251,12,0.3)]">
                무이자 24개월 이벤트
              </span>
            </h2>
            
            {/* 3. 내용 (설명) 영역 */}
            <p className="mb-8 text-sm sm:text-base md:text-lg text-gray-300 font-normal break-keep max-w-3xl px-4 leading-relaxed text-center relative z-10">
              <strong className="text-white font-bold">한정판</strong>부터 <strong className="text-white font-bold">프로 S, GT S, 프로, 시티, 투어</strong>까지!<br className="hidden sm:block" />
              해당 모델 구매 시 주어지는 엑스트론만의 특별한 <strong className="text-[#c0fb0c] font-black text-base sm:text-lg md:text-xl underline decoration-[#c0fb0c]/40 underline-offset-4">혜택</strong>을 만나보세요.
            </p>

            {/* 4. 이벤트 기간 및 구매 방법 */}
            <div className="relative group mt-2 w-full max-w-2xl px-4 sm:px-0 z-10">
              <div className="absolute inset-0 bg-gradient-to-r from-[#05e5f9] to-[#c0fb0c] rounded-2xl blur-md opacity-20 group-hover:opacity-30 transition duration-500"></div>
              
              <div className="relative flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-6 bg-[#0a0a0a] border border-[#05e5f9]/30 rounded-2xl px-6 py-4 sm:py-5">
                <div className="flex items-center gap-2.5">
                  <span className="px-2.5 py-1 bg-[#c0fb0c]/10 text-[#c0fb0c] border border-[#c0fb0c]/20 text-[10px] sm:text-xs font-bold rounded-md tracking-widest">기간</span>
                  <span className="text-sm sm:text-base font-bold text-white tracking-wide">한정 수량 소진 시 종료</span>
                </div>
                
                <div className="hidden sm:block w-px h-5 bg-gray-700"></div>
                
                <div className="flex items-center gap-2.5">
                  <span className="px-2.5 py-1 bg-[#05e5f9]/10 text-[#05e5f9] border border-[#05e5f9]/20 text-[10px] sm:text-xs font-bold rounded-md tracking-widest">구매</span>
                  <span className="text-xs sm:text-sm text-gray-300 font-medium">공식 홈페이지 / 전국 대리점 예약 가능</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
"""

page_template += "\n" + jsx_content + "\n"
page_template += """
    </>
  );
}
"""

with open('src/app/page.tsx', 'w', encoding='utf-8') as f:
    f.write(page_template)
print("Successfully wrote to page.tsx")

with open('src/app/globals.css', 'a', encoding='utf-8') as f:
    for s in styles:
        f.write("\n" + s + "\n")
print("Successfully injected styles into globals.css")
