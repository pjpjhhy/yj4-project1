const date = new Date();
const year = date.getFullYear();
const month = ("00" + (date.getMonth() + 1).toString()).slice(-2);
const day = ("00" + date.getDate().toString()).slice(-2);

export const today = `${year}${month}${day}`;