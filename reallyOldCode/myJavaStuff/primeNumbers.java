//Finds all prime numbers between 1 and 1,000,000 assuming that 1, 2, 3, and 5 are not technically prime numbers

public class primeNumbers{
public static void main(String args[]){
var i, ii;
for(i = 5; i < 1000000; i++){
if(i%10 == 1 || i%10 == 3 || i%10 == 7 || i%10 == 9){
for(ii = 2; ii < i; ii++){
if(i % ii == 0){
ii = i + 100;
}else{
if(ii == i-1){
echo i . "</br>";
}
}
}
}
}

}
}
