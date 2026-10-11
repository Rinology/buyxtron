"use client";

import React from "react";

interface FaqAccordionItemProps {
  isOpen: boolean;
  onToggle: () => void;
  question: React.ReactNode;
  qColor?: string;
  aColor?: string;
  isHighlight?: boolean;
  children: React.ReactNode;
}

export function FaqAccordionItem({
  isOpen,
  onToggle,
  question,
  qColor = "text-brand-green",
  aColor = "text-brand-blue",
  isHighlight = false,
  children,
}: FaqAccordionItemProps) {
  return (
    <div
      className={`border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700 ${
        isHighlight ? "border-l-4 border-l-[#c0fb0c]" : ""
      }`}
    >
      <button
        type="button"
        className="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group cursor-pointer"
        onClick={onToggle}
        aria-expanded={isOpen}
      >
        <span className="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
          <span className={`${qColor} font-bold text-lg md:text-xl shrink-0`}>Q.</span>
          <span>{question}</span>
        </span>
        <i
          className={`ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4 shrink-0 ${
            isOpen ? "rotate-180 text-white" : ""
          }`}
        ></i>
      </button>
      <div
        className={`faq-content overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8 ${
          isOpen ? "max-h-[1200px] opacity-100 pb-6 pt-1" : "max-h-0 opacity-0 py-0 pointer-events-none"
        }`}
      >
        <div className="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
          <span className={`${aColor} font-bold text-lg md:text-xl shrink-0 mt-0.5`}>A.</span>
          <div className="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep w-full">
            {children}
          </div>
        </div>
      </div>
    </div>
  );
}
