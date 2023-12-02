function check(){
    
    var pwd = document.getElementById("pwd");
    var passwordStrength = document.getElementById("strength");

    var val = pwd.value;
    var l = val.length;

   if(l >=10){
        passwordStrength.textContent="Strength: STRONG";
        passwordStrength.style.color="Green";
   }else if(l <10 & l >= 5){
        passwordStrength.textContent="Strength: MEDIUM";
        passwordStrength.style.color="Orange";
   }else{
        passwordStrength.textContent="Strength: WEAK";
        passwordStrength.style.color="Red";
   }
}