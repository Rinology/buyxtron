"use client";

import React from "react";
import Image from "next/image";

// 개발 환경에서는 환경변수가 없으면 로컬 '/image' 경로를 사용합니다.
const IMAGE_BASE_URL = process.env.NEXT_PUBLIC_IMAGE_BASE_URL || "/image";

export default function Home() {
  const scrollToPricingAndTab = (tab: string) => {
    console.log("Scrolled to", tab);
    // 향후 스크롤 기능 구현
  };

  const openAccModal = () => {
    console.log("Opened Access Modal");
    // 향후 모달 기능 구현
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
    </>
  );
}
