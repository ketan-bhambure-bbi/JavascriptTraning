class stringManipulation{
    constructor(bool1,bool2){
        this.bool1=bool1;
        this.bool2=bool2;           
        this.objectRet();  
        
    }  
    andResult(){
        return this.bool1 && this.bool2;

    }
         
    orResult(){
        return this.bool1 || this.bool2;
        
    }

    notAndResult(){
        return !(this.bool1 && this.bool2);
       
         
    }
    notOrResult(){
        return !(this.bool1 || this.bool2);
        
    }
    objectRet(){
        const ans={
            andResult:this.andResult(),
            orResult: this.orResult(),
            notAndResult: this.notAndResult(),
            notOrResult: this.notOrResult()

        }
        console.log(ans);
    }


}
const obj=new stringManipulation(true,false);
 