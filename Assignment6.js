const bill=100;
function calcTip (bill){
    return bill >= 50 && bill <= 300 ? bill * 0.15 : bill * 0.2;
}
const billarray=[125,555,44];

const tips=[calcTip(billarray[0]),calcTip(billarray[1]),calcTip(billarray[2])];
const totals = [billarray[0] + tips[0], billarray[1] + tips[1], billarray[2] + tips[2]];

console.log(billarray, tips, totals);fdfff