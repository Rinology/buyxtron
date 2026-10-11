import { Product } from '../data/productData';
import { FAQ } from '../data/faqData';

export const transformProducts = (rows: any[]): Record<string, Product[]> => {
    const products: Record<string, Product[]> = {
        megaweek: [],
        newArrival: [],
        pro: [],
        gt: [],
        lifestyle: [],
        acc: []
    };

    rows.forEach(row => {
        if (!row.id) return;
        const p: Product = {
            name: row.name || "",
            url: row.url || "",
            imgSrc: row.imgSrc || "",
            desc: row.desc || "",
            basePrice: parseInt(row.basePrice) || 0,
            hasMega: row.hasMega?.toUpperCase() === 'TRUE',
            megaPrice: row.megaPrice ? parseInt(row.megaPrice) : undefined,
            originalPrice: row.originalPrice ? parseInt(row.originalPrice) : undefined,
            tag: row.tag || undefined,
            colors: row.colors ? row.colors.split(';') : undefined,
            isSoldOut: row.status === 'soldout',
            isAcc: row.category === 'acc',
            batteryLabel: row.name.includes('20Ah') ? '48V 20Ah' : undefined // just fallback
        };

        if (row.category === 'pro') products.pro.push(p);
        if (row.category === 'gt') products.gt.push(p);
        if (row.category === 'lifestyle') products.lifestyle.push(p);
        if (row.category === 'acc') products.acc.push(p);
        if (row.category === 'fatLimited') products.newArrival.push(p);
        
        // Populate megaweek with some specific products if they have BEST/NEW tags or just some default items
        if (row.tag === 'BEST' || row.tag === 'NEW') products.megaweek.push(p);
    });

    return products;
};

export const transformFaqs = (rows: any[]): FAQ[] => {
    return rows.map((row, index) => ({
        id: parseInt(row.id) || index,
        question: row.question || "",
        answerHtml: row.answerHtml || "",
        isHighlight: row.isHighlight?.toUpperCase() === 'TRUE',
        qColorClass: row.qColorClass || undefined,
        aColorClass: row.aColorClass || undefined
    }));
};

export const transformSpecs = (rows: any[]): Record<string, any> => {
    const specs: Record<string, any> = {};
    rows.forEach(row => {
        if (!row.id) return;
        specs[row.id] = {
            title: row.title,
            imgSrc: row.imgSrc,
            desc: row.desc
        };
    });
    return specs;
};

export const transformBattery = (rows: any[]): Record<string, any> => {
    const battery: Record<string, any> = {};
    rows.forEach(row => {
        if (!row.id) return;
        battery[row.id] = {
            desc: row.desc,
            cellImg: row.cellImg,
            cellAlt: row.cellAlt,
            ah: row.ah,
            km: parseFloat(row.km) || 0,
            width: row.width,
            colorClass: row.colorClass,
            textColor: row.textColor,
            imgSrc: row.imgSrc,
            megaIcon: row.megaIcon?.toUpperCase() === 'TRUE',
            features: [
                { icon: row.feature1_icon, title: row.feature1_title, desc: row.feature1_desc },
                { icon: row.feature2_icon, title: row.feature2_title, desc: row.feature2_desc },
                { icon: row.feature3_icon, title: row.feature3_title, desc: row.feature3_desc }
            ]
        };
    });
    return battery;
};
