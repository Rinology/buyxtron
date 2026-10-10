const fs = require('fs');

const productsJsonStr = fs.readFileSync('./src/data/products.json', 'utf8');
const productsJson = JSON.parse(productsJsonStr);

const pdObj = {
    fatLimited: [
        { 
            name: "엑스트론 프로 <br>팻 리미티드 에디션<br><strong class='text-brand-green'>(20Ah 기본)</strong>", 
            batteryLabel: "48V 20Ah", 
            url: "https://buyxtron.com/pro_fat_20",
            imgSrc: "/image/PRODUCT_SET/PRODUCT_FLE_20.png", 
            logo: "/image/PRODUCT_LOGO_SET/PRO_FLE_LOGO2.png", 
            desc: "가장 균형 잡힌 퍼포먼스 <br>압도적 존재감의 3.0 광폭 타이어", 
            originalPrice: 1850000,
            basePrice: 1690000, 
            hasMega: false,
            colors: ['#111111', '#808080'] 
        },
        { 
            name: "엑스트론 프로 <br>팻 리미티드 에디션<br><strong class='text-brand-green'>(28.5Ah MEGA)</strong>", 
            batteryLabel: "48V 28.5Ah MEGA", 
            url: "https://buyxtron.com/pro_fat_285",
            imgSrc: "/image/PRODUCT_SET/PRODUCT_FLE_28.5.png", 
            logo: "/image/PRODUCT_LOGO_SET/PRO_FLE_LOGO2.png", 
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
            imgSrc: "/image/PRODUCT_SET/PRODUCT_FLE_20+20.png", 
            logo: "/image/PRODUCT_LOGO_SET/PRO_FLE_LOGO2.png", 
            desc: "끝없는 주행거리의 완성 <br>20Ah + 20Ah로 더 멀리! 더 오래!", 
            originalPrice: 2640000,
            basePrice: 1990000, 
            hasMega: false,
            colors: ['#111111', '#808080'] 
        }
    ],
    pro: [
        { 
            name: "엑스트론 프로 S", 
            url: "https://buyxtron.com/pro_s", 
            imgSrc: "/image/PRODUCT_SET/PRODUCT_PROS.png", 
            logo: "/image/PRODUCT_LOGO_SET/PROS_LOGO.png", 
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
            imgSrc: "/image/PRODUCT_SET/PRODUCT_PRO.png", 
            logo: "/image/PRODUCT_LOGO_SET/PRO_LOGO.png", 
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
            imgSrc: "/image/PRODUCT_SET/PRODUCT_PRO_MINI.png", 
            logo: "/image/PRODUCT_LOGO_SET/PRO_MINI_LOGO.png", 
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
            imgSrc: "/image/PRODUCT_SET/PRODUCT_GTS.png", 
            logo: "/image/PRODUCT_LOGO_SET/GTS_LOGO.png", 
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
            imgSrc: "/image/PRODUCT_SET/PRODUCT_GT.png", 
            logo: "/image/PRODUCT_LOGO_SET/GT_LOGO.png", 
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
            imgSrc: "/image/PRODUCT_SET/PRODUCT_CITY.png", 
            logo: "/image/PRODUCT_LOGO_SET/CITY_LOGO.png?v=2", 
            desc: "도심에서 가장 자연스러운 <br>실용과 스타일의 완벽 균형", 
            basePrice: 1640000, 
            hasMega: true, 
            megaPrice: 1640000, 
            colors: ['#111111', '#808080'] 
        },
        { 
            name: "엑스트론 투어", 
            url: "https://buyxtron.com/tour", 
            imgSrc: "/image/PRODUCT_SET/PRODUCT_TOUR.png", 
            logo: "/image/PRODUCT_LOGO_SET/TOUR_LOGO.png", 
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
            imgSrc: "/image/PREMIUM_SET/BRACKET.png", 
            desc: "추가 배터리 장착을 위한<br>필수 전용 브라켓", 
            basePrice: 20000, 
            isAcc: true 
        },
        { 
            name: "MEGA 배터리 단품", 
            url: "https://buy.tosspayments.com/products/PDBoFyR-6M", 
            imgSrc: "/image/EVENT/MEGA_SINGLE.png", 
            desc: "48V 28.5Ah의 역대급 용량!<br>1회 충전으로 무려 230km 주행 가능!<br>(단, 프로 S, PAS 1단 기준)", 
            originalPrice: 890000, 
            basePrice: 560000, 
            isAcc: true 
        },
        { 
            name: "엑스트론 x 퀄리스포츠<br>배달 가방", 
            url: "https://buy.tosspayments.com/products/hBBoFjKNSI", 
            imgSrc: "/image/PREMIUM_SET/DELI_BAG.png", 
            desc: "넉넉한 수납공간과 뛰어난 보온/보냉 효과!<br>배달 라이더라면 필수!", 
            originalPrice: 150000, 
            basePrice: 80000, 
            isAcc: true 
        },
        { 
            name: "ZOOM SP442", 
            url: "https://s.tosspayments.com/BntspLv4tAd", 
            imgSrc: "/image/PREMIUM_SET/SUSPENSION.png", 
            desc: "프리미엄 승차감을 위한<br>서스펜션 싯포스트", 
            originalPrice: 155000, 
            basePrice: 125000, 
            isAcc: true 
        },
        { 
            name: "에어버스터 전동 펌프", 
            url: "https://buy.tosspayments.com/products/GIBoFjdMlY", 
            imgSrc: "/image/PREMIUM_SET/AIR-PUMP.png", 
            desc: "타사 대비 2배 더 길어진 호스 길이로<br>활용도 MAX", 
            originalPrice: 88000, 
            basePrice: 58000, 
            isAcc: true 
        },
        { 
            name: "썬투어 싯포스트", 
            url: "https://s.tosspayments.com/Bntu2-I8POg", 
            imgSrc: "/image/PREMIUM_SET/Suntour.png", 
            desc: "최고급 서스펜션으로<br>궁극의 편안함 제공", 
            originalPrice: 185000, 
            basePrice: 155000, 
            isAcc: true 
        },
        { 
            name: "OGK 포폴라", 
            url: "https://s.tosspayments.com/Bntu2uA8ozz", 
            imgSrc: "/image/PREMIUM_SET/Popola.png", 
            desc: "아이와 함께하는<br>안전한 라이딩의 시작", 
            originalPrice: 130000, 
            basePrice: 115000, 
            isAcc: true 
        },
        { 
            name: "OGK 포폴라모어", 
            url: "https://s.tosspayments.com/Bntu249EhrU", 
            imgSrc: "/image/PREMIUM_SET/Popola-More.png", 
            desc: "더욱 업그레이드된<br>프리미엄 유아안장", 
            originalPrice: 200000, 
            basePrice: 175000, 
            isAcc: true 
        }
    ]
};

let csv = "id|name|category|basePrice|hasMega|megaPrice|originalPrice|desc|tag|imgSrc|url|colors|status|ratingValue|reviewCount|detailDescription\n";

for (const cat in pdObj) {
    const list = pdObj[cat];
    list.forEach((p, idx) => {
        let nameMatch = p.name.replace(/<[^>]*>?/gm, '').trim();
        if (nameMatch.includes('MEGA')) nameMatch = '엑스트론 프로 팻 리미티드 에디션 MEGA';
        else if (nameMatch.includes('20Ah+20Ah')) nameMatch = '엑스트론 프로 팻 리미티드 에디션 듀얼';
        
        let id = cat + '-' + idx;
        if (p.name.includes('프로 S')) id = 'pro-s';
        else if (p.name.includes('프로미니')) id = 'pro-mini';
        else if (p.name.includes('프로 팻')) id = 'pro-fat-' + idx;
        else if (p.name === '엑스트론 프로') id = 'pro-basic';
        else if (p.name.includes('GT S')) id = 'gt-s';
        else if (p.name === '엑스트론 GT') id = 'gt-basic';
        else if (p.name.includes('시티')) id = 'city';
        else if (p.name.includes('투어')) id = 'tour';
        else if (p.isAcc) id = 'acc-' + idx;

        const jsonMatch = productsJson.find(j => j.name.replace(/\s/g, '') === nameMatch.replace(/\s/g, ''));
        
        const rating = jsonMatch ? jsonMatch.ratingValue : '';
        const reviews = jsonMatch ? jsonMatch.reviewCount : '';
        const detailDesc = jsonMatch ? jsonMatch.description.replace(/\|/g, '').replace(/\n/g, '<br>') : '';

        let desc = p.desc || '';
        desc = desc.replace(/\|/g, ''); // 파이프 기호 제거

        const colors = p.colors ? p.colors.join(';') : '';
        let status = 'active';
        if (p.isSoldOut) status = 'soldout';
        if (p.isPreOrder) status = 'preorder';
        
        csv += `${id}|${p.name.replace(/\|/g, '')}|${cat}|${p.basePrice || ''}|${p.hasMega ? 'TRUE' : 'FALSE'}|${p.megaPrice || ''}|${p.originalPrice || ''}|${desc}|${p.tag || ''}|${p.imgSrc || ''}|${p.url || ''}|${colors}|${status}|${rating}|${reviews}|${detailDesc}\n`;
    });
}

fs.writeFileSync('./scratch/full_products_pipe.csv', csv);
console.log('CSV generated successfully');
