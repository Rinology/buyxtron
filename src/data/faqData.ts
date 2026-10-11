export interface FAQ {
    id: number;
    question: string;
    answerHtml: string;
    isHighlight?: boolean;
    qColorClass?: string;
    aColorClass?: string;
}

export const faqData: FAQ[] = [
  {
    id: 1,
    question: `프로모션 및 사은품 관련 유의사항이 있나요?`,
    answerHtml: `<ul className="space-y-3">
                                        <li className="flex items-start gap-2"><i className="ph-bold ph-check text-brand-green mt-1 shrink-0"></i> <span>본 프로모션은 한정 수량으로 진행되며, 재고 소진 시 예고 없이 조기 종료될 수 있습니다.</span></li>
                                        <li className="flex items-start gap-2"><i className="ph-bold ph-check text-brand-green mt-1 shrink-0"></i> <span>출고 일정은 제품 입고 및 물류 상황에 따라 일부 변경될 수 있습니다.</span></li>
                                        <li className="flex items-start gap-2"><i className="ph-bold ph-check text-brand-green mt-1 shrink-0"></i> <span>사은품과 추가 상품은 자전거 본품과 별도로 발송됩니다.</span></li>
                                        <li className="flex items-start gap-2"><i className="ph-bold ph-check text-brand-green mt-1 shrink-0"></i> <span><strong className="text-gray-200">PRO FAT LIMITED EDITION</strong>은 MEGA 배터리 무상 업그레이드 혜택이 적용되지 않습니다.</span></li>
                                    </ul>`,
    isHighlight: false,
    qColorClass: "text-brand-green",
    aColorClass: "text-brand-blue"
  },
  {
    id: 2,
    question: `메가 배터리 단품 구매 시, 기존 자전거와 호환이 되나요?`,
    answerHtml: `<p className="mb-4 text-gray-300">본 메가 배터리 단품은 <strong className="text-[#c0fb0c]">26년형 엑스트론 시리즈에 한하여</strong> 바로 장착 및 사용이 가능하며, 일부 제품은 호환이 불가합니다.</p>
                                    
                                    <div className="bg-[#111] border border-gray-700 rounded-lg p-4 space-y-3">
                                        <h5 className="text-white font-bold mb-2">📌 25년형 이하 및 기타 모델 구매 안내</h5>
                                        <ul className="space-y-2 text-[13px] sm:text-sm">
                                            <li className="flex items-start gap-2"><i className="ph-fill ph-warning-circle text-yellow-500 mt-1 shrink-0"></i> <span>25년형 이하 모델은 프레임 구조상 장착이 원천적으로 불가하거나 추가 부품(6핀 컨트롤러 등) 교체가 필요할 수 있습니다.</span></li>
                                            <li className="flex items-start gap-2"><i className="ph-fill ph-warning-circle text-yellow-500 mt-1 shrink-0"></i> <span>해당 연식의 모델을 소유하신 고객님은 <strong className="text-gray-200">결제 전 반드시 당사 네이버 톡톡 or 카카오톡 채널</strong>로 소유하신 모델 및 연식을 남겨 장착 가능 여부를 확인해 주시기 바랍니다.</span></li>
                                            <li className="flex items-start gap-2"><i className="ph-fill ph-warning-circle text-red-500 mt-1 shrink-0"></i> <span className="text-red-400">사전 확인 없이 임의 결제하신 후 장착 불가 사유로 반품하실 경우, <strong>왕복 배송비는 고객님 부담</strong>으로 처리되오니 각별한 주의를 부탁드립니다.</span></li>
                                        </ul>`,
    isHighlight: true,
    qColorClass: "text-[#c0fb0c]",
    aColorClass: "text-[#c0fb0c]"
  },
  {
    id: 3,
    question: `무이자 24개월 할부는 어떻게
                            적용되나요?`,
    answerHtml: `구매하기 버튼을 눌러 링크페이에서 당사의 제휴 카드인 신한, 삼성, 현대, 롯데, 비씨, 우리로 선택 후 무이자 24개월을 선택해 주세요. (단, 농협/국민 카드는 최대 18개월)
                                    별도의 복잡한 서류 심사나 신용 조회 없이 기존에 쓰시던 카드 한도 내에서 즉시 승인되므로 아주 간편합니다. (체크 카드 및 법인 카드는 결제 대상에서 제외됩니다.)`,
    isHighlight: false,
    qColorClass: "text-brand-green",
    aColorClass: "text-brand-blue"
  },
  {
    id: 4,
    question: `배송은 어떻게 받을 수 있나요?`,
    answerHtml: `네, 엑스트론 전기자전거는 전문 미케닉의 검수를 거쳐 95% 이상 조립 상태로 안전하게 배송됩니다. 고객님께서는 수령 후 박스를 개봉하여 접혀있는
                                    핸들바의 각도를 조절하고, 페달만 장착해 주시면 즉시 주행이 가능합니다. (필요한 간이 공구는 스타터 킷에 포함되어 있습니다.)<br><br>
                                    <strong className="text-gray-300">100% 완조립은 본사에서 수령 또는 용달을 선택하실 수 있습니다.</strong><br>
                                    <span className="text-[12px] text-gray-500">※ 용달은 지역에 따라 추가 금액이 발생할 수 있습니다.</span>`,
    isHighlight: false,
    qColorClass: "text-brand-green",
    aColorClass: "text-brand-blue"
  },
  {
    id: 5,
    question: `사은품은 자전거와 함께 배송되나요?`,
    answerHtml: `네, 그렇습니다. 자전거 수령 시 바로 라이딩을 시작하실 수 있도록 '프리미엄 사은품 3종'과 '스타터 킷 4종'이 모두 자전거 본체와 함께 꼼꼼하게
                                    포장되어 합배송됩니다. (단, 헬멧 사이즈 등 일부 품목의 옵션 품절 시 부분 배송될 수 있으며, 이 경우 사전 안내를 드립니다.)`,
    isHighlight: false,
    qColorClass: "text-brand-green",
    aColorClass: "text-brand-blue"
  },
  {
    id: 6,
    question: `운전 면허가 있어야 하나요?`,
    answerHtml: `주행 방식에 따라 다릅니다! 페달을 굴릴 때만 모터가 도와주는 <strong>PAS (페달보조) 전용 방식</strong>은 만 13세 이상이라면
                                    누구나 <strong className="text-gray-300">면허 없이 탑승 가능</strong>합니다.<br><br>
                                    단, 오토바이처럼 레버를 당겨 나가는 <strong>스로틀 방식</strong> 또는 <strong>PAS/스로틀 겸용 방식</strong>의 제품을
                                    선택하셨다면 원동기 장치 자전거 이상에 해당하는 <strong className="text-brand-blue">운전면허증이 반드시
                                        필요</strong>합니다.`,
    isHighlight: false,
    qColorClass: "text-brand-green",
    aColorClass: "text-brand-blue"
  },
  {
    id: 7,
    question: `자전거 전용 도로 주행이 가능한가요?`,
    answerHtml: `네, 물론입니다! 엑스트론 전체 제품은 국가 공인 KC 인증을 완벽하게 통과한 규격 제품으로, 속도 25km/h 제한 및 중량 요건을 충족하여
                                    합법적으로 자전거 전용 도로에서 안전하게 주행하실 수 있습니다.`,
    isHighlight: false,
    qColorClass: "text-brand-green",
    aColorClass: "text-brand-blue"
  },
  {
    id: 8,
    question: `배터리는 안전한가요?`,
    answerHtml: `KC 인증은 물론, 세계 최고 수준의 기술력을 자랑하는 삼성SDI 및 LG에너지솔루션 정품 배터리 셀을 사용하여 화재 위험을 차단하고 안정성과 품질을
                                    모두 완벽하게 확보하였습니다.`,
    isHighlight: false,
    qColorClass: "text-brand-green",
    aColorClass: "text-brand-blue"
  },
  {
    id: 9,
    question: `여자가 타도 무겁거나 부담스럽지
                            않을까요?`,
    answerHtml: `전혀 걱정하지 않으셔도 됩니다! 특히 컴팩트한 사이즈의 <strong className="text-gray-200">16인치 전기자전거(프로미니, GT미니
                                        모델)</strong>는 승하차가 편하고 조향이 가벼워 여성분들이나 체구가 작으신 분들이 가장 많이 구매하고 실제로 매우 만족하며 주행하시는
                                    베스트셀러 모델입니다.`,
    isHighlight: false,
    qColorClass: "text-brand-green",
    aColorClass: "text-brand-blue"
  },
  {
    id: 10,
    question: `뒷자리에 아이를 태울 수 있나요?`,
    answerHtml: `네! 전용 리어랙이 장착된 모델(프로 시리즈, GT 시리즈, 시티, 투어)에는 OGK 유아 안장 설치가 가능합니다. 안전을 위해 보통 4세 이하 영유아
                                    동승을 권장해 드립니다.<br><br>
                                    <span className="text-[12px] text-gray-500">※ 단, 성인 2명이 탑승하는 것은 안전상 위험하며 법적으로도 금지되어 있으니
                                        유의해 주시기 바랍니다.</span>`,
    isHighlight: false,
    qColorClass: "text-brand-green",
    aColorClass: "text-brand-blue"
  },
  {
    id: 11,
    question: `배터리만 따로 분리해서 충전할 수
                            있나요?`,
    answerHtml: `물론입니다. 엑스트론의 모든 라인업은 탈부착형 배터리를 채택하고 있습니다. 동봉된 전용 열쇠를 사용해 자전거 프레임에서 배터리를 쉽게 분리할 수
                                    있으며, 무거운 자전거를 옮길 필요 없이 집이나 사무실의 220V 일반 콘센트로 스마트폰처럼 편리하게 충전하실 수 있습니다.`,
    isHighlight: false,
    qColorClass: "text-brand-green",
    aColorClass: "text-brand-blue"
  },
  {
    id: 12,
    question: `무상 보증(A/S)은 어떻게 받을 수
                            있나요?`,
    answerHtml: `본사 또는 전국에 분포된 엑스트론 x 퀄리스포츠 공식 대리점을 통해 빠르고 확실한 A/S를 받으실 수 있습니다. 연장된 무상 보증(EXTEND) 혜택을
                                    온전히 누리시기 위해서는 구매 후 <strong className="text-brand-green font-medium">"반드시 정품등록"</strong>을
                                    진행해 주셔야 합니다.`,
    isHighlight: false,
    qColorClass: "text-brand-green",
    aColorClass: "text-brand-blue"
  },
  {
    id: 13,
    question: `ZOOM SP442 서스펜션 싯포스트는 어떻게 장착하나요?`,
    answerHtml: `<p className="mb-3">아래 링크를 통해 자세한 장착 동영상 가이드를 확인하실 수 있습니다.</p>
                                    <a href="https://www.youtube.com/watch?v=zHuhdGXOqbs" target="_blank" className="inline-flex items-center gap-1.5 text-brand-green hover:text-white font-bold transition-colors bg-brand-green/10 border border-brand-green/20 px-3 py-1.5 rounded-lg">
                                        ZOOM SP442 장착 영상 바로가기 <i className="ph ph-arrow-square-out text-lg"></i>
                                    </a>`,
    isHighlight: false,
    qColorClass: "text-brand-green",
    aColorClass: "text-brand-blue"
  },
  {
    id: 14,
    question: `OGK 유아 안장은 어떻게 장착하나요?`,
    answerHtml: `<p className="mb-3">아래 링크를 통해 자세한 장착 동영상 가이드를 확인하실 수 있습니다. 만약 투어 모델에 장착하실 예정이라면 전용 볼트가 필요하므로 구입 시 메세지에 남겨주세요</p>
                                    <a href="https://www.youtube.com/watch?v=dtwFCLac14U" target="_blank" className="inline-flex items-center gap-1.5 text-brand-green hover:text-white font-bold transition-colors bg-brand-green/10 border border-brand-green/20 px-3 py-1.5 rounded-lg">
                                        OGK 유아 안장 장착 영상 바로가기 <i className="ph ph-arrow-square-out text-lg"></i>
                                    </a>`,
    isHighlight: false,
    qColorClass: "text-brand-green",
    aColorClass: "text-brand-blue"
  }
];
