const calcAverage=(a,b,c)=> {return (a+b+c)/3;}
const scoreDolphins=calcAverage(44,23,71);
const scoreKoalas=calcAverage(85,54,71);
function checkWinner(avgDolphins,avgKoalas){
    if(avgDolphins>2*avgKoalas){
        console.log(`Dolphin wins (${avgDolphins} .vs ${avgKoalas})`);
    }
    else if(2*avgDolphins<avgKoalas){
        console.log(`Koalas wins (${avgKoalas} .vs ${avgDolphins})`);
    }
    else{
        console.log('No team wins...');
    }
}
checkWinner(scoreDolphins,scoreKoalas);fggg
