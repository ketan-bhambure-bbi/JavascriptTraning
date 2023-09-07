const calcTip = function (bill) {
    return bill >= 50 && bill <= 300 ? bill * 0.15 : bill * 0.2;
  }
  
  /* Write your code below. Good luck! 🙂 */
  const bills =new Array(22, 295, 176, 440, 37, 105, 10, 1100, 86, 52 );
  const tips=[];
  const totals=[];
  for(let i=0;i<bills.length;i++){
      tips[i]=calcTip(bills[i]);
      totals[i]=tips[i]+bills[i];
  }
   
  function calcAverage(arr){
      let sum=0;
      for(let i=0;i<arr.length;i++){
          sum+=arr[i];
      }
      const avg=sum/arr.length;
      return avg;
  }
  console.log(calcAverage(totals));