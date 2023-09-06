const bill=275;
if(bill>=50 && bill<300){
    console.log(`The bill was ${bill}, the tip was ${bill*(15/100)}, and the total value ${bill+bill*(15/100)}`);
}
else{
    console.log(`The bill was ${bill}, the tip was ${bill*(20/100)}, and the total value ${bill+bill*(20/100)}`);

}
