"use client";

import React, { useState } from "react";
import Image from "next/image";
import { products } from "../data/productData";
import { ProductCard } from "../components/ProductCard";
import { specDetails } from "../data/specData";
import { faqData } from "../data/faqData";
import { EventSummaryCards } from "../components/EventSummaryCards";
import { EventPopup } from "../components/EventPopup";

const IMAGE_BASE_URL = process.env.NEXT_PUBLIC_IMAGE_BASE_URL || "/image";

export default function Home() {
  const [activeTab, setActiveTab] = useState("megaweek");
  const [specModalOpen, setSpecModalOpen] = useState(false);
  const [selectedSpec, setSelectedSpec] = useState<any>(null);
  const [openFaqIndex, setOpenFaqIndex] = useState<number | null>(null);
  const [noticeOpen, setNoticeOpen] = useState(true);

  const openSpecModal = (specId: string) => {
    setSelectedSpec((specDetails as any)[specId]);
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
  const openAccModal = () => {
    console.log("Opened Access Modal");
  };

  return (
    <>
      <EventPopup />
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

            <div className="mt-16 w-full">
              <EventSummaryCards />
            </div>
            
          </div>
        </div>
      </section>

<>\n{/* 02. EVENT Section */}
<section className="py-24 bg-[#0a0a0a] relative border-t border-gray-900">
<div className="container mx-auto px-6">
<div className="text-center mb-16">
<h2 className="text-3xl md:text-5xl font-bold mb-4">
                    자전거만 사세요!<p className="break-keep"><span className="text-xtron-400">나머지는 엑스트론이 다 준비했습니다.</span></p>
</h2>
<p className="text-lg text-gray-400 font-normal">구매자 전원 100% 증정! 안전부터 편의성까지 완벽 풀패키지</p>
<p className="text-xs sm:text-sm text-gray-500 font-normal mt-6 break-keep leading-relaxed text-left md:text-center">
    ※ 본 사은품은 선착순 한정 수량으로 제공됩니다. <br/>준비된 물량이 모두 소진될 경우, 별도의 안내 없이 해당 품목은 증정 혜택에서 자동 제외(이벤트 조기 종료)될 수 있으니 구매를 서둘러 주세요.
</p>
</div>
<div className="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8 max-w-5xl mx-auto mb-6">
<div className="glass-panel rounded-3xl p-8 relative overflow-hidden group border-xtron-900 flex flex-col h-full hover:border-brand-blue/50 transition-colors shadow-lg">
<div className="mb-6">
<span className="bg-brand-blue text-white text-xs font-medium px-3 py-1 rounded-full shadow-lg tracking-wider">Premium Gift</span>
</div>
<div className="flex-1 mb-6 flex flex-col">
<h3 className="text-2xl md:text-3xl font-bold mb-3">엑스트론 타입원 헬멧</h3>
<p className="text-gray-400 text-sm md:text-base leading-relaxed font-normal flex-1 break-keep">
                            안전과 스타일을 동시에😎<br/>한국인 두상에 완벽하게 밀착되어 장시간 착용해도<br/>편안한 초경량 아시안 핏 프리미엄 헬멧!
                            <span className="block text-xs text-brand-green mt-3 font-medium">* 증정 대상: 프로미니, GT미니 제외</span>
</p>
<div className="mt-5 inline-flex items-center gap-1.5 bg-brand-green/10 border border-brand-green/20 px-3 py-2 rounded-lg w-max">
<i className="ph-fill ph-gift text-brand-green text-xl"></i>
<span className="text-brand-green font-bold text-sm tracking-wide">70,000원 상당</span>
</div>
</div>
<div className="h-56 rounded-2xl w-full mt-auto overflow-hidden border border-gray-800 bg-white p-4 relative flex items-center justify-center">
<div className="absolute inset-0 bg-brand-blue/5 blur-xl group-hover:bg-brand-blue/10 transition-colors duration-500"></div>
<img alt="타입원 헬멧" className="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500 relative z-10" src={`${IMAGE_BASE_URL}/PREMIUM_SET/TYPE1-HELMET.png`}/>
</div>
</div>
{/* 품절 ON/OFF 스위치 작동을 위한 스타일 (건드리지 마세요) */}

{/* 💡 [마법의 스위치] 품절일 땐 "true", 재고가 들어오면 "false" 로 글자만 바꾸세요! 딸깍! */}
<div className="starter-kit glass-panel rounded-3xl p-8 relative overflow-hidden group border-brand-green-900 flex flex-col h-full hover:border-brand-green/50 transition-colors shadow-lg" data-soldout="false">
{/* 품절 시 나타나는 안내 화면 (자동으로 숨겨지거나 나타납니다) */}
<div className="soldout-overlay absolute inset-0 z-50 flex-col items-center justify-center bg-black/60 backdrop-blur-[2px] pointer-events-none">
<span className="inline-block text-white font-black text-2xl md:text-3xl border-4 border-brand-green px-6 py-2 rotate-[-5deg] shadow-[0_0_20px_rgba(114,191,68,0.4)] bg-black/80 rounded-xl tracking-widest mb-3">
            일시 품절
        </span>
<span className="bg-brand-green text-gray-900 font-bold text-sm md:text-base px-4 py-1.5 rounded-full shadow-lg animate-pulse mb-2">
            자전거 수령 후 별도 발송 🚚
        </span>
<span className="text-brand-green font-medium text-xs sm:text-sm bg-gray-900 border border-brand-green/30 px-3 py-1 rounded-md shadow-md">
            * 9월 중 입고 시 순차 발송 예정
        </span>
</div>
{/* 4종 사은품 본문 (스위치에 따라 자동으로 흑백 처리됩니다) */}
<div className="starter-content flex flex-col h-full transition-all duration-500">
<div className="mb-6">
<span className="bg-brand-green text-white text-xs font-medium px-3 py-1 rounded-full shadow-lg tracking-wider">Starter Kit</span>
</div>
<div className="flex-1 mb-6 flex flex-col">
<h3 className="text-2xl md:text-3xl font-bold mb-3">라이더 필수 4종 키트</h3>
<p className="text-gray-400 text-sm md:text-base leading-relaxed font-normal flex-1 break-keep">
                라이딩에 즉시 필요한 필수 용품들을 한 번에!<br/>프론트 가방, 핸드폰 거치대, 자물쇠, 수동 펌프 전원 증정✨
                <span className="block text-xs text-brand-green mt-3 font-medium">* 증정 대상: 전제품</span>
</p>
<div className="mt-5 inline-flex items-center gap-1.5 bg-brand-green/10 border border-brand-green/20 px-3 py-2 rounded-lg w-max">
<i className="ph-fill ph-gift text-brand-green text-xl"></i>
<span className="text-brand-green font-bold text-sm tracking-wide">50,000원 상당</span>
</div>
</div>
<div className="grid grid-cols-2 gap-3 mt-auto h-56 relative z-10">
<div className="bg-white rounded-2xl border border-gray-200 flex items-center justify-center p-3 relative overflow-hidden group/item shadow-sm">
<img alt="프론트 가방" className="w-full h-full object-contain" src={`${IMAGE_BASE_URL}/GIF_SET/FRONT-BAG.png`}/>
</div>
<div className="bg-white rounded-2xl border border-gray-200 flex items-center justify-center p-3 relative overflow-hidden group/item shadow-sm">
<img alt="거치대" className="w-full h-full object-contain" src={`${IMAGE_BASE_URL}/GIF_SET/PHONE-HOLDER.png`}/>
</div>
<div className="bg-white rounded-2xl border border-gray-200 flex items-center justify-center p-3 relative overflow-hidden group/item shadow-sm">
<img alt="자물쇠" className="w-full h-full object-contain" src={`${IMAGE_BASE_URL}/GIF_SET/LOCK.png`}/>
</div>
<div className="bg-white rounded-2xl border border-gray-200 flex items-center justify-center p-3 relative overflow-hidden group/item shadow-sm">
<img alt="수동 펌프" className="w-full h-full object-contain" src={`${IMAGE_BASE_URL}/GIF_SET/PUMB.png`}/>
</div>
</div>
</div>
</div>
</div></div></section>
{/* 03. 타사 구매 비교 Section */}
<section className="py-24 bg-xtron-card">
<div className="container mx-auto px-6 max-w-5xl">
<div className="text-center mb-16">
<h2 className="text-3xl md:text-5xl font-bold mb-4 break-keep">
                    월 납입금의 함정,<br/>최종 <span className="text-xtron-400">체감가</span>를 확인하셨나요?
                </h2>
<p className="text-lg text-gray-400 font-normal break-keep">눈속임 없는 진짜 혜택. 쓰시던 카드 그대로 24개월 무이자 할부.</p>
<p className="text-[13px] text-gray-600 font-normal">*엑스트론 프로미니 모델 타사 장기 렌탈 비교, 24개월 렌탈 진행 시</p>
</div>
<div className="grid grid-cols-1 md:grid-cols-2 gap-8">
<div className="bg-gray-900/30 border border-gray-800 rounded-2xl p-8 relative opacity-80 grayscale-[20%] transition-all hover:grayscale-0">
<div className="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-gray-800 text-gray-400 px-4 py-1 rounded-full text-sm font-medium">
                        타사 인수형 렌탈
                    </div>
<div className="text-center mb-8 mt-4">
<p className="text-gray-500 text-sm mb-1 font-normal">엑스트론 프로미니 24개월 계약 시</p>
<p className="text-3xl font-medium text-gray-500 mb-4">월 79,900원</p>
<ul className="text-left text-gray-500 space-y-3 text-sm bg-gray-950/50 p-4 rounded-lg font-normal">
<li><i className="ph-fill ph-x-circle mr-2 text-gray-600"></i>원금보다 무려 52만 원 비싼 총액</li>
<li><i className="ph-fill ph-x-circle mr-2 text-gray-600"></i>렌탈 수수료 명목의 숨은 이자 폭탄</li>
<li><i className="ph-fill ph-x-circle mr-2 text-gray-600"></i>신용 조회 및 복잡한 서류 심사</li>
</ul>
</div>
<div className="border-t border-gray-800 pt-6">
<p className="text-center text-sm text-gray-500 mb-2 font-normal">계약 만료 시 최종 총비용</p>
<div className="w-full bg-gray-800 h-6 rounded-full overflow-hidden flex items-end">
<div className="bg-gray-600 h-full w-full opacity-60 flex justify-end items-center px-3"><span className="text-xs text-gray-300 font-bold">191만 원</span></div>
</div>
<p className="text-right text-gray-500 font-medium mt-2 text-xl">기기값의 약 138% 지불</p>
</div>
</div>
<div className="bg-gradient-to-b from-[#0f1b29] to-[#0a0f14] border border-xtron-500/50 rounded-2xl p-8 relative shadow-[0_0_40px_rgba(47,98,134,0.2)] transform md:-translate-y-4">
<div className="absolute -top-6 sm:-top-4 left-1/2 transform -translate-x-1/2 bg-xtron-500 text-white px-5 sm:px-6 py-1.5 sm:py-1 rounded-2xl sm:rounded-full text-sm font-medium shadow-lg shadow-xtron-500/30 text-center leading-tight w-max">
                        엑스트론 전용 <br className="block sm:hidden"/>24개월 무이자
                    </div>
<div className="text-center mb-8 mt-4">
<p className="text-xtron-200 text-sm mb-1 font-normal">엑스트론 프로미니 24개월 할부 시 (이자 0원)</p>
<p className="text-4xl font-semibold text-brand-green mb-4">월 57,916원</p>
<ul className="text-left text-xtron-100 space-y-3 text-sm bg-xtron-900/30 p-4 rounded-lg font-normal">
<li><i className="ph-fill ph-check-circle mr-2 text-brand-green"></i>결제 즉시 내 명의 100% 완전 소유</li>
<li><i className="ph-fill ph-check-circle mr-2 text-brand-green"></i>기기 정상가 외에 단 1원도 추가 없음</li>
<li><i className="ph-fill ph-check-circle mr-2 text-brand-green"></i>쓰던 카드 그대로 복잡한 심사 없이</li>
</ul>
</div>
<div className="border-t border-xtron-800 pt-6">
<p className="text-center text-sm text-gray-400 mb-2 font-normal">최종 체감가 (정상가 그대로)</p>
<div className="w-full bg-gray-800 h-6 rounded-full overflow-hidden flex items-end relative">
<div className="bg-gradient-to-r from-brand-blue to-brand-green h-full w-[75%] flex justify-end items-center px-3 relative z-10">
<span className="text-xs text-white font-bold">139만 원</span>
</div>
<div className="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTAgMGwyMCAyMEgwaC0yMHoiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4xKSIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+')] opacity-20">
</div>
</div>
<p className="text-right text-brand-green font-medium mt-2 text-xl">정직한 기기 원금 100%</p>
</div>
</div>
</div>
</div>
</section>
{/* 03-5. 실제 가격 비교 테이블 및 명세서 Section */}
<section className="pb-24 pt-4 bg-xtron-card border-b border-gray-900">
<div className="container mx-auto px-6 max-w-5xl">
{/* 렌탈 비교 테이블 패널 */}
<div className="glass-panel rounded-3xl p-6 md:p-12 border-brand-green/20 relative overflow-hidden shadow-2xl mb-8">
<div className="absolute top-0 right-0 w-64 h-64 bg-gray-700/10 rounded-full mix-blend-screen filter blur-[80px]">
</div>
<div className="absolute bottom-0 left-0 w-64 h-64 bg-brand-green/10 rounded-full mix-blend-screen filter blur-[80px]">
</div>
<div className="grid grid-cols-1 lg:grid-cols-3 gap-8 md:gap-12 items-center relative z-10">
<div className="lg:col-span-2">
<h3 className="text-2xl font-semibold mb-6 text-center md:text-left">렌탈의 민낯, <p><span className="text-brand-green">숫자로 직접 비교하세요.</span></p>
</h3>
<p className="text-xs text-gray-400 mb-4 text-center block md:hidden animate-pulse break-keep">
<i className="ph-bold ph-arrows-left-right text-brand-green align-middle mr-1"></i> *모바일 이용 시 표를
                            좌우측으로 슬라이드 해보세요!
                        </p>
<div className="overflow-x-auto rounded-2xl border border-gray-800 bg-[#0a0a0a]">
<table className="w-full text-left border-collapse min-w-[500px] md:min-w-[500px]">
<thead>
<tr className="bg-gray-900 border-b border-gray-800">
<th className="p-4 font-medium text-gray-400 w-1/4">구분</th>
{/* 📱 모바일에서만 보이는 엑스트론 (앞쪽 배치) */}
<th className="p-4 font-semibold text-brand-green w-[37.5%] text-center border-l border-gray-800 bg-brand-green/10 table-cell md:hidden">
                                            엑스트론 24개월
                                        </th>
{/* 공통: 타사 장기 렌탈 (가운데 고정) */}
<th className="p-4 font-medium text-gray-500 w-[37.5%] text-center border-l border-gray-800">
                                            타사 장기 렌탈
                                        </th>
{/* 💻 PC에서만 보이는 엑스트론 (원래 자리) */}
<th className="p-4 font-semibold text-brand-green w-[37.5%] text-center border-l border-gray-800 bg-brand-green/10 hidden md:table-cell">
                                            엑스트론 24개월
                                        </th>
</tr>
</thead>
<tbody>
<tr className="border-b border-gray-800">
<td className="p-4 font-medium text-gray-300 bg-gray-900/50">월 납부금</td>
{/* 📱 모바일용 엑스트론 값 (앞) */}
<td className="p-4 text-center text-white font-medium border-l border-gray-800 bg-brand-green/5 whitespace-nowrap table-cell md:hidden">
                                            57,916원
                                        </td>
{/* 공통 타사 값 */}
<td className="p-4 text-center text-gray-500 border-l border-gray-800 whitespace-nowrap">
                                            79,900원
                                        </td>
{/* 💻 PC용 엑스트론 값 (뒤) */}
<td className="p-4 text-center text-white font-medium border-l border-gray-800 bg-brand-green/5 whitespace-nowrap hidden md:table-cell">
                                            57,916원
                                        </td>
</tr>
<tr>
<td className="p-4 font-medium text-gray-300 bg-gray-900/50">총 납부금<br/><span className="text-[11px] text-gray-500 font-normal">(24개월 기준)</span></td>
{/* 📱 모바일용 엑스트론 값 (앞) */}
<td className="p-4 text-center text-brand-green font-bold border-l border-gray-800 text-xl bg-brand-green/5 whitespace-nowrap table-cell md:hidden">
                                            1,390,000원
                                        </td>
{/* 공통 타사 값 */}
<td className="p-4 text-center text-gray-400 border-l border-gray-800 text-lg font-medium whitespace-nowrap">
                                            1,917,600원
                                        </td>
{/* 💻 PC용 엑스트론 값 (뒤) */}
<td className="p-4 text-center text-brand-green font-bold border-l border-gray-800 text-xl bg-brand-green/5 whitespace-nowrap hidden md:table-cell">
                                            1,390,000원
                                        </td>
</tr>
</tbody>
</table>
</div>
</div>
<div className="lg:col-span-1 flex flex-col justify-center items-center text-center p-8 bg-gray-900/60 border border-gray-800 rounded-2xl h-full shadow-inner relative overflow-hidden group">
<div className="absolute inset-0 bg-red-500/5 group-hover:bg-red-500/10 transition-colors duration-500 blur-2xl">
</div>
<p className="text-gray-400 text-sm font-medium mb-2 tracking-wider relative z-10">타사 렌탈 선택 시</p>
<h4 className="text-xl font-medium text-gray-300 mb-3 relative z-10">손해 보는 금액</h4>
<div className="flex items-baseline justify-center gap-1 mb-4 relative z-10">
<span className="text-[42px] md:text-[54px] px-1 py-1 font-black text-transparent bg-clip-text bg-gradient-to-br from-red-400 to-rose-600 drop-shadow-[0_0_15px_rgba(225,29,72,0.4)] tracking-tighter">527,600</span>
<span className="text-lg font-medium text-gray-400">원</span>
</div>
<p className="text-xs text-gray-400 leading-relaxed font-normal relative z-10">
                            자전거 한 대를 더 살 수 있는 금액,<br/>불필요한 이자로 날리지 마세요.
                        </p>
</div>
</div>
<p className="text-[11px] text-gray-500 mt-6 text-center md:text-right font-normal">
                    * 엑스트론 프로미니 모델 타사 장기 렌탈 비교, 24개월 렌탈 진행 시
                </p>
</div>
{/* 최종 체감가 영수증 패널 */}
<div className="bg-gradient-to-br from-[#111] to-[#050505] border border-gray-800 rounded-3xl p-6 md:p-10 relative overflow-hidden shadow-2xl group hover:border-brand-green/30 transition-colors duration-500">
{/* 배경 효과 */}
<div className="absolute top-0 right-0 w-96 h-96 bg-brand-green/5 rounded-full blur-[80px] pointer-events-none group-hover:bg-brand-green/10 transition-colors duration-500">
</div>
<div className="flex flex-col lg:flex-row gap-10 items-center relative z-10">
{/* 영수증 명세서 (좌측) */}
<div className="w-full lg:w-3/5">
<div className="flex items-center gap-3 mb-6">
<i className="ph-fill ph-receipt text-3xl text-gray-500"></i>
<h3 className="text-xl md:text-2xl font-semibold text-white">엑스트론 혜택 명세서</h3>
</div>
<div className="space-y-4 font-normal">
{/* 기준가 */}
<div className="flex justify-between items-end border-b border-gray-800 pb-4">
<span className="text-gray-400 text-sm md:text-base">엑스트론 프로미니<br/>타사 인수형 렌탈 기준 <span className="text-[10px] sm:text-[11px] text-gray-500 ml-1 hidden sm:inline">(*렌탈 수수료
                                        포함 총액)</span></span>
<span className="text-lg sm:text-xl text-gray-300 font-semibold tracking-wide">1,917,600원</span>
</div>
{/* 할인 내역 */}
<div className="space-y-3 pt-2">
<div className="flex justify-between items-center text-brand-green bg-brand-green/5 px-3 py-2 rounded-lg border border-brand-green/10">
<span className="text-xs sm:text-sm font-medium flex items-center gap-2">
<i className="ph-bold ph-minus hidden sm:inline"></i> 24개월 무이자 혜택 <span className="text-[10px] opacity-70 hidden md:inline">(*이자 절감)</span>
</span>
<span className="font-bold tracking-wide text-sm sm:text-base">- 527,600원</span>
</div>
{/* ZOOM 싯포스트 안장 할인 제외 (프로미니 기준이므로) */}
<div className="flex justify-between items-center text-brand-green/80 px-3 py-1">
<span className="text-xs sm:text-sm flex items-center gap-2"><i className="ph-bold ph-minus hidden sm:inline"></i> 엑스트론 타입원 헬멧</span>
<span className="font-medium tracking-wide text-sm sm:text-base">- 70,000원</span>
</div>
<div className="flex justify-between items-center text-brand-green/80 px-3 py-1">
<span className="text-xs sm:text-sm flex items-center gap-2"><i className="ph-bold ph-minus hidden sm:inline"></i> 라이더 스타터 킷 4종</span>
<span className="font-medium tracking-wide text-sm sm:text-base">- 50,000원</span>
</div>
</div>
</div>
</div>
{/* 최종 체감가 (우측) */}
<div className="w-full lg:w-2/5 flex flex-col justify-center items-center text-center p-6 sm:p-8 bg-gradient-to-b from-brand-green/20 to-brand-green/5 border border-brand-green/40 rounded-2xl relative shadow-[0_0_30px_rgba(114,191,68,0.15)] mt-4 lg:mt-0">
{/* 반짝이는 상단 뱃지 */}
<div className="absolute -top-4 bg-brand-green text-gray-900 text-xs sm:text-sm font-black px-4 sm:px-5 py-1.5 rounded-full shadow-[0_0_15px_rgba(114,191,68,0.6)] animate-pulse whitespace-nowrap">
                            총 혜택가치 최대 64만원 상당!
                        </div>
<p className="text-brand-green/80 text-xs sm:text-sm font-medium mt-4 mb-1 tracking-widest">FINAL
                            PRICE</p>
<h4 className="text-xl sm:text-2xl md:text-3xl font-bold text-white mb-2">최대 체감가</h4>
<div className="flex items-baseline justify-center gap-2 mt-2 mb-1">
<span className="text-4xl sm:text-5xl md:text-6xl font-black text-transparent bg-clip-text bg-gradient-to-b from-white to-gray-300 tracking-tight drop-shadow-lg pr-2">1,270,000</span>
<span className="text-xl sm:text-2xl text-gray-400 font-medium">원</span>
</div>
<p className="text-[10px] sm:text-[11px] text-gray-500 mt-3 font-normal leading-relaxed break-keep px-2">
                            * 기기 원금에서 모든 증정 혜택과 이자 절감분을 제한 가상의 체감 가격입니다.
                        </p>
</div>
</div>
</div>
</div>
</section>
{/* 03-8. 토스페이먼츠 제휴 카드 Section */}
<section className="py-24 bg-[#020202] relative border-b border-gray-900 overflow-hidden">
<div className="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-[#3182f6]/5 rounded-full blur-[100px] pointer-events-none">
</div>
<div className="container mx-auto px-6 max-w-5xl relative z-10">
<div className="text-center mb-16">
<div className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gray-900 border border-gray-800 text-gray-400 text-xs sm:text-sm font-medium mb-6">
<i className="ph-fill ph-x-circle text-red-500"></i>
<span className="line-through decoration-red-500/50">제휴 할인, 신규 카드 발급 조건 NO!</span>
</div>
<h2 className="text-3xl md:text-5xl font-bold mb-4 leading-tight">
                    쓰시는 <span className="text-white">카드 그대로,</span><br/>
</h2>
<h3 className="text-2xl md:text-3xl font-medium text-gray-400 mb-6 flex items-center justify-center">
<img alt="엑스트론 로고" className="h-6 md:h-8 object-contain" src={`${IMAGE_BASE_URL}/BATTERY_LOGO_SET/XTRON_LOGO.png`}/>
<span className="text-gray-600 font-light mx-3 md:mx-4 text-xl md:text-2xl">X</span>
<span className="text-[#3182f6] font-bold tracking-tight">토스페이먼츠</span>
</h3>
<p className="text-lg sm:text-xl text-brand-green font-medium">
                    번거로운 절차 없이 무이자 혜택만 누리세요!
                </p>
</div>
<div className="grid grid-cols-2 sm:grid-cols-3 gap-3 sm:gap-4 max-w-3xl mx-auto">
<div className="group relative h-24 sm:h-28 rounded-xl bg-[#0a0a0a] border border-blue-500/50 flex flex-col justify-between p-4 sm:p-5 overflow-hidden transition-all duration-300 hover:-translate-y-2 shadow-[0_10px_30px_rgba(59,130,246,0.15)] cursor-default">
<div className="absolute -right-8 -top-8 w-24 h-24 rounded-full blur-[30px] opacity-20 bg-blue-500 transition-opacity duration-500"></div>
<div className="absolute top-3 right-3 sm:top-4 sm:right-4 z-20">
<span className="bg-blue-500/10 border border-blue-500/30 text-blue-400 text-[9px] sm:text-[10px] px-2 py-1 rounded-full font-medium tracking-wide">최대 무이자 24개월</span>
</div>
<div className="flex justify-between items-end h-full relative z-10">
<div className="flex flex-col justify-between h-full">
<i className="ph-fill ph-credit-card text-2xl sm:text-3xl text-blue-500 transition-colors duration-300"></i>
<span className="text-white text-xs sm:text-sm font-regular transition-colors duration-300">신한카드</span>
</div>
<div className="w-10 h-10 sm:w-14 sm:h-14 flex items-center justify-center">
<img alt="신한카드 로고" className="w-full h-full object-contain opacity-100 transition-all duration-500" loading="lazy" src={`${IMAGE_BASE_URL}/CARD_LOGO/SHINHAN_CARD.png`}/>
</div>
</div>
<div className="absolute bottom-0 left-0 w-full h-1 bg-blue-500 transition-colors duration-300"></div>
</div>
<div className="group relative h-24 sm:h-28 rounded-xl bg-[#0a0a0a] border border-blue-600/50 flex flex-col justify-between p-4 sm:p-5 overflow-hidden transition-all duration-300 hover:-translate-y-2 shadow-[0_10px_30px_rgba(37,99,235,0.15)] cursor-default">
<div className="absolute -right-8 -top-8 w-24 h-24 rounded-full blur-[30px] opacity-20 bg-blue-600 transition-opacity duration-500"></div>
<div className="absolute top-3 right-3 sm:top-4 sm:right-4 z-20">
<span className="bg-blue-600/10 border border-blue-600/30 text-blue-400 text-[9px] sm:text-[10px] px-2 py-1 rounded-full font-medium tracking-wide">최대 무이자 24개월</span>
</div>
<div className="flex justify-between items-end h-full relative z-10">
<div className="flex flex-col justify-between h-full">
<i className="ph-fill ph-credit-card text-2xl sm:text-3xl text-blue-600 transition-colors duration-300"></i>
<span className="text-white text-xs sm:text-sm font-regular transition-colors duration-300">삼성카드</span>
</div>
<div className="w-10 h-10 sm:w-14 sm:h-14 flex items-center justify-center">
<img alt="삼성카드 로고" className="w-full h-full object-contain opacity-100 transition-all duration-500" loading="lazy" src={`${IMAGE_BASE_URL}/CARD_LOGO/SAMSUNG_CARD.png`}/>
</div>
</div>
<div className="absolute bottom-0 left-0 w-full h-1 bg-blue-600 transition-colors duration-300"></div>
</div>
<div className="group relative h-24 sm:h-28 rounded-xl bg-[#0a0a0a] border border-yellow-500/50 flex flex-col justify-between p-4 sm:p-5 overflow-hidden transition-all duration-300 hover:-translate-y-2 shadow-[0_10px_30px_rgba(234,179,8,0.15)] cursor-default">
<div className="absolute -right-4 -top-4 w-16 h-16 rounded-full blur-[30px] opacity-20 bg-yellow-400 transition-opacity duration-500"></div>
<div className="absolute top-3 right-3 sm:top-4 sm:right-4 z-20">
<span className="bg-yellow-400/10 border border-yellow-400/30 text-yellow-400 text-[9px] sm:text-[10px] px-2 py-1 rounded-full font-medium tracking-wide">최대 무이자 18개월</span>
</div>
<div className="flex justify-between items-end h-full relative z-10">
<div className="flex flex-col justify-between h-full">
<i className="ph-fill ph-credit-card text-2xl sm:text-3xl text-yellow-400 transition-colors duration-300"></i>
<span className="text-white text-xs sm:text-sm font-regular transition-colors duration-300">국민카드</span>
</div>
<div className="w-10 h-10 sm:w-14 sm:h-14 flex items-center justify-center">
<img alt="국민카드 로고" className="w-full h-full object-contain opacity-100 transition-all duration-500" loading="lazy" src={`${IMAGE_BASE_URL}/CARD_LOGO/KB_CARD.png`}/>
</div>
</div>
<div className="absolute bottom-0 left-0 w-full h-1 bg-yellow-400 transition-colors duration-300"></div>
</div>
<div className="group relative h-24 sm:h-28 rounded-xl bg-[#0a0a0a] border border-white/50 flex flex-col justify-between p-4 sm:p-5 overflow-hidden transition-all duration-300 hover:-translate-y-2 shadow-[0_10px_30px_rgba(255,255,255,0.1)] cursor-default">
<div className="absolute -right-8 -top-8 w-24 h-24 rounded-full blur-[30px] opacity-20 bg-white transition-opacity duration-500"></div>
<div className="absolute top-3 right-3 sm:top-4 sm:right-4 z-20">
<span className="bg-white/10 border border-white/30 text-white text-[9px] sm:text-[10px] px-2 py-1 rounded-full font-medium tracking-wide">최대 무이자 24개월</span>
</div>
<div className="flex justify-between items-end h-full relative z-10">
<div className="flex flex-col justify-between h-full">
<i className="ph-fill ph-credit-card text-2xl sm:text-3xl text-white transition-colors duration-300"></i>
<span className="text-white text-xs sm:text-sm font-regular transition-colors duration-300">현대카드</span>
</div>
<div className="w-10 h-10 sm:w-14 sm:h-14 flex items-center justify-center">
<img alt="현대카드 로고" className="w-full h-full object-contain opacity-100 transition-all duration-500" loading="lazy" src={`${IMAGE_BASE_URL}/CARD_LOGO/HYUNDAI_CARD.png`}/>
</div>
</div>
<div className="absolute bottom-0 left-0 w-full h-1 bg-white transition-colors duration-300"></div>
</div>
<div className="group relative h-24 sm:h-28 rounded-xl bg-[#0a0a0a] border border-red-500/50 flex flex-col justify-between p-4 sm:p-5 overflow-hidden transition-all duration-300 hover:-translate-y-2 shadow-[0_10px_30px_rgba(239,68,68,0.15)] cursor-default">
<div className="absolute -right-8 -top-8 w-24 h-24 rounded-full blur-[30px] opacity-20 bg-red-500 transition-opacity duration-500"></div>
<div className="absolute top-3 right-3 sm:top-4 sm:right-4 z-20">
<span className="bg-red-500/10 border border-red-500/30 text-red-400 text-[9px] sm:text-[10px] px-2 py-1 rounded-full font-medium tracking-wide">최대 무이자 24개월</span>
</div>
<div className="flex justify-between items-end h-full relative z-10">
<div className="flex flex-col justify-between h-full">
<i className="ph-fill ph-credit-card text-2xl sm:text-3xl text-red-500 transition-colors duration-300"></i>
<span className="text-white text-xs sm:text-sm font-regular transition-colors duration-300">비씨카드</span>
</div>
<div className="w-10 h-10 sm:w-14 sm:h-14 flex items-center justify-center">
<img alt="비씨카드 로고" className="w-full h-full object-contain opacity-100 transition-all duration-500" loading="lazy" src={`${IMAGE_BASE_URL}/CARD_LOGO/BC_CARD.png`}/>
</div>
</div>
<div className="absolute bottom-0 left-0 w-full h-1 bg-red-500 transition-colors duration-300"></div>
</div>
<div className="group relative h-24 sm:h-28 rounded-xl bg-[#0a0a0a] border border-rose-500/50 flex flex-col justify-between p-4 sm:p-5 overflow-hidden transition-all duration-300 hover:-translate-y-2 shadow-[0_10px_30px_rgba(244,63,94,0.15)] cursor-default">
<div className="absolute -right-8 -top-8 w-24 h-24 rounded-full blur-[30px] opacity-20 bg-rose-500 transition-opacity duration-500"></div>
<div className="absolute top-3 right-3 sm:top-4 sm:right-4 z-20">
<span className="bg-rose-500/10 border border-rose-500/30 text-rose-400 text-[9px] sm:text-[10px] px-2 py-1 rounded-full font-medium tracking-wide">최대 무이자 24개월</span>
</div>
<div className="flex justify-between items-end h-full relative z-10">
<div className="flex flex-col justify-between h-full">
<i className="ph-fill ph-credit-card text-2xl sm:text-3xl text-rose-500 transition-colors duration-300"></i>
<span className="text-white text-xs sm:text-sm font-regular transition-colors duration-300">롯데카드</span>
</div>
<div className="w-10 h-10 sm:w-14 sm:h-14 flex items-center justify-center">
<img alt="롯데카드 로고" className="w-full h-full object-contain opacity-100 transition-all duration-500" loading="lazy" src={`${IMAGE_BASE_URL}/CARD_LOGO/LOTTE_CARD.png`}/>
</div>
</div>
<div className="absolute bottom-0 left-0 w-full h-1 bg-rose-500 transition-colors duration-300"></div>
</div>
<div className="group relative h-24 sm:h-28 rounded-xl bg-[#0a0a0a] border border-sky-400/50 flex flex-col justify-between p-4 sm:p-5 overflow-hidden transition-all duration-300 hover:-translate-y-2 shadow-[0_10px_30px_rgba(56,189,248,0.15)] cursor-default">
<div className="absolute -right-8 -top-8 w-24 h-24 rounded-full blur-[30px] opacity-20 bg-sky-400 transition-opacity duration-500"></div>
<div className="absolute top-3 right-3 sm:top-4 sm:right-4 z-20">
<span className="bg-sky-400/10 border border-sky-400/30 text-sky-400 text-[9px] sm:text-[10px] px-2 py-1 rounded-full font-medium tracking-wide">최대 무이자 24개월</span>
</div>
<div className="flex justify-between items-end h-full relative z-10">
<div className="flex flex-col justify-between h-full">
<i className="ph-fill ph-credit-card text-2xl sm:text-3xl text-sky-400 transition-colors duration-300"></i>
<span className="text-white text-xs sm:text-sm font-regular transition-colors duration-300">우리카드</span>
</div>
<div className="w-10 h-10 sm:w-14 sm:h-14 flex items-center justify-center">
<img alt="우리카드 로고" className="w-full h-full object-contain opacity-100 transition-all duration-500" loading="lazy" src={`${IMAGE_BASE_URL}/CARD_LOGO/WOORI_CARD.png`}/>
</div>
</div>
<div className="absolute bottom-0 left-0 w-full h-1 bg-sky-400 transition-colors duration-300"></div>
</div>
<div className="group relative h-24 sm:h-28 rounded-xl bg-[#0a0a0a] border border-teal-500/50 flex flex-col justify-between p-4 sm:p-5 overflow-hidden transition-all duration-300 hover:-translate-y-2 shadow-[0_10px_30px_rgba(20,184,166,0.15)] cursor-default">
<div className="absolute -right-8 -top-8 w-24 h-24 rounded-full blur-[30px] opacity-20 bg-teal-500 transition-opacity duration-500"></div>
<div className="absolute top-3 right-3 sm:top-4 sm:right-4 z-20">
<span className="bg-teal-500/10 border border-teal-500/30 text-teal-400 text-[9px] sm:text-[10px] px-2 py-1 rounded-full font-medium tracking-wide">최대 무이자 24개월</span>
</div>
<div className="flex justify-between items-end h-full relative z-10">
<div className="flex flex-col justify-between h-full">
<i className="ph-fill ph-credit-card text-2xl sm:text-3xl text-teal-500 transition-colors duration-300"></i>
<span className="text-white text-xs sm:text-sm font-regular transition-colors duration-300">하나카드</span>
</div>
<div className="w-10 h-10 sm:w-14 sm:h-14 flex items-center justify-center">
<img alt="하나카드 로고" className="w-full h-full object-contain opacity-100 transition-all duration-500" loading="lazy" src={`${IMAGE_BASE_URL}/CARD_LOGO/HANA_CARD.png`}/>
</div>
</div>
<div className="absolute bottom-0 left-0 w-full h-1 bg-teal-500 transition-colors duration-300"></div>
</div>
<div className="group relative h-24 sm:h-28 rounded-xl bg-[#0a0a0a] border border-green-500/50 flex flex-col justify-between p-4 sm:p-5 overflow-hidden transition-all duration-300 hover:-translate-y-2 shadow-[0_10px_30px_rgba(34,197,94,0.15)] cursor-default">
<div className="absolute -right-8 -top-8 w-24 h-24 rounded-full blur-[30px] opacity-20 bg-green-500 transition-opacity duration-500"></div>
<div className="absolute top-3 right-3 sm:top-4 sm:right-4 z-20">
<span className="bg-green-500/10 border border-green-500/30 text-green-400 text-[9px] sm:text-[10px] px-2 py-1 rounded-full font-medium tracking-wide">최대 무이자 18개월</span>
</div>
<div className="flex justify-between items-end h-full relative z-10">
<div className="flex flex-col justify-between h-full">
<i className="ph-fill ph-credit-card text-2xl sm:text-3xl text-green-500 transition-colors duration-300"></i>
<span className="text-white text-xs sm:text-sm font-regular transition-colors duration-300">농협카드</span>
</div>
<div className="w-10 h-10 sm:w-14 sm:h-14 flex items-center justify-center">
<img alt="농협카드 로고" className="w-full h-full object-contain opacity-100 transition-all duration-500" loading="lazy" src={`${IMAGE_BASE_URL}/CARD_LOGO/NH_CARD.png`}/>
</div>
</div>
<div className="absolute bottom-0 left-0 w-full h-1 bg-green-500 transition-colors duration-300"></div>
</div>
</div>
</div>

</section>
{/* 04. 제품 스펙 확인하기 Section */}
<section className="py-24 bg-xtron-dark overflow-hidden">
<div className="container mx-auto px-6">
{/* 배터리 토글 비교 영역 */}
<div className="max-w-5xl mx-auto mb-24">
<div className="text-center mb-12">
<p className="text-xtron-400 font-medium tracking-widest mb-2">BATTERY TECHNOLOGY</p>
<h2 className="text-3xl md:text-5xl font-bold mb-6">
                        한계를 넘는 주행거리,<br/>당신의 선택은?
                    </h2>
<p className="text-base md:text-lg text-gray-400 h-24 md:h-12 transition-all duration-300 font-normal break-keep" id="battery-desc">
                        출퇴근과 주말 레저를 완벽하게 커버. 타사 최고가 모델에서나 볼 법한 대용량이 엑스트론에서는 '기본'입니다.
                    </p>
</div>
<div className="flex justify-center mb-12">
<div className="bg-gray-900 p-1 rounded-full inline-flex relative w-full sm:w-auto max-w-sm">
{/* 모바일 최적화: 버튼 너비 조정 */}
<div className="absolute top-1 left-1 w-[calc(50%-4px)] h-[calc(100%-8px)] bg-brand-blue rounded-full transition-all duration-300 ease-in-out" id="toggle-bg">
</div>
<button className="relative z-10 px-2 sm:px-4 py-3 rounded-full text-white font-medium transition-colors w-1/2 sm:w-48 md:w-56 text-xs sm:text-sm md:text-base flex items-center justify-center gap-1" id="btn-std" onClick={() => {}} /* setBattery('standard') */>
                            48V 20Ah
                        </button>
<button className="relative z-10 px-2 sm:px-4 py-3 rounded-full text-gray-400 font-medium transition-colors w-1/2 sm:w-48 md:w-56 text-xs sm:text-sm md:text-base flex items-center justify-center gap-1 sm:gap-1.5" id="btn-mega" onClick={() => {}} /* setBattery('mega') */>
                            48V 28.5Ah <img alt="MEGA" className="h-2.5 sm:h-3 md:h-4 object-contain opacity-80 group-hover:opacity-100 transition-opacity" src={`${IMAGE_BASE_URL}/BATTERY_LOGO_SET/MEGA_LOGO.png`}/>
</button>
</div>
</div>
{/* 기존 주행거리 패널 */}
<div className="glass-panel p-6 md:p-8 rounded-3xl relative mb-8">
<div className="flex justify-between items-end mb-4">
<div>
<div className="text-xs sm:text-sm text-gray-500 mb-2 font-normal flex items-center gap-1.5" id="cell-spec">
                                Powered by. <img alt="삼성 SDI" className="h-3 md:h-4 object-contain opacity-80" src={`${IMAGE_BASE_URL}/BATTERY_LOGO_SET/SAMSUNG-SDI.png`}/>
</div>
<h3 className="text-xl sm:text-2xl md:text-4xl font-semibold flex items-center gap-2" id="ah-spec">48V 20Ah</h3>
</div>
<div className="text-right">
<p className="text-xs sm:text-sm text-gray-500 mb-1 font-normal hidden sm:block">*엑스트론 프로S, PAS
                                1단 기준 최대
                                주행거리</p>
<p className="text-[10px] text-gray-500 mb-1 font-normal sm:hidden">최대 주행거리</p>
<div className="flex items-baseline justify-end gap-1">
<span className="text-4xl md:text-6xl font-bold text-brand-blue transition-all duration-500" id="km-text">154.9</span>
<span className="text-lg sm:text-xl text-gray-400 font-medium">km</span>
</div>
</div>
</div>
<div className="w-full bg-gray-800 h-6 sm:h-8 rounded-full overflow-hidden p-1">
<div className="h-full rounded-full bg-brand-blue gauge-transition relative overflow-hidden" id="range-bar" style={{}} /* width: 60%; */>
<div className="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTAgMGwyMCAyMEgwaC0yMHoiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4xKSIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+')] opacity-20">
</div>
</div>
</div>
<div className="flex justify-between text-[10px] sm:text-xs text-gray-600 mt-2 px-2 font-normal">
<span>0km</span>
<span>100km</span>
<span>200km</span>
<span>250km+</span>
</div>
</div>
{/* 배터리 상세 쇼케이스 영역 */}
<div className="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 transition-opacity duration-300 opacity-100" id="battery-showcase">
<div className="relative rounded-3xl overflow-hidden aspect-video lg:aspect-[4/3] border border-gray-800 bg-[#111] shadow-2xl group">
<div className="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent z-10 pointer-events-none">
</div>
<img className="w-full h-full object-cover absolute inset-0 z-0 group-hover:scale-105 transition-transform duration-700" id="battery-img" src="https://images.unsplash.com/photo-1511994298241-608e28f14fde?auto=format&amp;fit=crop&amp;w=800&amp;q=80"/>
</div>
<div className="flex flex-col justify-center space-y-3" id="battery-features">
{/* JS를 통해 동적 렌더링 됨 */}
</div>
</div>
{/* 라이프스타일 맞춤 배터리 선택 가이드 */}
<div className="mt-20 md:mt-32 pt-10 border-t border-gray-800/50">
<div className="text-center mb-12 relative z-10">
<h3 className="text-2xl md:text-4xl font-semibold mb-4 text-white">어떤 배터리가 나에게 맞을까?</h3>
<p className="text-sm sm:text-base text-gray-400 font-normal">나의 라이딩 스타일에 맞춰 최적의 배터리를 선택해 보세요.</p>
</div>
<div className="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
{/* 48V 20Ah 가이드 */}
<div className="bg-gradient-to-b from-[#0a1218] to-[#0a0a0a] border border-brand-blue/30 rounded-3xl p-6 sm:p-8 md:p-10 flex flex-col relative overflow-hidden group hover:border-brand-blue/50 transition-colors shadow-[0_15px_50px_rgba(47,98,134,0.1)]">
<div className="absolute top-0 right-0 w-40 h-40 bg-brand-blue/10 rounded-full blur-[60px] pointer-events-none group-hover:bg-brand-blue/20 transition-colors">
</div>
<div className="flex justify-between items-start mb-8 relative z-10">
<div>
<span className="inline-block px-3 py-1 bg-brand-blue text-white text-[10px] sm:text-[11px] font-bold rounded-full mb-4 tracking-wider shadow-[0_0_10px_rgba(47,98,134,0.3)]">STANDARD</span>
<h4 className="text-2xl sm:text-3xl font-bold text-brand-blue mb-2">48V 20Ah</h4>
<p className="text-brand-blue/60 text-xs sm:text-sm font-normal">합리적인 선택, 스마트한 일상</p>
</div>
<div className="flex flex-col items-end text-right pt-1">
<span className="text-[9px] sm:text-[10px] text-brand-blue/60 font-medium mb-1.5 tracking-wider">Powered
                                        by.</span>
<img alt="삼성 SDI" className="h-3 sm:h-4 object-contain opacity-80 filter drop-shadow-[0_0_5px_rgba(47,98,134,0.3)] group-hover:opacity-100 transition-opacity" src={`${IMAGE_BASE_URL}/BATTERY_LOGO_SET/SAMSUNG-SDI.png`}/>
</div>
</div>
<ul className="space-y-4 sm:space-y-5 mb-8 sm:mb-10 flex-1 relative z-10">
<li className="flex items-start gap-2 sm:gap-3">
<i className="ph-fill ph-check-circle text-brand-blue mt-0.5 text-lg sm:text-xl filter drop-shadow-[0_0_5px_rgba(47,98,134,0.5)]"></i>
<span className="text-gray-300 text-xs sm:text-sm md:text-base font-normal leading-relaxed">도심
                                        라이딩에 최적화된 스마트 에너지</span>
</li>
<li className="flex items-start gap-2 sm:gap-3">
<i className="ph-fill ph-check-circle text-brand-blue mt-0.5 text-lg sm:text-xl filter drop-shadow-[0_0_5px_rgba(47,98,134,0.5)]"></i>
<span className="text-gray-300 text-xs sm:text-sm md:text-base font-normal leading-relaxed">일상적인
                                        주행에 부족함 없는 컴팩트 고효율</span>
</li>
<li className="flex items-start gap-2 sm:gap-3">
<i className="ph-fill ph-check-circle text-brand-blue mt-0.5 text-lg sm:text-xl filter drop-shadow-[0_0_5px_rgba(47,98,134,0.5)]"></i>
<span className="text-gray-300 text-xs sm:text-sm md:text-base font-normal leading-relaxed">충전이
                                        용이한 환경에서 최고의 경제성 발휘</span>
</li>
</ul>
<div className="bg-brand-blue/10 p-5 sm:p-6 rounded-2xl border border-brand-blue/20 relative z-10 flex items-center gap-3 sm:gap-4">
<i className="ph-fill ph-quotes text-2xl sm:text-3xl text-brand-blue/30"></i>
<p className="text-brand-blue font-medium text-xs sm:text-sm md:text-base leading-relaxed flex-1">
                                    나의 주행 환경에 딱 맞는<br/><strong className="text-white font-bold drop-shadow-[0_0_5px_rgba(255,255,255,0.3)]">최적의 효율을
                                        원해요!</strong>
</p>
</div>
</div>
{/* 48V 28.5Ah 가이드 */}
<div className="bg-gradient-to-b from-[#101a14] to-[#0a0a0a] border border-brand-green/30 rounded-3xl p-6 sm:p-8 md:p-10 flex flex-col relative overflow-hidden group hover:border-brand-green/50 transition-colors shadow-[0_15px_50px_rgba(114,191,68,0.1)]">
<div className="absolute top-0 right-0 w-40 h-40 bg-brand-green/10 rounded-full blur-[60px] pointer-events-none group-hover:bg-brand-green/20 transition-colors">
</div>
<div className="flex justify-between items-start mb-8 relative z-10">
<div>
<span className="inline-block px-3 py-1 bg-brand-green text-gray-900 text-[10px] sm:text-[11px] font-bold rounded-full mb-4 tracking-wider shadow-[0_0_10px_rgba(114,191,68,0.3)]">MEGA</span>
<h4 className="text-2xl sm:text-3xl font-bold text-brand-green mb-2 flex items-center gap-2">
                                        48V 28.5Ah <i className="ph-fill ph-lightning"></i>
</h4>
<p className="text-brand-green/60 text-xs sm:text-sm font-normal">압도적 용량, 한계 없는 라이딩</p>
</div>
<div className="flex flex-col items-end text-right pt-1">
<span className="text-[9px] sm:text-[10px] text-brand-green/60 font-medium mb-1.5 tracking-wider">Powered
                                        by.</span>
<img alt="LG Energy Solution" className="h-3 sm:h-4 object-contain opacity-80 filter drop-shadow-[0_0_5px_rgba(114,191,68,0.3)] group-hover:opacity-100 transition-opacity" src={`${IMAGE_BASE_URL}/BATTERY_LOGO_SET/LG-Energy-Solution.png`}/>
</div>
</div>
<ul className="space-y-4 sm:space-y-5 mb-8 sm:mb-10 flex-1 relative z-10">
<li className="flex items-start gap-2 sm:gap-3">
<i className="ph-fill ph-check-circle text-brand-green mt-0.5 text-lg sm:text-xl filter drop-shadow-[0_0_5px_rgba(114,191,68,0.5)]"></i>
<span className="text-gray-300 text-xs sm:text-sm md:text-base font-normal leading-relaxed">20Ah
                                        대비 <strong className="text-brand-green font-semibold">42% 더 강력해진</strong> 압도적
                                        에너지</span>
</li>
<li className="flex items-start gap-2 sm:gap-3">
<i className="ph-fill ph-check-circle text-brand-green mt-0.5 text-lg sm:text-xl filter drop-shadow-[0_0_5px_rgba(114,191,68,0.5)]"></i>
<span className="text-gray-300 text-xs sm:text-sm md:text-base font-normal leading-relaxed">장거리
                                        라이딩, 배달 등 고강도 주행에 특화</span>
</li>
<li className="flex items-start gap-2 sm:gap-3">
<i className="ph-fill ph-check-circle text-brand-green mt-0.5 text-lg sm:text-xl filter drop-shadow-[0_0_5px_rgba(114,191,68,0.5)]"></i>
<span className="text-gray-300 text-xs sm:text-sm md:text-base font-normal leading-relaxed">충전의
                                        번거로움 없이 한 번에 더 멀리 이동</span>
</li>
</ul>
<div className="bg-brand-green/10 p-5 sm:p-6 rounded-2xl border border-brand-green/20 relative z-10 flex items-center gap-3 sm:gap-4">
<i className="ph-fill ph-quotes text-2xl sm:text-3xl text-brand-green/30"></i>
<p className="text-brand-green font-medium text-xs sm:text-sm md:text-base leading-relaxed flex-1">
                                    어떠한 상황에서도<br/><strong className="text-white font-bold drop-shadow-[0_0_5px_rgba(255,255,255,0.3)]">배터리 걱정
                                        없는 여유를 원해요!</strong>
</p>
</div>
</div>
</div>
</div>
</div>
{/* 무상보증 확대 (EXTEND) Section */}
<div className="max-w-5xl mx-auto mt-32 mb-10 pt-20 border-t border-gray-800/80">
<div className="text-center mb-16">
<div className="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-green/10 border border-brand-green/30 text-brand-green text-xs sm:text-sm font-medium mb-6 shadow-[0_0_15px_rgba(114,191,68,0.2)]">
<i className="ph-fill ph-shield-check text-lg"></i>
                        무이자 24개월 구매 고객 대상
                    </div>
<h2 className="text-3xl md:text-5xl font-bold mb-4 leading-tight text-white">
                        무상수리 보장 확대<br/>
<span className="text-gray-400 text-lg sm:text-xl md:text-2xl font-medium mt-4 block">프레임도, 모터도 이제
                            걱정 없이 타세요!</span>
</h2>
<p className="text-base sm:text-lg text-gray-400 font-normal mt-6 tracking-wide leading-relaxed">
<strong className="text-gray-200 font-medium">"압도적인 보증 업그레이드"</strong>, 더 길어진 <strong className="text-gray-200 font-medium">"무상 A/S"</strong><br/>
                        구매 후 더 확실한 A/S로 든든한 전기 자전거
                    </p>
<p className="text-xs text-gray-400 mt-6 text-center block md:hidden animate-pulse break-keep">
<i className="ph-bold ph-arrows-left-right text-brand-green align-middle mr-1"></i> *모바일 이용 시 아래표를
                        좌우측으로 슬라이드 해보세요!
                    </p>
</div>
<div className="glass-panel rounded-3xl border-brand-green/30 relative overflow-hidden shadow-[0_10px_40px_rgba(0,0,0,0.5)] mb-20 p-0.5">
<div className="overflow-x-auto rounded-3xl">
<table className="w-full text-left border-collapse min-w-full md:min-w-[800px]">
<thead>
<tr className="bg-gray-900 border-b border-gray-800">
<tr className="bg-gray-900 border-b border-gray-800">
<th className="p-5 font-medium text-gray-400 w-[20%] whitespace-nowrap">구분</th>
{/* 📱 모바일에서만 보이는 26년 NEW 엑스트론 (앞쪽 배치) */}
<th className="p-4 sm:p-6 font-bold text-brand-green w-[40%] text-center border-x border-t border-brand-green/50 bg-brand-green/20 text-base sm:text-lg md:text-xl shadow-[0_-5px_20px_rgba(114,191,68,0.15)] relative break-keep table-cell md:hidden">
<div className="absolute inset-0 bg-gradient-to-t from-transparent to-brand-green/10">
</div>
<span className="relative z-10">26년 NEW <br className="block sm:hidden"/>엑스트론</span>
</th>
<th className="p-5 font-medium text-gray-600 w-[20%] text-center border-l border-gray-800 bg-gray-950/80 whitespace-nowrap">
                                        타사 평균</th>
<th className="p-5 font-medium text-gray-300 w-[20%] text-center border-l border-gray-800 whitespace-nowrap">
                                        기존 엑스트론</th>
{/* 💻 PC에서만 보이는 26년 NEW 엑스트론 (원래 자리) */}
<th className="p-6 font-bold text-brand-green w-[40%] text-center border-x border-t border-brand-green/50 bg-brand-green/20 text-lg md:text-xl shadow-[0_-5px_20px_rgba(114,191,68,0.15)] rounded-tr-2xl relative whitespace-nowrap hidden md:table-cell">
<div className="absolute inset-0 bg-gradient-to-t from-transparent to-brand-green/10 rounded-tr-2xl">
</div>
<span className="relative z-10">26년 NEW 엑스트론</span>
</th>
</tr>
</tr></thead>
<tbody>
<tr className="border-b border-gray-800 hover:bg-white/5 transition-colors">
<td className="p-5 font-medium text-gray-300 bg-gray-900/30 whitespace-nowrap">프레임</td>
{/* 📱 모바일용 (앞) */}
<td className="p-4 sm:p-6 text-center text-white font-bold border-x border-brand-green/50 bg-brand-green/10 text-base sm:text-lg md:text-xl relative break-keep table-cell md:hidden">
<span className="relative z-10 drop-shadow-[0_0_10px_rgba(255,255,255,0.5)]">2년 or
                                            <br className="block sm:hidden"/>15,000km</span>
</td>
<td className="p-5 text-center text-gray-600 border-l border-gray-800 bg-gray-950/80 text-sm whitespace-nowrap">
                                        1년 or 1,500km</td>
<td className="p-5 text-center text-gray-400 border-l border-gray-800 text-sm whitespace-nowrap">
                                        1년 or 10,000km</td>
{/* 💻 PC용 (뒤) */}
<td className="p-6 text-center text-white font-bold border-x border-brand-green/50 bg-brand-green/10 text-lg md:text-xl relative whitespace-nowrap hidden md:table-cell">
<span className="relative z-10 drop-shadow-[0_0_10px_rgba(255,255,255,0.5)]">2년 or
                                            15,000km</span>
</td>
</tr>
<tr className="border-b border-gray-800 hover:bg-white/5 transition-colors">
<td className="p-5 font-medium text-gray-300 bg-gray-900/30 whitespace-nowrap">모터, 배터리
                                    </td>
{/* 📱 모바일용 (앞) */}
<td className="p-4 sm:p-6 text-center text-white font-bold border-x border-brand-green/50 bg-brand-green/10 text-base sm:text-lg md:text-xl relative break-keep table-cell md:hidden">
<span className="relative z-10 drop-shadow-[0_0_10px_rgba(255,255,255,0.5)]">1년 or
                                            <br className="block sm:hidden"/>10,000km</span>
</td>
<td className="p-5 text-center text-gray-600 border-l border-gray-800 bg-gray-950/80 text-sm whitespace-nowrap">
                                        6개월 or 1,000km</td>
<td className="p-5 text-center text-gray-400 border-l border-gray-800 text-sm whitespace-nowrap">
                                        6개월</td>
{/* 💻 PC용 (뒤) */}
<td className="p-6 text-center text-white font-bold border-x border-brand-green/50 bg-brand-green/10 text-lg md:text-xl relative whitespace-nowrap hidden md:table-cell">
<span className="relative z-10 drop-shadow-[0_0_10px_rgba(255,255,255,0.5)]">1년 or
                                            10,000km</span>
</td>
</tr>
<tr className="border-b border-gray-800 hover:bg-white/5 transition-colors">
<td className="p-5 font-medium text-gray-300 bg-gray-900/30 whitespace-nowrap">컨트롤러 및 전기
                                        계통</td>
{/* 📱 모바일용 (앞) */}
<td className="p-4 sm:p-6 text-center text-gray-200 font-bold border-x border-brand-green/50 bg-brand-green/10 text-base md:text-lg relative break-keep table-cell md:hidden">
<span className="relative z-10">6개월</span>
</td>
<td className="p-5 text-center text-gray-600 border-l border-gray-800 bg-gray-950/80 text-sm whitespace-nowrap">
                                        6개월 or 1,000km</td>
<td className="p-5 text-center text-gray-400 border-l border-gray-800 text-sm whitespace-nowrap">
                                        6개월</td>
{/* 💻 PC용 (뒤) */}
<td className="p-6 text-center text-gray-200 font-bold border-x border-brand-green/50 bg-brand-green/10 text-base md:text-lg relative whitespace-nowrap hidden md:table-cell">
<span className="relative z-10">6개월</span>
</td>
</tr>
<tr className="hover:bg-white/5 transition-colors border-b border-brand-green/50">
<td className="p-5 font-medium text-gray-300 bg-gray-900/30 rounded-bl-3xl whitespace-nowrap">
                                        중고 승계</td>
{/* 📱 모바일용 (앞) */}
<td className="p-4 sm:p-6 text-center text-brand-green font-bold border-x border-brand-green/50 bg-brand-green/10 text-base sm:text-lg md:text-xl relative break-keep table-cell md:hidden">
<div className="absolute inset-0 bg-gradient-to-b from-transparent to-brand-green/10">
</div>
<span className="relative z-10 drop-shadow-[0_0_10px_rgba(114,191,68,0.5)]">가능</span>
</td>
<td className="p-5 text-center text-gray-600 border-l border-gray-800 bg-gray-950/80 text-sm whitespace-nowrap">
                                        불가능</td>
<td className="p-5 text-center text-gray-400 border-l border-gray-800 text-sm whitespace-nowrap">
                                        가능</td>
{/* 💻 PC용 (뒤) */}
<td className="p-6 text-center text-brand-green font-bold border-x border-brand-green/50 bg-brand-green/10 text-lg md:text-xl rounded-br-2xl relative whitespace-nowrap hidden md:table-cell">
<div className="absolute inset-0 bg-gradient-to-b from-transparent to-brand-green/10 rounded-br-2xl">
</div>
<span className="relative z-10 drop-shadow-[0_0_10px_rgba(114,191,68,0.5)]">가능</span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div className="bg-[#0a0a0a] border border-gray-800 rounded-3xl p-6 sm:p-8 md:p-12 relative overflow-hidden shadow-2xl">
<div className="absolute -top-20 -right-20 w-80 h-80 bg-brand-green/5 rounded-full blur-[80px]"></div>
<div className="absolute -bottom-20 -left-20 w-80 h-80 bg-brand-blue/5 rounded-full blur-[80px]"></div>
<div className="text-center mb-16 relative z-10">
<p className="text-lg sm:text-xl md:text-2xl text-gray-400 mb-3 font-medium">한 번 더 과감하게!</p>
<div className="flex justify-center items-center gap-2 sm:gap-3 flex-wrap">
<span className="text-2xl sm:text-3xl md:text-4xl font-semibold text-white tracking-tight">무상
                                보증을</span>
<img alt="EXTEND 로고" className="h-6 sm:h-8 md:h-9 object-contain drop-shadow-[0_0_15px_rgba(114,191,68,0.3)]" src={`${IMAGE_BASE_URL}/BATTERY_LOGO_SET/EXTEND_LOGO.png`}/>
</div>
</div>
<div className="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-12 relative z-10 max-w-4xl mx-auto mb-8">
<div className="flex flex-col items-center bg-[#111111] p-6 sm:p-8 rounded-2xl border border-gray-800">
<h4 className="text-base sm:text-lg md:text-xl font-medium text-gray-300 mb-16 w-full text-center tracking-wide">
                                프레임 보증 기간</h4>
<div className="flex items-end justify-center h-64 gap-4 sm:gap-8 md:gap-10 w-full relative">
<div className="absolute top-[35%] left-1/2 -translate-x-1/2 flex flex-col items-center z-20">
<span className="text-brand-green font-bold text-base sm:text-lg mb-1 animate-pulse">2배</span>
<i className="ph-bold ph-trend-up text-3xl sm:text-4xl text-brand-green filter drop-shadow-[0_0_10px_rgba(114,191,68,0.5)]"></i>
</div>
<div className="flex flex-col items-center w-20 sm:w-24 md:w-28 z-10 relative">
<div className="absolute -top-12 text-[10px] sm:text-[11px] md:text-xs text-gray-500 font-medium text-center leading-tight whitespace-nowrap">
                                        1년 or<br/>10,000km</div>
<div className="w-14 sm:w-16 md:w-20 h-20 bg-gray-800 rounded-t-xl border border-b-0 border-gray-700 shadow-inner">
</div>
<div className="mt-4 text-xs sm:text-sm font-medium text-gray-500">기존</div>
</div>
<div className="flex flex-col items-center w-20 sm:w-24 md:w-28 z-10 relative">
<div className="absolute -top-14 text-[10px] sm:text-[11px] md:text-xs text-brand-green font-bold text-center leading-tight whitespace-nowrap drop-shadow-[0_0_5px_rgba(114,191,68,0.3)]">
                                        2년 or<br/>15,000km 이내</div>
<div className="w-14 sm:w-16 md:w-20 h-40 bg-gradient-to-t from-brand-blue to-brand-green rounded-t-xl shadow-[0_0_30px_rgba(114,191,68,0.2)]">
</div>
<div className="mt-4 text-xs sm:text-sm font-bold text-white">NEW</div>
</div>
</div>
</div>
<div className="flex flex-col items-center bg-[#111111] p-6 sm:p-8 rounded-2xl border border-gray-800">
<h4 className="text-base sm:text-lg md:text-xl font-medium text-gray-300 mb-16 w-full text-center tracking-wide">
                                모터 · 배터리 보증 기간</h4>
<div className="flex items-end justify-center h-64 gap-4 sm:gap-8 md:gap-10 w-full relative">
<div className="absolute top-[35%] left-1/2 -translate-x-1/2 flex flex-col items-center z-20">
<span className="text-brand-green font-bold text-base sm:text-lg mb-1 animate-pulse">2배</span>
<i className="ph-bold ph-trend-up text-3xl sm:text-4xl text-brand-green filter drop-shadow-[0_0_10px_rgba(114,191,68,0.5)]"></i>
</div>
<div className="flex flex-col items-center w-20 sm:w-24 md:w-28 z-10 relative">
<div className="absolute -top-8 text-[10px] sm:text-[11px] md:text-xs text-gray-500 font-medium text-center leading-tight whitespace-nowrap">
                                        6개월</div>
<div className="w-14 sm:w-16 md:w-20 h-16 bg-gray-800 rounded-t-xl border border-b-0 border-gray-700 shadow-inner">
</div>
<div className="mt-4 text-xs sm:text-sm font-medium text-gray-500">기존</div>
</div>
<div className="flex flex-col items-center w-20 sm:w-24 md:w-28 z-10 relative">
<div className="absolute -top-14 text-[10px] sm:text-[11px] md:text-xs text-brand-green font-bold text-center leading-tight whitespace-nowrap drop-shadow-[0_0_5px_rgba(114,191,68,0.3)]">
                                        1년 or<br/>10,000km 이내</div>
<div className="w-14 sm:w-16 md:w-20 h-36 bg-gradient-to-t from-brand-blue to-brand-green rounded-t-xl shadow-[0_0_30px_rgba(114,191,68,0.2)]">
</div>
<div className="mt-4 text-xs sm:text-sm font-bold text-white">NEW</div>
</div>
</div>
</div>
</div>
<div className="mt-12 pt-8 sm:pt-10 border-t border-gray-800/80 text-center relative z-10">
<p className="text-base sm:text-lg md:text-xl font-medium text-white mb-3 tracking-wide break-keep">
                            당신의 라이딩, 더
                            오래 책임지겠습니다. 품질에 대한 자신감으로!</p>
<p className="text-sm sm:text-base text-gray-400 font-normal">더 길어진 무상 A/S로 마음껏 달리세요. <span className="text-[10px] sm:text-xs text-gray-500 ml-1 block sm:inline mt-1 sm:mt-0">(단, 선도래
                                기준 / 소모품 제외)</span></p>
<p className="text-sm sm:text-base text-red-400 font-normal break-keep">제품등록 시 적용됩니다.<span className="text-[10px] sm:text-xs text-gray-500 ml-1 block sm:inline mt-1 sm:mt-0 break-keep">(보증기간은
                                구매영수증 날짜 기준)</span></p>
</div>
</div>
</div>
<div className="max-w-5xl mx-auto mt-0 mb-8 sm:mt-0 sm:mb-8 relative z-20">
<a className="block group relative overflow-hidden rounded-3xl border border-brand-green/30 shadow-[0_0_30px_rgba(114,191,68,0.1)] hover:border-brand-green/60 transition-all duration-500" href="https://www.xtroncare.kr/" target="_blank">
<div className="absolute inset-0 bg-gradient-to-r from-brand-green/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10"></div>
<img alt="엑스트론 정품등록 하기" className="w-full h-auto object-cover block sm:hidden transform group-hover:scale-[1.02] transition-transform duration-700" src={`${IMAGE_BASE_URL}/PREMIUM_SET/MEGA_BENEFIT_(MO).png`}/>
<img alt="엑스트론 정품등록 하기" className="w-full h-auto object-cover hidden sm:block transform group-hover:scale-[1.02] transition-transform duration-700" src={`${IMAGE_BASE_URL}/PREMIUM_SET/MEGA_BENEFIT_(PC).png`}/>
</a>
</div>
{/* 공통 스펙 갤러리 핫스팟 */}
<div className="mt-20">
<div className="text-center mb-12 sm:mb-16">
<h2 className="text-3xl md:text-5xl font-bold">완벽한 라이딩을 위한 <span className="text-brand-green block sm:inline mt-2 sm:mt-0">프리미엄 기본기</span></h2>
</div>
<div className="relative max-w-5xl mx-auto hidden md:block aspect-video rounded-3xl border border-gray-800 bg-[#111111] overflow-hidden">
<div className="absolute top-6 left-6 z-30 flex flex-col gap-2 pointer-events-none">
<div className="inline-block bg-gray-900/80 backdrop-blur-md border border-gray-700 px-5 py-2 rounded-2xl shadow-lg w-max">
<span className="text-brand-green font-bold tracking-wider" id="spec-model-name">허브모터 라인업</span>
</div>
<div className="flex flex-wrap gap-1.5 pl-1 opacity-90" id="spec-applicable-models">
{/* JS로 동적 렌더링 */}
</div>
</div>
<button className="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-black/60 hover:bg-brand-green text-white rounded-full flex items-center justify-center transition-colors z-30 shadow-lg border border-gray-700 pointer-events-auto" onClick={() => {}} /* moveSpecSlide(-1) */>
<i className="ph ph-caret-left text-2xl"></i>
</button>
<button className="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-black/60 hover:bg-brand-green text-white rounded-full flex items-center justify-center transition-colors z-30 shadow-lg border border-gray-700 pointer-events-auto" onClick={() => {}} /* moveSpecSlide(1) */>
<i className="ph ph-caret-right text-2xl"></i>
</button>
<div className="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2 z-30">
<button className="spec-dot w-3 h-3 rounded-full bg-brand-green transition-colors" onClick={() => {}} /* setSpecSlide(0) */></button>
<button className="spec-dot w-3 h-3 rounded-full bg-gray-600 hover:bg-gray-400 transition-colors" onClick={() => {}} /* setSpecSlide(1) */></button>
</div>
<div className="flex w-full h-full transition-transform duration-700 ease-in-out" id="spec-slider">
{/* SLIDE 1 */}
<div className="w-full h-full shrink-0 relative bg-gray-white">
<img alt="XTRON 허브모터 모델" className="w-full h-full object-cover opacity-90" src={`${IMAGE_BASE_URL}/PREVIEW_PRODUCT/PREVIEW_PRO.png`}/>
{/* 핫스팟들 */}
<div className="absolute top-[6%] left-[58%] group cursor-pointer z-20 hover:z-50" onClick={() => openSpecModal('lcd')}>
<div className="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow">
<div className="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
</div>
<div className="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
<div className="absolute bottom-full left-1/2 -translate-x-1/2 border-4 border-transparent border-b-gray-700">
</div>
<span className="font-bold text-brand-green text-xs mb-0.5">LCD 컬러 계기판</span>
<span className="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
</div>
</div>
<div className="absolute top-[12%] left-[65%] group cursor-pointer z-20 hover:z-50" onClick={() => openSpecModal('brake')}>
<div className="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow" style={{}} /* animation-delay: 0.5s; */>
<div className="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
</div>
<div className="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
<div className="absolute bottom-full left-1/2 -translate-x-1/2 border-4 border-transparent border-b-gray-700">
</div>
<span className="font-bold text-brand-green text-xs mb-0.5">TEKTRO 유압식 브레이크</span>
<span className="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
</div>
</div>
<div className="absolute top-[47%] left-[70%] group cursor-pointer z-20 hover:z-50" onClick={() => openSpecModal('light')}>
<div className="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow" style={{}} /* animation-delay: 1s; */>
<div className="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
</div>
<div className="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
<span className="font-bold text-brand-green text-xs mb-0.5">전조등/후미등 통합 라이트 시스템</span>
<span className="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
<div className="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
</div>
</div>
</div>
<div className="absolute top-[50%] left-[15.5%] group cursor-pointer z-20 hover:z-50" onClick={() => openSpecModal('light')}>
<div className="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow" style={{}} /* animation-delay: 1s; */>
<div className="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
</div>
<div className="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
<span className="font-bold text-brand-green text-xs mb-0.5">전조등/후미등 통합 라이트 시스템</span>
<span className="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
<div className="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
</div>
</div>
</div>
<div className="absolute top-[60%] left-[39%] group cursor-pointer z-20 hover:z-50" onClick={() => openSpecModal('battery')}>
<div className="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow" style={{}} /* animation-delay: 0.2s; */>
<div className="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
</div>
<div className="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
<span className="font-bold text-brand-green text-xs mb-0.5">대용량 배터리</span>
<span className="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
<div className="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
</div>
</div>
</div>
<div className="absolute top-[55%] left-[67.4%] group cursor-pointer z-20 hover:z-50" onClick={() => openSpecModal('suspension')}>
<div className="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow" style={{}} /* animation-delay: 0.8s; */>
<div className="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
</div>
<div className="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
<span className="font-bold text-brand-green text-xs mb-0.5">프론트 서스펜션</span>
<span className="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
<div className="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
</div>
</div>
</div>
<div className="absolute top-[75%] left-[76.2%] group cursor-pointer z-20 hover:z-50" onClick={() => openSpecModal('wheel')}>
<div className="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow" style={{}} /* animation-delay: 1.5s; */>
<div className="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
</div>
<div className="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
<span className="font-bold text-brand-green text-xs mb-0.5">마그네슘 합금 휠</span>
<span className="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
<div className="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
</div>
</div>
</div>
<div className="absolute top-[79.4%] left-[25.9%] group cursor-pointer z-20 hover:z-50" onClick={() => openSpecModal('gear_7')}>
<div className="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow" style={{}} /* animation-delay: 0.6s; */>
<div className="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
</div>
<div className="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
<span className="font-bold text-brand-green text-xs mb-0.5">시마노 7단 기어</span>
<span className="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
<div className="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
</div>
</div>
</div>
<div className="absolute top-[69%] left-[24%] group cursor-pointer z-20 hover:z-50" onClick={() => openSpecModal('motor')}>
<div className="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow" style={{}} /* animation-delay: 0.3s; */>
<div className="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
</div>
<div className="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
<span className="font-bold text-brand-green text-xs mb-0.5">정격 500W 허브 모터</span>
<span className="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
<div className="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
</div>
</div>
</div>
</div>
{/* SLIDE 2 */}
<div className="w-full h-full shrink-0 relative bg-gray-white">
<img alt="XTRON 중앙모터 모델" className="w-full h-full object-cover opacity-90" src={`${IMAGE_BASE_URL}/PREVIEW_PRODUCT/PREVIEW_PRO_S.png`}/>
{/* 핫스팟들 */}
<div className="absolute top-[6%] left-[58%] group cursor-pointer z-20 hover:z-50" onClick={() => openSpecModal('ananda_lcd')}>
<div className="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow">
<div className="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
</div>
<div className="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
<div className="absolute bottom-full left-1/2 -translate-x-1/2 border-4 border-transparent border-b-gray-700">
</div>
<span className="font-bold text-brand-green text-xs mb-0.5">아난다 전용 계기판</span>
<span className="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
</div>
</div>
<div className="absolute top-[12%] left-[65%] group cursor-pointer z-20 hover:z-50" onClick={() => openSpecModal('brake')}>
<div className="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow" style={{}} /* animation-delay: 0.5s; */>
<div className="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
</div>
<div className="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
<div className="absolute bottom-full left-1/2 -translate-x-1/2 border-4 border-transparent border-b-gray-700">
</div>
<span className="font-bold text-brand-green text-xs mb-0.5">TEKTRO 유압식 브레이크</span>
<span className="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
</div>
</div>
<div className="absolute top-[47%] left-[70%] group cursor-pointer z-20 hover:z-50" onClick={() => openSpecModal('light')}>
<div className="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow" style={{}} /* animation-delay: 1s; */>
<div className="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
</div>
<div className="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
<span className="font-bold text-brand-green text-xs mb-0.5">전조등/후미등 통합 라이트 시스템</span>
<span className="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
<div className="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
</div>
</div>
</div>
<div className="absolute top-[50%] left-[15.5%] group cursor-pointer z-20 hover:z-50" onClick={() => openSpecModal('light')}>
<div className="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow" style={{}} /* animation-delay: 1s; */>
<div className="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
</div>
<div className="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
<span className="font-bold text-brand-green text-xs mb-0.5">전조등/후미등 통합 라이트 시스템</span>
<span className="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
<div className="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
</div>
</div>
</div>
<div className="absolute top-[61.1%] left-[41%] group cursor-pointer z-20 hover:z-50" onClick={() => openSpecModal('battery')}>
<div className="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow" style={{}} /* animation-delay: 0.2s; */>
<div className="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
</div>
<div className="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
<span className="font-bold text-brand-green text-xs mb-0.5">대용량 배터리</span>
<span className="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
<div className="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
</div>
</div>
</div>
<div className="absolute top-[55%] left-[67.4%] group cursor-pointer z-20 hover:z-50" onClick={() => openSpecModal('suspension')}>
<div className="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow" style={{}} /* animation-delay: 0.8s; */>
<div className="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
</div>
<div className="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
<span className="font-bold text-brand-green text-xs mb-0.5">프론트 서스펜션</span>
<span className="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
<div className="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
</div>
</div>
</div>
<div className="absolute top-[75%] left-[76.2%] group cursor-pointer z-20 hover:z-50" onClick={() => openSpecModal('spoke_wheel')}>
<div className="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow" style={{}} /* animation-delay: 1.5s; */>
<div className="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
</div>
<div className="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
<span className="font-bold text-brand-green text-xs mb-0.5">스포크 휠</span>
<span className="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
<div className="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
</div>
</div>
</div>
<div className="absolute top-[79.4%] left-[25.9%] group cursor-pointer z-20 hover:z-50" onClick={() => openSpecModal('gear_9')}>
<div className="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow" style={{}} /* animation-delay: 0.6s; */>
<div className="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
</div>
<div className="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
<span className="font-bold text-brand-green text-xs mb-0.5">시마노 소라 9단 기어</span>
<span className="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
<div className="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
</div>
</div>
</div>
<div className="absolute top-[62%] left-[50%] group cursor-pointer z-20 hover:z-50" onClick={() => openSpecModal('mid_motor')}>
<div className="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow" style={{}} /* animation-delay: 0.3s; */>
<div className="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
</div>
<div className="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
<span className="font-bold text-brand-green text-xs mb-0.5">아난다 미드 모터 (130N.m)</span>
<span className="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
<div className="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
</div>
</div>
</div>
</div>
</div>
</div>
{/* 모바일용 모델 탭 & 그리드 */}
<div className="md:hidden mt-8">
<div className="flex justify-center gap-4 mb-4 border-b border-gray-800">
<button className="mobile-spec-tab px-4 py-2 text-sm font-medium border-b-2 border-brand-green text-brand-green transition-colors" onClick={() => {}} /* setSpecSlide(0) */>허브모터
                            라인업</button>
<button className="mobile-spec-tab px-4 py-2 text-sm font-medium border-b-2 border-transparent text-gray-500 transition-colors" onClick={() => {}} /* setSpecSlide(1) */>미드모터
                            라인업</button>
</div>
<div className="flex flex-wrap justify-center gap-1.5 mb-6 px-4" id="mobile-spec-applicable-models">
{/* JS로 동적 렌더링 */}
</div>
<div className="grid grid-cols-2 gap-3 px-4">
<div className="bg-gray-900/80 p-4 rounded-xl border border-gray-800 cursor-pointer active:bg-gray-800" id="mobile-lcd-btn" onClick={() => openSpecModal('lcd')}>
<i className="ph ph-monitor text-2xl text-brand-green mb-2"></i>
<h4 className="font-medium text-sm mb-1">LCD 컬러 계기판</h4>
<p className="text-[11px] text-gray-400 font-normal">자세히 보기 <i className="ph ph-caret-right inline"></i></p>
</div>
<div className="bg-gray-900/80 p-4 rounded-xl border border-gray-800 cursor-pointer active:bg-gray-800" onClick={() => openSpecModal('brake')}>
<i className="ph ph-disc text-2xl text-brand-green mb-2"></i>
<h4 className="font-medium text-sm mb-1">TEKTRO 유압식 브레이크</h4>
<p className="text-[11px] text-gray-400 font-normal">자세히 보기 <i className="ph ph-caret-right inline"></i></p>
</div>
<div className="bg-gray-900/80 p-4 rounded-xl border border-gray-800 cursor-pointer active:bg-gray-800" onClick={() => openSpecModal('light')}>
<i className="ph ph-lightbulb text-2xl text-brand-green mb-2"></i>
<h4 className="font-medium text-sm mb-1">전조등/후미등 통합 라이트 시스템</h4>
<p className="text-[11px] text-gray-400 font-normal">자세히 보기 <i className="ph ph-caret-right inline"></i></p>
</div>
<div className="bg-gray-900/80 p-4 rounded-xl border border-gray-800 cursor-pointer active:bg-gray-800" onClick={() => openSpecModal('battery')}>
<i className="ph ph-battery-high text-2xl text-brand-green mb-2"></i>
<h4 className="font-medium text-sm mb-1">대용량 배터리</h4>
<p className="text-[11px] text-gray-400 font-normal">자세히 보기 <i className="ph ph-caret-right inline"></i></p>
</div>
<div className="bg-gray-900/80 p-4 rounded-xl border border-gray-800 cursor-pointer active:bg-gray-800" onClick={() => openSpecModal('suspension')}>
<i className="ph ph-arrows-vertical text-2xl text-brand-green mb-2"></i>
<h4 className="font-medium text-sm mb-1">프론트 서스펜션</h4>
<p className="text-[11px] text-gray-400 font-normal">자세히 보기 <i className="ph ph-caret-right inline"></i></p>
</div>
<div className="bg-gray-900/80 p-4 rounded-xl border border-gray-800 cursor-pointer active:bg-gray-800" id="mobile-wheel-btn" onClick={() => openSpecModal('wheel')}>
<i className="ph ph-circle-dashed text-2xl text-brand-green mb-2"></i>
<h4 className="font-medium text-sm mb-1">마그네슘 합금 휠</h4>
<p className="text-[11px] text-gray-400 font-normal">자세히 보기 <i className="ph ph-caret-right inline"></i></p>
</div>
<div className="bg-gray-900/80 p-4 rounded-xl border border-gray-800 cursor-pointer active:bg-gray-800" id="mobile-motor-btn" onClick={() => openSpecModal('motor')}>
<i className="ph ph-engine text-2xl text-brand-green mb-2"></i>
<h4 className="font-medium text-sm mb-1">정격 500W 허브 모터</h4>
<p className="text-[11px] text-gray-400 font-normal">자세히 보기 <i className="ph ph-caret-right inline"></i></p>
</div>
<div className="bg-gray-900/80 p-4 rounded-xl border border-gray-800 cursor-pointer active:bg-gray-800" id="mobile-gear-btn" onClick={() => openSpecModal('gear_7')}>
<i className="ph ph-gear text-2xl text-brand-green mb-2"></i>
<h4 className="font-medium text-sm mb-1">시마노 7단 기어</h4>
<p className="text-[11px] text-gray-400 font-normal">자세히 보기 <i className="ph ph-caret-right inline"></i></p>
</div>
</div>
</div>
</div>
</div>
</section>
{/* 05. 모델별 가격 Section */}
<section className="py-24 bg-[#0a0a0a] border-t border-gray-900" id="pricing">
<div className="container mx-auto px-6 max-w-6xl">
<div className="text-center mb-12 sm:mb-16">
<h2 className="text-3xl md:text-5xl font-bold mb-4">
                    나에게 맞는 <span className="text-xtron-400">엑스트론</span> 찾기
                </h2>
<p className="text-sm sm:text-lg text-gray-400 font-normal mb-8">24개월 무이자 혜택으로 부담 없이 시작하세요.</p>
</div>
{/* Tabs */}
<div className="flex flex-wrap justify-center gap-2 sm:gap-3 mb-10 sm:mb-12 border-b border-gray-800 pb-4">
{/* 💡 [순서 변경 1빠!] 신제품 라인업 탭 */}
<button className={`tab-btn px-4 sm:px-6 py-2 sm:py-3 font-medium text-base sm:text-lg border-b-2 border-transparent text-gray-500 hover:text-gray-300 transition-colors ${activeTab === 'newArrival' ? 'text-brand-green border-brand-green' : 'border-transparent text-gray-500 hover:text-gray-300'}`} id="tab-newArrival" onClick={() => setActiveTab('newArrival')} type="button">
                    한정판 🚨
                </button>
<button className={`tab-btn px-4 sm:px-6 py-2 sm:py-3 font-medium text-base sm:text-lg border-b-2 border-transparent text-gray-500 hover:text-gray-300 transition-colors flex items-center gap-1.5 ${activeTab === 'megaweek' ? 'text-brand-green border-brand-green' : 'border-transparent text-gray-500 hover:text-gray-300'}`} id="tab-megaweek" onClick={() => setActiveTab('megaweek')} type="button">
                    메가 데이 💡
                </button>
{/* 나머지 기존 탭들 */}
<button className={`tab-btn px-4 sm:px-6 py-2 sm:py-3 font-medium text-base sm:text-lg border-b-2 border-transparent text-gray-500 hover:text-gray-300 transition-colors ${activeTab === 'pro' ? 'text-brand-green border-brand-green' : 'border-transparent text-gray-500 hover:text-gray-300'}`} id="tab-pro" onClick={() => setActiveTab('pro')} type="button">PRO 시리즈</button>
<button className={`tab-btn px-4 sm:px-6 py-2 sm:py-3 font-medium text-base sm:text-lg border-b-2 border-transparent text-gray-500 hover:text-gray-300 transition-colors ${activeTab === 'gt' ? 'text-brand-green border-brand-green' : 'border-transparent text-gray-500 hover:text-gray-300'}`} id="tab-gt" onClick={() => setActiveTab('gt')} type="button">GT 시리즈</button>
<button className={`tab-btn px-4 sm:px-6 py-2 sm:py-3 font-medium text-base sm:text-lg border-b-2 border-transparent text-gray-500 hover:text-gray-300 transition-colors ${activeTab === 'lifestyle' ? 'text-brand-green border-brand-green' : 'border-transparent text-gray-500 hover:text-gray-300'}`} id="tab-lifestyle" onClick={() => setActiveTab('lifestyle')} type="button">라이프스타일</button>
<button className={`tab-btn px-4 sm:px-6 py-2 sm:py-3 font-medium text-base sm:text-lg border-b-2 border-transparent text-gray-500 hover:text-gray-300 transition-colors ${activeTab === 'acc' ? 'text-brand-green border-brand-green' : 'border-transparent text-gray-500 hover:text-gray-300'}`} id="tab-acc" onClick={() => setActiveTab('acc')} type="button">액세서리</button>
</div>
{/* Product Grid */}
<div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8" id="product-container">
{(products as any)[activeTab]?.map((product: any, index: number) => (
    <ProductCard key={index} item={product} category={activeTab} />
))}
</div>
</div>
</section>
{/* 06. FAQ Section */}
<section className="py-24 bg-xtron-dark border-t border-gray-900">
<div className="container mx-auto px-6 max-w-4xl">
<div className="text-center mb-16">
<h2 className="text-3xl md:text-5xl font-bold mb-4">자주 묻는 질문</h2>
<p className="text-gray-400 font-normal">고객님들이 가장 궁금해하시는 내용을 모았습니다.</p>
</div>
{/* FAQ 13: 프로모션 및 사은품 유의사항 */}
<div className="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700 mt-4">
<button className="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group" onClick={() => toggleFaq(0)}>
<span className="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
<span className="text-brand-green font-bold text-lg md:text-xl">Q.</span> 프로모션 및 사은품 관련 유의사항이 있나요?
                        </span>
<i className="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
</button>
<div className="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
<div className="pb-6 pt-1">
<div className="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
<span className="text-brand-blue font-bold text-lg md:text-xl">A.</span>
<div className="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep w-full">
<ul className="space-y-3">
<li className="flex items-start gap-2"><i className="ph-bold ph-check text-brand-green mt-1 shrink-0"></i> <span>본 프로모션은 한정 수량으로 진행되며, 재고 소진 시 예고 없이 조기 종료될 수 있습니다.</span></li>
<li className="flex items-start gap-2"><i className="ph-bold ph-check text-brand-green mt-1 shrink-0"></i> <span>출고 일정은 제품 입고 및 물류 상황에 따라 일부 변경될 수 있습니다.</span></li>
<li className="flex items-start gap-2"><i className="ph-bold ph-check text-brand-green mt-1 shrink-0"></i> <span>사은품과 추가 상품은 자전거 본품과 별도로 발송됩니다.</span></li>
<li className="flex items-start gap-2"><i className="ph-bold ph-check text-brand-green mt-1 shrink-0"></i> <span><strong className="text-gray-200">PRO FAT LIMITED EDITION</strong>은 MEGA 배터리 무상 업그레이드 혜택이 적용되지 않습니다.</span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
{/* FAQ 14: 메가 배터리 구매 및 호환 유의사항 */}
<div className="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700 mt-4 border-l-4 border-l-[#c0fb0c]">
<button className="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group" onClick={() => toggleFaq(0)}>
<span className="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
<span className="text-[#c0fb0c] font-bold text-lg md:text-xl">Q.</span> 메가 배터리 단품 구매 시, 기존 자전거와 호환이 되나요?
                        </span>
<i className="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
</button>
<div className="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
<div className="pb-6 pt-1">
<div className="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
<span className="text-[#c0fb0c] font-bold text-lg md:text-xl">A.</span>
<div className="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep w-full">
<p className="mb-4 text-gray-300">본 메가 배터리 단품은 <strong className="text-[#c0fb0c]">26년형 엑스트론 시리즈에 한하여</strong> 바로 장착 및 사용이 가능하며, 일부 제품은 호환이 불가합니다.</p>
<div className="bg-[#111] border border-gray-700 rounded-lg p-4 space-y-3">
<h5 className="text-white font-bold mb-2">📌 25년형 이하 및 기타 모델 구매 안내</h5>
<ul className="space-y-2 text-[13px] sm:text-sm">
<li className="flex items-start gap-2"><i className="ph-fill ph-warning-circle text-yellow-500 mt-1 shrink-0"></i> <span>25년형 이하 모델은 프레임 구조상 장착이 원천적으로 불가하거나 추가 부품(6핀 컨트롤러 등) 교체가 필요할 수 있습니다.</span></li>
<li className="flex items-start gap-2"><i className="ph-fill ph-warning-circle text-yellow-500 mt-1 shrink-0"></i> <span>해당 연식의 모델을 소유하신 고객님은 <strong className="text-gray-200">결제 전 반드시 당사 네이버 톡톡 or 카카오톡 채널</strong>로 소유하신 모델 및 연식을 남겨 장착 가능 여부를 확인해 주시기 바랍니다.</span></li>
<li className="flex items-start gap-2"><i className="ph-fill ph-warning-circle text-red-500 mt-1 shrink-0"></i> <span className="text-red-400">사전 확인 없이 임의 결제하신 후 장착 불가 사유로 반품하실 경우, <strong>왕복 배송비는 고객님 부담</strong>으로 처리되오니 각별한 주의를 부탁드립니다.</span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div className="space-y-4">
{/* FAQ 1: 결제 */}
<div className="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700">
<button className="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group" onClick={() => toggleFaq(0)}>
<span className="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
<span className="text-brand-green font-bold text-lg md:text-xl">Q.</span> 무이자 24개월 할부는 어떻게
                            적용되나요?
                        </span>
<i className="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
</button>
<div className="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
<div className="pb-6 pt-1">
<div className="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
<span className="text-brand-blue font-bold text-lg md:text-xl">A.</span>
<p className="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    구매하기 버튼을 눌러 링크페이에서 당사의 제휴 카드인 신한, 삼성, 현대, 롯데, 비씨, 우리로 선택 후 무이자 24개월을 선택해 주세요. (단, 농협/국민 카드는 최대 18개월)
                                    별도의 복잡한 서류 심사나 신용 조회 없이 기존에 쓰시던 카드 한도 내에서 즉시 승인되므로 아주 간편합니다. (체크 카드 및 법인 카드는 결제 대상에서 제외됩니다.)
                                </p>
</div>
</div>
</div>
</div>
{/* FAQ 2: 배송 방법 */}
<div className="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700">
<button className="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group" onClick={() => toggleFaq(0)}>
<span className="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
<span className="text-brand-green font-bold text-lg md:text-xl">Q.</span> 배송은 어떻게 받을 수 있나요?
                        </span>
<i className="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
</button>
<div className="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
<div className="pb-6 pt-1">
<div className="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
<span className="text-brand-blue font-bold text-lg md:text-xl">A.</span>
<p className="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    네, 엑스트론 전기자전거는 전문 미케닉의 검수를 거쳐 95% 이상 조립 상태로 안전하게 배송됩니다. 고객님께서는 수령 후 박스를 개봉하여 접혀있는
                                    핸들바의 각도를 조절하고, 페달만 장착해 주시면 즉시 주행이 가능합니다. (필요한 간이 공구는 스타터 킷에 포함되어 있습니다.)<br/><br/>
<strong className="text-gray-300">100% 완조립은 본사에서 수령 또는 용달을 선택하실 수 있습니다.</strong><br/>
<span className="text-[12px] text-gray-500">※ 용달은 지역에 따라 추가 금액이 발생할 수 있습니다.</span>
</p>
</div>
</div>
</div>
</div>
{/* FAQ 3: 사은품 배송 */}
<div className="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700">
<button className="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group" onClick={() => toggleFaq(0)}>
<span className="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
<span className="text-brand-green font-bold text-lg md:text-xl">Q.</span> 사은품은 자전거와 함께 배송되나요?
                        </span>
<i className="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
</button>
<div className="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
<div className="pb-6 pt-1">
<div className="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
<span className="text-brand-blue font-bold text-lg md:text-xl">A.</span>
<p className="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    네, 그렇습니다. 자전거 수령 시 바로 라이딩을 시작하실 수 있도록 '프리미엄 사은품 3종'과 '스타터 킷 4종'이 모두 자전거 본체와 함께 꼼꼼하게
                                    포장되어 합배송됩니다. (단, 헬멧 사이즈 등 일부 품목의 옵션 품절 시 부분 배송될 수 있으며, 이 경우 사전 안내를 드립니다.)
                                </p>
</div>
</div>
</div>
</div>
{/* FAQ 4: 법적 요건 (면허) */}
<div className="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700">
<button className="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group" onClick={() => toggleFaq(0)}>
<span className="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
<span className="text-brand-green font-bold text-lg md:text-xl">Q.</span> 운전 면허가 있어야 하나요?
                        </span>
<i className="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
</button>
<div className="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
<div className="pb-6 pt-1">
<div className="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
<span className="text-brand-blue font-bold text-lg md:text-xl">A.</span>
<p className="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    주행 방식에 따라 다릅니다! 페달을 굴릴 때만 모터가 도와주는 <strong>PAS (페달보조) 전용 방식</strong>은 만 13세 이상이라면
                                    누구나 <strong className="text-gray-300">면허 없이 탑승 가능</strong>합니다.<br/><br/>
                                    단, 오토바이처럼 레버를 당겨 나가는 <strong>스로틀 방식</strong> 또는 <strong>PAS/스로틀 겸용 방식</strong>의 제품을
                                    선택하셨다면 원동기 장치 자전거 이상에 해당하는 <strong className="text-brand-blue">운전면허증이 반드시
                                        필요</strong>합니다.
                                </p>
</div>
</div>
</div>
</div>
{/* FAQ 5: 법적 요건 (자전거도로) */}
<div className="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700">
<button className="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group" onClick={() => toggleFaq(0)}>
<span className="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
<span className="text-brand-green font-bold text-lg md:text-xl">Q.</span> 자전거 전용 도로 주행이 가능한가요?
                        </span>
<i className="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
</button>
<div className="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
<div className="pb-6 pt-1">
<div className="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
<span className="text-brand-blue font-bold text-lg md:text-xl">A.</span>
<p className="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    네, 물론입니다! 엑스트론 전체 제품은 국가 공인 KC 인증을 완벽하게 통과한 규격 제품으로, 속도 25km/h 제한 및 중량 요건을 충족하여
                                    합법적으로 자전거 전용 도로에서 안전하게 주행하실 수 있습니다.
                                </p>
</div>
</div>
</div>
</div>
{/* FAQ 6: 안전 (배터리) */}
<div className="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700">
<button className="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group" onClick={() => toggleFaq(0)}>
<span className="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
<span className="text-brand-green font-bold text-lg md:text-xl">Q.</span> 배터리는 안전한가요?
                        </span>
<i className="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
</button>
<div className="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
<div className="pb-6 pt-1">
<div className="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
<span className="text-brand-blue font-bold text-lg md:text-xl">A.</span>
<p className="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    KC 인증은 물론, 세계 최고 수준의 기술력을 자랑하는 삼성SDI 및 LG에너지솔루션 정품 배터리 셀을 사용하여 화재 위험을 차단하고 안정성과 품질을
                                    모두 완벽하게 확보하였습니다.
                                </p>
</div>
</div>
</div>
</div>
{/* FAQ 7: 실용성 (여성 주행) */}
<div className="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700">
<button className="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group" onClick={() => toggleFaq(0)}>
<span className="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
<span className="text-brand-green font-bold text-lg md:text-xl">Q.</span> 여자가 타도 무겁거나 부담스럽지
                            않을까요?
                        </span>
<i className="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
</button>
<div className="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
<div className="pb-6 pt-1">
<div className="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
<span className="text-brand-blue font-bold text-lg md:text-xl">A.</span>
<p className="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    전혀 걱정하지 않으셔도 됩니다! 특히 컴팩트한 사이즈의 <strong className="text-gray-200">16인치 전기자전거(프로미니, GT미니
                                        모델)</strong>는 승하차가 편하고 조향이 가벼워 여성분들이나 체구가 작으신 분들이 가장 많이 구매하고 실제로 매우 만족하며 주행하시는
                                    베스트셀러 모델입니다.
                                </p>
</div>
</div>
</div>
</div>
{/* FAQ 8: 실용성 (유아 동승) */}
<div className="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700">
<button className="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group" onClick={() => toggleFaq(0)}>
<span className="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
<span className="text-brand-green font-bold text-lg md:text-xl">Q.</span> 뒷자리에 아이를 태울 수 있나요?
                        </span>
<i className="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
</button>
<div className="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
<div className="pb-6 pt-1">
<div className="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
<span className="text-brand-blue font-bold text-lg md:text-xl">A.</span>
<p className="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    네! 전용 리어랙이 장착된 모델(프로 시리즈, GT 시리즈, 시티, 투어)에는 OGK 유아 안장 설치가 가능합니다. 안전을 위해 보통 4세 이하 영유아
                                    동승을 권장해 드립니다.<br/><br/>
<span className="text-[12px] text-gray-500">※ 단, 성인 2명이 탑승하는 것은 안전상 위험하며 법적으로도 금지되어 있으니
                                        유의해 주시기 바랍니다.</span>
</p>
</div>
</div>
</div>
</div>
{/* FAQ 9: 실용성 (배터리 관리) */}
<div className="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700">
<button className="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group" onClick={() => toggleFaq(0)}>
<span className="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
<span className="text-brand-green font-bold text-lg md:text-xl">Q.</span> 배터리만 따로 분리해서 충전할 수
                            있나요?
                        </span>
<i className="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
</button>
<div className="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
<div className="pb-6 pt-1">
<div className="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
<span className="text-brand-blue font-bold text-lg md:text-xl">A.</span>
<p className="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    물론입니다. 엑스트론의 모든 라인업은 탈부착형 배터리를 채택하고 있습니다. 동봉된 전용 열쇠를 사용해 자전거 프레임에서 배터리를 쉽게 분리할 수
                                    있으며, 무거운 자전거를 옮길 필요 없이 집이나 사무실의 220V 일반 콘센트로 스마트폰처럼 편리하게 충전하실 수 있습니다.
                                </p>
</div>
</div>
</div>
</div>
{/* FAQ 10: 사후 관리 (A/S) */}
<div className="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700">
<button className="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group" onClick={() => toggleFaq(0)}>
<span className="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
<span className="text-brand-green font-bold text-lg md:text-xl">Q.</span> 무상 보증(A/S)은 어떻게 받을 수
                            있나요?
                        </span>
<i className="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
</button>
<div className="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
<div className="pb-6 pt-1">
<div className="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
<span className="text-brand-blue font-bold text-lg md:text-xl">A.</span>
<p className="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    본사 또는 전국에 분포된 엑스트론 x 퀄리스포츠 공식 대리점을 통해 빠르고 확실한 A/S를 받으실 수 있습니다. 연장된 무상 보증(EXTEND) 혜택을
                                    온전히 누리시기 위해서는 구매 후 <strong className="text-brand-green font-medium">"반드시 정품등록"</strong>을
                                    진행해 주셔야 합니다.
                                </p>
</div>
</div>
</div>
</div>
{/* FAQ 7: ZOOM SP442 장착 가이드 */}
<div className="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700 mt-4">
<button className="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group" onClick={() => toggleFaq(0)}>
<span className="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
<span className="text-brand-green font-bold text-lg md:text-xl">Q.</span> ZOOM SP442 서스펜션 싯포스트는 어떻게 장착하나요?
                        </span>
<i className="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
</button>
<div className="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
<div className="pb-6 pt-1">
<div className="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
<span className="text-brand-blue font-bold text-lg md:text-xl">A.</span>
<div className="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
<p className="mb-3">아래 링크를 통해 자세한 장착 동영상 가이드를 확인하실 수 있습니다.</p>
<a className="inline-flex items-center gap-1.5 text-brand-green hover:text-white font-bold transition-colors bg-brand-green/10 border border-brand-green/20 px-3 py-1.5 rounded-lg" href="https://www.youtube.com/watch?v=zHuhdGXOqbs" target="_blank">
                                        ZOOM SP442 장착 영상 바로가기 <i className="ph ph-arrow-square-out text-lg"></i>
</a>
</div>
</div>
</div>
</div>
</div>
{/* FAQ 8: OGK 유아 안장 장착 가이드 */}
<div className="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700 mt-4">
<button className="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group" onClick={() => toggleFaq(0)}>
<span className="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
<span className="text-brand-green font-bold text-lg md:text-xl">Q.</span> OGK 유아 안장은 어떻게 장착하나요?
                        </span>
<i className="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
</button>
<div className="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
<div className="pb-6 pt-1">
<div className="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
<span className="text-brand-blue font-bold text-lg md:text-xl">A.</span>
<div className="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
<p className="mb-3">아래 링크를 통해 자세한 장착 동영상 가이드를 확인하실 수 있습니다. 만약 투어 모델에 장착하실 예정이라면 전용 볼트가 필요하므로 구입 시 메세지에 남겨주세요</p>
<a className="inline-flex items-center gap-1.5 text-brand-green hover:text-white font-bold transition-colors bg-brand-green/10 border border-brand-green/20 px-3 py-1.5 rounded-lg" href="https://www.youtube.com/watch?v=dtwFCLac14U" target="_blank">
                                        OGK 유아 안장 장착 영상 바로가기 <i className="ph ph-arrow-square-out text-lg"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
{/* Footer */}
<footer className="bg-black py-12 border-t border-gray-900 text-center text-gray-600 text-xs sm:text-sm">
<div className="container mx-auto px-6">
<div className="flex justify-center mb-6">
<img alt="XTRON x QUALISPORTS" className="h-4 sm:h-5 object-contain opacity-80 hover:opacity-70 transition-opacity" src={`${IMAGE_BASE_URL}/BATTERY_LOGO_SET/XxQ.png`}/>
</div>
<p className="mb-3 font-normal text-gray-500">세상을 더 넓게 EXTEND, 엑스트론 무이자 24개월 이벤트</p>
<p className="font-normal opacity-80">© 2026 XTRON. All rights reserved.</p>
</div>
</footer>
{/* 🚀 상시 노출 구매하기 플로팅 버튼 */}
<div className="fixed bottom-6 left-1/2 transform -translate-x-1/2 z-40 w-[90%] max-w-[340px] md:max-w-none md:w-auto pointer-events-none transition-all duration-500 opacity-100 translate-y-0" id="floating-cta">
{/* 💡 onclick 이벤트 추가 및 href 속성 수정 */}
<a className="pointer-events-auto flex items-center justify-center w-full px-8 md:px-10 py-3.5 md:py-4 bg-gradient-to-r from-brand-green to-brand-blue text-white font-extrabold text-base sm:text-lg md:text-xl rounded-full animate-cta-pulse hover:opacity-90 transition-all shadow-[0_0_20px_rgba(114,191,68,0.4)]" href="javascript:void(0);" onClick={() => {}} /* scrollToPricingAndTab('newArrival') */>
<span className="flex items-center gap-2 tracking-wide">
                한정판 구매하기 <i className="ph-bold ph-shopping-cart text-xl sm:text-2xl"></i>
</span>
</a>
</div>
{/* 👇 [수정] 모바일/PC 모두 중앙 하단 스택형 플로팅 팝업 👇 */}
<div className="fixed bottom-[84px] md:bottom-[96px] left-1/2 transform -translate-x-1/2 z-40 w-[90%] max-w-[340px] md:max-w-none md:w-auto transition-all duration-500 opacity-100 translate-y-0" id="floating-city-banner">
{/* 💡 [수정] 목적지를 'megaweek'로 변경 */}
<button className="w-full bg-[#111111] border border-brand-green/40 shadow-[0_0_20px_rgba(114,191,68,0.4)] rounded-full py-2.5 px-4 md:py-3 md:px-6 flex items-center justify-between gap-4 hover:bg-gray-800 transition-colors group cursor-pointer" onClick={() => {}} /* scrollToPricingAndTab('megaweek') */ type="button">
<div className="flex items-center gap-2.5 md:gap-4">
{/* 아이콘 */}
<div className="w-8 h-8 md:w-10 md:h-10 bg-brand-green/10 rounded-full flex items-center justify-center shrink-0">
<i className="ph-fill ph-battery-plus text-brand-green text-lg md:text-xl animate-pulse"></i>
</div>
{/* 텍스트 */}
<div className="text-left">
<p className="text-[9px] md:text-[10px] text-brand-green font-bold tracking-wider mb-0.5">메가데이 특별</p>
<p className="text-[11px] sm:text-xs md:text-sm text-white font-medium whitespace-nowrap">메가 배터리 무상 업그레이드 제품 보기</p>
</div>
</div>
{/* 모바일/PC 공통 노출: 호버 시 화살표 이동 애니메이션 */}
<div className="text-brand-green shrink-0 pl-1 md:pl-2 flex items-center">
<i className="ph-bold ph-caret-right text-sm md:text-base group-hover:translate-x-1 transition-transform"></i>
</div>
</button>
</div>
{/* 🎁 [신규 추가] 사은품 반값 할인 카카오톡 문의 팝업 */}
<div className="fixed inset-0 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-300 p-4 sm:p-6" id="gift-modal">
{/* 팝업 바깥쪽 어두운 배경 (클릭 시 닫힘) */}
<div className="absolute inset-0 bg-black/80 backdrop-blur-sm" onClick={() => {}} /* closeGiftModal() */></div>
{/* 팝업 본체 */}
<div className="relative bg-[#0a0a0a] border border-gray-800 rounded-3xl p-6 md:p-8 max-w-md w-full shadow-2xl transform scale-95 transition-transform duration-300 flex flex-col z-10" id="gift-modal-content">
{/* 닫기 버튼 */}
<button className="absolute top-4 right-4 text-gray-500 hover:text-white transition-colors bg-black/50 rounded-full p-1" onClick={() => {}} /* closeGiftModal() */>
<i className="ph ph-x text-2xl"></i>
</button>
{/* 텍스트 내용 */}
<div className="text-center mb-6 mt-2">
<div className="w-16 h-16 bg-brand-green/10 rounded-full flex items-center justify-center mx-auto mb-4 border border-brand-green/20">
<i className="ph-fill ph-gift text-3xl text-brand-green"></i>
</div>
<h3 className="text-xl sm:text-2xl font-bold text-white mb-2">사은품 50% 할인 문의</h3>
<p className="text-gray-400 text-sm md:text-base break-keep leading-relaxed mb-5">
                    배달 가방 또는 ZOOM SP442 중 <br/><strong className="text-white">미선택하신 품목은 50% 반값 할인가</strong>에 <br/>추가 구매가 가능합니다. <br/><br/>결제를 원하시면 아래 버튼을 눌러 <br/>카카오톡 채널로 문의해 주세요!
                </p>
{/* 🚨 [신규 추가] 구매 확인 필수 경고 문구 */}
<div className="bg-red-500/10 border border-red-500/30 rounded-lg p-3 text-left flex items-start gap-2 shadow-inner">
<i className="ph-fill ph-warning-circle text-red-500 text-lg mt-0.5 shrink-0"></i>
<p className="text-red-400 text-xs sm:text-sm font-medium break-keep leading-snug">
                        본 혜택은 엑스트론 자전거 구매 고객 한정입니다.<br/>
<strong className="text-red-500 font-bold">반드시 자전거 구매(결제)를 먼저 완료하신 후,</strong><br/>성함과 연락처를 카카오톡으로 남겨주세요.
                    </p>
</div>
</div>
{/* 카카오톡 연동 버튼 (링크 수정 필요) */}
<a className="w-full flex items-center justify-center gap-2 bg-[#FEE500] hover:bg-[#FADA0A] text-[#191919] font-bold text-sm sm:text-base py-3.5 rounded-xl transition-colors shadow-lg" href="https://buyxtron.com/kakao_link" target="_blank">
<i className="ph-fill ph-chat-circle text-xl"></i> 카카오톡으로 문의하기
            </a>
</div>
</div>
{/* 🎁 액세서리 특가 가격 안내 팝업 */}
<div className="fixed inset-0 z-[60] flex items-center justify-center hidden opacity-0 transition-opacity duration-300 p-4 sm:p-6" id="acc-modal">
{/* 팝업 바깥쪽 어두운 배경 (클릭 시 닫힘) */}
<div className="absolute inset-0 bg-black/80 backdrop-blur-sm" onClick={() => {}} /* closeAccModal() */></div>
{/* 팝업 본체 */}
<div className="relative bg-[#0a0a0a] border border-[#05e5f9]/30 rounded-3xl p-6 md:p-8 max-w-sm w-full shadow-[0_0_40px_rgba(5,229,249,0.2)] transform scale-95 transition-transform duration-300 flex flex-col z-10" id="acc-modal-content">
{/* 닫기 버튼 */}
<button className="absolute top-4 right-4 text-gray-500 hover:text-white transition-colors bg-black/50 rounded-full p-1" onClick={() => {}} /* closeAccModal() */>
<i className="ph ph-x text-2xl"></i>
</button>
{/* 타이틀 */}
<div className="text-center mb-6 mt-2">
<div className="w-14 h-14 bg-[#05e5f9]/10 rounded-full flex items-center justify-center mx-auto mb-4 border border-[#05e5f9]/20">
<i className="ph-fill ph-tag text-2xl text-[#05e5f9]"></i>
</div>
<h3 className="text-xl sm:text-2xl font-bold text-white mb-2">이벤트 한정 특가 안내</h3>
<p className="text-gray-400 text-xs sm:text-sm break-keep leading-relaxed">
                프로 S, GT S, 프로, 시티, 투어 모델 구매 고객님께만 적용되는<br/>파격적인 할인 혜택이며, 구매 완료 후 아래 카카오톡 채널로 문의 부탁드립니다.
            </p>
</div>
{/* 가격표 리스트 */}
<div className="space-y-3 mb-6">
{/* 배달 가방 */}
<div className="bg-[#111111] border border-gray-800 rounded-xl p-4 flex justify-between items-center group hover:border-[#05e5f9]/50 transition-colors">
<div>
<p className="text-white font-bold text-sm mb-1">배달 가방</p>
<p className="text-gray-500 line-through text-[11px] decoration-gray-600">정상가 150,000원</p>
</div>
<div className="text-right flex items-baseline gap-1">
<span className="text-[#c0fb0c] font-black text-2xl tracking-tighter">50,000</span>
<span className="text-gray-400 text-xs font-medium">원</span>
</div>
</div>
{/* ZOOM SP442 */}
<div className="bg-[#111111] border border-gray-800 rounded-xl p-4 flex justify-between items-center group hover:border-[#05e5f9]/50 transition-colors">
<div>
<p className="text-white font-bold text-sm mb-1">ZOOM SP442</p>
<p className="text-gray-500 line-through text-[11px] decoration-gray-600">정상가 125,000원</p>
</div>
<div className="text-right flex items-baseline gap-1">
<span className="text-[#05e5f9] font-black text-2xl tracking-tighter">70,000</span>
<span className="text-gray-400 text-xs font-medium">원</span>
</div>
</div>
</div>
{/* 하단 확인 버튼 */}
<a className="w-full flex items-center justify-center gap-2 bg-[#FEE500] hover:bg-[#FADA0A] text-[#191919] font-bold text-sm sm:text-base py-3.5 rounded-xl transition-colors shadow-lg" href="https://buyxtron.com/kakao_link" target="_blank">
<i className="ph-fill ph-chat-circle text-xl"></i> 카카오톡으로 특가 구매 문의하기
        </a>
</div>
</div>
{/* ✅ 스펙 팝업(Modal) */}
<div className={`fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 transition-opacity duration-300 ${specModalOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'}`} id="spec-modal">
<div className="absolute inset-0 bg-black/80 backdrop-blur-sm" onClick={() => closeSpecModal()}></div>
<div className={`relative bg-[#0a0a0a] border border-gray-800 rounded-3xl p-5 sm:p-6 md:p-8 max-w-4xl w-full shadow-2xl transition-transform duration-300 flex flex-col max-h-[90vh] overflow-y-auto ${specModalOpen ? 'scale-100' : 'scale-95'}`}>
<button className="absolute top-3 right-3 sm:top-4 sm:right-4 md:top-6 md:right-6 text-gray-500 hover:text-white transition-colors z-10 bg-black/50 rounded-full p-1" onClick={() => closeSpecModal()}>
<i className="ph ph-x text-2xl sm:text-3xl"></i>
</button>
{selectedSpec && (
<div className="flex flex-col md:flex-row gap-5 sm:gap-6 md:gap-8 items-center md:items-start mt-2">
<div className="shrink-0 w-full sm:w-auto flex justify-center">
<div className="w-[200px] h-[200px] sm:w-[250px] sm:h-[250px] md:w-[300px] md:h-[300px] rounded-2xl overflow-hidden border border-gray-800 bg-[#111] relative shrink-0">
<img alt="상세 스펙 이미지" className="w-full h-full object-cover" src={selectedSpec.imgSrc} />
</div>
</div>
<div className="flex-1 w-full text-left">
<div className="inline-block bg-brand-green/10 text-brand-green px-2.5 sm:px-3 py-1 rounded-full text-[10px] sm:text-xs font-medium mb-3 sm:mb-4 border border-brand-green/20 tracking-wider">PREMIUM DETAIL</div>
<h3 className="text-xl sm:text-2xl md:text-3xl font-semibold mb-3 sm:mb-5 text-white">{selectedSpec.title}</h3>
<div className="text-gray-400 text-xs sm:text-sm md:text-base leading-loose font-normal space-y-2 sm:space-y-3 whitespace-pre-line">
<div dangerouslySetInnerHTML={{ __html: selectedSpec.desc }} />
</div>
</div>
</div>
)}
</div>
</div>
    </>
    </>
  );
}
