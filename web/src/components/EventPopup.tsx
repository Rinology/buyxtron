"use client";

import React, { useState, useEffect } from "react";

const IMAGE_BASE_URL = process.env.NEXT_PUBLIC_IMAGE_BASE_URL || "/image";

export const EventPopup = () => {
  const [isOpen, setIsOpen] = useState(false);

  useEffect(() => {
    // 팝업 하루 안보기 쿠키 또는 로컬스토리지 체크
    const hidePopup = localStorage.getItem("hideEventPopup");
    if (!hidePopup) {
      setIsOpen(true);
    }
  }, []);

  const handleClose = () => {
    setIsOpen(false);
  };

  const handleHideToday = () => {
    const today = new Date();
    // 24시간 후 만료되는 로직 대신 임시로 만료기한 저장
    today.setHours(today.getHours() + 24);
    localStorage.setItem("hideEventPopup", today.getTime().toString());
    setIsOpen(false);
  };

  if (!isOpen) return null;

  return (
    <div className="fixed inset-0 z-[100] flex items-center justify-center bg-black/70 px-4">
      <div className="relative bg-[#111] border border-gray-800 rounded-2xl w-full max-w-sm overflow-hidden shadow-2xl">
        <div className="relative w-full aspect-[4/5] bg-gray-900 flex items-center justify-center">
          <img
            src={`${IMAGE_BASE_URL}/EVENT/MEGA_DAY_TITLE.webp`}
            alt="Event Popup"
            className="w-full h-full object-cover"
          />
        </div>
        
        <div className="flex justify-between items-center bg-[#000] p-3 border-t border-gray-800">
          <button 
            onClick={handleHideToday}
            className="text-gray-400 text-sm hover:text-white transition-colors"
          >
            오늘 하루 보지 않기
          </button>
          <button 
            onClick={handleClose}
            className="text-white font-bold text-sm bg-gray-800 px-4 py-1.5 rounded-full hover:bg-gray-700 transition-colors"
          >
            닫기
          </button>
        </div>
      </div>
    </div>
  );
};
