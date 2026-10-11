import React, { useState } from 'react';
import { Product } from '../data/productData';

export function ProductCard({ item, category }: { item: Product; category: string }) {
    const [batteryType, setBatteryType] = useState<'standard' | 'mega'>('standard');
    
    const promoModels = ["엑스트론 시티", "엑스트론 프로", "엑스트론 투어", "엑스트론 프로 S", "엑스트론 GT S", "엑스트론 GT"];
    const isMegaPromo = promoModels.includes(item.name);
    
    const formatNumber = (num: number) => Math.floor(num).toLocaleString('ko-KR');

    const handleBatterySelect = (type: 'standard' | 'mega') => {
        setBatteryType(type);
    };

    let currentPrice = item.basePrice;
    let currentOrigPrice = item.originalPrice || item.basePrice;
    
    if (isMegaPromo && batteryType === 'mega') {
        currentPrice = item.megaPrice || item.basePrice;
        currentOrigPrice = item.basePrice + 100000; // Original Mega Price in promo
    } else if (item.hasMega && batteryType === 'mega') {
        currentPrice = item.megaPrice || item.basePrice;
        currentOrigPrice = item.megaPrice || item.basePrice;
    }

    let buttonHref = item.url || 'https://qualisports.kr';
    let buttonTarget = '_blank';
    let buttonClass = category === 'newArrival' 
        ? 'bg-white text-black hover:bg-[#c0fb0c] hover:text-white cursor-pointer'
        : 'bg-white text-black hover:bg-brand-green hover:text-white cursor-pointer';                
    let buttonText = '구매하기';

    if (item.isSoldOut) {
        buttonHref = '#';
        buttonTarget = '_self';
        buttonClass = 'bg-gray-700 text-gray-400 cursor-not-allowed';
        buttonText = '품절된 상품입니다';
    } else if (item.isPreOrder) {
        buttonClass = 'bg-brand-green text-white hover:bg-[#66b338] cursor-pointer shadow-[0_0_15px_rgba(114,191,68,0.3)] animate-pulse-slow';
        buttonText = '사전 예약하기';
    }

    const cardClass = 'w-full h-full ' + (isMegaPromo 
        ? 'bg-gray-900/50 border-2 border-brand-green/60 rounded-3xl overflow-hidden shadow-[0_0_25px_rgba(114,191,68,0.25)] hover:shadow-[0_0_40px_rgba(114,191,68,0.4)] transition-all duration-300 group flex flex-col relative z-10'
        : (category === 'newArrival' 
            ? 'bg-gray-900/50 border border-gray-800 rounded-3xl overflow-hidden hover:border-[#c0fb0c]/50 transition-all duration-300 group flex flex-col relative' 
            : 'bg-gray-900/50 border border-gray-800 rounded-3xl overflow-hidden hover:border-brand-green/50 transition-all duration-300 group flex flex-col relative'));

    const titleHoverClass = category === 'newArrival' ? 'group-hover:text-[#c0fb0c]' : 'group-hover:text-brand-green';
    const imgGlowClass = category === 'newArrival' ? 'group-hover:bg-[#c0fb0c]/10' : 'group-hover:bg-brand-green/10';

    return (
        <div className={cardClass}>
            <div className="h-40 sm:h-48 relative bg-[#0a0a0a] overflow-hidden">
                <div className={`absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-40 h-40 sm:w-48 sm:h-48 bg-white/5 rounded-full blur-2xl ${imgGlowClass} transition-colors duration-500 z-0`}></div>
                {isMegaPromo && <div className="absolute inset-0 bg-gradient-to-br from-brand-green/20 via-transparent to-brand-blue/10 z-0 opacity-80"></div>}
                <div className="absolute inset-0 bg-gradient-to-t from-gray-100 to-white z-0"></div>
                
                <div className="absolute inset-0 flex items-center justify-center p-4 sm:p-6">
                    <img src={item.imgSrc} alt="Product Image" className="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500 relative z-10 drop-shadow-2xl" />
                </div>

                {item.isSoldOut && (
                    <div className="absolute inset-0 bg-black/60 flex items-center justify-center z-30 backdrop-blur-sm">
                        <div className="text-center">
                            <span className="block text-[#72bf44] font-black text-xl md:text-2xl border-4 border-[#72bf44] px-4 py-2 rotate-[-10deg] shadow-[0_0_20px_rgba(114,191,68,0.4)]">
                                {item.isSoldOut} 수량 완판!
                            </span>                                        
                        </div>
                    </div>
                )}
                
                {item.isPreOrder && (
                    <div className="absolute inset-0 bg-black/40 flex items-center justify-center z-30 backdrop-blur-[1px] pointer-events-none">
                        <div className="text-center">
                            <span className="block text-[#72bf44] font-black text-lg md:text-xl border-4 border-[#72bf44] px-4 py-2 rotate-[-8deg] shadow-[0_0_20px_rgba(114,191,68,0.4)] bg-black/50 rounded-xl">
                                1차 완판! 2차 예약중
                            </span>                                        
                        </div>
                    </div>
                )}

                {isMegaPromo ? (
                    <div className="absolute top-4 right-4 bg-gradient-to-r from-brand-green to-brand-blue text-white text-[10px] sm:text-xs font-bold px-3 py-1.5 rounded-full shadow-[0_0_15px_rgba(114,191,68,0.5)] tracking-wide z-20 animate-pulse flex items-center gap-1.5">
                        <i className="ph-fill ph-gift text-sm"></i> MEGA 무상 업그레이드
                    </div>
                ) : item.hasMega ? (
                    <div className="absolute top-4 right-4 bg-brand-green text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg shadow-brand-green/20 tracking-wider z-20">MEGA</div>
                ) : null}

                {['엑스트론 미니'].includes(item.name) && (
                    <div className="absolute top-4 left-4 bg-brand-blue text-white text-[10px] sm:text-xs font-regular px-2 py-1 rounded-md shadow-lg z-20 flex items-center gap-1">
                        <i className="ph-fill ph-gift text-brand-green"></i>리어랙 증정
                    </div>
                )}

                {(!item.isAcc && item.colors) && (
                    <div className="absolute bottom-3 left-4 flex gap-1 sm:gap-1.5 z-20 bg-black/40 backdrop-blur-sm px-2 py-1.5 rounded-full">
                        {item.colors.map((color, i) => (
                            <div key={i} className="w-3 h-3 sm:w-3.5 sm:h-3.5 rounded-full border border-gray-600 shadow-inner" style={{ backgroundColor: color }}></div>
                        ))}
                    </div>
                )}
            </div>

            <div className="p-5 sm:p-6 md:p-8 flex-1 flex flex-col bg-[#0e0e0e]">
                <div className="mb-4 flex flex-col items-start">
                    {item.logo && <img src={item.logo} alt="시리즈 로고" className="h-3 sm:h-4 md:h-5 object-contain mb-2 sm:mb-2.5 opacity-90 group-hover:opacity-100 transition-opacity" />}
                    <h3 className={`text-xl sm:text-2xl font-semibold mb-2 text-white ${titleHoverClass} transition-colors`} dangerouslySetInnerHTML={{ __html: item.name }}></h3>
                    <p className="text-xs sm:text-sm text-gray-400 font-normal h-8 sm:h-10 whitespace-pre-line" dangerouslySetInnerHTML={{ __html: item.desc }}></p>
                </div>

                {!item.isAcc && (
                    item.batteryLabel ? (
                        <div className="flex gap-1 mb-4 sm:mb-5 bg-gray-900 border border-[#c0fb0c]/30 p-1 rounded-lg shadow-[0_0_10px_rgba(255,77,0,0.05)]">
                            <div className="flex-1 py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold rounded-md bg-[#c0fb0c]/10 text-[#c0fb0c] text-center cursor-default tracking-wider">
                                {item.batteryLabel}
                            </div>
                        </div>
                    ) : isMegaPromo ? (
                        <div className="flex gap-1 mb-4 sm:mb-5 bg-gray-900 border border-[#c0fb0c]/40 p-1 rounded-lg shadow-[0_0_10px_rgba(255,77,0,0.15)] relative overflow-hidden">
                            <div className="absolute inset-0 bg-[#c0fb0c]/5 z-0"></div>
                            <button onClick={() => handleBatterySelect('standard')} className={`flex-1 py-1.5 sm:py-2 text-[10px] sm:text-xs font-medium rounded-md transition-colors relative z-10 ${batteryType === 'standard' ? 'bg-gray-700 text-white' : 'bg-transparent text-gray-500'}`}>48V 20Ah</button>
                            <button onClick={() => handleBatterySelect('mega')} className={`flex-1 py-1 text-[10px] sm:text-xs font-bold rounded-md transition-colors flex flex-col items-center justify-center relative z-10 leading-tight ${batteryType === 'mega' ? 'bg-gray-700 text-[#c0fb0c]' : 'bg-transparent text-gray-500 hover:text-white'}`}>
                                <span className="flex items-center gap-1">48V 28.5Ah <i className="ph-fill ph-lightning text-[#c0fb0c]"></i></span>
                                <span className="text-[9px] font-medium mt-0.5 opacity-90">(무상 변경)</span>
                            </button>
                        </div>
                    ) : item.hasMega ? (
                        <div className="flex gap-1 mb-4 sm:mb-5 bg-gray-900 border border-gray-800 p-1 rounded-lg">
                            <button onClick={() => handleBatterySelect('standard')} className={`flex-1 py-1.5 sm:py-2 text-[10px] sm:text-xs font-medium rounded-md transition-colors ${batteryType === 'standard' ? 'bg-gray-700 text-white' : 'bg-transparent text-gray-500'}`}>48V 20Ah</button>
                            <button onClick={() => handleBatterySelect('mega')} className={`flex-1 py-1.5 sm:py-2 text-[10px] sm:text-xs font-medium rounded-md transition-colors flex items-center justify-center gap-1 ${batteryType === 'mega' ? 'bg-gray-700 text-brand-green' : 'bg-transparent text-gray-500 hover:text-white'}`}>
                                48V 28.5Ah <i className="ph-fill ph-lightning text-brand-green"></i>
                            </button>
                        </div>
                    ) : (
                        <div className="flex gap-1 mb-4 sm:mb-5 bg-gray-900 border border-gray-800 p-1 rounded-lg">
                            <div className="flex-1 py-1.5 sm:py-2 text-[10px] sm:text-xs font-medium rounded-md bg-gray-700 text-white text-center cursor-default tracking-wide">48V 20Ah (기본)</div>
                        </div>
                    )
                )}

                {item.isAcc ? (
                    item.originalPrice ? (
                        <div className="mb-5 sm:mb-6 border-t border-gray-800 pt-5 sm:pt-6 mt-auto">
                            <div className="flex justify-end items-center mb-1.5 gap-2">
                                <span className="text-gray-500 text-[10px] sm:text-xs font-normal">정상가</span>
                                <span className="text-gray-400 text-[10px] sm:text-xs font-medium line-through decoration-gray-500">{formatNumber(item.originalPrice)}원</span>
                            </div>
                            <div className="flex justify-between items-end">
                                <span className="text-brand-green font-medium bg-brand-green/10 border border-brand-green/20 px-2 py-1.5 rounded text-[10px] tracking-wider mb-1 whitespace-nowrap">할인 특가</span>
                                <div className="text-right flex items-baseline gap-0.5 mt-[-2px]">
                                    <span className="text-3xl sm:text-4xl font-bold text-white tracking-tighter">{formatNumber(currentPrice)}</span>
                                    <span className="text-xs sm:text-sm text-gray-400 font-normal">원</span>
                                </div>
                            </div>
                        </div>
                    ) : (
                        <div className="mb-5 sm:mb-6 border-t border-gray-800 pt-5 sm:pt-6 mt-auto flex justify-between items-end">
                            <span className="text-gray-400 font-medium text-[10px] sm:text-[11px] tracking-wider mb-1">판매가</span>
                            <div className="text-right flex items-baseline gap-0.5">
                                <span className="text-3xl sm:text-4xl font-bold text-white tracking-tighter">{formatNumber(currentPrice)}</span>
                                <span className="text-xs sm:text-sm text-gray-400 font-normal">원</span>
                            </div>
                        </div>
                    )
                ) : item.originalPrice ? (
                    <div className="mb-5 sm:mb-6 border-t border-gray-800 pt-4 sm:pt-5 mt-auto flex flex-col gap-1">
                        <div className="flex justify-between items-center px-1">
                            <span className="text-gray-500 text-xs sm:text-sm font-normal">정상가</span>
                            <span className="text-gray-400 text-xs sm:text-sm font-medium line-through decoration-gray-500">{formatNumber(currentOrigPrice)}원</span>
                        </div>
                        <div className="flex justify-between items-end mb-2 px-1">
                            <span className="text-[#c0fb0c] font-medium bg-[#c0fb0c]/10 border border-[#c0fb0c]/20 px-2 py-1 rounded text-[10px] tracking-wider">이벤트가</span>
                            <div className="text-right flex items-baseline gap-0.5">
                                <span className="text-2xl sm:text-3xl font-bold text-white tracking-tighter">{formatNumber(currentPrice)}</span>
                                <span className="text-xs sm:text-sm text-gray-400 font-normal">원</span>
                            </div>
                        </div>
                        <div className="flex justify-between items-center bg-[#151515] rounded-lg p-2.5 border border-[#c0fb0c]/30 mt-1 shadow-inner">
                            <span className="text-gray-400 font-medium text-[9px] sm:text-[10px] tracking-wider">무이자 24개월</span>
                            <div className="text-right flex items-baseline">
                                <span className="text-[10px] sm:text-xs text-gray-500 font-normal">월</span>
                                <span className="text-lg sm:text-xl font-bold text-[#c0fb0c] ml-1 tracking-tighter">{formatNumber(currentPrice / 24)}</span>
                                <span className="text-[10px] sm:text-xs text-gray-500 font-normal ml-0.5">원</span>
                            </div>
                        </div>
                    </div>
                ) : (
                    <div className="mb-5 sm:mb-6 border-t border-gray-800 pt-5 sm:pt-6 mt-auto">
                        <div className="flex justify-between items-center mb-2">
                            <span className="text-gray-500 text-xs sm:text-sm font-normal">정상가</span>
                            <span className="text-gray-400 text-xs sm:text-sm font-medium line-through decoration-gray-500">{formatNumber(currentOrigPrice)}원</span>
                        </div>
                        <div className="flex justify-between items-end">
                            <span className="text-brand-green font-medium bg-brand-green/10 border border-brand-green/20 px-2 py-1 rounded text-[9px] sm:text-[10px] tracking-wider">무이자 24개월</span>
                            <div className="text-right">
                                <span className="text-xs sm:text-sm text-gray-400 font-normal">월</span>
                                <span className="text-3xl sm:text-4xl font-bold text-white ml-1 tracking-tighter">{formatNumber(currentPrice / 24)}</span>
                                <span className="text-xs sm:text-sm text-gray-400 font-normal ml-0.5">원</span>
                            </div>
                        </div>
                    </div>
                )}
                
                <a href={buttonHref} target={buttonTarget} className={`w-full py-3 sm:py-4 rounded-xl font-semibold text-base sm:text-lg transition-colors shadow-lg block text-center ${buttonClass}`}>
                    {buttonText}
                </a>
            </div>
        </div>
    );
}
