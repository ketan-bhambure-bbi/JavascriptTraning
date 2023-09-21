'use strict';

class stringManipulation{
    constructor(inputArray){
        this.inputArray=inputArray;  
        this.objectRet();        
        
    }  
    sum(){
        let SUM=0;
        this.inputArray.forEach(element => {
            SUM+=element;
        });
        return SUM;
         
    }
    average(){
        const num=this.sum()/this.inputArray.length;
        return Math.round(num*100)/100;         

    }

    largest(){
        var large=this.inputArray[0];
        this.inputArray.forEach(element => {
            large=Math.max(large,element);
        });
        return large;
         
    }
    smallest(){
        let small=this.inputArray[0];
        this.inputArray.forEach(element => {
            small=Math.min(small,element);
        });
        return small;
         
    }
    uniqueNumbers(){
        var uniqueA=new Set(this.inputArray);
        return uniqueA;

    }
    sortedArray(){
        return this.inputArray.sort();

    }
    objectRet(){
        const ans={
            sum:this.sum(),
            average:this.average(),
            largest:this.largest(),
            smallest:this.smallest(),
            uniqueNumbers:this.uniqueNumbers(),
            sortedArray:this.sortedArray()

        }
        console.log(ans);
    }


}
const obj=new stringManipulation([4, 2, 7, 4, 1, 9, 7]);