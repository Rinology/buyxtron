# BuyXtron (엑스트론 공식 랜딩 페이지)

엑스트론(BuyXtron) 전기자전거의 고성능 라인업 소개, 배터리 옵션 비교, 스펙 슬라이더 및 구매 연동을 제공하는 Next.js 기반 웹 애플리케이션입니다.

---

## 🚀 시작하기

### 개발 서버 실행

```bash
npm run dev
```

브라우저에서 [http://localhost:3000](http://localhost:3000)으로 접속하여 결과를 확인할 수 있습니다.

### 프로덕션 빌드 및 실행

```bash
# 빌드
npm run build

# 프로덕션 서버 실행
npm start
```

---

## 🛠 기술 스택

- **Framework**: [Next.js](https://nextjs.org/) (App Router, Turbopack)
- **UI & Styling**: React 19, Tailwind CSS, Lucide Icons, FontAwesome
- **Language**: TypeScript
- **결제 연동**: Toss Payments 결제 링크

---

## 📁 주요 폴더 구조

```text
buyxtron/
├── public/          # 정적 리소스 (이미지, 아이콘 등)
├── src/
│   └── app/
│       ├── layout.tsx  # 글로벌 레이아웃 및 폰트/메타데이터 설정
│       ├── page.tsx    # 메인 랜딩 페이지 (제품 목록, 스펙 슬라이더, 이벤트 팝업 등)
│       └── globals.css # 전역 CSS 스타일
├── scratch/         # 제품 데이터 마이그레이션 및 참조용 임시 CSV 파일 보관
└── package.json     # 프로젝트 의존성 및 스크립트
```

---

## 📌 주요 기능

1. **인터랙티브 스펙 슬라이더**: 허브모터 / 미드모터 라인업 전환 및 사양 비교
2. **제품 라인업 필터 & 메가배터리 토글**: 카테고리별(프로, GT, 라이프스타일, 액세서리) 제품 필터링 및 가격 즉시 연동
3. **주행거리 인터랙티브 애니메이션**: 배터리 용량별(20Ah vs 28.5Ah 메가) 주행거리 및 출력 인터랙션
4. **프로모션 팝업 모달**: 메가배터리 무상 업그레이드 이벤트 상세 모달 및 제품 연동
