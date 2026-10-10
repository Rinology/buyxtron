<?php
/*
Template Name: 엑스트론 이벤트 랜딩
*/
// =================================================================
// [영역 1] 데이터 세팅: 8개 상품 데이터 배열 (최상단에 위치)
// =================================================================
$xtron_products = [
    [
        "name"        => "엑스트론 프로S",
        "lowPrice"    => "2130000",
        "highPrice"   => "2230000",
        "ratingValue" => "4.91",
        "reviewCount" => "51",
        "description" => "엑스트론 프로 S는 유려한 곡선형의 6061-T6 알루미늄 합금 접이식 프레임과 20인치 휠을 적용한 전기자전거로, 뛰어난 주행 성능과 높은 활용성을 제공합니다. 폴딩 구조를 통해 차량 적재와 실내 보관이 용이하며, 출퇴근부터 레저 라이딩까지 다양한 환경에서 편리하게 활용할 수 있습니다. ANANDA M100 미드드라이브 모터(500W, 최대 토크 130N.m)와 기본 48V 20Ah 배터리, 최대 28.5Ah 메가배터리 옵션을 지원해 강력한 구동력과 최대 230km의 주행거리를 제공합니다. 또한 프론트 서스펜션, TEKTRO 유압 디스크브레이크, 시마노 SORA 9단 변속 시스템, 펑크 방지 타이어를 적용해 다양한 주행 환경에서도 뛰어난 승차감과 안정적인 제동 성능을 제공합니다.고휘도 LED 헤드라이트와 LCD 디스플레이, Walk Mode 등 편의 기능을 갖춰 도심 출퇴근부터 장거리 투어링까지 폭넓게 활용할 수 있는 20인치 전동자전거입니다. 또한 이벤트로 MEGA 메가 배터리 무상 업그레이드 진행 중입니다."
    ],
    [
        "name"        => "엑스트론 프로",
        "lowPrice"    => "1690000",
        "highPrice"   => "1790000",
        "ratingValue" => "4.86",
        "reviewCount" => "203",
        "description" => "엑스트론 프로는 유려한 곡선형의 6061-T6 알루미늄 알로이 접이식 프레임을 적용해 보관의 편의성과 안정적인 주행 성능을 선사하는 고성능 전기자전거입니다. 프레임의 뛰어난 구조적 안정성을 바탕으로 일상적인 출퇴근은 물론 하드코어한 배달 대행과 장거리 라이딩 모두에 완벽하게 적합합니다. 500W 정격 출력의 허브 모터(최대토크 70N.m)와 기본 48V 20Ah 배터리, 최대 28.5Ah 메가 배터리 옵션을 지원해 강력한 등판 구동력과 최대 220km의 압도적인 주행 거리를 제공합니다. 또한 대중적이고 안정적인 20인치 규격에 고강도 마그네슘 합금 일체형 휠을 장착해 스포크 파손 위험을 원천 차단했으며, 프론트 서스펜션, TEKTRO 유압 디스크 브레이크, 시마노 Tourney 7단 변속 시스템, 펑크 방지 타이어를 적용해 다양한 노면 환경에서도 부드러운 승차감과 확실한 제동 성능을 자랑합니다. 고휘도 LED 헤드라이트와 컬러 LCD 디스플레이, Walk Mode 및 크루즈 모드 등 스마트 편의 기능을 두루 갖춰 도심 마실부터 전천후 주행까지 폭넓게 활용할 수 있는 최적의 전동자전거입니다. 또한 이벤트로 MEGA 메가 배터리 무상 업그레이드 진행 중입니다."
    ],
    [
        "name"        => "엑스트론 프로 미니",
        "lowPrice"    => "1390000",
        "highPrice"   => "1490000",
        "ratingValue" => "4.85",
        "reviewCount" => "307",
        "description" => "엑스트론 프로 미니는 유려한 곡선형의 6061-T6 알루미늄 합금 접이식 프레임을 적용해, 극대화된 보관 편의성과 기동성을 선사하는 고성능 전기자전거입니다. 미니벨로 특유의 콤팩트한 차체 크기임에도 500W 정격 출력의 허브 모터(최대토크 70N.m)와 20Ah 기본 및 최대 28.5Ah 메가 배터리 옵션을 지원해, 험난한 오르막길에서도 강력한 등판력을 발휘하며 최대 175km의 압도적인 장거리 주행을 제공합니다. 또한 민첩한 도심 주행에 최적화된 16인치 규격에 고강도 마그네슘 합금 일체형 휠을 장착해 스포크 파손 위험을 원천 차단했으며, 프론트 서스펜션, TEKTRO 유압 디스크 브레이크, 16x2.4 광폭 펑크 방지 타이어를 적용해 작은 차체에서도 탄탄한 승차감과 확실한 제동 성능을 자랑합니다. 고휘도 LED 헤드라이트와 컬러 LCD 디스플레이, Walk Mode 및 크루즈 모드 등 스마트 편의 기능을 두루 갖춰, 일상 마실부터 차량 적재 및 대중교통 연계까지 당신의 라이프스타일에 맞춰 완벽하게 활용할 수 있는 최적의 전동자전거입니다."
    ],
    [
        "name"        => "엑스트론 프로 팻 리미티드에디션",
        "lowPrice"    => "1390000",
        "highPrice"   => "1490000",
        "ratingValue" => "4.85",
        "reviewCount" => "307",
        "description" => "한정판으로 출시된 엑스트론 프로 팻 리미티드에디션은 유려한 곡선형의 6061-T6 알루미늄 합금 접이식 프레임을 적용해, 극대화된 보관 편의성과 기동성을 선사하는 고성능 전기자전거입니다. 미니벨로 특유의 콤팩트한 차체 크기임에도 500W 정격 출력의 허브 모터(최대토크 70N.m)와 20Ah 기본 및 최대 28.5Ah 메가 배터리 옵션을 지원해, 험난한 오르막길에서도 강력한 등판력을 발휘하며 최대 175km의 압도적인 장거리 주행을 제공합니다. 또한 민첩한 도심 주행에 최적화된 16인치 규격에 고강도 마그네슘 합금 일체형 휠을 장착해 스포크 파손 위험을 원천 차단했으며, 프론트 서스펜션, TEKTRO 유압 디스크 브레이크, 16x2.4 광폭 펑크 방지 타이어를 적용해 작은 차체에서도 탄탄한 승차감과 확실한 제동 성능을 자랑합니다. 고휘도 LED 헤드라이트와 컬러 LCD 디스플레이, Walk Mode 및 크루즈 모드 등 스마트 편의 기능을 두루 갖춰, 일상 마실부터 차량 적재 및 대중교통 연계까지 당신의 라이프스타일에 맞춰 완벽하게 활용할 수 있는 최적의 전동자전거입니다. 20Ah, 28.5Ah 메가 배터리, 20Ah+20Ah 등 폭 넓은 배터리 선택으로 다양한 옵션으로 구매할 수 있습니다."
    ],
    [
        "name"        => "엑스트론 GTS",
        "lowPrice"    => "2130000",
        "highPrice"   => "2230000",
        "ratingValue" => "4",
        "reviewCount" => "1",
        "description" => "엑스트론 GT S는 견고한 6061-T6 알루미늄 합금 일체형 프레임과 20인치 휠을 적용한 미드드라이브 전기자전거로, 높은 강성과 안정적인 주행 성능을 제공합니다. 프레임의 구조적 강성을 바탕으로 장거리 라이딩과 다양한 노면에서도 안정적인 주행감을 제공하며, 스포츠 라이딩과 출퇴근 모두에 적합합니다. ANANDA M100 미드드라이브 모터(500W, 최대 토크 130N.m)와 기본 48V 20Ah 배터리, 최대 28.5Ah 메가배터리 옵션을 지원해 강력한 구동력과 최대 230km의 주행거리를 제공합니다. 또한 프론트 서스펜션, TEKTRO 유압 디스크브레이크, 시마노 SORA 9단 변속 시스템, 펑크 방지 타이어를 적용해 다양한 주행 환경에서도 뛰어난 승차감과 제동 성능을 제공합니다. LED 헤드라이트와 LCD 디스플레이, Walk Mode 등 편의 기능을 갖춰 도심 출퇴근부터 장거리 투어링까지 폭넓게 활용할 수 있는 20인치 전동자전거입니다. 또한 이벤트로 MEGA 메가 배터리 무상 업그레이드 진행 중입니다."
    ],
    [
        "name"        => "엑스트론 GT",
        "lowPrice"    => "1690000",
        "highPrice"   => "1790000",
        "ratingValue" => "4.87",
        "reviewCount" => "38",
        "description" => "엑스트론 GT는 유려한 곡선형의 6061-T6 알루미늄 합금 일체형 프레임을 적용해 견고한 내구성과 안정적인 주행 성능을 선사하는 고성능 전기자전거입니다. 프레임의 뛰어난 구조적 강성을 바탕으로 일상적인 출퇴근은 물론 하드코어한 배달 대행과 장거리 라이딩 모두에 완벽하게 적합합니다. 500W 정격 출력의 허브 모터(최대토크 70N.m)와 기본 48V 20Ah 배터리, 최대 28.5Ah 메가 배터리 옵션을 지원해 강력한 등판 구동력과 최대 220km의 압도적인 주행 거리를 제공합니다. 또한 대중적이고 안정적인 20인치 규격에 고강도 마그네슘 합금 일체형 휠을 장착해 스포크 파손 위험을 원천 차단했으며, 프론트 서스펜션, TEKTRO 유압 디스크 브레이크, 시마노 Tourney 7단 변속 시스템, 펑크 방지 타이어를 적용해 다양한 노면 환경에서도 부드러운 승차감과 확실한 제동 성능을 자랑합니다. 고휘도 LED 헤드라이트와 컬러 LCD 디스플레이, Walk Mode 및 크루즈 모드 등 스마트 편의 기능을 두루 갖춰 도심 마실부터 전천후 주행까지 폭넓게 활용할 수 있는 최적의 전동자전거입니다."
    ],
    [
        "name"        => "엑스트론 시티",
        "lowPrice"    => "1640000",
        "highPrice"   => "1740000",
        "ratingValue" => "4.92",
        "reviewCount" => "51",
        "description" => "엑스트론 시티는 도심 주행에 최적화된 직선형 디자인의 6061-T6 알루미늄 합금 로우스텝 일체형 프레임을 적용해, 누구나 타고 내리기 쉬운 승하차 편의성과 안정적인 주행 성능을 선사하는 도심형 유틸리티 전기자전거입니다. 승하차가 편리한 로우스텝 설계와 구조적 강성을 바탕으로 복잡한 도심 속 출퇴근은 물론 일상적인 마실과 장거리 라이딩 모두에 완벽하게 적합합니다. 500W 정격 출력의 허브 모터(최대토크 70N.m)와 삼성 SDI 셀이 적용된 기본 48V 20Ah 및 최대 28.5Ah 메가 배터리 옵션을 지원해, 가파른 오르막길에서도 강력한 등판력을 발휘하며 최대 220km의 압도적인 장거리 주행을 제공합니다. 또한 대중적이고 안정적인 20인치 규격에 고강도 마그네슘 합금 일체형 휠을 장착해 스포크 파손 위험을 원천 차단했으며, 프론트 서스펜션, TEKTRO 유압 디스크 브레이크, 시마노 Tourney 7단 변속 시스템, 펑크 방지 타이어를 적용해 다양한 노면 환경에서도 부드러운 승차감과 확실한 제동 성능을 자랑합니다. 고휘도 LED 헤드라이트와 컬러 LCD 디스플레이, Walk Mode 및 크루즈 모드 등 스마트 편의 기능을 두루 갖춰, 남녀노소 누구나 도심 속 라이프스타일에 맞춰 완벽하게 활용할 수 있는 최적의 전동자전거입니다. 또한 이벤트로 MEGA 메가 배터리 무상 업그레이드 진행 중입니다."
    ],
    [
        "name"        => "엑스트론 투어",
        "lowPrice"    => "1690000",
        "highPrice"   => "1790000",
        "ratingValue" => "4.88",
        "reviewCount" => "157",
        "description" => "엑스트론 투어는 견고한 6061-T6 알루미늄 합금 일체형 프레임을 적용해, 무거운 짐을 싣고도 흔들림 없는 안정적인 주행 성능을 선사하는 고성능 다목적 전기자전거입니다. 길게 확장된 일체형 리어랙과 뛰어난 구조적 강성을 바탕으로 일상적인 출퇴근은 물론 짐칸이나 유아용 안장을 장착하는 패밀리 바이크, 하드코어한 배달 대행까지 완벽하게 적합합니다. 500W 정격 출력의 허브 모터(최대토크 70N.m)와 48V 20Ah 기본 및 최대 28.5Ah 메가 배터리 옵션을 지원해, 무거운 하중과 가파른 오르막길에서도 강력한 등판력을 발휘하며 최대 220km의 압도적인 장거리 주행을 제공합니다. 또한 대중적이고 안정적인 20인치 규격에 고강도 마그네슘 합금 일체형 휠을 장착해 스포크 파손 위험을 원천 차단했으며, 프론트 서스펜션, TEKTRO 유압 디스크 브레이크, 시마노 Tourney 7단 변속 시스템, 펑크 방지 타이어를 적용해 다양한 노면 환경에서도 부드러운 승차감과 확실한 제동 성능을 자랑합니다. 고휘도 LED 헤드라이트와 컬러 LCD 디스플레이, Walk Mode 및 크루즈 모드 등 스마트 편의 기능을 두루 갖춰, 다목적 활용성과 내구성을 모두 원하는 라이더에게 완벽한 최적의 전동자전거입니다. 또한 이벤트로 MEGA 메가 배터리 무상 업그레이드 진행 중입니다."
    ]
];

// =================================================================
// [영역 2] 스키마 뼈대 자동 생성 로직
// =================================================================
$schema_data = [
    "@context" => "https://schema.org",
    "@type" => "ItemList",
    "name" => "엑스트론 퀄리스포츠 최대 무이자 24개월 할부 기획전", 
    "description" => "원 가격 그대로 최대 24개월 무이자 할부 혜택! 출퇴근부터 레저까지 완벽한 퀄리스포츠 엑스트론 전기자전거 라인업 8종의 스펙을 비교하고 구매해보세요.", 
    "itemListElement" => []
];

// PHP 반복문으로 8개 상품 데이터 조립
foreach ($xtron_products as $index => $item) {
    $schema_data['itemListElement'][] = [
        "@type" => "ListItem",
        "position" => $index + 1,
        "item" => [
            "@type" => "Product",
            "name" => $item['name'],
            "description" => $item['description'],
            "offers" => [
                "@type" => "AggregateOffer",       
                "lowPrice" => $item['lowPrice'],   
                "highPrice" => $item['highPrice'], 
                "priceCurrency" => "KRW",
                "offerCount" => "2",               
                "availability" => "https://schema.org/InStock"
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => $item['ratingValue'],
                "reviewCount" => $item['reviewCount']
            ]
        ]
    ];
}
?>

<!-- ================================================================= -->
<!-- [영역 3] 실제 웹페이지 스크립트 출력 (HTML 시작 영역에 위치) -->
<!-- ================================================================= -->
<script type="application/ld+json">
<?php echo json_encode($schema_data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
</script>

<!DOCTYPE html>
<html lang="ko" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>엑스트론 전기자전거 | 무이자 24개월 무이자 혜택</title>

    <meta property="og:title" content="엑스트론 전기자전거 | 무이자 24개월 무이자 혜택">
    <meta property="og:description" content="보증 기간 자동 연장부터 메가 배터리 할인까지, 엑스트론 오너만을 위한 특별한 혜택!">
    <meta property="og:image" content="/assets/PREVIEW_PRODUCT/MAIN.jpg">
    <meta property="og:image:alt" content="엑스트론 전기자전거 무이자 24개월 혜택 안내">
    <meta property="og:url" content="https://buyxtron.com">
    <meta property="og:type" content="website">

    <!-- wp_head -->
         <?php wp_head(); ?>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

    <!-- Phosphor Icons (Premium Icons) -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            blue: '#2f6286',
                            green: '#72bf44'
                        },
                        xtron: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            400: '#72bf44', // Brand Green
                            500: '#2f6286', // Brand Blue
                            600: '#214763',
                            900: '#102433',
                            dark: '#050505',
                            card: '#111111'
                        }
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'cta-pulse': 'cta-pulse 1.5s ease-in-out infinite',
                    },
                    keyframes: {
                        'cta-pulse': {
                            '0%, 100%': { transform: 'scale(1)', boxShadow: '0 0 0 0 rgba(114, 191, 68, 0.6)' },
                            '50%': { transform: 'scale(1.05)', boxShadow: '0 0 0 20px rgba(114, 191, 68, 0)' },
                        }
                    }     
                 }
            }
        }
    </script>

    <style>
        /* 페이퍼로지 폰트 적용 */
        @font-face {
            font-family: 'Paperozi';
            src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/2408-3@1.0/Paperlogy-1Thin.woff2') format('woff2');
            font-weight: 100;
            font-display: swap;
        }

        @font-face {
            font-family: 'Paperozi';
            src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/2408-3@1.0/Paperlogy-2ExtraLight.woff2') format('woff2');
            font-weight: 200;
            font-display: swap;
        }

        @font-face {
            font-family: 'Paperozi';
            src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/2408-3@1.0/Paperlogy-3Light.woff2') format('woff2');
            font-weight: 300;
            font-display: swap;
        }

        @font-face {
            font-family: 'Paperozi';
            src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/2408-3@1.0/Paperlogy-4Regular.woff2') format('woff2');
            font-weight: 400;
            font-display: swap;
        }

        @font-face {
            font-family: 'Paperozi';
            src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/2408-3@1.0/Paperlogy-5Medium.woff2') format('woff2');
            font-weight: 500;
            font-display: swap;
        }

        @font-face {
            font-family: 'Paperozi';
            src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/2408-3@1.0/Paperlogy-6SemiBold.woff2') format('woff2');
            font-weight: 600;
            font-display: swap;
        }

        @font-face {
            font-family: 'Paperozi';
            src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/2408-3@1.0/Paperlogy-7Bold.woff2') format('woff2');
            font-weight: 700;
            font-display: swap;
        }

        @font-face {
            font-family: 'Paperozi';
            src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/2408-3@1.0/Paperlogy-8ExtraBold.woff2') format('woff2');
            font-weight: 800;
            font-display: swap;
        }

        @font-face {
            font-family: 'Paperozi';
            src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/2408-3@1.0/Paperlogy-9Black.woff2') format('woff2');
            font-weight: 900;
            font-display: swap;
        }

        body {
            font-family: 'Paperozi', sans-serif;
            background-color: #050505;
            color: #ffffff;
            overflow-x: hidden;
            font-weight: 400;
        }

        .gradient-text {
            background: linear-gradient(to right, #2f6286, #72bf44);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        /* 배터리 게이지 트랜지션 */
        .gauge-transition {
            transition: width 1.2s cubic-bezier(0.22, 1, 0.36, 1), background-color 0.5s ease;
        }
    </style>
</head>

<body class="antialiased">

<!-- 01. Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-[#050505] pt-24 pb-24">
    
    <!-- 브랜드 블루(brand-blue)로 변경 -->
    <div class="absolute inset-0 z-0 opacity-30 pointer-events-none">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-brand-blue rounded-full mix-blend-screen filter blur-[150px] opacity-40"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4 sm:px-6 text-center flex flex-col items-center mt-4 md:mt-8">
        
        <!-- 합작 로고 유지 -->
        <div class="mb-6 md:mb-10">
            <img src="/assets/BATTERY_LOGO_SET/XxQ.png" alt="XTRON x QUALISPORTS" class="h-6 sm:h-8 md:h-10 object-contain drop-shadow-xl">
        </div>

        <div class="mb-10 w-full flex flex-col items-center">
    
        <!-- 1. 키 비주얼(대문 사진) 영역 (1600x900 16:9 최적화) -->
            <div class="w-full max-w-5xl mx-auto mb-8 sm:mb-12 relative group z-10 px-4 sm:px-0">
                <!-- 바깥쪽으로 퍼지는 네온 후광 (Glow) -->
                <div class="absolute inset-0 bg-gradient-to-tr from-[#05e5f9] to-[#c0fb0c] rounded-[2rem] blur-2xl opacity-20 group-hover:opacity-40 transition duration-700 pointer-events-none"></div>
                
                <!-- 16:9 비율 고정 컨테이너 -->
                <div class="relative w-full aspect-video rounded-2xl sm:rounded-[2rem] overflow-hidden border border-gray-800/80 shadow-2xl z-10 bg-[#0a0a0a]">
                    <img src="/assets/EVENT/MEGA_DAY_TITLE.webp" alt="MEGA DAY 이벤트" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-[1.02] transition-transform duration-700">
                </div>
            </div>

            <!-- 2. HTML 텍스트 타이틀 -->
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black tracking-tighter mb-4 sm:mb-6 leading-tight text-center relative z-10">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#05e5f9] to-[#c0fb0c] drop-shadow-[0_0_15px_rgba(192,251,12,0.3)]">
                    무이자 24개월 이벤트
                </span>
            </h2>
            
            <!-- 3. 내용 (설명) 영역 -->
            <p class="mb-8 text-sm sm:text-base md:text-lg text-gray-300 font-normal break-keep max-w-3xl px-4 leading-relaxed text-center relative z-10">
                <strong class="text-white font-bold">한정판</strong>부터 <strong class="text-white font-bold">프로 S, GT S, 프로, 시티, 투어</strong>까지!<br class="hidden sm:block">
                해당 모델 구매 시 주어지는 엑스트론만의 특별한 <strong class="text-[#c0fb0c] font-black text-base sm:text-lg md:text-xl underline decoration-[#c0fb0c]/40 underline-offset-4">혜택</strong>을 만나보세요.
            </p>

            <!-- 4. 이벤트 기간 및 구매 방법 (캡슐화된 박스 UI) -->
            <div class="relative group mt-2 w-full max-w-2xl px-4 sm:px-0 z-10">
                <div class="absolute inset-0 bg-gradient-to-r from-[#05e5f9] to-[#c0fb0c] rounded-2xl blur-md opacity-20 group-hover:opacity-30 transition duration-500"></div>
                
                <div class="relative flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-6 bg-[#0a0a0a] border border-[#05e5f9]/30 rounded-2xl px-6 py-4 sm:py-5">
                    <div class="flex items-center gap-2.5">
                        <span class="px-2.5 py-1 bg-[#c0fb0c]/10 text-[#c0fb0c] border border-[#c0fb0c]/20 text-[10px] sm:text-xs font-bold rounded-md tracking-widest">기간</span>
                        <span class="text-sm sm:text-base font-bold text-white tracking-wide">한정 수량 소진 시 종료</span>
                    </div>
                    
                    <div class="hidden sm:block w-px h-5 bg-gray-700"></div>
                    
                    <div class="flex items-center gap-2.5">
                        <span class="px-2.5 py-1 bg-[#05e5f9]/10 text-[#05e5f9] border border-[#05e5f9]/20 text-[10px] sm:text-xs font-bold rounded-md tracking-widest">구매</span>
                        <span class="text-xs sm:text-sm text-gray-300 font-medium">공식 홈페이지 / 전국 대리점 예약 가능</span>
                    </div>
                </div>
            </div>

        </div>

            <!-- 💡 4개 혜택 카드 (grid-cols-2 lg:grid-cols-4 로 4단 분할) -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 md:gap-5 w-full max-w-5xl mx-auto mt-12 md:mt-16 mb-16 sm:mb-20 px-4 sm:px-0">
                
                <!-- 1. 한정판 출시 -->
                <div class="bg-[#111111] border border-gray-800 rounded-xl overflow-hidden flex flex-col hover:border-white/50 transition-all duration-300 shadow-lg group hover:-translate-y-1">
                    <div class="bg-gray-800 py-2 sm:py-2.5 text-center border-b border-gray-700">
                        <span class="text-white font-bold text-xs sm:text-sm md:text-base tracking-wide">한정판 전격 출시</span>
                    </div>
                    <div class="aspect-[4/3] w-full bg-[#0a0a0a] relative overflow-hidden border-b border-gray-800">
                        <img src="/assets/EVENT/PRO_FLE.png" alt="한정판 자전거" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-3 sm:p-4 md:p-5 flex-1 flex flex-col items-center text-center justify-center bg-[#111111]">
                        <img src="/assets/PRODUCT_LOGO_SET/PRO_FLE_LOGO.png" alt="프로 팻 리미티드 로고" class="h-5 sm:h-6 md:h-7 object-contain mb-2 sm:mb-2.5 drop-shadow-md">
                        <p class="text-gray-400 text-[11px] sm:text-xs font-normal break-keep leading-relaxed">
                            3.0 광폭 타이어 탑재로 타는 게 더 즐거운 엑스트론 프로 팻 리미티드 에디션!
                        </p>
                    </div>
                </div>

                <!-- 2. 배터리 업그레이드 -->
                <div class="bg-[#111111] border border-gray-800 rounded-xl overflow-hidden flex flex-col hover:border-[#c0fb0c]/50 transition-all duration-300 shadow-lg group hover:-translate-y-1">
                    <div class="bg-[#c0fb0c]/20 py-2 sm:py-2.5 text-center border-b border-[#c0fb0c]/30">
                        <span class="text-[#c0fb0c] font-bold text-xs sm:text-sm md:text-base tracking-wide">메가 배터리 무상 업그레이드</span>
                    </div>
                    <div class="aspect-[4/3] w-full bg-[#0a0a0a] relative overflow-hidden border-b border-gray-800">
                        <img src="/assets/EVENT/MEGA_UPGRADE.png" alt="무상 업그레이드" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-3 sm:p-4 md:p-5 flex-1 flex flex-col items-center text-center justify-center bg-[#111111]">
                        <p class="text-white font-bold text-[13px] sm:text-sm md:text-base leading-snug mb-1.5">20Ah 가격 그대로 <br> <span class="text-[#c0fb0c] font-black">28.5Ah 메가 배터리 탑재!</span></p>
                        <p class="text-gray-400 text-[11px] sm:text-xs font-normal break-keep leading-snug">
                            <span class="text-gray-300">프로 S, GT S, 프로, 투어, 시티 구매 시</span><br>
                            추가금 없이 변경할 수 있습니다.
                        </p>                
                    </div>
                </div>

                <!-- 3. 액세서리 50% 할인 -->
                    <div onclick="openAccModal()" class="cursor-pointer bg-[#111111] border border-gray-800 rounded-xl overflow-hidden flex flex-col shadow-lg relative group hover:-translate-y-1 hover:border-[#05e5f9]/80 hover:shadow-[0_0_25px_rgba(5,229,249,0.2)] transition-all duration-500">                    <div class="bg-[#05e5f9]/20 py-2 sm:py-2.5 text-center border-b border-[#05e5f9]/30 relative z-10">
                        <span class="text-[#05e5f9] font-bold text-xs sm:text-sm md:text-base tracking-wide">액세서리 프로모션</span>
                    </div>
                    <div class="aspect-[4/3] w-full bg-[#0a0a0a] relative overflow-hidden border-b border-gray-800 z-10">
                        <img src="/assets/EVENT/FREE_GIFT_01.png" alt="액세서리 반값" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 relative z-10">
                    </div>
                    <div class="p-3 sm:p-4 md:p-5 flex-1 flex flex-col items-center text-center justify-center relative z-10 bg-[#111111]">
                        <p class="text-white font-bold text-[13px] sm:text-sm md:text-base break-keep leading-tight mb-2">
                            배달 가방 & ZOOM SP442<br><span class="text-[#05e5f9] font-black">이벤트 기간 한정 특가 제공!</span>
                        </p>
                        <p class="text-gray-400 text-[10px] sm:text-[11px] font-normal break-keep leading-snug">
                            프로 리미티드 에디션, 프로 S, GT S, 프로, 투어, 시티 구매 시
                        </p>
                        <div class="w-full mt-auto">
                            <p class="text-[9px] sm:text-[10px] text-gray-400 font-medium group-hover:text-white transition-colors">
                                클릭하여 확인하기 <i class="ph-bold ph-arrow-right align-middle"></i>
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- 4. MEGA 배터리 단품 할인 -->
                <div onclick="scrollToPricingAndTab('acc')" class="cursor-pointer bg-[#111111] border border-gray-800 rounded-xl overflow-hidden flex flex-col hover:border-brand-green/60 transition-all duration-300 shadow-lg group hover:-translate-y-1 hover:shadow-[0_0_25px_rgba(114,191,68,0.2)]">
                    
                    <div class="bg-gradient-to-r from-brand-blue to-brand-green py-2 sm:py-2.5 flex items-center justify-center border-b border-brand-green/30">
                        <!-- 💡 수정 포인트: leading-none 추가로 텍스트 여백 제거 -->
                        <span class="text-white font-bold text-xs sm:text-sm md:text-base tracking-wide shadow-sm flex items-center gap-1.5 leading-none">
                            <!-- 💡 수정 포인트: mt-[2px] 추가로 로고를 살짝 아래로 내림 -->
                            <img src="/assets/BATTERY_LOGO_SET/MEGA_LOGO.png" class="h-3 sm:h-4 md:h-5 object-contain brightness-0 invert mt-[2px]" alt="MEGA"> 
                            <span class="pt-[1px]">배터리 단품 할인</span>
                        </span>
                    </div>
                    
                    <div class="aspect-[4/3] w-full bg-[#0a0a0a] relative overflow-hidden border-b border-gray-800">
                        <img src="/assets/EVENT/ACC_BATTERY.png" alt="메가 단품 할인" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <!-- 하단 영역 동일 -->
                    <div class="p-3 sm:p-4 md:p-5 flex-1 flex flex-col items-center text-center justify-center bg-[#111111]">
                        <p class="text-white font-bold text-[13px] sm:text-sm md:text-base leading-snug mb-1.5" break-keep>28.5Ah 메가 배터리 <br>단품 특별가</p>
                        <p class="text-gray-400 text-[11px] sm:text-xs font-normal break-keep leading-relaxed">기존 엑스트론 오너님들을 위한 대용량 배터리 특별 파격 할인가.</p>
                        <div class="w-full mt-2 hidden sm:block">
                            <p class="text-[9px] sm:text-[10px] text-gray-400 font-medium group-hover:text-white transition-colors">
                                클릭하여 확인하기 <i class="ph-bold ph-arrow-right align-middle"></i>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

<!-- 💡 [신규 추가] 한정판 스페셜 쇼케이스 섹션 (이미지 + 텍스트 + 가격표) -->
        <div class="w-full max-w-5xl mx-auto mb-12 sm:mb-16 bg-[#0a0a0a] border border-[#c0fb0c]/30 rounded-[2rem] p-6 sm:p-8 md:p-10 lg:p-12 shadow-[0_0_40px_rgba(114,191,68,0.15)] relative overflow-hidden text-left">
            
            <!-- 은은한 배경 그라데이션 -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-[#c0fb0c]/5 rounded-full blur-[100px] pointer-events-none"></div>

            <!-- 📌 상단 레이아웃: 좌측(이미지) & 우측(텍스트) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center relative z-10 mb-8 sm:mb-10">
                
                <!-- 좌측 이미지 영역 -->
                <div class="relative rounded-2xl overflow-hidden aspect-video bg-gradient-to-b from-[#1a1a1a] to-[#050505] shadow-2xl group border border-gray-800/50 flex items-center justify-center">
                    <img src="/assets/EVENT/PRO_FLE_SET.png" alt="프로 팻 리미티드 컷" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                </div>
                
                <!-- 우측 설명 영역 -->
                <div class="flex flex-col">
                    <!-- 뱃지 -->
                    <div class="mb-4">
                        <span class="inline-block bg-[#c0fb0c] text-gray-900 text-xs sm:text-sm font-bold px-4 py-1.5 rounded-full shadow-md tracking-wider">
                            메가 데이 혜택
                        </span>
                    </div>

                    <!-- 로고 & 타이틀 -->
                    <div class="mb-6 flex flex-col items-start gap-2">
                        <img src="/assets/PRODUCT_LOGO_SET/PRO_FLE_LOGO.png" alt="FAT LIMITED EDITION" class="h-10 sm:h-12 md:h-14 object-contain filter drop-shadow-lg">
                        <h3 class="text-2xl sm:text-3xl md:text-4xl font-black text-white tracking-tight">전격 출시!</h3>
                    </div>

                    <!-- 특징 리스트 -->
                    <ul class="space-y-3 sm:space-y-4">
                        <li class="flex items-start gap-2.5">
                            <i class="ph-bold ph-check text-brand-green mt-1 text-lg shrink-0"></i>
                            <span class="text-gray-300 text-sm md:text-base font-medium break-keep leading-snug">외형은 XTRON PRO? 하지만 성능은 다르다!</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="ph-bold ph-check text-brand-green mt-1 text-lg shrink-0"></i>
                            <span class="text-gray-300 text-sm md:text-base font-medium break-keep leading-snug">거침 없는 코너링, 완벽한 접지력의 <br><strong class="text-white">3.0 펑크 방지 광폭 타이어</strong> 탑재!</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="ph-bold ph-check text-brand-green mt-1 text-lg shrink-0"></i>
                            <span class="text-gray-300 text-sm md:text-base font-medium break-keep leading-snug"><strong class="text-white">48V 28.5Ah 메가 배터리</strong>도 탑재 가능한 기체</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="ph-bold ph-check text-brand-green mt-1 text-lg shrink-0"></i>
                            <span class="text-gray-300 text-sm md:text-base font-medium break-keep leading-snug">정격 출력 <strong class="text-white">500W 모터</strong>의 파워풀한 성능</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 📌 하단 레이아웃: 가로로 꽉 차는 중앙 정렬 가격표 버튼 영역 -->
            <div class="w-full relative z-10 border-t border-gray-800/80 pt-8 sm:pt-10">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4 w-full">
                    
                    <!-- 1. 20Ah -->
                    <a href="https://buyxtron.com/pro_fat_20" target="_blank" class="flex flex-col items-center justify-center p-4 sm:p-6 bg-[#111111] border border-gray-800 rounded-2xl hover:border-brand-green/80 hover:shadow-[0_0_15px_rgba(114,191,68,0.2)] hover:bg-white/5 transition-all duration-300 group h-full">
                        <span class="text-white font-bold text-base md:text-lg tracking-wide mb-1.5 group-hover:text-brand-green transition-colors">20Ah</span>
                        <span class="text-gray-500 line-through text-[11px] md:text-xs font-medium">1,850,000원</span>
                        <span class="text-brand-green font-black text-lg md:text-xl md:text-2xl tracking-tighter mt-0.5">1,690,000<span class="text-xs font-bold ml-0.5 text-white">원</span></span>
                    </a>

                    <!-- 2. 28.5Ah MEGA -->
                    <a href="https://buyxtron.com/pro_fat_285" target="_blank" class="flex flex-col items-center justify-center p-4 sm:p-6 bg-[#111111] border border-brand-green/40 rounded-2xl hover:border-brand-green hover:shadow-[0_0_20px_rgba(114,191,68,0.3)] transition-all duration-300 relative overflow-hidden group h-full">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-green/10 to-transparent z-0 pointer-events-none"></div>
                        <div class="relative z-10 flex flex-col items-center w-full">
                            <span class="text-white font-bold text-base md:text-lg flex items-center justify-center gap-1.5 tracking-wide mb-1.5 group-hover:text-brand-green transition-colors">
                                28.5Ah <img src="/assets/BATTERY_LOGO_SET/MEGA_LOGO.png" class="h-4 sm:h-5" alt="MEGA">
                            </span>
                            <span class="text-gray-500 line-through text-[11px] md:text-xs font-medium">1,950,000원</span>
                            <span class="text-brand-green font-black text-lg md:text-xl md:text-2xl tracking-tighter mt-0.5">1,790,000<span class="text-xs font-bold ml-0.5 text-white">원</span></span>
                        </div>
                    </a>

                    <!-- 3. 20Ah+20Ah (🔥 메인 주력 상품 강조) -->
                    <a href="https://buyxtron.com/pro_fat_20+20" 
                    target="_blank" class="flex flex-col items-center justify-center p-4 sm:p-6 bg-[#111111] border-2 border-brand-green rounded-2xl 
                    shadow-[0_0_25px_rgba(114,191,68,0.2)] hover:shadow-[0_0_40px_rgba(114,191,68,0.4)] transition-all duration-300 group h-full relative transform hover:-translate-y-1.5 z-20">
                        
                        <!-- 💡 초특가 강조 뱃지 (블루 & 그린 그라데이션으로 변경) -->
                        <div class="absolute -top-3.5 sm:-top-4 left-1/2 -translate-x-1/2 bg-white text-black text-[10px] sm:text-xs font-black px-3.5 sm:px-4 
                        py-1 sm:py-1.5 rounded-full whitespace-nowrap shadow-lg animate-bounce z-20">
                            🔥 역대급 가성비
                        </div>

                        <!-- 은은한 그린 배경 효과 -->
                        <div class="absolute inset-0 bg-gradient-to-b from-[#c0fb0c]/15 to-transparent z-0 pointer-events-none rounded-2xl"></div>

                        <div class="flex flex-col items-center mb-1.5 relative z-10 mt-2 sm:mt-0">
                            <span class="text-white font-black text-lg md:text-xl tracking-wide group-hover:text-[#c0fb0c] transition-colors drop-shadow-md">20Ah + 20Ah</span>
                            <span class="text-gray-400 text-[9px] sm:text-[10px] font-medium -mt-0.5">*브라켓 별도</span>
                        </div>
                        
                        <span class="text-gray-500 line-through text-[11px] md:text-xs font-medium mt-auto relative z-10">2,640,000원</span>
                        <span class="text-[#c0fb0c] font-black text-xl md:text-2xl lg:text-3xl tracking-tighter mt-0.5 relative z-10 drop-shadow-[0_0_10px_rgba(114,191,68,0.2)]">1,990,000<span class="text-xs sm:text-sm font-bold ml-0.5 text-white">원</span></span>
                    </a>
                </div>
            </div>            
        </div>

        <!-- CTA 버튼 -->
        <button onclick="scrollToPricingAndTab('newArrival')" class="inline-flex items-center justify-center px-8 md:px-12 py-4 md:py-5 text-lg md:text-xl font-black text-white bg-gradient-to-r from-[#05e5f9] to-[#c0fb0c] rounded-full hover:opacity-90 transition-all shadow-[0_0_30px_rgba(114,191,68,0.4)] hover:shadow-[0_0_40px_rgba(114,191,68,0.6)] transform hover:-translate-y-1 relative z-10 w-[90%] sm:w-auto mt-4">
            <span class="text-center tracking-wide">한정판 라인업 확인하기</span>
            <i class="ph-bold ph-caret-down ml-2 text-xl shrink-0 animate-bounce"></i>
        </button>

    </div>
</section>
    <!-- 02. EVENT Section -->
    <section class="py-24 bg-[#0a0a0a] relative border-t border-gray-900">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">
                    자전거만 사세요!<p class="break-keep"><span class="text-xtron-400">나머지는 엑스트론이 다 준비했습니다.</span></p>
                </h2>
                <p class="text-lg text-gray-400 font-normal">구매자 전원 100% 증정! 안전부터 편의성까지 완벽 풀패키지</p>
<p class="text-xs sm:text-sm text-gray-500 font-normal mt-6 break-keep leading-relaxed text-left md:text-center">
    ※ 본 사은품은 선착순 한정 수량으로 제공됩니다. <br>준비된 물량이 모두 소진될 경우, 별도의 안내 없이 해당 품목은 증정 혜택에서 자동 제외(이벤트 조기 종료)될 수 있으니 구매를 서둘러 주세요.
</p>
            </div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8 max-w-5xl mx-auto mb-6">
                
                <div class="glass-panel rounded-3xl p-8 relative overflow-hidden group border-xtron-900 flex flex-col h-full hover:border-brand-blue/50 transition-colors shadow-lg">
                    <div class="mb-6">
                        <span class="bg-brand-blue text-white text-xs font-medium px-3 py-1 rounded-full shadow-lg tracking-wider">Premium Gift</span>
                    </div>
                    <div class="flex-1 mb-6 flex flex-col">
                        <h3 class="text-2xl md:text-3xl font-bold mb-3">엑스트론 타입원 헬멧</h3>
                        <p class="text-gray-400 text-sm md:text-base leading-relaxed font-normal flex-1 break-keep">
                            안전과 스타일을 동시에😎<br>한국인 두상에 완벽하게 밀착되어 장시간 착용해도<br>편안한 초경량 아시안 핏 프리미엄 헬멧!
                            <span class="block text-xs text-brand-green mt-3 font-medium">* 증정 대상: 프로미니, GT미니 제외</span>
                        </p>
                        <div class="mt-5 inline-flex items-center gap-1.5 bg-brand-green/10 border border-brand-green/20 px-3 py-2 rounded-lg w-max">
                            <i class="ph-fill ph-gift text-brand-green text-xl"></i>
                            <span class="text-brand-green font-bold text-sm tracking-wide">70,000원 상당</span>
                        </div>
                    </div>
                    <div class="h-56 rounded-2xl w-full mt-auto overflow-hidden border border-gray-800 bg-white p-4 relative flex items-center justify-center">
                        <div class="absolute inset-0 bg-brand-blue/5 blur-xl group-hover:bg-brand-blue/10 transition-colors duration-500"></div>
                        <img src="/assets/PREMIUM_SET/TYPE1-HELMET.png" alt="타입원 헬멧" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500 relative z-10">
                    </div>
                </div>

<!-- 품절 ON/OFF 스위치 작동을 위한 스타일 (건드리지 마세요) -->
<style>
    .starter-kit[data-soldout="true"] .soldout-overlay { display: flex; }
    .starter-kit[data-soldout="false"] .soldout-overlay { display: none; }
    .starter-kit[data-soldout="true"] .starter-content { filter: grayscale(80%); opacity: 0.6; pointer-events: none; }
    .starter-kit[data-soldout="false"] .starter-content { filter: grayscale(0%); opacity: 1; pointer-events: auto; }
</style>

<!-- 💡 [마법의 스위치] 품절일 땐 "true", 재고가 들어오면 "false" 로 글자만 바꾸세요! 딸깍! -->
<div class="starter-kit glass-panel rounded-3xl p-8 relative overflow-hidden group border-brand-green-900 flex flex-col h-full hover:border-brand-green/50 transition-colors shadow-lg" data-soldout="false">
    
    <!-- 품절 시 나타나는 안내 화면 (자동으로 숨겨지거나 나타납니다) -->
    <div class="soldout-overlay absolute inset-0 z-50 flex-col items-center justify-center bg-black/60 backdrop-blur-[2px] pointer-events-none">
        <span class="inline-block text-white font-black text-2xl md:text-3xl border-4 border-brand-green px-6 py-2 rotate-[-5deg] shadow-[0_0_20px_rgba(114,191,68,0.4)] bg-black/80 rounded-xl tracking-widest mb-3">
            일시 품절
        </span>
        <span class="bg-brand-green text-gray-900 font-bold text-sm md:text-base px-4 py-1.5 rounded-full shadow-lg animate-pulse mb-2">
            자전거 수령 후 별도 발송 🚚
        </span>
        <span class="text-brand-green font-medium text-xs sm:text-sm bg-gray-900 border border-brand-green/30 px-3 py-1 rounded-md shadow-md">
            * 9월 중 입고 시 순차 발송 예정
        </span>
    </div>

    <!-- 4종 사은품 본문 (스위치에 따라 자동으로 흑백 처리됩니다) -->
    <div class="starter-content flex flex-col h-full transition-all duration-500">
        <div class="mb-6">
            <span class="bg-brand-green text-white text-xs font-medium px-3 py-1 rounded-full shadow-lg tracking-wider">Starter Kit</span>
        </div>
        <div class="flex-1 mb-6 flex flex-col">
            <h3 class="text-2xl md:text-3xl font-bold mb-3">라이더 필수 4종 키트</h3>
            <p class="text-gray-400 text-sm md:text-base leading-relaxed font-normal flex-1 break-keep">
                라이딩에 즉시 필요한 필수 용품들을 한 번에!<br>프론트 가방, 핸드폰 거치대, 자물쇠, 수동 펌프 전원 증정✨
                <span class="block text-xs text-brand-green mt-3 font-medium">* 증정 대상: 전제품</span>
            </p>
            <div class="mt-5 inline-flex items-center gap-1.5 bg-brand-green/10 border border-brand-green/20 px-3 py-2 rounded-lg w-max">
                <i class="ph-fill ph-gift text-brand-green text-xl"></i>
                <span class="text-brand-green font-bold text-sm tracking-wide">50,000원 상당</span>
            </div>
        </div>
        
        <div class="grid grid-cols-2 gap-3 mt-auto h-56 relative z-10">
            <div class="bg-white rounded-2xl border border-gray-200 flex items-center justify-center p-3 relative overflow-hidden group/item shadow-sm">
                <img src="/assets/GIF_SET/FRONT-BAG.png" alt="프론트 가방" class="w-full h-full object-contain">
            </div>
            
            <div class="bg-white rounded-2xl border border-gray-200 flex items-center justify-center p-3 relative overflow-hidden group/item shadow-sm">
                <img src="/assets/GIF_SET/PHONE-HOLDER.png" alt="거치대" class="w-full h-full object-contain">
            </div>
            
            <div class="bg-white rounded-2xl border border-gray-200 flex items-center justify-center p-3 relative overflow-hidden group/item shadow-sm">
                <img src="/assets/GIF_SET/LOCK.png" alt="자물쇠" class="w-full h-full object-contain">
            </div>
            
            <div class="bg-white rounded-2xl border border-gray-200 flex items-center justify-center p-3 relative overflow-hidden group/item shadow-sm">
                <img src="/assets/GIF_SET/PUMB.png" alt="수동 펌프" class="w-full h-full object-contain">
            </div>
        </div>
    </div>
</div>
</section>

    <!-- 03. 타사 구매 비교 Section -->
    <section class="py-24 bg-xtron-card">
        <div class="container mx-auto px-6 max-w-5xl">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold mb-4 break-keep">
                    월 납입금의 함정,<br>최종 <span class="text-xtron-400">체감가</span>를 확인하셨나요?
                </h2>
                <p class="text-lg text-gray-400 font-normal break-keep">눈속임 없는 진짜 혜택. 쓰시던 카드 그대로 24개월 무이자 할부.</p>
                <p class="text-[13px] text-gray-600 font-normal">*엑스트론 프로미니 모델 타사 장기 렌탈 비교, 24개월 렌탈 진행 시</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div
                    class="bg-gray-900/30 border border-gray-800 rounded-2xl p-8 relative opacity-80 grayscale-[20%] transition-all hover:grayscale-0">
                    <div
                        class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-gray-800 text-gray-400 px-4 py-1 rounded-full text-sm font-medium">
                        타사 인수형 렌탈
                    </div>
                    <div class="text-center mb-8 mt-4">
                        <p class="text-gray-500 text-sm mb-1 font-normal">엑스트론 프로미니 24개월 계약 시</p>
                        <p class="text-3xl font-medium text-gray-500 mb-4">월 79,900원</p>
                        <ul class="text-left text-gray-500 space-y-3 text-sm bg-gray-950/50 p-4 rounded-lg font-normal">
                            <li><i class="ph-fill ph-x-circle mr-2 text-gray-600"></i>원금보다 무려 52만 원 비싼 총액</li>
                            <li><i class="ph-fill ph-x-circle mr-2 text-gray-600"></i>렌탈 수수료 명목의 숨은 이자 폭탄</li>
                            <li><i class="ph-fill ph-x-circle mr-2 text-gray-600"></i>신용 조회 및 복잡한 서류 심사</li>
                        </ul>
                    </div>
                    <div class="border-t border-gray-800 pt-6">
                        <p class="text-center text-sm text-gray-500 mb-2 font-normal">계약 만료 시 최종 총비용</p>
                        <div class="w-full bg-gray-800 h-6 rounded-full overflow-hidden flex items-end">
                            <div class="bg-gray-600 h-full w-full opacity-60 flex justify-end items-center px-3"><span
                                    class="text-xs text-gray-300 font-bold">191만 원</span></div>
                        </div>
                        <p class="text-right text-gray-500 font-medium mt-2 text-xl">기기값의 약 138% 지불</p>
                    </div>
                </div>

                <div
                    class="bg-gradient-to-b from-[#0f1b29] to-[#0a0f14] border border-xtron-500/50 rounded-2xl p-8 relative shadow-[0_0_40px_rgba(47,98,134,0.2)] transform md:-translate-y-4">
                    <div
                        class="absolute -top-6 sm:-top-4 left-1/2 transform -translate-x-1/2 bg-xtron-500 text-white px-5 sm:px-6 py-1.5 sm:py-1 rounded-2xl sm:rounded-full text-sm font-medium shadow-lg shadow-xtron-500/30 text-center leading-tight w-max">
                        엑스트론 전용 <br class="block sm:hidden">24개월 무이자
                    </div>
                    <div class="text-center mb-8 mt-4">
                        <p class="text-xtron-200 text-sm mb-1 font-normal">엑스트론 프로미니 24개월 할부 시 (이자 0원)</p>
                        <p class="text-4xl font-semibold text-brand-green mb-4">월 57,916원</p>
                        <ul
                            class="text-left text-xtron-100 space-y-3 text-sm bg-xtron-900/30 p-4 rounded-lg font-normal">
                            <li><i class="ph-fill ph-check-circle mr-2 text-brand-green"></i>결제 즉시 내 명의 100% 완전 소유</li>
                            <li><i class="ph-fill ph-check-circle mr-2 text-brand-green"></i>기기 정상가 외에 단 1원도 추가 없음</li>
                            <li><i class="ph-fill ph-check-circle mr-2 text-brand-green"></i>쓰던 카드 그대로 복잡한 심사 없이</li>
                        </ul>
                    </div>
                    <div class="border-t border-xtron-800 pt-6">
                        <p class="text-center text-sm text-gray-400 mb-2 font-normal">최종 체감가 (정상가 그대로)</p>
                        <div class="w-full bg-gray-800 h-6 rounded-full overflow-hidden flex items-end relative">
                            <div
                                class="bg-gradient-to-r from-brand-blue to-brand-green h-full w-[75%] flex justify-end items-center px-3 relative z-10">
                                <span class="text-xs text-white font-bold">139만 원</span>
                            </div>
                            <div
                                class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTAgMGwyMCAyMEgwaC0yMHoiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4xKSIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+')] opacity-20">
                            </div>
                        </div>
                        <p class="text-right text-brand-green font-medium mt-2 text-xl">정직한 기기 원금 100%</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 03-5. 실제 가격 비교 테이블 및 명세서 Section -->
    <section class="pb-24 pt-4 bg-xtron-card border-b border-gray-900">
        <div class="container mx-auto px-6 max-w-5xl">
            <!-- 렌탈 비교 테이블 패널 -->
            <div
                class="glass-panel rounded-3xl p-6 md:p-12 border-brand-green/20 relative overflow-hidden shadow-2xl mb-8">
                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-gray-700/10 rounded-full mix-blend-screen filter blur-[80px]">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-64 h-64 bg-brand-green/10 rounded-full mix-blend-screen filter blur-[80px]">
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 md:gap-12 items-center relative z-10">
                    <div class="lg:col-span-2">
                        <h3 class="text-2xl font-semibold mb-6 text-center md:text-left">렌탈의 민낯, <p><span
                                    class="text-brand-green">숫자로 직접 비교하세요.</p></span>
                        </h3>
                        <p class="text-xs text-gray-400 mb-4 text-center block md:hidden animate-pulse break-keep">
                            <i class="ph-bold ph-arrows-left-right text-brand-green align-middle mr-1"></i> *모바일 이용 시 표를
                            좌우측으로 슬라이드 해보세요!
                        </p>
                        <div class="overflow-x-auto rounded-2xl border border-gray-800 bg-[#0a0a0a]">
                            <table class="w-full text-left border-collapse min-w-[500px] md:min-w-[500px]">
                                <thead>
                                    <tr class="bg-gray-900 border-b border-gray-800">
                                        <th class="p-4 font-medium text-gray-400 w-1/4">구분</th>

                                        <!-- 📱 모바일에서만 보이는 엑스트론 (앞쪽 배치) -->
                                        <th
                                            class="p-4 font-semibold text-brand-green w-[37.5%] text-center border-l border-gray-800 bg-brand-green/10 table-cell md:hidden">
                                            엑스트론 24개월
                                        </th>

                                        <!-- 공통: 타사 장기 렌탈 (가운데 고정) -->
                                        <th
                                            class="p-4 font-medium text-gray-500 w-[37.5%] text-center border-l border-gray-800">
                                            타사 장기 렌탈
                                        </th>

                                        <!-- 💻 PC에서만 보이는 엑스트론 (원래 자리) -->
                                        <th
                                            class="p-4 font-semibold text-brand-green w-[37.5%] text-center border-l border-gray-800 bg-brand-green/10 hidden md:table-cell">
                                            엑스트론 24개월
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-gray-800">
                                        <td class="p-4 font-medium text-gray-300 bg-gray-900/50">월 납부금</td>

                                        <!-- 📱 모바일용 엑스트론 값 (앞) -->
                                        <td
                                            class="p-4 text-center text-white font-medium border-l border-gray-800 bg-brand-green/5 whitespace-nowrap table-cell md:hidden">
                                            57,916원
                                        </td>

                                        <!-- 공통 타사 값 -->
                                        <td
                                            class="p-4 text-center text-gray-500 border-l border-gray-800 whitespace-nowrap">
                                            79,900원
                                        </td>

                                        <!-- 💻 PC용 엑스트론 값 (뒤) -->
                                        <td
                                            class="p-4 text-center text-white font-medium border-l border-gray-800 bg-brand-green/5 whitespace-nowrap hidden md:table-cell">
                                            57,916원
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-4 font-medium text-gray-300 bg-gray-900/50">총 납부금<br><span
                                                class="text-[11px] text-gray-500 font-normal">(24개월 기준)</span></td>

                                        <!-- 📱 모바일용 엑스트론 값 (앞) -->
                                        <td
                                            class="p-4 text-center text-brand-green font-bold border-l border-gray-800 text-xl bg-brand-green/5 whitespace-nowrap table-cell md:hidden">
                                            1,390,000원
                                        </td>

                                        <!-- 공통 타사 값 -->
                                        <td
                                            class="p-4 text-center text-gray-400 border-l border-gray-800 text-lg font-medium whitespace-nowrap">
                                            1,917,600원
                                        </td>

                                        <!-- 💻 PC용 엑스트론 값 (뒤) -->
                                        <td
                                            class="p-4 text-center text-brand-green font-bold border-l border-gray-800 text-xl bg-brand-green/5 whitespace-nowrap hidden md:table-cell">
                                            1,390,000원
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div
                        class="lg:col-span-1 flex flex-col justify-center items-center text-center p-8 bg-gray-900/60 border border-gray-800 rounded-2xl h-full shadow-inner relative overflow-hidden group">
                        <div
                            class="absolute inset-0 bg-red-500/5 group-hover:bg-red-500/10 transition-colors duration-500 blur-2xl">
                        </div>
                        <p class="text-gray-400 text-sm font-medium mb-2 tracking-wider relative z-10">타사 렌탈 선택 시</p>
                        <h4 class="text-xl font-medium text-gray-300 mb-3 relative z-10">손해 보는 금액</h4>
                        <div class="flex items-baseline justify-center gap-1 mb-4 relative z-10">
                            <span
                                class="text-[42px] md:text-[54px] px-1 py-1 font-black text-transparent bg-clip-text bg-gradient-to-br from-red-400 to-rose-600 drop-shadow-[0_0_15px_rgba(225,29,72,0.4)] tracking-tighter">527,600</span>
                            <span class="text-lg font-medium text-gray-400">원</span>
                        </div>
                        <p class="text-xs text-gray-400 leading-relaxed font-normal relative z-10">
                            자전거 한 대를 더 살 수 있는 금액,<br>불필요한 이자로 날리지 마세요.
                        </p>
                    </div>
                </div>
                <p class="text-[11px] text-gray-500 mt-6 text-center md:text-right font-normal">
                    * 엑스트론 프로미니 모델 타사 장기 렌탈 비교, 24개월 렌탈 진행 시
                </p>
            </div>

            <!-- 최종 체감가 영수증 패널 -->
            <div
                class="bg-gradient-to-br from-[#111] to-[#050505] border border-gray-800 rounded-3xl p-6 md:p-10 relative overflow-hidden shadow-2xl group hover:border-brand-green/30 transition-colors duration-500">
                <!-- 배경 효과 -->
                <div
                    class="absolute top-0 right-0 w-96 h-96 bg-brand-green/5 rounded-full blur-[80px] pointer-events-none group-hover:bg-brand-green/10 transition-colors duration-500">
                </div>

                <div class="flex flex-col lg:flex-row gap-10 items-center relative z-10">
                    <!-- 영수증 명세서 (좌측) -->
                    <div class="w-full lg:w-3/5">
                        <div class="flex items-center gap-3 mb-6">
                            <i class="ph-fill ph-receipt text-3xl text-gray-500"></i>
                            <h3 class="text-xl md:text-2xl font-semibold text-white">엑스트론 혜택 명세서</h3>
                        </div>

                        <div class="space-y-4 font-normal">
                            <!-- 기준가 -->
                            <div class="flex justify-between items-end border-b border-gray-800 pb-4">
                                <span class="text-gray-400 text-sm md:text-base">엑스트론 프로미니<br>타사 인수형 렌탈 기준 <span
                                        class="text-[10px] sm:text-[11px] text-gray-500 ml-1 hidden sm:inline">(*렌탈 수수료
                                        포함 총액)</span></span>
                                <span
                                    class="text-lg sm:text-xl text-gray-300 font-semibold tracking-wide">1,917,600원</span>
                            </div>

                            <!-- 할인 내역 -->
                            <div class="space-y-3 pt-2">
                                <div
                                    class="flex justify-between items-center text-brand-green bg-brand-green/5 px-3 py-2 rounded-lg border border-brand-green/10">
                                    <span class="text-xs sm:text-sm font-medium flex items-center gap-2">
                                        <i class="ph-bold ph-minus hidden sm:inline"></i> 24개월 무이자 혜택 <span
                                            class="text-[10px] opacity-70 hidden md:inline">(*이자 절감)</span>
                                    </span>
                                    <span class="font-bold tracking-wide text-sm sm:text-base">- 527,600원</span>
                                </div>
                                <!-- ZOOM 싯포스트 안장 할인 제외 (프로미니 기준이므로) -->
                                <div class="flex justify-between items-center text-brand-green/80 px-3 py-1">
                                    <span class="text-xs sm:text-sm flex items-center gap-2"><i
                                            class="ph-bold ph-minus hidden sm:inline"></i> 엑스트론 타입원 헬멧</span>
                                    <span class="font-medium tracking-wide text-sm sm:text-base">- 70,000원</span>
                                </div>
                                <div class="flex justify-between items-center text-brand-green/80 px-3 py-1">
                                    <span class="text-xs sm:text-sm flex items-center gap-2"><i
                                            class="ph-bold ph-minus hidden sm:inline"></i> 라이더 스타터 킷 4종</span>
                                    <span class="font-medium tracking-wide text-sm sm:text-base">- 50,000원</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 최종 체감가 (우측) -->
                    <div
                        class="w-full lg:w-2/5 flex flex-col justify-center items-center text-center p-6 sm:p-8 bg-gradient-to-b from-brand-green/20 to-brand-green/5 border border-brand-green/40 rounded-2xl relative shadow-[0_0_30px_rgba(114,191,68,0.15)] mt-4 lg:mt-0">
                        <!-- 반짝이는 상단 뱃지 -->
                        <div
                            class="absolute -top-4 bg-brand-green text-gray-900 text-xs sm:text-sm font-black px-4 sm:px-5 py-1.5 rounded-full shadow-[0_0_15px_rgba(114,191,68,0.6)] animate-pulse whitespace-nowrap">
                            총 혜택가치 최대 64만원 상당!
                        </div>

                        <p class="text-brand-green/80 text-xs sm:text-sm font-medium mt-4 mb-1 tracking-widest">FINAL
                            PRICE</p>
                        <h4 class="text-xl sm:text-2xl md:text-3xl font-bold text-white mb-2">최대 체감가</h4>

                        <div class="flex items-baseline justify-center gap-2 mt-2 mb-1">
                            <span
                                class="text-4xl sm:text-5xl md:text-6xl font-black text-transparent bg-clip-text bg-gradient-to-b from-white to-gray-300 tracking-tight drop-shadow-lg pr-2">1,270,000</span>
                            <span class="text-xl sm:text-2xl text-gray-400 font-medium">원</span>
                        </div>
                        <p
                            class="text-[10px] sm:text-[11px] text-gray-500 mt-3 font-normal leading-relaxed break-keep px-2">
                            * 기기 원금에서 모든 증정 혜택과 이자 절감분을 제한 가상의 체감 가격입니다.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 03-8. 토스페이먼츠 제휴 카드 Section -->
    <section class="py-24 bg-[#020202] relative border-b border-gray-900 overflow-hidden">
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-[#3182f6]/5 rounded-full blur-[100px] pointer-events-none">
        </div>
        <div class="container mx-auto px-6 max-w-5xl relative z-10">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gray-900 border border-gray-800 text-gray-400 text-xs sm:text-sm font-medium mb-6">
                    <i class="ph-fill ph-x-circle text-red-500"></i>
                    <span class="line-through decoration-red-500/50">제휴 할인, 신규 카드 발급 조건 NO!</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-bold mb-4 leading-tight">
                    쓰시는 <span class="text-white">카드 그대로,</span><br>
                </h2>
                <h3 class="text-2xl md:text-3xl font-medium text-gray-400 mb-6 flex items-center justify-center">
                    <img src="/assets/BATTERY_LOGO_SET/XTRON_LOGO.png" alt="엑스트론 로고" class="h-6 md:h-8 object-contain">
                    <span class="text-gray-600 font-light mx-3 md:mx-4 text-xl md:text-2xl">X</span>
                    <span class="text-[#3182f6] font-bold tracking-tight">토스페이먼츠</span>
                </h3>
                <p class="text-lg sm:text-xl text-brand-green font-medium">
                    번거로운 절차 없이 무이자 혜택만 누리세요!
                </p>
            </div>

<div class="grid grid-cols-2 sm:grid-cols-3 gap-3 sm:gap-4 max-w-3xl mx-auto">
    
    <div class="group relative h-24 sm:h-28 rounded-xl bg-[#0a0a0a] border border-blue-500/50 flex flex-col justify-between p-4 sm:p-5 overflow-hidden transition-all duration-300 hover:-translate-y-2 shadow-[0_10px_30px_rgba(59,130,246,0.15)] cursor-default">
        <div class="absolute -right-8 -top-8 w-24 h-24 rounded-full blur-[30px] opacity-20 bg-blue-500 transition-opacity duration-500"></div>
        <div class="absolute top-3 right-3 sm:top-4 sm:right-4 z-20">
            <span class="bg-blue-500/10 border border-blue-500/30 text-blue-400 text-[9px] sm:text-[10px] px-2 py-1 rounded-full font-medium tracking-wide">최대 무이자 24개월</span>
        </div>
        <div class="flex justify-between items-end h-full relative z-10">
            <div class="flex flex-col justify-between h-full">
                <i class="ph-fill ph-credit-card text-2xl sm:text-3xl text-blue-500 transition-colors duration-300"></i>
                <span class="text-white text-xs sm:text-sm font-regular transition-colors duration-300">신한카드</span>
            </div>
            <div class="w-10 h-10 sm:w-14 sm:h-14 flex items-center justify-center">
                <img src="/assets/CARD_LOGO/SHINHAN_CARD.png" alt="신한카드 로고" loading="lazy" class="w-full h-full object-contain opacity-100 transition-all duration-500">
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-1 bg-blue-500 transition-colors duration-300"></div>
    </div>

    <div class="group relative h-24 sm:h-28 rounded-xl bg-[#0a0a0a] border border-blue-600/50 flex flex-col justify-between p-4 sm:p-5 overflow-hidden transition-all duration-300 hover:-translate-y-2 shadow-[0_10px_30px_rgba(37,99,235,0.15)] cursor-default">
        <div class="absolute -right-8 -top-8 w-24 h-24 rounded-full blur-[30px] opacity-20 bg-blue-600 transition-opacity duration-500"></div>
        <div class="absolute top-3 right-3 sm:top-4 sm:right-4 z-20">
            <span class="bg-blue-600/10 border border-blue-600/30 text-blue-400 text-[9px] sm:text-[10px] px-2 py-1 rounded-full font-medium tracking-wide">최대 무이자 24개월</span>
        </div>
        <div class="flex justify-between items-end h-full relative z-10">
            <div class="flex flex-col justify-between h-full">
                <i class="ph-fill ph-credit-card text-2xl sm:text-3xl text-blue-600 transition-colors duration-300"></i>
                <span class="text-white text-xs sm:text-sm font-regular transition-colors duration-300">삼성카드</span>
            </div>
            <div class="w-10 h-10 sm:w-14 sm:h-14 flex items-center justify-center">
                <img src="/assets/CARD_LOGO/SAMSUNG_CARD.png" alt="삼성카드 로고" loading="lazy" class="w-full h-full object-contain opacity-100 transition-all duration-500">
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-1 bg-blue-600 transition-colors duration-300"></div>
    </div>

    <div class="group relative h-24 sm:h-28 rounded-xl bg-[#0a0a0a] border border-yellow-500/50 flex flex-col justify-between p-4 sm:p-5 overflow-hidden transition-all duration-300 hover:-translate-y-2 shadow-[0_10px_30px_rgba(234,179,8,0.15)] cursor-default">
        <div class="absolute -right-4 -top-4 w-16 h-16 rounded-full blur-[30px] opacity-20 bg-yellow-400 transition-opacity duration-500"></div>
        <div class="absolute top-3 right-3 sm:top-4 sm:right-4 z-20">
            <span class="bg-yellow-400/10 border border-yellow-400/30 text-yellow-400 text-[9px] sm:text-[10px] px-2 py-1 rounded-full font-medium tracking-wide">최대 무이자 18개월</span>
        </div>
        <div class="flex justify-between items-end h-full relative z-10">
            <div class="flex flex-col justify-between h-full">
                <i class="ph-fill ph-credit-card text-2xl sm:text-3xl text-yellow-400 transition-colors duration-300"></i>
                <span class="text-white text-xs sm:text-sm font-regular transition-colors duration-300">국민카드</span>
            </div>
            <div class="w-10 h-10 sm:w-14 sm:h-14 flex items-center justify-center">
                <img src="/assets/CARD_LOGO/KB_CARD.png" alt="국민카드 로고" loading="lazy" class="w-full h-full object-contain opacity-100 transition-all duration-500">
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-1 bg-yellow-400 transition-colors duration-300"></div>
    </div>

    <div class="group relative h-24 sm:h-28 rounded-xl bg-[#0a0a0a] border border-white/50 flex flex-col justify-between p-4 sm:p-5 overflow-hidden transition-all duration-300 hover:-translate-y-2 shadow-[0_10px_30px_rgba(255,255,255,0.1)] cursor-default">
        <div class="absolute -right-8 -top-8 w-24 h-24 rounded-full blur-[30px] opacity-20 bg-white transition-opacity duration-500"></div>
        <div class="absolute top-3 right-3 sm:top-4 sm:right-4 z-20">
            <span class="bg-white/10 border border-white/30 text-white text-[9px] sm:text-[10px] px-2 py-1 rounded-full font-medium tracking-wide">최대 무이자 24개월</span>
        </div>
        <div class="flex justify-between items-end h-full relative z-10">
            <div class="flex flex-col justify-between h-full">
                <i class="ph-fill ph-credit-card text-2xl sm:text-3xl text-white transition-colors duration-300"></i>
                <span class="text-white text-xs sm:text-sm font-regular transition-colors duration-300">현대카드</span>
            </div>
            <div class="w-10 h-10 sm:w-14 sm:h-14 flex items-center justify-center">
                <img src="/assets/CARD_LOGO/HYUNDAI_CARD.png" alt="현대카드 로고" loading="lazy" class="w-full h-full object-contain opacity-100 transition-all duration-500">
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-1 bg-white transition-colors duration-300"></div>
    </div>

    <div class="group relative h-24 sm:h-28 rounded-xl bg-[#0a0a0a] border border-red-500/50 flex flex-col justify-between p-4 sm:p-5 overflow-hidden transition-all duration-300 hover:-translate-y-2 shadow-[0_10px_30px_rgba(239,68,68,0.15)] cursor-default">
        <div class="absolute -right-8 -top-8 w-24 h-24 rounded-full blur-[30px] opacity-20 bg-red-500 transition-opacity duration-500"></div>
        <div class="absolute top-3 right-3 sm:top-4 sm:right-4 z-20">
            <span class="bg-red-500/10 border border-red-500/30 text-red-400 text-[9px] sm:text-[10px] px-2 py-1 rounded-full font-medium tracking-wide">최대 무이자 24개월</span>
        </div>
        <div class="flex justify-between items-end h-full relative z-10">
            <div class="flex flex-col justify-between h-full">
                <i class="ph-fill ph-credit-card text-2xl sm:text-3xl text-red-500 transition-colors duration-300"></i>
                <span class="text-white text-xs sm:text-sm font-regular transition-colors duration-300">비씨카드</span>
            </div>
            <div class="w-10 h-10 sm:w-14 sm:h-14 flex items-center justify-center">
                <img src="/assets/CARD_LOGO/BC_CARD.png" alt="비씨카드 로고" loading="lazy" class="w-full h-full object-contain opacity-100 transition-all duration-500">
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-1 bg-red-500 transition-colors duration-300"></div>
    </div>

    <div class="group relative h-24 sm:h-28 rounded-xl bg-[#0a0a0a] border border-rose-500/50 flex flex-col justify-between p-4 sm:p-5 overflow-hidden transition-all duration-300 hover:-translate-y-2 shadow-[0_10px_30px_rgba(244,63,94,0.15)] cursor-default">
        <div class="absolute -right-8 -top-8 w-24 h-24 rounded-full blur-[30px] opacity-20 bg-rose-500 transition-opacity duration-500"></div>
        <div class="absolute top-3 right-3 sm:top-4 sm:right-4 z-20">
            <span class="bg-rose-500/10 border border-rose-500/30 text-rose-400 text-[9px] sm:text-[10px] px-2 py-1 rounded-full font-medium tracking-wide">최대 무이자 24개월</span>
        </div>
        <div class="flex justify-between items-end h-full relative z-10">
            <div class="flex flex-col justify-between h-full">
                <i class="ph-fill ph-credit-card text-2xl sm:text-3xl text-rose-500 transition-colors duration-300"></i>
                <span class="text-white text-xs sm:text-sm font-regular transition-colors duration-300">롯데카드</span>
            </div>
            <div class="w-10 h-10 sm:w-14 sm:h-14 flex items-center justify-center">
                <img src="/assets/CARD_LOGO/LOTTE_CARD.png" alt="롯데카드 로고" loading="lazy" class="w-full h-full object-contain opacity-100 transition-all duration-500">
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-1 bg-rose-500 transition-colors duration-300"></div>
    </div>

    <div class="group relative h-24 sm:h-28 rounded-xl bg-[#0a0a0a] border border-sky-400/50 flex flex-col justify-between p-4 sm:p-5 overflow-hidden transition-all duration-300 hover:-translate-y-2 shadow-[0_10px_30px_rgba(56,189,248,0.15)] cursor-default">
        <div class="absolute -right-8 -top-8 w-24 h-24 rounded-full blur-[30px] opacity-20 bg-sky-400 transition-opacity duration-500"></div>
        <div class="absolute top-3 right-3 sm:top-4 sm:right-4 z-20">
            <span class="bg-sky-400/10 border border-sky-400/30 text-sky-400 text-[9px] sm:text-[10px] px-2 py-1 rounded-full font-medium tracking-wide">최대 무이자 24개월</span>
        </div>
        <div class="flex justify-between items-end h-full relative z-10">
            <div class="flex flex-col justify-between h-full">
                <i class="ph-fill ph-credit-card text-2xl sm:text-3xl text-sky-400 transition-colors duration-300"></i>
                <span class="text-white text-xs sm:text-sm font-regular transition-colors duration-300">우리카드</span>
            </div>
            <div class="w-10 h-10 sm:w-14 sm:h-14 flex items-center justify-center">
                <img src="/assets/CARD_LOGO/WOORI_CARD.png" alt="우리카드 로고" loading="lazy" class="w-full h-full object-contain opacity-100 transition-all duration-500">
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-1 bg-sky-400 transition-colors duration-300"></div>
    </div>

    <div class="group relative h-24 sm:h-28 rounded-xl bg-[#0a0a0a] border border-teal-500/50 flex flex-col justify-between p-4 sm:p-5 overflow-hidden transition-all duration-300 hover:-translate-y-2 shadow-[0_10px_30px_rgba(20,184,166,0.15)] cursor-default">
        <div class="absolute -right-8 -top-8 w-24 h-24 rounded-full blur-[30px] opacity-20 bg-teal-500 transition-opacity duration-500"></div>
        <div class="absolute top-3 right-3 sm:top-4 sm:right-4 z-20">
            <span class="bg-teal-500/10 border border-teal-500/30 text-teal-400 text-[9px] sm:text-[10px] px-2 py-1 rounded-full font-medium tracking-wide">최대 무이자 24개월</span>
        </div>
        <div class="flex justify-between items-end h-full relative z-10">
            <div class="flex flex-col justify-between h-full">
                <i class="ph-fill ph-credit-card text-2xl sm:text-3xl text-teal-500 transition-colors duration-300"></i>
                <span class="text-white text-xs sm:text-sm font-regular transition-colors duration-300">하나카드</span>
            </div>
            <div class="w-10 h-10 sm:w-14 sm:h-14 flex items-center justify-center">
                <img src="/assets/CARD_LOGO/HANA_CARD.png" alt="하나카드 로고" loading="lazy" class="w-full h-full object-contain opacity-100 transition-all duration-500">
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-1 bg-teal-500 transition-colors duration-300"></div>
    </div>

    <div class="group relative h-24 sm:h-28 rounded-xl bg-[#0a0a0a] border border-green-500/50 flex flex-col justify-between p-4 sm:p-5 overflow-hidden transition-all duration-300 hover:-translate-y-2 shadow-[0_10px_30px_rgba(34,197,94,0.15)] cursor-default">
        <div class="absolute -right-8 -top-8 w-24 h-24 rounded-full blur-[30px] opacity-20 bg-green-500 transition-opacity duration-500"></div>
        <div class="absolute top-3 right-3 sm:top-4 sm:right-4 z-20">
            <span class="bg-green-500/10 border border-green-500/30 text-green-400 text-[9px] sm:text-[10px] px-2 py-1 rounded-full font-medium tracking-wide">최대 무이자 18개월</span>
        </div>
        <div class="flex justify-between items-end h-full relative z-10">
            <div class="flex flex-col justify-between h-full">
                <i class="ph-fill ph-credit-card text-2xl sm:text-3xl text-green-500 transition-colors duration-300"></i>
                <span class="text-white text-xs sm:text-sm font-regular transition-colors duration-300">농협카드</span>
            </div>
            <div class="w-10 h-10 sm:w-14 sm:h-14 flex items-center justify-center">
                <img src="/assets/CARD_LOGO/NH_CARD.png" alt="농협카드 로고" loading="lazy" class="w-full h-full object-contain opacity-100 transition-all duration-500">
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-1 bg-green-500 transition-colors duration-300"></div>
    </div>

</div>
            </div>
        </div>
    </section>

    <!-- 04. 제품 스펙 확인하기 Section -->
    <section class="py-24 bg-xtron-dark overflow-hidden">
        <div class="container mx-auto px-6">

            <!-- 배터리 토글 비교 영역 -->
            <div class="max-w-5xl mx-auto mb-24">
                <div class="text-center mb-12">
                    <p class="text-xtron-400 font-medium tracking-widest mb-2">BATTERY TECHNOLOGY</p>
                    <h2 class="text-3xl md:text-5xl font-bold mb-6">
                        한계를 넘는 주행거리,<br>당신의 선택은?
                    </h2>
                    <p id="battery-desc"
                        class="text-base md:text-lg text-gray-400 h-24 md:h-12 transition-all duration-300 font-normal break-keep">
                        출퇴근과 주말 레저를 완벽하게 커버. 타사 최고가 모델에서나 볼 법한 대용량이 엑스트론에서는 '기본'입니다.
                    </p>
                </div>

                <div class="flex justify-center mb-12">
                    <div class="bg-gray-900 p-1 rounded-full inline-flex relative w-full sm:w-auto max-w-sm">
                        <!-- 모바일 최적화: 버튼 너비 조정 -->
                        <div id="toggle-bg"
                            class="absolute top-1 left-1 w-[calc(50%-4px)] h-[calc(100%-8px)] bg-brand-blue rounded-full transition-all duration-300 ease-in-out">
                        </div>

                        <button onclick="setBattery('standard')" id="btn-std"
                            class="relative z-10 px-2 sm:px-4 py-3 rounded-full text-white font-medium transition-colors w-1/2 sm:w-48 md:w-56 text-xs sm:text-sm md:text-base flex items-center justify-center gap-1">
                            48V 20Ah
                        </button>
                        <button onclick="setBattery('mega')" id="btn-mega"
                            class="relative z-10 px-2 sm:px-4 py-3 rounded-full text-gray-400 font-medium transition-colors w-1/2 sm:w-48 md:w-56 text-xs sm:text-sm md:text-base flex items-center justify-center gap-1 sm:gap-1.5">
                            48V 28.5Ah <img src="/assets/BATTERY_LOGO_SET/MEGA_LOGO.png" alt="MEGA"
                                class="h-2.5 sm:h-3 md:h-4 object-contain opacity-80 group-hover:opacity-100 transition-opacity">
                        </button>
                    </div>
                </div>

                <!-- 기존 주행거리 패널 -->
                <div class="glass-panel p-6 md:p-8 rounded-3xl relative mb-8">
                    <div class="flex justify-between items-end mb-4">
                        <div>
                            <div class="text-xs sm:text-sm text-gray-500 mb-2 font-normal flex items-center gap-1.5"
                                id="cell-spec">
                                Powered by. <img src="/assets/BATTERY_LOGO_SET/SAMSUNG-SDI.png" alt="삼성 SDI"
                                    class="h-3 md:h-4 object-contain opacity-80">
                            </div>
                            <h3 class="text-xl sm:text-2xl md:text-4xl font-semibold flex items-center gap-2"
                                id="ah-spec">48V 20Ah</h3>
                        </div>
                        <div class="text-right">
                            <p class="text-xs sm:text-sm text-gray-500 mb-1 font-normal hidden sm:block">*엑스트론 프로S, PAS
                                1단 기준 최대
                                주행거리</p>
                            <p class="text-[10px] text-gray-500 mb-1 font-normal sm:hidden">최대 주행거리</p>
                            <div class="flex items-baseline justify-end gap-1">
                                <span id="km-text"
                                    class="text-4xl md:text-6xl font-bold text-brand-blue transition-all duration-500">154.9</span>
                                <span class="text-lg sm:text-xl text-gray-400 font-medium">km</span>
                            </div>
                        </div>
                    </div>

                    <div class="w-full bg-gray-800 h-6 sm:h-8 rounded-full overflow-hidden p-1">
                        <div id="range-bar"
                            class="h-full rounded-full bg-brand-blue gauge-transition relative overflow-hidden"
                            style="width: 60%;">
                            <div
                                class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTAgMGwyMCAyMEgwaC0yMHoiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4xKSIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+')] opacity-20">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between text-[10px] sm:text-xs text-gray-600 mt-2 px-2 font-normal">
                        <span>0km</span>
                        <span>100km</span>
                        <span>200km</span>
                        <span>250km+</span>
                    </div>
                </div>

                <!-- 배터리 상세 쇼케이스 영역 -->
                <div id="battery-showcase"
                    class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 transition-opacity duration-300 opacity-100">
                    <div
                        class="relative rounded-3xl overflow-hidden aspect-video lg:aspect-[4/3] border border-gray-800 bg-[#111] shadow-2xl group">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent z-10 pointer-events-none">
                        </div>
                        <img id="battery-img"
                            src="https://images.unsplash.com/photo-1511994298241-608e28f14fde?auto=format&fit=crop&w=800&q=80"
                            class="w-full h-full object-cover absolute inset-0 z-0 group-hover:scale-105 transition-transform duration-700">
                    </div>

                    <div class="flex flex-col justify-center space-y-3" id="battery-features">
                        <!-- JS를 통해 동적 렌더링 됨 -->
                    </div>
                </div>

                <!-- 라이프스타일 맞춤 배터리 선택 가이드 -->
                <div class="mt-20 md:mt-32 pt-10 border-t border-gray-800/50">
                    <div class="text-center mb-12 relative z-10">
                        <h3 class="text-2xl md:text-4xl font-semibold mb-4 text-white">어떤 배터리가 나에게 맞을까?</h3>
                        <p class="text-sm sm:text-base text-gray-400 font-normal">나의 라이딩 스타일에 맞춰 최적의 배터리를 선택해 보세요.</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                        <!-- 48V 20Ah 가이드 -->
                        <div
                            class="bg-gradient-to-b from-[#0a1218] to-[#0a0a0a] border border-brand-blue/30 rounded-3xl p-6 sm:p-8 md:p-10 flex flex-col relative overflow-hidden group hover:border-brand-blue/50 transition-colors shadow-[0_15px_50px_rgba(47,98,134,0.1)]">
                            <div
                                class="absolute top-0 right-0 w-40 h-40 bg-brand-blue/10 rounded-full blur-[60px] pointer-events-none group-hover:bg-brand-blue/20 transition-colors">
                            </div>

                            <div class="flex justify-between items-start mb-8 relative z-10">
                                <div>
                                    <span
                                        class="inline-block px-3 py-1 bg-brand-blue text-white text-[10px] sm:text-[11px] font-bold rounded-full mb-4 tracking-wider shadow-[0_0_10px_rgba(47,98,134,0.3)]">STANDARD</span>
                                    <h4 class="text-2xl sm:text-3xl font-bold text-brand-blue mb-2">48V 20Ah</h4>
                                    <p class="text-brand-blue/60 text-xs sm:text-sm font-normal">합리적인 선택, 스마트한 일상</p>
                                </div>
                                <div class="flex flex-col items-end text-right pt-1">
                                    <span
                                        class="text-[9px] sm:text-[10px] text-brand-blue/60 font-medium mb-1.5 tracking-wider">Powered
                                        by.</span>
                                    <img src="/assets/BATTERY_LOGO_SET/SAMSUNG-SDI.png" alt="삼성 SDI"
                                        class="h-3 sm:h-4 object-contain opacity-80 filter drop-shadow-[0_0_5px_rgba(47,98,134,0.3)] group-hover:opacity-100 transition-opacity">
                                </div>
                            </div>

                            <ul class="space-y-4 sm:space-y-5 mb-8 sm:mb-10 flex-1 relative z-10">
                                <li class="flex items-start gap-2 sm:gap-3">
                                    <i
                                        class="ph-fill ph-check-circle text-brand-blue mt-0.5 text-lg sm:text-xl filter drop-shadow-[0_0_5px_rgba(47,98,134,0.5)]"></i>
                                    <span
                                        class="text-gray-300 text-xs sm:text-sm md:text-base font-normal leading-relaxed">도심
                                        라이딩에 최적화된 스마트 에너지</span>
                                </li>
                                <li class="flex items-start gap-2 sm:gap-3">
                                    <i
                                        class="ph-fill ph-check-circle text-brand-blue mt-0.5 text-lg sm:text-xl filter drop-shadow-[0_0_5px_rgba(47,98,134,0.5)]"></i>
                                    <span
                                        class="text-gray-300 text-xs sm:text-sm md:text-base font-normal leading-relaxed">일상적인
                                        주행에 부족함 없는 컴팩트 고효율</span>
                                </li>
                                <li class="flex items-start gap-2 sm:gap-3">
                                    <i
                                        class="ph-fill ph-check-circle text-brand-blue mt-0.5 text-lg sm:text-xl filter drop-shadow-[0_0_5px_rgba(47,98,134,0.5)]"></i>
                                    <span
                                        class="text-gray-300 text-xs sm:text-sm md:text-base font-normal leading-relaxed">충전이
                                        용이한 환경에서 최고의 경제성 발휘</span>
                                </li>
                            </ul>

                            <div
                                class="bg-brand-blue/10 p-5 sm:p-6 rounded-2xl border border-brand-blue/20 relative z-10 flex items-center gap-3 sm:gap-4">
                                <i class="ph-fill ph-quotes text-2xl sm:text-3xl text-brand-blue/30"></i>
                                <p
                                    class="text-brand-blue font-medium text-xs sm:text-sm md:text-base leading-relaxed flex-1">
                                    나의 주행 환경에 딱 맞는<br><strong
                                        class="text-white font-bold drop-shadow-[0_0_5px_rgba(255,255,255,0.3)]">최적의 효율을
                                        원해요!</strong>
                                </p>
                            </div>
                        </div>

                        <!-- 48V 28.5Ah 가이드 -->
                        <div
                            class="bg-gradient-to-b from-[#101a14] to-[#0a0a0a] border border-brand-green/30 rounded-3xl p-6 sm:p-8 md:p-10 flex flex-col relative overflow-hidden group hover:border-brand-green/50 transition-colors shadow-[0_15px_50px_rgba(114,191,68,0.1)]">
                            <div
                                class="absolute top-0 right-0 w-40 h-40 bg-brand-green/10 rounded-full blur-[60px] pointer-events-none group-hover:bg-brand-green/20 transition-colors">
                            </div>

                            <div class="flex justify-between items-start mb-8 relative z-10">
                                <div>
                                    <span
                                        class="inline-block px-3 py-1 bg-brand-green text-gray-900 text-[10px] sm:text-[11px] font-bold rounded-full mb-4 tracking-wider shadow-[0_0_10px_rgba(114,191,68,0.3)]">MEGA</span>
                                    <h4
                                        class="text-2xl sm:text-3xl font-bold text-brand-green mb-2 flex items-center gap-2">
                                        48V 28.5Ah <i class="ph-fill ph-lightning"></i>
                                    </h4>
                                    <p class="text-brand-green/60 text-xs sm:text-sm font-normal">압도적 용량, 한계 없는 라이딩</p>
                                </div>
                                <div class="flex flex-col items-end text-right pt-1">
                                    <span
                                        class="text-[9px] sm:text-[10px] text-brand-green/60 font-medium mb-1.5 tracking-wider">Powered
                                        by.</span>
                                    <img src="/assets/BATTERY_LOGO_SET/LG-Energy-Solution.png" alt="LG Energy Solution"
                                        class="h-3 sm:h-4 object-contain opacity-80 filter drop-shadow-[0_0_5px_rgba(114,191,68,0.3)] group-hover:opacity-100 transition-opacity">
                                </div>
                            </div>

                            <ul class="space-y-4 sm:space-y-5 mb-8 sm:mb-10 flex-1 relative z-10">
                                <li class="flex items-start gap-2 sm:gap-3">
                                    <i
                                        class="ph-fill ph-check-circle text-brand-green mt-0.5 text-lg sm:text-xl filter drop-shadow-[0_0_5px_rgba(114,191,68,0.5)]"></i>
                                    <span
                                        class="text-gray-300 text-xs sm:text-sm md:text-base font-normal leading-relaxed">20Ah
                                        대비 <strong class="text-brand-green font-semibold">42% 더 강력해진</strong> 압도적
                                        에너지</span>
                                </li>
                                <li class="flex items-start gap-2 sm:gap-3">
                                    <i
                                        class="ph-fill ph-check-circle text-brand-green mt-0.5 text-lg sm:text-xl filter drop-shadow-[0_0_5px_rgba(114,191,68,0.5)]"></i>
                                    <span
                                        class="text-gray-300 text-xs sm:text-sm md:text-base font-normal leading-relaxed">장거리
                                        라이딩, 배달 등 고강도 주행에 특화</span>
                                </li>
                                <li class="flex items-start gap-2 sm:gap-3">
                                    <i
                                        class="ph-fill ph-check-circle text-brand-green mt-0.5 text-lg sm:text-xl filter drop-shadow-[0_0_5px_rgba(114,191,68,0.5)]"></i>
                                    <span
                                        class="text-gray-300 text-xs sm:text-sm md:text-base font-normal leading-relaxed">충전의
                                        번거로움 없이 한 번에 더 멀리 이동</span>
                                </li>
                            </ul>

                            <div
                                class="bg-brand-green/10 p-5 sm:p-6 rounded-2xl border border-brand-green/20 relative z-10 flex items-center gap-3 sm:gap-4">
                                <i class="ph-fill ph-quotes text-2xl sm:text-3xl text-brand-green/30"></i>
                                <p
                                    class="text-brand-green font-medium text-xs sm:text-sm md:text-base leading-relaxed flex-1">
                                    어떠한 상황에서도<br><strong
                                        class="text-white font-bold drop-shadow-[0_0_5px_rgba(255,255,255,0.3)]">배터리 걱정
                                        없는 여유를 원해요!</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 무상보증 확대 (EXTEND) Section -->
            <div class="max-w-5xl mx-auto mt-32 mb-10 pt-20 border-t border-gray-800/80">
                <div class="text-center mb-16">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-green/10 border border-brand-green/30 text-brand-green text-xs sm:text-sm font-medium mb-6 shadow-[0_0_15px_rgba(114,191,68,0.2)]">
                        <i class="ph-fill ph-shield-check text-lg"></i>
                        무이자 24개월 구매 고객 대상
                    </div>
                    <h2 class="text-3xl md:text-5xl font-bold mb-4 leading-tight text-white">
                        무상수리 보장 확대<br>
                        <span class="text-gray-400 text-lg sm:text-xl md:text-2xl font-medium mt-4 block">프레임도, 모터도 이제
                            걱정 없이 타세요!</span>
                    </h2>
                    <p class="text-base sm:text-lg text-gray-400 font-normal mt-6 tracking-wide leading-relaxed">
                        <strong class="text-gray-200 font-medium">"압도적인 보증 업그레이드"</strong>, 더 길어진 <strong
                            class="text-gray-200 font-medium">"무상 A/S"</strong><br>
                        구매 후 더 확실한 A/S로 든든한 전기 자전거
                    </p>
                    <p class="text-xs text-gray-400 mt-6 text-center block md:hidden animate-pulse break-keep">
                        <i class="ph-bold ph-arrows-left-right text-brand-green align-middle mr-1"></i> *모바일 이용 시 아래표를
                        좌우측으로 슬라이드 해보세요!
                    </p>
                </div>

                <div
                    class="glass-panel rounded-3xl border-brand-green/30 relative overflow-hidden shadow-[0_10px_40px_rgba(0,0,0,0.5)] mb-20 p-0.5">
                    <div class="overflow-x-auto rounded-3xl">
                        <table class="w-full text-left border-collapse min-w-full md:min-w-[800px]">
                            <thead>
                                <tr class="bg-gray-900 border-b border-gray-800">
                                <tr class="bg-gray-900 border-b border-gray-800">
                                    <th class="p-5 font-medium text-gray-400 w-[20%] whitespace-nowrap">구분</th>

                                    <!-- 📱 모바일에서만 보이는 26년 NEW 엑스트론 (앞쪽 배치) -->
                                    <th
                                        class="p-4 sm:p-6 font-bold text-brand-green w-[40%] text-center border-x border-t border-brand-green/50 bg-brand-green/20 text-base sm:text-lg md:text-xl shadow-[0_-5px_20px_rgba(114,191,68,0.15)] relative break-keep table-cell md:hidden">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-transparent to-brand-green/10">
                                        </div>
                                        <span class="relative z-10">26년 NEW <br class="block sm:hidden">엑스트론</span>
                                    </th>

                                    <th
                                        class="p-5 font-medium text-gray-600 w-[20%] text-center border-l border-gray-800 bg-gray-950/80 whitespace-nowrap">
                                        타사 평균</th>
                                    <th
                                        class="p-5 font-medium text-gray-300 w-[20%] text-center border-l border-gray-800 whitespace-nowrap">
                                        기존 엑스트론</th>

                                    <!-- 💻 PC에서만 보이는 26년 NEW 엑스트론 (원래 자리) -->
                                    <th
                                        class="p-6 font-bold text-brand-green w-[40%] text-center border-x border-t border-brand-green/50 bg-brand-green/20 text-lg md:text-xl shadow-[0_-5px_20px_rgba(114,191,68,0.15)] rounded-tr-2xl relative whitespace-nowrap hidden md:table-cell">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-transparent to-brand-green/10 rounded-tr-2xl">
                                        </div>
                                        <span class="relative z-10">26년 NEW 엑스트론</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-800 hover:bg-white/5 transition-colors">
                                    <td class="p-5 font-medium text-gray-300 bg-gray-900/30 whitespace-nowrap">프레임</td>

                                    <!-- 📱 모바일용 (앞) -->
                                    <td
                                        class="p-4 sm:p-6 text-center text-white font-bold border-x border-brand-green/50 bg-brand-green/10 text-base sm:text-lg md:text-xl relative break-keep table-cell md:hidden">
                                        <span class="relative z-10 drop-shadow-[0_0_10px_rgba(255,255,255,0.5)]">2년 or
                                            <br class="block sm:hidden">15,000km</span>
                                    </td>

                                    <td
                                        class="p-5 text-center text-gray-600 border-l border-gray-800 bg-gray-950/80 text-sm whitespace-nowrap">
                                        1년 or 1,500km</td>
                                    <td
                                        class="p-5 text-center text-gray-400 border-l border-gray-800 text-sm whitespace-nowrap">
                                        1년 or 10,000km</td>

                                    <!-- 💻 PC용 (뒤) -->
                                    <td
                                        class="p-6 text-center text-white font-bold border-x border-brand-green/50 bg-brand-green/10 text-lg md:text-xl relative whitespace-nowrap hidden md:table-cell">
                                        <span class="relative z-10 drop-shadow-[0_0_10px_rgba(255,255,255,0.5)]">2년 or
                                            15,000km</span>
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-800 hover:bg-white/5 transition-colors">
                                    <td class="p-5 font-medium text-gray-300 bg-gray-900/30 whitespace-nowrap">모터, 배터리
                                    </td>

                                    <!-- 📱 모바일용 (앞) -->
                                    <td
                                        class="p-4 sm:p-6 text-center text-white font-bold border-x border-brand-green/50 bg-brand-green/10 text-base sm:text-lg md:text-xl relative break-keep table-cell md:hidden">
                                        <span class="relative z-10 drop-shadow-[0_0_10px_rgba(255,255,255,0.5)]">1년 or
                                            <br class="block sm:hidden">10,000km</span>
                                    </td>

                                    <td
                                        class="p-5 text-center text-gray-600 border-l border-gray-800 bg-gray-950/80 text-sm whitespace-nowrap">
                                        6개월 or 1,000km</td>
                                    <td
                                        class="p-5 text-center text-gray-400 border-l border-gray-800 text-sm whitespace-nowrap">
                                        6개월</td>

                                    <!-- 💻 PC용 (뒤) -->
                                    <td
                                        class="p-6 text-center text-white font-bold border-x border-brand-green/50 bg-brand-green/10 text-lg md:text-xl relative whitespace-nowrap hidden md:table-cell">
                                        <span class="relative z-10 drop-shadow-[0_0_10px_rgba(255,255,255,0.5)]">1년 or
                                            10,000km</span>
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-800 hover:bg-white/5 transition-colors">
                                    <td class="p-5 font-medium text-gray-300 bg-gray-900/30 whitespace-nowrap">컨트롤러 및 전기
                                        계통</td>

                                    <!-- 📱 모바일용 (앞) -->
                                    <td
                                        class="p-4 sm:p-6 text-center text-gray-200 font-bold border-x border-brand-green/50 bg-brand-green/10 text-base md:text-lg relative break-keep table-cell md:hidden">
                                        <span class="relative z-10">6개월</span>
                                    </td>

                                    <td
                                        class="p-5 text-center text-gray-600 border-l border-gray-800 bg-gray-950/80 text-sm whitespace-nowrap">
                                        6개월 or 1,000km</td>
                                    <td
                                        class="p-5 text-center text-gray-400 border-l border-gray-800 text-sm whitespace-nowrap">
                                        6개월</td>

                                    <!-- 💻 PC용 (뒤) -->
                                    <td
                                        class="p-6 text-center text-gray-200 font-bold border-x border-brand-green/50 bg-brand-green/10 text-base md:text-lg relative whitespace-nowrap hidden md:table-cell">
                                        <span class="relative z-10">6개월</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors border-b border-brand-green/50">
                                    <td
                                        class="p-5 font-medium text-gray-300 bg-gray-900/30 rounded-bl-3xl whitespace-nowrap">
                                        중고 승계</td>

                                    <!-- 📱 모바일용 (앞) -->
                                    <td
                                        class="p-4 sm:p-6 text-center text-brand-green font-bold border-x border-brand-green/50 bg-brand-green/10 text-base sm:text-lg md:text-xl relative break-keep table-cell md:hidden">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-b from-transparent to-brand-green/10">
                                        </div>
                                        <span
                                            class="relative z-10 drop-shadow-[0_0_10px_rgba(114,191,68,0.5)]">가능</span>
                                    </td>

                                    <td
                                        class="p-5 text-center text-gray-600 border-l border-gray-800 bg-gray-950/80 text-sm whitespace-nowrap">
                                        불가능</td>
                                    <td
                                        class="p-5 text-center text-gray-400 border-l border-gray-800 text-sm whitespace-nowrap">
                                        가능</td>

                                    <!-- 💻 PC용 (뒤) -->
                                    <td
                                        class="p-6 text-center text-brand-green font-bold border-x border-brand-green/50 bg-brand-green/10 text-lg md:text-xl rounded-br-2xl relative whitespace-nowrap hidden md:table-cell">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-b from-transparent to-brand-green/10 rounded-br-2xl">
                                        </div>
                                        <span
                                            class="relative z-10 drop-shadow-[0_0_10px_rgba(114,191,68,0.5)]">가능</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div
                    class="bg-[#0a0a0a] border border-gray-800 rounded-3xl p-6 sm:p-8 md:p-12 relative overflow-hidden shadow-2xl">
                    <div class="absolute -top-20 -right-20 w-80 h-80 bg-brand-green/5 rounded-full blur-[80px]"></div>
                    <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-brand-blue/5 rounded-full blur-[80px]"></div>

                    <div class="text-center mb-16 relative z-10">
                        <p class="text-lg sm:text-xl md:text-2xl text-gray-400 mb-3 font-medium">한 번 더 과감하게!</p>
                        <div class="flex justify-center items-center gap-2 sm:gap-3 flex-wrap">
                            <span class="text-2xl sm:text-3xl md:text-4xl font-semibold text-white tracking-tight">무상
                                보증을</span>
                            <img src="/assets/BATTERY_LOGO_SET/EXTEND_LOGO.png" alt="EXTEND 로고"
                                class="h-6 sm:h-8 md:h-9 object-contain drop-shadow-[0_0_15px_rgba(114,191,68,0.3)]">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-12 relative z-10 max-w-4xl mx-auto mb-8">
                        <div
                            class="flex flex-col items-center bg-[#111111] p-6 sm:p-8 rounded-2xl border border-gray-800">
                            <h4
                                class="text-base sm:text-lg md:text-xl font-medium text-gray-300 mb-16 w-full text-center tracking-wide">
                                프레임 보증 기간</h4>

                            <div class="flex items-end justify-center h-64 gap-4 sm:gap-8 md:gap-10 w-full relative">
                                <div
                                    class="absolute top-[35%] left-1/2 -translate-x-1/2 flex flex-col items-center z-20">
                                    <span
                                        class="text-brand-green font-bold text-base sm:text-lg mb-1 animate-pulse">2배</span>
                                    <i
                                        class="ph-bold ph-trend-up text-3xl sm:text-4xl text-brand-green filter drop-shadow-[0_0_10px_rgba(114,191,68,0.5)]"></i>
                                </div>

                                <div class="flex flex-col items-center w-20 sm:w-24 md:w-28 z-10 relative">
                                    <div
                                        class="absolute -top-12 text-[10px] sm:text-[11px] md:text-xs text-gray-500 font-medium text-center leading-tight whitespace-nowrap">
                                        1년 or<br>10,000km</div>
                                    <div
                                        class="w-14 sm:w-16 md:w-20 h-20 bg-gray-800 rounded-t-xl border border-b-0 border-gray-700 shadow-inner">
                                    </div>
                                    <div class="mt-4 text-xs sm:text-sm font-medium text-gray-500">기존</div>
                                </div>

                                <div class="flex flex-col items-center w-20 sm:w-24 md:w-28 z-10 relative">
                                    <div
                                        class="absolute -top-14 text-[10px] sm:text-[11px] md:text-xs text-brand-green font-bold text-center leading-tight whitespace-nowrap drop-shadow-[0_0_5px_rgba(114,191,68,0.3)]">
                                        2년 or<br>15,000km 이내</div>
                                    <div
                                        class="w-14 sm:w-16 md:w-20 h-40 bg-gradient-to-t from-brand-blue to-brand-green rounded-t-xl shadow-[0_0_30px_rgba(114,191,68,0.2)]">
                                    </div>
                                    <div class="mt-4 text-xs sm:text-sm font-bold text-white">NEW</div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="flex flex-col items-center bg-[#111111] p-6 sm:p-8 rounded-2xl border border-gray-800">
                            <h4
                                class="text-base sm:text-lg md:text-xl font-medium text-gray-300 mb-16 w-full text-center tracking-wide">
                                모터 · 배터리 보증 기간</h4>

                            <div class="flex items-end justify-center h-64 gap-4 sm:gap-8 md:gap-10 w-full relative">
                                <div
                                    class="absolute top-[35%] left-1/2 -translate-x-1/2 flex flex-col items-center z-20">
                                    <span
                                        class="text-brand-green font-bold text-base sm:text-lg mb-1 animate-pulse">2배</span>
                                    <i
                                        class="ph-bold ph-trend-up text-3xl sm:text-4xl text-brand-green filter drop-shadow-[0_0_10px_rgba(114,191,68,0.5)]"></i>
                                </div>

                                <div class="flex flex-col items-center w-20 sm:w-24 md:w-28 z-10 relative">
                                    <div
                                        class="absolute -top-8 text-[10px] sm:text-[11px] md:text-xs text-gray-500 font-medium text-center leading-tight whitespace-nowrap">
                                        6개월</div>
                                    <div
                                        class="w-14 sm:w-16 md:w-20 h-16 bg-gray-800 rounded-t-xl border border-b-0 border-gray-700 shadow-inner">
                                    </div>
                                    <div class="mt-4 text-xs sm:text-sm font-medium text-gray-500">기존</div>
                                </div>

                                <div class="flex flex-col items-center w-20 sm:w-24 md:w-28 z-10 relative">
                                    <div
                                        class="absolute -top-14 text-[10px] sm:text-[11px] md:text-xs text-brand-green font-bold text-center leading-tight whitespace-nowrap drop-shadow-[0_0_5px_rgba(114,191,68,0.3)]">
                                        1년 or<br>10,000km 이내</div>
                                    <div
                                        class="w-14 sm:w-16 md:w-20 h-36 bg-gradient-to-t from-brand-blue to-brand-green rounded-t-xl shadow-[0_0_30px_rgba(114,191,68,0.2)]">
                                    </div>
                                    <div class="mt-4 text-xs sm:text-sm font-bold text-white">NEW</div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="mt-12 pt-8 sm:pt-10 border-t border-gray-800/80 text-center relative z-10">
                        <p class="text-base sm:text-lg md:text-xl font-medium text-white mb-3 tracking-wide break-keep">
                            당신의 라이딩, 더
                            오래 책임지겠습니다. 품질에 대한 자신감으로!</p>
                        <p class="text-sm sm:text-base text-gray-400 font-normal">더 길어진 무상 A/S로 마음껏 달리세요. <span
                                class="text-[10px] sm:text-xs text-gray-500 ml-1 block sm:inline mt-1 sm:mt-0">(단, 선도래
                                기준 / 소모품 제외)</span></p>
			<p class="text-sm sm:text-base text-red-400 font-normal break-keep">제품등록 시 적용됩니다.<span
                                class="text-[10px] sm:text-xs text-gray-500 ml-1 block sm:inline mt-1 sm:mt-0 break-keep">(보증기간은
                                구매영수증 날짜 기준)</span></p>
                    </div>
                </div>
            </div>

<div class="max-w-5xl mx-auto mt-0 mb-8 sm:mt-0 sm:mb-8 relative z-20">
                <a href="https://www.xtroncare.kr/" target="_blank" class="block group relative overflow-hidden rounded-3xl border border-brand-green/30 shadow-[0_0_30px_rgba(114,191,68,0.1)] hover:border-brand-green/60 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-r from-brand-green/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10"></div>
                    
                    <img src="/assets/PREMIUM_SET/MEGA_BENEFIT_(MO).png" alt="엑스트론 정품등록 하기" class="w-full h-auto object-cover block sm:hidden transform group-hover:scale-[1.02] transition-transform duration-700">
                    
                    <img src="/assets/PREMIUM_SET/MEGA_BENEFIT_(PC).png" alt="엑스트론 정품등록 하기" class="w-full h-auto object-cover hidden sm:block transform group-hover:scale-[1.02] transition-transform duration-700">
                </a>
            </div>

            <!-- 공통 스펙 갤러리 핫스팟 -->
            <div class="mt-20">
                <div class="text-center mb-12 sm:mb-16">
                    <h2 class="text-3xl md:text-5xl font-bold">완벽한 라이딩을 위한 <span
                            class="text-brand-green block sm:inline mt-2 sm:mt-0">프리미엄 기본기</span></h2>
                </div>

                <div
                    class="relative max-w-5xl mx-auto hidden md:block aspect-video rounded-3xl border border-gray-800 bg-[#111111] overflow-hidden">
                    <div class="absolute top-6 left-6 z-30 flex flex-col gap-2 pointer-events-none">
                        <div
                            class="inline-block bg-gray-900/80 backdrop-blur-md border border-gray-700 px-5 py-2 rounded-2xl shadow-lg w-max">
                            <span id="spec-model-name" class="text-brand-green font-bold tracking-wider">허브모터 라인업</span>
                        </div>
                        <div id="spec-applicable-models" class="flex flex-wrap gap-1.5 pl-1 opacity-90">
                            <!-- JS로 동적 렌더링 -->
                        </div>
                    </div>

                    <button onclick="moveSpecSlide(-1)"
                        class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-black/60 hover:bg-brand-green text-white rounded-full flex items-center justify-center transition-colors z-30 shadow-lg border border-gray-700 pointer-events-auto">
                        <i class="ph ph-caret-left text-2xl"></i>
                    </button>
                    <button onclick="moveSpecSlide(1)"
                        class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-black/60 hover:bg-brand-green text-white rounded-full flex items-center justify-center transition-colors z-30 shadow-lg border border-gray-700 pointer-events-auto">
                        <i class="ph ph-caret-right text-2xl"></i>
                    </button>

                    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2 z-30">
                        <button onclick="setSpecSlide(0)"
                            class="spec-dot w-3 h-3 rounded-full bg-brand-green transition-colors"></button>
                        <button onclick="setSpecSlide(1)"
                            class="spec-dot w-3 h-3 rounded-full bg-gray-600 hover:bg-gray-400 transition-colors"></button>
                    </div>

                    <div id="spec-slider" class="flex w-full h-full transition-transform duration-700 ease-in-out">
                        <!-- SLIDE 1 -->
                        <div class="w-full h-full shrink-0 relative bg-gray-white">
                            <img src="/assets/PREVIEW_PRODUCT/PREVIEW_PRO.png" alt="XTRON 허브모터 모델"
                                class="w-full h-full object-cover opacity-90">

                            <!-- 핫스팟들 -->
                            <div class="absolute top-[6%] left-[58%] group cursor-pointer z-20 hover:z-50"
                                onclick="openSpecModal('lcd')">
                                <div
                                    class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow">
                                    <div class="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
                                </div>
                                <div
                                    class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
                                    <div
                                        class="absolute bottom-full left-1/2 -translate-x-1/2 border-4 border-transparent border-b-gray-700">
                                    </div>
                                    <span class="font-bold text-brand-green text-xs mb-0.5">LCD 컬러 계기판</span>
                                    <span class="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
                                </div>
                            </div>
                            <div class="absolute top-[12%] left-[65%] group cursor-pointer z-20 hover:z-50"
                                onclick="openSpecModal('brake')">
                                <div class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow"
                                    style="animation-delay: 0.5s;">
                                    <div class="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
                                </div>
                                <div
                                    class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
                                    <div
                                        class="absolute bottom-full left-1/2 -translate-x-1/2 border-4 border-transparent border-b-gray-700">
                                    </div>
                                    <span class="font-bold text-brand-green text-xs mb-0.5">TEKTRO 유압식 브레이크</span>
                                    <span class="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
                                </div>
                            </div>
                            <div class="absolute top-[47%] left-[70%] group cursor-pointer z-20 hover:z-50"
                                onclick="openSpecModal('light')">
                                <div class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow"
                                    style="animation-delay: 1s;">
                                    <div class="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
                                </div>
                                <div
                                    class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
                                    <span class="font-bold text-brand-green text-xs mb-0.5">전조등/후미등 통합 라이트 시스템</span>
                                    <span class="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
                                    <div
                                        class="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
                                    </div>
                                </div>
                            </div>
                            <div class="absolute top-[50%] left-[15.5%] group cursor-pointer z-20 hover:z-50"
                                onclick="openSpecModal('light')">
                                <div class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow"
                                    style="animation-delay: 1s;">
                                    <div class="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
                                </div>
                                <div
                                    class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
                                    <span class="font-bold text-brand-green text-xs mb-0.5">전조등/후미등 통합 라이트 시스템</span>
                                    <span class="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
                                    <div
                                        class="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
                                    </div>
                                </div>
                            </div>
                            <div class="absolute top-[60%] left-[39%] group cursor-pointer z-20 hover:z-50"
                                onclick="openSpecModal('battery')">
                                <div class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow"
                                    style="animation-delay: 0.2s;">
                                    <div class="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
                                </div>
                                <div
                                    class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
                                    <span class="font-bold text-brand-green text-xs mb-0.5">대용량 배터리</span>
                                    <span class="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
                                    <div
                                        class="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
                                    </div>
                                </div>
                            </div>
                            <div class="absolute top-[55%] left-[67.4%] group cursor-pointer z-20 hover:z-50"
                                onclick="openSpecModal('suspension')">
                                <div class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow"
                                    style="animation-delay: 0.8s;">
                                    <div class="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
                                </div>
                                <div
                                    class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
                                    <span class="font-bold text-brand-green text-xs mb-0.5">프론트 서스펜션</span>
                                    <span class="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
                                    <div
                                        class="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
                                    </div>
                                </div>
                            </div>
                            <div class="absolute top-[75%] left-[76.2%] group cursor-pointer z-20 hover:z-50"
                                onclick="openSpecModal('wheel')">
                                <div class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow"
                                    style="animation-delay: 1.5s;">
                                    <div class="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
                                </div>
                                <div
                                    class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
                                    <span class="font-bold text-brand-green text-xs mb-0.5">마그네슘 합금 휠</span>
                                    <span class="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
                                    <div
                                        class="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
                                    </div>
                                </div>
                            </div>
                            <div class="absolute top-[79.4%] left-[25.9%] group cursor-pointer z-20 hover:z-50"
                                onclick="openSpecModal('gear_7')">
                                <div class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow"
                                    style="animation-delay: 0.6s;">
                                    <div class="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
                                </div>
                                <div
                                    class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
                                    <span class="font-bold text-brand-green text-xs mb-0.5">시마노 7단 기어</span>
                                    <span class="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
                                    <div
                                        class="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
                                    </div>
                                </div>
                            </div>
                            <div class="absolute top-[69%] left-[24%] group cursor-pointer z-20 hover:z-50"
                                onclick="openSpecModal('motor')">
                                <div class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow"
                                    style="animation-delay: 0.3s;">
                                    <div class="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
                                </div>
                                <div
                                    class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
                                    <span class="font-bold text-brand-green text-xs mb-0.5">정격 500W 허브 모터</span>
                                    <span class="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
                                    <div
                                        class="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- SLIDE 2 -->
                        <div class="w-full h-full shrink-0 relative bg-gray-white">
                            <img src="/assets/PREVIEW_PRODUCT/PREVIEW_PRO_S.png" alt="XTRON 중앙모터 모델"
                                class="w-full h-full object-cover opacity-90">
                            <!-- 핫스팟들 -->
                            <div class="absolute top-[6%] left-[58%] group cursor-pointer z-20 hover:z-50"
                                onclick="openSpecModal('ananda_lcd')">
                                <div
                                    class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow">
                                    <div class="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
                                </div>
                                <div
                                    class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
                                    <div
                                        class="absolute bottom-full left-1/2 -translate-x-1/2 border-4 border-transparent border-b-gray-700">
                                    </div>
                                    <span class="font-bold text-brand-green text-xs mb-0.5">아난다 전용 계기판</span>
                                    <span class="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
                                </div>
                            </div>
                            <div class="absolute top-[12%] left-[65%] group cursor-pointer z-20 hover:z-50"
                                onclick="openSpecModal('brake')">
                                <div class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow"
                                    style="animation-delay: 0.5s;">
                                    <div class="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
                                </div>
                                <div
                                    class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
                                    <div
                                        class="absolute bottom-full left-1/2 -translate-x-1/2 border-4 border-transparent border-b-gray-700">
                                    </div>
                                    <span class="font-bold text-brand-green text-xs mb-0.5">TEKTRO 유압식 브레이크</span>
                                    <span class="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
                                </div>
                            </div>
                            <div class="absolute top-[47%] left-[70%] group cursor-pointer z-20 hover:z-50"
                                onclick="openSpecModal('light')">
                                <div class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow"
                                    style="animation-delay: 1s;">
                                    <div class="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
                                </div>
                                <div
                                    class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
                                    <span class="font-bold text-brand-green text-xs mb-0.5">전조등/후미등 통합 라이트 시스템</span>
                                    <span class="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
                                    <div
                                        class="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
                                    </div>
                                </div>
                            </div>
                            <div class="absolute top-[50%] left-[15.5%] group cursor-pointer z-20 hover:z-50"
                                onclick="openSpecModal('light')">
                                <div class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow"
                                    style="animation-delay: 1s;">
                                    <div class="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
                                </div>
                                <div
                                    class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
                                    <span class="font-bold text-brand-green text-xs mb-0.5">전조등/후미등 통합 라이트 시스템</span>
                                    <span class="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
                                    <div
                                        class="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
                                    </div>
                                </div>
                            </div>
                            <div class="absolute top-[61.1%] left-[41%] group cursor-pointer z-20 hover:z-50"
                                onclick="openSpecModal('battery')">
                                <div class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow"
                                    style="animation-delay: 0.2s;">
                                    <div class="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
                                </div>
                                <div
                                    class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
                                    <span class="font-bold text-brand-green text-xs mb-0.5">대용량 배터리</span>
                                    <span class="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
                                    <div
                                        class="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
                                    </div>
                                </div>
                            </div>
                            <div class="absolute top-[55%] left-[67.4%] group cursor-pointer z-20 hover:z-50"
                                onclick="openSpecModal('suspension')">
                                <div class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow"
                                    style="animation-delay: 0.8s;">
                                    <div class="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
                                </div>
                                <div
                                    class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
                                    <span class="font-bold text-brand-green text-xs mb-0.5">프론트 서스펜션</span>
                                    <span class="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
                                    <div
                                        class="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
                                    </div>
                                </div>
                            </div>
                            <div class="absolute top-[75%] left-[76.2%] group cursor-pointer z-20 hover:z-50"
                                onclick="openSpecModal('spoke_wheel')">
                                <div class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow"
                                    style="animation-delay: 1.5s;">
                                    <div class="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
                                </div>
                                <div
                                    class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
                                    <span class="font-bold text-brand-green text-xs mb-0.5">스포크 휠</span>
                                    <span class="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
                                    <div
                                        class="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
                                    </div>
                                </div>
                            </div>
                            <div class="absolute top-[79.4%] left-[25.9%] group cursor-pointer z-20 hover:z-50"
                                onclick="openSpecModal('gear_9')">
                                <div class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow"
                                    style="animation-delay: 0.6s;">
                                    <div class="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
                                </div>
                                <div
                                    class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
                                    <span class="font-bold text-brand-green text-xs mb-0.5">시마노 소라 9단 기어</span>
                                    <span class="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
                                    <div
                                        class="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
                                    </div>
                                </div>
                            </div>
                            <div class="absolute top-[62%] left-[50%] group cursor-pointer z-20 hover:z-50"
                                onclick="openSpecModal('mid_motor')">
                                <div class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center animate-pulse-slow"
                                    style="animation-delay: 0.3s;">
                                    <div class="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_#72bf44]"></div>
                                </div>
                                <div
                                    class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-3 py-2 bg-[#111111] border border-gray-700 rounded-lg shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 z-50 flex flex-col items-center">
                                    <span class="font-bold text-brand-green text-xs mb-0.5">아난다 미드 모터 (130N.m)</span>
                                    <span class="text-[10px] text-gray-400 font-normal whitespace-nowrap">*클릭 시 자세한 사항을
                                        볼 수 있습니다.</span>
                                    <div
                                        class="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-700">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 모바일용 모델 탭 & 그리드 -->
                <div class="md:hidden mt-8">
                    <div class="flex justify-center gap-4 mb-4 border-b border-gray-800">
                        <button onclick="setSpecSlide(0)"
                            class="mobile-spec-tab px-4 py-2 text-sm font-medium border-b-2 border-brand-green text-brand-green transition-colors">허브모터
                            라인업</button>
                        <button onclick="setSpecSlide(1)"
                            class="mobile-spec-tab px-4 py-2 text-sm font-medium border-b-2 border-transparent text-gray-500 transition-colors">미드모터
                            라인업</button>
                    </div>

                    <div id="mobile-spec-applicable-models" class="flex flex-wrap justify-center gap-1.5 mb-6 px-4">
                        <!-- JS로 동적 렌더링 -->
                    </div>

                    <div class="grid grid-cols-2 gap-3 px-4">
                        <div id="mobile-lcd-btn"
                            class="bg-gray-900/80 p-4 rounded-xl border border-gray-800 cursor-pointer active:bg-gray-800"
                            onclick="openSpecModal('lcd')">
                            <i class="ph ph-monitor text-2xl text-brand-green mb-2"></i>
                            <h4 class="font-medium text-sm mb-1">LCD 컬러 계기판</h4>
                            <p class="text-[11px] text-gray-400 font-normal">자세히 보기 <i
                                    class="ph ph-caret-right inline"></i></p>
                        </div>
                        <div class="bg-gray-900/80 p-4 rounded-xl border border-gray-800 cursor-pointer active:bg-gray-800"
                            onclick="openSpecModal('brake')">
                            <i class="ph ph-disc text-2xl text-brand-green mb-2"></i>
                            <h4 class="font-medium text-sm mb-1">TEKTRO 유압식 브레이크</h4>
                            <p class="text-[11px] text-gray-400 font-normal">자세히 보기 <i
                                    class="ph ph-caret-right inline"></i></p>
                        </div>
                        <div class="bg-gray-900/80 p-4 rounded-xl border border-gray-800 cursor-pointer active:bg-gray-800"
                            onclick="openSpecModal('light')">
                            <i class="ph ph-lightbulb text-2xl text-brand-green mb-2"></i>
                            <h4 class="font-medium text-sm mb-1">전조등/후미등 통합 라이트 시스템</h4>
                            <p class="text-[11px] text-gray-400 font-normal">자세히 보기 <i
                                    class="ph ph-caret-right inline"></i></p>
                        </div>
                        <div class="bg-gray-900/80 p-4 rounded-xl border border-gray-800 cursor-pointer active:bg-gray-800"
                            onclick="openSpecModal('battery')">
                            <i class="ph ph-battery-high text-2xl text-brand-green mb-2"></i>
                            <h4 class="font-medium text-sm mb-1">대용량 배터리</h4>
                            <p class="text-[11px] text-gray-400 font-normal">자세히 보기 <i
                                    class="ph ph-caret-right inline"></i></p>
                        </div>
                        <div class="bg-gray-900/80 p-4 rounded-xl border border-gray-800 cursor-pointer active:bg-gray-800"
                            onclick="openSpecModal('suspension')">
                            <i class="ph ph-arrows-vertical text-2xl text-brand-green mb-2"></i>
                            <h4 class="font-medium text-sm mb-1">프론트 서스펜션</h4>
                            <p class="text-[11px] text-gray-400 font-normal">자세히 보기 <i
                                    class="ph ph-caret-right inline"></i></p>
                        </div>
                        <div id="mobile-wheel-btn"
                            class="bg-gray-900/80 p-4 rounded-xl border border-gray-800 cursor-pointer active:bg-gray-800"
                            onclick="openSpecModal('wheel')">
                            <i class="ph ph-circle-dashed text-2xl text-brand-green mb-2"></i>
                            <h4 class="font-medium text-sm mb-1">마그네슘 합금 휠</h4>
                            <p class="text-[11px] text-gray-400 font-normal">자세히 보기 <i
                                    class="ph ph-caret-right inline"></i></p>
                        </div>
                        <div id="mobile-motor-btn"
                            class="bg-gray-900/80 p-4 rounded-xl border border-gray-800 cursor-pointer active:bg-gray-800"
                            onclick="openSpecModal('motor')">
                            <i class="ph ph-engine text-2xl text-brand-green mb-2"></i>
                            <h4 class="font-medium text-sm mb-1">정격 500W 허브 모터</h4>
                            <p class="text-[11px] text-gray-400 font-normal">자세히 보기 <i
                                    class="ph ph-caret-right inline"></i></p>
                        </div>
                        <div id="mobile-gear-btn"
                            class="bg-gray-900/80 p-4 rounded-xl border border-gray-800 cursor-pointer active:bg-gray-800"
                            onclick="openSpecModal('gear_7')">
                            <i class="ph ph-gear text-2xl text-brand-green mb-2"></i>
                            <h4 class="font-medium text-sm mb-1">시마노 7단 기어</h4>
                            <p class="text-[11px] text-gray-400 font-normal">자세히 보기 <i
                                    class="ph ph-caret-right inline"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 05. 모델별 가격 Section -->
    <section id="pricing" class="py-24 bg-[#0a0a0a] border-t border-gray-900">
        <div class="container mx-auto px-6 max-w-6xl">
            <div class="text-center mb-12 sm:mb-16">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">
                    나에게 맞는 <span class="text-xtron-400">엑스트론</span> 찾기
                </h2>
                <p class="text-sm sm:text-lg text-gray-400 font-normal mb-8">24개월 무이자 혜택으로 부담 없이 시작하세요.</p>
            </div>

<!-- Tabs -->
            <div class="flex flex-wrap justify-center gap-2 sm:gap-3 mb-10 sm:mb-12 border-b border-gray-800 pb-4">
                
                <!-- 💡 [순서 변경 1빠!] 신제품 라인업 탭 -->
                <button type="button" onclick="changeTab('newArrival')" id="tab-newArrival" class="tab-btn px-4 sm:px-6 py-2 sm:py-3 font-medium text-base sm:text-lg border-b-2 border-transparent text-gray-500 hover:text-gray-300 transition-colors">
                    한정판 🚨
                </button>
                
                <button type="button" onclick="changeTab('megaweek')" id="tab-megaweek" class="tab-btn px-4 sm:px-6 py-2 sm:py-3 font-medium text-base sm:text-lg border-b-2 border-transparent text-gray-500 hover:text-gray-300 transition-colors flex items-center gap-1.5">
                    메가 데이 💡
                </button>

                <!-- 나머지 기존 탭들 -->
                <button type="button" onclick="changeTab('pro')" id="tab-pro" class="tab-btn px-4 sm:px-6 py-2 sm:py-3 font-medium text-base sm:text-lg border-b-2 border-transparent text-gray-500 hover:text-gray-300 transition-colors">PRO 시리즈</button>
                <button type="button" onclick="changeTab('gt')" id="tab-gt" class="tab-btn px-4 sm:px-6 py-2 sm:py-3 font-medium text-base sm:text-lg border-b-2 border-transparent text-gray-500 hover:text-gray-300 transition-colors">GT 시리즈</button>
                <button type="button" onclick="changeTab('lifestyle')" id="tab-lifestyle" class="tab-btn px-4 sm:px-6 py-2 sm:py-3 font-medium text-base sm:text-lg border-b-2 border-transparent text-gray-500 hover:text-gray-300 transition-colors">라이프스타일</button>
                <button type="button" onclick="changeTab('acc')" id="tab-acc" class="tab-btn px-4 sm:px-6 py-2 sm:py-3 font-medium text-base sm:text-lg border-b-2 border-transparent text-gray-500 hover:text-gray-300 transition-colors">액세서리</button>
            </div>

            <!-- Product Grid -->
            <div id="product-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8">
                <!-- JS로 동적 렌더링 -->
            </div>
        </div>
    </section>

    <!-- 06. FAQ Section -->
    <section class="py-24 bg-xtron-dark border-t border-gray-900">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">자주 묻는 질문</h2>
                <p class="text-gray-400 font-normal">고객님들이 가장 궁금해하시는 내용을 모았습니다.</p>
            </div>

    <!-- FAQ 13: 프로모션 및 사은품 유의사항 -->
                <div class="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700 mt-4">
                    <button class="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                        <span class="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
                            <span class="text-brand-green font-bold text-lg md:text-xl">Q.</span> 프로모션 및 사은품 관련 유의사항이 있나요?
                        </span>
                        <i class="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
                        <div class="pb-6 pt-1">
                            <div class="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
                                <span class="text-brand-blue font-bold text-lg md:text-xl">A.</span>
                                <div class="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep w-full">
                                    <ul class="space-y-3">
                                        <li class="flex items-start gap-2"><i class="ph-bold ph-check text-brand-green mt-1 shrink-0"></i> <span>본 프로모션은 한정 수량으로 진행되며, 재고 소진 시 예고 없이 조기 종료될 수 있습니다.</span></li>
                                        <li class="flex items-start gap-2"><i class="ph-bold ph-check text-brand-green mt-1 shrink-0"></i> <span>출고 일정은 제품 입고 및 물류 상황에 따라 일부 변경될 수 있습니다.</span></li>
                                        <li class="flex items-start gap-2"><i class="ph-bold ph-check text-brand-green mt-1 shrink-0"></i> <span>사은품과 추가 상품은 자전거 본품과 별도로 발송됩니다.</span></li>
                                        <li class="flex items-start gap-2"><i class="ph-bold ph-check text-brand-green mt-1 shrink-0"></i> <span><strong class="text-gray-200">PRO FAT LIMITED EDITION</strong>은 MEGA 배터리 무상 업그레이드 혜택이 적용되지 않습니다.</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 14: 메가 배터리 구매 및 호환 유의사항 -->
                <div class="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700 mt-4 border-l-4 border-l-[#c0fb0c]">
                    <button class="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                        <span class="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
                            <span class="text-[#c0fb0c] font-bold text-lg md:text-xl">Q.</span> 메가 배터리 단품 구매 시, 기존 자전거와 호환이 되나요?
                        </span>
                        <i class="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
                        <div class="pb-6 pt-1">
                            <div class="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
                                <span class="text-[#c0fb0c] font-bold text-lg md:text-xl">A.</span>
                                <div class="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep w-full">
                                    <p class="mb-4 text-gray-300">본 메가 배터리 단품은 <strong class="text-[#c0fb0c]">26년형 엑스트론 시리즈에 한하여</strong> 바로 장착 및 사용이 가능하며, 일부 제품은 호환이 불가합니다.</p>
                                    
                                    <div class="bg-[#111] border border-gray-700 rounded-lg p-4 space-y-3">
                                        <h5 class="text-white font-bold mb-2">📌 25년형 이하 및 기타 모델 구매 안내</h5>
                                        <ul class="space-y-2 text-[13px] sm:text-sm">
                                            <li class="flex items-start gap-2"><i class="ph-fill ph-warning-circle text-yellow-500 mt-1 shrink-0"></i> <span>25년형 이하 모델은 프레임 구조상 장착이 원천적으로 불가하거나 추가 부품(6핀 컨트롤러 등) 교체가 필요할 수 있습니다.</span></li>
                                            <li class="flex items-start gap-2"><i class="ph-fill ph-warning-circle text-yellow-500 mt-1 shrink-0"></i> <span>해당 연식의 모델을 소유하신 고객님은 <strong class="text-gray-200">결제 전 반드시 당사 네이버 톡톡 or 카카오톡 채널</strong>로 소유하신 모델 및 연식을 남겨 장착 가능 여부를 확인해 주시기 바랍니다.</span></li>
                                            <li class="flex items-start gap-2"><i class="ph-fill ph-warning-circle text-red-500 mt-1 shrink-0"></i> <span class="text-red-400">사전 확인 없이 임의 결제하신 후 장착 불가 사유로 반품하실 경우, <strong>왕복 배송비는 고객님 부담</strong>으로 처리되오니 각별한 주의를 부탁드립니다.</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="space-y-4">
                <!-- FAQ 1: 결제 -->
                <div
                    class="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700">
                    <button
                        class="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group"
                        onclick="toggleFaq(this)">
                        <span
                            class="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
                            <span class="text-brand-green font-bold text-lg md:text-xl">Q.</span> 무이자 24개월 할부는 어떻게
                            적용되나요?
                        </span>
                        <i
                            class="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
                    </button>
                    <div
                        class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
                        <div class="pb-6 pt-1">
                            <div class="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
                                <span class="text-brand-blue font-bold text-lg md:text-xl">A.</span>
                                <p
                                    class="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    구매하기 버튼을 눌러 링크페이에서 당사의 제휴 카드인 신한, 삼성, 현대, 롯데, 비씨, 우리로 선택 후 무이자 24개월을 선택해 주세요. (단, 농협/국민 카드는 최대 18개월)
                                    별도의 복잡한 서류 심사나 신용 조회 없이 기존에 쓰시던 카드 한도 내에서 즉시 승인되므로 아주 간편합니다. (체크 카드 및 법인 카드는 결제 대상에서 제외됩니다.)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 2: 배송 방법 -->
                <div
                    class="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700">
                    <button
                        class="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group"
                        onclick="toggleFaq(this)">
                        <span
                            class="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
                            <span class="text-brand-green font-bold text-lg md:text-xl">Q.</span> 배송은 어떻게 받을 수 있나요?
                        </span>
                        <i
                            class="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
                    </button>
                    <div
                        class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
                        <div class="pb-6 pt-1">
                            <div class="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
                                <span class="text-brand-blue font-bold text-lg md:text-xl">A.</span>
                                <p
                                    class="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    네, 엑스트론 전기자전거는 전문 미케닉의 검수를 거쳐 95% 이상 조립 상태로 안전하게 배송됩니다. 고객님께서는 수령 후 박스를 개봉하여 접혀있는
                                    핸들바의 각도를 조절하고, 페달만 장착해 주시면 즉시 주행이 가능합니다. (필요한 간이 공구는 스타터 킷에 포함되어 있습니다.)<br><br>
                                    <strong class="text-gray-300">100% 완조립은 본사에서 수령 또는 용달을 선택하실 수 있습니다.</strong><br>
                                    <span class="text-[12px] text-gray-500">※ 용달은 지역에 따라 추가 금액이 발생할 수 있습니다.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 3: 사은품 배송 -->
                <div
                    class="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700">
                    <button
                        class="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group"
                        onclick="toggleFaq(this)">
                        <span
                            class="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
                            <span class="text-brand-green font-bold text-lg md:text-xl">Q.</span> 사은품은 자전거와 함께 배송되나요?
                        </span>
                        <i
                            class="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
                    </button>
                    <div
                        class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
                        <div class="pb-6 pt-1">
                            <div class="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
                                <span class="text-brand-blue font-bold text-lg md:text-xl">A.</span>
                                <p
                                    class="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    네, 그렇습니다. 자전거 수령 시 바로 라이딩을 시작하실 수 있도록 '프리미엄 사은품 3종'과 '스타터 킷 4종'이 모두 자전거 본체와 함께 꼼꼼하게
                                    포장되어 합배송됩니다. (단, 헬멧 사이즈 등 일부 품목의 옵션 품절 시 부분 배송될 수 있으며, 이 경우 사전 안내를 드립니다.)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 4: 법적 요건 (면허) -->
                <div
                    class="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700">
                    <button
                        class="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group"
                        onclick="toggleFaq(this)">
                        <span
                            class="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
                            <span class="text-brand-green font-bold text-lg md:text-xl">Q.</span> 운전 면허가 있어야 하나요?
                        </span>
                        <i
                            class="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
                    </button>
                    <div
                        class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
                        <div class="pb-6 pt-1">
                            <div class="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
                                <span class="text-brand-blue font-bold text-lg md:text-xl">A.</span>
                                <p
                                    class="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    주행 방식에 따라 다릅니다! 페달을 굴릴 때만 모터가 도와주는 <strong>PAS (페달보조) 전용 방식</strong>은 만 13세 이상이라면
                                    누구나 <strong class="text-gray-300">면허 없이 탑승 가능</strong>합니다.<br><br>
                                    단, 오토바이처럼 레버를 당겨 나가는 <strong>스로틀 방식</strong> 또는 <strong>PAS/스로틀 겸용 방식</strong>의 제품을
                                    선택하셨다면 원동기 장치 자전거 이상에 해당하는 <strong class="text-brand-blue">운전면허증이 반드시
                                        필요</strong>합니다.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 5: 법적 요건 (자전거도로) -->
                <div
                    class="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700">
                    <button
                        class="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group"
                        onclick="toggleFaq(this)">
                        <span
                            class="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
                            <span class="text-brand-green font-bold text-lg md:text-xl">Q.</span> 자전거 전용 도로 주행이 가능한가요?
                        </span>
                        <i
                            class="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
                    </button>
                    <div
                        class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
                        <div class="pb-6 pt-1">
                            <div class="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
                                <span class="text-brand-blue font-bold text-lg md:text-xl">A.</span>
                                <p
                                    class="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    네, 물론입니다! 엑스트론 전체 제품은 국가 공인 KC 인증을 완벽하게 통과한 규격 제품으로, 속도 25km/h 제한 및 중량 요건을 충족하여
                                    합법적으로 자전거 전용 도로에서 안전하게 주행하실 수 있습니다.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 6: 안전 (배터리) -->
                <div
                    class="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700">
                    <button
                        class="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group"
                        onclick="toggleFaq(this)">
                        <span
                            class="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
                            <span class="text-brand-green font-bold text-lg md:text-xl">Q.</span> 배터리는 안전한가요?
                        </span>
                        <i
                            class="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
                    </button>
                    <div
                        class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
                        <div class="pb-6 pt-1">
                            <div class="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
                                <span class="text-brand-blue font-bold text-lg md:text-xl">A.</span>
                                <p
                                    class="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    KC 인증은 물론, 세계 최고 수준의 기술력을 자랑하는 삼성SDI 및 LG에너지솔루션 정품 배터리 셀을 사용하여 화재 위험을 차단하고 안정성과 품질을
                                    모두 완벽하게 확보하였습니다.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 7: 실용성 (여성 주행) -->
                <div
                    class="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700">
                    <button
                        class="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group"
                        onclick="toggleFaq(this)">
                        <span
                            class="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
                            <span class="text-brand-green font-bold text-lg md:text-xl">Q.</span> 여자가 타도 무겁거나 부담스럽지
                            않을까요?
                        </span>
                        <i
                            class="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
                    </button>
                    <div
                        class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
                        <div class="pb-6 pt-1">
                            <div class="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
                                <span class="text-brand-blue font-bold text-lg md:text-xl">A.</span>
                                <p
                                    class="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    전혀 걱정하지 않으셔도 됩니다! 특히 컴팩트한 사이즈의 <strong class="text-gray-200">16인치 전기자전거(프로미니, GT미니
                                        모델)</strong>는 승하차가 편하고 조향이 가벼워 여성분들이나 체구가 작으신 분들이 가장 많이 구매하고 실제로 매우 만족하며 주행하시는
                                    베스트셀러 모델입니다.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 8: 실용성 (유아 동승) -->
                <div
                    class="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700">
                    <button
                        class="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group"
                        onclick="toggleFaq(this)">
                        <span
                            class="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
                            <span class="text-brand-green font-bold text-lg md:text-xl">Q.</span> 뒷자리에 아이를 태울 수 있나요?
                        </span>
                        <i
                            class="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
                    </button>
                    <div
                        class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
                        <div class="pb-6 pt-1">
                            <div class="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
                                <span class="text-brand-blue font-bold text-lg md:text-xl">A.</span>
                                <p
                                    class="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    네! 전용 리어랙이 장착된 모델(프로 시리즈, GT 시리즈, 시티, 투어)에는 OGK 유아 안장 설치가 가능합니다. 안전을 위해 보통 4세 이하 영유아
                                    동승을 권장해 드립니다.<br><br>
                                    <span class="text-[12px] text-gray-500">※ 단, 성인 2명이 탑승하는 것은 안전상 위험하며 법적으로도 금지되어 있으니
                                        유의해 주시기 바랍니다.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 9: 실용성 (배터리 관리) -->
                <div
                    class="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700">
                    <button
                        class="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group"
                        onclick="toggleFaq(this)">
                        <span
                            class="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
                            <span class="text-brand-green font-bold text-lg md:text-xl">Q.</span> 배터리만 따로 분리해서 충전할 수
                            있나요?
                        </span>
                        <i
                            class="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
                    </button>
                    <div
                        class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
                        <div class="pb-6 pt-1">
                            <div class="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
                                <span class="text-brand-blue font-bold text-lg md:text-xl">A.</span>
                                <p
                                    class="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    물론입니다. 엑스트론의 모든 라인업은 탈부착형 배터리를 채택하고 있습니다. 동봉된 전용 열쇠를 사용해 자전거 프레임에서 배터리를 쉽게 분리할 수
                                    있으며, 무거운 자전거를 옮길 필요 없이 집이나 사무실의 220V 일반 콘센트로 스마트폰처럼 편리하게 충전하실 수 있습니다.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 10: 사후 관리 (A/S) -->
                <div
                    class="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700">
                    <button
                        class="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group"
                        onclick="toggleFaq(this)">
                        <span
                            class="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
                            <span class="text-brand-green font-bold text-lg md:text-xl">Q.</span> 무상 보증(A/S)은 어떻게 받을 수
                            있나요?
                        </span>
                        <i
                            class="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
                    </button>
                    <div
                        class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
                        <div class="pb-6 pt-1">
                            <div class="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
                                <span class="text-brand-blue font-bold text-lg md:text-xl">A.</span>
                                <p
                                    class="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    본사 또는 전국에 분포된 엑스트론 x 퀄리스포츠 공식 대리점을 통해 빠르고 확실한 A/S를 받으실 수 있습니다. 연장된 무상 보증(EXTEND) 혜택을
                                    온전히 누리시기 위해서는 구매 후 <strong class="text-brand-green font-medium">"반드시 정품등록"</strong>을
                                    진행해 주셔야 합니다.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
<!-- FAQ 7: ZOOM SP442 장착 가이드 -->
                <div class="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700 mt-4">
                    <button class="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                        <span class="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
                            <span class="text-brand-green font-bold text-lg md:text-xl">Q.</span> ZOOM SP442 서스펜션 싯포스트는 어떻게 장착하나요?
                        </span>
                        <i class="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
                        <div class="pb-6 pt-1">
                            <div class="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
                                <span class="text-brand-blue font-bold text-lg md:text-xl">A.</span>
                                <div class="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    <p class="mb-3">아래 링크를 통해 자세한 장착 동영상 가이드를 확인하실 수 있습니다.</p>
                                    <a href="https://www.youtube.com/watch?v=zHuhdGXOqbs" target="_blank" class="inline-flex items-center gap-1.5 text-brand-green hover:text-white font-bold transition-colors bg-brand-green/10 border border-brand-green/20 px-3 py-1.5 rounded-lg">
                                        ZOOM SP442 장착 영상 바로가기 <i class="ph ph-arrow-square-out text-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 8: OGK 유아 안장 장착 가이드 -->
                <div class="border border-gray-800 rounded-2xl bg-[#0a0a0a] overflow-hidden transition-colors hover:border-gray-700 mt-4">
                    <button class="faq-btn w-full px-5 md:px-8 py-5 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                        <span class="faq-title font-medium text-gray-200 text-sm md:text-base flex items-center gap-3 transition-colors group-hover:text-white">
                            <span class="text-brand-green font-bold text-lg md:text-xl">Q.</span> OGK 유아 안장은 어떻게 장착하나요?
                        </span>
                        <i class="ph ph-caret-down text-gray-500 text-xl faq-icon transition-transform duration-300 group-hover:text-white ml-4"></i>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 md:px-8">
                        <div class="pb-6 pt-1">
                            <div class="bg-gray-900/50 p-5 rounded-xl border border-gray-800 flex items-start gap-3">
                                <span class="text-brand-blue font-bold text-lg md:text-xl">A.</span>
                                <div class="text-gray-400 text-sm md:text-base font-normal leading-relaxed mt-0.5 break-keep">
                                    <p class="mb-3">아래 링크를 통해 자세한 장착 동영상 가이드를 확인하실 수 있습니다. 만약 투어 모델에 장착하실 예정이라면 전용 볼트가 필요하므로 구입 시 메세지에 남겨주세요</p>
                                    <a href="https://www.youtube.com/watch?v=dtwFCLac14U" target="_blank" class="inline-flex items-center gap-1.5 text-brand-green hover:text-white font-bold transition-colors bg-brand-green/10 border border-brand-green/20 px-3 py-1.5 rounded-lg">
                                        OGK 유아 안장 장착 영상 바로가기 <i class="ph ph-arrow-square-out text-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black py-12 border-t border-gray-900 text-center text-gray-600 text-xs sm:text-sm">
        <div class="container mx-auto px-6">
            <div class="flex justify-center mb-6">
                <img src="/assets/BATTERY_LOGO_SET/XxQ.png" alt="XTRON x QUALISPORTS"
                    class="h-4 sm:h-5 object-contain opacity-80 hover:opacity-70 transition-opacity">
            </div>
            <p class="mb-3 font-normal text-gray-500">세상을 더 넓게 EXTEND, 엑스트론 무이자 24개월 이벤트</p>
            <p class="font-normal opacity-80">&copy; 2026 XTRON. All rights reserved.</p>
        </div>
    </footer>

<!-- 🚀 상시 노출 구매하기 플로팅 버튼 -->
    <div id="floating-cta" class="fixed bottom-6 left-1/2 transform -translate-x-1/2 z-40 w-[90%] max-w-[340px] md:max-w-none md:w-auto pointer-events-none transition-all duration-500 opacity-100 translate-y-0">
        <!-- 💡 onclick 이벤트 추가 및 href 속성 수정 -->
        <a href="javascript:void(0);" onclick="scrollToPricingAndTab('newArrival')" class="pointer-events-auto flex items-center justify-center w-full px-8 md:px-10 py-3.5 md:py-4 bg-gradient-to-r from-brand-green to-brand-blue text-white font-extrabold text-base sm:text-lg md:text-xl rounded-full animate-cta-pulse hover:opacity-90 transition-all shadow-[0_0_20px_rgba(114,191,68,0.4)]">
            <span class="flex items-center gap-2 tracking-wide">
                한정판 구매하기 <i class="ph-bold ph-shopping-cart text-xl sm:text-2xl"></i>
            </span>
        </a>
    </div>
    <!-- 👇 [수정] 모바일/PC 모두 중앙 하단 스택형 플로팅 팝업 👇 -->
    <div id="floating-city-banner" class="fixed bottom-[84px] md:bottom-[96px] left-1/2 transform -translate-x-1/2 z-40 w-[90%] max-w-[340px] md:max-w-none md:w-auto transition-all duration-500 opacity-100 translate-y-0">
        <!-- 💡 [수정] 목적지를 'megaweek'로 변경 -->
        <button type="button" onclick="scrollToPricingAndTab('megaweek')" class="w-full bg-[#111111] border border-brand-green/40 shadow-[0_0_20px_rgba(114,191,68,0.4)] rounded-full py-2.5 px-4 md:py-3 md:px-6 flex items-center justify-between gap-4 hover:bg-gray-800 transition-colors group cursor-pointer">
            <div class="flex items-center gap-2.5 md:gap-4">
                <!-- 아이콘 -->
                <div class="w-8 h-8 md:w-10 md:h-10 bg-brand-green/10 rounded-full flex items-center justify-center shrink-0">
                    <i class="ph-fill ph-battery-plus text-brand-green text-lg md:text-xl animate-pulse"></i>
                </div>
                <!-- 텍스트 -->
                <div class="text-left">
                    <p class="text-[9px] md:text-[10px] text-brand-green font-bold tracking-wider mb-0.5">메가데이 특별</p>
                    <p class="text-[11px] sm:text-xs md:text-sm text-white font-medium whitespace-nowrap">메가 배터리 무상 업그레이드 제품 보기</p>
                </div>
            </div>
            <!-- 모바일/PC 공통 노출: 호버 시 화살표 이동 애니메이션 -->
            <div class="text-brand-green shrink-0 pl-1 md:pl-2 flex items-center">
                <i class="ph-bold ph-caret-right text-sm md:text-base group-hover:translate-x-1 transition-transform"></i>
            </div>
        </button>
    </div>

<!-- 🎁 [신규 추가] 사은품 반값 할인 카카오톡 문의 팝업 -->
    <div id="gift-modal" class="fixed inset-0 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-300 p-4 sm:p-6">
        <!-- 팝업 바깥쪽 어두운 배경 (클릭 시 닫힘) -->
        <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" onclick="closeGiftModal()"></div>
        
        <!-- 팝업 본체 -->
        <div class="relative bg-[#0a0a0a] border border-gray-800 rounded-3xl p-6 md:p-8 max-w-md w-full shadow-2xl transform scale-95 transition-transform duration-300 flex flex-col z-10" id="gift-modal-content">
            <!-- 닫기 버튼 -->
            <button onclick="closeGiftModal()" class="absolute top-4 right-4 text-gray-500 hover:text-white transition-colors bg-black/50 rounded-full p-1">
                <i class="ph ph-x text-2xl"></i>
            </button>
            
 <!-- 텍스트 내용 -->
            <div class="text-center mb-6 mt-2">
                <div class="w-16 h-16 bg-brand-green/10 rounded-full flex items-center justify-center mx-auto mb-4 border border-brand-green/20">
                    <i class="ph-fill ph-gift text-3xl text-brand-green"></i>
                </div>
                <h3 class="text-xl sm:text-2xl font-bold text-white mb-2">사은품 50% 할인 문의</h3>
                <p class="text-gray-400 text-sm md:text-base break-keep leading-relaxed mb-5">
                    배달 가방 또는 ZOOM SP442 중 <br><strong class="text-white">미선택하신 품목은 50% 반값 할인가</strong>에 <br>추가 구매가 가능합니다. <br><br>결제를 원하시면 아래 버튼을 눌러 <br>카카오톡 채널로 문의해 주세요!
                </p>
                
                <!-- 🚨 [신규 추가] 구매 확인 필수 경고 문구 -->
                <div class="bg-red-500/10 border border-red-500/30 rounded-lg p-3 text-left flex items-start gap-2 shadow-inner">
                    <i class="ph-fill ph-warning-circle text-red-500 text-lg mt-0.5 shrink-0"></i>
                    <p class="text-red-400 text-xs sm:text-sm font-medium break-keep leading-snug">
                        본 혜택은 엑스트론 자전거 구매 고객 한정입니다.<br>
                        <strong class="text-red-500 font-bold">반드시 자전거 구매(결제)를 먼저 완료하신 후,</strong><br>성함과 연락처를 카카오톡으로 남겨주세요.
                    </p>
                </div>
            </div>
            
            <!-- 카카오톡 연동 버튼 (링크 수정 필요) -->
            <a href="https://buyxtron.com/kakao_link" target="_blank" class="w-full flex items-center justify-center gap-2 bg-[#FEE500] hover:bg-[#FADA0A] text-[#191919] font-bold text-sm sm:text-base py-3.5 rounded-xl transition-colors shadow-lg">
                <i class="ph-fill ph-chat-circle text-xl"></i> 카카오톡으로 문의하기
            </a>
        </div>
    </div>

    <!-- 🎁 액세서리 특가 가격 안내 팝업 -->
<div id="acc-modal" class="fixed inset-0 z-[60] flex items-center justify-center hidden opacity-0 transition-opacity duration-300 p-4 sm:p-6">
    <!-- 팝업 바깥쪽 어두운 배경 (클릭 시 닫힘) -->
    <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" onclick="closeAccModal()"></div>
    
    <!-- 팝업 본체 -->
    <div class="relative bg-[#0a0a0a] border border-[#05e5f9]/30 rounded-3xl p-6 md:p-8 max-w-sm w-full shadow-[0_0_40px_rgba(5,229,249,0.2)] transform scale-95 transition-transform duration-300 flex flex-col z-10" id="acc-modal-content">
        <!-- 닫기 버튼 -->
        <button onclick="closeAccModal()" class="absolute top-4 right-4 text-gray-500 hover:text-white transition-colors bg-black/50 rounded-full p-1">
            <i class="ph ph-x text-2xl"></i>
        </button>
        
        <!-- 타이틀 -->
        <div class="text-center mb-6 mt-2">
            <div class="w-14 h-14 bg-[#05e5f9]/10 rounded-full flex items-center justify-center mx-auto mb-4 border border-[#05e5f9]/20">
                <i class="ph-fill ph-tag text-2xl text-[#05e5f9]"></i>
            </div>
            <h3 class="text-xl sm:text-2xl font-bold text-white mb-2">이벤트 한정 특가 안내</h3>
            <p class="text-gray-400 text-xs sm:text-sm break-keep leading-relaxed">
                프로 S, GT S, 프로, 시티, 투어 모델 구매 고객님께만 적용되는<br>파격적인 할인 혜택이며, 구매 완료 후 아래 카카오톡 채널로 문의 부탁드립니다.
            </p>
        </div>

        <!-- 가격표 리스트 -->
        <div class="space-y-3 mb-6">
            <!-- 배달 가방 -->
            <div class="bg-[#111111] border border-gray-800 rounded-xl p-4 flex justify-between items-center group hover:border-[#05e5f9]/50 transition-colors">
                <div>
                    <p class="text-white font-bold text-sm mb-1">배달 가방</p>
                    <p class="text-gray-500 line-through text-[11px] decoration-gray-600">정상가 150,000원</p>
                </div>
                <div class="text-right flex items-baseline gap-1">
                    <span class="text-[#c0fb0c] font-black text-2xl tracking-tighter">50,000</span>
                    <span class="text-gray-400 text-xs font-medium">원</span>
                </div>
            </div>
            
            <!-- ZOOM SP442 -->
            <div class="bg-[#111111] border border-gray-800 rounded-xl p-4 flex justify-between items-center group hover:border-[#05e5f9]/50 transition-colors">
                <div>
                    <p class="text-white font-bold text-sm mb-1">ZOOM SP442</p>
                    <p class="text-gray-500 line-through text-[11px] decoration-gray-600">정상가 125,000원</p>
                </div>
                <div class="text-right flex items-baseline gap-1">
                    <span class="text-[#05e5f9] font-black text-2xl tracking-tighter">70,000</span>
                    <span class="text-gray-400 text-xs font-medium">원</span>
                </div>
            </div>
        </div>
        
        <!-- 하단 확인 버튼 -->
        <a href="https://buyxtron.com/kakao_link" target="_blank" class="w-full flex items-center justify-center gap-2 bg-[#FEE500] hover:bg-[#FADA0A] text-[#191919] font-bold text-sm sm:text-base py-3.5 rounded-xl transition-colors shadow-lg">
            <i class="ph-fill ph-chat-circle text-xl"></i> 카카오톡으로 특가 구매 문의하기
        </a>
    </div>
</div>

    <!-- ✅ 스펙 팝업(Modal) (이미지 태그 활성화) -->
    <div id="spec-modal"
        class="fixed inset-0 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-300 p-4 sm:p-6">
        <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" onclick="closeSpecModal()"></div>
        <div class="relative bg-[#0a0a0a] border border-gray-800 rounded-3xl p-5 sm:p-6 md:p-8 max-w-4xl w-full shadow-2xl transform scale-95 transition-transform duration-300 flex flex-col max-h-[90vh] overflow-y-auto"
            id="spec-modal-content">
            <button onclick="closeSpecModal()"
                class="absolute top-3 right-3 sm:top-4 sm:right-4 md:top-6 md:right-6 text-gray-500 hover:text-white transition-colors z-10 bg-black/50 rounded-full p-1">
                <i class="ph ph-x text-2xl sm:text-3xl"></i>
            </button>

            <div class="flex flex-col md:flex-row gap-5 sm:gap-6 md:gap-8 items-center md:items-start mt-2">
                <div class="shrink-0 w-full sm:w-auto flex justify-center">
                    <!-- 실제 이미지가 들어갈 영역 -->
                    <div
                        class="w-[200px] h-[200px] sm:w-[250px] sm:h-[250px] md:w-[300px] md:h-[300px] rounded-2xl overflow-hidden border border-gray-800 bg-[#111] relative shrink-0">
                        <img id="modal-img" src="" alt="상세 스펙 이미지" class="w-full h-full object-cover">
                    </div>
                </div>

                <div class="flex-1 w-full text-left">
                    <div
                        class="inline-block bg-brand-green/10 text-brand-green px-2.5 sm:px-3 py-1 rounded-full text-[10px] sm:text-xs font-medium mb-3 sm:mb-4 border border-brand-green/20 tracking-wider">
                        PREMIUM DETAIL
                    </div>
                    <h3 id="modal-title" class="text-xl sm:text-2xl md:text-3xl font-semibold mb-3 sm:mb-5 text-white">
                        타이틀 로딩중</h3>
                    <div id="modal-desc"
                        class="text-gray-400 text-xs sm:text-sm md:text-base leading-loose font-normal space-y-2 sm:space-y-3">
                        <!-- JS 렌더링 -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript 로직 수정 부분 -->
    <script>

// --- 사은품 카카오톡 문의 팝업 제어 로직 ---
        function openGiftModal() {
            const modal = document.getElementById('gift-modal');
            const modalContent = document.getElementById('gift-modal-content');

            modal.classList.remove('hidden');
            // 부드러운 애니메이션을 위해 약간의 딜레이 적용
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalContent.classList.remove('scale-95');
                modalContent.classList.add('scale-100');
            }, 10);
        }

        function closeGiftModal() {
            const modal = document.getElementById('gift-modal');
            const modalContent = document.getElementById('gift-modal-content');

            modal.classList.add('opacity-0');
            modalContent.classList.remove('scale-100');
            modalContent.classList.add('scale-95');

            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        // --- 액세서리 특가 안내 팝업 제어 로직 ---
        function openAccModal() {
            const modal = document.getElementById('acc-modal');
            const modalContent = document.getElementById('acc-modal-content');

            modal.classList.remove('hidden');
            // 부드러운 애니메이션을 위해 약간의 딜레이 적용
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalContent.classList.remove('scale-95');
                modalContent.classList.add('scale-100');
            }, 10);
        }

        function closeAccModal() {
            const modal = document.getElementById('acc-modal');
            const modalContent = document.getElementById('acc-modal-content');

            modal.classList.add('opacity-0');
            modalContent.classList.remove('scale-100');
            modalContent.classList.add('scale-95');

            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        // --- 스펙 팝업(Modal) 데이터 (imgSrc 채움) ---
        const specDetails = {
            lcd: {
                title: "LCD 컬러 계기판",
                imgSrc: "/assets/SPEC/SPEC_LCD.jpg",
                desc: `
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>현재 속도, 배터리 잔량, 주행 거리 등 필수 정보를 한눈에 파악할 수 있는 고해상도 컬러 디스플레이입니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>직사광선이 내리쬐는 한낮에도 눈부심 없이 선명한 시인성을 자랑하며, 야간 백라이트 기능이 포함되어 있습니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>직관적인 버튼 인터페이스 설계로 주행 중에도 손쉽게 PAS(페달 어시스트) 단계를 변경할 수 있습니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>하단 버튼을 3초 이상 길게 누르면 자전거를 쉽게 끌고 갈 수 있는 '워킹 모드'와 일정한 속도를 유지하는 '크루즈 모드'가 활성화됩니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>강력한 도난 방지를 위한 전용 키박스가 기본 탑재되어, 물리적인 전용 키가 없으면 디스플레이와 모터 전원을 켤 수 없습니다.</p>
                `
            },
            brake: {
                title: "TEKTRO 유압식 브레이크",
                imgSrc: "/assets/SPEC/SPEC_TEKTRO.jpg",
                desc: `
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>세계적인 자전거 부품 전문 브랜드 TEKTRO의 고성능 유압식 디스크 브레이크 시스템을 채택했습니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>두 손가락의 적은 악력만으로도 빠르고 부드럽게 작동하여, 갑작스러운 돌발 상황에서도 라이더를 완벽하게 보호합니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>일반 기계식 브레이크 대비 제동력이 월등히 뛰어나며, 와이어 끊어짐 우려가 없어 유지보수가 매우 간편한 것이 특징입니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>비가 오거나 진흙이 묻은 젖은 노면 등 악천후 속에서도 제동 밀림 현상 없이 일정한 성능을 유지합니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>고속 주행 및 가파른 다운힐 코스에서도 불안감 없는 '칼같은 제동력'의 진수를 경험해 보세요.</p>
                `
            },
            light: {
                title: "통합 라이트 시스템",
                imgSrc: "/assets/SPEC/SPEC_LIGHT.jpg",
                desc: `
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>야간 라이딩의 필수품, 넓은 조사각과 강력한 밝기를 자랑하는 고휘도 LED 전조등을 전면에 장착했습니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>주행 환경에 맞춰 전조등의 상하 각도를 직관적으로 조절할 수 있어, 라이더가 원하는 최적의 시야를 안전하게 확보할 수 있습니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>후미등은 자동차와 동일한 2단계 시스템이 적용되었습니다. 계기판 라이트를 켜면 붉은빛이 상시 점등되어 내 위치를 알립니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>또한 전원만 켜져 있다면 주야간 상관없이 브레이크 레버를 잡을 때마다 더욱 강렬한 빛(브레이크등)을 발산하여 감속을 경고합니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>자전거 메인 배터리와 직접 연결되어 번거로운 개별 충전이 필요 없으며, 후방 추돌 사고로부터 라이더를 완벽하게 보호합니다.</p>
                `
            },
            battery: {
                title: "초고효율 대용량 배터리",
                imgSrc: "/assets/SPEC/SPEC_BATTERY.jpg",
                desc: `
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>라이더의 주행 목적에 맞춰 스탠다드(48V 20Ah) 또는 압도적인 용량의 메가 배터리(48V 28.5Ah) 중 선택할 수 있습니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>검증된 최상급 리튬이온 셀과 자체 탑재된 스마트 BMS(배터리 관리 시스템)가 과충전을 차단하여 언제나 안심하고 보관 가능합니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>완전 방전 상태에서 100% 완충까지 약 6시간 40분(20Ah 기준)이 소요되어, 퇴근 후 꽂아두면 다음 날 아침 완벽하게 준비됩니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>전용 열쇠로 잠금 해제 후 손쉽게 분리되는 탈부착형 구조로, 무거운 자전거를 실내로 들일 필요 없이 배터리만 간편하게 충전하세요.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>장거리 출퇴근, 주말 국토 종주, 잦은 배달 업무 등 배터리 스트레스가 없어야 하는 모든 목적을 든든하게 뒷받침합니다.</p>
<p class="text-[11px] sm:text-[12px] text-gray-500 mt-4 bg-white/5 inline-block px-3 py-1.5 rounded-lg"><i class="ph-fill ph-info text-gray-400 mr-1"></i>단, <strong>엑스트론 프로 S</strong> 모델은 48V 28.5Ah 배터리를 장착할 수 없습니다.</p>

                `
            },
            suspension: {
                title: "프론트 서스펜션 포크",
                imgSrc: "/assets/SPEC/SPEC_FRONT_SUSPENSION.jpg",
                desc: `
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>거친 노면의 충격을 부드럽고 확실하게 흡수해 주는 고성능 프론트 쇽업소버(서스펜션 포크)를 장착했습니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>도심 속 방지턱, 갈라진 아스팔트, 보도블럭 등 다양한 굴곡으로부터 라이더의 손목과 어깨로 전해지는 피로도를 획기적으로 줄입니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>뛰어난 댐핑(Damping) 작용으로 전체적인 승차감이 고급 세단처럼 대폭 향상되는 것을 즉각적으로 체감하실 수 있습니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>고속 주행 및 비포장도로 코너링 시 앞바퀴가 튀는 현상을 막고 접지력을 극대화하여 훨씬 안정적인 조향을 제공합니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>라이더의 체중과 주행 스타일에 맞춰 움직이는 최적화된 스프링 장력으로 쾌적한 장거리 주행을 약속합니다.</p>
                `
            },
            wheel: {
                title: "마그네슘 합금 휠 & 펑크 방지 타이어",
                imgSrc: "/assets/SPEC/SPEC_TIRE.jpg",
                desc: `
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>항공우주 산업에 사용되는 초경량, 고강성 마그네슘 합금 소재로 빚어낸 일체형 휠을 적용했습니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>와이어 스포크 휠과 달리 강한 충격에도 살대가 부러지지 않으며, 정기적인 장력 교정이 필요 없어 유지보수가 매우 간편합니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>공기 저항을 최소화하는 에어로다이나믹 디자인으로 구름성이 탁월하며, 엑스트론만의 스포티한 외관을 완성합니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>노면의 진동을 부드럽게 흡수하는 20 x 2.4인치의 두툼한 광폭 타이어를 기본 장착하여 안정적인 승차감을 제공합니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>타이어 내부에 강력한 펑크 방지(Anti-Puncture) 레이어가 삽입되어 있어 거친 도심이나 험로에서도 펑크 걱정이 없습니다.</p>
                    <p class="text-[11px] sm:text-[12px] text-gray-500 mt-4 bg-white/5 inline-block px-3 py-1.5 rounded-lg"><i class="ph-fill ph-info text-gray-400 mr-1"></i>단, 컴팩트 라인업인 <strong>프로미니</strong> 및 <strong>GT미니</strong> 모델에는 <strong>16 x 2.5인치 광폭 타이어</strong>가 장착됩니다.</p>
                `
            },
            motor: {
                title: "48V 정격 500W BLDC 허브 모터 (69N.m)",
                imgSrc: "/assets/SPEC/SPEC_HUB_MOTOR.jpg",
                desc: `
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>엑스트론의 심장, 48V 전압과 500W 정격 출력을 갖춘 고성능 후륜 구동 BLDC(Brushless DC) 허브 모터입니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>강력한 69N.m의 토크(Torque)를 상시 발휘하여, 가파른 경사각 25도(경사도 46.6%)의 험난한 오르막길도 거침없이 돌파합니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>모터 내부에 마찰을 일으키는 브러시가 없어 주행 소음이 매우 적고 내구성이 뛰어나며, 장기간 100% 성능을 유지합니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>페달을 반 바퀴만 굴려도 모터가 즉각 개입하는 뛰어난 응답성으로, 잦은 정차 후 재출발 시에도 무릎 부담 없이 경쾌하게 나아갑니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>무거운 짐을 싣거나 강한 맞바람이 부는 악조건 속에서도 흔들림이나 밀림 없는 꾸준하고 강력한 파워를 경험하세요.</p>
                    <p class="text-[11px] sm:text-[12px] text-gray-500 mt-4 bg-white/5 inline-block px-3 py-1.5 rounded-lg"><i class="ph-fill ph-info text-gray-400 mr-1"></i>최대 등판 능력(경사각 25도 / 경사도 46.6%)은 <strong>PAS 5단 및 페달링 동시 적용</strong> 시 기준입니다.</p>
                `
            },
            mid_motor: {
                title: "아난다 미드 드라이브 모터 (130N.m)",
                imgSrc: "/assets/SPEC/SPEC_MID_MOTOR.png",
                desc: `
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>자전거의 심장부인 크랭크(페달) 쪽에 위치하여 무게 중심을 완벽하게 분산시키는 최고급 미드 드라이브 모터입니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>기어 변속 시스템과 직접 연동되어, 적은 배터리 소모로도 뒷바퀴 허브 모터보다 훨씬 강력한 등판 능력을 발휘합니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>라이더가 페달을 밟는 힘(토크)을 정밀하게 감지하는 토크 센서가 내장되어, 이질감 없는 자연스러운 페달링을 선사합니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>뒷바퀴에 모터가 없어 타이어 펑크 수리나 휠 교체 등 정비가 일반 자전거처럼 매우 쉽고 간편합니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>험로 주행, 산악 지형, 가파른 언덕 등 극한의 조건에서 진가를 발휘하는 하이엔드 모터 시스템입니다.</p>
                `
            },
            ananda_lcd: {
                title: "아난다(ANANDA) 전용 스마트 계기판",
                imgSrc: "/assets/SPEC/SPEC_ANANDA.jpg",
                desc: `
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>아난다 미드 드라이브 모터 시스템과 완벽하게 호환되도록 설계된 전용 고해상도 스마트 디스플레이입니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>모터와 실시간으로 데이터를 주고받아 남은 주행 거리와 배터리 잔량, 페달링 케이던스 등을 더욱 정밀하게 화면에 띄워줍니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>햇빛이 강하게 내리쬐는 야외 환경에서도 뛰어난 시인성을 제공하며, 험로 주행 시에도 흔들림 없는 완벽한 고정력을 자랑합니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>인체공학적으로 설계된 일체형 조작 버튼으로 주행 중 시선을 빼앗기지 않고도 직관적으로 모터의 어시스트 단계를 제어할 수 있습니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>높은 수준의 방수/방진 등급을 만족하여 궂은 날씨나 예측 불가능한 아웃도어 환경 속에서도 에러 없이 안정적으로 작동합니다.</p>
                `
            },
            spoke_wheel: {
                title: "고강성 스포크 휠 & 펑크 방지 타이어",
                imgSrc: "/assets/SPEC/SPEC_SPOKE.jpg",
                desc: `
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>정통 자전거의 클래식한 매력과 실전 라이딩의 실용성을 동시에 갖춘 고강성 알루미늄 스포크 휠을 적용했습니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>수십 개의 스포크(살대)가 노면의 충격을 고르게 분산시켜 주어, 마그네슘 휠 대비 승차감이 매우 부드럽고 편안한 것이 특징입니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>전체적인 휠셋의 무게가 매우 가벼워 핸들링 조향이 한층 경쾌하며, 미드 모터의 폭발적인 토크 효율을 온전히 바닥으로 전달합니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>만약 강한 충격으로 휠에 손상이 오더라도 스포크 장력 교정이나 낱개 교체를 통해 빠르고 저렴하게 유지보수가 가능합니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>다양한 험로 지형에 유연하게 대응해야 하는 미드 드라이브 구동계의 특성과 가장 완벽한 밸런스를 이루는 최적의 휠 시스템입니다.</p>
                `
            },
            gear_7: {
                title: "시마노 투어니 7단 기어",
                imgSrc: "/assets/SPEC/SPEC_TOURNEY.jpg",
                desc: `
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>전 세계 자전거 부품의 글로벌 표준이자 신뢰의 대명사, 일본 시마노(SHIMANO)사의 정품 투어니 7단 변속 시스템을 장착했습니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>오르막길, 평지, 내리막길 등 시시각각 변하는 주행 환경과 라이더의 체력 상태에 맞춰 완벽하게 기어비를 최적화할 수 있습니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>손가락 하나만으로 가볍고 오차 없이 기어를 바꿀 수 있는 썸 시프터(Thumb 시프터) 레버가 적용되어 초보자도 다루기 쉽습니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>모터의 힘(PAS)과 기어 변속을 조화롭게 조합하면 힘 들이지 않고도 마치 프로 선수처럼 페달링 효율을 극대화할 수 있습니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>주행 중 예기치 못하게 배터리가 모두 소진되더라도, 7단의 다단 기어를 활용해 일반 자전거처럼 무리 없이 목적지까지 도착 가능합니다.</p>
                    <p class="text-[11px] sm:text-[12px] text-gray-500 mt-4 bg-white/5 inline-block px-3 py-1.5 rounded-lg"><i class="ph-fill ph-info text-gray-400 mr-1"></i>단, 컴팩트 라인업인 <strong>프로미니</strong> 및 <strong>자토바이 미니</strong> 모델에는 도심 주행에 최적화된 직관적이고 가벼운 <strong>싱글 기어(Single Speed)</strong>가 장착됩니다.</p>
                `
            },
            gear_9: {
                title: "시마노 소라(SORA) 9단 기어",
                imgSrc: "/assets/SPEC/SPEC_SORA.jpg",
                desc: `
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>로드 바이크급의 정밀하고 부드러운 변속감을 선사하는 시마노(SHIMANO) 소라(SORA) 9단 구동계를 탑재했습니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>더욱 촘촘해진 9개의 기어비로 평지 고속 주행부터 가파른 업힐까지 라이더의 케이던스(페달링 속도)를 일정하게 유지해 줍니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>미드 드라이브 모터의 강력한 토크를 변속 손실 없이 뒷바퀴로 확실하게 전달하여 동력 효율을 극대화하는 최적의 조합입니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>가볍고 견고한 알루미늄 소재와 녹슬지 않는 코팅 처리로 거친 아웃도어 환경에서도 잔고장 없이 오랜 수명을 자랑합니다.</p>
                    <p><i class="ph-fill ph-check-circle text-brand-green mr-1"></i>인체공학적인 래피드파이어 플러스(Rapidfire Plus) 변속 레버를 적용하여 주행 중 손가락 끝의 가벼운 터치만으로 즉각적인 변속이 가능합니다.</p>
                `
            }
        };

        function openSpecModal(id) {
            const data = specDetails[id];
            if (!data) return;

            document.getElementById('modal-title').innerText = data.title;
            document.getElementById('modal-desc').innerHTML = data.desc;

            // 이미지 src 반영
            const imgEl = document.getElementById('modal-img');
            imgEl.src = data.imgSrc;

            const modal = document.getElementById('spec-modal');
            const modalContent = document.getElementById('spec-modal-content');

            modal.classList.remove('hidden');
            void modal.offsetWidth;
            modal.classList.remove('opacity-0');
            modalContent.classList.remove('scale-95');
            modalContent.classList.add('scale-100');
        }

        // --- 스펙 갤러리 슬라이더 로직 ---
        let currentSpecSlide = 0;
        const totalSpecSlides = 2;
        const specModelNames = ["허브모터 라인업", "미드모터 라인업"];

        const specApplicableModels = [
            `<span class="bg-white/10 backdrop-blur-sm border border-white/20 text-gray-300 text-[10px] sm:text-[11px] px-2 sm:px-2.5 py-1 rounded-md font-medium tracking-wide">프로</span>
             <span class="bg-white/10 backdrop-blur-sm border border-white/20 text-gray-300 text-[10px] sm:text-[11px] px-2 sm:px-2.5 py-1 rounded-md font-medium tracking-wide">프로미니</span>
             <span class="bg-white/10 backdrop-blur-sm border border-white/20 text-gray-300 text-[10px] sm:text-[11px] px-2 sm:px-2.5 py-1 rounded-md font-medium tracking-wide">GT</span>
             <span class="bg-white/10 backdrop-blur-sm border border-white/20 text-gray-300 text-[10px] sm:text-[11px] px-2 sm:px-2.5 py-1 rounded-md font-medium tracking-wide">GT미니</span>
             <span class="bg-white/10 backdrop-blur-sm border border-white/20 text-gray-300 text-[10px] sm:text-[11px] px-2 sm:px-2.5 py-1 rounded-md font-medium tracking-wide">시티</span>
             <span class="bg-white/10 backdrop-blur-sm border border-white/20 text-gray-300 text-[10px] sm:text-[11px] px-2 sm:px-2.5 py-1 rounded-md font-medium tracking-wide">투어</span>
             <span class="bg-white/10 backdrop-blur-sm border border-white/20 text-gray-300 text-[10px] sm:text-[11px] px-2 sm:px-2.5 py-1 rounded-md font-medium tracking-wide">미니</span>`,
            `<span class="bg-brand-green/20 backdrop-blur-sm border border-brand-green/30 text-brand-green text-[10px] sm:text-[11px] px-2 sm:px-2.5 py-1 rounded-md font-medium tracking-wide">프로 S</span>
             <span class="bg-brand-green/20 backdrop-blur-sm border border-brand-green/30 text-brand-green text-[10px] sm:text-[11px] px-2 sm:px-2.5 py-1 rounded-md font-medium tracking-wide">GT S</span>`
        ];

        function moveSpecSlide(dir) {
            let newSlide = currentSpecSlide + dir;
            if (newSlide < 0) newSlide = totalSpecSlides - 1;
            if (newSlide >= totalSpecSlides) newSlide = 0;
            setSpecSlide(newSlide);
        }

        function setSpecSlide(index) {
            currentSpecSlide = index;
            const slider = document.getElementById('spec-slider');
            slider.style.transform = `translateX(-${index * 100}%)`;

            const dots = document.querySelectorAll('.spec-dot');
            dots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.remove('bg-gray-600');
                    dot.classList.add('bg-brand-green');
                } else {
                    dot.classList.remove('bg-brand-green');
                    dot.classList.add('bg-gray-600');
                }
            });

            document.getElementById('spec-model-name').innerText = specModelNames[index];
            document.getElementById('spec-applicable-models').innerHTML = specApplicableModels[index];

            const mobileTabs = document.querySelectorAll('.mobile-spec-tab');
            if (mobileTabs.length > 0) {
                const mobileModelsContainer = document.getElementById('mobile-spec-applicable-models');
                if (mobileModelsContainer) {
                    mobileModelsContainer.innerHTML = specApplicableModels[index];
                }

                mobileTabs.forEach((tab, i) => {
                    if (i === index) {
                        tab.classList.remove('text-gray-500', 'border-transparent');
                        tab.classList.add('text-brand-green', 'border-brand-green');
                    } else {
                        tab.classList.remove('text-brand-green', 'border-brand-green');
                        tab.classList.add('text-gray-500', 'border-transparent');
                    }
                });

                const mobileLcdBtn = document.getElementById('mobile-lcd-btn');
                const mobileWheelBtn = document.getElementById('mobile-wheel-btn');
                const mobileMotorBtn = document.getElementById('mobile-motor-btn');
                const mobileGearBtn = document.getElementById('mobile-gear-btn');

                if (index === 0) {
                    mobileLcdBtn.setAttribute('onclick', "openSpecModal('lcd')");
                    mobileLcdBtn.querySelector('h4').innerText = "LCD 컬러 계기판";

                    mobileWheelBtn.setAttribute('onclick', "openSpecModal('wheel')");
                    mobileWheelBtn.querySelector('h4').innerText = "마그네슘 합금 휠";

                    mobileMotorBtn.setAttribute('onclick', "openSpecModal('motor')");
                    mobileMotorBtn.querySelector('h4').innerText = "48V 정격 500W 허브모터";

                    mobileGearBtn.setAttribute('onclick', "openSpecModal('gear_7')");
                    mobileGearBtn.querySelector('h4').innerText = "시마노 7단 기어";
                } else {
                    mobileLcdBtn.setAttribute('onclick', "openSpecModal('ananda_lcd')");
                    mobileLcdBtn.querySelector('h4').innerText = "아난다 전용 계기판";

                    mobileWheelBtn.setAttribute('onclick', "openSpecModal('spoke_wheel')");
                    mobileWheelBtn.querySelector('h4').innerText = "스포크 휠";

                    mobileMotorBtn.setAttribute('onclick', "openSpecModal('mid_motor')");
                    mobileMotorBtn.querySelector('h4').innerText = "아난다 미드 모터 (130N.m)";

                    mobileGearBtn.setAttribute('onclick', "openSpecModal('gear_9')");
                    mobileGearBtn.querySelector('h4').innerText = "시마노 소라 9단 기어";
                }
            }
        }

        function closeSpecModal() {
            const modal = document.getElementById('spec-modal');
            const modalContent = document.getElementById('spec-modal-content');

            modal.classList.add('opacity-0');
            modalContent.classList.remove('scale-100');
            modalContent.classList.add('scale-95');

            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        // --- 배터리 섹션 로직 (이미지 교체 로직 추가) ---
        const batteryData = {
            standard: {
                desc: "출퇴근과 주말 레저를 완벽하게 커버. \n타사 최고가 모델에서나 볼 법한 대용량이 엑스트론에서는 '기본'입니다.",
                cell: `Powered by. <img src="/assets/BATTERY_LOGO_SET/SAMSUNG-SDI.png" alt="삼성 SDI" class="h-3 md:h-4 object-contain opacity-80">`,
                ah: "48V 20Ah",
                km: 154.9,
                width: "60%",
                colorClass: "bg-brand-blue",
                textColor: "text-brand-blue",
                imgSrc: "/assets/BATTERY_PACK/STANDARD_PACK.jpg",
                features: [
                    { icon: "ph-shield-check", title: "삼성 SDI 정품 INR21700G(Ver.B) 셀", desc: "세계 최고 수준의 효율과 내구성을 자랑하는 <br>삼성 리튬이온 셀을 아낌없이 사용했습니다." },
                    { icon: "ph-arrows-left-right", title: "손쉬운 배터리 관리", desc: "빠르고 간편하게 배터리를 탈착할 수 있어, <br>언제 어디서든 손쉽게 배터리 교체가 가능합니다." },
                    { icon: "ph-clock-countdown", title: "약 6시간 40분 완충", desc: "퇴근 후 꽂아두면 다음 날 아침 100% 준비 완료. <br>일상에 최적화된 충전 사이클." }
                ]
            },
            mega: {
                desc: "모두가 20Ah에 머물 때, Xtron은 28.5Ah로 나아갑니다. \n42% 용량 증가가 선사하는 멈추지 않는 라이딩!",
                cell: `Powered by. <img src="/assets/BATTERY_LOGO_SET/LG-Energy-Solution.png" alt="LG Energy Solution" class="h-3 md:h-4 object-contain opacity-80">`,
                ah: `48V 28.5Ah <img src="/assets/BATTERY_LOGO_SET/MEGA_LOGO.png" alt="MEGA" class="h-4 sm:h-5 md:h-8 object-contain">`,
                km: 230,
                width: "92%",
                colorClass: "bg-gradient-to-r from-brand-blue to-brand-green",
                textColor: "text-brand-green",
                imgSrc: "/assets/BATTERY_PACK/MEGA_PACK.jpg",
                features: [
                    { icon: "ph-battery-plus", title: "LG 에너지솔루션 INR21700-M58T 셀", desc: "극한의 환경에서도 일정한 전압을 유지하는 <br>LG의 하이엔드 배터리 셀 기술력이 집약되었습니다." },
                    { icon: "ph-lightning", title: "42% 압도적 용량 증가", desc: "기존 대비 약 1.4배 늘어난 짐승 용량으로 배달 대행, 국토 종주 등 장거리에 완벽 대응합니다." },
                    { icon: "ph-rocket", title: "고출력 롱래스팅 성능", desc: "가파른 오르막을 연속해서 주행해도 전압 강하 현상 없이 <br>처음부터 끝까지 강력한 토크를 뿜어냅니다." }
                ]
            }
        };

        function setBattery(type) {
            const data = batteryData[type];

            document.getElementById('battery-desc').innerText = data.desc;
            document.getElementById('cell-spec').innerHTML = data.cell;
            document.getElementById('ah-spec').innerHTML = data.ah;

            animateValue("km-text", parseFloat(document.getElementById('km-text').innerText) || 0, data.km, 1000);
            document.getElementById('km-text').className = `text-4xl md:text-6xl font-bold transition-all duration-500 ${data.textColor}`;

            const bar = document.getElementById('range-bar');
            bar.style.width = data.width;
            bar.className = `h-full rounded-full gauge-transition relative overflow-hidden ${data.colorClass}`;

            const toggleBg = document.getElementById('toggle-bg');
            const btnStd = document.getElementById('btn-std');
            const btnMega = document.getElementById('btn-mega');

            if (type === 'standard') {
                toggleBg.style.left = '4px';
                toggleBg.classList.remove('bg-brand-green');
                toggleBg.classList.add('bg-brand-blue');
                btnStd.classList.remove('text-gray-400');
                btnStd.classList.add('text-white');
                btnMega.classList.remove('text-white');
                btnMega.classList.add('text-gray-400');
            } else {
                toggleBg.style.left = 'calc(50% + 0px)';
                toggleBg.classList.remove('bg-brand-blue');
                toggleBg.classList.add('bg-brand-green');
                btnMega.classList.remove('text-gray-400');
                btnMega.classList.add('text-white');
                btnStd.classList.remove('text-white');
                btnStd.classList.add('text-gray-400');
            }

            const showcase = document.getElementById('battery-showcase');
            showcase.style.opacity = 0;

            setTimeout(() => {
                // 실제 이미지 경로 갈아끼우기
                document.getElementById('battery-img').src = data.imgSrc;

                const featureContainer = document.getElementById('battery-features');
                featureContainer.innerHTML = data.features.map((f) => `
                    <div class="bg-gray-900/40 border border-gray-800 rounded-2xl p-4 sm:p-5 transition-all duration-300">
                        <div class="flex items-start gap-3 sm:gap-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full flex items-center justify-center shrink-0 border border-gray-700 bg-gray-800">
                                <i class="ph-fill ${f.icon} text-xl sm:text-2xl ${type === 'mega' ? 'text-brand-green' : 'text-brand-blue'}"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-medium text-sm sm:text-base mb-1.5">${f.title}</h4>
                                <p class="text-gray-400 text-xs sm:text-sm font-normal leading-relaxed break-keep">${f.desc}</p>
                            </div>
                        </div>
                    </div>
                `).join('');

                showcase.style.opacity = 1;
            }, 300);
        }

        function animateValue(id, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const easeProgress = 1 - Math.pow(1 - progress, 4);
                const currentVal = (progress * (end - start) + start).toFixed(1);
                document.getElementById(id).innerHTML = currentVal;
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                } else {
                    document.getElementById(id).innerHTML = end.toFixed(1);
                }
            };
            window.requestAnimationFrame(step);
        }

        // --- 가격/모델 섹션 로직 ---

        // 💡 [수정 포인트] 각 제품별 링크, 제품 이미지, 시리즈 로고 변경 방법
        // 1. url: "..." -> 구매하기 버튼 클릭 시 이동할 실제 상품 페이지 주소를 넣으세요.
        // 2. imgSrc: "..." -> 각 자전거 제품의 측면 누끼 이미지 주소를 넣으세요.
        // 3. logo: "..." -> 카드 내부에 들어가는 시리즈 로고 이미지 주소를 넣으세요. (예: PRO, GT, CITY 등)

const products = {
    // 👇 [신규 추가] 메가 위크 특별 탭 (5종 - 가로 스와이프 슬라이더 적용 대상)
    megaweek: [
        { 
            name: "엑스트론 프로 S", 
            url: "https://buyxtron.com/pro_s", 
            imgSrc: "/assets/PRODUCT_SET/PRODUCT_PROS.png", 
            logo: "/assets/PRODUCT_LOGO_SET/PROS_LOGO.png", 
            desc: "130N.m의 강력한 토크 <br>퍼포먼스의 정점!", 
            basePrice: 2130000, 
            hasMega: true, 
            megaPrice: 2130000, 
            tag: "BEST", 
            colors: ['#111111', '#808080', '#ffffff'] 
        },
        { 
            name: "엑스트론 GT S", 
            url: "https://buyxtron.com/gt_s", 
            imgSrc: "/assets/PRODUCT_SET/PRODUCT_GTS.png", 
            logo: "/assets/PRODUCT_LOGO_SET/GTS_LOGO.png", 
            desc: "어떤 험로도 거침없이 돌파하는 힘! <br>메가 배터리로 더 멀리!", 
            basePrice: 2130000, 
            hasMega: true, 
            megaPrice: 2130000, 
            tag: "NEW", 
            colors: ['#111111', '#808080', '#ffffff'], 
            isSoldOut: false 
        },
        { 
            name: "엑스트론 프로", 
            url: "https://buyxtron.com/pro", 
            imgSrc: "/assets/PRODUCT_SET/PRODUCT_PRO.png", 
            logo: "/assets/PRODUCT_LOGO_SET/PRO_LOGO.png", 
            desc: "가장 믿음직한 선택! <br>엑스트론 최고의 베스트셀러", 
            basePrice: 1690000, 
            hasMega: true, 
            megaPrice: 1690000, 
            colors: ['#111111', '#808080', '#ffffff'], 
            isSoldOut: false 
        },
        { 
            name: "엑스트론 GT", 
            url: "https://buyxtron.com/gt", 
            imgSrc: "/assets/PRODUCT_SET/PRODUCT_GT.png", 
            logo: "/assets/PRODUCT_LOGO_SET/GT_LOGO.png", 
            desc: "일체형 바디의 정교함 <br>기본에 충실한 완성도", 
            basePrice: 1690000, 
            hasMega: true, 
            megaPrice: 1690000, 
            colors: ['#111111', '#808080', '#ffffff'], 
            isSoldOut: false
        },
        { 
            name: "엑스트론 시티", 
            url: "https://buyxtron.com/city", 
            imgSrc: "/assets/PRODUCT_SET/PRODUCT_CITY.png", 
            logo: "/assets/PRODUCT_LOGO_SET/CITY_LOGO.png?v=2", 
            desc: "도심에서 가장 자연스러운 <br>실용과 스타일의 완벽 균형", 
            basePrice: 1640000, 
            hasMega: true, 
            megaPrice: 1640000, 
            colors: ['#111111', '#808080'] 
        },
        { 
            name: "엑스트론 투어", 
            url: "https://buyxtron.com/tour", 
            imgSrc: "/assets/PRODUCT_SET/PRODUCT_TOUR.png", 
            logo: "/assets/PRODUCT_LOGO_SET/TOUR_LOGO.png", 
            desc: "더 멀리 더 여유롭게 <br>확장성 높은 라이딩 파트너", 
            basePrice: 1690000, 
            hasMega: true, 
            megaPrice: 1690000, 
            colors: ['#111111', '#808080'], 
            isPreOrder: false 
        }
    ],

    // 👇 [신규 추가] 신제품 라인업 (배터리 옵션별로 개별 분리하여 결제 링크를 다르게 세팅)
    newArrival: [
        { 
            name: "엑스트론 프로 <br>팻 리미티드 에디션 (20Ah)", 
            batteryLabel: "48V 20Ah", 
            url: "https://buyxtron.com/pro_fat_20",
            imgSrc: "/assets/PRODUCT_SET/PRODUCT_FLE_20.png", 
            logo: "/assets/PRODUCT_LOGO_SET/PRO_FLE_LOGO2.png", 
            desc: "엑스트론 프로가 제시하는 승차감의 재정의", 
            originalPrice: 1850000,
            basePrice: 1690000, 
            hasMega: false,
            colors: ['#111111', '#808080'] 
        },
        { 
            name: "엑스트론 프로 <br>팻 리미티드 에디션 (MEGA)", 
            batteryLabel: "48V 28.5Ah (MEGA)", 
            url: "https://buyxtron.com/pro_fat_285",
            imgSrc: "/assets/PRODUCT_SET/PRODUCT_FLE_28.5.png", 
            logo: "/assets/PRODUCT_LOGO_SET/PRO_FLE_LOGO2.png", 
            desc: "더 멀리, 더 강력하게! <br>28.5Ah MEGA 배터리로 여유로운 라이딩", 
            originalPrice: 1950000,
            basePrice: 1790000, 
            hasMega: false,
            colors: ['#111111', '#808080'] 
        },
        { 
            name: "엑스트론 프로 <br>팻 리미티드 에디션<br><strong class='text-[#c0fb0c]'>(20Ah+20Ah)</strong>", 
            batteryLabel: "48V 20Ah+20Ah", 
            url: "https://buyxtron.com/pro_fat_20+20",
            imgSrc: "/assets/PRODUCT_SET/PRODUCT_FLE_20+20.png", 
            logo: "/assets/PRODUCT_LOGO_SET/PRO_FLE_LOGO2.png", 
            desc: "끝없는 주행거리의 완성 <br>20Ah + 20Ah로 더 멀리! 더 오래!", 
            originalPrice: 2640000,
            basePrice: 1990000, 
            hasMega: false,
            colors: ['#111111', '#808080'] 
        }
    ],

    // 🟢 아래는 보내주신 기존 데이터 완벽 보존
    pro: [
        { 
            name: "엑스트론 프로 S", 
            url: "https://buyxtron.com/pro_s", 
            imgSrc: "/assets/PRODUCT_SET/PRODUCT_PROS.png", 
            logo: "/assets/PRODUCT_LOGO_SET/PROS_LOGO.png", 
            desc: "130N.m의 강력한 토크 <br>퍼포먼스의 정점!", 
            basePrice: 2130000, 
            hasMega: true, 
            megaPrice: 2130000, 
            tag: "BEST", 
            colors: ['#111111', '#808080', '#ffffff'] 
        },
        { 
            name: "엑스트론 프로", 
            url: "https://buyxtron.com/pro", 
            imgSrc: "/assets/PRODUCT_SET/PRODUCT_PRO.png", 
            logo: "/assets/PRODUCT_LOGO_SET/PRO_LOGO.png", 
            desc: "가장 믿음직한 선택! <br>엑스트론 최고의 베스트셀러", 
            basePrice: 1690000, 
            hasMega: true, 
            megaPrice: 1690000, 
            colors: ['#111111', '#808080', '#ffffff'], 
            isSoldOut: false
        },
        { 
            name: "엑스트론 프로미니", 
            url: "https://s.tosspayments.com/BnY3pJ4AZqj", 
            imgSrc: "/assets/PRODUCT_SET/PRODUCT_PRO_MINI.png", 
            logo: "/assets/PRODUCT_LOGO_SET/PRO_MINI_LOGO.png", 
            desc: "작지만 강한 성능 <br>도심형 컴팩트 라이딩", 
            basePrice: 1390000, 
            hasMega: true, 
            megaPrice: 1490000, 
            colors: ['#111111', '#808080', '#ffffff', '#E6D5B8'], 
            isPreOrder: false 
        }
    ],
    
    gt: [
        { 
            name: "엑스트론 GT S", 
            url: "https://buyxtron.com/gt_s", 
            imgSrc: "/assets/PRODUCT_SET/PRODUCT_GTS.png", 
            logo: "/assets/PRODUCT_LOGO_SET/GTS_LOGO.png", 
            desc: "어떤 험로도 거침없이 돌파하는 힘! <br>메가 배터리로 더 멀리!", 
            basePrice: 2130000, 
            hasMega: true, 
            megaPrice: 2130000, 
            tag: "NEW", 
            colors: ['#111111', '#808080', '#ffffff'], 
            isSoldOut: false 
        },
        { 
            name: "엑스트론 GT", 
            url: "https://buyxtron.com/gt", 
            imgSrc: "/assets/PRODUCT_SET/PRODUCT_GT.png", 
            logo: "/assets/PRODUCT_LOGO_SET/GT_LOGO.png", 
            desc: "일체형 바디의 정교함 <br>기본에 충실한 완성도", 
            basePrice: 1690000, 
            hasMega: true, 
            megaPrice: 1690000, 
            colors: ['#111111', '#808080', '#ffffff'], 
            isSoldOut: false
        },
    ],
    
    lifestyle: [
        { 
            name: "엑스트론 시티", 
            url: "https://buyxtron.com/city", 
            imgSrc: "/assets/PRODUCT_SET/PRODUCT_CITY.png", 
            logo: "/assets/PRODUCT_LOGO_SET/CITY_LOGO.png?v=2", 
            desc: "도심에서 가장 자연스러운 <br>실용과 스타일의 완벽 균형", 
            basePrice: 1640000, 
            hasMega: true, 
            megaPrice: 1640000, 
            colors: ['#111111', '#808080'] 
        },
        { 
            name: "엑스트론 투어", 
            url: "https://buyxtron.com/tour", 
            imgSrc: "/assets/PRODUCT_SET/PRODUCT_TOUR.png", 
            logo: "/assets/PRODUCT_LOGO_SET/TOUR_LOGO.png", 
            desc: "더 멀리 더 여유롭게 <br>확장성 높은 라이딩 파트너", 
            basePrice: 1690000, 
            hasMega: true, 
            megaPrice: 1690000, 
            colors: ['#111111', '#808080'], 
            isPreOrder: false 
        }
    ],

acc: [
        { 
            name: "추가 배터리 브라켓", 
            url: "https://buy.tosspayments.com/products/AJBoFjY44c", 
            imgSrc: "/assets/PREMIUM_SET/BRACKET.png", 
            desc: "추가 배터리 장착을 위한<br>필수 전용 브라켓", 
            basePrice: 20000, 
            isAcc: true 
        },
        { 
            name: "MEGA 배터리 단품", 
            url: "https://buy.tosspayments.com/products/PDBoFyR-6M", 
            imgSrc: "/assets/EVENT/MEGA_SINGLE.png", 
            desc: "48V 28.5Ah의 역대급 용량!<br>1회 충전으로 무려 230km 주행 가능!<br>(단, 프로 S, PAS 1단 기준)", 
            originalPrice: 890000, 
            basePrice: 560000, 
            isAcc: true 
        },
        { 
            name: "엑스트론 x 퀄리스포츠<br>배달 가방", 
            url: "https://buy.tosspayments.com/products/hBBoFjKNSI", 
            imgSrc: "/assets/PREMIUM_SET/DELI_BAG.png", 
            desc: "넉넉한 수납공간과 뛰어난 보온/보냉 효과!<br>배달 라이더라면 필수!", 
            originalPrice: 150000, 
            basePrice: 80000, 
            isAcc: true 
        },
        { 
            name: "ZOOM SP442", 
            url: "https://s.tosspayments.com/BntspLv4tAd", 
            imgSrc: "/assets/PREMIUM_SET/SUSPENSION.png", 
            desc: "프리미엄 승차감을 위한<br>서스펜션 싯포스트", 
            originalPrice: 155000, 
            basePrice: 125000, 
            isAcc: true 
        },
        { 
            name: "에어버스터 전동 펌프", 
            url: "https://buy.tosspayments.com/products/GIBoFjdMlY", 
            imgSrc: "/assets/PREMIUM_SET/AIR-PUMP.png", 
            desc: "타사 대비 2배 더 길어진 호스 길이로<br>활용도 MAX", 
            originalPrice: 88000, 
            basePrice: 58000, 
            isAcc: true 
        },
        { 
            name: "썬투어 싯포스트", 
            url: "https://s.tosspayments.com/Bntu2-I8POg", 
            imgSrc: "/assets/PREMIUM_SET/Suntour.png", 
            desc: "최고급 서스펜션으로<br>궁극의 편안함 제공", 
            originalPrice: 185000, 
            basePrice: 155000, 
            isAcc: true 
        },
        { 
            name: "OGK 포폴라", 
            url: "https://s.tosspayments.com/Bntu2uA8ozz", 
            imgSrc: "/assets/PREMIUM_SET/Popola.png", 
            desc: "아이와 함께하는<br>안전한 라이딩의 시작", 
            originalPrice: 130000, 
            basePrice: 115000, 
            isAcc: true 
        },
        { 
            name: "OGK 포폴라모어", 
            url: "https://s.tosspayments.com/Bntu249EhrU", 
            imgSrc: "/assets/PREMIUM_SET/Popola-More.png", 
            desc: "더욱 업그레이드된<br>프리미엄 유아안장", 
            originalPrice: 200000, 
            basePrice: 175000, 
            isAcc: true 
        }
    ]
};
            function formatNumber(num) {
            return Math.floor(num).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

function selectBatteryOption(btn, category, index, price, origPrice) {
            const container = btn.parentElement;
            container.querySelectorAll('button').forEach(b => {
                b.classList.remove('bg-gray-700', 'text-white', 'text-brand-green');
                b.classList.add('bg-transparent', 'text-gray-500');
            });
            
            // 무상 변경 버튼 클릭 시 특별 텍스트 컬러 유지
            if(btn.innerText.includes('무상 변경')) {
                btn.classList.remove('bg-transparent', 'text-gray-500');
                btn.classList.add('bg-gray-700', 'text-brand-green');
            } else {
                btn.classList.remove('bg-transparent', 'text-gray-500');
                btn.classList.add('bg-gray-700', 'text-white');
            }

            const priceEl = document.getElementById(`price-${category}-${index}`);
            const monthlyEl = document.getElementById(`monthly-${category}-${index}`);
            const origPriceEl = document.getElementById(`orig-price-${category}-${index}`);

            // 👇 [버그 해결] 해당 화면 요소가 존재할 때만 업데이트 하도록(if문) 안전 장치 추가
            if (priceEl) {
                priceEl.innerText = formatNumber(price) + "원";
            }
            
            if (monthlyEl) {
                monthlyEl.innerText = formatNumber(price / 24);
            }
            
            // 정상가(취소선) 동적 업데이트
            if (origPriceEl && origPrice) {
                origPriceEl.innerText = formatNumber(origPrice) + "원";
            }
        }
function renderProducts(category) {
            const container = document.getElementById('product-container');
            if(!container) return; 
            container.innerHTML = '';

            if (!products[category]) return;

            products[category].forEach((item, index) => {
                
                const promoModels = ["엑스트론 시티", "엑스트론 프로", "엑스트론 투어", "엑스트론 프로 S", "엑스트론 GT S", "엑스트론 GT"];
                const isMegaPromo = promoModels.includes(item.name);

                let tagHtml = '';
                if (isMegaPromo) {
                    tagHtml = `<div class="absolute top-4 right-4 bg-gradient-to-r from-brand-green to-brand-blue text-white text-[10px] sm:text-xs font-bold px-3 py-1.5 rounded-full shadow-[0_0_15px_rgba(114,191,68,0.5)] tracking-wide z-20 animate-pulse flex items-center gap-1.5"><i class="ph-fill ph-gift text-sm"></i> MEGA 무상 업그레이드</div>`;
                } else if (item.hasMega) {
                    tagHtml = `<div class="absolute top-4 right-4 bg-brand-green text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg shadow-brand-green/20 tracking-wider z-20">MEGA</div>`;
                }
                
                let giftBadge = ''; 
                if (['엑스트론 미니'].includes(item.name)) {
                    giftBadge = `<div class="absolute top-4 left-4 bg-brand-blue text-white text-[10px] sm:text-xs font-regular px-2 py-1 rounded-md shadow-lg z-20 flex items-center gap-1"><i class="ph-fill ph-gift text-brand-green"></i>리어랙 증정</div>`;
                }

                let batteryOptions = ''; 
                if (!item.isAcc) {
                   if (item.batteryLabel) {
                    batteryOptions = `
                        <div class="flex gap-1 mb-4 sm:mb-5 bg-gray-900 border border-[#c0fb0c]/30 p-1 rounded-lg shadow-[0_0_10px_rgba(255,77,0,0.05)]">
                            <div class="flex-1 py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold rounded-md bg-[#c0fb0c]/10 text-[#c0fb0c] text-center cursor-default tracking-wider">
                                ${item.batteryLabel}
                            </div>
                        </div>
                    `;
                }
                    else if (isMegaPromo) {
                        const originalMegaPrice = item.basePrice + 100000;
                        batteryOptions = `
                            <div class="flex gap-1 mb-4 sm:mb-5 bg-gray-900 border border-[#c0fb0c]/40 p-1 rounded-lg shadow-[0_0_10px_rgba(255,77,0,0.15)] relative overflow-hidden">
                                <div class="absolute inset-0 bg-[#c0fb0c]/5 z-0"></div>
                                <button onclick="selectBatteryOption(this, '${category}', ${index}, ${item.basePrice}, ${item.basePrice})" class="flex-1 py-1.5 sm:py-2 text-[10px] sm:text-xs font-medium rounded-md bg-gray-700 text-white transition-colors relative z-10">48V 20Ah</button>
                                
                                <button onclick="selectBatteryOption(this, '${category}', ${index}, ${item.megaPrice}, ${originalMegaPrice})" class="flex-1 py-1 text-[10px] sm:text-xs font-bold rounded-md bg-transparent text-[#c0fb0c] hover:text-white transition-colors flex flex-col items-center justify-center relative z-10 leading-tight">
                                    <span class="flex items-center gap-1">48V 28.5Ah <i class="ph-fill ph-lightning text-[#c0fb0c]"></i></span>
                                    <span class="text-[9px] font-medium mt-0.5 opacity-90">(무상 변경)</span>
                                </button>
                            </div>
                        `;
                    } else if (item.hasMega) {
                        batteryOptions = `
                            <div class="flex gap-1 mb-4 sm:mb-5 bg-gray-900 border border-gray-800 p-1 rounded-lg">
                                <button onclick="selectBatteryOption(this, '${category}', ${index}, ${item.basePrice}, ${item.basePrice})" class="flex-1 py-1.5 sm:py-2 text-[10px] sm:text-xs font-medium rounded-md bg-gray-700 text-white transition-colors">48V 20Ah</button>
                                <button onclick="selectBatteryOption(this, '${category}', ${index}, ${item.megaPrice}, ${item.megaPrice})" class="flex-1 py-1.5 sm:py-2 text-[10px] sm:text-xs font-medium rounded-md bg-transparent text-[#c0fb0c] hover:text-white transition-colors flex items-center justify-center gap-1">
                                    48V 28.5Ah <i class="ph-fill ph-lightning text-brand-green"></i>
                                </button>
                            </div>
                        `;
                    } else {
                        batteryOptions = `
                            <div class="flex gap-1 mb-4 sm:mb-5 bg-gray-900 border border-gray-800 p-1 rounded-lg">
                                <div class="flex-1 py-1.5 sm:py-2 text-[10px] sm:text-xs font-medium rounded-md bg-gray-700 text-white text-center cursor-default tracking-wide">48V 20Ah (기본)</div>
                            </div>
                        `;
                    }
                }

                const colorDots = (item.colors || []).map(color =>
                    `<div class="w-3 h-3 sm:w-3.5 sm:h-3.5 rounded-full border border-gray-600 shadow-inner" style="background-color: ${color};"></div>`
                ).join('');

                const colorContainerHtml = (!item.isAcc && item.colors) ? `
                    <div class="absolute bottom-3 left-4 flex gap-1 sm:gap-1.5 z-20 bg-black/40 backdrop-blur-sm px-2 py-1.5 rounded-full">
                        ${colorDots}
                    </div>
                ` : '';

                const productLogoHtml = item.logo ? `<img src="${item.logo}" alt="시리즈 로고" class="h-3 sm:h-4 md:h-5 object-contain mb-2 sm:mb-2.5 opacity-90 group-hover:opacity-100 transition-opacity">` : '';

                // 💡 [핵심] 가격표 노출 로직 (3단계 분기점)
                let priceSectionHtml = '';
                
if (item.isAcc) {
                    // 1. 기존 액세서리 로직 (할인 특가 적용 여부에 따라 분기)
                    if (item.originalPrice) {
                        // 정상가(originalPrice)가 있는 경우: 기존 할인 템플릿 노출 ('할인가' 글자 제거)
                        priceSectionHtml = `
                            <div class="mb-5 sm:mb-6 border-t border-gray-800 pt-5 sm:pt-6 mt-auto">
                                <div class="flex justify-end items-center mb-1.5 gap-2">
                                    <span class="text-gray-500 text-[10px] sm:text-xs font-normal">정상가</span>
                                    <span class="text-gray-400 text-[10px] sm:text-xs font-medium line-through decoration-gray-500">${formatNumber(item.originalPrice)}원</span>
                                </div>
                                <div class="flex justify-between items-end">
                                    <span class="text-brand-green font-medium bg-brand-green/10 border border-brand-green/20 px-2 py-1.5 rounded text-[10px] tracking-wider mb-1 whitespace-nowrap">할인 특가</span>
                                    <div class="text-right flex items-baseline gap-0.5 mt-[-2px]">
                                        <span id="price-${category}-${index}" class="text-3xl sm:text-4xl font-bold text-white tracking-tighter">${formatNumber(item.basePrice)}</span>
                                        <span class="text-xs sm:text-sm text-gray-400 font-normal">원</span>
                                    </div>
                                </div>
                            </div>
                        `;
                    } else {
                        // 정상가가 없는 경우 (보조 배터리 브라켓 등): 심플한 단일 가격 노출
                        priceSectionHtml = `
                            <div class="mb-5 sm:mb-6 border-t border-gray-800 pt-5 sm:pt-6 mt-auto flex justify-between items-end">
                                <span class="text-gray-400 font-medium text-[10px] sm:text-[11px] tracking-wider mb-1">판매가</span>
                                <div class="text-right flex items-baseline gap-0.5">
                                    <span id="price-${category}-${index}" class="text-3xl sm:text-4xl font-bold text-white tracking-tighter">${formatNumber(item.basePrice)}</span>
                                    <span class="text-xs sm:text-sm text-gray-400 font-normal">원</span>
                                </div>
                            </div>
                        `;
                    }
                } else if (item.originalPrice) {
                    // 2. 💡 [신규 추가] 정상가 + 이벤트가 + 할부금 (신제품 3단 콤보 전용)
                    priceSectionHtml = `
                        <div class="mb-5 sm:mb-6 border-t border-gray-800 pt-4 sm:pt-5 mt-auto flex flex-col gap-1">
                            <!-- 정상가 -->
                            <div class="flex justify-between items-center px-1">
                                <span class="text-gray-500 text-xs sm:text-sm font-normal">정상가</span>
                                <span id="orig-price-${category}-${index}" class="text-gray-400 text-xs sm:text-sm font-medium line-through decoration-gray-500">${formatNumber(item.originalPrice)}원</span>
                            </div>
                            <!-- 이벤트가 -->
                            <div class="flex justify-between items-end mb-2 px-1">
                                <span class="text-[#c0fb0c] font-medium bg-[#c0fb0c]/10 border border-[#c0fb0c]/20 px-2 py-1 rounded text-[10px] tracking-wider">이벤트가</span>
                                <div class="text-right flex items-baseline gap-0.5">
                                    <span id="price-${category}-${index}" class="text-2xl sm:text-3xl font-bold text-white tracking-tighter">${formatNumber(item.basePrice)}</span>
                                    <span class="text-xs sm:text-sm text-gray-400 font-normal">원</span>
                                </div>
                            </div>
                            <!-- 할부금 박스 (테두리와 글씨 오렌지톤으로 변경) -->
                            <div class="flex justify-between items-center bg-[#151515] rounded-lg p-2.5 border border-[#c0fb0c]/30 mt-1 shadow-inner">
                                <span class="text-gray-400 font-medium text-[9px] sm:text-[10px] tracking-wider">무이자 24개월</span>
                                <div class="text-right flex items-baseline">
                                    <span class="text-[10px] sm:text-xs text-gray-500 font-normal">월</span>
                                    <span id="monthly-${category}-${index}" class="text-lg sm:text-xl font-bold text-[#c0fb0c] ml-1 tracking-tighter">${formatNumber(Math.floor(item.basePrice / 24))}</span>
                                    <span class="text-[10px] sm:text-xs text-gray-500 font-normal ml-0.5">원</span>
                                </div>
                            </div>
                        </div>
                    `;
                } else {
                    // 3. 기존 자전거 로직 (정상가 및 할부금)
                    priceSectionHtml = `
                        <div class="mb-5 sm:mb-6 border-t border-gray-800 pt-5 sm:pt-6 mt-auto">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-500 text-xs sm:text-sm font-normal">정상가</span>
                                <span id="orig-price-${category}-${index}" class="text-gray-400 text-xs sm:text-sm font-medium line-through decoration-gray-500">${formatNumber(item.basePrice)}원</span>
                            </div>
                            <div class="flex justify-between items-end">
                                <span class="text-brand-green font-medium bg-brand-green/10 border border-brand-green/20 px-2 py-1 rounded text-[9px] sm:text-[10px] tracking-wider">무이자 24개월</span>
                                <div class="text-right">
                                    <span class="text-xs sm:text-sm text-gray-400 font-normal">월</span>
                                    <span id="monthly-${category}-${index}" class="text-3xl sm:text-4xl font-bold text-white ml-1 tracking-tighter">${formatNumber(item.basePrice / 24)}</span>
                                    <span class="text-xs sm:text-sm text-gray-400 font-normal ml-0.5">원</span>
                                </div>
                            </div>
                        </div>
                    `;
                }

                let overlayHtml = '';
                let buttonHref = item.url || 'https://qualisports.kr';
                let buttonTarget = '_blank';
                let buttonClass = category === 'newArrival' 
                    ? 'bg-white text-black hover:bg-[#c0fb0c] hover:text-white cursor-pointer'
                    : 'bg-white text-black hover:bg-brand-green hover:text-white cursor-pointer';                
                let buttonText = '구매하기';

                if (item.isSoldOut) {
                    overlayHtml = `
                        <div class="absolute inset-0 bg-black/60 flex items-center justify-center z-30 backdrop-blur-sm">
                            <div class="text-center">
                                <span class="block text-[#72bf44] font-black text-xl md:text-2xl border-4 border-[#72bf44] px-4 py-2 rotate-[-10deg] shadow-[0_0_20px_rgba(114,191,68,0.4)]">
                                    ${item.isSoldOut} 수량 완판!
                                </span>                                        
                            </div>
                        </div>
                    `;
                    buttonHref = '#';
                    buttonTarget = '_self';
                    buttonClass = 'bg-gray-700 text-gray-400 cursor-not-allowed';
                    buttonText = '품절된 상품입니다';
                } else if (item.isPreOrder) {
                    overlayHtml = `
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center z-30 backdrop-blur-[1px] pointer-events-none">
                            <div class="text-center">
                                <span class="block text-[#72bf44] font-black text-lg md:text-xl border-4 border-[#72bf44] px-4 py-2 rotate-[-8deg] shadow-[0_0_20px_rgba(114,191,68,0.4)] bg-black/50 rounded-xl">
                                    1차 완판! 2차 예약중
                                </span>                                        
                            </div>
                        </div>
                    `;
                    buttonClass = 'bg-brand-green text-white hover:bg-[#66b338] cursor-pointer shadow-[0_0_15px_rgba(114,191,68,0.3)] animate-pulse-slow';
                    buttonText = '사전 예약하기';
                }

                // 💡 모든 카드를 그리드에 꽉 차게함
                let sliderClasses = 'w-full h-full ';

// 1. 카드 전체 테두리 호버 색상 분기 (신제품은 오렌지, 나머지는 그린)
                const cardClass = sliderClasses + (isMegaPromo 
                    ? 'bg-gray-900/50 border-2 border-brand-green/60 rounded-3xl overflow-hidden shadow-[0_0_25px_rgba(114,191,68,0.25)] hover:shadow-[0_0_40px_rgba(114,191,68,0.4)] transition-all duration-300 group flex flex-col relative z-10'
                    : (category === 'newArrival' 
                        ? 'bg-gray-900/50 border border-gray-800 rounded-3xl overflow-hidden hover:border-[#c0fb0c]/50 transition-all duration-300 group flex flex-col relative' 
                        : 'bg-gray-900/50 border border-gray-800 rounded-3xl overflow-hidden hover:border-brand-green/50 transition-all duration-300 group flex flex-col relative'));

                // 2. 타이틀 글씨 및 이미지 후광 호버 색상 분기
                let titleHoverClass = category === 'newArrival' ? 'group-hover:text-[#c0fb0c]' : 'group-hover:text-brand-green';
                let imgGlowClass = category === 'newArrival' ? 'group-hover:bg-[#c0fb0c]/10' : 'group-hover:bg-brand-green/10';

                const card = `
                    <div class="${cardClass}">
                        <div class="h-40 sm:h-48 relative bg-[#0a0a0a] overflow-hidden">
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-40 h-40 sm:w-48 sm:h-48 bg-white/5 rounded-full blur-2xl ${imgGlowClass} transition-colors duration-500 z-0"></div>
                            ${isMegaPromo ? `<div class="absolute inset-0 bg-gradient-to-br from-brand-green/20 via-transparent to-brand-blue/10 z-0 opacity-80"></div>` : ''}
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-100 to-white z-0"></div>
                            <div class="absolute inset-0 flex items-center justify-center p-4 sm:p-6">
                                <img src="${item.imgSrc}" alt="${item.name}" class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500 relative z-10 drop-shadow-2xl">
                            </div>
                            ${overlayHtml}
                            ${tagHtml}
                            ${giftBadge}
                            ${colorContainerHtml}
                        </div>
                        <div class="p-5 sm:p-6 md:p-8 flex-1 flex flex-col bg-[#0e0e0e]">
                            <div class="mb-4 flex flex-col items-start">
                                ${productLogoHtml}
                                <h3 class="text-xl sm:text-2xl font-semibold mb-2 text-white ${titleHoverClass} transition-colors">${item.name}</h3>
                                <p class="text-xs sm:text-sm text-gray-400 font-normal h-8 sm:h-10 whitespace-pre-line">${item.desc}</p>
                            </div>
                            ${batteryOptions}
                            ${priceSectionHtml}
                            <a href="${buttonHref}" target="${buttonTarget}" class="w-full py-3 sm:py-4 rounded-xl font-semibold text-base sm:text-lg transition-colors shadow-lg block text-center ${buttonClass}">
                                ${buttonText}
                            </a>
                        </div>
                    </div>
                `;
                container.insertAdjacentHTML('beforeend', card);
            });
        }

function changeTab(category) {
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('border-xtron-500', 'text-white', 'font-bold');
                btn.classList.add('border-transparent', 'text-gray-500', 'font-medium');
            });

            // 💡 [핵심 안전장치] 버튼이 있을 때만 색상을 변경하도록 if문 추가
            const activeBtn = document.getElementById(`tab-${category}`);
            if (activeBtn) {
                activeBtn.classList.remove('border-transparent', 'text-gray-500', 'font-medium');
                activeBtn.classList.add('border-xtron-500', 'text-white', 'font-bold');
            }

            const container = document.getElementById('product-container');
            if(!container) return;

            // 💡 [수정] 모든 카테고리를 스와이프 없이 아래로 떨어지는 격자(Grid) 레이아웃으로 통일
            container.className = "grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8 w-full";
            
            renderProducts(category);
        }

        // --- FAQ 아코디언 로직 ---
        function toggleFaq(element) {
            const content = element.nextElementSibling;
            const icon = element.querySelector('.faq-icon');
            const title = element.querySelector('.faq-title');

            const isCurrentlyOpen = content.style.maxHeight;

            // 1. 모든 FAQ 닫기 (초기화)
            document.querySelectorAll('.faq-content').forEach(el => el.style.maxHeight = null);
            document.querySelectorAll('.faq-icon').forEach(el => el.style.transform = 'rotate(0deg)');
            document.querySelectorAll('.faq-title').forEach(el => {
                el.classList.remove('text-brand-green');
                el.classList.add('text-gray-200');
            });

            // 2. 클릭한 항목이 닫혀있었다면 열어주기
            if (!isCurrentlyOpen) {
                content.style.maxHeight = content.scrollHeight + "px";
                icon.style.transform = 'rotate(180deg)';
                title.classList.remove('text-gray-200');
                title.classList.add('text-brand-green');
            }
        }

        // --- 플로팅 버튼 스크롤 감지 로직 ---
        function handleFloatingBtn() {
            const pricingSection = document.getElementById('pricing');
            const floatingCta = document.getElementById('floating-cta');
            const floatingCity = document.getElementById('floating-city-banner'); // 새 팝업 추가

            if (pricingSection) {
                // #pricing 섹션이 화면 하단에 보이기 시작하는 시점 계산
                const triggerPoint = pricingSection.offsetTop - window.innerHeight + 150;

                if (window.scrollY >= triggerPoint) {
                    // 가격 섹션 도달 시: 메인 CTA 숨김
                    if(floatingCta) {
                        floatingCta.classList.remove('opacity-100', 'translate-y-0');
                        floatingCta.classList.add('opacity-0', 'translate-y-10');
                        floatingCta.querySelector('a').classList.remove('pointer-events-auto');
                        floatingCta.querySelector('a').classList.add('pointer-events-none');
                    }
                    // 가격 섹션 도달 시: 시티 플로팅 팝업 숨김
                    if(floatingCity) {
                        floatingCity.classList.remove('opacity-100', 'translate-y-0');
                        floatingCity.classList.add('opacity-0', 'translate-y-10');
                        floatingCity.classList.add('pointer-events-none');
                    }
                } else {
                    // 다시 위로 올리면: 메인 CTA 보임
                    if(floatingCta) {
                        floatingCta.classList.add('opacity-100', 'translate-y-0');
                        floatingCta.classList.remove('opacity-0', 'translate-y-10');
                        floatingCta.querySelector('a').classList.add('pointer-events-auto');
                        floatingCta.querySelector('a').classList.remove('pointer-events-none');
                    }
                    // 다시 위로 올리면: 시티 플로팅 팝업 보임
                    if(floatingCity) {
                        floatingCity.classList.add('opacity-100', 'translate-y-0');
                        floatingCity.classList.remove('opacity-0', 'translate-y-10');
                        floatingCity.classList.remove('pointer-events-none');
                    }
                }
            }
        }
    window.addEventListener('scroll', handleFloatingBtn);

        // 👇 1. [신규 추가] 어떤 배너에서든 원하는 탭으로 이동시켜주는 만능 함수
        function scrollToPricingAndTab(category) {
            // 탭 먼저 변경
            changeTab(category);
            
            // 가격 섹션으로 부드럽게 스크롤
            const pricingSection = document.getElementById('pricing');
            if (pricingSection) {
                pricingSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }

        // 초기 로드
        window.onload = () => {
            // 👇 [수정] 처음에 'pro'가 아닌 'megaweek' 탭을 활성화
            changeTab('newArrival'); 
            setSpecSlide(0);
            setBattery('standard');
            handleFloatingBtn(); 
        };   
        // ==========================================
        // 💡 [단일 팝업] 공지사항 및 쿠키 제어 로직
        // ==========================================
        
        // 1. 쿠키 설정 함수 (자정 만료)
        function setPopupCookieAtMidnight(name, value) {
            const date = new Date();
            date.setHours(23, 59, 59, 999); 
            document.cookie = name + "=" + value + "; expires=" + date.toUTCString() + "; path=/";
        }

        // 2. 쿠키 확인 함수
        function getPopupCookie(name) {
            const value = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
            return value ? value[2] : null;
        }

        // 3. 팝업 닫기 함수
        function closeNoticePopup() {
            const popup = document.getElementById('notice-popup');
            const checkbox = document.getElementById('hide-notice-checkbox');
            
            // 체크박스에 체크하고 닫았다면, 오늘 자정까지 보이지 않도록 쿠키 생성
            if (checkbox && checkbox.checked) {
                setPopupCookieAtMidnight("hideXtronNotices", "Y");
            }
            
            // 팝업 숨기기 (페이드 아웃)
            popup.classList.remove('opacity-100');
            popup.classList.add('opacity-0');
            setTimeout(() => {
                popup.classList.add('hidden');
                popup.classList.remove('flex');
            }, 300);
        }

        // 4. 페이지 접속 시 팝업 노출 여부 결정
        window.addEventListener('DOMContentLoaded', (event) => {
            const popup = document.getElementById('notice-popup');
            if (popup && getPopupCookie("hideXtronNotices") !== "Y") {
                popup.classList.remove('hidden');
                popup.classList.add('flex');

                setTimeout(() => {
                    popup.classList.remove('opacity-0');
                    popup.classList.add('opacity-100');
                }, 10);
            }
        });

    // --- 불법 복사 및 우클릭 원천 차단 로직 ---
        // 1. 마우스 우클릭 방지
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault(); 
        });
        
        // 2. 텍스트 드래그(블록 지정) 방지
        document.addEventListener('selectstart', function(e) {
            e.preventDefault(); 
        });
        
        // 3. 이미지 마우스로 끌어가기(Drag & Drop) 방지
        document.addEventListener('dragstart', function(e) {
            e.preventDefault(); 
        });

</script>
    <?php wp_footer(); ?>
</body>

    <!-- 🚀 [최종본] 멀티 공지사항 슬라이드 팝업 (500x700) -->
    <div id="notice-popup" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/80 backdrop-blur-sm p-4 md:p-0 transition-opacity duration-300">
        <div class="relative w-full max-w-[500px] bg-[#0a0a0a] rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.7)] border border-gray-800">
            
            <button type="button" onclick="closeNoticePopup()" class="absolute top-3 right-3 sm:top-4 sm:right-4 z-20 w-8 h-8 flex items-center justify-center bg-black/40 backdrop-blur-md text-white rounded-full hover:bg-brand-green hover:text-gray-900 transition-colors border border-white/10">
                <i class="ph ph-x text-lg font-bold"></i>
            </button>

            <div class="w-full aspect-[5/7] relative overflow-hidden bg-gray-900">
                <img src="/assets/POPUP/OCT_HOLI_DAY.jpg" alt="공지사항" class="w-full h-full object-cover">
            </div>

            <div class="flex items-center justify-between bg-gray-900/80 border-t border-gray-800 px-4 sm:px-5 py-3">
                <label class="flex items-center gap-2 cursor-pointer group">
                    <input type="checkbox" id="hide-notice-checkbox" class="w-4 h-4 rounded border-gray-700 bg-gray-800 text-brand-green focus:ring-brand-green/50 focus:ring-offset-gray-900 cursor-pointer transition-colors">
                    <span class="text-[13px] sm:text-sm text-gray-400 group-hover:text-gray-200 transition-colors select-none">오늘 하루 보지 않기</span>
                </label>
                <button type="button" onclick="closeNoticePopup()" class="text-[13px] sm:text-sm font-bold text-gray-300 px-4 py-1.5 bg-gray-800 hover:bg-gray-700 hover:text-white rounded-lg transition-colors border border-gray-700">
                    닫기
                </button>
            </div>
        </div>
    </div>
</html>