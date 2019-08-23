 const appState = {};
      
      const formatAsMoney= (amount, buyerCountry)=>{
      const country = countries.find(item => item.country === buyerCountry);
       if(country){
         return amount.toLocaleString('en-'+country.code, {style: 'currency', currency: country.currency});
       }else{
         return amount.toLocaleString('en-US', {style: 'currency', currency: 'USD'})
       };   
    };
      
       //creating a flagIfInvalid function
      const flagIfInvalid = (field, isValid)=>
     { if(isValid){
       field.classList.remove('is-invalid');
     } 
      else{
         field.classList.add('is-invalid');
       }
     };    
      
      //create expirydateformatIsValid function
     const expiryDateFormatIsValid = (target) => { 
       const dateFormat = /^(0[1-9]|1[012])\/\d{2}$/
        return dateFormat.test(target);
     };
      
      
       //detecting card type
      const detectCardType= ({target})=>{
         console.log('Value:',target);
        if(target.value.startsWith('4')){
          document.querySelector('[data-credit-card]').classList.add('is-visa')
          
          document.querySelector('[data-credit-card]').classList.remove('is-mastercard');
          
          document.querySelector('[data-card-type]').src = supportedCards.visa;
          	return 'is-visa';
        }else if(target.value.startsWith('5')){
          document.querySelector('[data-credit-card]').classList.remove('is-visa');
          
          document.querySelector('[data-credit-card]').classList.add('is-mastercard');
          
          document.querySelector('[data-card-type]').src = supportedCards.mastercard;
          	return 'is-mastercard';
        }
      };
      
       //validate card expiry date
      const validateCardExpiryDate= ({target})=>{
              let bool = expiryDateFormatIsValid(target.value);
        
        if(bool){
          console.log('True:')
          let dateArr = target.value.split('/');
          const month = dateArr[0];
          const year = '20' + dateArr[1];
          const expDate = new Date(year + '-' + month + '-01');
          
          if(expDate > new Date()){
            flagIfInvalid(target,true);
            return true;
          }else{
            flagIfInvalid(target, false)
            return false;
          }
          
          //return false
        }else{
          flagIfInvalid(target, false)
          return false;
          console.log('False:')
        }
      };
      
       //validate card holder name
      const validateCardHolderName= ({target})=>{
         const nameRegexp = /^([a-zA-Z]{3,})\s([a-zA-Z]{3,})$/;
       if(nameRegexp.test(target.value)){
         flagIfInvalid(target, true);
         return true;
       }
       else{
         flagIfInvalid(target, false);
         return false;
       }
      };
      
      //Validate With Luhn
     const validateWithLuhn = (digits) => {
       let hasInvalidChars = digits.some(digit => {
          return (typeof digit !== 'number');
        });
        
        let hasValidChecksum = (digits => {
          let checksum = digits.reverse().map((digit, index) => {
            let computedDigit = digit;
            
            if((index + 1) % 2 === 0){
              computedDigit *= 2;
              if(computedDigit > 9){
                computedDigit -= 9;
              }
            }
            return computedDigit;
          }).reduce(((sum, digit) => {
            return sum + digit;
          }),0);
          return ((checksum % 10) === 0);
        })(digits);
        return (digits.length === 16) && !hasInvalidChars && hasValidChecksum;
     };
      
     //validate Card Number 
      const validateCardNumber = (digit) => {
        let values = '';
        document.querySelectorAll('[data-cc-digits] input').forEach(inputField=>{
          values += inputField.value
        })
        
        const digits = values.split('').map(value=>{
          return parseInt(value)
        })
        
        let isValidCardNumber = validateWithLuhn(digits)
        if(isValidCardNumber){
          document.querySelector('[data-cc-digits]').classList.remove('is-invalid')
        }else{
          document.querySelector('[data-cc-digits]').classList.add('is-invalid')
        }
        return isValidCardNumber;
      };
      
      //ui can Interact Function
      const uiCanInteract= ()=>{
        const dataCCDigits = document.querySelector('[data-cc-digits]')
        const dataFirstChild = dataCCDigits.firstElementChild
        dataFirstChild.addEventListener('blur', detectCardType)
        
        const dataCCInfo1 = document.querySelector('[data-cc-info]>:nth-child(1)')
        dataCCInfo1.addEventListener('blur', validateCardHolderName)
        
        const dataCCInfo2 = document.querySelector('[data-cc-info]>:nth-child(2)')
        dataCCInfo2.addEventListener('blur', validateCardExpiryDate)
        
        console.log('data-cc-digits',dataCCDigits)
        
        const dataPay = document.querySelector('button[data-pay-btn]')
        dataPay.addEventListener('click', validateCardNumber)
        dataFirstChild.focus();
      };
      
      //display cart Total
      const displayCartTotal= ({results}) =>{
        const [data] = results;
        const {itemsInCart, buyerCountry} = data;
        
        appState.items = itemsInCart;
        appState.country = buyerCountry;
        
        //using the .reduce function to calculate total bill and assign the calculated bill to appState.bill
        appState.bill = itemsInCart.reduce((total, item) =>{
          return total + (item.price * item.qty);
        },0);
        
          
        console.log('Bill',appState.bill)
        console.log('Bill',itemsInCart)
        console.log('Country',appState.country)
        
        appState.billFormatted = 
          formatAsMoney(appState.bill, appState.country);
        document.querySelector('[data-bill]').textContent = appState.billFormatted;
        uiCanInteract();
      };
      
      //Fetch Bill Function
      const fetchBill= () =>{
      const api= "https://randomapi.com/api/006b08a801d82d0c9824dcfdfdfa3b3c";
        fetch(api)
        .then (response => response.json())
        .then (data => displayCartTotal(data));  
        ".catch(error=>console.log(errors));"
      };
      
      const startApp = () => {
        fetchBill();
      };