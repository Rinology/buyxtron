const fs = require('fs');
let c = fs.readFileSync('src/app/page.tsx', 'utf8');

// 1. Fix Imports & State
const imports = `import React, { useState } from "react";
import Image from "next/image";
import { products } from "../data/productData";
import { ProductCard } from "../components/ProductCard";
import { specData } from "../data/specData";
import { faqData } from "../data/faqData";
`;
c = c.replace(/import React.*?\nimport Image.*?\n/, imports);

const stateLogic = `export default function Home() {
  const [activeTab, setActiveTab] = useState("megaweek");
  const [specModalOpen, setSpecModalOpen] = useState(false)<
  const [selectedSpec, setSelectedSpec] = useState<any>(null)<
  const [openFaqIndex, setOpenFaqIndex] = useState<number | null>(null);
  const [noticeOpen, setNoticeOpen] = useState(true);

  const openSpecModal = (specId: string) => {
    setSelectedSpec(specData[specId]);
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
`
c = c.replace('export default function Home() {', stateLogic);

// 2. Fix Tabs and Events
c = c.replace(/onClick=\{\(\) => {\}\} \\/\\* changeTab\h('[^']+')\h\*\\/|/onClick=\{()=>changeTab('[^']+')}/g, (match, g1) => `onClick={() => setActiveTab('${g1}')}`);
c = c.replace(//// TBD//);


fs.writeFileSync('src/app/page.tsx', c);