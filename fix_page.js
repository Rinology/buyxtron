const fs = require('fs');
let c = fs.readFileSync('src/app/page.tsx', 'utf8');

c = c.replace(/import React.*?\nimport Image.*?\n/, `import React, { useState } from "react";
import Image from "next/image";
import { products } from "../data/productData";
import { ProductCard } from "../components/ProductCard";
import { specData } from "../data/specData";
import { faqData } from "../data/faqData";
`);

const stateLogic = `export default function Home() {
  const [activeTab, setActiveTab] = useState("megaweek");
  const [specModalOpen, setSpecModalOpen] = useState(false);
  const [selectedSpec, setSelectedSpec] = useState<any>(null);
  const [openFaqIndex, setOpenFaqIndex] = useState<number | null>(null);
  const [noticeOpen, setNoticeOpen] = useState(true);

  const openSpecModal = (specId: string) => {
    setSelectedSpec((specData as any)[specId]);
    setSpecModalOpen(true);
  };
  const closeSpecModal = () => setSpecModalOpen(false);

  const toggleFaq = (index: number) => {
    setOpenFaqIndex(openFaqIndex === index ? null : index);
  };

  const scrollToPricingAndTab = (tab: string) => {
    setActiveTab(tab);
    const el = document.getElementById('pricing');
    if (el) el.scrollIntoView({ behavior: 'smooth' });
  };
`;
c = c.replace('export default function Home() {', stateLogic);

c = c.replace(/onClick=\{\(\) => \{\}\}\s*\/\*\s*changeTab\('([^']+)'\)\s*\*\//g, 'onClick={() => setActiveTab(\'$1\')}');
c = c.replace(/onClick=\{\(\) => \{\}\}\s*\/\*\s*openSpecModal\('([^']+)'\)\s*\*\//g, 'onClick={() => openSpecModal(\'$1\')}');
c = c.replace(/onClick=\{\(\) => \{\}\}\s*\/\*\s*closeSpecModal\(\)\s*\*\//g, 'onClick={() => closeSpecModal()}');
c = c.replace(/onClick=\{\(\) => \{\}\}\s*\/\*\s*toggleFaq\(this\)\s*\*\//g, 'onClick={() => toggleFaq(0)}');
c = c.replace(/onClick=\{\(\) => \{\}\}\s*\/\*\s*closeNoticePopup\(\)\s*\*\//g, 'onClick={() => setNoticeOpen(false)}');

c = c.replace(/className="tab-btn ([^"]+)" id="tab-([^"]+)"/g, `className={\`tab-btn $1 \${activeTab === '$2' ? 'text-brand-green border-brand-green' : 'border-transparent text-gray-500 hover:text-gray-300'}\`} id="tab-$2"`);

const prodIdx = c.indexOf('<div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8" id="product-container">');
if (prodIdx > -1) {
    const endProdIdx = c.indexOf('</div>', prodIdx) + 6;
    const newProdGrid = `<div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8" id="product-container">
{(products as any)[activeTab]?.map((product: any, index: number) => (
    <ProductCard key={index} item={product} category={activeTab} />
))}
</div>`;
    c = c.substring(0, prodIdx) + newProdGrid + c.substring(endProdIdx);
}

const faqStart = c.indexOf(' {/* FAQ 13:');
const faqEnd = c.indexOf(' {/* 07. Bottom Call to Action */}');
if (faqStart > -1 && faqEnd > -1) {
    const newFaqList = `<div className="space-y-4" id="faq-list">
{faqData.map((faq, index) => (
    <div key={index} className={\`faq-item bg-gray-900/50 border \${openFaqIndex === index ? 'border-brand-green/50' : 'border-gray-800'} rounded-2xl overflow-hidden transition-colors duration-300 mt-4\`}>
        <button className="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group" onClick={() => toggleFaq(index)}>
            <span className={\`faq-title font-medium text-sm md:text-base flex items-center gap-3 transition-colors \${openFaqIndex === index ? 'text-brand-green' : 'text-gray-200 group-hover:text-white'}\`}>
                <span className={\`font-bold text-lg md:text-xl \${openFaqIndex === index ? 'text-brand-green' : 'text-gray-500'}\`}>Q.</span> {faq.question}
            </span>
            <i className={\`ph \${openFaqIndex === index ? 'ph-caret-up text-brand-green' : 'ph-caret-down text-gray-500 group-hover:text-white'} text-xl faq-icon transition-transform duration-300 ml-4\`}></i>
        </button>
        <div className={\`faq-content transition-all duration-300 ease-in-out px-5 md:px-8 \${openFaqIndex === index ? 'max-h-[1000px] opacity-100' : 'max-h-0 opacity-0 overflow-hidden'}\`}>
            <div className="pb-6 pt-1">
                <div className="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
                    <span className="text-brand-blue font-bold text-lg md:text-xl">A.</span>
                    <div className="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep w-full whitespace-pre-line">
                        {faq.answer}
                    </div>
                </div>
            </div>
        </div>
    </div>
))}
</div>
`;
    c = c.substring(0, faqStart) + newFaqList + c.substring(faqEnd);
}

// Find spec-modal by its id
const specIdIndex = c.indexOf('id="spec-modal"');
if (specIdIndex > -1) {
    // Backtrack to the start of the <div
    let specStart = c.lastIndexOf('<div', specIdIndex);
    // Backtrack to the comment before it
    let commentStart = c.lastIndexOf('{/*', specStart);
    if (commentStart > -1 && specStart - commentStart < 150) {
        specStart = commentStart;
    }
    
    const specModal = `{/* ✅ 스펙 팝업(Modal) */}
<div className={\`fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 transition-opacity duration-300 \${specModalOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'}\`} id="spec-modal">
<div className="absolute inset-0 bg-black/80 backdrop-blur-sm" onClick={() => closeSpecModal()}></div>
<div className={\`relative bg-[#0a0a0a] border border-gray-800 rounded-3xl p-5 sm:p-6 md:p-8 max-w-4xl w-full shadow-2xl transition-transform duration-300 flex flex-col max-h-[90vh] overflow-y-auto \${specModalOpen ? 'scale-100' : 'scale-95'}\`}>
<button className="absolute top-3 right-3 sm:top-4 sm:right-4 md:top-6 md:right-6 text-gray-500 hover:text-white transition-colors z-10 bg-black/50 rounded-full p-1" onClick={() => closeSpecModal()}>
<i className="ph ph-x text-2xl sm:text-3xl"></i>
</button>
{selectedSpec && (
<div className="flex flex-col md:flex-row gap-5 sm:gap-6 md:gap-8 items-center md:items-start mt-2">
<div className="shrink-0 w-full sm:w-auto flex justify-center">
<div className="w-[200px] h-[200px] sm:w-[250px] sm:h-[250px] md:w-[300px] md:h-[300px] rounded-2xl overflow-hidden border border-gray-800 bg-[#111] relative shrink-0">
<img alt="상세 스펙 이미지" className="w-full h-full object-cover" src={selectedSpec.img} />
</div>
</div>
<div className="flex-1 w-full text-left">
<div className="inline-block bg-brand-green/10 text-brand-green px-2.5 sm:px-3 py-1 rounded-full text-[10px] sm:text-xs font-medium mb-3 sm:mb-4 border border-brand-green/20 tracking-wider">PREMIUM DETAIL</div>
<h3 className="text-xl sm:text-2xl md:text-3xl font-semibold mb-3 sm:mb-5 text-white">{selectedSpec.title}</h3>
<div className="text-gray-400 text-xs sm:text-sm md:text-base leading-loose font-normal space-y-2 sm:space-y-3 whitespace-pre-line">
{selectedSpec.desc}
</div>
</div>
</div>
)}
</div>
</div>
    </>
  );
}
`;
    // We completely truncate from specStart and append our clean modal and closing tags!
    c = c.substring(0, specStart) + specModal;
}

const noticePopup = `<div className={\`fixed top-0 sm:top-24 left-0 sm:left-4 md:left-8 z-[100] w-full sm:w-[340px] md:w-[380px] shadow-2xl transition-all duration-500 transform origin-top-left \${noticeOpen ? 'translate-y-0 opacity-100 scale-100' : '-translate-y-4 opacity-0 pointer-events-none scale-95'}\`} id="notice-popup">`;
c = c.replace(/<div className="fixed top-0 sm:top-24 left-0 sm:left-4 md:left-8 z-\[100\] w-full sm:w-\[340px\] md:w-\[380px\] shadow-2xl transition-all duration-500 transform origin-top-left translate-y-0 opacity-100 scale-100" id="notice-popup">/, noticePopup);

fs.writeFileSync('src/app/page.tsx', c);
console.log('Fixed page.tsx dynamically');
