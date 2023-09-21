'use strict';
var counter=0;
class Account{
    constructor(accountHolderName){
        this.accountNumber=++counter;
        this.accountHolderName=accountHolderName;
        this.balance=0;
    }
    deposit(amount){
        this.balance+=amount;
        console.log(`successfully deposited ${amount} in your account`);
        
    }
    withdraw(amount){
        if(amount>this.balance){
            console.log("insufficient balance");
        }
        else{
            this.balance-=amount;
        }
    }
}

class Bank   {
    constructor(bankName){         
        this.bankName=bankName;
        this.accounts=[];
    }
    createAccount(accountHolderName){
        let acc=new Account(accountHolderName);
        this.accounts.push(acc);
        return acc;
    }
    getAccountDetails(accountNumber){
        this.accounts.forEach(element => {
            if(element.accountNumber==accountNumber){
                console.log(`account number:${element.accountNumber} account holder name:${element.accountHolderName}  balance:${element.balance} `);
                return;
            }
            
            
            
        });
    }
    getAllAccounts(){
        this.accounts.forEach(element => {
            console.log(`account number:${element.accountNumber} account holder name:${element.accountHolderName}  balance:${element.balance} `);           
            
        });

    }
    totalBankBalance(){
        let totalBalance=0;
        this.accounts.forEach(element => {
            totalBalance+=element.balance;             
        });
        console.log(`totalBalance= ${totalBalance}`);

    }

}

const bank1=new Bank("axis");
const acc1=bank1.createAccount("ketan");
const acc2=bank1.createAccount("Rohit");

acc1.deposit(500);
acc2.deposit(1000);
acc1.deposit(1000000);

bank1.totalBankBalance();
bank1.getAccountDetails(2);
 
 
 
 


