'use strict';

class stringManipulation{
    constructor(inputString1){
        this.inputString=inputString1;  
        this.objectRet();    
        
    }
  
    reversed(){
        let reverse1= this.inputString.split('').reverse().join('');
        reverse1=reverse1.slice(0,1).toUpperCase()+reverse1.slice(1,reverse1.length);
        return reverse1 ;
    }
    vowelCount(){
        let count=0;
        const vowel=['a','e','i','o','u','A','E','I','O','U']
        for(let i=0;i<this.inputString.length;i++){
            if(vowel.includes(this.inputString.charAt(i) )){
                count++;
            }
        }
        return count ;     


    }

    isPalindrome(){
        if(this.inputString==this.inputString.split('').reverse().join('')){
            return true;
        }
        else{
            return false;
        }
    }
    replacedString(){
        return this.inputString.replaceAll('a','X') ;
    }
    objectRet(){
        const ans={
            reversed:this.reversed(),
            vowelCount:this.vowelCount(),
            isPalindrome:this.isPalindrome(),
            replacedString:this.replacedString()

        }
        console.log(ans);
    }


}
const obj=new stringManipulation('level');
 
 
 