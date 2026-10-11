"use client";

import React from "react";
import Image from "next/image";

const IMAGE_BASE_URL = process.env.NEXT_PUBLIC_IMAGE_BASE_URL || "/image";

export const EventSummaryCards = () => {
  const cards = [
    {
      id: "limited-edition",
      label: "한정판 전격 출시",
      labelBg: "bg-[#252834]",
      title: "엑스트론 프로 팻 리미티드 에디션!",
      desc: "3.0 광폭 타이어 탑재로 타는 게 더 즐거운\n엑스트론 프로 팻 리미티드 에디션!",
      imgSrc: `${IMAGE_BASE_URL}/PRODUCT_SET/PRODUCT_FLE_20.png`,
      logoSrc: `${IMAGE_BASE_URL}/PRODUCT_LOGO_SET/PRO_FLE_LOGO2.png`,
    },
    {
      id: "mega-upgrade",
      label: "메가 배터리 무상 업그레이드",
      labelBg: "bg-[#4a5f1d]",
      title: "20Ah 가격 그대로\n28.5Ah 메가 배터리 탑재!",
      desc: "프로 S, GT S, 프로, 투어, 시티 구매 시\n추가금 없이 변경할 수 있습니다.",
      imgSrc: `${IMAGE_BASE_URL}/EVENT/MEGA_BENEFIT_(PC).png`,
    },
    {
      id: "acc-promo",
      label: "액세서리 프로모션",
      labelBg: "bg-[#0c5963]",
      title: "배달 가방 & ZOOM SP442\n이벤트 기간 한정 특가 제공!",
      desc: "프로 리미티드 에디션, 프로 S, GT S,\n프로, 투어, 시티 구매 시",
      imgSrc: `${IMAGE_BASE_URL}/EVENT/DELI_BAG.png`,
      linkText: "클릭하여 확인하기 ➔",
    },
    {
      id: "mega-single",
      label: "MEGA 배터리 단품 구매 가능",
      labelBg: "bg-gradient-to-r from-[#4480aa] to-[#72bf44]",
      title: "28.5Ah 메가 배터리\n단품 구매 오픈!",
      desc: "기존 엑스트론 오너님들을 위한 대용량\n배터리 개별 구매 서비스를 확인해 보세요.",
      imgSrc: `${IMAGE_BASE_URL}/EVENT/MEGA_SINGLE.png`,
      linkText: "클릭하여 확인하기 ➔",
    },
  ];

  const handleCardClick = (id: string) => {
    // 임시 스크롤 액션
    const el = document.getElementById("pricing");
    if (el) el.scrollIntoView({ behavior: "smooth" });
  };

  return (
    <div className="w-full max-w-7xl mx-auto px-4 sm:px-6 mb-16 relative z-10">
      <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
        {cards.map((card) => (
          <div
            key={card.id}
            onClick={() => handleCardClick(card.id)}
            className="flex flex-col bg-[#0a0a0a] rounded-xl overflow-hidden border border-gray-800/80 shadow-[0_0_20px_rgba(0,0,0,0.5)] cursor-pointer group hover:border-gray-600 transition-colors duration-300"
          >
            {/* 상단 라벨 */}
            <div className={`w-full py-3 text-center ${card.labelBg}`}>
              <span className="text-white font-bold text-sm sm:text-base tracking-wide">
                {card.label}
              </span>
            </div>

            {/* 이미지 영역 */}
            <div className="relative w-full aspect-square bg-white flex items-center justify-center p-4">
              <img
                src={card.imgSrc}
                alt={card.label}
                className="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500"
              />
              {card.logoSrc && (
                <div className="absolute bottom-4 right-4 w-24">
                  <img src={card.logoSrc} alt="logo" className="w-full object-contain" />
                </div>
              )}
            </div>

            {/* 텍스트 영역 */}
            <div className="p-5 flex-1 flex flex-col items-center justify-center text-center">
              <h3 className="text-white font-bold text-base sm:text-lg leading-snug mb-3 whitespace-pre-line">
                {card.title}
              </h3>
              <p className="text-gray-400 text-xs sm:text-sm leading-relaxed whitespace-pre-line mb-3">
                {card.desc}
              </p>
              {card.linkText && (
                <span className="text-gray-500 text-xs hover:text-white transition-colors duration-200">
                  {card.linkText}
                </span>
              )}
            </div>
          </div>
        ))}
      </div>
    </div>
  );
};
