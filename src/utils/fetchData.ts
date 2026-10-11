import Papa from 'papaparse';

export const fetchCsvData = <T>(url: string): Promise<T[]> => {
    return new Promise((resolve, reject) => {
        Papa.parse(url, {
            download: true,
            header: true,
            skipEmptyLines: true,
            complete: (results) => {
                resolve(results.data as T[]);
            },
            error: (error) => {
                reject(error);
            }
        });
    });
};
