public class converter{
public static String binary(double ee){

double aa = ee;
String ff = "";
int bb = 7;
int cc = 0;
boolean dd = false;

while(bb >= 0){

        if(aa - Math.pow(2,bb) >= 0 ){

aa = aa - Math.pow(2,bb);
                //System.out.print("1");
                ff += 1;
                bb--;

        }else{

                //System.out.print("0");
                ff += 0;
                bb--;

        }

}

return ff;

}
}
