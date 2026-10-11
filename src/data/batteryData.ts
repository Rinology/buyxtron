export const batteryData = {
    standard: {
        desc: "출퇴근과 주말 레저를 완벽하게 커버. \n타사 최고가 모델에서나 볼 법한 대용량이 엑스트론에서는 '기본'입니다.",
        cellImg: "/image/BATTERY_LOGO_SET/SAMSUNG-SDI.png",
        cellAlt: "삼성 SDI",
        ah: "48V 20Ah",
        km: 154.9,
        width: "60%",
        colorClass: "bg-brand-blue",
        textColor: "text-brand-blue",
        imgSrc: "/image/BATTERY_PACK/STANDARD_PACK.jpg",
        features: [
            { icon: "ph-shield-check", title: "삼성 SDI 정품 INR21700G(Ver.B) 셀", desc: "세계 최고 수준의 효율과 내구성을 자랑하는 <br>삼성 리튬이온 셀을 아낌없이 사용했습니다." },
            { icon: "ph-arrows-left-right", title: "손쉬운 배터리 관리", desc: "빠르고 간편하게 배터리를 탈착할 수 있어, <br>언제 어디서든 손쉽게 배터리 교체가 가능합니다." },
            { icon: "ph-clock-countdown", title: "약 6시간 40분 완충", desc: "퇴근 후 꽂아두면 다음 날 아침 100% 준비 완료. <br>일상에 최적화된 충전 사이클." }
        ]
    },
    mega: {
        desc: "모두가 20Ah에 머물 때, Xtron은 28.5Ah로 나아갑니다. \n42% 용량 증가가 선사하는 멈추지 않는 라이딩!",
        cellImg: "/image/BATTERY_LOGO_SET/LG-Energy-Solution.png",
        cellAlt: "LG Energy Solution",
        ah: "48V 28.5Ah",
        megaIcon: true,
        km: 230,
        width: "92%",
        colorClass: "bg-gradient-to-r from-brand-blue to-brand-green",
        textColor: "text-[#c0fb0c]",
        imgSrc: "/image/BATTERY_PACK/MEGA_PACK.jpg",
        features: [
            { icon: "ph-battery-plus", title: "LG 에너지솔루션 INR21700-M58T 셀", desc: "극한의 환경에서도 일정한 전압을 유지하는 <br>LG의 하이엔드 배터리 셀 기술력이 집약되었습니다." },
            { icon: "ph-lightning", title: "42% 압도적 용량 증가", desc: "기존 대비 약 1.4배 늘어난 짐승 용량으로 배달 대행, 국토 종주 등 장거리에 완벽 대응합니다." },
            { icon: "ph-rocket", title: "고출력 롱래스팅 성능", desc: "가파른 오르막을 연속해서 주행해도 전압 강하 현상 없이 <br>처음부터 끝까지 강력한 토크를 뿜어냅니다." }
        ]
    }
};
