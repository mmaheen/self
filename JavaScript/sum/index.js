num1 = parseInt(prompt ("Enter the 1st Number : "));
num2 = parseInt(prompt ("Enter the last Number : "));

var sum = 0;

for(var i = num1 ; i <= num2 ; i++){
    sum = sum +i;
}

document.write(sum);